<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script src="./resources/js/menu.js" defer></script>
    <title>Document</title>
</head>

<body>

    <navigation class="sticky top-0 z-50">
        <nav class=" invisible lg:w-full lg:h-6 bg-[#607d38] flex justify-evenly text-white text-xs  lg:visible ">
            <div class="flex justify-between py-1">
                <phone class="flex mr-4">
                    <ion-icon name="call-outline" class="mx-2 py-[2px]"></ion-icon>
                    <p>09758895513</p>
                </phone>
                <message class="flex">
                    <ion-icon name="mail-open-outline" class="mx-2 py-[2px]"></ion-icon>
                    <p>godeal33@gmail.com</p>
            </div>
            </message>


            <?php
            include "../Controller/accountController.php";

            if ($accountresult != null) {

                $customer_name = $accountresult[0]["c_name"];

            ?>

                <div class="flex w-28 justify-evenly py-1">
                    <div class="w-4 h-4 rounded-full"><a href="./userProfile.php"><img src="../../<?= $accountresult[0]["c_profile"] ?>" alt="" class="w-full h-full rounded-full"></a></div>
                    <a href="./userProfile.php" class=" hover:font-bold hover:underline"><?= $customer_name ?></a>
                </div><?php } else { ?>

                <div class="flex py-1">
                    <a href="./Registeration/login.php" class="mx-4 hover:font-bold">Login</a>
                    <a href="./Registeration/login.php" class="hover:font-bold">Sign Up</a>
                </div>

            <?php } ?>
        </nav>
        <!--navigation bar end-->
        <!--menu bar start-->
        <div class="lg:inline hidden w-full">
            <menu class="w-full flex py-2 border lg:visible invisible bg-white relative">
                <a href="./homepage.php" class="w-[100px] h-[30px] absolute left-20">
                    <img src="./resources/img/Logo.png" alt="logo" class="pt-0">
                </a>

                <div class="w-1/3 flex justify-evenly mx-auto">

                    <a href="./homepage.php" class="hover:font-medium hover:text-orange-500 hover:underline">Home</a>
                    <a href="./brandlist.php" class="hover:font-medium hover:text-orange-500 hover:underline">Brand</a>
                    <a href="./aboutUs.php" class="hover:font-medium hover:text-orange-500 hover:underline">About Us</a>
                </div>

                <div class="w-40 flex justify-evenly absolute right-20">
                    <?php if ($accountresult != null) { ?>
                        <a href="./whislist.php"> <ion-icon name="heart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110"></ion-icon></a>

                    <?php } else { ?>
                        <a href="./Registeration/signup.php"> <ion-icon name="heart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110"></ion-icon></a>
                    <?php } ?>
                    <?php if ($accountresult != null) { ?>
                        <a href="./cart.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110"></ion-icon></a>

                    <?php } else { ?>
                        <a href="./Registeration/signup.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110"></ion-icon></a>
                    <?php } ?>
                </div>
            </menu>
        </div>
        <!--menu bar end-->
        <!--mobile menu bar start-->
        <div class="w-full flex justify-evenly py-2 lg:invisible sm:visible absolute top-0 bg-white">
            <div class="w-[70px] h-[20px]">
                <img src="./resources/img/photo/logo.png" alt="logo" class="pt-0">
            </div>
            <ion-icon name="heart" class="w-[20px] h-[20px] fill-[#607d38] over:text-orange-500 hover:fill-orange-500 hover:scale-110"></ion-icon>
            <?php if ($accountresult != null) { ?>
                <a href="./cart.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110"></ion-icon></a>

            <?php } else { ?>
                <a href="./Registeration/signup.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38]"></ion-icon></a>
            <?php } ?>
            <ion-icon name="menu-outline" class="w-[20px] h-[20px] text-[#607d38]" id="withoutSearch_menu"></ion-icon>
        </div>
        <div class="w-28 h-36 bg-black opacity-70 float-right  text-white text-center flex flex-col justify-evenly absolute top-10 right-2 lg:invisible sm:visible" id="withoutSearch_dropdown">
            <a href="./aboutUs.php">About Us</a>
            <a href="./brandlist.php">Brand</a>
            <?php if ($accountresult != null) { ?>
                <a href="./userProfile.php"><?= $customer_name ?></a> <?php } else { ?>

                <a href="./Registeration/signup.php">Sign Up </a>
                <a href="./Registeration/login.php">Login</a> <?php } ?>

        </div>
        <!--mobile menu bar end-->
    </navigation>

    <!--navgation and header session end-->
</body>

</html>