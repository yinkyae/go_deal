<?php

include "../../Model/model.php";

$sql = $pdo->prepare(
    "SELECT * FROM m_sub_category WHERE category_id = :selectedId"
);
$sql->bindValue(":selectedId",1);
$sql->execute();
$firstSubCategories = $sql->fetchAll(PDO::FETCH_ASSOC);

?>