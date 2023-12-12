<?php

if (count($_GET) != 0) {
    $product_id = $_GET["id"];
}
$customer_id = $accountresult[0]["id"];
// echo($customer_id);   // need to check login
$productDetail_result = [];

// to use mutidimentional in_array function
function in_array_r($needle, $haystack, $strict = false)
{
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return true;
        }
    }

    return false;
}

include "../Model/model.php";

// check if the customer already had a cart with items
$sql1 = $pdo->prepare(
    "SELECT * FROM `t_cart` WHERE `del_flg` = 0"
);

$sql1->execute();
$carts = $sql1->fetchAll(PDO::FETCH_ASSOC);
// echo ("<pre>");
// print_r($carts);

// if not make one for them
if (!in_array_r($customer_id, $carts)) {
    $sql = $pdo->prepare(
        "INSERT INTO `t_cart` (
            customer_id,
            create_date
        ) VALUE 
        (
            :customer_id,
            :create_date
        )"
    );

    $sql->bindValue(":customer_id", $customer_id);
    $sql->bindValue(":create_date", date("Y-m-d"));
    $sql->execute();
}

// identify their own cart
$sql2 = $pdo->prepare(
    "SELECT * FROM `t_cart` WHERE `customer_id` = :customer_id AND `del_flg` = 0"
);

$sql2->bindValue(":customer_id", $customer_id);
$sql2->execute();
$cart = $sql2->fetchAll(PDO::FETCH_ASSOC);
// print_r($cart);
$cart_id = $cart[0]["id"];
// echo ($cart_id);

// check if the items is already in cart
$sql3 = $pdo->prepare(
    "SELECT * FROM `t_cart_detail` WHERE `del_flg` = 0 "
);
$sql3->execute();
$items_in_cart = $sql3->fetchAll(PDO::FETCH_ASSOC);

if (count($_GET) != 0  || count($items_in_cart) != 0) {
    if (!in_array_r($product_id, $items_in_cart)) {

        // add products to their cart
        $sql4 = $pdo->prepare(
            "INSERT INTO `t_cart_detail`
            (
                cart_id,
                product_id,
                create_date
            )
            VALUES
            (
                :cart_id,
                :product_id,
                :create_date
            )
            "
        );
        $sql4->bindValue(":cart_id", $cart_id);
        $sql4->bindValue(":product_id", $product_id);
        $sql4->bindValue(":create_date", date("Y-m-d"));
        $sql4->execute();
    }

    // customers products
    if (count($items_in_cart) != 0) {
        $sql6 = $pdo->prepare(
            "SELECT `product_id` FROM `t_cart_detail` WHERE `cart_id` = :cart_id AND `del_flg` = 0"
        );
        $sql6->bindValue("cart_id", $cart_id);
        $sql6->execute();
        $customer_items = $sql6->fetchAll(PDO::FETCH_ASSOC);
    };
    // print_r($customer_items);

    for ($i = 0; $i < count($customer_items); $i++) {
        $sql5 = $pdo->prepare(
            "SELECT * FROM m_products  WHERE id = :productid AND `del_flg` = 0"
        );

        $sql5->bindValue(":productid", $customer_items[$i]["product_id"]);
        $sql5->execute();
        array_push($productDetail_result, $sql5->fetchAll(PDO::FETCH_ASSOC));
    }

    // info of products

    // echo("<pre>");
    // print_r($productDetail_result);

}
