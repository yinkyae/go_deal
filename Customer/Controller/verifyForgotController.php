<?php 
session_start();

// verify code from email (forgot password)

$user_code = $_GET["token"];


echo($user_code);
include "../Model/model.php"; 




$sql = $pdo->prepare(

    "SELECT * FROM m_customers WHERE code = :verifyCode AND del_flg = 0"

);
$sql->bindValue(":verifyCode",$user_code);
$sql->execute();



  $resultCode = $sql->fetchAll(PDO::FETCH_ASSOC);

  echo($resultCode);

 if(count($resultCode)!= 0){

        $_SESSION["userverified"] = $resultCode[0]["id"];

    header("Location: ../View/Registeration/resetpassword.php");

 }



?>