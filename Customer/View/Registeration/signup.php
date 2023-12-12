<?php session_start() ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../resources/js/menu.js"></script>
    <title>Sign Up</title>
</head>

<body>


<?php include "../common/registeration_nav.php" ?>
    <form action="../../Controller/signupController.php" method="post">
        <main class="flex lg:w-full w-5/6 overflow-x-hidden mx-auto mt-20 justify-evenly">
            <div class="lg:w-1/3 w-5/6 mx-auto mt-6 lg:mr-0">
                <p class="font-medium text-2xl mb-20 w-80">Register your account</p>


                <div class="">
                    <p class="mb-4 text-orange-500 test-center w-60">Please sign up using email</p>
                    <p class=" mb-1 text-xs text-blue-900 w-60">We will send verification link to your email</p>
                    <div>
                    <input type="text" required name="email" placeholder="Enter your email" class="px-4 ring-1 rounded-md">
                    <?php
                    if (isset($_SESSION["registerError"])) { ?> <p class="text-red-500 text-xs font-semibold">
                            <?= $_SESSION["registerError"]; ?>
                        </p><?php } ?>
                    </div>
                    <input type="password" required name="password" placeholder="Enter password" class="px-4 ring-1 rounded-md my-5">
                </div>
                <div class="w-52 mt-10 text-center">
                    <input type="submit" value="Register" class="bg-[#607d38] hover:bg-[#9ACD32] rounded-md px-16 lg:px-16 py-1 text-white">
                </div>
                <div class="w-52 text-center text-xs mt-6">
                    <p class="">Already have an account?</p>
                    <a href="./login.php" class=" text-blue-600 hover:underline font-medium text-sm delay-200 ease-in-out transition-all">Sign in</a>
                </div>
            </div>
            <div class="w-1/2 lg:visible invisible">
                <card class="">
                    <img src="../resources/img/signin.avif" alt="shopping">
                </card>

            </div>

        </main>
    </form>
</body>

</html>
<?php $_SESSION["registerError"] = "" ?>