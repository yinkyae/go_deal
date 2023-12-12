<?php
session_start();

$id = $_GET["id"];

if(!isset($id)){
    header ("Location: ../View/errors/error.php");

}else{
    include "../Model/model.php";
    $sql = $pdo->prepare(
"SELECT * FROM m_pay_acc WHERE id = :id"
    );
    $sql->bindValue(":id",$id);
    $sql->execute();
    $_SESSION["payacc"]=$sql->fetchAll(PDO::FETCH_ASSOC);
    header("Location: ../View/Profile/updateDeletePayAcc.php");
}

?>