<?php

print_r($_POST);

if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
}
if (!isset($_POST["updateProfileDone"])) {
    header("Location: ../View/errors/error.php");
}
$id = $_POST["id"];
$meshopname = $_POST["meshopname"];
$meemail = $_POST["meemail"];
$mephone = $_POST["mephone"];
$meregion = $_POST["meregion"];
$metownship = $_POST["metownship"];
$meaddress = $_POST["meaddress"];

// get merchant profile
$meprofile = $_FILES["meprofile"]["name"];

$meprofiletmp = $_FILES["meprofile"]["tmp_name"];
// print_r($meprofile);

$uploads_dir = "../../Storage/products/";
include "../Model/model.php";

$pphoto = "";
if ($meprofile != "") {
    $pphoto .= "me_profile = :meprofile,";
    move_uploaded_file($meprofiletmp,"$uploads_dir/$meprofile");
}




$sql = $pdo->prepare(

    " UPDATE  m_merchants SET
        me_shop_name = :meshopname,
        $pphoto
        me_email = :meemail,
        me_phone = :mephone,
        me_address = :meaddress,
       me_township = :metownship,
       me_region = :meregion
    WHERE id = :id
    "

);
$sql->bindValue(":id", $id);
$sql->bindValue(":meshopname", $meshopname);
if ($meprofile != "") {
    $sql->bindValue(":meprofile", "/Storage/products/" . $meprofile);
}

$sql->bindValue(":mephone", $mephone);
$sql->bindValue(":meemail", $meemail);
$sql->bindValue(":meaddress", $meaddress);
$sql->bindValue(":metownship", $metownship);
$sql->bindValue(":meregion", $meregion);
// $sql->bindValue(":createdate", date("Y-m-d"));

$sql->execute();
header("Location: ../View/Profile/profile.php");
