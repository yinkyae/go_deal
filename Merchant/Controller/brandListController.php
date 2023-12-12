<?php

include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_brand"

);

$sql->execute();
$brands = $sql->fetchAll(PDO::FETCH_ASSOC);



?>