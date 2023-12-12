<?php

session_start();


    $user_id = $_SESSION["user_account"];
    $product_id = $_POST["ProductId"];


    include "../Model/model.php";
    // check user had cart or not
    $sql1 = $pdo->prepare(

        "SELECT t_cart.id FROM t_cart LEFT JOIN t_cart_detail ON t_cart.id = t_cart_detail.cart_id WHERE t_cart.customer_id = :user AND t_cart.del_flg = 0 AND t_cart_detail.del_flg = 0"
    );
    $sql1->bindValue(":user", $user_id);
    $sql1->execute();
    $userResult = $sql1->fetchAll(PDO::FETCH_ASSOC);
    


    if (count($userResult) != 0) {

        $cart_id = $userResult[0]["id"];

        // check if product is already added to cart or not

        $pcheck_sql = $pdo->prepare("SELECT * FROM t_cart_detail WHERE cart_id = :cartId AND product_id = :productId AND del_flg = 0");
        $pcheck_sql->bindValue(":cartId", $cart_id);
        $pcheck_sql->bindValue(":productId", $product_id);
        $pcheck_sql->execute();
        $pcheck_result = $pcheck_sql->fetchAll(PDO::FETCH_ASSOC);

        if (count($pcheck_result) != 0) {

           echo ("already Exit");

        } else {
            // insert products into already exists cart 

            $sql2 = $pdo->prepare(
                "INSERT INTO t_cart_detail( 
                cart_id,
                product_id
            ) VALUES
            (
                :cartId,
                :productId

            )"
            );
            $sql2->bindValue(":cartId", $cart_id);
            $sql2->bindValue(":productId", $product_id);
            $sql2->execute();

            echo("done");

        }  // insert products into already exists cart finished
    } else {        
                // create a cart for a new user and insert product 
        $sql3 = $pdo->prepare(

            "INSERT INTO t_cart(customer_id) VALUES (:customerId)"

        );

        $sql3->bindValue(":customerId", $user_id);
        $sql3->execute();


        $sql4 = $pdo->prepare(

            "SELECT id FROM t_cart WHERE customer_id = :user AND del_flg = 0"
        );

        $sql4->bindValue(":user", $user_id);
        $sql4->execute();
        $userResult2 = $sql4->fetchAll(PDO::FETCH_ASSOC);


        $cart_id2 = $userResult2[0]["id"];


        $sql5 = $pdo->prepare(
            "INSERT INTO t_cart_detail( 
                cart_id,
                product_id
            ) VALUES
            (
                :cartId,
                :productId

            )"
        );
        $sql5->bindValue(":cartId", $cart_id2);
        $sql5->bindValue(":productId", $product_id);
        $sql5->execute();

        echo("done");
    }

?>
