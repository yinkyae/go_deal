<?php
session_start();


if (($_GET["cartId"] != null)&&(isset($_GET["cartId"]))) {
    if (!isset($_SESSION["user_account"])) {
        header("Location: ../View/Registeration/signUp.php");
    } else {

        $customer_id =  $_SESSION["user_account"];
        $cart_id = $_GET["cartId"];

    

        $_SESSION["buy_cart"] = $cart_id;
        $_SESSION["buy_type"] = 2;

   

        include "../Model/model.php";

        $address_sql = $pdo->prepare(

            "SELECT c_address, c_township, c_region FROM m_customers WHERE id = :customerId AND del_flg = 0"

        );

        $address_sql->bindValue(":customerId", $customer_id);
        $address_sql->execute();
        $address_result = $address_sql->fetchAll(PDO::FETCH_ASSOC);


        if ((($address_result[0]["c_address"]) != null) &&
            (($address_result[0]["c_region"]) != null) &&
            (($address_result[0]["c_township"]) != 0)
        ) {

            header("Location: ../View/checkout.php");
        }else{
            header("Location: ../View/addAddress.php");
        }
    }
} else {
    header("Location: ../View/errorshow.php");
}