<?php
session_start();
$invoice = $_SESSION["invoice"];
include "../../Controller/editProfileController.php";

// echo "<pre>";
// print_r($invoice);

// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
    <script src="../resources/lib/jquery/jQuery v3.7.0.js"></script>
    <link rel="stylesheet" href="../resources/css/order.css">
    <script src="../resources/js/invoice.js?id=<?= time() ?>" defer></script>

</head>

<body>
    <?php include "../Layout/nav.php"; ?>

    <div class="ml-[200px] text-md text-blueText">
        <!-- Invoice -->
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
            <div class="sm:w-11/12 lg:w-3/4 mx-auto">
                <!-- Card -->
                <div class="flex flex-col p-4 sm:p-10 bg-white shadow-md rounded-xl dark:bg-gray-800">
                    <!-- Grid -->
                    <div class="flex justify-between">
                        <div>
                            <img src="../../..<?= $merchant[0]["me_profile"] ?>" class="w-40 h-auto">

                        </div>
                        <!-- Col -->

                        <div class="text-right">
                            <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 dark:text-gray-200">Invoice #</h2>
                            <span class="mt-1 block text-gray-500"><?= $invoice[0][0]["id"] ?></span>

                            <address class="mt-4 not-italic text-gray-800 dark:text-gray-200">
                                <?= $merchant[0]["me_address"] ?><br>
                                <?= $merchant[0]["town"] ?><br>
                                <?= $merchant[0]["reg"] ?><br>

                            </address>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- End Grid -->

                    <!-- Grid -->
                    <div class="mt-8 grid sm:grid-cols-2 gap-3">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Bill to:</h3>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200"><?= $invoice[0][0]["c_name"] ?></h3>
                            <address class="mt-2 not-italic text-gray-500">
                                <?= $invoice[0][0]["address"] ?>,<br>
                                <?= $invoice[0][0]["town"] ?>,<br>
                                <?= $invoice[0][0]["reg"] ?><br>
                            </address>
                        </div>
                        <!-- Col -->

                        <div class="sm:text-right space-y-2">
                            <!-- Grid -->
                            <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                                <dl class="grid sm:grid-cols-5 gap-x-3">
                                    <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Invoice date:</dt>
                                    <dd class="col-span-2 text-gray-500">
                                    
                                        <?php if ($invoice[0][0]["order_done"] != 1) {
                                            echo date("Y/m/d");
                                        } else {
                                            echo $invoice[0][0]["invoice_date"];
                                        } ?>
                                    

                                    </dd>
                                </dl>
                                <!-- <dl class="grid sm:grid-cols-5 gap-x-3">
                                    <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Due date:</dt>
                                    <dd class="col-span-2 text-gray-500">03/11/2018</dd>
                                </dl> -->
                                <!-- <dl class="grid sm:grid-cols-5 gap-x-3">
                                    <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Status:</dt>
                                    <dd class="col-span-2 text-gray-500">Paid</dd>
                                </dl> -->
                                <dl class="grid sm:grid-cols-5 gap-x-3">
                                    <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Payment:</dt>
                                    <dd class="col-span-2 text-gray-500"><?= $invoice[0][0]["payment"] ?></dd>
                                </dl>
                            </div>
                            <!-- End Grid -->
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- End Grid -->

                    <!-- Table -->
                    <div class="mt-6">
                        <div class="border border-gray-200 p-4 rounded-lg space-y-4 dark:border-gray-700">
                            <div class="hidden sm:grid sm:grid-cols-5">
                                <div class="sm:col-span-2 text-xs font-medium text-gray-500 uppercase">No.</div>
                                <div class="text-left text-xs font-medium text-gray-500 uppercase">Item </div>
                                <div class="text-left text-xs font-medium text-gray-500 uppercase">Qty</div>
                                <div class="text-right text-xs font-medium text-gray-500 uppercase">Amount</div>
                            </div>

                            <div class="hidden sm:block border-b border-gray-200 dark:border-gray-700"></div>

                            <?php $num = 0;
                            foreach ($invoice as $inv) {
                                foreach ($inv as $inner) {
                                    # code...
                            ?>

                                    <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                        <div class="col-span-full sm:col-span-2">
                                            <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">No.</h5>
                                            <p class="font-medium text-gray-800 dark:text-gray-200"><?= ++$num; ?></p>
                                        </div>
                                        <div>
                                            <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Item</h5>
                                            <p class="text-gray-800 dark:text-gray-200"><?= $inner["p_title"] ?></p>
                                        </div>
                                        <div>
                                            <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Qty</h5>
                                            <p class="text-gray-800 dark:text-gray-200"><?= $inner["qty"] ?></p>
                                        </div>
                                        <div>
                                            <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                                            <p class="sm:text-right text-gray-800 dark:text-gray-200"><?= $inner["p_sell_price"] ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>


                            <!-- <div class="sm:hidden border-b border-gray-200 dark:border-gray-700"></div>

                            <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                <div class="col-span-full sm:col-span-2">
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Item</h5>
                                    <p class="font-medium text-gray-800 dark:text-gray-200">Web project</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Qty</h5>
                                    <p class="text-gray-800 dark:text-gray-200">1</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Rate</h5>
                                    <p class="text-gray-800 dark:text-gray-200">24</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                                    <p class="sm:text-right text-gray-800 dark:text-gray-200">$1250</p>
                                </div>
                            </div>

                            <div class="sm:hidden border-b border-gray-200 dark:border-gray-700"></div>

                            <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                <div class="col-span-full sm:col-span-2">
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Item</h5>
                                    <p class="font-medium text-gray-800 dark:text-gray-200">SEO</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Qty</h5>
                                    <p class="text-gray-800 dark:text-gray-200">1</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Rate</h5>
                                    <p class="text-gray-800 dark:text-gray-200">6</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                                    <p class="sm:text-right text-gray-800 dark:text-gray-200">$2000</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- End Table -->

                    <!-- Flex -->
                    <div class="mt-8 flex sm:justify-end">
                        <div class="w-full max-w-2xl sm:text-right space-y-2">
                            <!-- Grid -->
                            <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                                <dl class="grid sm:grid-cols-5 gap-x-3">
                                    <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Total:</dt>
                                    <dd class="col-span-2 text-gray-500"><?= $inner["total_amt"] ?> Ks</dd>
                                </dl>

                                <!-- <dl class="grid sm:grid-cols-5 gap-x-3">
                                    <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Total:</dt>
                                    <dd class="col-span-2 text-gray-500">$2750.00</dd>
                                </dl>

                                <dl class="grid sm:grid-cols-5 gap-x-3">
                                    <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Tax:</dt>
                                    <dd class="col-span-2 text-gray-500">$39.00</dd>
                                </dl>

                                <dl class="grid sm:grid-cols-5 gap-x-3">
                                    <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Amount paid:</dt>
                                    <dd class="col-span-2 text-gray-500">$2789.00</dd>
                                </dl>

                                <dl class="grid sm:grid-cols-5 gap-x-3">
                                    <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Due balance:</dt>
                                    <dd class="col-span-2 text-gray-500">$0.00</dd>
                                </dl> -->
                            </div>
                            <!-- End Grid -->
                        </div>
                    </div>
                    <!-- End Flex -->

                    <div class="mt-8">
                        <!-- <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Thank you!</h4>
                        <p class="text-gray-500">If you have any questions concerning this invoice, use the following contact information:</p> -->
                        <div class="mt-2 text-center text-grayText2 text-xs">
                            <span>Email: </span><span p class=""><?= $merchant[0]["me_email"] ?>, </span>
                            <span>Ph no: </span><span class=""><?= $merchant[0]["me_phone"] ?></span>
                        </div>
                    </div>

                    <!-- <p class="mt-5 text-sm text-gray-500">© 2022 Preline.</p> -->
                </div>
                <!-- End Card -->

                <!-- Buttons -->
                <div class="mt-6 flex justify-end gap-x-3">
                    <!-- <a class="inline-flex justify-center items-center gap-x-3 text-sm text-center border hover:border-gray-300 shadow-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:border-gray-800 dark:hover:border-gray-600 dark:shadow-slate-700/[.7] dark:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" href="#">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z" />
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                        </svg>
                        PDF
                    </a> -->
                    <a class="inline-flex justify-center text-button items-center gap-x-3 text-center bg-whiteText hover:bg-blue-700  border-transparent text-md text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-10 border-2 border-button hover:bg-orange hover:text-whiteText hover:border-0 dark:focus:ring-offset-gray-800" href="./order.php">

                        Cancel
                    </a>

                    <?php if ($invoice[0][0]["order_done"] == 1) { ?>

                        <div href="#" class="inline-flex justify-center items-center gap-x-3 text-center bg-orange text-md text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-10 text-whiteText dark:focus:ring-offset-gray-800">
                            Send Done
                        </div>
                    <?php } else { ?>
                        <a href="../../Controller/invoiceSendController.php?id=<?= $invoice[0][0]["id"] ?>" class="send inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-md text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-10 bg-button text-whiteText hover:bg-orange dark:focus:ring-offset-gray-800">
                            Send
                        </a>
                    <?php } ?>

                </div>
                <!-- End Buttons -->
            </div>
        </div>
        <!-- End Invoice -->
    </div>

</body>

</html>