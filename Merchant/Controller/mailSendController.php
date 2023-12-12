<?php
session_start();
include "./common/mailSender.php";
$invoice = $_SESSION["invoice"];

$email =$_SESSION["cusInfo"];
// print_r($email);
// print_r($email[0]["c_email"]);
$to = $email[0]["c_email"];

// $body = file_get_contents("../View/Orders/invoice.html");

//for bind value
$name = "Dennis";
$invoiceId = $invoice[0][0]["id"];
$cusName = $invoice[0][0]["c_name"];
$cusAddress = $invoice[0][0]["address"];
$cusTown = $invoice[0][0]["town"];
$cusReg = $invoice[0][0]["reg"];
$cusPayment = $invoice[0][0]["payment"];
$invoiceDate = $invoice[0][0]["invoice_date"];
$totalAmt = $invoice[0][0]["total_amt"];
$receiveInvoice = $invoice;






ob_start();
include("../Mail/invoice/index.php");
// include("../View/Orders/invoice.php");
$message = ob_get_contents();
ob_get_clean();
// $send = mail($to, $subject, $message, $headers);
// echo ($send ? "Mail is send" : "There was an error");

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

header("Location: ../View/Orders/order.php");

?>