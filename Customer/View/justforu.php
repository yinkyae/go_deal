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

    <title>Just for you</title>
</head>

<body class="relative">
    <navigation class="sticky z-50 top-0">

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

            <!-- checking user is logined or not-->
            <?php
            include "../Controller/accountController.php";

            if ($accountresult != null) {

                $customer_name = $accountresult[0]["c_name"];

            ?>

                <div>
                    <a href="./userProfile.php" class="py-1"><?= $customer_name ?></a>
                </div> <?php } else { ?>

                <div class="flex py-1">
                    <a href="./Registeration/login.php" class="mx-4">Login</a>
                    <a href="./Registeration/signup.php">Sign Up</a>
                </div>

            <?php } ?>

            <!-- checking user is logined or not finish-->
        </nav>
        <!--navigation bar end-->
        <!--menu bar start-->
        <div class="lg:inline hidden bg-white">
            <menu class="w-full flex justify-evenly py-2 border lg:visible invisible">
                <a href="./homepage.php" class="w-[100px] h-[30px]">
                    <img src="./resources/img/photo/Logo.png" alt="logo" class="pt-0">
                </a>

                <a href="./homepage.php">Home</a>
                <a href="./brandlist.php">Brand</a>
                <a href="./aboutUs.php">About Us</a>
                <a href="./aboutUs.php">Contact Us</a>
                <a href="./aboutUs.php">Help</a>

                <searchBar class="relative">
                    <input id="jfu_search" class="placeholder:italic placeholder:text-slate-400 block
         bg-white w-48 border border-slate-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" />

                    <ion-icon name="search" class="w-[17px] h-[17px] fill-[#607d38] absolute top-1 left-2"></ion-icon>
                </searchBar>
                <ion-icon name="notifications" class="w-[23px] h-[23px] fill-[#607d38]"></ion-icon>
                <?php if ($accountresult != null) { ?>
                    <a href="./cart.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38]"></ion-icon></a>

                <?php } else { ?>
                    <a href="./Registeration/signup.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38]"></ion-icon></a>
                <?php } ?>
            </menu>
        </div>
        <!--menu bar end-->
        <!--mobile menu bar start-->
        <div class="w-full flex justify-evenly py-2 lg:invisible sm:visible absolute top-0 bg-white">
            <div class="w-[70px] h-[20px]">
                <img src="./resources/img/photo/logo.png" alt="logo" class="pt-0">
            </div>
            <searchBar class="relative">
                <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-48 border border-slate-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" id="jfu_search_mobile" />

                <ion-icon name="search" class="w-[17px] h-[17px] fill-[#607d38] absolute top-1 left-2"></ion-icon>
            </searchBar>
            <ion-icon name="notifications" class="w-[20px] h-[20px] fill-[#607d38]"></ion-icon>
            <?php if ($accountresult != null) { ?>
                <a href="./cart.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38]"></ion-icon></a>

            <?php } else { ?>
                <a href="./Registeration/signup.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38]"></ion-icon></a>
            <?php } ?>
            <ion-icon name="menu-outline" class="w-[20px] h-[20px] text-[#607d38]" id="cate_menu"></ion-icon>
        </div>
        <div class="w-28 h-36 bg-black opacity-100 float-right  text-white text-center flex flex-col justify-evenly absolute top-10 right-2 lg:invisible sm:visible" id="cate_dropdown">
            <a href="./aboutUs.php">About Us</a>
            <a href="./brandlist.php">Brand</a>
            <?php if ($accountresult != null) { ?>
                <a href="./userProfile.php"><?= $customer_name ?></a> <?php } else { ?>

                <a href="./Registeration/signup.php">Sign Up </a>
                <a href="./Registeration/login.php">Login</a> <?php } ?>

        </div>


        <!--mobile menu bar end-->
    </navigation>
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

            foreach ($justForU_all_result as $jfu_products) {
                # code...
                $rating = $jfu_products["product_rating"];
                if (($jfu_products["p_discount"]) != null) {

                    $price = $jfu_products["p_sell_price"] - ((($jfu_products["p_discount"]) / 100)  * ($jfu_products["p_sell_price"]));
                } else $price = $jfu_products["p_sell_price"];
            ?>


                <!-- products card -->
                <a href="./detailpage.php?productid=<?= $jfu_products["id"] ?>" class=" lg:w-56 w-40 lg:h-64 h-60 bg-white drop-shadow-md mt-4  mx-4 rounded-xl group products_to_add" id="product_<?= $jfu_products["id"] ?>">

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
                    <div class="w-full h-3/4 mx-auto relative">

                        <div class="w-11/12 h-full mx-auto flex-col justify-items-center">
                            <img src="../..<?= $jfu_products["p_photo_1"] ?>" alt="" class="w-full h-full py-3 object-fill">

                        </div>

                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly w-full h-1/4">
                        <div>
                            <p class="text-center text-xs mt-1 text-green-800"><?= $jfu_products["p_title"] ?></p>
                            <p class=" lg:block text-[10px] text-center hidden text-gray-600 "><?= $jfu_products["p_des"] ?></p>
                            <?php if (($jfu_products["p_discount"]) != null) { ?> <p class="text-[#607d38] lg:text-xs text-[9px] mt-2 ml-2"><?= $jfu_products["p_discount"] ?><span>%off</span></p><?php } ?>
                        </div>
                        <div>
                            <div class="flex mt-1 ml-3 text-[#607d38]">
                                <?php if ($jfu_products["product_rating"] != null) {

                                    for ($i = 0; $i < $jfu_products["product_rating"]; $i++) { ?>

                                        <ion-icon name="star" class="lg:w-2 w-1 lg:h-2 h-1 mr-[2px]"></ion-icon>
                                <?php }
                                } ?>

                            </div>
                            <p class="text-center lg:text-xs text-[10px] font-medium text-[#607d38] mt-1 w-16 ml-1">Ks <?= $price ?></p>
                            <?php if (($jfu_products["p_discount"]) != null) { ?>
                                <p class="text-gray-700 text-center line-through text-[9px]">Ks <?= $jfu_products["p_sell_price"] ?></p> <?php } ?>

                        </div>
                    </div>
                </a>
            <?php } ?>


        </div>
    </div>

    <?php include "./common/commonFooter.php" ?>


</body>

</html>