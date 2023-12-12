<?php
// session_start();
// middleware check
// include "./middleware/loginCheck.php";
// session_start();


// $ppro = $_SESSION["ppro"];
// $id = $ppro[0]["id"];

// print_r($_POST);

if (count($_POST) == 0) {
    header("Location: ../View/errors/error.php");
}
if (!isset($_POST["editDone"])) {
    header("Location: ../View/errors/error.php");
}
$pid = $_POST["pid"];
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
$pphoto = "";
if( $pimg1 != ""){
    $pphoto .= "p_photo_1 = :pphoto1,";
    move_uploaded_file($pimg1tmp, "$uploads_dir/$pimg1");
}
if( $pimg2 != ""){
    $pphoto .= "p_photo_2 = :pphoto2,";
    move_uploaded_file($pimg2tmp, "$uploads_dir/$pimg2");
}
if( $pimg3 != ""){
    $pphoto .= "p_photo_3 = :pphoto3,";
    move_uploaded_file($pimg3tmp, "$uploads_dir/$pimg3");
}
if( $pimg4 != ""){
    $pphoto .= "p_photo_4 = :pphoto4,";
    move_uploaded_file($pimg4tmp, "$uploads_dir/$pimg4");
}

/*move_uploaded_file($pimg2tmp, "$uploads_dir/$pimg2");
move_uploaded_file($pimg3tmp, "$uploads_dir/$pimg3");
move_uploaded_file($pimg4tmp, "$uploads_dir/$pimg4");*/

// if ((move_uploaded_file($pimg1tmp, "../../Storage/products/" . $pimg1)) 
// ||
// (move_uploaded_file($pimg2tmp, "../../Storage/products/" . $pimg2)) ||
// (move_uploaded_file($pimg3tmp, "../../Storage/products/" . $pimg3)) ||
// (move_uploaded_file($pimg4tmp, "../../Storage/products/" . $pimg4)) 


// ) {


    $sql = $pdo->prepare(
    
        " UPDATE  m_products SET
        p_title = :ptitle,
        $pphoto
        p_category = :pcategory,
        p_sub_category = :psubcategory,
        p_brand = :pbrand,
        p_stock = :pstock,
        p_buy_price = :pbuyprice,
        p_sell_price = :psellprice,
        p_discount = :pdiscount,
        p_detail = :pdetail,
        p_des = :pdescription,
        create_date = :createdate
    WHERE id = :id 
    "

    );
    $sql->bindValue(":id", $pid);
    $sql->bindValue(":ptitle", $pname);
    if( $pimg1 != ""){
        $sql->bindValue(":pphoto1", "/Storage/products/" . $pimg1);
    }
    if( $pimg2 != ""){
        $sql->bindValue(":pphoto2", "/Storage/products/" . $pimg2);
    }
    if( $pimg3 != ""){
        $sql->bindValue(":pphoto3", "/Storage/products/" . $pimg3);
    }
    if( $pimg4 != ""){
        $sql->bindValue(":pphoto4", "/Storage/products/" . $pimg4);
    }
   
    // $sql->bindValue(":pphoto2", "/Storage/products/" . $pimg2);
    // $sql->bindValue(":pphoto3", "/Storage/products/" . $pimg3);
    // $sql->bindValue(":pphoto4", "/Storage/products/" . $pimg4);
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
