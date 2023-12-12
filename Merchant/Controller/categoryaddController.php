<?php
session_start();
print_r($_POST);

if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
}
if (!isset($_POST["catadd"])) {
    header("Location: ../View/errors/error.php");
}
$catname = $_POST["catname"];
// $subcatname = $_POST["subcatname"];

include "../Model/model.php";
$sql = $pdo->prepare(
    "SELECT * FROM m_category WHERE cat_name = :catname"

);
$sql->bindValue(":catname",$catname);
$sql->execute();
 
$sameCat = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($sameCat) == 0){

    $sql = $pdo->prepare(
        " INSERT INTO m_category
    (
        cat_name,
        create_date
    )
    VALUES
    (
        :catname,
        :createdate

    )
    "

    );
    $sql->bindValue(":catname", $catname);
    $sql->bindValue(":createdate", date("Y-m-d"));


    $sql->execute();
    $_SESSION["catname"] = $catname;
    // $sql = $pdo->prepare(
    //     "SELECT * FROM m_category WHERE =:email"
    // );
    // $sql->bindValue(":email",$email);
    // $sql->execute();

    // $resultEmail = $sql->fetchAll(PDO::FETCH_ASSOC);

    
    header("Location: ../View/Products/subCategoryAdd.php");
    }else{
        header("Location: ../View/Products/sameCategoryAlert.php");
    }

