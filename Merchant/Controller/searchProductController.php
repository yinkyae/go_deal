




<?php
// $received = $_POST["searchText"];

// echo $received;
// middleware check
// include "./middleware/loginCheck.php";

include "../Model/model.php";
$searchName = $_POST["searchText"];
$sql = $pdo->prepare(

    "SELECT * FROM m_products WHERE del_flg =0
    AND m_products . p_title LIKE :search
    "
);
$sql->bindValue(":search","%".$searchName."%");
$sql->execute();
$products = $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($products);

?>