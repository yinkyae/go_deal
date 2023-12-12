<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="./resources/lib/jquery/jquery.js"></script>
  <script src="./resources/js/menu.js"></script>
  <title>Document</title>
</head>

<body>


  <?php include "./common/nav_without_search.php" ?>



  <div class="overflow-x-hidden lg:w-11/12 mx-a w-full">
    <p class="text-xl text-[#FF9F29] mt-10 text-center ">About Us</p>
    <p class="mt-5 text-gray-700  text-center lg:text-base text-sm w-4/5 mx-auto">
      Welcome to Godeal, your reliable and convenient Online Shopping Mall in Myanmar. Get ready as
      Godeal empowers you to let loose your shopaholic beast and go on a crazy online shopping spree like never before.
      Shop online with safest way as you can pay Cash on Delivery, allowing you make stress free payments. Whatever it is you
      want to buy, Shop offers you all products at best prices which you can trust. We bring premium brands selling their finest
      products to your fingertips. From trendy Jeans to formal wears and stunning party wears, we cater to the needs of everyone:
      Kids, Men or Women. Don't miss the chance to catch best deals and offers from Shop that we bring in every week.
      At Godeal, we guarantee you to have the best online shopping experience like never before. With over 16000 items to choose from,
      Godeal offers wide range of items that span across everyone needs and wants.
    </p>
    <div class=" lg:w-10/12 w-full lg:mx-auto flex lg:flex-row flex-col overflow-x-hidden justify-evenly mt-10 ">

      <div class="w-full lg:w-1/3 mx-auto">
        <p class="text-lg text-[#FF9F29]  mb-5 font-semibold text-center">FAQ</p>
        <p class="text-[#FF9F29]">How Long will the delivery take?</p>
        <p class="w-80 pt-2 text-sm opacity-50">Rhe delivery will take 2 or 3 days depending on your location after your order</p>
        <hr>
        <br>
        <p class="text-[#FF9F29]">What will I do if I got demage product</p>
        <p class="w-80 pt-2 text-sm opacity-50">We have return policies. If you return within three days
          we will manage another product for you.</p>
        <hr>
        <br>
        <p class="text-[#FF9F29]">What are the refund policies</p>
        <p class="w-80 pt-2 text-sm opacity-50">We have no refund policies if you get damage product we'll manage another one for you. </p>
        <br>
        <p class="text-[#FF9F29]">What exactly happen after ordering </p>
        <p class="w-80 pt-2 text-sm opacity-50">We check your orders and our available stock. Then we pack your product very carefully and arrange a delivery to your address.</p>
        <br>

      </div>
      <div class="w-full lg:w-1/4 mx-auto">
        <p class=" text-lg text-[#ff9f29] mb-5 text-center">Still need help</p>

        <div class="flex mb-5">
          <div class="w-8 h-8 rounded-full bg-orange-500  mr-3">
            <ion-icon name="chatbubble-ellipses" class="p-2 text-white"></ion-icon>
          </div>

          <div>
            <p>Chat with us</p>
            <p class="text-xs">Live at 9:00 am to 4:00 pm (Mon-Sat)</p>
          </div>
        </div>
        <div class="flex mb-5 ">
          <div class="w-8 h-8 rounded-full bg-orange-500  mr-3">
            <ion-icon name="call" class="p-2 text-white"></ion-icon>
          </div>

          <div>
            <p>Call Us</p>
            <p class="text-xs">09-956507003(Mon-Sat)</p>
          </div>
        </div>
        <div class="flex mb-5 ">
          <div class="w-8 h-8 rounded-full bg-orange-500  mr-3">
            <ion-icon name="mail-open" class="p-2 text-white"></ion-icon>
          </div>
          <div>
            <p>Write to Us</p>
            <p class="text-xs">Godeal@gmail.com</p>
          </div>
        </div>

      </div>
    </div>
  </div>

</body>

</html>