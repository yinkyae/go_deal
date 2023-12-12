<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script src="./resources/js/deleteWishlist.js"></script>


    <title>Whilist</title>
</head>

<body>


    <?php include "./common/nav_without_search.php"; ?>

    <!-- body -->

    <div class="float-left ml-20 mt-5 clear-both" id="edit_user_back" onclick="history.go(-1);">
        <ion-icon name="arrow-back" class="scale-[2]" title="back"></ion-icon>
    </div>

    <p class="text-2xl mt-8 mb-2 text-green-700 text-center font-medium clear-both"> <?= $accountresult[0]["c_name"] ?></p>
    <p class="text-base mb-8 text-orange-500 text-center font-medium">WishList</p>

    <div class="relative overflow-x-auto">
        <table class="lg:w-4/5 w-5/6 text-sm text-left text-gray-500  mx-auto">
            <thead class="text-xs text-gray-700 uppercase bg-green-50 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Prodct Photo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">

                    </th>

                </tr>
            </thead>
            <tbody>
                <?php

                include "../Controller/myWishlistController.php";

                $count = 1;

                

                if($wishlist_id != null){

                foreach ($wish_product_result as $wish_product) {

                    $wish_p_discount = $wish_product["p_discount"];
                    $sell_price = $wish_product["p_sell_price"];
                    if ($wish_p_discount != null) {

                        $price = $sell_price - ($wish_p_discount / 100 * $sell_price);
                    } else
                        $price = $sell_price; ?>
                    <tr class="bg-white border-b wishlist_products" id="<?=$wish_product["product_id"]?>">

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <?= $count ?>
                        </th>
                        <td class="px-6 py-4">
                            <div class="w-14 h-18">
                                <img src="../..<?= $wish_product["p_photo_1"] ?>" alt="product_photo" class="w-full h-full">
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <?= $wish_product["p_title"] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $price ?>
                        </td>
                        <td class="px-6 py-4">
                            <ion-icon name="trash-outline" class="scale-110 delete_wishlist text-red-500 hover:scale-125"></ion-icon>
                        </td>
                    </tr>

                <?php $count++;
                } 
            } else {?>    <p class="text-2xl font-medium text-red-500 text-center mb-6">No product in your wishlist</p><?php }?>

            </tbody>
        </table>
    </div>

    </div>




</body>

</html>