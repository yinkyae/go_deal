<?php 
 

$cate_id = $_GET["category_id"];

if(isset($_GET["page"])){
    $page = $_GET["page"];
} else{
    $page = 1;
}

$product_limit = 8;
$page_start = ($page-1)*$product_limit;

$page_start = ($page_start<0)? 1: $page_start;


include "../Model/model.php";



$sql = $pdo->prepare( 
    "SELECT * FROM m_products WHERE p_category = :cateid AND del_flg = 0  " 
    );
    
    $sql->bindValue(":cateid",$cate_id);
    
    $sql->execute();
    
    $total_result = $sql->fetchAll(PDO::FETCH_ASSOC);

   
    $page_list = ceil ((count($total_result))/$product_limit);












$sql = $pdo->prepare( 
"SELECT * FROM m_products WHERE p_category = :cateid AND del_flg = 0 LIMIT $page_start, $product_limit " 
);

$sql->bindValue(":cateid",$cate_id);

$sql->execute();

$productresult = $sql->fetchAll(PDO::FETCH_ASSOC);



?>