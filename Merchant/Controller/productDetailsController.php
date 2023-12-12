<?php
session_start();
// print_r($_GET);
// if (count($_POST) == 0) {
//     header("Location: ../View/errors/error.php");
// }

$id = $_GET["id"];
// print_r($id);
include "../../Model/model.php";
// if (!isset($id)) {
//     header("Location: ../View/errors/error.php");
// } else {
// For category name
$sql = $pdo->prepare(
    " SELECT * FROM m_products INNER JOIN m_category ON m_products.p_category = m_category.id
        WHERE m_products.id = :id"
);
$sql->bindValue(":id", $id);
$sql->execute();



$productCat = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo"<pre>";
// print_r($ppro);

//    for subcategory name
$sql = $pdo->prepare(
    " SELECT * FROM m_products INNER JOIN m_sub_category ON m_products.p_sub_category = m_sub_category.id
    WHERE m_products.id = :id"
);
$sql->bindValue(":id", $id);
$sql->execute();



$productSubcat = $sql->fetchAll(PDO::FETCH_ASSOC);

// for brand
$sql = $pdo->prepare(
    " SELECT * FROM m_products INNER JOIN m_brand ON m_products.p_brand = m_brand.id
    WHERE m_products.id = :id"
);
$sql->bindValue(":id", $id);
$sql->execute();
$productBrand = $sql->fetchAll(PDO::FETCH_ASSOC);
// for product
$sql = $pdo->prepare(
    " SELECT * FROM m_products 
    WHERE id = :id"
);
$sql->bindValue(":id", $id);
$sql->execute();
$product = $sql->fetchAll(PDO::FETCH_ASSOC);

// for product rating no of customer
$sql = $pdo->prepare(
    " SELECT COUNT(customer_id) FROM t_product_rating_details
    WHERE product_id = :id"
);
$sql->bindValue(":id", $id);
$sql->execute();
$ratingCustomer = $sql->fetchAll(PDO::FETCH_ASSOC);

// for product rating no of 5star customer
$sql = $pdo->prepare(
    " SELECT COUNT(customer_id) FROM t_product_rating_details
WHERE product_id = :id AND t_product_rating_details . rating_no = 5"
);
$sql->bindValue(":id", $id);
$sql->execute();
$fivestarCustomer = $sql->fetchAll(PDO::FETCH_ASSOC);
// for product rating no of 4star customer
$sql = $pdo->prepare(
    " SELECT COUNT(customer_id) FROM t_product_rating_details
WHERE product_id = :id AND t_product_rating_details . rating_no = 4"
);
$sql->bindValue(":id", $id);
$sql->execute();
$fourstarCustomer = $sql->fetchAll(PDO::FETCH_ASSOC);
// for product rating no of 3star customer
$sql = $pdo->prepare(
    " SELECT COUNT(customer_id) FROM t_product_rating_details
WHERE product_id = :id AND t_product_rating_details . rating_no = 3"
);
$sql->bindValue(":id", $id);
$sql->execute();
$threestarCustomer = $sql->fetchAll(PDO::FETCH_ASSOC);
// for product rating no of 2star customer
$sql = $pdo->prepare(
    " SELECT COUNT(customer_id) FROM t_product_rating_details
WHERE product_id = :id AND t_product_rating_details . rating_no = 2"
);
$sql->bindValue(":id", $id);
$sql->execute();
$twostarCustomer = $sql->fetchAll(PDO::FETCH_ASSOC);
// for product rating no of 1star customer
$sql = $pdo->prepare(
    " SELECT COUNT(customer_id) FROM t_product_rating_details
WHERE product_id = :id AND t_product_rating_details . rating_no = 1"
);
$sql->bindValue(":id", $id);
$sql->execute();
$onestarCustomer = $sql->fetchAll(PDO::FETCH_ASSOC);

// for product review customers
$sql = $pdo->prepare(
    " SELECT * FROM t_product_rating_details INNER JOIN m_customers ON t_product_rating_details.customer_id = m_customers.id
WHERE product_id = :id"
);
$sql->bindValue(":id", $id);
$sql->execute();
$customers = $sql->fetchAll(PDO::FETCH_ASSOC);

