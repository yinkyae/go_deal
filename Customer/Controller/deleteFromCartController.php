<?php 
session_start();

$product_id =$_POST["cart_productId"];
$customer = $_SESSION["user_account"];


include "../Model/model.php";

$getCart = $pdo->prepare(
    "SELECT id FROM t_cart WHERE customer_id = :customerId AND del_flg = 0"
);
$getCart->bindValue(":customerId",$customer);
$getCart->execute();

$Cart_result = $getCart->fetchAll(PDO::FETCH_ASSOC);

$cart_id = $Cart_result[0]["id"];

 $dekete_product = $pdo->prepare(
    "UPDATE t_cart_detail SET del_flg = 1 WHERE cart_id = :cartId AND product_id = :productId AND del_flg = 0"
);
$dekete_product->bindValue(":cartId",$cart_id);
$dekete_product->bindValue(":productId",$product_id);
$dekete_product->execute();

$del_get_cart_product = $pdo->prepare(
    "SELECT * FROM m_products LEFT JOIN t_cart_detail
     ON m_products.id =t_cart_detail.product_id
      WHERE t_cart_detail.cart_id = :cartID 
      AND t_cart_detail.del_flg = 0 AND m_products.del_flg = 0"
);

$del_get_cart_product->bindValue(":cartID",$cart_id);
$del_get_cart_product->execute();
$result_cart_product = $del_get_cart_product->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result_cart_product);
