<?php
include "../Controller/addAddressController.php";
// echo "<pre>";
// print_r($result_townships);
// echo "</pre>";
?>

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
  <script src="./resources/js/address.js?id=<?= time() ?>" defer></script>
  <title>Add Address</title>
</head>

<body>
  <?php include "./common/nav_without_search.php" ?>
 
  

  <!-- body -->
  <form action="../Controller/saveAddressController.php" method="post">
    <!-- <input name="order_data" value="<?//=htmlentities($datastring)?>" type="text" class="hidden"> -->
    <section class="flex flex-col items-center justify-around">
      <p class="font-medium lg:text-3xl text-2xl text-[#F86F03] my-10">Add Shiping Address</p>

      <div class="mb-8">
        <p class="lg:text-lg text-base opacity-50  text-green-600">Full Name</p>
        <input name="full_name" class="rounded-md ring-1 ring-gray-300 lg:text-lg text-base  lg:w-80 w-64 lg:h-10 h-8" type="text" value="" required/>
      </div>

      <div class="mb-8">
        <p class="lg:text-lg text-base opacity-50  text-green-600"> Address</p>
      
        <input name="address" class="rounded-md ring-1 ring-gray-300 lg:text-lg text-base lg:w-80 w-64 lg:h-10 h-8" type="text" required />
      
      </div>

      <div class="mb-8">
        <p class="lg:text-lg text-base opacity-50  text-green-600">Region</p>
        <select id="region" name="region" class="rounded-md ring-1 ring-gray-300 lg:text-lg text-base lg:w-80 w-64 lg:h-10 h-8" type="text">
          <?php foreach ($result as $region) { ?>
            <option value="<?= $region["id"] ?>"><?= $region["name"] ?></option>
          <?php } ?>
        </select>
      </div>

      <div class="mb-8">
        <p class="lg:text-lg text-base opacity-50  text-green-600"> City</p>
        <select id="township" name="township" class="rounded-md ring-1 ring-gray-300 lg:text-lg text-base lg:w-80 w-64 lg:h-10 h-8" type="text">
        <?php foreach ($result_townships as $defaultTown) { ?>
            <option value="<?= $defaultTown["id"] ?>"><?= $defaultTown["name"] ?></option>
          <?php } ?>
        </select>
      </div>

      <div class="mb-8">
        <p class="lg:text-lg text-base opacity-50  text-green-600">Phone number</p>
        
          <input name="phone_number" class="rounded-md ring-1 ring-gray-300 lg:text-lg text-base lg:w-80 w-64 lg:h-10 h-8" type="text" required />

      </div>

      <div class="mt-14">
        <button type="button" onclick="history.go(-1);" class="lg:w-40 w-32 h-10 bg-red-600 hover:bg-red-500 rounded-[10px]">
          <p class="text-white text-lg">Cancel</p>
        </button>
        <button type="submit" class="lg:w-40 w-32 h-10 bg-[#607d38] hover:bg-[#9ACD32] rounded-[10px] ml-10" name="saveaddress" >
          <p class="text-white text-lg">Save</p>
        </button>
      </div>
      <br><br>
    </section>
  </form>



  <?php include "../View/common/commonFooter.php" ?>
</body>

</html>