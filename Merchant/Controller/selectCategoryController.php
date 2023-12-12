<?php
$received = $_POST["selectedCategoryId"];
// echo $received;
include "../Model/model.php";
$sql = $pdo->prepare(
    "SELECT * FROM m_sub_category WHERE category_id = :selectedId"

);
$sql->bindValue(":selectedId",$received);
$sql->execute();

$subcategory= $sql->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($subcategory);

?>