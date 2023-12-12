<?php 


// user verified the code from mail  and lead to finish sign up to add user name
session_start();

 $user_code = $_GET["token"]; //user input code
 include "../Model/model.php";

 $sql = $pdo->prepare(

  "SELECT * FROM m_customers WHERE code = :verifycode AND del_flg = 0"

 );
 $sql->bindValue(":verifycode" , $user_code);
 $sql->execute();

 $resultcode = $sql->fetchAll(PDO::FETCH_ASSOC);

 



 if (count($resultcode) != 0){  
    
    $verifysql = $pdo->prepare(
        "UPDATE m_customers SET verify = 1 WHERE code = :verifycode AND del_flg = 0");

        $verifysql->bindValue(":verifycode",$user_code);

        $verifysql->execute();

        $_SESSION["user_account"] = $resultcode[0]["id"];

  
  header("Location: ../View/Registeration/finishSignup.php?");
 }

 

   



//  if($user_code == $verifyCode){
//    header("Location: ../Registeration/setpassword.php");
//  }else
//  {
//    // echo("Hello");
//  }





 //print_r($_SESSION["user_email"]);

?>