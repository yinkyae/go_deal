<?php

print_r($_POST);

if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
}
if (!isset($_POST["addpayment"])) {
    header("Location: ../View/errors/error.php");
}
$acctype = $_POST["acctype"];
$accnumber = $_POST["accnumber"];


include "../Model/model.php";


    $sql = $pdo->prepare(
        " INSERT INTO m_pay_acc 
    (
       pay_type,
        pay_number,
        create_date
    )
    VALUES
    (
        :acctype,
        :accnumber,
        :createdate

    )
    "

    );
    $sql->bindValue(":acctype", $acctype);
    $sql->bindValue(":accnumber", $accnumber);
    $sql->bindValue(":createdate", date("Y-m-d"));


    $sql->execute();
    header("Location: ../View/Profile/profile.php");
