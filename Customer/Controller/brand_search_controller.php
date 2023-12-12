<?php 

$search_text = $_POST["searchText"];

 include"../Model/model.php";
 

$sql = $pdo->prepare(

    "SELECT * FROM m_brand WHERE brand_name LIKE :searchText AND del_flg = 0"

);
$sql->bindValue(":searchText","%".$search_text."%");
$sql->execute();

$brand_result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($brand_result);



?>