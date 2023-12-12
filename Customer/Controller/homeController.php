<?php

include "../Model/model.php";


$sql = $pdo->prepare(
"SELECT * FROM m_category WHERE del_flg = 0
"
);

$sql-> execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

