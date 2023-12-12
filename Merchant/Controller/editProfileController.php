<?php
// session_start();

include "../../Model/model.php";
$sql = $pdo->prepare(
    "SELECT m_merchants.id, me_name, me_email, me_address, me_region, me_township, me_phone, me_profile, me_shop_name, me_payment_acc, m_regions.name AS reg, m_townships.name AS town FROM m_merchants INNER JOIN m_townships ON m_merchants.me_township = m_townships.id
    INNER JOIN m_regions ON m_merchants.me_region = m_regions.id"
);

$sql->execute();

$merchant= $sql->fetchAll(PDO::FETCH_ASSOC);

// header("Location: ../View/Profile/editProfile.php");
?>