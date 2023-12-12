<?php
session_start();
$receiveInvoice = $_SESSION["invoice"];

include "../Model/model.php";

$invoiceId =$_GET["id"];
$inDate = date("Y/m/d");
$sql = $pdo->prepare(

    "UPDATE t_order SET
    order_done = 1,
    invoice_date = :date
    WHERE id =:id
    "
);
$sql->bindValue(":date", $inDate);
$sql->bindValue(":id", $invoiceId);
$sql->execute();
foreach ($receiveInvoice[0] as $quantity) {
    // echo "<pre>";
    // print_r ($quantity);
    // echo "</pre>";
    $orderQty = $quantity["qty"];
    $productId = $quantity["productId"];
    $stock = $quantity["p_stock"];
    $leftStock = $stock - $orderQty;
    if ($leftStock < 0 || $leftStock == 0){
        $leftStock = 0;
        $sql = $pdo->prepare(
            "UPDATE m_products SET
            p_stock =:stock,
            del_flg =:value
            WHERE id =:id
            "
        );
        $sql->bindValue(":stock", $leftStock);
        $sql->bindValue(":id", $productId);
        $sql->bindValue(":value", 1);
        $sql->execute();
    }
    // echo $orderQty;
    // echo $productId;
    else{
        $sql = $pdo->prepare(
            "UPDATE m_products SET
            p_stock =:stock
            WHERE id =:id
            "
        );
        $sql->bindValue(":stock", $leftStock);
        $sql->bindValue(":id", $productId);
        $sql->execute();
    }
    
    
}



include "./common/mailSender.php";
$to = $receiveInvoice[0][0]["c_email"];
$name = "Dennis";
$invoiceId = $receiveInvoice[0][0]["id"];
$cusName = $receiveInvoice[0][0]["c_name"];
$cusAddress = $receiveInvoice[0][0]["address"];
$cusTown = $receiveInvoice[0][0]["town"];
$cusReg = $receiveInvoice[0][0]["reg"];
$cusPayment = $receiveInvoice[0][0]["payment"];
$invoiceDate = $inDate;
$totalAmt = $receiveInvoice[0][0]["total_amt"];






ob_start();
include("../Mail/invoice/index.php");

$message = ob_get_contents();
ob_get_clean();


$imgList = [
    "../Mail/invoice/images/image-1.png",
    "../Mail/invoice/images/image-2.png",
    "../Mail/invoice/images/image-3.png",
    "../Mail/invoice/images/image-4.png",
    "../Mail/invoice/images/image-5.png",
    "../Mail/invoice/images/image-6.png",
    "../Mail/invoice/images/image-7.gif",
    "../Mail/invoice/images/image-8.png"
   
];
$mail = new SendMail();
$mail->sendMail($to,"Invoice For Your Shopping", $message, $imgList);
// echo "Invoice has been sent";
header("Location: ../View/Orders/order.php");
?>