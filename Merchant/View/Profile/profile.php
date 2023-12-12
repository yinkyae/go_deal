<?php
session_start();
include "../../Controller/profileController.php";
include "../../Controller/updatePaymentController.php";
include "../../Controller/jointownshipController.php";
// print_r($paymentaccs);
// print_r($merchantreg);
// print_r($merchanttown);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- tailwind -->
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <!-- <link href="../resources/lib/tailwind/output.css" rel="stylesheet"> -->
    <!-- css -->
    <!-- <link rel="stylesheet" href="../resources/css/style.css"> -->
    <!-- chartjs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- chart script file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.41.0/apexcharts.min.js" integrity="sha512-bp/xZXR0Wn5q5TgPtz7EbgZlRrIU3tsqoROPe9sLwdY6Z+0p6XRzr7/JzqQUfTSD3rWanL6WUVW7peD4zSY/vQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../resources/js/main.js" defer></script>
    <link rel="stylesheet" href="../resources/css/profile.css">
</head>

<body>
    <?php include "../Layout/nav.php"; ?>
    <!-- start of right side -->
    <div class=" flex justify-center items-center ml-[200px] mt-10">
        <div class="px-10 py-3 shadow-3xl rounded-lg flex flex-col justify-center items-center">
            <img src="../../..<?= $merchantreg[0]["me_profile"] ?>" class="w-[200px] h-[80px] mt-10" />
            <div class="flex flex-row space-x-32 mt-10">
                <!-- start of left-side profile information -->
                <div class="space-y-8">
                    <!-- start of About  -->
                    <div class="bg-inputBox px-3 py-2 rounded-md text-blueText text-md flex space-x-[280px]">
                        <div class="font-bold">About</div>
                        <a href="./editProfile.php">
                            <svg class="fill-orange w-[20px] h-[20px]" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z" />
                            </svg>
                        </a>
                    </div>
                    <!-- end of About -->
                    <div class="flex flex-row">
                        <svg class="fill-orange w-[20px] h-[20px]" data-name="Layer 1" id="Layer_1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <title />
                            <path d="M81.49,21.21V32.35a6.48,6.48,0,0,1-6.11,6.56,6.19,6.19,0,0,1-4.57-1.76,6.26,6.26,0,0,1-1.91-4.53,6.3,6.3,0,0,1-12.6,0,6.3,6.3,0,1,1-12.6,0,6.3,6.3,0,0,1-12.6,0,6.27,6.27,0,0,1-6.48,6.29,6.48,6.48,0,0,1-6.11-6.56V21.21A3.21,3.21,0,0,1,21.72,18H78.28A3.21,3.21,0,0,1,81.49,21.21ZM72.81,82a2.82,2.82,0,0,0,2.82-2.82V42.9h-.51a10.14,10.14,0,0,1-6.23-2.15,10.29,10.29,0,0,1-12.59,0,10.31,10.31,0,0,1-12.6,0,10.29,10.29,0,0,1-12.59,0,10.27,10.27,0,0,1-6.27,2.14h-.47V79.18A2.82,2.82,0,0,0,27.19,82H33.5V61.82H48.83V82Z" />
                        </svg>
                        <p class="ml-[10px] text-blueText text-lg font-RobotoSlab"><?= $merchantreg[0]["me_shop_name"] ?></p>
                    </div>
                    <div>
                        <div class="flex flex-row"><svg class="fill-orange w-[20px] h-[20px]" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M192 0C85.97 0 0 85.97 0 192c0 77.41 26.97 99.03 172.3 309.7c9.531 13.77 29.91 13.77 39.44 0C357 291 384 269.4 384 192C384 85.97 298 0 192 0zM192 271.1c-44.13 0-80-35.88-80-80S147.9 111.1 192 111.1s80 35.88 80 80S236.1 271.1 192 271.1z" />
                            </svg>
                            <p class="ml-[10px] text-blueText text-lg font-RobotoSlab"><?= $merchantreg[0]["me_address"] ?>,</p>
                        </div>
                        <p class="text-blueText text-md ml-[30px]"><?= $merchanttown[0]["name"] ?>, <?= $merchantreg[0]["name"] ?></p>
                    </div>
                    <!-- email -->
                    <div class="flex flex-row">
                        <svg class="fill-orange w-[20px] h-[20px]" style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="info" />
                            <g id="icons">
                                <path d="M20,3H4C1.8,3,0,4.8,0,7v10c0,2.2,1.8,4,4,4h16c2.2,0,4-1.8,4-4V7C24,4.8,22.2,3,20,3z M21.6,8.8l-7.9,5.3   c-0.5,0.3-1.1,0.5-1.7,0.5s-1.2-0.2-1.7-0.5L2.4,8.8C2,8.5,1.9,7.9,2.2,7.4C2.5,7,3.1,6.9,3.6,7.2l7.9,5.3c0.3,0.2,0.8,0.2,1.1,0   l7.9-5.3c0.5-0.3,1.1-0.2,1.4,0.3C22.1,7.9,22,8.5,21.6,8.8z" id="email" />
                            </g>
                        </svg>
                        <p class="ml-[10px] text-blueText text-lg font-RobotoSlab"><?= $merchantreg[0]["me_email"] ?></p>
                    </div>
                    <!-- ph no -->
                    <div class="flex flex-row">
                        <svg class="fill-orange w-[20px] h-[20px]" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                            <rect fill="none" height="256" width="256" />
                            <path d="M222,158.4l-46.9-20a15.6,15.6,0,0,0-15.1,1.3l-25.1,16.7a76.5,76.5,0,0,1-35.2-35h0L116.3,96a15.9,15.9,0,0,0,1.4-15.1L97.6,34a16.3,16.3,0,0,0-16.7-9.6A56.2,56.2,0,0,0,32,80c0,79.4,64.6,144,144,144a56.2,56.2,0,0,0,55.6-48.9A16.3,16.3,0,0,0,222,158.4Z" />
                            <path d="M157.4,47.7a72.6,72.6,0,0,1,50.9,50.9,8,8,0,0,0,7.7,6,7.6,7.6,0,0,0,2.1-.3,7.9,7.9,0,0,0,5.6-9.8,88,88,0,0,0-62.2-62.2,8,8,0,1,0-4.1,15.4Z" />
                            <path d="M149.1,78.6a40.4,40.4,0,0,1,28.3,28.3,7.9,7.9,0,0,0,7.7,6,6.4,6.4,0,0,0,2-.3,7.9,7.9,0,0,0,5.7-9.8,55.8,55.8,0,0,0-39.6-39.6,8,8,0,1,0-4.1,15.4Z" />
                        </svg>

                        <p class="ml-[10px] text-blueText text-lg font-RobotoSlab"><?= $merchantreg[0]["me_phone"] ?></p>
                    </div>
                </div>
                <!-- end of left-side profile information -->
                <!-- start of right-side profile information -->
                <div class="space-y-8">
                    <!-- start of About  -->
                    <div class="bg-inputBox px-3 py-2 rounded-md text-blueText text-md flex space-x-[200px]">
                        <div class="font-bold">Payment Account</div>


                        <a href="./editPayment.php">
                            <svg class="fill-orange w-[20px] h-[20px]" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z" />
                            </svg>
                        </a>



                    </div>
                    <!-- end of About -->
                    <!-- name -->
                    <div class="flex flex-col space-y-5">
                        <!-- KBZ -->
                        <?php foreach ($paymentaccs as $paymentacc) { ?>
                            <div class="ml-[10px] text-blueText flex flex-row text-lg font-RobotoSlab">
                                <div class="w-80">
                                    <span><?= $paymentacc["pay_type"] ?></span><span class="pr-3">:</span><span><?= $paymentacc["pay_number"] ?></span>


                                </div>
                                <div><a href="../../Controller/editPaymentController.php?id=<?= $paymentacc["id"] ?>" class="underline underline-offset-2">Edit</a></div>

                            </div>
                        <?php } ?>
                        <!-- Wave -->
                        <!-- <div class="ml-[10px] text-blueText text-lg font-RobotoSlab">
                            <span>Wave</span><span class="pr-3">:</span><span>12345678</span>
                            <a class="ml-[220px]">Edit</a>
                        </div> -->
                    </div>






                </div>
                <!-- end of right-side profile information -->
            </div>
        </div>

    </div>







</body>

</html>