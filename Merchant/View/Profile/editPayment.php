<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Payment</title>
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
    <link rel="stylesheet" href="../resources/css/profile.css">
</head>

<body>
    <?php include "../Layout/nav.php"; ?>
     <!-- start of right side -->
     <div class="ml-[450px] mt-10 w-[500px] h-[350px] justify-center items-center shadow-3xl flex flex-col rounded-2xl">
            <div class="mb-5 flex flex-col relative justify-center items-center rounded-lg p-4pacity-100" data-dismissible="alert">
                <div class="mr-[20px] text-xl text-center text-blueText font-bold">Edit Payment Account</div>
                <!-- <div class="absolute top-0 right-0 rounded-lg transition-all hover:bg-white hover:bg-opacity-20" data-dismissible-target="alert">
                    <button role="button" class="rounded-lg p-1" data-alert-dimissible="true">
                        <svg class="h-8 w-8 fill-orange" data-name="Layer 2" id="f2c063d8-1259-4c6c-9d6c-794b09db3fa6" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19,.56A18.44,18.44,0,1,0,37.44,19,18.461,18.461,0,0,0,19,.56Z" />
                            <rect fill="#fff" height="2.5" rx="1.25" transform="translate(19 45.87) rotate(-135)" width="15.435" x="11.282" y="17.75" />
                            <rect fill="#fff" height="2.5" rx="1.25" transform="translate(-7.87 19) rotate(-45)" width="15.435" x="11.282" y="17.75" />
                        </svg>
                    </button>
                </div> -->
                <div class="w-[460px] h-[2px] bg-orange shadow-3xl mt-3"></div>
            </div>
            <form action="../../Controller/addPaymentController.php" method="post">
            <div class="flex flex-row mt-5">
                <label for="name" class="text-blueText text-md mr-[70px]">Account Type:</label>

                <input id="name" name="acctype" type="text" required class="block w-lg rounded-lg border border-blueText px-18 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox text:lg pl-[45px]" placeholder="KBZ">

            </div>
            <div class="flex flex-row mt-16">
                <label for="name" class="text-blueText text-md mr-10">Account Number:</label>

                <input id="name" name="accnumber" type="text" required class="block w-lg rounded-lg border border-blueText px-18 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox text:lg pl-[45px]" placeholder="123456789">

            </div>
            <div class="flex flex-row  justify-between items-center mt-5">
                <div class="mt-6">
                    <a href="../Profile/profile.php"><button type="button" class="text-orange font-bold rounded-lg py-1.5 w-32 border-2 border-orange text-md font-RobotoSlab shadow-sm hover:bg-orange hover:text-whiteText hover:border-0 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Cancel</button></a>
                </div>
                <div class="mt-6">
                    <button type="submit" name="addpayment" class="text-button rounded-lg  py-1.5 w-32 border-2 border-button  text-md font-RobotoSlab shadow-sm hover:bg-button hover:text-whiteText hover:border-0 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-button">Add</button>
                </div>


            </div>
</form>
        </div>


    <!-- end of right side -->

   
    


</body>

</html>