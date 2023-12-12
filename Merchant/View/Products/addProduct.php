<?php

include "../../Controller/categoryListController.php";
// print_r($categories);
include "../../Controller/subCategoryListController.php";
include "../../Controller/firstSubCategoryListController.php";
// print_r($firstSubCategories);
include "../../Controller/brandListController.php";
// print_r($brands);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
    <script src="../resources/js/product.js" defer></script>
    <link rel="stylesheet" href="../resources/css/product.css">
    <script src="../resources/lib/jquery/jQuery v3.7.0.js"></script>
    <!-- <script src="../resources/js/addCategory.js" defer></script> -->
    <script src="../resources/js/selectCategory.js" defer></script>
    <script src="../resources/js/selectBrand.js" defer></script>
</head>

<body>
    <?php include "../Layout/nav.php"; ?>
    <!-- start of right side -->
    <!-- title of Edit profile -->
    <div class="z-30 w-full ml-20 flex flex-col justify-center items-center bg-whiteText fixed">
        <div class="text-whiteText font-Tommorrow bg-orange border-2 rounded-full border-orange shadow-3xl px-20 py-5 text-xl font-bold mb-3 italic">Add Product</div>
        <!-- <div class="w-[300px] h-[3px] bg-orange shadow-3xl"></div> -->
    </div>
    <div class="z-10 mt-20 ml-64 px-10 py-2 flex flex-col justify-center items-center mb-10">

        <form class="" action="../../Controller/productaddController.php" method="post" enctype="multipart/form-data">
            <div class=" mt-10 flex flex-row justify-center">

                <ul class="space-y-5 list-none">


                    <!-- edit Categories -->

                    <li>
                        <div class="text-md relative inline-flex items-center">
                            <svg class="fill-blueText w-2 h-2 absolute top-0 right-0 mr-14 mt-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                                <path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero" />
                            </svg>
                            <span class="w-36 text-blueText">Category:</span>
                            <select name="pcategory" id="pcategory" onchange="myFun(this.value)" class="text-left border border-blueText rounded-lg pl-10 pr-[170px] py-2 text-blueText hover:border-gray-400 focus:outline-none appearance-none">
                                <?php foreach ($categories as $category) { ?>
                                    <option value="<?= $category["id"] ?>"><?= $category["cat_name"] ?></option>
                                <?php } ?>

                                <!-- <option value="2">Red</option>
                            
                            <option value="9">White</option> -->
                            </select>
                            <a href="./categoryAdd.php"> <svg class="fill-orange w-10 h-10" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h48v48H0z" fill="none" />
                                    <path d="M8 12H4v28c0 2.21 1.79 4 4 4h28v-4H8V12zm32-8H16c-2.21 0-4 1.79-4 4v24c0 2.21 1.79 4 4 4h24c2.21 0 4-1.79 4-4V8c0-2.21-1.79-4-4-4zm-2 18h-8v8h-4v-8h-8v-4h8v-8h4v8h8v4z" />
                                </svg>
                            </a>
                        </div>
                    </li>


                    <!-- edit Sub Categories -->
                    <li>
                        <div class="text-md relative inline-flex items-center">
                            <svg class="fill-blueText w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                                <path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero" />
                            </svg>
                            <span class="w-36 text-blueText">Sub Category:</span>

                            <select name="psubcategory" id="psubcategory" class="text-left border border-blueText rounded-lg text-blueText pl-10 pr-[155px] py-2 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                                <?php foreach ($firstSubCategories as $firstSubCategory) { ?>
                                    <option value="<?= $firstSubCategory["id"] ?>"><?= $firstSubCategory["sub_category_name"] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                    </li>
                    <!-- Product Name: -->
                    <li class="text-md flex flex-row items-center">
                        <label class="w-36 text-blueText ">Product Name:</label>
                        <input name="pname" type="text" required class="block w-[400px] rounded-lg border border-blueText px-3 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox" placeholder="Name">

                    </li>
                    <!-- edit Brand -->
                    <li>
                        <div class="text-md relative inline-flex items-center">
                            <svg class="fill-blueText w-2 h-2 absolute top-0 right-0 mr-14 mt-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                                <path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero" />
                            </svg>
                            <span class="w-36 text-blueText">Brand:</span>
                            <select name="pbrand" id="pbrand" class="text-left border border-blueText rounded-lg pl-10 pr-[170px] py-2 text-blueText hover:border-gray-400 focus:outline-none appearance-none">
                                <?php foreach ($brands as $brand) { ?>
                                    <option value="<?= $brand["id"] ?>"><?= $brand["brand_name"] ?>

                                    </option>

                                <?php } ?>
                                <!-- <option value="2">Red</option>
                            
                                <option value="9">White</option> -->
                            </select>
                            <a href="./brandAdd.php"> <svg class="fill-orange w-10 h-10" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h48v48H0z" fill="none" />
                                    <path d="M8 12H4v28c0 2.21 1.79 4 4 4h28v-4H8V12zm32-8H16c-2.21 0-4 1.79-4 4v24c0 2.21 1.79 4 4 4h24c2.21 0 4-1.79 4-4V8c0-2.21-1.79-4-4-4zm-2 18h-8v8h-4v-8h-8v-4h8v-8h4v8h8v4z" />
                                </svg>
                            </a>

                        </div>

                    </li>
                    <li class="flex flex-row">
                        <span class="w-36 text-blueText">Brand Photo:</span>
                        <div id="bselectimgid">
                            <img src="../resources/img/apple-logo-transparent.png" class="w-[100px] h-[100px]" />
                        </div>

                    </li>
                    <!-- <div class="text-md flex flex-row items-center">
                        <label for="name" class="w-36 text-blueText">Brand:</label>

                        <input id="name" name="pbrand" type="text" required class="block w-lg rounded-lg border border-blueText px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox pl-[45px]" placeholder="Brand">
                    </div> -->

                    <!-- edit Stock -->
                    <li class="text-md flex flex-row items-center">
                        <label class="w-36 text-blueText">Stock:</label>

                        <input name="pstock" type="number" required class="block w-20 pl-5 py-2 rounded-lg border border-blueText text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox" placeholder="56">
                        <span class="text-xl text-blueText text-center ml-3">Items</span>
                    </li>
                    <!-- edit Size -->
                    <!-- <div class="text-md flex flex-row">
                        <label for="name" class=" text-blueText mr-[118px]">Size:</label>

                        <input id="name" name="name" type="text" required class="block w-lg rounded-lg border border-blueText px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox pl-[45px]" placeholder="230">
                    </div> -->



                    <!-- edit buy Price: -->
                    <li class="text-md flex flex-row items-center">
                        <label class="w-36 text-blueText">Buy Price:</label>

                        <input name="pbuyprice" type="number" required class=" w-40 pl-5 py-2 block w-lg rounded-lg border border-blueText text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox" placeholder="500Ks">
                        <span class="text-xl text-blueText text-center ml-3">Ks</span>
                    </li>

                    <!-- edit sell Price: -->
                    <li class="text-md flex flex-row items-center">
                        <label class="w-36 text-blueText">Sell Price:</label>

                        <input name="psellprice" type="number" required class="block w-40 pl-5 py-2 rounded-lg border border-blueText  text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox" placeholder="600Ks">
                        <span class="text-xl text-blueText text-center ml-3">Ks</span>
                    </li>

                    <!-- edit Discount: -->
                    <li class="text-md flex flex-row items-center">
                        <label class="w-36 text-blueText">Discount:</label>

                        <input name="pdiscount" type="number" required class="block w-20 rounded-lg border border-blueText pl-5 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox" placeholder="40">
                        <span class="text-xl text-blueText text-center ml-3"> % OFF</span>
                    </li>
                     <!-- edit Description: -->
                     <li class="text-md flex flex-row">
                        <label class="w-36 text-blueText">Description:</label>
                        <textarea name="pdes" cols="50" rows="2" maxlength="40" class="px-3 py-2 text-justify block rounded-lg border border-blueText text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-greyText1">
                    </textarea>

                    </li>
                    <!-- edit details -->
                    <li class="text-md flex flex-row">
                        <label class="w-36 text-blueText">Details:</label>
                        <textarea name="pdetail" cols="50" rows="10" class="px-3 py-2 text-justify block rounded-lg border border-blueText text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-greyText1">
                    </textarea>

                   








                </ul>
                <!-- start of edit photo -->

                <div class="grid grid-cols-2 gap-4 w-[400px] h-[400px] ml-[60px]">

                    <div class="grid gap-4">
                        <div>
                            <label for="default_img1">
                                <img class="h-auto max-w-full rounded-lg" id="img1" src="../resources/img/default_img1.jpg" alt="">
                            </label>
                            <input type="file" required name="default_img1" id="default_img1" accept="image/*" class="hidden">
                        </div>
                        <div>
                            <label for="default_img2">
                                <img class="h-auto max-w-full rounded-lg" id="img2" src="../resources/img/default_img2.jpg" alt="">
                            </label>
                            <input type="file" name="default_img2" id="default_img2" accept="image/*" class="hidden">
                        </div>

                    </div>
                    <div class="grid gap-4">
                        <div>
                            <label for="default_img3">
                                <img class="h-auto max-w-full rounded-lg" id="img3" src="../resources/img/default_img4.jpg" alt="">
                            </label>
                            <input type="file" name="default_img3" id="default_img3" accept="image/*" class="hidden">
                        </div>

                        <div>
                            <label for="default_img4">
                                <img class="h-auto max-w-full rounded-lg" id="img4" src="../resources/img/default_img6.jpg" alt="">
                            </label>
                            <input type="file" name="default_img4" id="default_img4" accept="image/*" class="hidden">
                        </div>
                    </div>
                </div>

                <!-- end of edit photo -->


            </div>
            <div class="flex flex-row space-x-10 float-right mt-5">
                <div class="mt-6">
                    <a href="../Products/product.php"><button type="button" class="text-orange font-bold rounded-lg py-1.5 w-32 border-2 border-orange  text-xl font-RobotoSlab shadow-sm hover:bg-orange hover:text-whiteText hover:border-0 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Cancel</button></a>
                </div>
                <div class="mt-6">
                    <button type="submit" name="padd" class="text-button rounded-lg  py-1.5 w-32 border-2 border-button  text-xl font-RobotoSlab shadow-sm hover:bg-button hover:text-whiteText hover:border-0 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-button">Add</button>
                </div>

            </div>
        </form>


    </div>


    <!-- end of right side -->


    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <!-- <script src="../resources/js/main.js"></script> -->


</body>

</html>