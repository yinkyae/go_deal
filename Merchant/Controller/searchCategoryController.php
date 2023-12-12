<?php
// $received = $_POST["searchText"];

// echo $received;
// middleware check
// include "./middleware/loginCheck.php";

include "../Model/model.php";
$categoryId = $_POST["categoryId"];
$sql = $pdo->prepare(

    "SELECT * FROM m_products WHERE del_flg =0
    AND m_products . p_category = :categoryId
    "
);
$sql->bindValue(":categoryId",$categoryId);
$sql->execute();
$products = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($products);

?>