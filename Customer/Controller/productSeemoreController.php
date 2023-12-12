<?php

include"../Model/model.php";
 // just for you product f
$justforU_all_sql = $pdo->prepare(
    "SELECT * FROM m_products WHERE p_discount >= 1 AND del_flg = 0 "

);
$justforU_all_sql->execute();
$justForU_all_result = $justforU_all_sql->fetchAll(PDO::FETCH_ASSOC);

$popular_all_sql = $pdo->prepare(
    "SELECT COUNT(product_id), product_id, p_title, m_products.id AS id, product_rating, p_sell_price, p_discount, p_des, p_photo_1
    FROM t_order_detail  LEFT JOIN m_products ON t_order_detail.product_id = m_products.id
    WHERE t_order_detail.del_flg = 0
 GROUP BY product_id ORDER BY COUNT(product_id) DESC"
);

$popular_all_sql -> execute();

$popular_all_result = $popular_all_sql->fetchAll(PDO::FETCH_ASSOC);

// just for you product end


// new arrival product start
$newArrival_all_sql = $pdo->prepare(
    "SELECT * FROM m_products WHERE del_flg = 0 ORDER BY create_date DESC "
);
$newArrival_all_sql->execute();
$newArrival_all_result = $newArrival_all_sql->fetchAll(PDO::FETCH_ASSOC);


// new arrival end



?>