<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter New Password</title>
    <link href="../resources/lib/tailwind/output.css" rel="stylesheet">
</head>

<body>
    <div class="">
        <img src="../resources/img/logo.png" class="absolute top-0 right-0">
    </div>
    <div class="flex flex-row justify-center mt-28">
        <div class="flex flex-col justify-center px-8 py-10 bg-whiteText border-4 border-whiteText rounded-2xl drop-shadow-md">
            <form class="" action="../../Controller/enterNewPassController.php" method="post">
    
                <div class="font-bold font-RobotoSlab text-xl flex justify-center mb-6">Enter New Password</div>
                
                <div class="mt-9">   
                    <label for="password" class="mt-2"></label>
                    <img src="../resources/img/password.svg" class="h-6 w-6 absolute ml-3 mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-lg  rounded-full  bg-inputBox px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox text:lg pl-[45px]" placeholder="********">
                    
                </div>
                 
                

                <div class="mt-6">
                    <button type="submit" name="newPass" class="rounded-full px-[125px] py-1.5 bg-button  text-xl font-RobotoSlab text-whiteText shadow-sm hover:bg-orange focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Submit</button>
                </div>
                <div class="mt-2">
                    
                    <a href="./login.php"><span class="text-button font-bold text-xs ml-[270px] underline underline-offset-2">Back</span></a>
                </div>
            </form>
            
        
        
        </div>
        <div>
            <img src="../resources/img/newpassword.png" class="h-[300px] w-[400px] ml-20">
        </div>

    </div>
    

</body>

</html>