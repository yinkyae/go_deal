<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link rel="stylesheet" href="./resources/css/categoryProduct.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/logoSlider.css?id=<?= time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz@10..48&display=swap" rel="stylesheet">
    <!-- Include necessary CSS and JS files for Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./resources/js/homeSearch.js?id=<?= time() ?>" defer></script>
    <script src="./resources/js/menu.js" defer></script>
    <script src="./resources/js/herosection.js?id=<?= time() ?>" defer></script>
    <script src="./resources/js/logoSlider.js?id=<?= time() ?>" defer></script>
    <script src="./resources/js/all_add_to_wishlist.js?id=<?= time() ?>" defer></script>
    <script src="./resources/js/all_add_to_cart.js?id=<?= time() ?>" defer></script>
    <script src="./resources/js/viewDetail.js?id=<?= time() ?>" defer></script>
    <script src="./resources/js/formatPrice.js?id=<?= time() ?>"></script>



    <title>Home</title>
</head>

<body class="relative overflow-x-hidden">

    <!--navgation and header section start-->
    <div class="sticky top-0 z-50 ">

        <div class="lg:inline hidden">

            <nav class="lg:w-full lg:h-6 bg-[#607d38] flex justify-evenly text-white text-xs">
                <div class=" flex justify-between py-1">
                    <phone class="flex mr-4">
                        <ion-icon name="call-outline" class="mx-2 py-[2px]"></ion-icon>
                        <p>09758895513</p>
                    </phone>
                    <message class="flex">
                        <ion-icon name="mail-open-outline" class="mx-2 py-[2px]"></ion-icon>
                        <a href="https://mail.google.com/mail/u/0/#inbox">g3phpproject03@gmail.com</a>

                    </message>
                </div>
                <?php
                include "../Controller/accountController.php";

                if ($accountresult != null) {

                    $customer_name = $accountresult[0]["c_name"];

                ?>

                    <div class="flex w-28 justify-evenly py-1">
                        <div class="w-4 h-4 rounded-full"><a href="./userProfile.php"><img src="../../<?= $accountresult[0]["c_profile"] ?>" alt="" class="w-full h-full rounded-full"></a></div>
                        <a href="./userProfile.php" class=" hover:font-bold hover:underline"><?= $customer_name ?></a>
                    </div> <?php } else { ?>

                    <div class="flex py-1">
                        <a href="./Registeration/login.php" class="mx-4 hover:font-bold hover:underline ease-in-out delay-200">Login</a>
                        <a href="./Registeration/signup.php" class="hover:font-bold hover:underline ">Sign Up</a>
                    </div>

                <?php } ?>

            </nav>
        </div>
        <!--navigation bar end-->
        <!--menu bar start-->
        <div class="lg:inline hidden ">
            <menu class="w-full flex py-2 border relative bg-white">
                <div class="absolute left-20 w-[100px] h-[30px]">
                    <a href="./homepage.php" class="w-full h-full">
                        <img src="./resources/img/logo.png" alt="logo" class="w-full h-full">
                    </a>
                </div>
                <div class="w-1/3 mx-auto flex justify-around">
                    <div class="flex w-72 justify-evenly">
                        <a href="./homepage.php" class="hover:font-medium hover:text-orange-500 hover:underline">Home</a>
                        <a href="./brandlist.php" class="hover:font-medium hover:text-orange-500 hover:underline">Brand</a>
                        <a href="./aboutUs.php" class="hover:font-medium hover:text-orange-500 hover:underline">About Us</a>
                    </div>

                    <searchBar class="relative w-48">
                        <input id="home_search" class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-[#607d38] rounded-md py-[2px] pl-8 pr-3 focus:outline-none focus:border-[#607d38] focus:ring-[#607d38] focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" />

                        <ion-icon name="search" class="w-[17px] h-[17px] fill-[#607d38] absolute top-1 left-2"></ion-icon>
                    </searchBar>

                </div>
                <div class="w-40 flex justify-evenly absolute right-10">
                    <?php if ($accountresult != null) { ?>
                        <a href="./whislist.php"> <ion-icon name="heart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110" title="view wishlist"></ion-icon></a>
                    <?php } else { ?>
                        <a href="./Registeration/signup.php"> <ion-icon name="heart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110" title="view wishlist"></ion-icon></a>
                    <?php } ?>

                    <?php if ($accountresult != null) { ?>
                        <a href="./cart.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110" title="view cart"></ion-icon></a>

                    <?php } else { ?>
                        <a href="./Registeration/signup.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110" title="view cart"></ion-icon></a>
                    <?php } ?>
                </div>

            </menu>
        </div>

        <!--menu bar end-->
        <!--mobile menu bar start-->

        <div class="lg:hidden inline ">
            <div class="w-full flex justify-evenly py-2 bg-white ">
                <div class="w-[70px] h-[20px]">
                    <img src="./resources/img/logo.png" alt="logo" class="w-full h-full">
                </div>
                <searchBar class="relative">
                    <input id="home_search_mobile" class="placeholder:italic placeholder:text-slate-400 block
         bg-white w-48 border border-[#607d38] rounded-md py-[2px] pl-8 pr-3 focus:outline-none
          focus:border-[#607d38] focus:ring-[#607d38] focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" />


                    <ion-icon name="search" class="w-[17px] h-[17px] fill-[#607d38] absolute top-1 left-2"></ion-icon>
                </searchBar>
                <ion-icon name="heart_outline" class="w-[20px] h-[20px] fill-[#607d38]"></ion-icon>
                <!-- check user locked in or not to go cart page -->
                <?php if ($accountresult != null) { ?>
                    <a href="./cart.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38]" title="view cart"></ion-icon></a>

                <?php } else { ?>
                    <a href="./Registeration/signup.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38]" title="view cart"></ion-icon></a>
                <?php } ?>
                <!-- cart check done -->
                <!-- humbarger menu for mobile phone -->
                <ion-icon name="menu-outline" class="w-[20px] h-[20px] text-[#607d38]" id="home_menu"></ion-icon>
            </div>

            <div class="w-28 h-36 bg-black opacity-70 float-right  text-white text-center flex flex-col justify-evenly top-10 right-2 absolute lg:invisible visible " id="home_dropdown">
                <a href="./aboutUs.php">About Us</a>
                <a href="./brandlist.php">Brand</a>
                <?php if ($accountresult != null) { ?>
                    <a href="./userProfile.php"><?= $customer_name ?></a> <?php } else { ?>

                    <a href="./Registeration/signup.php">Sign Up </a>
                    <a href="./Registeration/login.php">Login</a> <?php } ?>

            </div>

        </div>
    </div>
    <!--mobile menu bar end-->

    <!--navgation and header session end-->



    <?php if (isset($_SESSION["user_account"])) {

        $is_customer = 1;
    } else {

        $is_customer = 2;
    }
    ?>


    <div class="sticky w-full h-full top-0 right-0 bg-gray-900/30 flex flex-col justify-center z-50 items-center show_detail">

        <div class="absolute top-32 left-72 w-1/2 h-96 drop-shadow-md bg-white rounded z-50 ">
            <ion-icon name="close-outline" class="float-right scale-150 mt-2 mr-2 close_detail_popup hover:text-red-600 hover:text-lg"></ion-icon>
            <div class="show_detail_product w-full h-full"></div>
        </div>

    </div>


    <main class=" w-full mt-0 mb-5" id="home_main_section" islogin=<?= $is_customer ?>>



        <!-- hero session-->

        <div class="lg:w-11/12 w-full flex lg:flex-row flex-col justify-around overflow-x-hidden mx-auto relative mb-5 h-64 lg:h-80">
            <!-- category for desktop -->
            <div class="lg:w-[15%] lg:inline hidden">

                <div class="border-b-2 py-1 lg:w-full w-1/3 border-b-white  mb-2 bg-[#607d38] ">
                    <p class="text-2xl  font-medium text-white text-center">Category</p>
                </div>
                <div class="w-full h-[87%] overflow-y-auto ">


                    <?php include "../Controller/homeController.php" ?>
                    <?php foreach ($result as $category) { ?>

                        <a href="./categoryProduct.php?category_id=<?= $category["id"] ?>" class="w-full h-6 border-b-2 border-b-white text-[#607d38] hover:underline">

                            <p class="text-center text-base font-medium py-1" name="catename"><?= $category["cat_name"] ?></p>
                        </a>

                    <?php } ?>

                </div>
            </div>

            <!-- Hero section images -->

            <div class="w-full lg:w-2/3 h-full relative flex overflow-x-hidden ml-20 mt-3 ">
                <!-- first photo of hero section -->
                <div class="w-full relative inline">
                    <img src="./resources/img/shopping.png" alt="" class="w-2/3 h-full">
                </div>
                <div id="dots"></div>
            </div>
        </div>

        <!-- cathegory for mobile view-->
        <div class="h-32 lg:hidden inline  ml-2">
            <div class=" w-full h-full">
                <div class=" w-full overflow-x-auto grid grid-cols-3">
                    <?php include "../Controller/homeController.php";
                    foreach ($result as $category) { ?>
                        <a href="./categoryProduct.php?category_id=<?= $category["id"] ?>" class=" h-8 py-1 my-1 mx-1 rounded-lg drop-shadow bg-gray-100  cate_item" id="cate_<?= $category["id"] ?>">
                            <p class="text-center text-sm" name="catename"><?= $category["cat_name"] ?></p>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!-- BRANDS SECTION -->

        <div class="lg:inline hidden">

            <div class="w-10/12 mx-auto overflow-x-hidden mt-14 relative">

                <?php include "../Controller/brandlistController.php"; ?>

                <div id="brandSlider" class="owl-carousel w-10/12">
                    <?php foreach ($brand_home_result as $brand) { ?>
                        <div class="item w-20 h-20 py-2 hover:scale-125 ease-in-out duration-300">
                            <img src="../../<?= $brand["brand_photo"] ?>" alt="" class="w-full h-full">
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>

        <!-- popular products -->
        <div class="lg:w-1/2 w-4/5 mx-auto lg:mt-14 mt-0 lg:mb-4 mb-0 lg:h-56 h-40">

            <img src="./resources/img/bestSeller1.jpg" alt="" class="w-full h-full">

        </div>

        <div class=" lg:w-3/5 w-11/12 mx-auto">
            <?php include "../Controller/homeProduct_Controller.php" ?>
            <div class=" lg:w-11/12 w-full mx-auto flex flex-wrap">
                <!-- products card -->
                <?php foreach ($popular_result as $popular_product) {


                    $rating = $popular_product["product_rating"];
                    if (($popular_product["p_discount"]) != null) {

                        $price = $popular_product["p_sell_price"] - ((($popular_product["p_discount"]) / 100)  * ($popular_product["p_sell_price"]));
                    } else $price = $popular_product["p_sell_price"];
                ?>



                    <!-- products card -->


                    <a href="./detailpage.php?productid=<?= $popular_product["id"] ?>" class=" lg:w-56 w-40 lg:h-64 h-60 bg-white drop-shadow-md lg:mt-5 lg:mx-5 mx-2 mt-2 rounded-xl products_to_add group" id="product_<?= $popular_product["id"] ?>">
                        <!-- product image -->

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
                        <div class="w-3/4 h-3/4 mx-auto relative">

                            <div class="w-11/12 h-full mx-auto flex-col justify-items-center">
                                <img src="../..<?= $popular_product["p_photo_1"] ?>" alt="" class="w-full h-full py-3 object-fill">
                            </div>

                        </div>
                        <!-- product information -->
                        <div class="flex justify-evenly w-full h-1/4">
                            <div>
                                <p class="text-center text-xs mt-1 text-green-800"><?= $popular_product["p_title"] ?></p>
                                <p class=" lg:block text-[10px] text-center hidden text-gray-600 "><?= $popular_product["p_des"] ?></p>
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
                                <p class="text-center lg:text-xs text-[10px] font-medium text-[#607d38] mt-1 w-16 ml-1">Ks <span class="all_price"> <?= $price ?></span></p>
                                <?php if (($popular_product["p_discount"]) != null) { ?>
                                    <p class="text-gray-700 text-center line-through text-[9px]">Ks <span class="all_price"><?= $popular_product["p_sell_price"] ?></span></p> <?php } ?>

                            </div>
                        </div>
                    </a>

                <?php } ?>
            </div>
            <div class="w-full flex items-center mt-5">
                <hr class="flex-grow">
                <div class=" mx-5 w-32 text-center border-[1px] border-orange-500 rounded-md hover:bg-orange-400 hover:text-white">
                    <a href="./popularproduct.php" class="text-base px-4">See More</a>
                </div>

                <hr class="flex-grow">
            </div>

        </div>


        <div class="lg:w-1/2 w-11/12 mx-auto mt-14 mb-4 lg:h-56 h-40 ">

            <img src="../../Storage/products/saleBanner5.avif" alt="" class="w-full h-full">

        </div>
        <!-- Just for you products-->
        <div class="lg:w-3/5 w-11/12 mx-auto">
            <div class="lg:w-11/12 w-full mx-auto flex flex-wrap">
                <!-- products card -->
                <?php foreach ($justForU_result as $justForU_product) {



                    # code...
                    $rating = $justForU_product["product_rating"];
                    if (($justForU_product["p_discount"]) != null) {

                        $price = $justForU_product["p_sell_price"] - ((($justForU_product["p_discount"]) / 100)  * ($justForU_product["p_sell_price"]));
                    } else $price = $justForU_product["p_sell_price"];
                ?>


                    <!-- products card -->
                    <a href="./detailpage.php?productid=<?= $justForU_product["id"] ?>" class="lg:w-56 w-40 lg:h-64 h-60 bg-white drop-shadow-md lg:mt-5 mt-2 rounded-xl lg:mx-5 mx-2 products_to_add group" id="product_<?= $justForU_product["id"] ?>">

                        <!-- product image -->

                        <div class="w-full h-full absolute opacity-0 bg-green-800/20 -top-10 group-hover:top-0
                         z-50 group-hover:opacity-100 rounded-xl transition-all delay-100 ease-in-out flex flex-col justify-around">

                            <div>
                                <div class="w-32 mx-auto flex justify-evenly">

                                    <div class=" rounded-full bg-white all_wishlist hover:bg-green-600" title="Add to wishlist" islogin=<?= $is_customer ?>>
                                        <ion-icon name="heart" class="scale-150 mt-1 text-green-600 px-2 py-1  hover:text-white"></ion-icon>
                                    </div>

                                    <div class=" rounded-full bg-white all_cart hover:bg-green-600" title="Add to cart" islogin=<?= $is_customer ?>>
                                        <ion-icon name="cart" class="scale-150 mt-1 text-green-600 px-2 py-1 hover:text-white"></ion-icon>
                                    </div>

                                    <div class=" rounded-full bg-white view_detail hover:bg-green-600 view_detail" title="view deatil" islogin=<?= $is_customer ?>>
                                        <ion-icon name="eye-outline" class="scale-150 mt-1 text-green-600 px-2 py-1 hover:text-white"></ion-icon>
                                    </div>
                                </div>

                                <div class="w-36  bg-white text-gray-500 text-xs rounded-3xl mx-auto py-1 mt-2 text-center all_notice"></div>

                            </div>
                        </div>

                        <div class="w-11/12 h-3/4 mx-auto relative">
                            <div class="w-full h-full mx-auto flex-col justify-items-center">
                                <img src="../..<?= $justForU_product["p_photo_1"] ?>" alt="" class="w-full h-full">
                            </div>
                        </div>
                        <!-- product information -->
                        <div class="flex justify-evenly w-full h-1/4">
                            <div>
                                <p class="text-center text-xs mt-1 text-green-800"><?= $justForU_product["p_title"] ?></p>
                                <p class="lg:block text-[10px] text-center hidden text-gray-600 "><?= $justForU_product["p_des"] ?></p>
                                <?php if (($justForU_product["p_discount"]) != null) { ?> <p class="text-red-500 lg:text-xs text-[9px] mt-2 ml-2"><?= $justForU_product["p_discount"] ?><span>%off</span></p><?php } ?>
                            </div>
                            <div>
                                <div class="flex mt-1 ml-3 text-[#9ACD32]">
                                    <?php if ($justForU_product["product_rating"] != null) {

                                        for ($i = 0; $i < $justForU_product["product_rating"]; $i++) { ?>

                                            <ion-icon name="star" class="lg:w-2 w-1 lg:h-2 h-1 mr-[2px]"></ion-icon>
                                    <?php }
                                    } ?>

                                </div>
                                <p class="text-center lg:text-xs text-[10px] font-medium text-[#607d38] mt-1 w-16 ml-1">Ks <span class="all_price"><?= $price ?></span></p>
                                <?php if (($justForU_product["p_discount"]) != null) { ?>
                                    <p class="text-gray-700 text-center line-through text-[9px]">Ks <span class="all_price"><?= $justForU_product["p_sell_price"] ?></span></p><?php } ?>

                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <div class="w-full flex items-center mt-5">
                <hr class="flex-grow">
                <div class=" mx-5 w-32 text-center border-[1px] border-orange-500 rounded-md hover:bg-orange-400 hover:text-white">
                    <a href="./justforu.php" class="text-base px-4">See More</a>
                </div>

                <hr class="flex-grow">
            </div>
        </div>
        <!-- new arrivals -->
        <div class="lg:w-1/2 w-full mx-auto mt-14 mb-4 lg:h-56 h-40">

            <img src="../../Storage/products/new_ArrivalBanner.jpg" alt="" class="w-full h-full">

        </div>

        <div class="lg:w-3/5 w-11/12 mt-4 mx-auto">
            <div class="lg:w-full w-full mx-auto flex flex-wrap">
                <!-- products card -->
                <?php foreach ($newArrival_result as $newArrival_product) {



                    # code...
                    $rating = $newArrival_product["product_rating"];
                    if (($newArrival_product["p_discount"]) != null) {

                        $price = $newArrival_product["p_sell_price"] - ((($newArrival_product["p_discount"]) / 100)  * ($newArrival_product["p_sell_price"]));
                    } else $price = $newArrival_product["p_sell_price"];
                ?>


                    <!-- products card -->
                    <a href="./detailpage.php?productid=<?= $newArrival_product["id"] ?>" class="lg:w-56 w-40 lg:h-64 h-60 bg-white lg:mx-6 mx-2  drop-shadow-md lg:mt-5 mt-2 products_to_add rounded-xl group" id="product_<?= $newArrival_product["id"] ?>">

                        <div class="w-full h-full absolute opacity-0 bg-green-800/20 -top-10 group-hover:top-0
                         z-50 group-hover:opacity-100 rounded-xl transition-all delay-100 ease-in-out flex flex-col justify-around">

                            <div>
                                <div class="w-32 mx-auto flex justify-evenly">

                                    <div class=" rounded-full bg-white all_wishlist hover:bg-green-600" title="Add to wishlist" islogin=<?= $is_customer ?>>
                                        <ion-icon name="heart" class="scale-150 mt-1 text-green-600 px-2 py-1  hover:text-white"></ion-icon>
                                    </div>

                                    <div class=" rounded-full bg-white all_cart hover:bg-green-600" title="Add to cart" islogin=<?= $is_customer ?>>
                                        <ion-icon name="cart" class="scale-150 mt-1 text-green-600 px-2 py-1 hover:text-white"></ion-icon>
                                    </div>

                                    <div class=" rounded-full bg-white  hover:bg-green-600 view_detail" title="view deatil" islogin=<?= $is_customer ?>>
                                        <ion-icon name="eye-outline" class="scale-150 mt-1 text-green-600 px-2 py-1 hover:text-white"></ion-icon>
                                    </div>
                                </div>

                                <div class="w-36  bg-white text-gray-500 text-xs rounded-3xl mx-auto py-1 mt-2 text-center all_notice"></div>

                            </div>
                        </div>

                        <!-- product image -->
                        <div class="w-11/12 mx-auto h-3/4 relative">
                            <div class="w-full h-full mx-auto flex-col justify-items-center">
                                <img src="../..<?= $newArrival_product["p_photo_1"] ?>" alt="" class="w-full h-full">
                            </div>
                        </div>
                        <!-- product information -->
                        <div class="flex justify-evenly w-full h-1/4">
                            <div>
                                <p class="text-center text-xs mt-1 text-green-800"><?= $newArrival_product["p_title"] ?></p>
                                <p class="  lg:block text-[10px] text-center hidden text-gray-600"><?= $newArrival_product["p_des"] ?></p>
                                <?php if (($newArrival_product["p_discount"]) != null) { ?> <p class="text-red-500 lg:text-xs text-[9px] mt-2 ml-2"><?= $newArrival_product["p_discount"] ?><span>%off</span></p><?php } ?>
                            </div>
                            <div>
                                <div class="flex mt-1 ml-3 text-[#9ACD32]">
                                    <?php if ($newArrival_product["product_rating"] != null) {

                                        for ($i = 0; $i < $newArrival_product["product_rating"]; $i++) { ?>

                                            <ion-icon name="star" class="lg:w-2 w-1 lg:h-2 h-1 mr-[2px]"></ion-icon>
                                    <?php }
                                    } ?>

                                </div>
                                <p class=" text-center lg:text-xs text-[10px] font-medium text-[#607d38] mt-1 w-16 ml-1">Ks<span class="all_price"> <?= $price ?> </span></p>
                                <?php if (($newArrival_product["p_discount"]) != null) { ?>
                                    <p class="text-gray-700 text-center line-through text-[9px]">Ks <span class="all_price"><?= $newArrival_product["p_sell_price"] ?> </span></p> <?php } ?>

                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <div class="w-full flex items-center mt-5">
                <hr class="flex-grow">
                <div class=" mx-5 w-32 text-center border-[1px] border-orange-500 rounded-md hover:bg-orange-400 hover:text-white">
                    <a href="./newArrival.php" class="text-base px-4">See More</a>
                </div>

                <hr class="flex-grow">
            </div>
        </div>


        </div>

        </div>
    </main>

    <?php include "./common/commonFooter.php" ?>

</body>


</html>