
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
    <style type="text/css">
      @media only screen and (min-width: 620px) {
  .u-row {
    width: 600px !important;
  }
  .u-row .u-col {
    vertical-align: top;
  }

  .u-row .u-col-31p67 {
    width: 190.02px !important;
  }

  .u-row .u-col-33p33 {
    width: 199.98px !important;
  }

  .u-row .u-col-35 {
    width: 210px !important;
  }

  .u-row .u-col-66p67 {
    width: 400.02px !important;
  }

  .u-row .u-col-100 {
    width: 600px !important;
  }

}

@media (max-width: 620px) {
  .u-row-container {
    max-width: 100% !important;
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  .u-row .u-col {
    min-width: 320px !important;
    max-width: 100% !important;
    display: block !important;
  }
  .u-row {
    width: 100% !important;
  }
  .u-col {
    width: 100% !important;
  }
  .u-col > div {
    margin: 0 auto;
  }
  .no-stack .u-col {
    min-width: 0 !important;
    display: table-cell !important;
  }

  .no-stack .u-col-31p67 {
    width: 31.67% !important;
  }

  .no-stack .u-col-33p33 {
    width: 33.33% !important;
  }

  .no-stack .u-col-35 {
    width: 35% !important;
  }

  .no-stack .u-col-66p67 {
    width: 66.67% !important;
  }

}
body {
  margin: 0;
  padding: 0;
}

table,
tr,
td {
  vertical-align: top;
  border-collapse: collapse;
}

p {
  margin: 0;
}

.ie-container table,
.mso-container table {
  table-layout: fixed;
}

* {
  line-height: inherit;
}

a[x-apple-data-detectors='true'] {
  color: inherit !important;
  text-decoration: none !important;
}

table, td { color: #000000; } #u_body a { color: #0000ee; text-decoration: underline; } @media (max-width: 480px) { #u_content_image_4 .v-container-padding-padding { padding: 20px 5px 5px !important; } #u_content_image_4 .v-src-width { width: auto !important; } #u_content_image_4 .v-src-max-width { max-width: 49% !important; } #u_content_image_5 .v-container-padding-padding { padding: 20px 5px 5px !important; } #u_content_image_5 .v-src-width { width: auto !important; } #u_content_image_5 .v-src-max-width { max-width: 30% !important; } #u_content_heading_3 .v-container-padding-padding { padding: 10px 10px 39px !important; } #u_content_image_6 .v-container-padding-padding { padding: 21px 5px 5px !important; } #u_content_image_6 .v-src-width { width: auto !important; } #u_content_image_6 .v-src-max-width { max-width: 46% !important; } #u_content_heading_4 .v-container-padding-padding { padding: 14px 10px 39px !important; } #u_content_heading_5 .v-container-padding-padding { padding: 10px !important; } #u_content_heading_5 .v-font-size { font-size: 14px !important; } #u_content_heading_6 .v-container-padding-padding { padding: 10px !important; } #u_content_heading_6 .v-font-size { font-size: 14px !important; } #u_content_heading_7 .v-container-padding-padding { padding: 10px !important; } #u_content_heading_7 .v-font-size { font-size: 14px !important; } #u_content_heading_10 .v-container-padding-padding { padding: 10px !important; } #u_content_heading_11 .v-container-padding-padding { padding: 40px 10px 39px !important; } #u_content_heading_12 .v-container-padding-padding { padding: 40px 10px 39px !important; } #u_content_heading_22 .v-container-padding-padding { padding: 11px 10px 10px !important; } #u_content_heading_23 .v-container-padding-padding { padding: 40px 10px 39px !important; } #u_content_heading_24 .v-container-padding-padding { padding: 40px 10px 39px !important; } #u_content_heading_19 .v-container-padding-padding { padding: 10px !important; } #u_content_heading_20 .v-container-padding-padding { padding: 40px 10px 39px !important; } #u_content_heading_21 .v-container-padding-padding { padding: 40px 10px 39px !important; } #u_content_heading_17 .v-container-padding-padding { padding: 40px 10px 39px !important; } #u_content_heading_18 .v-container-padding-padding { padding: 40px 10px 39px !important; } #u_content_heading_14 .v-container-padding-padding { padding: 40px 10px !important; } #u_content_heading_30 .v-container-padding-padding { padding: 40px 10px 39px !important; } #u_content_heading_31 .v-container-padding-padding { padding: 33px 10px 31px 22px !important; } #u_content_heading_15 .v-container-padding-padding { padding: 20px 10px !important; } #u_content_image_11 .v-src-width { width: auto !important; } #u_content_image_11 .v-src-max-width { max-width: 100% !important; } }
    </style>
</head>

<body>
    <div style="margin-left: 200px; font-size:medium; color:blue">
        <!-- Invoice -->
        <div style="width: 300px; padding: 10px; margin-top: 10px;">
            <div style="width: 200px;">
                <!-- Card -->
                <div>
                    <!-- Grid -->
                    <div>
                        <div>
                            <img src="../../..<?= $merchant[0]["me_profile"] ?>" class="w-40 h-auto">

                        </div>
                        <!-- Col -->

                        <div style="text-align: right;">
                            <h2 style="font-size:large; font-style:italic; color:gray;">Invoice #</h2>
                            <span style="margin-top:5px; color:gray"><?= $invoice[0][0]["id"] ?></span>

                            <div style="margin-top:3px; color:gray">
                                <?= $merchant[0]["me_address"] ?><br>
                                <?= $merchant[0]["town"] ?><br>
                                <?= $merchant[0]["reg"] ?><br>

                            </div>
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
                    <!-- <div class="mt-6">
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


                            
                        </div>
                    </div> -->
                    <!-- End Table -->

                    <!-- Flex -->
                    <!-- <div class="mt-8 flex sm:justify-end">
                        <div class="w-full max-w-2xl sm:text-right space-y-2">
                            
                            <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                                <dl class="grid sm:grid-cols-5 gap-x-3">
                                    <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">Total:</dt>
                                    <dd class="col-span-2 text-gray-500"><?= $inner["total_amt"] ?> Ks</dd>
                                </dl>

                               
                            </div>
                            
                        </div>
                    </div>
                    

                    <div class="mt-8 sm:mt-12">
                        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Thank you!</h4>
                        <p class="text-gray-500">If you have any questions concerning this invoice, use the following contact information:</p>
                        <div class="mt-2">
                            <p class="block text-sm font-medium text-gray-800 dark:text-gray-200"><?= $merchant[0]["me_email"] ?></p>
                            <p class="block text-sm font-medium text-gray-800 dark:text-gray-200"><?= $merchant[0]["me_phone"] ?></p>
                        </div>
                    </div> -->

                    
                </div>
                <!-- End Card -->

               
            </div>
        </div>
        <!-- End Invoice -->
    </div>

</body>

</html>