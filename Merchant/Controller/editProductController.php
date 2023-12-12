<?php
session_start();
// print_r($_GET);
// if (count($_POST) == 0) {
//     header("Location: ../View/errors/error.php");
// }

$id = $_GET["id"];
print_r($id);
include "../Model/model.php";
if (!isset($id)) {
    header("Location: ../View/errors/error.php");
} else {
// For category name
    $sql = $pdo->prepare(
        " SELECT * FROM m_products INNER JOIN m_category ON m_products.p_category = m_category.id
        WHERE m_products.id = :id"
    );
    $sql->bindValue(":id", $id);
    $sql->execute();



    $_SESSION["productCat"] = $sql->fetchAll(PDO::FETCH_ASSOC);

    // echo"<pre>";
    // print_r($ppro);

//    for subcategory name
    $sql = $pdo->prepare(
        " SELECT * FROM m_products INNER JOIN m_sub_category ON m_products.p_sub_category = m_sub_category.id
    WHERE m_products.id = :id"
    );
    $sql->bindValue(":id", $id);
    $sql->execute();


    
    $_SESSION["productSubcat"] = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo"<pre>";
    print_r($psub);

    $sql = $pdo->prepare(
        " SELECT * FROM m_products INNER JOIN m_brand ON m_products.p_brand = m_brand.id
    WHERE m_products.id = :id"
    );
    $sql->bindValue(":id", $id);
    $sql->execute();


    
    $_SESSION["productBrand"] = $sql->fetchAll(PDO::FETCH_ASSOC);

    $sql = $pdo->prepare(
        " SELECT * FROM m_products
    WHERE id = :id"
    );
    $sql->bindValue(":id", $id);
    $sql->execute();


    
    $_SESSION["product"] = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    header("Location: ../View/Products/editProduct.php");
}
?>