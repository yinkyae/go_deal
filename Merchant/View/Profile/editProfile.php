<?php
include "../../Controller/editProfileController.php";

// print_r($merchant);
include "../../Controller/regionController.php";
// print_r($regions);
include "../../Controller/townshipController.php";
// print_r($townships);
include "../../Controller/jointownshipController.php";
//print_r($merchanttown);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
    <script src="../resources/js/editProfile.js" defer></script>
    <script src="../resources/js/address.js" defer></script>

    <link rel="stylesheet" href="../resources/css/profile.css">
</head>

<body>
    <?php include "../Layout/nav.php"; ?>
    <!-- start of right side -->
    <div class="ml-[350px] w-[800px] px-10 py-8 shadow-3xl flex flex-col mb-10 justify-center items-center">
        <!-- title of Edit profile -->
        <div class="flex flex-col justify-center items-center">
            <div class="text-orange text-lg font-bold mb-2">Edit Profile</div>
            <div class="w-[300px] h-[3px] bg-inputBox shadow-3xl"></div>
        </div>
        <form class="" action="../../Controller/updateProfileController.php" method="post" enctype="multipart/form-data">
            <!-- Edit profile picture -->
            <div class="flex flex-row mt-10">
                <div class="text-blueText w-36 text-md font-bold">Profile Picture:</div>
                <!-- <div class="relative"> -->
                <!-- <label title="Click to upload" for="button2" class="cursor-pointer flex items-center gap-4 py-20 px-4 before:border-gray-400/60 hover:before:border-gray-300 group dark:before:bg-darker dark:hover:before:border-gray-500 before:bg-gray-100 dark:before:border-gray-600 before:absolute before:inset-0 before:rounded-full before:border before:border-dashed before:transition-transform before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95"> -->
                <!-- <div class="w-max relative"> -->
                <label for="meprofile">
                    <img class="w-[200px] h-auto" src="../../../<?= $merchant[0]["me_profile"] ?>" id="meprofileimgid" alt="file upload">
                </label>
                <input type="file" name="meprofile" id="meprofile" accept=".png,.jpeg,.jpg" class="hidden">
                <input type="hidden" name="id" value="<?= $merchant[0]["id"] ?>">
                <!-- </div> -->
                <!-- <div class="absolute">
                        <span class="block text-base font-semibold relative text-blue-900 dark:text-white group-hover:text-blue-500">
                            Upload a photo
                        </span>
        
                    </div> -->
                <!-- </label> -->
                <!-- <input hidden="" type="file" name="button2" id="button2"> -->
                <!-- </div> -->
            </div>
            <!-- Edit Shop info -->
            <div class=" mt-10 flex flex-row ">
                <div class="text-blueText w-32 text-md font-bold mb-5">Shop Info:</div>
                <div class="space-y-5">

                    <!-- <div>
                            <label for="name"></label>
                            <svg class="fill-orange w-7 absolute mt-2 ml-2" style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="info" />
                                <g id="icons">
                                    <g id="user">
                                        <ellipse cx="12" cy="8" rx="5" ry="6" />
                                        <path d="M21.8,19.1c-0.9-1.8-2.6-3.3-4.8-4.2c-0.6-0.2-1.3-0.2-1.8,0.1c-1,0.6-2,0.9-3.2,0.9s-2.2-0.3-3.2-0.9    C8.3,14.8,7.6,14.7,7,15c-2.2,0.9-3.9,2.4-4.8,4.2C1.5,20.5,2.6,22,4.1,22h15.8C21.4,22,22.5,20.5,21.8,19.1z" />
                                    </g>
                                </g>
                            </svg>
                            <input id="name" name="name" type="text" required class="block w-lg rounded-lg border border-blueText px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-greyText1 text:lg pl-[45px]" placeholder="Name">

                        </div> -->
                    <!-- edit shop name -->
                    <div>
                        <label for="meshopname"></label>
                        <svg class="fill-orange w-7 absolute mt-2 ml-2" data-name="Layer 1" id="Layer_1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <title />
                            <path d="M81.49,21.21V32.35a6.48,6.48,0,0,1-6.11,6.56,6.19,6.19,0,0,1-4.57-1.76,6.26,6.26,0,0,1-1.91-4.53,6.3,6.3,0,0,1-12.6,0,6.3,6.3,0,1,1-12.6,0,6.3,6.3,0,0,1-12.6,0,6.27,6.27,0,0,1-6.48,6.29,6.48,6.48,0,0,1-6.11-6.56V21.21A3.21,3.21,0,0,1,21.72,18H78.28A3.21,3.21,0,0,1,81.49,21.21ZM72.81,82a2.82,2.82,0,0,0,2.82-2.82V42.9h-.51a10.14,10.14,0,0,1-6.23-2.15,10.29,10.29,0,0,1-12.59,0,10.31,10.31,0,0,1-12.6,0,10.29,10.29,0,0,1-12.59,0,10.27,10.27,0,0,1-6.27,2.14h-.47V79.18A2.82,2.82,0,0,0,27.19,82H33.5V61.82H48.83V82Z" />
                        </svg>
                        <input id="name" name="meshopname" value="<?= $merchant[0]["me_shop_name"] ?>" type="text" required class="block w-72 rounded-lg border border-blueText px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox text:sm pl-[45px]" placeholder="Shop Name">
                    </div>

                    <!-- edit email -->
                    <div>
                        <label for="meemail"></label>
                        <svg class="fill-orange w-5 absolute mt-3 ml-2" style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="info" />
                            <g id="icons">
                                <path d="M20,3H4C1.8,3,0,4.8,0,7v10c0,2.2,1.8,4,4,4h16c2.2,0,4-1.8,4-4V7C24,4.8,22.2,3,20,3z M21.6,8.8l-7.9,5.3   c-0.5,0.3-1.1,0.5-1.7,0.5s-1.2-0.2-1.7-0.5L2.4,8.8C2,8.5,1.9,7.9,2.2,7.4C2.5,7,3.1,6.9,3.6,7.2l7.9,5.3c0.3,0.2,0.8,0.2,1.1,0   l7.9-5.3c0.5-0.3,1.1-0.2,1.4,0.3C22.1,7.9,22,8.5,21.6,8.8z" id="email" />
                            </g>
                        </svg>
                        <input id="name" name="meemail" value="<?= $merchant[0]["me_email"] ?>" type="text" required class="block w-72 rounded-lg border border-blueText px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox text:sm pl-[45px]" placeholder="suuyiminn@gmail.com">
                    </div>
                    <!-- edit phone no -->
                    <div>
                        <label for="mephone"></label>
                        <svg class="fill-orange w-5 absolute mt-3 ml-2" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                            <rect fill="none" height="256" width="256" />
                            <path d="M222,158.4l-46.9-20a15.6,15.6,0,0,0-15.1,1.3l-25.1,16.7a76.5,76.5,0,0,1-35.2-35h0L116.3,96a15.9,15.9,0,0,0,1.4-15.1L97.6,34a16.3,16.3,0,0,0-16.7-9.6A56.2,56.2,0,0,0,32,80c0,79.4,64.6,144,144,144a56.2,56.2,0,0,0,55.6-48.9A16.3,16.3,0,0,0,222,158.4Z" />
                            <path d="M157.4,47.7a72.6,72.6,0,0,1,50.9,50.9,8,8,0,0,0,7.7,6,7.6,7.6,0,0,0,2.1-.3,7.9,7.9,0,0,0,5.6-9.8,88,88,0,0,0-62.2-62.2,8,8,0,1,0-4.1,15.4Z" />
                            <path d="M149.1,78.6a40.4,40.4,0,0,1,28.3,28.3,7.9,7.9,0,0,0,7.7,6,6.4,6.4,0,0,0,2-.3,7.9,7.9,0,0,0,5.7-9.8,55.8,55.8,0,0,0-39.6-39.6,8,8,0,1,0-4.1,15.4Z" />
                        </svg>
                        <input id="name" name="mephone" value="<?= $merchant[0]["me_phone"] ?>" type="text" required class="block w-72 rounded-lg border border-blueText px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox text:sm pl-[45px]" placeholder="09944138580">
                    </div>
                    <!-- edit region -->
                    <div class="relative inline-flex">
                        <svg class="fill-blueText w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                            <path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero" />
                        </svg>
                        <svg class="fill-orange w-3 absolute mt-3 ml-3 top-0 left-0" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M192 0C85.97 0 0 85.97 0 192c0 77.41 26.97 99.03 172.3 309.7c9.531 13.77 29.91 13.77 39.44 0C357 291 384 269.4 384 192C384 85.97 298 0 192 0zM192 271.1c-44.13 0-80-35.88-80-80S147.9 111.1 192 111.1s80 35.88 80 80S236.1 271.1 192 271.1z" />
                        </svg>
                        <select name="meregion" id="region" class="text-left border border-blueText rounded-lg text-blueText pl-10 w-72 py-2 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option id="sereg">Select Region</option>    
                        <?php foreach ($regions as $region) { ?>
                                <option 
                                value="<?php echo $region["id"] ?>"
                                <?php if ($region["id"] == $merchant[0]["me_region"]){
                                
                                ?>
                                selected
                           <?php } ?>
                                >
                                <?php echo $region["name"] 
                                ?>
                                </option>
                            <?php } ?>
                            
                        </select>
                    </div>
                    <!-- edit township -->
                    <div>
                        <div class="relative inline-flex">
                            <svg class="fill-blueText w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                                <path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero" />
                            </svg>
                            <svg class="fill-orange w-3 absolute mt-3 ml-3 top-0 left-0" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M192 0C85.97 0 0 85.97 0 192c0 77.41 26.97 99.03 172.3 309.7c9.531 13.77 29.91 13.77 39.44 0C357 291 384 269.4 384 192C384 85.97 298 0 192 0zM192 271.1c-44.13 0-80-35.88-80-80S147.9 111.1 192 111.1s80 35.88 80 80S236.1 271.1 192 271.1z" />
                            </svg>
                            <select name="metownship" id="township" class="text-left border border-blueText rounded-lg text-blueText pl-10 w-72 py-2 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                            
                                <option id="setown"  value="<?php echo $merchant[0]["me_township"] ?>" selected>

                                <?= $merchanttown[0]["name"] ?>
                                
                           
                                </option>
                            </select>
                        </div>

                    </div>


                    <!-- edit address -->
                    <div>

                        <label for="meaddress"></label>
                        <svg class="fill-orange w-3 absolute mt-3 ml-3" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M192 0C85.97 0 0 85.97 0 192c0 77.41 26.97 99.03 172.3 309.7c9.531 13.77 29.91 13.77 39.44 0C357 291 384 269.4 384 192C384 85.97 298 0 192 0zM192 271.1c-44.13 0-80-35.88-80-80S147.9 111.1 192 111.1s80 35.88 80 80S236.1 271.1 192 271.1z" />
                        </svg>
                        <input id="name" name="meaddress" value="<?= $merchant[0]["me_address"] ?>" type="text" required class="block w-72 rounded-lg border border-blueText pl-10 pr-2 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox text:sm " placeholder="no234,blockwlo, eoneouewi">
                    </div>


                    <div class="flex flex-row space-x-[55px]  mt-5">
                        <div class="mt-6">
                            <a href="../Profile/profile.php"><button type="button" class="text-orange font-bold rounded-lg w-28 py-1 border-2 border-orange  text-md font-RobotoSlab shadow-sm hover:bg-orange hover:text-whiteText hover:border-0 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Cancel</button></a>
                        </div>
                        <div class="mt-6">
                            <button type="submit" name="updateProfileDone" class="text-button font-bold w-28 py-1 rounded-lg  border-2 border-button  text-md font-RobotoSlab shadow-sm hover:bg-button hover:text-whiteText hover:border-0 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-button">Update</button>
                        </div>

                    </div>




                </div>
            </div>
        </form>

    </div>


    <!-- end of right side -->




</body>

</html>