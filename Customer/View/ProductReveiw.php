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
    <title>Priduct Reviews</title>
</head>

<body class="relative w-full">
    <!--navgation and header session start-->

    <?php include "./common/nav_without_search.php" ?>

    <?php include "../Controller/detailController.php" ?>
    <div class="float-left ml-20 mt-5 clear-both" id="edit_user_back" onclick="history.go(-1);">
        <ion-icon name="arrow-back" class="scale-[2] hover:text-green-600" title="back"></ion-icon>
    </div>

    <?php if ($review_result_all != null) { ?>
        <div class="mt-8 lg:w-1/3 w-11/12 mx-auto">
            <p class="lg:text-xl text-lg font-medium text-orange-500 my-5 text-center">Reviews</p>
            <!--customer reviews-->
            <?php foreach ($review_result_all as $all_review) { ?>


                <div class="lg:w-4/5 w-11/12 mx-2 mt-4">
                        <div class="flex">
                            <div class="w-8 h-8 rounded-full mx-1">
                                <img src="../../<?= $all_review["c_profile"] ?>" alt="user_photo" class="w-full h-full rounded-full">
                            </div>
                            <div>
                                <p class=" text-sm text-green-600 -mb-1"><?= $all_review["c_name"] ?></p>
                                <div class="mt-0">
                                    <?php for ($i = 0; $i < $all_review["rating_no"]; $i++) { ?>
                                        <ion-icon name="star" class="mr-[1px] text-orange-400 w-3 h-3"></ion-icon>

                                    <?php   } ?>
                                </div>
                            </div>

                        </div>

                        <p class=" font-medium ml-8 text-xs text-gray-400">
                            <?=$all_review["product_review"] ?>
                        </p>


                    </div>
            <?php } ?>



        </div>
    <?php } ?>



</body>