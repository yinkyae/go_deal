<?php

include "../../Model/model.php";
$sql = $pdo->prepare(
    " SELECT * FROM t_order_detail
    "
);

$sql->execute();
$orders = $sql->fetchAll(PDO::FETCH_ASSOC);


?>