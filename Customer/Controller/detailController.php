<?php 

$product_id = $_GET["productid"];



include "../Model/model.php";

$sql=$pdo->prepare(

    "SELECT * FROM m_products  WHERE id = :productid AND del_flg = 0"
);

// get product details

$sql->bindValue(":productid",$product_id);
$sql->execute();
$productDetail_result = $sql->fetchAll(PDO::FETCH_ASSOC);

$product_rating_no = $productDetail_result[0]["product_rating"];

$product_category = $productDetail_result[0]["p_category"];




// get product from the same category for you may also like section
$cateProductsql=$pdo->prepare(

    "SELECT * FROM m_products  WHERE p_category = :productcategory AND del_flg = 0"
    );
    $cateProductsql->bindValue(":productcategory",$product_category);
    $cateProductsql->execute();
    $category_result = $cateProductsql->fetchAll(PDO::FETCH_ASSOC);

// get product reviews from customer

    $reviewsql=$pdo->prepare(

        "SELECT * FROM m_customers LEFT JOIN t_product_rating_details 
        ON m_customers.id = t_product_rating_details.customer_id 
        WHERE t_product_rating_details.product_id = :product_id AND m_customers.del_flg = 0 AND t_product_rating_details.del_flg = 0 LIMIT 1"
    );
    $reviewsql -> bindValue(":product_id",$product_id);
    $reviewsql -> execute();
    $review_result = $reviewsql->fetchAll(PDO::FETCH_ASSOC);

   
    $reviewsql_all=$pdo->prepare(

        "SELECT * FROM m_customers LEFT JOIN t_product_rating_details 
        ON m_customers.id = t_product_rating_details.customer_id 
        WHERE t_product_rating_details.product_id = :product_id AND m_customers.del_flg = 0 AND t_product_rating_details.del_flg = 0"
    );
    $reviewsql_all -> bindValue(":product_id",$product_id);
    $reviewsql_all -> execute();
    $review_result_all = $reviewsql_all->fetchAll(PDO::FETCH_ASSOC);



?>