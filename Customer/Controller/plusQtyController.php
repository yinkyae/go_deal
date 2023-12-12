<?php 
session_start();

$product_id =$_POST["cart_productId"];
$customer = $_SESSION["user_account"];
$product_quantity = $_POST["products_quantity"];

include "../Model/model.php";

$getCart = $pdo->prepare(
    "SELECT id FROM t_cart WHERE customer_id = :customerId AND del_flg = 0"
);
$getCart->bindValue(":customerId",$customer);
$getCart->execute();

$Cart_result = $getCart->fetchAll(PDO::FETCH_ASSOC);

$cart_id = $Cart_result[0]["id"];

 $addproduct_qty = $pdo->prepare(
    "UPDATE t_cart_detail SET qty = :product_quantity WHERE cart_id = :cartId AND product_id = :productId AND del_flg = 0"
);
$addproduct_qty->bindValue(":product_quantity",$product_quantity);
$addproduct_qty->bindValue(":cartId",$cart_id);
$addproduct_qty->bindValue(":productId",$product_id);

$addproduct_qty->execute();

$getfrom_cart_sql = $pdo->prepare(

    "SELECT * FROM t_cart_detail LEFT JOIN m_products
     ON t_cart_detail.product_id = m_products.id 
     WHERE t_cart_detail.cart_id =:cartId AND product_id =:productId AND t_cart_detail.del_flg = 0 AND m_products.del_flg = 0 "
);
$getfrom_cart_sql->bindValue(":cartId",$cart_id);
$getfrom_cart_sql->bindValue(":productId",$product_id);
$getfrom_cart_sql->execute();
$getCartdetail_result = $getfrom_cart_sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($getCartdetail_result);



?>