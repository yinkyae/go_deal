<?php
print_r($_POST); 

include "./common/mailSender.php";
include "./common/commonFunction.php";
// ini_set('display_errors', 1);
session_start();
// to get token
// $token = gettoken(128);
// print_r($token);
// $token = "2WnVDJi56lgcS9a4YTt9I47GJ3SysMzmWO2ONnNG12OEx4RoNiAlRxKNIinp9ALPSemPhGhYWUx9cQu6rUbG5zGtexW24GF5TR4ZN3MwhTCr2MCDBwQoH7ModRNw1U2x";
$otp =  generateNumericOTP(4);


// check from stage is  forgot Password page or not 
if(isset($_POST["continue"])){
    $email = $_POST["email"];

    // Db Connection
    include "../Model/loginModel.php";

    // check  email is or not
    $sql = $pdo->prepare(
        "SELECT * FROM loginmerchant WHERE email=:email"
    );
    $sql->bindValue(":email",$email);
    $sql->execute();

    $resultEmail = $sql->fetchAll(PDO::FETCH_ASSOC);

    if(count($resultEmail) == 0){
        $_SESSION["emailerror"] = "Email not found!";
        header("Location: ../View/Login/forgotPassword.php");
        
       

    }else if($email == $resultEmail[0]["email"]){
       

        // send verification email
        $domain = $_SERVER['SERVER_NAME'];

        $mail =new SendMail();
        $mail->sendMail(
            $email,
            "Verification Link",
            "
            <h2> Here is your Verification Code </h2>
            <h4>$otp.</h4>
            
            "
        );
        // <a href='http://$domain/php_project/Merchant/Controller/verifyController.php?token=$token'>Verify</a>
        $sql = $pdo->prepare(
            "UPDATE loginmerchant SET
            otp = :otp
            WHERE id = 1
        "
        );
       
        $sql->bindValue(":otp", $otp);
        $sql->execute();

           
            header("Location: ../View/Login/otpVerify.php");
           
    }
}else {
    // go to error page
    header("Location: ../View/errors/error.php");
}

?>
