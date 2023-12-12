<?php 
session_start();

$product_id =$_POST["ProductId"];
$customer = $_SESSION["user_account"];


include "../Model/model.php";

$getWishlist = $pdo->prepare(
    "SELECT id FROM t_wishlist WHERE customer_id = :customerId AND del_flg = 0"
);
$getWishlist->bindValue(":customerId",$customer);
$getWishlist->execute();

$Wishlist_result = $getWishlist->fetchAll(PDO::FETCH_ASSOC);

$Wishlist_id = $Wishlist_result[0]["id"];


 $dekete_product = $pdo->prepare(
    "UPDATE t_wishlist_detail SET del_flg = 1 WHERE wishlist_id = :wishlistId AND product_id = :productId AND del_flg = 0"
);
$dekete_product->bindValue(":wishlistId",$Wishlist_id);
$dekete_product->bindValue(":productId",$product_id);
$dekete_product->execute();