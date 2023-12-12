<?php

session_start();

$user_id = $_SESSION["user_account"];
$product_id = $_POST["ProductId"];

include "../Model/model.php";
// check user had wishlist or not
$sql1 = $pdo->prepare(

    "SELECT t_wishlist.id FROM t_wishlist LEFT JOIN t_wishlist_detail ON t_wishlist.id = t_wishlist_detail.wishlist_id WHERE t_wishlist.customer_id = :user AND t_wishlist.del_flg = 0 AND t_wishlist_detail.del_flg = 0"
);
$sql1->bindValue(":user", $user_id);
$sql1->execute();
$userResult = $sql1->fetchAll(PDO::FETCH_ASSOC);



if (count($userResult) != 0) {

 

   $wishlist_id = $userResult[0]["id"];

//     // check if product is already added to wishlist or not

    $pcheck_sql = $pdo->prepare("SELECT * FROM t_wishlist_detail WHERE wishlist_id = :wishlistId AND product_id = :productId AND del_flg = 0");
    $pcheck_sql->bindValue(":wishlistId", $wishlist_id);
    $pcheck_sql->bindValue(":productId", $product_id);
    $pcheck_sql->execute();
    $pcheck_result = $pcheck_sql->fetchAll(PDO::FETCH_ASSOC);

    if (count($pcheck_result) != 0) {

        echo ("already Exit");
    } else {
        // insert products into already exists wishlist 

        $sql2 = $pdo->prepare(
            "INSERT INTO t_wishlist_detail( 
                wishlist_id,
                product_id
            ) VALUES
            (
                :wishlistId,
                :productId

            )"
        );
        $sql2->bindValue(":wishlistId", $wishlist_id);
        $sql2->bindValue(":productId", $product_id);
        $sql2->execute();

        echo ("done");
  }  // insert products into already exists wishlist finished
} else {
    // create a wishlist for a new user and insert product 

    $sql3 = $pdo->prepare(

        "INSERT INTO t_wishlist(customer_id) VALUES(:customerId)"

    );

    $sql3->bindValue(":customerId", $user_id);
    $sql3->execute();

    $sql4 = $pdo->prepare(

        "SELECT id FROM t_wishlist WHERE customer_id = :user AND del_flg = 0"
    );

    $sql4->bindValue(":user", $user_id);
    $sql4->execute();
    $userResult2 = $sql4->fetchAll(PDO::FETCH_ASSOC);


    $wishlist_id2 = $userResult2[0]["id"];


    $sql5 = $pdo->prepare(
        "INSERT INTO t_wishlist_detail( 
                wishlist_id,
                product_id
            ) VALUES
            (
                :wishlistId,
                :productId

            )"
    );
    $sql5->bindValue(":wishlistId", $wishlist_id2);
    $sql5->bindValue(":productId", $product_id);
    $sql5->execute();

    echo ("done");
}
