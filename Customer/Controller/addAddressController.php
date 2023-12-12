<?php

// echo("<pre>");
// print_r($_POST);
$data = $_POST;
$datastring = serialize($data);
// echo ($datastring);

// $product_ids = json_decode($_POST["product_id"],true);
// $qtys = json_decode($_POST["qty"],true);
// $amounts = json_decode($_POST["amount"],true);
// print_r($product_ids);

// for ($i=0; $i < count($product_ids); $i++) { 
//     echo ($product_ids[$i]["item_no_$i"]);
//     echo ($qtys[$i]["item_no_$i"]);
//     echo ($amounts[$i]["item_no_$i"]);
// }

include "../Model/model.php";


$sql = $pdo->prepare(
    "SELECT * FROM m_regions WHERE del_flg = 0"
    );
        
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql2 = $pdo->prepare(
    "SELECT m_townships.name, m_townships.id FROM m_townships JOIN m_regions ON m_regions.id = m_townships.region_id WHERE m_regions.id = 1"
    );
        
$sql2->execute();
        
$result_townships = $sql2->fetchAll(PDO::FETCH_ASSOC);


?>