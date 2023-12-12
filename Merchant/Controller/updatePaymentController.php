<?php

// middleware check
// include "./middleware/loginCheck.php";

include "../../Model/model.php";

$sql = $pdo->prepare(

    "SELECT * FROM m_pay_acc WHERE del_flg =0"
);

$sql->execute();
$paymentaccs = $sql->fetchAll(PDO::FETCH_ASSOC);

?>