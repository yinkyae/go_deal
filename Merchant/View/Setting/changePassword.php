<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <!-- tailwind -->
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <!-- <link href="../resources/lib/tailwind/output.css" rel="stylesheet"> -->
    <!-- css -->
    <link rel="stylesheet" href="../resources/css/style.css">
    <!-- chartjs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- chart script file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.41.0/apexcharts.min.js" integrity="sha512-bp/xZXR0Wn5q5TgPtz7EbgZlRrIU3tsqoROPe9sLwdY6Z+0p6XRzr7/JzqQUfTSD3rWanL6WUVW7peD4zSY/vQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../resources/js/main.js" defer></script>
    <link rel="stylesheet" href="../resources/css/setting.css">
</head>

<body>
    <?php include "../Layout/nav.php"; ?>
    <!-- start of right side -->


    <div class="z-30 w-full ml-20 flex flex-col justify-center items-center bg-whiteText fixed">
            <div class="text-whiteText font-Tommorrow bg-orange border-2 rounded-full border-orange shadow-3xl px-20 py-5 text-xl font-bold mb-3 italic">Change Password</div>

        </div>
    <div class=" z-10 flex flex-col mt-20 items-center px-3 ml-[190px] md:h-screen">
        
        <!-- <div class="w-full px-5 py-3 md:mt-0 sm:max-w-md "> -->
            <!-- title -->
            <!-- <div class="flex flex-col justify-center items-center">
                <div class="text-blueText text-lg font-bold mb-3">Change Password</div>
                <div class="w-[500px] h-[2px] bg-orange shadow-3xl"></div>
            </div> -->
            <!-- end title -->
            <form class="mt-10 space-y-3 lg:mt-5 md:space-y-5" action="../../Controller/settingController.php" method="post">
                <div>
                    <label for="email" class="block mb-2 text-md font-semibold text-blueText dark:text-white">Your email</label>
                    <input type="email" name="email" id="email" class=" border border-blueText text-greyText1 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="suuyiminn@gmail.com" required="">
                </div>
                <span class="text-orange"> <?= $_SESSION["emailerror"] ?> </span>
                <div>
                    <label for="password" class="block mb-2 text-blueText text-md font-semibold dark:text-white">New Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class=" border border-blueText text-greyText1 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <div>
                    <label for="confirm-password" class="block mb-2 text-md font-semibold text-blueText dark:text-white">Confirm password</label>
                    <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="border border-blueText text-greyText1 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <span class="text-orange"><?= $_SESSION["passworderror"] ?></span>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="newsletter" aria-describedby="newsletter" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="newsletter" class="font-semibold text-blueText dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                    </div>
                </div>
                <button type="submit" name="setting" class="w-full text-whiteText text-md bg-button hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Reset passwod</button>
            </form>
        <!-- </div> -->
    </div>




    <!-- end of right side -->




</body>

</html>
<?php $_SESSION["emailerror"] = " " ?>
<?php $_SESSION["passworderror"] = " " ?>