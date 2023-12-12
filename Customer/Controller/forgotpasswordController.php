<?php
include "./common/mailSender.php";
include "./common/commonfunction.php";

session_start();

if(!isset($_POST["email"])){
  header("Location: ../View/Registeration/forgotPassword.php");

} else if ($_POST["email"] == null) {
  header("Location: ../View/Registeration/forgotPassword.php");
} else{

  $user_email = $_POST["email"];
  
  include "../Model/model.php";
  $sql = $pdo->prepare(
    "SELECT * FROM m_customers WHERE c_email=:email AND del_flg = 0"
  );
  $sql->bindValue(":email", $user_email);
  $sql->execute();
  
  $result = $sql->fetchAll(PDO::FETCH_ASSOC);


  if (count($result) != 0) {

    $verify_code = get_token(128);

    $sql = $pdo->prepare(
        "UPDATE m_customers SET code = :verifyCode WHERE c_email = :email AND del_flg = 0"
      );

      $sql->bindValue(":email", $user_email);
      $sql->bindValue(":verifyCode", $verify_code);
      $sql->execute();

      $domain = $_SERVER['SERVER_NAME'];

  $mail = new SendMail ();

  $mail->sendMail($user_email,
  "Verification Link",
  
  "<h2> Here is your verification Link</h2>
  <a href = 'http://$domain/php_project/Customer/Controller/verifyForgotController.php?token=$verify_code'> Verify </a>
  
  ");
  header("Location: ../View/Registeration/forgotPassword.php");
  $_SESSION["code_sent"] = "We have sent a verification code to your email please verify";

  } else{

    $_SESSION["forgotPasswordError"] = "Email is not found";

    header("Location: ../View/Registeration/forgotPassword.php");
  }

}


    $user_email = $_POST["email"];
  
  include "../Model/model.php";
  $sql = $pdo->prepare(
    "SELECT * FROM m_customers WHERE c_email=:email AND del_flg = 0"
  );
  $sql->bindValue(":email", $user_email);
  $sql->execute();
  
  $result = $sql->fetchAll(PDO::FETCH_ASSOC);


  if (count($result) != 0) {

    $verify_code = get_token(128);

    $sql = $pdo->prepare(
        "UPDATE m_customers SET code = :verifyCode WHERE c_email = :email AND del_flg = 0"
      );

      $sql->bindValue(":email", $user_email);
      $sql->bindValue(":verifyCode", $verify_code);
      $sql->execute();

      $domain = $_SERVER['SERVER_NAME'];

  $mail = new SendMail ();

  $mail->sendMail($user_email,
  "Verification Link",
  
  "<h2> Here is your verification Link</h2>
  <a href = 'http://$domain/php_project/Customer/Controller/verifyForgotController.php?token=$verify_code'> Verify </a>
  
  ");
  header("Location: ../View/Registeration/forgotPassword.php");
  $_SESSION["code_sent"] = "We have sent a verification code to your email please verify";

  } else{

    $_SESSION["forgotPasswordError"] = "Email is not found";

    header("Location: ../View/Registeration/forgotPassword.php");
  }


?>