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
  <script src="./resources/js/payment.js"></script>
  <title>Payment</title>
</head>

<body class="w-full">
  <div class="w-1/2 bg-gray-100 drop-shadow-lg mt-28 mx-auto h-3/4 flex flex-col justify-center items-center py-5">
    <p class="text-green-700  font-medium mt-5 text-center">Please scan here to pay</p>
    <div class="w-44 h-44 mx-auto mt-10 mb-10">
      <img src="./resources/img/photo/kpayqrCode.png" alt="" class="w-full h-full ">
    </div>
    <form action="../Controller/orderController.php" method="post" class="flex flex-col lg:w-1/3 w-4/5 mx-auto">

      <input type="text" name="payNumber" placeholder="Enter your kbz pay Number" class="ring-1 px-2 rounded-md h-8 w-full mx-auto mb-5 placeholder:px-2" required>

      <input type="submit" name="kbzpay" value="Send" class="lg:w-1/2 w-3/4 mx-auto bg-[#607d38] hover:bg-[#9ACD32] text-white h-8 rounded-md">

    </form>
  </div>

</body>

</html>