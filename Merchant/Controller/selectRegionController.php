<?php
$received = $_POST["selectedRegionId"];
// echo $received;
include "../Model/model.php";
$sql = $pdo->prepare(
    "SELECT * FROM m_townships WHERE region_id = :selectedId"

);
$sql->bindValue(":selectedId",$received);
$sql->execute();

$townships= $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($townships);

?>