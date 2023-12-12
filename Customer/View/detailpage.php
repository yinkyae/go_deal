<?php if (!isset($_GET["productid"])) {
    header("Location: ./errorshow.php");
} ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script src="./resources/js/menu.js"></script>
    <script src="./resources/js/detailslide.js" defer></script>
    <script src="./resources/js/addtoCart.js?id=<?= time() ?>"></script>
    <script src="./resources/js/Qty.js?id=<?= time() ?>"></script>
    <script src="./resources/js/detailAddtoCart.js?id=<? time() ?>"></script>
    <script src="./resources/js/all_add_to_cart.js?id=<? time() ?>"></script>
    <script src="./resources/js/all_add_to_wishlist.js?id=<? time() ?>"></script>
    <title>Document</title>
</head>

<body class="overflow-x-hidden">
    <!--navgation and header session start-->

    <?php include "./common/nav_without_search.php" ?>


    <?php if (isset($_SESSION["user_account"])) {

        $isUser = 1;
    } else {

        $isUser = 2;
    }
    ?>

    <div class="flex lg:flex-row flex-col lg:mx-5 mx-0 my-5 overflow-x-hidden">

        <?php include "../Controller/detailController.php";

        if (($productDetail_result[0]["p_discount"]) != null) {

            $price = ($productDetail_result[0]["p_sell_price"]) - ((($productDetail_result[0]["p_discount"]) / 100) * ($productDetail_result[0]["p_sell_price"]));
        } else {

            $price = ($productDetail_result[0]["p_sell_price"]);
        }
        $photo1 = ($productDetail_result[0]["p_photo_1"]);
        $photo2 = ($productDetail_result[0]["p_photo_2"]);
        $photo3 = ($productDetail_result[0]["p_photo_3"]);
        $photo4 = ($productDetail_result[0]["p_photo_4"]);




        ?>
        <!--detail products-->
        <div class="lg:mx-10 mx-4">
            <!--detail products image session-->
            <div class="lg:w-96 lg:h-80 w-full h-52 overflow-x-hidden flex relative">
                <?php if ($photo1 != null) { ?>
                    <div class="w-11/12 h-full mx-auto">
                        <img src="../..<?= $photo1  ?>" alt="photo_1" class="inline w-full h-full detail_image "> <?php } ?>


                    <?php if ($photo2 != null) { ?>

                        <img src="../..<?= $photo2  ?>" alt="photo_2" class="hidden h-full w-full detail_image"> <?php } ?>

                    <?php if ($photo3 != null) { ?>

                        <img src="../..<?= $photo3  ?>" alt="photo_3" class="hidden h-full w-full detail_image"> <?php } ?>


                    <?php if ($photo4 != null) { ?>

                        <img src="../..<?= $photo4  ?>" alt="photo_4" class="hidden h-full w-full detail_image"> <?php } ?>
                    </div>

                    <div class=" rounded-full absolute w-6 h-6   bg-gray-700 top-1/2 left-0" id="backward">
                        <ion-icon name="chevron-back-outline" class="scale-150 p-1 text-white"></ion-icon>
                    </div>
                    <div class=" rounded-full w-6 h-6 absolute  bg-gray-700 top-1/2  right-0" id="forward">
                        <ion-icon name="chevron-forward-outline" class="scale-150 p-1 text-white"></ion-icon>
                    </div>
            </div>
            <div class="lg:mt-4 mt-2">
                <div class="flex justify-between">
                    
                    <div class="flex flex-col justify-center items-center text-orange-400">
                        <div>
                        <?php if ($product_rating_no != null) {

                            for (
                                $i = 0;
                                $i < $product_rating_no;
                                $i++
                            ) { ?>

                                <ion-icon name="star" class="lg:w-4 w-3 lg:h-4 h-3 mr-[1px]"></ion-icon>
                        <?php }
                        } ?>
                        </div>
                    </div>



                    <!-- product prices-->
                    <div>
                        <p class="text-[#607d38] lg:text-lg text-sm font-bold">Ks <span><?= $price ?></span></p>
                        <!-- promotion  prices-->

                        <?php if (($productDetail_result[0]["p_discount"]) != null) { ?>
                            <p class="opacity-50 lg:text-lg text-sm"><span class="line-through">Ks </span>
                                <span class="line-through"><?= $productDetail_result[0]["p_sell_price"] ?></span>
                                <span class="text-[#607d38]"><?= $productDetail_result[0]["p_discount"] ?>%off</span>
                            </p>
                        <?php } ?>
                    </div>

                </div>
                <div class="flex items-center w-28 justify-evenly float-left">
                    <p>Qty</p>
                    <div class="w-3 h-3 bg-green-700  relative  rounded-sm" id="remove">
                        <ion-icon name="remove-outline" class="w-full h-full absolute text-white font-bold"></ion-icon>
                    </div>
                    <p id="qty">1</p>
                    <div class="w-3 h-3 bg-green-700  relative  rounded-sm" id="add">
                        <ion-icon name="add-outline" class="w-full h-full absolute text-white font-bold"></ion-icon>
                    </div>
                </div>
            </div>





        </div>
        <!-- product description-->
        <div class="lg:w-1/2 w-11/12 ml-2 ">
            <p class="lg:text-2xl text-sm mt-2 font-semibold text-green-700 mb-3"> <?= $productDetail_result[0]["p_title"] ?></p>
            <p class="lg:text-xl text-sm font-semibold text-gray-500"><?= $productDetail_result[0]["p_des"] ?></p>

            <div class="w-4/5 lg:h-32 h-20 mt-2 flex flex-col justify-icenters items-center text-gray-500 overflow-y-auto">
                <p class="lg:text-sm text-xs p-2"><?= $productDetail_result[0]["p_detail"] ?></p>
            </div>

            <div class="mt-5 w-4/5 ">
                <div class="flex justify-evenly">
                    <div class="lg:w-1/3 w-2/5 h-8 bg-orange-500 hover:bg-yellow-400 rounded-md text-white text-center py-[2px]" isLogin=<?= $isUser ?> id="add_to_cart" pId=<?= $product_id ?>>Add To Cart</div>
                    <form action="../Controller/buynowController.php" method="post" class="lg:w-1/3  w-2/5 ">
                        <input type="hidden" name="productid" value=<?= $product_id ?>>
                        <input type="hidden" name="quantity" value="1" id="p_qty">
                        <input type="submit" value="Buy Now" class=" w-full h-8  bg-[#607d38] hover:bg-[#9ACD32] rounded-md text-white text-center py-[2px]">
                    </form>
                </div>
                <div class="noti w-48 rounded-lg text-gray-500 text-center mx-auto mt-4 bg-white drop-shadow-md text-sm py-1"></div>
            </div>




            <!--review sessions-->
            <?php if ($review_result != null) { ?>
                <div class="mt-5 w-full">
                    <p class="lg:text-lg mb-2 text-sm">Reviews</p>
                    <!--customer reviews-->
                    <div class="lg:w-4/5 w-11/12 mx-2">
                        <div class="flex">
                            <div class="w-8 h-8 rounded-full mx-1">
                                <img src="../../<?= $review_result[0]["c_profile"] ?>" alt="user_photo" class="w-full h-full rounded-full">
                            </div>
                            <div>
                                <p class=" text-sm text-green-600 -mb-1"><?= $review_result[0]["c_name"] ?></p>
                                <div class="mt-0">
                                    <?php for ($i = 0; $i < $review_result[0]["rating_no"]; $i++) { ?>
                                        <ion-icon name="star" class="mr-[1px] text-orange-400 w-3 h-3"></ion-icon>

                                    <?php   } ?>
                                </div>
                            </div>

                        </div>

                        <p class=" font-medium ml-8 text-xs text-gray-400">
                            <?= $review_result[0]["product_review"] ?>
                        </p>


                    </div>
                    <a href="./ProductReveiw.php?productid=<?= $product_id ?>" class="float-right text-xs font-medium 
                    text-[#607d38] lg:mr-20 hover:text-orange-600 hover:font-bold">See all reviews</a>


                </div>
            <?php } ?>

        </div>
    </div>

    <?php if (isset($_SESSION["user_account"])) {

        $is_customer = 1;
    } else {

        $is_customer = 2;
    } ?>

    <!--you may also like session-->
    <div class="w-11/12 mx-auto lg:w-10/12 mb-5 mt-8">
        <p class=" lg:text-xl text-sm font-semibold ml-4 mb-4">Related products</p>

        <div class="w-full flex flex-wrap">
            <?php foreach ($category_result as $products) {
                # code...

                $rating = $products["product_rating"];
                if (($products["p_discount"]) != null) {

                    $price = $products["p_sell_price"] - ((($products["p_discount"]) / 100)  * ($products["p_sell_price"]));
                } else $price = $products["p_sell_price"];
            ?>

                <a href="./detailpage.php?productid=<?= $products["id"] ?>" class="lg:w-56 w-44 lg:h-72 h-60 bg-white drop-shadow-md mt-8 group products_to_add rounded-xl  ml-2 " id="product_<?= $products["id"] ?>">


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
                            </div>

                            <div class="w-36  bg-white text-gray-500 text-xs rounded-3xl mx-auto py-1 mt-2 text-center all_notice"></div>
                        </div>
                    </div>
                    
                    <!-- product image -->
                    <div class="w-full h-2/3 mx-auto relative">
                        <div class="w-full h-full mt-2 mx-auto flex-col justify-items-center">
                            <img src="../..<?= $products["p_photo_1"] ?>" alt="" class="w-full h-full ">
                        </div>
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly w-full mt-3 h-1/3">
                        <div>
                            <p class="text-center text-xs mt-1 text-green-800"><?= $products["p_title"] ?></p>
                            <p class="lg:block text-[10px] text-center hidden text-gray-600 "><?= $products["p_des"] ?></p>
                            <?php if (($products["p_discount"]) != null) { ?> <p class="text-[#607d38] lg:text-xs text-[9px] mt-2 ml-2"><?= $products["p_discount"] ?><span>%off</span></p><?php } ?>
                        </div>
                        <div>
                            <div class="flex mt-1 ml-3 text-[#607d38]">
                                <?php if ($products["product_rating"] != null) {

                                    for ($i = 0; $i < $products["product_rating"]; $i++) { ?>

                                        <ion-icon name="star" class="lg:w-2 w-1 lg:h-2 h-1 mr-[2px]"></ion-icon>
                                <?php }
                                } ?>

                            </div>
                            <p class="text-center lg:text-xs text-[10px] font-medium text-[#607d38] mt-1 w-16 ml-1">Ks <?= $price ?></p>
                            <?php if (($products["p_discount"]) != null) { ?>
                                <p class="text-gray-700 text-center line-through text-[9px]">Ks <?= $products["p_sell_price"] ?></p> <?php } ?>

                        </div>
                    </div>
                </a>

            <?php } ?>
        </div>
    </div>
    <?php include "./common/commonFooter.php" ?>

</body>

</html>