<?php
// session_start();
// middleware check
// include "./middleware/loginCheck.php";

print_r($_POST);

if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
}
if (!isset($_POST["padd"])) {
    header("Location: ../View/errors/error.php");
}
$pname = $_POST["pname"];
$pcategory = $_POST["pcategory"];
$psubcategory = $_POST["psubcategory"];
$pbrand = $_POST["pbrand"];
$pstock = $_POST["pstock"];
$pbuyprice = $_POST["pbuyprice"];
$psellprice = $_POST["psellprice"];
$pdiscount = $_POST["pdiscount"];
$pdetail = $_POST["pdetail"];
$pdes = $_POST["pdes"];
// get img1
$pimg1 = $_FILES["default_img1"]["name"];
$pimg1tmp = $_FILES["default_img1"]["tmp_name"];
// $ext = pathinfo($pimg)["extension"];
// get img2
$pimg2 = $_FILES["default_img2"]["name"];
$pimg2tmp = $_FILES["default_img2"]["tmp_name"];
// get img3
$pimg3 = $_FILES["default_img3"]["name"];
$pimg3tmp = $_FILES["default_img3"]["tmp_name"];
// get img4
$pimg4 = $_FILES["default_img4"]["name"];
$pimg4tmp = $_FILES["default_img4"]["tmp_name"];
$uploads_dir = "../../Storage/products/";
include "../Model/model.php";
move_uploaded_file($pimg1tmp, "$uploads_dir/$pimg1");
move_uploaded_file($pimg2tmp, "$uploads_dir/$pimg2");
move_uploaded_file($pimg3tmp, "$uploads_dir/$pimg3");
move_uploaded_file($pimg4tmp, "$uploads_dir/$pimg4");


// if ((move_uploaded_file($pimg1tmp, "../../Storage/products/" . $pimg1)) 
// &&
// (move_uploaded_file($pimg2tmp, "../../Storage/products/" . $pimg2)) &&
// (move_uploaded_file($pimg3tmp, "../../Storage/products/" . $pimg3)) &&
// (move_uploaded_file($pimg4tmp, "../../Storage/products/" . $pimg4)) 


// ) {


    $sql = $pdo->prepare(
        " INSERT INTO m_products 
    (
        p_title,
        p_photo_1,
        p_photo_2,
        p_photo_3,
        p_photo_4,
        p_category,
        p_sub_category,
        p_brand,
        p_stock,
        p_buy_price,
        p_sell_price,
        p_discount,
        p_detail,
        p_des,
        create_date
    )
    VALUES
    (
        :ptitle,
        :pphoto1,
        :pphoto2,
        :pphoto3,
        :pphoto4,
        :pcategory,
        :psubcategory,
        :pbrand,
        :pstock,
        :pbuyprice,
        :psellprice,
        :pdiscount,
        :pdetail,
        :pdescription,
        :createdate

    )
    "

    );
    $sql->bindValue(":ptitle", $pname);
    $sql->bindValue(":pphoto1", "/Storage/products/" . $pimg1);
    $sql->bindValue(":pphoto2", "/Storage/products/" . $pimg2);
    $sql->bindValue(":pphoto3", "/Storage/products/" . $pimg3);
    $sql->bindValue(":pphoto4", "/Storage/products/" . $pimg4);
    $sql->bindValue(":pcategory", $pcategory);
    $sql->bindValue(":psubcategory", $psubcategory);
    $sql->bindValue(":pbrand", $pbrand);
    $sql->bindValue(":pstock", $pstock);
    $sql->bindValue(":pbuyprice", $pbuyprice);
    $sql->bindValue(":psellprice", $psellprice);
    $sql->bindValue(":pdiscount", $pdiscount);
    $sql->bindValue(":pdetail", $pdetail);
    $sql->bindValue(":pdescription", $pdes);
    $sql->bindValue(":createdate", date("Y-m-d"));


    $sql->execute();
    header("Location: ../View/Products/product.php");
// } else {
//     header("Location: ../View/errors/error.php");
// }
