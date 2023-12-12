<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/css/categoryProduct.css">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script src="./resources/js/menu.js" defer></script>
    <script src="./resources/js/brand_search.js?id=<?= time() ?>" defer></script>
    <title>ShopProfile</title>
</head>

<body class="overflow-x-hidden">

    <nav class="invisible lg:w-full lg:h-6 bg-[#607d38] flex justify-evenly text-white text-xs  lg:visible ">
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

            <div>
                <a href="./userProfile.php" class="py-1 hover:font-bold"><?= $customer_name ?></a>
            </div> <?php } else { ?>

            <div class="flex py-1">
                <a href="./Registeration/login.php" class="mx-4 hover:font-bold ">Login</a>
                <a href="./Registeration/signup.php" class=" hover:font-bold">Sign Up</a>
            </div>

        <?php } ?>
    </nav>
    <!--navigation bar end-->
    <!--menu bar start-->
    <div class="lg:inline hidden">
        <menu class="w-full flex relative py-2 border">
            <div class="w-[100px] h-[30px] absolute left-20">
                <img src="./resources/img/photo/Logo.png" alt="logo" class="pt-0">
            </div>


            <div class="w-1/3 mx-auto flex justify-around">
                <a href="./homepage.php" class="hover:font-medium hover:text-orange-500 hover:underline">Home</a>
                <a href="./brandlist.php" class="hover:font-medium hover:text-orange-500 hover:underline">Brand</a>
                <a href="./aboutUs.php" class="hover:font-medium hover:text-orange-500 hover:underline">About Us</a>



                <searchBar class="relative">
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-48 border
             border-slate-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none focus:border-sky-500 focus:ring-sky-500
              focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" id="brand_search" />

                    <ion-icon name="search" class="w-[17px] h-[17px] fill-[#607d38] absolute top-1 left-2"></ion-icon>
                </searchBar>
            </div>
            <div class="w-32 flex justify-evenly absolute right-20">
                <?php if ($accountresult != null) { ?>
                    <a href="./whislist.php"> <ion-icon name="heart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110"></ion-icon></a>

                <?php } else { ?>
                    <a href="./Registeration/signup.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110"></ion-icon></a>
                <?php } ?>
                <?php if ($accountresult != null) { ?>
                    <a href="./cart.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110"></ion-icon></a>

                <?php } else { ?>
                    <a href="./Registeration/signup.php"> <ion-icon name="heart" class="w-[20px] h-[20px] fill-[#607d38] hover:fill-orange-500 hover:scale-110"></ion-icon></a>
                <?php } ?>
            </div>

        </menu>
    </div>
    <!--menu bar end-->
    <!--mobile menu bar start-->
    <div class="w-full flex justify-evenly py-2 lg:invisible sm:visible absolute top-0">
        <div class="w-[70px] h-[20px]">
            <img src="./resources/img/photo/logo.png" alt="logo" class="pt-0">
        </div>
        <searchBar class="relative">
            <input id="brand_search_mobile" class="placeholder:italic placeholder:text-slate-400 block bg-white w-48 
            border border-slate-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" />

            <ion-icon name="search" class="w-[17px] h-[17px] fill-[#607d38] absolute top-1 left-2"></ion-icon>
        </searchBar>
        <ion-icon name="heart" class="w-[20px] h-[20px] fill-[#607d38]"></ion-icon>
        <?php if ($accountresult != null) { ?>
            <a href="./cart.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38]"></ion-icon></a>

        <?php } else { ?>
            <a href="./Registeration/signup.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#607d38]"></ion-icon></a>
        <?php } ?>
        <ion-icon name="menu-outline" class="w-[20px] h-[20px] text-[#607d38]" id="brand_menu"></ion-icon>
    </div>
    <div class="w-28 h-36 bg-black opacity-70 float-right  text-white text-center flex flex-col justify-evenly absolute top-10 right-2 lg:invisible sm:visible" id="brand_dropdown">
        <a href="./aboutUs.php">About Us</a>
        <a href="./brandlist.php">Brand</a>
        <?php if ($accountresult != null) { ?>
            <a href="./userProfile.php"><?= $customer_name ?></a> <?php } else { ?>

            <a href="./Registeration/signup.php">Sign Up </a>
            <a href="./Registeration/login.php">Login</a> <?php } ?>

    </div>
    <!--mobile menu bar end-->


    <section class="lg:w-4/5 w-11/12 mx-auto mb-20 overflow-y-auto mt-2">
        <p class="text-center mb-8 mt-4 text-2xl font-medium text-[#607d38]">Brands Collections</p>
        <div class="full mx-2 flex h-full flex-wrap " id="brand_main_section">
            <?php include "../Controller/brandlistController.php";

            foreach ($brand_result as $brand) { ?>

                <!--brand list -->

                <a href="./brandProfile.php?brand_id=<?= $brand["id"] ?>" class="lg:w-40 w-36 h-20  py-2 lg:my-2 flex flex-col justify-evenly items-center mx-4 group ">

                    <img src="../..<?= $brand["brand_photo"] ?>" alt="" class="w-4/12 group-hover:scale-150 ease-in-out delay-200 transition-all ">

                </a>

            <?php } ?>

        </div>



        </div>
        </div>

    </section>


    <?php include "../View/common/commonFooter.php" ?>
</body>

</html>