<?php


include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_sub_category"

);

$sql->execute();
$subcategories = $sql->fetchAll(PDO::FETCH_ASSOC);



?>