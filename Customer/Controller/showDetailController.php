<?php

$show_product_id = $_POST["ProductId"];

include "../Model/model.php";

$show_product_sql = $pdo->prepare(
    "SELECT * FROM m_products WHERE id = :productId"
);
$show_product_sql->bindValue(":productId",$show_product_id);
$show_product_sql->execute();
$resultProduct = $show_product_sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultProduct);



?>