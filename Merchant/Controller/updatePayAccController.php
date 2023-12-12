<?php

print_r($_POST);

if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
}
if (!isset($_POST["updatePayAcc"])) {
    header("Location: ../View/errors/error.php");
}
$id= $_POST["id"];
$acctype = $_POST["acctype"];
$accnumber = $_POST["accnumber"];


include "../Model/model.php";


    $sql = $pdo->prepare(
        " UPDATE  m_pay_acc SET
    
       pay_type = :acctype,
        pay_number = :accnumber,
        create_date = :createdate
        WHERE id = :id
    "
   
    );
    $sql->bindValue(":id", $id);
    $sql->bindValue(":acctype", $acctype);
    $sql->bindValue(":accnumber", $accnumber);
    $sql->bindValue(":createdate", date("Y-m-d"));
    $sql->execute();
    header("Location: ../View/Profile/profile.php");
