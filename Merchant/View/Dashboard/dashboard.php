<?php
include "../../Controller/dashboardController.php";
include "../../Controller/orderController.php";
// echo "<pre>";
// print_r($totalSales);
// echo "</pre>";
// echo "<pre>";
// print_r($orders);
// echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- tailwind -->
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <!-- css -->
    <!-- <link rel="stylesheet" href="../resources/css/style.css"> -->
    <!-- chartjs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- chart script file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.41.0/apexcharts.min.js" integrity="sha512-bp/xZXR0Wn5q5TgPtz7EbgZlRrIU3tsqoROPe9sLwdY6Z+0p6XRzr7/JzqQUfTSD3rWanL6WUVW7peD4zSY/vQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../resources/lib/jquery/jQuery v3.7.0.js"></script>
    <script src="../resources/js/main.js?id=<?= time() ?>" defer></script>
    <link rel="stylesheet" href="../resources/css/dashboard.css?id=<?= time() ?>">
</head>

<body>
    <?php include "../Layout/nav.php"; ?>

    <!-- start of right side -->
    <div class="mt-3 sm:ml-64 z-50">
        <div class="">
            <!-- start of boxes -->
            <div class="flex flex-row">
                <!-- start of total sales -->
                <div class="w-[200px] h-[120px] text-center bg-whiteText shadow-3xl rounded-2xl">
                    <p class=" mt-8 font-ABeeZee font-bold text-blueText text-xl">Total Sales</p>
                    <p class="mt-3 font-Tommorrow italic font-bold text-md text-greyText1"><?= $totalSales[0]["SUM(t_order.total_amt)"] ?> Ks</p>
                </div>
                <!-- end of total sales -->
                <!-- start of registration fee -->

                <div class="w-[200px] h-[120px] ml-10 text-center bg-whiteText shadow-3xl rounded-2xl">
                    <p class="mt-8 font-ABeeZee font-bold text-blueText text-xl">Orders Done</p>
                    <p class="mt-3 font-Tommorrow italic font-bold text-md text-greyText1"><?= count($orderDone) ?></p>

                </div>
                <!-- end of registration fee -->
                <!-- start of total orders -->
                <div class="w-[200px] h-[120px] ml-10 text-center bg-whiteText shadow-3xl rounded-2xl">
                    <p class=" mt-8 font-ABeeZee font-bold text-blueText text-xl">Total Orders</p>
                    <p class="mt-3 font-Tommorrow italic font-bold text-md text-greyText1"><?= count($orders) ?></p>

                </div>
                <!-- end of total orders -->
            </div>
            <!-- end of boxes -->
            <!-- start of chart -->
            <div class="charts-card mt-[30px]">
                <h2 class="chart-title">Revenue Vs Orders</h2>
                <div id="area-chart"></div>
            </div>
            <!-- end of chart -->

            <!-- start of circle chart -->
            <div class="programming-stats absolute left-[920px] top-[45px]">
                <div class="chart-container mt-[30px]">
                    <canvas class="my-chart"></canvas>
                </div>

                <div class="details mt-[60px] text-center">
                    <p class="text-blueText font-RobotoSlab font-bold text-md">Sales By Category</p>
                    <ul></ul>
                </div>
            </div>
            <!-- end of circle chart -->

            <!-- start of bottom -->
            <div class="flex flex-row mt-5 mb-10">
                <!-- start of bottom-left side -->
                <div class="">
                    <!-- start of title -->
                    <div class=" text-blueText text-lg font-bold">Reviews By Customers</div>
                    <!-- end of title -->
                    <!-- start of review-cards -->
                    <?php for ($i = 0; $i < count($reviews); $i++) { ?>
                        <div class="flex flex-row justify-center items-center py-5 px-5 shadow-3xl rounded-xl mt-5">
                            <!-- image of customer -->
                            <img src="../../../<?= $reviews[$i]["c_profile"] ?>" class="rounded-full w-10 h-10" />
                            <!-- start of name-date-star-reviewText -->
                            <div class="ml-5 flex flex-col justify-center">
                                <div class="text-blueText text-sm font-Tommorrow">
                                    <span>
                                        <?= $reviews[$i]["c_name"] ?>
                                    </span>
                                    <!-- <span class="ml-[10px]">
                                    Nov,09,2023
                                </span> -->
                                    <!-- <span>
                                    11:00 am
                                </span> -->
                                    <span class="ml-[80px]">
                                        <?php for ($j = 0; $j < $reviews[$i]["rating_no"]; $j++) { ?>
                                            <svg class="w-[15px] fill-orange inline" enable-background="new 0 0 32 32" id="Glyph" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M29.895,12.52c-0.235-0.704-0.829-1.209-1.549-1.319l-7.309-1.095l-3.29-6.984C17.42,2.43,16.751,2,16,2  s-1.42,0.43-1.747,1.122l-3.242,6.959l-7.357,1.12c-0.72,0.11-1.313,0.615-1.549,1.319c-0.241,0.723-0.063,1.507,0.465,2.046  l5.321,5.446l-1.257,7.676c-0.125,0.767,0.185,1.518,0.811,1.959c0.602,0.427,1.376,0.469,2.02,0.114l6.489-3.624l6.581,3.624  c0.646,0.355,1.418,0.311,2.02-0.114c0.626-0.441,0.937-1.192,0.811-1.959l-1.259-7.686l5.323-5.436  C29.958,14.027,30.136,13.243,29.895,12.52z" id="XMLID_328_" />
                                            </svg>
                                        <?php
                                        }
                                        ?>

                                        <?php for ($k = 0; $k < 5 - $reviews[$i]["rating_no"]; $k++) { ?>
                                            <svg class="w-[15px] fill-orange inline" data-name="Layer 1" id="Layer_1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <title />
                                                <path d="M22.28,11.75a2.54,2.54,0,0,0,.6-2.56,2.43,2.43,0,0,0-1.95-1.7l-4.44-.66a.47.47,0,0,1-.36-.27l-2-4.17A2.39,2.39,0,0,0,12,1h0A2.37,2.37,0,0,0,9.83,2.4l-2,4.18a.46.46,0,0,1-.36.27l-4.43.69a2.4,2.4,0,0,0-1.94,1.7,2.53,2.53,0,0,0,.61,2.56L5,15.05a.49.49,0,0,1,.14.43l-.75,4.6a2.53,2.53,0,0,0,1,2.44,2.3,2.3,0,0,0,1.4.48,2.4,2.4,0,0,0,1.13-.29l4-2.18a.45.45,0,0,1,.45,0l4,2.16a2.33,2.33,0,0,0,2.53-.2,2.55,2.55,0,0,0,1-2.45l-.77-4.59a.51.51,0,0,1,.13-.44Zm-4.56,1.83A2.58,2.58,0,0,0,17,15.79l.77,4.6a.48.48,0,0,1-.18.48.46.46,0,0,1-.5,0l-4-2.16a2.34,2.34,0,0,0-2.24,0l-4,2.18a.46.46,0,0,1-.5,0,.47.47,0,0,1-.19-.48L7,15.82a2.58,2.58,0,0,0-.69-2.21L3.08,10.36A.49.49,0,0,1,3,9.86a.48.48,0,0,1,.39-.34l4.43-.68A2.4,2.4,0,0,0,9.58,7.47l2-4.19A.46.46,0,0,1,12,3a.46.46,0,0,1,.43.27l2,4.18a2.43,2.43,0,0,0,1.81,1.36l4.44.66a.45.45,0,0,1,.38.33.48.48,0,0,1-.12.51Z" />
                                            </svg>

                                        <?php
                                        }
                                        ?>


                                        <!-- <svg class="w-[15px] fill-orange inline" enable-background="new 0 0 32 32" id="Glyph" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path d="M29.895,12.52c-0.235-0.704-0.829-1.209-1.549-1.319l-7.309-1.095l-3.29-6.984C17.42,2.43,16.751,2,16,2  s-1.42,0.43-1.747,1.122l-3.242,6.959l-7.357,1.12c-0.72,0.11-1.313,0.615-1.549,1.319c-0.241,0.723-0.063,1.507,0.465,2.046  l5.321,5.446l-1.257,7.676c-0.125,0.767,0.185,1.518,0.811,1.959c0.602,0.427,1.376,0.469,2.02,0.114l6.489-3.624l6.581,3.624  c0.646,0.355,1.418,0.311,2.02-0.114c0.626-0.441,0.937-1.192,0.811-1.959l-1.259-7.686l5.323-5.436  C29.958,14.027,30.136,13.243,29.895,12.52z" id="XMLID_328_" />
                                        </svg>
                                        <svg class="w-[15px] fill-orange inline" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M528.5 171.5l-146.4-21.29l-65.43-132.4c-5.873-11.83-17.31-17.81-28.78-17.81c-11.39 0-22.82 5.89-28.7 17.8l-65.43 132.4L47.47 171.5C21.2 175.3 10.68 207.6 29.72 226.1l105.9 102.1l-25.04 145.5C107 495.3 123.6 512 142.2 512c4.932 0 10.01-1.172 14.88-3.75L288 439.6l130.9 68.7c4.865 2.553 9.926 3.713 14.85 3.713c18.61 0 35.21-16.61 31.65-37.41l-25.05-145.5l105.9-102.1C565.3 207.6 554.8 175.3 528.5 171.5zM406.9 294.7L388.8 312.3l23.83 138.4L288 385.4V68l62.31 126.1l139.2 20.25L406.9 294.7z" />
                                        </svg>
                                        <svg class="w-[15px] fill-orange inline" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M528.5 171.5l-146.4-21.29l-65.43-132.4c-5.873-11.83-17.31-17.81-28.78-17.81c-11.39 0-22.82 5.89-28.7 17.8l-65.43 132.4L47.47 171.5C21.2 175.3 10.68 207.6 29.72 226.1l105.9 102.1l-25.04 145.5C107 495.3 123.6 512 142.2 512c4.932 0 10.01-1.172 14.88-3.75L288 439.6l130.9 68.7c4.865 2.553 9.926 3.713 14.85 3.713c18.61 0 35.21-16.61 31.65-37.41l-25.05-145.5l105.9-102.1C565.3 207.6 554.8 175.3 528.5 171.5zM406.9 294.7L388.8 312.3l23.83 138.4L288 385.4V68l62.31 126.1l139.2 20.25L406.9 294.7z" />
                                        </svg>
                                         -->
                                    </span>
                                </div>
                                <div class="text-greyText1 text-xs text-justify">
                                    <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum porro adipisci repudiandae modi sunt autem necessitatibus ad cumque error expedita maxime numquam, ea culpa sed fugiat magnam temporibus veritatis at. -->
                                    <?= $reviews[$i]["product_review"] ?>
                                </div>
                            </div>
                            <!-- end of name-date-star-reviewText -->
                        </div>
                    <?php
                    }
                    ?>



                    <!-- end of review-cards -->


                </div>
                <!-- end of bottom-left side -->
                <!-- start of bottom-right side -->
                <div class="ml-20">
                    <!-- start of title -->
                    <div class=" text-blueText text-lg font-bold">Top Products</div>
                    <!-- end of title -->
                    <!-- start of top-product-cards -->
                    <?php foreach ($tops as $top) { ?>
                        <div class="px-5 flex flex-row justify-center items-center w-[450px] h-[80px] shadow-3xl rounded-xl mt-5">
                            <!-- image of top-product -->
                            <img src="../../../<?= $top["p_photo_1"] ?>" class="w-[80px] h-[60px]" />
                            <!-- start of details of top-product-->
                            <div class="flex flex-row justify-center ml-3">
                                <div class="text-sm text-blueText text-center flex flex-col">
                                    <div><?= $top["p_title"] ?></div>
                                    <div><?= $top["noOfOrders"] ?><span>orders</span></div>
                                </div>
                                <div class="ml-[30px] text-sm text-blueText text-center flex flex-col">
                                    <div>Inventory</div>
                                    <div><?= $top["p_stock"] ?><span>items</span></div>
                                </div>
                                <div class="ml-[30px] text-sm text-blueText text-center flex flex-col">
                                    <div>Sales</div>
                                    <div><?= $top["totalQty"] * $top["p_sell_price"]  ?><span>Ks</span></div>
                                </div>
                                <div class="ml-[30px] text-sm text-blueText text-center flex flex-col">
                                    <div>Price</div>
                                    <div><?= $top["p_sell_price"] ?><span>Ks</span></div>
                                </div>
                            </div>
                    </div>

                        <?php
                    } ?>

                        <!-- ========== -->

                        <!-- end of  details of top-product-->
                        </div>
                        <!-- ================================ -->

                        <!-- end of top-product-cards -->


                </div>
                <!-- end of bottom-right side -->

            </div>
            <!-- end of bottom -->
        </div>
    </div>
    <!-- end of right side -->
    <script>
        let server_Data = <?php echo json_encode($revAndOrders) ?>;
        console.log(server_Data);
        let revenue = [];
        let orders = [];
        for (let index = 0; index < server_Data.length; index++) {
            orders.push(server_Data[index].orders);
            revenue.push(server_Data[index].revenue);

        }
        // console.log(orders);
        let server_Data2 = <?php echo json_encode($salesByCat) ?>;
        console.log(server_Data2);
        let category = [];
        let sales = [];
        // var totalSales = 0;
        // for (let index = 0; index < server_Data2.length; index++) {
        //    totalSales += server_Data2[index].Sales;

        // }
        for (let index = 0; index < server_Data2.length; index++) {
            category.push(server_Data2[index].category);
            // var percent = (server_Data2[index].Sales / totalSales) * 100;
            
            // sales.push(percent.toFixed(2));
            sales.push(server_Data2[index].Sales);

        }
    </script>
</body>



</html>