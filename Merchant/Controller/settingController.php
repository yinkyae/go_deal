<?php
print_r($_POST); 

// include "./common/mailSender.php";
include "./common/commonFunction.php";
// ini_set('display_errors', 1);
session_start();
// to get token
// $token = gettoken(128);
// print_r($token);
// $token = "2WnVDJi56lgcS9a4YTt9I47GJ3SysMzmWO2ONnNG12OEx4RoNiAlRxKNIinp9ALPSemPhGhYWUx9cQu6rUbG5zGtexW24GF5TR4ZN3MwhTCr2MCDBwQoH7ModRNw1U2x";
// $otp =  generateNumericOTP(4);


// check from stage is  forgot Password page or not 
if(isset($_POST["setting"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirm-password"];


    // Db Connection
    include "../Model/model.php";

    // check  email is or not
    $sql = $pdo->prepare(
        "SELECT * FROM m_merchants WHERE me_email=:email"
    );
    $sql->bindValue(":email",$email);
    $sql->execute();

    $resultEmail = $sql->fetchAll(PDO::FETCH_ASSOC);

    if(count($resultEmail) == 0){
        $_SESSION["emailerror"] = "Email not found!";
        header("Location: ../View/Setting/changePassword.php");
        
       

    }else if($email == $resultEmail[0]["me_email"]){

        if($password != $confirmpassword){
            $_SESSION["passworderror"] = "Password are not identical!";
            header("Location: ../View/Setting/changePassword.php");
           

        }else{
            $sql = $pdo->prepare(
                "UPDATE m_merchants SET
                me_password = :password
                WHERE id = 1
            "
            );
           
            $sql->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
            $sql->execute();
    
               
                header("Location: ../View/Login/login.php");
           
        }
        
           
    }
}else {
    // go to error page
    // header("Location: ../View/errors/error.php");
}

?>