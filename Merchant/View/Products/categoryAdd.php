<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
    <script src="../resources/js/product.js" defer></script>
    <link rel="stylesheet" href="../resources/css/product.css">
    <script src="../resources/lib/jquery/jQuery v3.7.0.js"></script>
    <script src="../resources/js/addCategory.js" defer></script>
</head>

<body>
    <?php include "../Layout/nav.php"; ?>
    <!-- start of right side -->
    <!-- title of Edit profile -->
    <!-- <div class="z-50 ml-64 flex flex-col justify-center items-center bg-whiteText sticky">
        <div class="text-blueText text-lg text-center font-bold mb-5">Add Product</div>
        <div class="w-[300px] h-[3px] bg-orange shadow-3xl"></div>
    </div> -->
    <div class="ml-36 px-10 py-2 flex flex-col justify-center items-center mb-10">

        <form class="" action="../../Controller/categoryaddController.php" method="post">
            <div class=" mt-10 flex flex-row justify-center">

                <ul class="space-y-5 list-none">

                    <!-- Category Name: -->
                    <li class="text-md flex flex-row items-center">
                        <label class="w-36 text-blueText ">Category Name:</label>
                        <input name="catname" type="text" required class="block w-lg rounded-lg border border-blueText px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox pl-[45px]" placeholder="Name">

                    </li>
                   
                   
                   

                </ul>
               

            </div>
            <div class="flex flex-row space-x-10 float-right mt-5">
                <div class="mt-6">
                    <a href="../Products/addProduct.php"><button type="button" class="px-5 py-1 text-button rounded-lg bg-inputBox border border-button  text-xl font-RobotoSlab shadow-sm hover:bg-orange hover:text-whiteText hover:border-0 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Cancel</button></a>
                </div>
                <div class="mt-6">
                    <button type="submit" name="catadd" class="text-whiteText rounded-lg px-5 py-1 bg-button border border-button  text-xl font-RobotoSlab shadow-sm hover:bg-orange hover:border-0 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Add</button>
                </div>

            </div>
        </form>


    </div>


    <!-- end of right side -->


    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <!-- <script src="../resources/js/main.js"></script> -->


</body>

</html>