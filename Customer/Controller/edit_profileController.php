<?php

if(isset($_POST["change_info"])){
    session_start();

    $customer = $_SESSION["user_account"];

       print_r($_POST);
       echo "<pre>";
       print_r($_FILES);
       $user_name = $_POST["user_name"];
       $address = $_POST["user_address"];
       $region = $_POST["user_region"];
       $township = $_POST["user_township"];
       $phone_number = $_POST["user_phone"];
       $user_email = $_POST["user_email"];

        $photo_name = $_FILES["user_photo"]["name"];
        $photo_temp = $_FILES["user_photo"]["tmp_name"];
       
    if ((move_uploaded_file($photo_temp,"../../Storage/customerProfile/".$photo_name))){

       include "../Model/model.php";

       $changeInfo = $pdo->prepare(

        "UPDATE m_customers SET
          c_name = :customername,
          c_phone = :phoneNum,
          c_email = :customerEmail,
          c_address = :customerAddress,
          c_township = :customerTownship,
          c_region = :customerRegion,
          c_profile = :customerPhoto

          WHERE id = :customerId  
          " );

        $changeInfo->bindValue(":customername", $user_name);
        $changeInfo->bindValue(":phoneNum", $phone_number);
        $changeInfo->bindValue(":customerEmail", $user_email);
        $changeInfo->bindValue(":customerAddress", $address);
        $changeInfo->bindValue(":customerTownship", $township);
        $changeInfo->bindValue(":customerRegion", $region);
        $changeInfo->bindValue(":customerId", $customer);
        $changeInfo->bindValue(":customerPhoto", "Storage/customerProfile/". $photo_name);
        $changeInfo ->execute();

       header("Location: ../View/userProfile.php");

       }  else{
        header("Location: ../View/errorshow.php");
       }     
}
 ?>