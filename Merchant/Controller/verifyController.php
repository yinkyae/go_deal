<?php 
print_r($_POST);
echo "hello";
if(isset($_POST["codeSubmit"])){
    $codes ="";
    $code1 = $_POST["code1"];
    $codes .=$code1;

    $code2 = $_POST["code2"];
    $codes .=$code2;

    $code3 = $_POST["code3"];
    $codes .=$code3;

    $code4 = $_POST["code4"];
    $codes .=$code4;

    
    include "../Model/loginModel.php";
    $sql = $pdo->prepare(
        "SELECT id FROM loginmerchant WHERE otp = :otp"
    );
    $sql->bindValue(":otp", $codes );
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    if(count($result) != 0){
        header("Location: ../View/Login/enterNewPass.php");
    }else{
        header("Location: ../View/Login/otpVerify.php");

    }

}else {
    // go to error page
    header("Location: ../View/errors/error.php");
}


?>