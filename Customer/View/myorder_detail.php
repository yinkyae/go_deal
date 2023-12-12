<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="./resources/css/shaketext.css">
  <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
  <script src="./resources/lib/jquery/jquery.js?id=<?= time() ?>"></script>
  <script src="./resources/js/ratingPopup.js?id=<?= time() ?>" defer></script>
  <script src="./resources/js/shaketext.js ?id=<?= time() ?>" defer></script>

  <title>Order Deatil</title>
</head>

<body>


  <?php include "./common/nav_without_search.php" ?>
  <?php include "../Controller/myOrderDetailController.php" ?>

  <div class="float-left ml-20 mt-5 clear-both z-50" id="edit_user_back" onclick="history.go(-1);">
    <ion-icon name="arrow-back" class="scale-[2]" title="back"></ion-icon>
  </div>

    <!-- body -->
  <section class="w-full relative">

     <div class="lg:w-1/5 w-11/12 h-64 bg-gray-100 drop-shadow-lg absolute lg:top-[39%] lg:left-[39%] top-16 left-10 z-50" id="rating_pop_up">
      <ion-icon name="close-outline" class="float-right scale-150 mt-2 mr-2" id="close_rating_popup"></ion-icon>
      <p class="text-center text-2xl text-green-700 font-medium mt-4">Rate The Product</p>

      <div class="w-52 flex justify-evenly mx-auto mt-4">

        <input type="radio" name="rating" id="1_star" value="1" class="hidden">
        <label for="1_star">
          <ion-icon name="star-outline" class="scale-150 text-orange-500 rating-star" id="star_1">
          </ion-icon>
        </label>

        <input type="radio" name="rating" id="2_star" value="2" class="hidden">
        <label for="2_star">
          <ion-icon name="star-outline" class="scale-150 text-orange-500 rating-star" id="star_2"></ion-icon>
        </label>

        <input type="radio" name="rating" id="3_star" value="3" class="hidden">
        <label for="3_star">
          <ion-icon name="star-outline" class="scale-150 text-orange-500 rating-star" id="star_3"></ion-icon>
        </label>

        <input type="radio" name="rating" id="4_star" value="4" class="hidden">
        <label for="4_star">
          <ion-icon name="star-outline" class="scale-150 text-orange-500 rating-star" id="star_4"></ion-icon>
        </label>

        <input type="radio" name="rating" id="5_star" value="5" class="hidden">
        <label for="5_star">
          <ion-icon name="star-outline" class="scale-150 text-orange-500 rating-star" id="star_5">
          </ion-icon>
        </label>

      </div>

      <div class="w-11/12 mx-auto mt-4">

        <p class="text-gray-700 text-sm mb-2 text-center">Write something about this product</p>

        <input type="text" name="review" id="product_review" class="w-full mx-auto h-8 rounded-md">

        <div class="w-40 mx-auto mt-6">
          <button class="w-full bg-[#607d38] text-white h-8 rounded-lg hover:bg-[#9ACD32]" id="send_review">send</button>
        </div>

      </div>

    </div>

    <div class="trext-lg py-1 px-4 rounded-md absolute top-[55%] left-[40%] w-1/4 z-50 text-center drop-shadow-xl bg-yellow-50" id="review_is_send">Your review have been submitted. Thank you for that review</div>

    <p class="text-2xl my-8 text-orange-500 text-center font-medium">Order Detail</p>

    <div class="relative overflow-x-auto">
      <table class="w-11/12 text-sm text-left text-gray-500  mx-auto">

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">

          <tr>

            <th scope="col" class="lg:px-6 px-1 ">
              No
            </th>

            <th scope="col" class="lg:px-6 px-2 lg:py-3 py-1">
              Photo
            </th>

            <th scope="col" class="lg:px-6 px-2 lg:py-3 py-1">
              Name
            </th>

            <th scope="col" class="lg:px-6 px-2 lg:py-3 py-1">
              Price
            </th>

            <th scope="col" class="lg:px-6 px-2 lg:py-3 py-1">
              Qty
            </th>

            <th scope="col" class="lg:px-6 px-2 lg:py-3 py-1">
              Total Price
            </th>

            <th scope="col" class="lg:px-6 px-2 lg:py-3 py-1">

            </th>
          </tr>
        </thead>

        <tbody>

          <?php $count = 1;

          foreach ($_order_detail_result as $order) {
            $or_p_discount = $order["p_discount"];
            $sell_price = $order["p_sell_price"];

            if ($or_p_discount != null) {
              $price = $sell_price - ($or_p_discount / 100 * $sell_price);
            } else
              $price = $sell_price;
          ?>

            <tr class="bg-white border-b order" id="<?= $order["product_id"] ?>">

              <th scope="row" class="lg:px-6 px-1 font-medium  whitespace-nowrap dark:text-white">
                <?= $count ?>
              </th>

              <td class="lg:px-6 px-2 lg:py-3 py-1">
                <div class="w-12 h-18">
                  <img src="../..<?= $order["p_photo_1"] ?>" alt="product_photo" class="w-full h-full">
                </div>
              </td>

              <td class="lg:px-6 px-2 lg:py-3 py-1">
                <?= $order["p_title"] ?>
              </td>

              <td scope="col" class="lg:px-6 px-2 lg:py-3 py-1">
                <?= $price ?>
              </td>

              <td scope="col" class="lg:px-6 px-2 lg:py-3 py-1">
                <?= $order["qty"] ?>
              </td>

              <td scope="col" class="lg:px-6 px-2 lg:py-3 py-1">
                <?= $order["qty"] * $price ?>
              </td>

              <td scope="col" class="lg:px-6 px-2 lg:py-3 py-1">
                <p class="review font-bold hover:text-red-600 hover:underline review">Give Review</p>
              </td>
            </tr>

          <?php $count++;
          } ?>


        </tbody>
      </table>
    </div>

    </div>

  </section>


</body>

</html>