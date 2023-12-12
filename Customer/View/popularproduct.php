<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/css/categoryProduct.css">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script src="./resources/js/category.js" defer></script>
    <script src="./resources/js/menu.js" defer></script>
    <script src="./resources/js/all_add_to_cart.js" defer></script>
    <script src="./resources/js/all_add_to_wishlist.js" defer></script>
    <script src="./resources/js/formatPrice.js" defer></script>

    <title>Just for you</title>
</head>

<body class="relative">
 <?php include "./common/nav_without_search.php"  ?>

    <!--navgation and header session end-->


    <?php if (isset($_SESSION["user_account"])) {

        $is_customer = 1;
    } else {

        $is_customer = 2;
    } ?>

    <div class="w-10/12 mx-auto">
        <div class="lg:w-11/12 w-full  flex justify-evenly flex-wrap mx-auto mb-4" id="jfu_product">
            <?php
            include "../Controller/productSeemoreController.php";

            foreach ($popular_all_result as $popular_product) {
                # code...
                $rating = $popular_product["product_rating"];
                if (($popular_product["p_discount"]) != null) {

                    $price = $popular_product["p_sell_price"] - ((($popular_product["p_discount"]) / 100)  * ($popular_product["p_sell_price"]));
                } else $price = $popular_product["p_sell_price"];
            ?>


                <!-- products card -->
                <a href="./detailpage.php?productid=<?= $popular_product["id"] ?>" class="lg:w-56 w-40 lg:h-72 h-60 bg-white drop-shadow-md mx-4 mt-8 products_to_add group rounded-xl " id="product_<?= $popular_product["id"] ?>">




                    <div class="w-full h-full absolute opacity-0 bg-green-800/20 -top-10 group-hover:top-0
                         z-50 group-hover:opacity-100 rounded-xl transition-all delay-100 ease-in-out flex flex-col justify-around">
                        <div>

                            <div class="w-32 mx-auto flex justify-evenly">
                                <div class=" rounded-full bg-white all_wishlist hover:bg-green-600" title="Add to wishlist" islogin=<?= $is_customer ?>>
                                    <ion-icon name="heart" class="scale-150 mt-1 text-green-600 px-2 py-1 hover:text-white"></ion-icon>
                                </div>

                                <div class="rounded-full bg-white hover:bg-green-600 all_cart" title="Add to cart" islogin=<?= $is_customer ?>>
                                    <ion-icon name="cart" class="scale-150 mt-1 text-green-600 px-2 py-1  hover:text-white"></ion-icon>
                                </div>

                                <div class=" rounded-full bg-white hover:bg-green-600 view_detail" title="view detail">
                                    <ion-icon name="eye-outline" class="scale-150 mt-1 text-green-600 px-2 py-1 hover:text-white"></ion-icon>
                                </div>
                            </div>

                            <div class="w-36  bg-white text-gray-500 text-xs rounded-3xl mx-auto py-1 mt-2 text-center all_notice"></div>

                        </div>



                    </div>

                    <!-- product image -->
                    <div class="w-2/3 mx-auto h-2/3 relative">
                        <div class="w-11/12 h-full mt-2 mx-auto flex-col justify-items-center">
                            <img src="../..<?= $popular_product["p_photo_1"] ?>" alt="" class="w-full h-full ">
                        </div>

                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly w-full mt-3 h-1/3">
                        <div>
                            <p class="text-center text-xs mt-1 text-green-800"><?= $popular_product["p_title"] ?></p>
                            <p class="lg:block text-[10px] text-center hidden text-gray-600 "><?= $popular_product["p_des"] ?></p>
                            <?php if (($popular_product["p_discount"]) != null) { ?> <p class="text-red-500 lg:text-xs text-[9px] mt-2 ml-2"><?= $popular_product["p_discount"] ?><span>%off</span></p><?php } ?>
                        </div>
                        <div>
                            <div class="flex mt-1 ml-3 text-[#9ACD32]">
                                <?php if ($popular_product["product_rating"] != null) {

                                    for ($i = 0; $i < $popular_product["product_rating"]; $i++) { ?>

                                        <ion-icon name="star" class="lg:w-2 w-1 lg:h-2 h-1 mr-[2px]"></ion-icon>
                                <?php }
                                } ?>

                            </div>
                            <p class="text-center lg:text-xs text-[10px] font-medium text-[#607d38] mt-1 w-16 ml-1">Ks <span class="all_price"><?= $price ?></span></p>
                            <?php if (($popular_product["p_discount"]) != null) { ?>
                                <p class="text-gray-700 text-center line-through text-[9px]">Ks <span class="all_price"><?= $popular_product["p_sell_price"] ?></p></span> <?php } ?>

                        </div>
                    </div>
                </a>
            <?php } ?>


        </div>
    </div>

    <?php include "./common/commonFooter.php" ?>


</body>

</html>