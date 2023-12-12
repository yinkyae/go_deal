<?php


// include "../Controller/common/commonFunction.php";
include "../../Model/model.php";
// if (!isset($id)) {
//     header("Location: ../View/errors/error.php");
// } else {






// for product review customers
$sql = $pdo->prepare(
    " SELECT * FROM t_product_rating_details INNER JOIN m_customers ON t_product_rating_details.customer_id = m_customers.id
    LIMIT 5"
);
// $sql->bindValue(":id", $id);
$sql->execute();
$reviews = $sql->fetchAll(PDO::FETCH_ASSOC);

// for top products
$sql = $pdo->prepare(
    "SELECT product_id, noOfOrders,m_products.p_photo_1, m_products.p_title, m_products.p_stock, m_products.p_sell_price, totalQty
    FROM (SELECT SUM(qty) As totalQty, product_id, COUNT(order_id) As noOfOrders FROM t_order_detail
    JOIN t_order ON t_order_detail.order_id = t_order.id
    WHERE t_order.order_done=1 GROUP BY t_order_detail.product_id) aa
    JOIN m_products ON m_products.id = product_id
    ORDER By totalQty DESC LIMIT 5"
);

$sql->execute();
$tops = $sql->fetchAll(PDO::FETCH_ASSOC);

//for total sales
$sql = $pdo->prepare(
    "SELECT SUM(t_order.total_amt)
    FROM t_order WHERE t_order.order_done = 1"
);

$sql->execute();
$totalSales = $sql->fetchAll(PDO::FETCH_ASSOC);

//for revenue and orders
$sql = $pdo->prepare(
    "SELECT COUNT(t_order.id) As orders, t_order.total_amt As revenue
    FROM t_order WHERE t_order.order_done = 1 GROUP By
    MONTH(t_order.order_receive_date),
    YEAR(t_order.order_receive_date);
    "
);

$sql->execute();
$revAndOrders = $sql->fetchAll(PDO::FETCH_ASSOC);
//for sales by Category
$sql = $pdo->prepare(
    "SELECT category, sumCat As Sales FROM
    (SELECT t_order_detail.product_id, t_order_detail.qty, t_order_detail.amt, m_category.id As catId,
    m_category.cat_name As category,
     t_order.id, t_order.order_done, t_order_detail.qty * t_order_detail.amt As qtyAmt,
     SUM(t_order_detail.qty * t_order_detail.amt) As sumCat, SUM(qty) As totalQty
         FROM t_order_detail
         JOIN t_order ON t_order.id = t_order_detail.order_id                                        
         JOIN m_products ON m_products.id = t_order_detail.product_id 
         JOIN m_category ON m_category.id = m_products.p_category WHERE t_order.order_done = 1 GROUP By catId) bb
    "
);

$sql->execute();
$salesByCat = $sql->fetchAll(PDO::FETCH_ASSOC);


?>