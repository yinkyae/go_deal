<?php

$received = $_POST["dateVal"];

// echo $received;

include "../Model/model.php";

$sql = $pdo->prepare(
    "SELECT t_order.id,m_products.p_title,m_products.p_photo_1, t_order.total_amt, m_products.p_sell_price AS unit_price, m_products.p_detail, t_order_detail.qty, m_customers.c_name,
    m_customers.c_phone, m_townships.name As town, m_regions.name As reg,
    t_order.payment, t_order.payment_no, t_order.address
    FROM m_products 
    JOIN t_order_detail ON m_products.id = t_order_detail.product_id 
    JOIN t_order ON t_order.id = t_order_detail.order_id
    JOIN m_customers ON m_customers.id = t_order.customer_id
    JOIN m_townships ON m_townships.id = t_order.township
    JOIN m_regions ON m_regions.id = t_order.region WHERE t_order.order_receive_date =:received
    "
);

$sql->bindValue(":received", $received);
$sql->execute();
$noOfProducts = $sql->fetchAll(PDO::FETCH_ASSOC);

$products=[];
for ($i=0; $i < count($noOfProducts); $i++) { 
    if (!in_array($noOfProducts[$i]["id"],$products))
    array_push($products,$noOfProducts[$i]["id"]);

}
// print_r($products);
$productsTemp =[];
for ($i=0; $i < count($products); $i++) { 
    $productsTempTwo=[];
    for ($j=0; $j < count($noOfProducts) ; $j++) { 
        if ($products[$i] == $noOfProducts[$j]["id"])
        array_push($productsTempTwo,$noOfProducts[$j]);
    }
    array_push($productsTemp,$productsTempTwo);

}
echo json_encode($productsTemp);
// $orders = [];
// array_push($orders,$productsTemp);
// array_push($orders,$products);
// echo json_encode({ "prodTemp" : $productsTemp,
//     "prods" : $products});

?>