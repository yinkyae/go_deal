<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../resources/lib/jquery/jquery.js"></script>
    <script src="../resources/js/menu.js"></script>

    <title>Footer</title>
</head>

<body>
    <!-- desktop footer start -->

    <div class>
    <footer class="lg:inline hidden text-gray-500 text-xs mt-20 bg-gray-300">
            <!-- texts -->
            <div class="mt-10 w-full flex justify-around">
                <!-- help center -->
                <div>
                    <p class="">Help Center</p>
                    <div>
                        <p class="mt-2">FAQ</p>
                        <p class="mt-2">Terms & Condition</p>
                        <p class="mt-2">Privacy Policy</p>
                    </div>
                </div>
                <!-- corporation -->
                <div>
                    <p class="">Corporation</p>
                    <div>
                        <p class="mt-2">Contact us</p>
                        <p class="mt-2">About us</p>
                    </div>
                </div>
                <!-- follow us -->
                <div>
                    <p class="">Follow us</p>
                    <div>
                        <div class="w-[50px]">
                            <img class="w-full" src="./resources/img/facebook_footer.svg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- copy rights -->
            <br />
            <p class="m-auto w-fit text-center">
                Copyright © 2023 GoDeal Online Store. All Rights Reserved.
            </p>
            <br />
        </footer>
    <!-- desktop footer end -->

    

    <!-- mobile footer start -->
    <footer class="lg:hidden inline ">
            <!-- closing line -->
            <div class="w-full h-[70px]flex justify-around py-2">
                <div class="flex flex-col justify-center items-center">
                    <a href="../aboutUs.php" class="w-[30px] h-[30px] rounded-full px-2 py-1 bg-black flex justify-center items-center">
                        <div class="w-[16px]">
                            <img class="w-full" src="./resources/img/headphone-line.svg" alt="" />
                        </div>
                    </a>
                    <p >Chat with us</p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <a href="../aboutUs.php" class="w-[30px] h-[30px] rounded-full px-2 py-1 bg-black flex justify-center items-center">
                        <div class="w-[16px]">
                            <img class="w-full" src="./resources/img/phone.svg" alt="" />
                        </div>
                    </a>
                    <p class="ml-[5px] ">Call us</p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <a href="../aboutUs.php" class="w-[30px] h-[30px] rounded-full px-2 py-1 bg-black flex justify-center items-center">
                        <div class="w-[16px]">
                            <img class="w-full" src="./resources/img/mail.svg" alt="" />
                        </div>
                    </a>
                    <p class="ml-[5px] ">Write to us</p>
                </div>
            </div>
            <!-- closing line end -->

            <!-- texts -->
            <div class="mt-5 w-full flex justify-around">
                <!-- help center -->
                <div>
                    <p>Help Center</p>
                    <div>
                        <p class="mt-2">FAQ</p>
                        <p class="mt-2">Terms & Condition</p>
                        <p class="mt-2">Privacy Policy</p>
                    </div>
                </div>
                <!-- corporation -->
                <div>
                    <p> Corporation</p>
                    <div>
                        <p class="mt-2">Contact us</p>
                        <p class="mt-2">About us</p>
                    </div>
                </div>
                <!-- follow us -->
                <div>
                    <p>Follow us</p>
                    <div>
                        <div class="w-[30px]">
                            <img class="w-full" src="./resources/img/facebook_footer.svg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- copy rights -->
            
            <p class="m-auto w-fit opacity-[50%] my-4">
                Copyright © 2023 GoDeal Online Store. All Rights Reserved.
            </p>
            
        </footer>
        </div>

</body>

</html>