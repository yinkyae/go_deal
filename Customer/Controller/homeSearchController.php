<?php

$searchProduct = $_POST["SearchText"];



include "../Model/model.php";

$sql = $pdo -> prepare(
    "SELECT * FROM m_products WHERE p_title LIKE :productname AND del_flg = 0"
);

$sql -> bindValue(":productname", '%'.$searchProduct.'%');
$sql -> execute();

$search_product_result = $sql -> fetchAll(PDO::FETCH_ASSOC);

echo json_encode($search_product_result);



?>