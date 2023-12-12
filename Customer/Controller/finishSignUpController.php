<?php 
   // user finish the sing up steps and lead to home page 
   session_start();



  $user_id= $_SESSION["user_account"];
  $fin_signUp_username = $_POST["username"];


  
   if($fin_signUp_username != null){

    include "../Model/model.php";
    $sql= $pdo->prepare(
  
      "UPDATE m_customers SET c_name = :customername WHERE id = :userId AND del_flg = 0"  
    );

    $sql ->bindValue(":customername",$fin_signUp_username);
    $sql ->bindValue(":userId",$user_id);
    $sql ->execute();

   }


  header("Location: ../View/homepage.php?");


?>