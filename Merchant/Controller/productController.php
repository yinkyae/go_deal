<?php

// middleware check
// include "./middleware/loginCheck.php";

include "../../Model/model.php";

$sql = $pdo->prepare(

    "SELECT * FROM m_products WHERE del_flg =0"
);

$sql->execute();
$products = $sql->fetchAll(PDO::FETCH_ASSOC);

?>
