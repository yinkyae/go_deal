<?php
// echo ("<pre>");
// print_r($_POST);
// data for another page
//$data = $_POST;
//$datastring = serialize($data);
// 
//$order_data = unserialize($_POST["order_data"]);
// echo("order_data");
// print_r($order_data);

//$product_ids = json_decode($order_data["product_id"],true);
//$qtys = json_decode($order_data["qty"],true);
//$amounts = json_decode($order_data["amount"],true);
//$p_titles = json_decode($order_data["p_title"],true);
//$shippingFees = 2250;
//$subtotal = $order_data["total"] - $shippingFees;
//$ids = [];

// print_r($product_ids);
// print_r($qtys);
// print_r($amounts);
// print_r($p_titles);



// $region_id = $_POST["region"];

// include "../Model/model.php";




// $sql3=$pdo->prepare(
//     "SELECT * FROM m_regions  WHERE id = :region_id AND del_flg = 0"
// );

// $sql3->bindValue(":region_id",$region_id);
// $sql3->execute();
// $region = $sql3->fetchAll(PDO::FETCH_ASSOC);


if(isset($_SESSION["user_account"])){

    include "../Model/model.php";


    $customer = $_SESSION["user_account"];
    
    $userInfo_sql = $pdo->prepare(

        "SELECT m_townships.name AS township,
                m_regions.name AS region,
                m_customers.c_name,
                m_customers.c_phone,
                m_customers.c_address,
                m_customers.c_email
            FROM m_customers 
            LEFT JOIN m_townships ON m_customers.c_township = m_townships.id 
            LEFT JOIN m_regions ON m_customers.c_region = m_regions.id WHERE m_customers.id = :userId AND m_customers.del_flg = 0"
    );
    $userInfo_sql->bindValue(":userId",$customer);
    $userInfo_sql->execute();
    $userInfo_result = $userInfo_sql->fetchAll(PDO::FETCH_ASSOC);

    if(isset($_SESSION["buy_type"])){
        
   

    if((isset($_SESSION["buy_product"]))&&(($_SESSION["buy_product"] != null)) && ($_SESSION["buy_type"]==1) ){
    
        $buyproductId = $_SESSION["buy_product"];
    
    
   
    // get product info of buy now product
    
    $productInfo_sql =$pdo->prepare(
        "SELECT * FROM m_products WHERE id = :productId AND del_flg = 0 "
    );
    
    $productInfo_sql->bindValue(":productId",$buyproductId);
    $productInfo_sql->execute();
    $buyproducts_result  = $productInfo_sql->fetchAll(PDO::FETCH_ASSOC);
    
    $product_quantity = $_SESSION["product_qty"];
    
    
    }
    
    elseif ((isset($_SESSION["buy_cart"]))&&(($_SESSION["buy_cart"] != null))&& ($_SESSION["buy_type"]==2)) {
        
        $buycartId = $_SESSION["buy_cart"];

             $cart_sql = $pdo->prepare(
    
            "SELECT p_title, p_sell_price, p_photo_1, p_discount, qty FROM m_products LEFT JOIN t_cart_detail ON 
            m_products.id = t_cart_detail.product_id WHERE 
            t_cart_detail.cart_id =  :cartId AND t_cart_detail.del_flg = 0 AND m_products.del_flg = 0"
    
        );
      
        $cart_sql -> bindValue(":cartId",$buycartId);
        $cart_sql ->execute();
    
        $buyproducts_result = $cart_sql->fetchAll(PDO::FETCH_ASSOC);
        
        
        
    } else {

        header("Location: ./errorshow.php");
        
    }
   } else{

    header("Location: ./errorshow.php");

   }

} else{
    header("Location: ./Registeration/signUp.php");
}










?>







