<?php
session_start();
include "../../Controller/productController.php";
// print_r($products);
include "../../Controller/categoryListController.php";
// print_r($categories);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <!-- tailwind -->
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <!-- <link href="../resources/lib/tailwind/output.css" rel="stylesheet"> -->
    <!-- css -->
    <link rel="stylesheet" href="../resources/css/style.css">
    <!-- chartjs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- chart script file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.41.0/apexcharts.min.js" integrity="sha512-bp/xZXR0Wn5q5TgPtz7EbgZlRrIU3tsqoROPe9sLwdY6Z+0p6XRzr7/JzqQUfTSD3rWanL6WUVW7peD4zSY/vQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="../resources/css/product.css" />

    <script src="../resources/lib/jquery/jQuery v3.7.0.js"></script>
    <script src="../resources/js/searchProduct.js?id=<?= time() ?>"></script>
    <script src="../resources/js/menuCategory.js?id=<?= time() ?>" defer></script>
    <script src="../resources/js/searchCategory.js?id=<?= time() ?>"></script>
    <script src="../resources/js/searchSubcategory.js?id=<?= time() ?>"></script>
</head>
<body>
    <?php include "../Layout/nav.php"; ?>
    <!-- start of right side -->
    <div class="z-50 fixed ml-64 text-blueText text-md font-bold pl-5 pr-2 py-1 flex flex-row items-center shadow-3xl bg-orange rounded-lg">
        <form class="">
            <div class="flex  items-center space-x-80">
                <!-- <button id="multiLevelDropdownButton" data-dropdown-toggle="dropdown" data-dropdown-trigger="hover" class="group text-blueText text-md px-5 py-2.5 text-center inline-flex items-center" type="button">
                    <span class="text-white group-hover:text-button">Categories</span>
                    <svg class="w-3 h-3 ml-2.5 mt-1 fill-whiteText group-hover:fill-button" height="512px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M184.7,413.1l2.1-1.8l156.5-136c5.3-4.6,8.6-11.5,8.6-19.2c0-7.7-3.4-14.6-8.6-19.2L187.1,101l-2.6-2.3  C182,97,179,96,175.8,96c-8.7,0-15.8,7.4-15.8,16.6h0v286.8h0c0,9.2,7.1,16.6,15.8,16.6C179.1,416,182.2,414.9,184.7,413.1z" />
                    </svg>
                </button> -->
                <!-- Dropdown menu -->
                <!-- <div id="dropdown" class="z-10 hidden bg-orange divide-y divide-gray-100 rounded-md shadow dark:bg-gray-700">
                    <ul id="" class="py-1 space-y-1 px-2 text-sm text-whiteText dark:text-gray-200 divide-y px-2 divide-whiteText" aria-labelledby="multiLevelDropdownButton">
                        <?php foreach ($categories as $category) { ?>
                            <li class="">
                                <button class="ddrop relative bg-whiteText text-orange w-40 h-10 rounded-xs" id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-trigger="hover" data-dropdown-placement="right-start" type="button" class=" flex  items-center justify-between w-full px-4 py-2 hover:bg-whiteText hover:text-orange dark:hover:bg-gray-600 dark:hover:text-white">
                                    <?= $category["cat_name"] ?>
                                    <p hidden><?= $category["id"] ?></p>
                                </button>
                                <div id="doubleDropdown" class="absolute z-10 hidden border-2 border-orange bg-orange hover:bg-whiteText hover:text-orange shadow-3xl text-whiteText divide-whiteText rounded-lg w-44 dark:bg-gray-700">
                                    <ul id="subdropdown" class="py-2 text-sm divide-y px-2 divide-whiteText dark:text-gray-200" aria-labelledby="doubleDropdownButton">
                                    </ul>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div> -->
                <!-- component -->
                <div class="group inline-block">
                    <button class="outline-none focus:outline-none px-3 py-1 rounded-sm flex items-center min-w-32">
                        <span class="pr-1 font-semibold flex-1 text-whiteText">Categoreis</span>
                        <span>
                            <svg class="w-3 h-3 ml-2.5 mt-1 fill-whiteText" height="512px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="M184.7,413.1l2.1-1.8l156.5-136c5.3-4.6,8.6-11.5,8.6-19.2c0-7.7-3.4-14.6-8.6-19.2L187.1,101l-2.6-2.3  C182,97,179,96,175.8,96c-8.7,0-15.8,7.4-15.8,16.6h0v286.8h0c0,9.2,7.1,16.6,15.8,16.6C179.1,416,182.2,414.9,184.7,413.1z" />
                            </svg>
                        </span>
                    </button>
                    <ul class="bg-orange text-white text-sm border-2 border-white rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32 ">
                        <?php foreach ($categories as $category) { ?>
                            <li class="rounded-sm relative px-3 py-1 hover:bg-whiteText hover:text-orange border-2">
                                <button class="ddrop w-full text-left flex items-center hover:border-2 hover:border-orange outline-none focus:outline-none space-x-2 px-4 py-2">
                                    <span class="pr-1 flex-1"><?= $category["cat_name"] ?></span>
                                    <p hidden><?= $category["id"] ?></p>
                                    <span class="mr-auto">
                                        <svg class="fill-whiteText h-4 w-4 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </span>
                                </button>

                                <ul class="subdropdown divide-y bg-orange border-2 border-whiteText text-whiteText rounded-sm absolute top-0 right-0 transition duration-150 ease-in-out origin-top-left min-w-32">

                                </ul>
                            </li>

                        <?php } ?>
                    </ul>
                </div>
              
                <link rel="stylesheet" href="../resources/css/dropdown.css" />

                <a href="../Products/addProduct.php" class="ml-[150px] text-whiteText hover:text-button">Add Product</a>
                <!-- start of search bar -->
                <div class="relative w-[300px] ml-[250px]">
                    <input type="text" id="search" class="rounded-xl border-0 bg-search font-ABeeZee block p-2.5 text-center w-full text-md text-blueText" placeholder="Search..........." required>
                    <svg class="w-5 h-5 absolute text-inputBox top-[15px] left-[20px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                    <svg class="w-5 text-inputBox stroke-current h-5 absolute top-[15px] right-[20px]" style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="grid_system" />
                        <g id="_icons">
                            <path d="M4,17h8.1c0.4,1.7,2,3,3.9,3s3.4-1.3,3.9-3H20c0.6,0,1-0.4,1-1s-0.4-1-1-1h-0.1c-0.4-1.7-2-3-3.9-3s-3.4,1.3-3.9,3H4   c-0.6,0-1,0.4-1,1S3.4,17,4,17z M16,14c1.1,0,2,0.9,2,2s-0.9,2-2,2s-2-0.9-2-2S14.9,14,16,14z" />
                            <path d="M4,9h0.1c0.4,1.7,2,3,3.9,3s3.4-1.3,3.9-3H20c0.6,0,1-0.4,1-1s-0.4-1-1-1h-8.1c-0.4-1.7-2-3-3.9-3S4.6,5.3,4.1,7H4   C3.4,7,3,7.4,3,8S3.4,9,4,9z M8,6c1.1,0,2,0.9,2,2s-0.9,2-2,2S6,9.1,6,8S6.9,6,8,6z" />
                        </g>
                    </svg>
                    <!-- </button> -->
                </div>
                <!-- end of search bar -->
            </div>
        </form>
    </div>
    <div id="searchResult" class="mt-10 space-x-10 pl-5 ml-40 pb-10 flex flex-wrap justify-center items-center">
        <?php foreach ($products as $product) { ?>
            <div class="mt-10 max-w-[250px] bg-white rounded-lg shadow-3xl">
                <a href="#">
                    <img class="rounded-t-lg" src="
                    <?php if ($product["p_photo_1"] == "/Storage/products/") { ?>
                                    ../resources/img/default_img1.jpg
                                <?php } else { ?>
                                    ../../../<?= $product["p_photo_1"];
                                            };
                                                ?>" alt="" />

                </a>
                <div class="px-5 pb-5" <a href="#" class="">
                    <h5 class="mt-5 text-md font-semibold tracking-tight text-blueText dark:text-white"><?php echo $product["p_title"] ?></h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <?php for ($i = 0; $i < $product["product_rating"]; $i++) {
                        ?>
                            <svg class="fill-orange w-3 h-3 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                        <?php }
                        ?>
                        <?php for ($i = 0; $i < 5 - $product["product_rating"]; $i++) {
                        ?>
                            <svg class=" w-3 h-3 text-inputBox mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                        <?php }
                        ?>
                        <span class="bg-blue-100 text-blueText text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3"><?= $product["product_rating"] ?></span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-blueText dark:text-white"><?php echo $product["p_sell_price"] ?>Ks</span>

                        <a href="./productDetails.php?id=<?= $product["id"] ?>" name="pDetailsBtn" class="inline-flex items-center px-2 py-1 text-xs font-medium text-center text-whiteText bg-orange rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Details

                            <svg class="w-2 h-2 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="whiteText" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- end of right side -->
</body>

</html>