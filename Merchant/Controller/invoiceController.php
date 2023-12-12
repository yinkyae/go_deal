<?php
include "../Model/model.php";
session_start();
 $id = $_GET["id"];
//  print_r($id);


$sql = $pdo->prepare(
    " SELECT t_order.invoice_date, t_order_detail.product_id As productId, m_products.p_stock, m_customers.c_email, m_products.p_sell_price, t_order.id,m_products.p_title, t_order.total_amt, m_products.p_sell_price AS unit_price, m_products.p_detail, t_order_detail.qty, m_customers.c_name,
    m_customers.c_phone, m_townships.name As town, m_regions.name As reg,
    t_order.payment, t_order.payment_no, t_order.address, t_order.order_done
    FROM m_products 
    JOIN t_order_detail ON m_products.id = t_order_detail.product_id 
    JOIN t_order ON t_order.id = t_order_detail.order_id
    JOIN m_customers ON m_customers.id = t_order.customer_id
    JOIN m_townships ON m_townships.id = t_order.township
    JOIN m_regions ON m_regions.id = t_order.region WHERE t_order.id = :id
    "
);

$sql->bindValue(":id", $id);
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
$_SESSION["invoice"] = $productsTemp;


// $sql = $pdo->prepare(
//     "SELECT * FROM m_merchants"

// );

// $sql->execute();
// $_SESSION["merchant"] = $sql->fetchAll(PDO::FETCH_ASSOC);


// print("<pre>");
// print_r($mer);

header("Location: ../View/Orders/invoice.php");


?>