<?php

include"../Model/model.php";
 // just for you product f
$justforU_sql = $pdo->prepare(
    "SELECT * FROM m_products WHERE p_discount >= 1 AND del_flg = 0 LIMIT 8"

);
$justforU_sql->execute();
$justForU_result = $justforU_sql->fetchAll(PDO::FETCH_ASSOC);

$popular_sql = $pdo->prepare(
    "SELECT COUNT(product_id), product_id, p_title, m_products.id AS id, product_rating, p_sell_price, p_discount, p_des, p_photo_1
      FROM t_order_detail  LEFT JOIN m_products ON t_order_detail.product_id = m_products.id
      WHERE t_order_detail.del_flg = 0
   GROUP BY product_id ORDER BY COUNT(product_id) DESC LIMIT 8"
);

$popular_sql -> execute();

$popular_result = $popular_sql->fetchAll(PDO::FETCH_ASSOC);
// just for you product end


// new arrival product start
$newArrival_sql = $pdo->prepare(

    "SELECT * FROM m_products WHERE del_flg = 0 ORDER BY create_date DESC LIMIT 8"
);
$newArrival_sql->execute();
$newArrival_result = $newArrival_sql->fetchAll(PDO::FETCH_ASSOC);


// new arrival end



?>