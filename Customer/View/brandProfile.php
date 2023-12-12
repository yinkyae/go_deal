<?php if (!isset($_GET["brand_id"])) {

    header("Location: ./brandlist.php");
} ?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/css/categoryProduct.css">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script src="./resources/js/menu.js" defer></script>
    <script src="./resources/js/herosection.js?id=<?= time() ?>" defer></script>
    <script src="./resources/js/brandP_search.js?id=<?= time() ?>" defer></script>
    <script src="./resources/js/all_add_to_cart.js?id=<?= time() ?>" defer></script>
    <script src="./resources/js/all_add_to_wishlist.js?id=<?= time() ?>" defer></script>
    <script src="./resources/js/viewDetail.js?id=<?= time() ?>" defer></script>
    <script src="./resources/js/formatPrice.js?id=<?= time() ?>" defer></script>

    <title>BrandProfile</title>
</head>



<body class="relative">
    <navigation class="sticky top-0 z-50">
        <nav class=" invisible lg:w-full lg:h-6 bg-[#607d38] flex justify-evenly text-white text-xs  lg:visible ">
            <div class="flex justify-between py-1">
                <phone class="flex mr-4">
                    <ion-icon name="call-outline" class="mx-2 py-[2px]"></ion-icon>
                    <p>09758895513</p>
                </phone>
                <message class="flex">
                    <ion-icon name="mail-open-outline" class="mx-2 py-[2px]"></ion-icon>
                    <p>godeal33@gmail.com</p>
            </div>
            </message>


            <?php
            include "../Controller/accountController.php";

            if ($accountresult != null) {

                $customer_name = $accountresult[0]["c_name"];

            ?>

                <div>
                    <a href="./userProfile.php" class="py-1 hover:font-bold"><?= $customer_name ?></a>
                </div> <?php } else { ?>

                <div class="flex py-1">
                    <a href="./Registeration/login.php" class="mx-4 hover:font-bold">Login</a>
                    <a href="./Registeration/signup.php" class=" hover:font-bold">Sign Up</a>
                </div>

            <?php } ?>
        </nav>
        <!--navigation bar end-->
        <!--menu bar start-->


        <?php if (isset($_SESSION["user_account"])) {

            $is_customer = 1;
        } else {

            $is_customer = 2;
        } ?>

        <div class="lg:inline hidden">
            <menu class="w-full flex justify-evenly py-2 border relative  bg-white">
                <div class="w-[100px] h-[30px] absolute left-20">
                    <img src="./resources/img/photo/Logo.png" alt="logo" class="pt-0">
                </div>

                <div class="flex w-1/3 justify-evenly mx-auto">
                    <a href="./homepage.php" class="hover:font-medium hover:text-orange-500 hover:underline   ">Home</a>
                    <a href="./brandlist.php" class="hover:font-medium hover:text-orange-500 hover:underline  ">Brand</a>
                    <a href="./aboutUs.php" class="hover:font-medium  hover:text-orange-500 hover:underline ">About Us</a>

                    <searchBar class="relative">
                        <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-48 border border-slate-300 rounded-md py-[2px] pl-8 pr-3 
            focus:outline-none focus:border-[#607d38] focus:ring-[#607d38] focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" id="brand_product_search" />
                        <ion-icon name="search" class="w-[17px] h-[17px] fill-[#607d38] absolute top-1 left-2"></ion-icon>
                    </searchBar>

                </div>
                <div class="w-28 flex justify-evenly absolute right-20">
                    <?php if ($accountresult != null) { ?>
                        <a href="./whislist.php"> <ion-icon name="heart" class="w-[20px] h-[20px] fill-[#607d38]  hover:fill-orange-500 hover:scale-110"></ion-icon></a>

                    <?php } else { ?>
                        <a href="./Registeration/signup.php" class="signup_check"> <ion-icon name="heart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110"></ion-icon></a>
                    <?php } ?>
                    <?php if ($accountresult != null) { ?>
                        <a href="./cart.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110"></ion-icon></a>

                    <?php } else { ?>
                        <a href="./Registeration/signup.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110"></ion-icon></a>
                    <?php } ?>
                </div>

            </menu>
        </div>
        <!--menu bar end-->
        <!--mobile menu bar start-->
        <div class="w-full flex justify-evenly py-2 lg:invisible sm:visible absolute top-0 bg-white">
            <div class="w-[70px] h-[20px]">
                <img src="./resources/img/photo/logo.png" alt="logo" class="pt-0">
            </div>

            <searchBar class="relative">
                <input class="placeholder:italic placeholder:text-slate-400 block
             bg-white w-48 border border-slate-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none focus:border-[#607d38]
              focus:ring-[#607d38] focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" id="brand_product_search_mobile" />

                <ion-icon name="search" class="w-[17px] h-[17px] fill-[#607d38] absolute top-1 left-2"></ion-icon>
            </searchBar>
            <ion-icon name="heart" class="w-[20px] h-[20px] fill-[#607d38]"></ion-icon>
            <?php if ($accountresult != null) { ?>
                <a href="./cart.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38]"></ion-icon></a>

            <?php } else { ?>
                <a href="./Registeration/signup.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38]"></ion-icon></a>
            <?php } ?>
            <ion-icon name="menu-outline" class="w-[20px] h-[20px] text-[#607d38]" id="brandP_menu"></ion-icon>
        </div>
        <div class="w-28 h-36 bg-black opacity-70 float-right  text-white text-center flex flex-col justify-evenly absolute top-10 right-2 lg:invisible sm:visible" id="brandP_dropdown">
            <a href="./aboutUs.php">About Us</a>
            <a href="./brandlist.php">Brand</a>
            <?php if ($accountresult != null) { ?>
                <a href="./userProfile.php"><?= $customer_name ?></a> <?php } else { ?>

                <a href="./Registeration/signup.php">Sign Up </a>
                <a href="./Registeration/login.php">Login</a> <?php } ?>

        </div>
    </navigation>
    <!--mobile menu bar end-->


    <?php include "../Controller/brandProfileController.php";
    $_SESSION["brand_id"] = $brand_id;
    ?>

    <div class="lg:w-2/3 w-11/12 mx-auto lg:h-72 h-44 flex lg:mt-4 mt-8">
        <div class="w-full lg:h-72 h-full inline b_hero_img"> <img src="../..<?= $brand_products[0]["b_banner_1"] ?>" alt="banner1" class="w-full h-full"></div>
        <div class="w-full lg:h-72 h-full hidden b_hero_img"> <img src="../..<?= $brand_products[0]["b_banner_2"] ?>" alt="banner2" class="w-full h-full"></div>

        <div class="w-full lg:h-72 h-full hidden b_hero_img"> <img src="../..<?= $brand_products[0]["b_banner_3"] ?>" alt="banner3" class="w-full h-full"></div>

        <div class="w-full lg:h-72 h-full hidden b_hero_img"> <img src="../..<?= $brand_products[0]["b_banner_4"] ?>" alt="banner4" class="w-full h-full"></div>
    </div>




    <div class="absolute w-full h-full top-0 right-0 bg-gray-900/30 flex flex-col justify-center z-50 items-center show_detail">

        <div class="absolute top-32 left-72 w-1/2 h-96 drop-shadow-md bg-white rounded z-50 ">
            <ion-icon name="close-outline" class="float-right scale-150 mt-2 mr-2 close_detail_popup"></ion-icon>
            <div class="show_detail_product w-full h-full"></div>
        </div>

    </div>

    <div class="flex flex-wrap my-2 py-2 lg:w-10/12 w-11/12 mx-auto " id="b_profile_body" isLogin="<?= $is_customer ?>">



        <?php foreach ($brand_products as $brand_product) {


            $rating = $brand_product["product_rating"];
            if (($brand_product["p_discount"]) != null) {

                $price = $brand_product["p_sell_price"] - ((($brand_product["p_discount"]) / 100)  * ($brand_product["p_sell_price"]));
            } else $price = $brand_product["p_sell_price"];
        ?>


            <!-- products card -->
            <a href="./detailpage.php?productid=<?= $brand_product["id"] ?>" class="lg:w-56 w-40 lg:h-72 h-60 lg:ml-4 ml-2 bg-white drop-shadow-md mt-8 group products_to_add rounded-xl " id="product_<?= $brand_product["id"] ?>">

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
                <div class="w-full h-2/3 mx-auto relative">
                    <div class="w-11/12 h-full mt-2 mx-auto flex-col justify-items-center">
                        <img src="../..<?= $brand_product["p_photo_1"] ?>" alt="" class="w-full h-full ">
                    </div>
                </div>
                <!-- product information -->
                <div class="flex justify-evenly w-full mt-3 h-1/3">
                    <div>
                        <p class="text-center text-xs mt-1 text-green-800"><?= $brand_product["p_title"] ?></p>
                        <p class="lg:block text-[10px] text-center hidden text-gray-600 "><?= $brand_product["p_des"] ?></p>
                        <?php if (($brand_product["p_discount"]) != null) { ?> <p class="text-red-500 lg:text-xs text-[9px] mt-2 ml-2"><?= $brand_product["p_discount"] ?><span>%off</span></p><?php } ?>
                    </div>
                    <div>
                        <div class="flex mt-1 ml-3 text-[#9ACD32]">
                            <?php if ($brand_product["product_rating"] != null) {

                                for ($i = 0; $i < $brand_product["product_rating"]; $i++) { ?>

                                    <ion-icon name="star" class="lg:w-2 w-1 lg:h-2 h-1 mr-[2px]"></ion-icon>
                            <?php }
                            } ?>

                        </div>
                        <p class="text-center lg:text-xs text-[10px] font-medium text-[#607d38] mt-1 w-16 ml-1">Ks <span class="all_price"> <?= $price ?></span></p>
                        <?php if (($brand_product["p_discount"]) != null) { ?>
                            <p class="text-gray-700 text-center line-through text-[9px]">Ks <span class="all_price"><?= $brand_product["p_sell_price"] ?></span></p> <?php } ?>

                    </div>
                </div>
            </a>
        <?php } ?>


    </div>


    <?php include "../View/common/commonFooter.php" ?>


</body>

</html>