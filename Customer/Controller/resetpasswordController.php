<?php 
session_start();

 $resetcode =$_SESSION["userverified"];
 $password = $_POST["new_password"];
 $retype_password = $_POST["retype_password"];

 include "../Model/model.php";

 if( $password ==  $retype_password ){ 

   echo("hello");

    $sql = $pdo->prepare(
   
       "UPDATE m_customers SET c_password = :userpassword WHERE id = :userId AND del_flg = 0"
    );
   
    $sql -> bindValue(":userpassword", password_hash($password,PASSWORD_DEFAULT) );
    $sql -> bindValue(":userId",$resetcode );
    $sql -> execute();

    $_SESSION["user_account"]=$resetcode;


    header("Location: ../View/homepage.php");

   

 }





?>