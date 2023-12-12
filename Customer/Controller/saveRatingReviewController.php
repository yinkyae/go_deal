<?php

session_start();
$product_review = $_POST["Review"];
$product_rating =$_POST["Rating"];
$productId = $_POST["Product"];
$customer_id = $_SESSION["user_account"];



include "../Model/model.php";

$rating_review_sql = $pdo->prepare(
    "INSERT INTO t_product_rating_details(product_id,customer_id,rating_no,product_review) VALUES(:product_id,:customer_id,:rating_no,:product_review)"
);
$rating_review_sql->bindValue(":product_id",$productId);
$rating_review_sql->bindValue(":customer_id",$customer_id);
$rating_review_sql->bindValue(":rating_no",$product_rating);
$rating_review_sql->bindValue(":product_review",$product_review);

$rating_review_sql->execute();






?>