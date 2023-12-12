<?php 

 $user = $_SESSION["user_account"];

 include "../Model/model.php";

 $get_review = $pdo->prepare(

    "SELECT * FROM t_product_rating_details
     LEFT JOIN m_products
     ON t_product_rating_details.product_id = m_products.id 
     WHERE customer_id = :customerId"
 );
 $get_review -> bindValue(":customerId",$user);
 $get_review ->execute();
  
 $get_reviewResult = $get_review ->fetchAll(PDO::FETCH_ASSOC);


?>