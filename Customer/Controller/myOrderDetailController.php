<?php 

 $order_id = $_GET["order_id"];

 include "../Model/model.php";


        $_order_detail = $pdo->prepare(
            "SELECT * FROM t_order_detail LEFT JOIN m_products ON m_products.id = t_order_detail.product_id WHERE order_id = :orderId"
        );
        $_order_detail->bindValue(":orderId",$order_id);
        $_order_detail->execute();

        $_order_detail_result = $_order_detail->fetchAll(PDO::FETCH_ASSOC);

?>