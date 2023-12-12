<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="../resources/lib/tailwind/output.css" rel="stylesheet">
</head>

<body>
    <div class="">
        <img src="../resources/img/logo.png" class="absolute top-0 right-0">
    </div>
    <div class="flex flex-row justify-center mt-28">
        <div class="flex flex-col justify-center px-8 py-10 bg-whiteText border-4 border-whiteText rounded-2xl drop-shadow-md">
            <form class="" action="../../Controller/forgotPasswordController.php" method="post">
    
                <div class="font-bold font-RobotoSlab text-xl flex justify-center mb-6"> Forget Password?</div>
                <div>
                    <p class="text-greyText1 text-sm mt-6 ml-6 h-14 w-[270px] text-center">
                        Don’t worry ! It happens.<br> 
                        Please enter the email address. <br>
                        We will send the OTP in this email.
                    </p>
                </div>
                <div class="mt-9">
                    <label for="email"></label>
                    <img src="../resources/img/email.svg" class="h-6 w-6 absolute ml-3 mt-2">
                    <input id="email" name="email" type="email" required class="block w-lg rounded-full bg-inputBox px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox text:lg pl-[45px]" placeholder="suuyiminn@gmail.com">
                </div>
                <small class="text-orange">
                    <?= $_SESSION["emailerror"] ?>
                </small>
                

                <div class="mt-6">
                    <button type="submit" name="continue" class="rounded-full px-[118px] py-1.5 bg-button  text-xl font-RobotoSlab text-whiteText shadow-sm hover:bg-orange focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Continue</button>
                </div>
                <div class="mt-2">
                    
                    <a href="./login.php"><span class="text-button font-bold text-xs ml-[270px] underline underline-offset-2">Back</span></a>
                </div>
            </form>
            
        
        
        </div>
        <div>
            <img src="../resources/img/forgotpassword.png" class="h-[350px] w-[4၀0px] ml-20">
        </div>

    </div>
    

</body>

</html>
<?php $_SESSION["emailerror"] = "" ?>