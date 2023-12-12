<?php

session_start();
// echo password_hash("123456789", PASSWORD_DEFAULT);

// print_r($_POST);
// check from stage is register page or not
if(isset($_POST["login"])){
    
    $email = $_POST["email"];
    $passwords = $_POST["password"];

    //Db Connection
    include "../Model/model.php";


    

    $sql = $pdo->prepare(
        "SELECT * FROM m_merchants WHERE me_email=:email"
            
    );

    $sql->bindValue(":email",$email);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result);
    
    if(count($result) == 0){
        $_SESSION["loginerror"] = "Email not found!";
        header("Location: ../View/Login/login.php");
        
    }else{
        
        // $passwords == $result[0]["password"]
        if(password_verify($passwords,$result[0]["me_password"])){
            
           
            header("Location: ../View/Dashboard/dashboard.php");
        }else{
            $_SESSION["loginerror"] = "Email or password incorrect!";
            header("Location: ../View/Login/login.php");
        }
    }

}else{
    //go to error page
    header("Location: ../View/errors/error.php");
}


?>