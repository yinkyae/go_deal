<?php
$received = $_POST["selectedBrandId"];
// echo $received;
include "../Model/model.php";
$sql = $pdo->prepare(
    "SELECT * FROM m_brand WHERE id = :selectedId"

);
$sql->bindValue(":selectedId",$received);
$sql->execute();

$brand= $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($brand);

?>