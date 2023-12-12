<?php
session_start();
// print_r($_POST);

if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
}
if (!isset($_POST["subcatadd"])) {
    header("Location: ../View/errors/error.php");
}
$catname = $_SESSION["catname"] ;
include "../Model/model.php";
$sql = $pdo->prepare(
        "SELECT id FROM m_category WHERE cat_name=:catname"
    );
    $sql->bindValue(":catname",$catname);
    $sql->execute();

    $resultId = $sql->fetchAll(PDO::FETCH_ASSOC);
    print_r($resultId);

    $subcatname =$_POST["subcatname"];
    
    $sql = $pdo->prepare(
        " INSERT INTO m_sub_category
    (
        category_id,
        sub_category_name,
        create_date
    )
    VALUES
    (
        :categoryid,
        :subcategoryname,
        :createdate

    )
    "

    );
    $sql->bindValue(":categoryid", $resultId[0]["id"]);
    $sql->bindValue(":subcategoryname", $subcatname);

    $sql->bindValue(":createdate", date("Y-m-d"));
    


$sql->execute(); 


//     
//    
    if(isset($_POST["subcatadd"])){
        header("Location: ../View/Products/subCategoryAdd.php");
    }else{
        header("Location: ../View/Products/addProduct.php");
    }
   

