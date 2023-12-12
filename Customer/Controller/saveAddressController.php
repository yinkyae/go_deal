<?php 
    
    session_start();
    $customer = $_SESSION["user_account"];

       print_r($_POST);
       $user_name = $_POST["full_name"];
       $address = $_POST["address"];
       $region = $_POST["region"];
       $township = $_POST["township"];
       $phone_number = $_POST["phone_number"];


       include "../Model/model.php";

       $saveAddress_sql = $pdo->prepare(

        "UPDATE m_customers SET
         c_name = :customername,
         c_phone = :phoneNum,
          c_address = :customerAddress,
          c_township = :customerTownship,
          c_region = :customerRegion
          
          WHERE id = :customerId  
          " );

        $saveAddress_sql->bindValue(":customername", $user_name);
        $saveAddress_sql->bindValue(":phoneNum", $phone_number);
        $saveAddress_sql->bindValue(":customerAddress", $address);
        $saveAddress_sql->bindValue(":customerTownship", $township);
        $saveAddress_sql->bindValue(":customerRegion", $region);
        $saveAddress_sql->bindValue(":customerId", $customer);

        $saveAddress_sql ->execute();


        header("Location: ../View/checkout.php");
        

       
?>