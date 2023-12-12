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
  <script src="./resources/js/logout.js"></script>
  <title>User Profile</title>
</head>

<body class="w-full h-screen">

  <?php include "./common/nav_without_search.php";
  include "../Controller/getUserController.php" ?>
  <!-- body -->
  <section class="lg:w-1/4 w-11/12 mx-auto bg-yellow-100/50 mt-20 text-center drop-shadow-2xl rounded-3xl">

    <div class="  my-10 flex-col justify-items-center relative">

      <!-- logout pop up -->

      <div class="w-4/5 h-40 bg-white absolute top-24 right-10 rounded-lg drop-shadow-lg z-50 text-green-800 " id="logOut_popUp">
        <div class="mt-8">
          <p class="text-xl font-medium">ARE YOU SURE!</p>
          <p>You want to log out?</p>
        </div>
        <div class="flex justify-evenly mt-5">
          <button class="text-white bg-[#607d38] hover:bg-[#9ACD32] rounded-md w-1/4" id="no_logout">No</button>
          <a href="../Controller/log_outController.php" class="text-white bg-red-700 hover:bg-red-500 rounded-md w-1/4">Yes</a>
        </div>

      </div>
      <!-- profile -->
      <a href="./edit_profile.php" class="float-right mt-4 mr-3 clear-all" title="Edit Profile">
        <ion-icon name="create-outline" id="edit_profile"></ion-icon>

      </a>
      <div class=" mx-auto  w-2/3 my-10">

        <div class="w-28 h-28 mx-auto absolute -top-10 right-[37%] rounded-full">
          <img class="w-full rounded-full" src="../../<?= $user_account_result[0]["c_profile"] ?>" alt="User image">
        </div>

        <div class="pt-20">
          <p class="mt-4"><?= $user_account_result[0]["c_name"] ?></p>

          <p class="text-sm text-[#FF9F29]"><?= $user_account_result[0]["c_phone"] ?></p>

          <p class="text-sm"><?= $user_account_result[0]["c_email"] ?></p>
        </div>

      </div>

      <!-- other details -->

      <div class=" w-full  pb-20">
        <!-- one list -->
        <div class="flex w-10/12 mx-auto relative hover:bg-[#607d38] rounded-lg hover:text-white transition ease-in-out delay-150 py-2 ">

          <div class="w-32 mx-auto flex">
            <ion-icon name="cart" class="scale-150 mt-1"></ion-icon>

            <a href="./myorder.php" class="ml-4">My orders</a>
          </div>
        </div>
        <div class="flex w-10/12 mx-auto relative  hover:bg-[#607d38] rounded-lg hover:text-white transition ease-in-out delay-150 py-2 my-2">

          <div class="w-32 mx-auto flex">
            <ion-icon name="gift-outline" class="scale-150 mt-1"></ion-icon>

            <a href="./whislist.php" class="ml-4">My Wishlist</a>
          </div>



        </div>
        <div class="flex w-10/12 mx-auto  relative hover:bg-[#607d38] rounded-lg hover:text-white transition ease-in-out delay-150 py-2">

          <div class="w-32 mx-auto flex">
            <ion-icon name="happy-outline" class="scale-150 mt-1"></ion-icon>

            <a href="./myReview.php" class="ml-4">My Review</a>
          </div>



        </div>
        <div class="flex w-10/12 mx-auto relative hover:bg-[#607d38] rounded-lg hover:text-white transition ease-in-out delay-150 py-2 my-2">

          <div id="logOut" class="w-32 mx-auto flex">
            <ion-icon name="log-out-outline" class="scale-150 mt-1"></ion-icon>

            <p class="ml-4">Log Out</p>
          </div>



        </div>

        <!-- one list end -->



      </div>
    </div>

  </section>

  <?php include "../View/common/commonFooter.php" ?>

</body>

</html>