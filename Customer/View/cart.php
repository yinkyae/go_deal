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
  <script src="./resources/js/myCart.js?id=<?= time() ?>"></script>
  <script src="./resources/js/cartQty.js?id=<?= time() ?>"></script>
  <script src="./resources/js/formatPrice.js?id=<?= time() ?>"></script>
  <title>Cart</title>
</head>

<body>

  <?php
  include "./common/nav_without_search.php";
  //include "../Controller/cartController.php";
  include "../Controller/mycartController.php";
  ?>



  <p class="text-[#607d38] font-medium text-2xl text-center my-5">My Cart</p>
  <section class=" w-full flex lg:flex-row flex-col justify-around">
    <!-- products -->
    <div class="lg:w-3/5 w-11/12 mx-auto cart_p_section">


      <?php
      $subtotal = 0;
      $shippingfees = 2500; ?>


      <table class="lg:w-full w-full text-sm  text-gray-500  mx-auto text-center">
        <thead class="lg:text-xs text-[10px] text-gray-700 uppercase bg-gray-50  ">
          <tr>
            <th scope="col" class="lg:px-6 px-2 lg:py-3 py-1">
              No
            </th>
            <th scope="col" class="lg:px-6 px-2 lg:py-3 py-1">
              Prodct Photo
            </th>
            <th scope="col" class="lg:px-6 px-2 lg:py-3 py-1">
              Name
            </th>
            <th scope="col" class="lg:px-6 px-2 lg:py-3 py-1">
              Price
            </th>
            <th scope="col" class="lg:px-6 px-2 lg:py-3 py-1">
              Quantity
            </th>
            <th scope="col" class="lg:px-6 px-2 lg:py-3 py-1">
             Total Amount
            </th>
            <th scope="col" class="lg:px-6 px-2 lg:py-3 py-1">

            </th>

          </tr>
        </thead>
        <tbody class="h-76 overflow-y-auto lg:text-sm text-[10px] product_table">

        
          <?php  if ($cartId != null) { 
            
          
          $count = 1;

          foreach ($userCart_result as $cart_product) {

            if (($cart_product["p_discount"]) != null) {

              $price = $cart_product["p_sell_price"] - ((($cart_product["p_discount"]) / 100)  * ($cart_product["p_sell_price"]));
            } else $price = $cart_product["p_sell_price"];

            $subtotal += $price * $cart_product["qty"];
          ?>
            <tr class="bg-white border-b product_cart" id="<?= $cart_product["product_id"] ?>">
              <th scope="row" class="lg:px-6 px-2 lg:py-3 py-1 font-medium  whitespace-nowrap">
                <?= $count ?>
              </th>
              <td class="lg:px-6 px-2 lg:py-3 py-1">

                <div class=" lg:w-28 w-10 h-12 ml-2 lg:h-24">
                <img class="w-full h-full" src="../..<?= $cart_product["p_photo_1"] ?>" alt="" />
    </div>

    </td>
    <td class="lg:px-6 px-2 lg:py-3 py-1">
      <p class="lg:w-36 w-20 mb-1 hover:text-red-400"><?= $cart_product["p_title"] ?></p>
    </td>
    <td class="lg:px-6 px-2 lg:py-3 py-1">
      <p class="all_price"> <?= $price ?> </p>
    </td>
    <td class="lg:px-6 px-2 lg:py-3 py-1">

      <!-- quantity -->
      <div class="flex items-center lg:w-28 w-16 justify-evenly">
        <p>Qty</p>
        <div class="lg:w-3 w-2 lg:h-3 h-2 bg-green-700 hover:bg-red-500 rounded-sm remove">
          <ion-icon name="remove-outline" class="w-full h-full  mb-1 text-white  font-bold"></ion-icon>
        </div>
        <p class="qty"><?=$cart_product["qty"]?></p>
        <div class="lg:w-3 w-2 lg:h-3 h-2 bg-green-700 hover:bg-red-500 rounded-sm add">
          <ion-icon name="add-outline" class="w-full h-full  mb-1 text-white  font-bold"></ion-icon>
        </div>
      </div>     
    </td>
    <!-- product price with quantity -->
    <td class="lg:px-6 px-2 lg:py-3 py-1">
      <p> <span class="totalprice all_price"><?= $price * $cart_product["qty"]?> </span> </p>
    </td>
    <td class="lg:px-6 px-2 lg:py-3 py-1">

      <ion-icon name="trash-outline" class="ml-6 delete hover:text-red-500 hover:scale-150 transition-all ease-in-out delay-200" title="delete from cart"></ion-icon>

    </td>
    </tr>
  <?php $count++;
  
          } 
        }else{?> <div class="my-5 text-red-500"> <p class="text-2xl text-center"> No products in Your cart </p></div> <?php }?>

  </tbody>
  </table>
  </div>


  <!-- order -->
  <div class="lg:w-1/3 w-11/12 lg:h-2/3 shadow-md border-2  lg:px-16 lg:py-12 px-4 py-6 lg:mt-5 mt-2 mb-4 mx-auto">
    <p class="lg:text-xl text-lg font-medium mb-10">Order Summary</p>

    <div class="flex justify-between mb-5 lg:text-base text-sm">
      <p>Subtotal <span class="text-[#607d38]"><?= count($userCart_result) ?></span> items</p>
      <p id="subtotal" class="all_price"><?= $subtotal ?></p>
    </div>

    <div class="flex justify-between mb-5 lg:text-base text-sm">
      <p>Shipping Fees</p>
      <p>Ks <span id="shippingFees" class="all_price">2250</span></p>
    </div>

    <div class="flex justify-around mb-8 lg:text-base text-sm">
      <p class="text-lg font-medium">Total</p>
      <p id="total" class="text-lg text-[#607d38] font-medium all_price"><?php echo ($subtotal + $shippingfees) ?></p>

    </div>


    <a href="../Controller/buyCartController.php?cartId=<?= $cartId ?> " class="w-44 bg-[#607d38] text-white text-center px-2  rounded-md py-2 hover:bg-[#9ACD32] ">
      Proceed to Purchase
    </a>

  </div>
  </section>
  <!-- body end -->


  <?php include "../View/common/commonFooter.php" ?>

</body>

</html>