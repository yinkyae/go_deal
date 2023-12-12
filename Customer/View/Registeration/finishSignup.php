<?php
session_start();
if (!isset($_SESSION["user_account"])) {
    header("Location: ./signup.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../resources/js/menu.js"></script>
    <title>Account Verified</title>
</head>

<body>
    <?php include "../common/registeration_nav.php" ?>

    <main class=" lg:flex w-full h-full justify-between px-20 ">
        <div class="lg:w-1/3 lg:ml-24 sm:w-4/5  mt-16 sm:mx-auto">
            <p class="text-green-700 text-3xl font-semibold text-center">Your Account</p>
            <p class="text-green-700 text-3xl font-semibold text-center">Has been Registered</p>

            <form action="../../Controller/finishSignUpController.php" method="post" class="mt-10 h-28 flex  flex-col justify-around items-center ">
                <div class="my-10 w-60 mx-auto">
                    <p class="font-medium text-gray-400 ">User Name</p>
                    <input type="text" name="username" class="h-8 ring-[1px] rounded-md w-60 my-2  placeholder:px-4" placeholder="Enter your name">
                    <p class="text-xs text-gray-500  text-center">If you didn't add name your user email address will be remark as your user name</p>
                </div>

                <input type="submit" value="Go Home page" class=" h-8 py-[2px]  text-center px-4 bg-green-800 hover:bg-[#9ACD32] text-white rounded-md">

            </form>

        </div>




        <div class="w-3/5 lg:visible invisible ">
            <card class="">
                <img src="../resources/img/photo/illustation.jpg" alt="shopping">
            </card>

        </div>

    </main>



</body>

</html>