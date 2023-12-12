<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link href="../resources/lib/tailwind/output.css" rel="stylesheet">
</head>

<body>
    <div class="">
        <img src="../resources/img/logo.png" class=" absolute top-0 right-0">
    </div>
    <div class="flex flex-row justify-center mt-28">

        <div class="flex flex-col justify-center px-8 py-10 bg-whiteText border-4 border-whiteText rounded-2xl drop-shadow-md">
            <div class="font-bold font-RobotoSlab text-xl flex justify-center mb-6"> OTP VERIFICATION</div>
            <div>
                <p class="text-greyText1 font-bold text-sm mt-6 ml-2 h-14 w-[270px] text-center">
                    Enter the OTP sent to your email.
                </p>
            </div>
            <form class="" action="../../Controller/verifyController.php" method="post">



                <div class="mt-1 flex flex-row ml-2">
                    <label for="code1" class="mt-2"></label>
                    <input id="code1" name="code1" type="number" autocomplete="current-password" required class="block w-lg  rounded-full  bg-inputBox w-[60px] py-2 text-blueText font-bold shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox text:lg pl-[25px]" placeholder="1">
                    <label for="code2" class="ml-2"></label>
                    <input id="code2" name="code2" type="number" autocomplete="current-password" required class="block w-lg  rounded-full  bg-inputBox w-[60px] py-2 text-blueText font-bold shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox text:lg pl-[25px]" placeholder="2">
                    <label for="code3" class="ml-2"></label>
                    <input id="code3" name="code3" type="number" autocomplete="current-password" required class="block w-lg  rounded-full  bg-inputBox w-[60px] py-2 text-blueText font-bold shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox text:lg pl-[25px]" placeholder="3">
                    <label for="code4" class="ml-2"></label>
                    <input id="code4" name="code4" type="number" autocomplete="current-password" required class="block w-lg  rounded-full  bg-inputBox w-[60px] py-2 text-blueText font-bold shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox text:lg pl-[25px]" placeholder="4">
                </div>


                <div class="mt-8">
                    <button type="submit" name="codeSubmit" class="rounded-full px-[110px] py-1 bg-button  text-xl font-RobotoSlab text-whiteText shadow-sm hover:bg-orange focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Submit</button>
                </div>
                <!-- <div class="mt-3"> -->
                    <!-- <span class="font-bold text-xs ml-[60px]">Don't receive code?</span> -->
                    <!-- <span class="text-button font-bold text-xs">Re-send</span> -->
                    <a href="./login.php"><span class="text-button font-bold text-xs ml-[250px] underline underline-offset-2">Back</span></a>
                <!-- </div> -->
            </form>
        </div>
        <div>
            <img src="../resources/img/verifyani.gif" class="h-[300px] w-[350px] ml-20">
        </div>

    </div>


</body>

</html>