<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../resources/js/menu.js" defer></script>
    <title>Sign in</title>
</head>

<body>
    <!-- navigation bar-->
    <?php include "../common/registeration_nav.php" ?>



    <div class="flex w-4/5 justify-between mx-auto mt-20 text-[#607d38]">
        <div class="lg:w-2/5 w-4/5 h-full pt-20 drop-shadow-lg mx-auto my-10 bg-gray-100  rounded-lg">
            <p class="text-2xl text-center ">Login</p>

            <form action="../../Controller/loginController.php" method="post">

                <div class="my-10 w-3/4 mx-auto">
                    <p class=" my-2">Please enter your email</p>
                    <input type="text" required name="email" placeholder="Enter your email" class=" px-4 w-full py-2  ring-1 rounded-md">
                    <?php
                    if (isset($_SESSION["loginError"])) { ?><p class="text-xs text-red-500 font-semibold">

                            <?= $_SESSION["loginError"]; ?>
                        </p>
                    <?php }
                    ?>

                </div>
                <div class="w-3/4 mx-auto">
                    <p class="my-2">Password</p>
                    <input type="password" required name="password" placeholder="Enter your password" class="px-4 w-full py-2  ring-1 rounded-md">
                    <?php
                    if (isset($_SESSION["wrongPassword"])) { ?><p class="text-xs text-red-500 font-semibold">

                            <?= $_SESSION["wrongPassword"]; ?>
                        </p>
                    <?php }
                    ?>

                </div>
                <div class="flex mt-4 w-80  justify-between text-xs">
                    <a href="./forgotPassword.php" class="sm:ml-12 lg:ml-4 text-red-500 hover:underline">forgot password?</a>

                </div>
                <div class="w-1/2 rounded-lg mx-auto mt-8 mb-4 bg-[#607d38]  hover:bg-[#9ACD32] text-center">
                    <input type="submit" value="Login" class=" rounded-md mx-4 my-4 px-20 py-1 text-white">
                </div>
                <div class=" w-full text-center text-xs pb-20">
                    <p class="sm:ml-12 lg:ml-4 text-blue-600">Don't have an account?</p>
                    <a href="./signup.php" class="text-blue-600 hover:underline">Sign up here</a>

                </div>
            </form>
        </div>
        <div class="w-3/5 h-full lg:visible invisible drop-shadow-sm ">
            <card class="">
                <img src="../resources/img/login.avif" alt="shopping">
            </card>
        </div>

                    </div>


</body>

</html>
<?php $_SESSION["loginError"] = "" ?>
<?php $_SESSION["wrongPassword"] = "" ?>