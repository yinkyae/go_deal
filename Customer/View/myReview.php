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
    <script src="./resources/js/menu.js"></script>
    <script src="./resources/js/editprofile.js"></script>
    <title>My Review</title>
</head>

<body class="w-full h-screen">

    <?php include "./common/nav_without_search.php";
    include "../Controller/myReviewController.php" ?>
       <div class="float-left ml-20 mt-5 clear-both" id="edit_user_back" onclick="history.go(-1);">
        <ion-icon name="arrow-back" class="scale-[2] hover:text-green-600" title="back" ></ion-icon>
    </div>

          <p class="text-center text-3xl text-green-600 font-medium my-8">My Reviews</p>
    <section class="w-5/6 mx-auto flex flex-wrap ">
        <!-- product review card -->
        <?php foreach ($get_reviewResult as $review)
            { ?>
            <div class="w-1/5 mx-4 mt-4 mb-10">

                <div class="w-20 h-32 mx-auto">
                    <img src="../..<?=$review["p_photo_1"]?>" alt="" class="w-full h-full py-2">
                </div>
                <div class="w-full">
                    <div class="w-20 mx-auto">
                        <?php for ($j = 0; $j < $review["rating_no"]; $j++) { ?>
                            <ion-icon name="star" class="text-orange-500 fill-orange-500 w-2 h-2 "></ion-icon>
                        <?php } ?>
                    </div>
                    <p class="text-center text-sm text-green-500"><?=$review["p_title"]?></p>
                    <p class="text-center text-xs text-gray-500 w-60 mx-auto font-medium"> <?=$review["product_review"]?></p>


                </div>


            </div>
        <?php } ?>
    </section>

    <?php include "../View/common/commonFooter.php" ?>

</body>

</html>