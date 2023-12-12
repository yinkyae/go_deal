<?php


include "../../Model/model.php";
$sql = $pdo->prepare(
    "SELECT * FROM m_townships"

);

$sql->execute();

$townships= $sql->fetchAll(PDO::FETCH_ASSOC);

?>