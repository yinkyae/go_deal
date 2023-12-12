<?php
include "../../Controller/productDetailsController.php";
// session_start();
// $productCat = $_SESSION["productCat"];
// $productSubcat = $_SESSION["productSubcat"];
// $productBrand = $_SESSION["productBrand"];
// $product = $_SESSION["product"];
// echo "<pre>";
// print_r($product);
// echo "</pre>";
// echo"<pre>";
// print_r($ratingCustomer);
// echo"</pre>";
// echo "<pre>";
// print_r($customers);
// echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details </title>
    <!-- tailwind -->
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <!-- <link href="../resources/lib/tailwind/output.css" rel="stylesheet"> -->
    <!-- css -->
    <link rel="stylesheet" href="../resources/css/style.css">
    <!-- chartjs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- chart script file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.41.0/apexcharts.min.js" integrity="sha512-bp/xZXR0Wn5q5TgPtz7EbgZlRrIU3tsqoROPe9sLwdY6Z+0p6XRzr7/JzqQUfTSD3rWanL6WUVW7peD4zSY/vQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../resources/js/main.js" defer></script>
    <script src="../resources/lib/jquery/jQuery v3.7.0.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="../resources/css/product.css">
</head>

<body>
    <?php include "../Layout/nav.php"; ?>
    <!-- start of right side -->
    <!-- title -->
    <div class="z-30 ml-20 bg-whiteText w-full flex flex-col justify-center items-center fixed">
        <div class="text-whiteText font-Tommorrow bg-orange border-2 rounded-full border-orange shadow-3xl px-20 py-5 text-xl font-bold mb-3 italic">Product Details</div>
        <!-- <div class="w-[500px] h-[10px] bg-orange shadow-3xl"></div> -->
    </div>
    <!-- end title -->


    <!-- start of product details -->
    <div class="z-10 mt-32 mb-10 ml-[300px]">
        <div class="flex flex-row space-x-10">

            <!-- start of edit photo -->

            <div class="grid grid-cols-2 gap-4 w-[400px] h-[400px]">

                <div class="grid gap-4">
                    <div>
                        <label for="default_img1">
                            <img class="h-auto max-w-full rounded-lg" id="img1" src="
                                <?php if ($productCat[0]["p_photo_1"] == "/Storage/products/") { ?>
                                    ../resources/img/default_img1.jpg
                                <?php } else { ?>
                                    ../../../<?= $productCat[0]["p_photo_1"];
                                            }
                                                ?>
                                 " alt="">
                        </label>

                        <input type="file" name="default_img1" id="default_img1" accept=".png,.jpeg" class="hidden">
                    </div>
                    <div>
                        <label for="default_img2">
                            <img class="h-auto max-w-full rounded-lg" id="img2" src="
                                <?php if ($productCat[0]["p_photo_2"] == "/Storage/products/") { ?>
                                    ../resources/img/default_img2.jpg
                                <?php } else { ?>
                                    ../../../<?= $productCat[0]["p_photo_2"];
                                            }

                                                ?>" alt="">
                        </label>
                        <input type="file" name="default_img2" id="default_img2" accept=".png,.jpeg" class="hidden">
                    </div>

                </div>
                <div class="grid gap-4">

                    <div>
                        <label for="default_img3">
                            <img class="h-auto max-w-full rounded-lg" id="img3" src="
                                <?php if ($productCat[0]["p_photo_3"] == "/Storage/products/") { ?>
                                    ../resources/img/default_img3.jpg
                                <?php } else { ?>
                                    ../../../<?= $productCat[0]["p_photo_3"];
                                            }

                                                ?>" alt="">
                        </label>
                        <input type="file" name="default_img3" id="default_img3" accept=".png,.jpeg" class="hidden">
                    </div>

                    <div>
                        <label for="default_img4">
                            <img class="h-auto max-w-full rounded-lg" id="img4" src="
                                <?php if ($productCat[0]["p_photo_4"] == "/Storage/products/") { ?>
                                    ../resources/img/default_img4.jpg
                                <?php } else { ?>
                                    ../../../<?= $productCat[0]["p_photo_4"];
                                            }
                                                ?>
                                 " alt="">
                        </label>
                        <input type="file" name="default_img4" id="default_img4" accept=".jpg,.jpeg,.png" class="hidden">
                    </div>
                </div>
            </div>

            <!-- end of edit photo -->
            <div class="text-blueText text-md font-semibold space-y-3">
                <div class="flex flex-row">
                    <p class="text-right w-32">Product Name:</p>
                    <p class="ml-8"><?= $productCat[0]["p_title"] ?></p>
                </div>
                <div class="flex flex-row">
                    <p class="text-right w-32">Category:</p>
                    <p class="ml-8"><?= $productCat[0]["cat_name"] ?></p>
                </div>
                <div class="flex flex-row">
                    <p class="text-right w-32">Sub Category:</p>
                    <p class="ml-8"><?= $productSubcat[0]["sub_category_name"] ?></p>
                </div>
                <div class="flex flex-row">
                    <p class="text-right w-32">Brand:</p>
                    <p class="ml-8"><?= $productBrand[0]["brand_name"] ?></p>
                </div>
                <div class="flex flex-row">
                    <p class="text-right w-32">Stock:</p>
                    <p class="ml-8"><?= $productCat[0]["p_stock"] ?> items</p>
                </div>
                <div class="flex flex-row">
                    <p class="text-right w-32">Buy Price:</p>
                    <p class="ml-8"><?= $productCat[0]["p_buy_price"] ?>Ks</p>
                </div>
                <div class="flex flex-row">
                    <p class="text-right w-32">Sell Price:</p>
                    <p class="ml-8"><?= $productCat[0]["p_sell_price"] ?>Ks</p>
                </div>
                <div class="flex flex-row">
                    <p class="text-right w-32">Discount:</p>
                    <p class="ml-8"><?= $productCat[0]["p_discount"] ?>% Off</p>
                </div>
                <div class="flex flex-row">
                    <p class="text-right w-32">Description:</p>
                    <p class="ml-8 w-[350px]"><?= $productCat[0]["p_des"] ?></p>
                </div>
                <div class="flex flex-row">
                    <p class="text-right w-32">Details:</p>
                    <p class="ml-8 w-[350px]"><?= $productCat[0]["p_detail"] ?></p>
                </div>
                
            </div>

            <!-- </div> -->

        </div>
        <!-- start of rating -->
        <?php
               if( $product[0]["product_rating"] != null) {
                ?>
        <div class="flex items-center mb-2 mt-3">
            <p class="text-blueText text-xl font-bold mr-5 border-b-2 border-orange w-10">Ratings</p>
            <div class="ml-5 flex flex-row justify-center items-center">
                <?php
                for ($i = 0; $i < $product[0]["product_rating"]; $i++) {
                ?>
                    <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                <?php
                }
                ?>
                <?php
                for ($i = 0; $i < (5 - $product[0]["product_rating"]); $i++) {
                ?>
                    <svg class="w-4 h-4 text-inputBox mr-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                <?php
                }
                ?>
                <p class="ml-10 text-lg text-blueText dark:text-white"><?= $product[0]["product_rating"] ?> out of 5</p>
            </div>
        </div>
       
        <p class="text-md italic font-medium text-bold  text-greyText1 dark:text-gray-400"><?= $ratingCustomer[0]["COUNT(customer_id)"] ?> ratings</p>
        <div class="flex items-center mt-4">
            <a href="#" class="text-md font-medium text-blueText dark:text-blue-500 hover:underline">5 star</a>
            <div class="w-2/4 h-5 mx-4 bg-inputBox rounded dark:bg-gray-700">
                <div class="h-5 bg-orange rounded" style="width: <?= ($fivestarCustomer[0]["COUNT(customer_id)"] / $ratingCustomer[0]["COUNT(customer_id)"]) * 100 ?>%"></div>
            </div>
            <span class="text-md font-medium text-blueText dark:text-gray-400"><?= ($fivestarCustomer[0]["COUNT(customer_id)"] / $ratingCustomer[0]["COUNT(customer_id)"]) * 100 ?>%</span>
        </div>
        <div class="flex items-center mt-4">
            <a href="#" class="text-md font-medium text-blueText dark:text-blue-500 hover:underline">4 star</a>
            <div class="w-2/4 h-5 mx-4 bg-inputBox rounded dark:bg-gray-700">
                <div class="h-5 bg-orange rounded" style="width: <?= ($fourstarCustomer[0]["COUNT(customer_id)"] / $ratingCustomer[0]["COUNT(customer_id)"]) * 100 ?>%"></div>
            </div>
            <span class="text-md font-medium text-blueText dark:text-gray-400"><?= ($fourstarCustomer[0]["COUNT(customer_id)"] / $ratingCustomer[0]["COUNT(customer_id)"]) * 100 ?>%</span>
        </div>
        <div class="flex items-center mt-4">
            <a href="#" class="text-md font-medium text-blueText dark:text-blue-500 hover:underline">3 star</a>
            <div class="w-2/4 h-5 mx-4 bg-inputBox rounded dark:bg-gray-700">
                <div class="h-5 bg-orange rounded" style="width: <?= ($threestarCustomer[0]["COUNT(customer_id)"] / $ratingCustomer[0]["COUNT(customer_id)"]) * 100 ?>%"></div>
            </div>
            <span class="text-md font-medium text-blueText dark:text-gray-400"><?= ($threestarCustomer[0]["COUNT(customer_id)"] / $ratingCustomer[0]["COUNT(customer_id)"]) * 100 ?>%</span>
        </div>
        <div class="flex items-center mt-4">
            <a href="#" class="text-md font-medium text-blueText dark:text-blue-500 hover:underline">2 star</a>
            <div class="w-2/4 h-5 mx-4 bg-inputBox rounded dark:bg-gray-700">
                <div class="h-5 bg-orange rounded" style="width: <?= ($twostarCustomer[0]["COUNT(customer_id)"] / $ratingCustomer[0]["COUNT(customer_id)"]) * 100 ?>%"></div>
            </div>
            <span class="text-md font-medium text-blueText dark:text-gray-400"><?= ($twostarCustomer[0]["COUNT(customer_id)"] / $ratingCustomer[0]["COUNT(customer_id)"]) * 100 ?>%</span>
        </div>
        <div class="flex items-center mt-4">
            <a href="#" class="text-md font-medium text-blueText dark:text-blue-500 hover:underline">1 star</a>
            <div class="w-2/4 h-5 mx-4 bg-inputBox rounded dark:bg-gray-700">
                <div class="h-5 bg-orange rounded" style="width: <?= ($onestarCustomer[0]["COUNT(customer_id)"] / $ratingCustomer[0]["COUNT(customer_id)"]) * 100 ?>%"></div>
            </div>
            <span class="text-md font-medium text-blueText dark:text-gray-400"><?= ($onestarCustomer[0]["COUNT(customer_id)"] / $ratingCustomer[0]["COUNT(customer_id)"]) * 100 ?>%</span>
        </div>
        <!-- end of rating -->
        <!-- start of reviews -->
        <?php } ?>
        <?php
               if( count($customers) != 0) {
        ?>
        <div class="mt-5">
            <div class="text-xl font-bold text-blueText mb-5 border-b-2 border-orange w-10">Reviews</div>
            <?php
            for ($i = 0; $i < count($customers); $i++) {
            ?>
                <!-- start of review1 -->
                <div>
                    <div class="flex items-center mb-4 space-x-4">
                        <img class="w-10 h-10 rounded-full" src="../../../<?= $customers[$i]["c_profile"] ?>" alt="">
                        <div class="space-y-1 dark:text-white">
                            <p><?= $customers[$i]["c_name"] ?></p>
                            <!-- <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">Joined on August 2014</time> -->
                        </div>
                    </div>
                    <div class="flex items-center mb-1">
                        <?php for ($j = 0; $j < $customers[$i]["rating_no"]; $j++) {
                        ?>
                            <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                        <?php
                        }
                        ?>
                        <?php for ($j = 0; $j < 5 - $customers[$i]["rating_no"]; $j++) {
                        ?>
                            <svg class="w-4 h-4 text-inputBox dark:text-gray-500 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                        <?php
                        }
                        ?>



                        <!-- <h3 class="ml-2 text-sm font-semibold text-gray-900 dark:text-white">Thinking to buy another one!</h3> -->
                    </div>
                    <footer class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                        <p class="mb-5 text-greyText1 font-bold dark:text-gray-400"><?= $customers[$i]["product_review"] ?></p>
                        <!-- <p>Reviewed in the United Kingdom on <time datetime="2017-03-03 19:00">March 3, 2017</time></p> -->
                    </footer>

                    <!-- <p class="mb-3 text-greyText1 font-bold dark:text-gray-400">It is obviously not the same build quality as those very expensive watches. But that is like comparing a Citroën to a Ferrari. This watch was well under £100! An absolute bargain.</p> -->

                </div>
                <!-- end of review1 -->
            <?php
            }
            ?>


        </div>
        <?php
            }
            ?>


        <!-- end of reviews -->

        <div class="flex flex-row space-x-10 ml-[630px]">
            <div class="mt-6">
                <a href="../Products/product.php"><button class="text-orange font-bold rounded-lg w-32 py-1.5 border-2 border-orange  text-xl font-RobotoSlab shadow-sm hover:bg-orange hover:text-whiteText focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Cancel</button></a>
            </div>
            <div class="mt-6">
                <a href="../../Controller/editProductController.php?id=<?= $product[0]["id"] ?>"><button type="button" class="text-button font-bold rounded-lg w-32 py-1.5 border-2 border-button  hover:bg-button hover:text-whiteText text-xl font-RobotoSlab shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Edit</button></a>
            </div>
        </div>




        <!-- end of product details -->

    </div>






















    <!-- end of right side -->


    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <!-- <script src="../resources/js/main.js"></script> -->


</body>

</html>