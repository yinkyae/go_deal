<?php
include "../Model/model.php";

$subCategoryId = $_POST["subCategoryId"];

// echo $subCategoryId;
$sql = $pdo->prepare(
    "SELECT * FROM m_products WHERE del_flg = 0
    AND m_products.p_sub_category = :subCategoryId;"
);
$sql->bindValue(":subCategoryId",$subCategoryId);
$sql->execute();
$products = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($products);
?>