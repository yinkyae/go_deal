<?php

// filter category controller with ajax 


$subCate_id = $_POST["subcate_id"];


include"../Model/model.php";

$sql = $pdo->prepare(
    " SELECT * FROM m_products WHERE p_sub_category = :sub_category AND del_flg = 0 "
    
);
$sql->bindValue(":sub_category",$subCate_id);
$sql->execute();
$subCateProductResult = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($subCateProductResult);




?>