<?php

include "../Model/model.php";

$herosection_sql = $pdo->prepare(
    "SELECT * FROM m_hero WHERE del_flg = 0"
);
$herosection_sql->execute();
$herosection_result = $herosection_sql->fetchAll(PDO::FETCH_ASSOC);


?>