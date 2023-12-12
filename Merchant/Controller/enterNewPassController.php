<?php 

if(isset($_POST["newPass"])){
   $password = $_POST["password"];
    
    include "../Model/model.php";
    $sql = $pdo->prepare(
        "UPDATE m_merchants SET
        me_password = :password
        WHERE id = 1
    "
    );
    
    $sql->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));
    $sql->execute();
    // $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    header("Location: ../View/Login/login.php");

}else {
    // go to error page
    header("Location: ../View/errors/error.php");
}


?>