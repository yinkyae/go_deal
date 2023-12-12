<?php
include "../Model/model.php";

$userId = $_SESSION["user_account"];

$wish_sql = $pdo->prepare(

    "SELECT id FROM t_wishlist WHERE customer_id = :customerId AND del_flg = 0"
);

$wish_sql->bindValue(":customerId",$userId);
$wish_sql->execute();
$wish_result = $wish_sql->fetchAll(PDO::FETCH_ASSOC);


if( count($wish_result) != 0){
    $wishlist_id = $wish_result[0]["id"];

$wish_product_sql = $pdo ->prepare(
    "SELECT * FROM m_products LEFT JOIN t_wishlist_detail ON m_products.id = t_wishlist_detail.product_id WHERE wishlist_id = :wishListID AND t_wishlist_detail.del_flg = 0"
);
$wish_product_sql->bindValue(":wishListID", $wishlist_id );
$wish_product_sql->execute();
$wish_product_result = $wish_product_sql->fetchAll(PDO::FETCH_ASSOC);

} else $wishlist_id = null;



?>