<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../resources/js/menu.js"></script>
    <title>forget Password</title>
</head>

<body>
<?php include "../common/registeration_nav.php" ?>
    <main class="lg:flex w-4/5 h-full justify-evenly mx-auto">

    <form action="../../Controller/forgotpasswordController.php" method="post">
        <div class="lg:mt-20 mt-40">
            <p class="text-3xl font-medium text-gray-700 drop-shadow-2xl shadow-orange-500 lg:ml-20 ml-12 ">Reset password</p>

            <div class="mt-10 w-3/4 mx-auto">
                <p class="text-[#607d38] mb-1 ml-1">Please enter your email</p>
                <input type="text" name="email" placeholder="Enter your email" class="ring-1 ring-green-400 w-72 rounded-lg h-8 placeholder:px-2  ">
                <p class="mt-1 text-[12px] w-60 text-gray-400 ">We will sent a one time code to your email</p>
                

            </div>

            <div class="mt-8">
                <div class="w-1/2 mx-auto text-center">
                <input type="submit" name="customer" value="Send Code" class="text-white  bg-[#607d38] hover:bg-[#9ACD32] rounded-md px-16 py-2">
                </div>
                <?php if(isset($_SESSION["code_sent"])) { ?>
                    <p class="px-1 py-1 text-xs "><?= $_SESSION["code_sent"] ?></p> <?php }?>
            </div>

            

        </div>
        </form>

        <div class="w-3/5 lg:visible invisible ">
            <card class="">
                <img src="../resources/img/photo/illustation.jpg" alt="shopping">
            </card>

        </div>

    </main>
    
</body>

</html>

<?php 
$_SESSION["forgotPasswordError"] = "";
$_SESSION["code_sent"] ="";
?>