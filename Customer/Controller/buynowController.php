<?php
session_start();


if (($_POST["productid"] != null)&&(isset($_POST["productid"]))) {
    if (!isset($_SESSION["user_account"])) {
        header("Location: ../View/Registeration/signUp.php");
    } else {

        $customer_id =  $_SESSION["user_account"];
        $product_id = $_POST["productid"];
        $product_qty = $_POST["quantity"];

        $_SESSION["buy_product"] = $product_id;
        $_SESSION["buy_type"] = 1;
        $_SESSION["product_qty"]= $product_qty;

        include "../Model/model.php";

        $address_sql = $pdo->prepare(

            "SELECT c_address, c_township, c_region FROM m_customers WHERE id = :customerId and del_flg = 0"

        );

        $address_sql->bindValue(":customerId", $customer_id);
        $address_sql->execute();
        $address_result = $address_sql->fetchAll(PDO::FETCH_ASSOC);

        echo "<pre>";
        print_r($address_result);

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
