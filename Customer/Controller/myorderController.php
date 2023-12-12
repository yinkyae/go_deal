<?php 



if(isset($_SESSION["user_account"])){
    $user = $_SESSION["user_account"];

    include "../Model/model.php";

    $_get_user_order = $pdo->prepare(
        "SELECT * FROM t_order WHERE customer_id = :customerId"
    );
    $_get_user_order->bindValue(":customerId",$user);
    $_get_user_order->execute();

    $_get_user_order_result = $_get_user_order->fetchAll(PDO::FETCH_ASSOC);
  

    // }
}else
echo("hello");



?>