<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/css/categoryProduct.css">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script src="./resources/js/menu.js"></script>
    <script src="./resources/js/editprofile.js"></script>
    <script src="./resources/js/editAddress.js?id=<?= time() ?>"></script>
    <script src="./resources/js/uploadProfile.js"></script>
    <title>Edit Profile</title>
</head>

<body class="w-full h-screen">

    <?php include "./common/nav_without_search.php";
    include "../Controller/addAddressController.php";
    include "../Controller/getUserController.php";
    ?>


<div class="float-left ml-20 mt-5 " id="edit_user_back" onclick="history.go(-1);" >
            <ion-icon name="arrow-back-circle-outline" class="scale-[2]" title="back" ></ion-icon>
            </div>

    <!-- body -->
    <section class="lg:w-2/5 w-11/12 mx-auto bg-white mt-20 drop-shadow-2xl rounded-3xl">
 


        <div class="my-10 flex-col justify-items-center relative">


            <!-- profile -->

            <div class="mx-auto w-2/3 my-10">

                <form action="../Controller/edit_profileController.php" method="post" enctype="multipart/form-data">

                    <div class="w-28 h-28 mx-auto absolute -top-10 right-[40%] rounded-full">
                        <label for="user_img" class="w-full h-full rounded-full">
                        <img class="w-full rounded-full" src="../../<?=$user_account_result[0]["c_profile"] ?>" alt="User image" id="upload_photo" class="w-full h-full rounded-full" >
                        </label>
                        
                        <input type="file" name="user_photo" id="user_img" accept="image/*" class="hidden">
                                              
                    </div>



                    <div class="pt-36">
                        <p class="text-xs text-gray-400 font-medium">Full Name</p>
                        <input type="text" name="user_name" class="border-b-[1px] border-b-gray-300 py-1 font-medium w-full px-4" value="<?= $user_account_result[0]["c_name"] ?>">
                    </div>

                    <div class="pt-4">
                        <p class="text-xs text-gray-400 font-medium">Phone Number</p>
                        <input type="text" name="user_phone" class="border-b-[1px] border-b-gray-300 py-1 font-medium w-full px-4" value="<?= $user_account_result[0]["c_phone"] ?>">
                    </div>

                    <div class="pt-4">
                        <p class="text-xs text-gray-400 font-medium">Email</p>
                        <input type="text" name="user_email" class="border-b-[1px] border-b-gray-300 py-1 font-medium w-full px-4" value="<?= $user_account_result[0]["c_email"] ?>">
                    </div>

                    <div class="pt-4 ">
                        <p class="text-xs text-gray-400 font-medium">Address</p>
                        <input type="text" name="user_address" class="border-b-[1px] border-b-gray-300 py-1 font-medium w-full px-4" value="<?= $user_account_result[0]["c_address"] ?>">
                    </div>

                    <div class="pt-4 ">
                        <p class="text-xs text-gray-400 font-medium">Region</p>
                        <select id="edit_region" name="user_region" class="border-b-[1px] border-b-gray-300 py-1 font-medium w-full px-4" type="text">
                            <?php foreach ($result as $region) { ?>
                                <option value="<?= $region["id"] ?>"><?= $region["name"] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="py-4">
                        <p class="text-xs text-gray-400 font-medium">Township</p>
                        <select id="edit_township" name="user_township" class="border-b-[1px] border-b-gray-300 py-1 font-medium w-full px-4" type="text">
                            <?php foreach ($result_townships as $defaultTown) { ?>
                                <option value="<?= $defaultTown["id"] ?>"><?= $defaultTown["name"] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="py-8 w-3/4 mx-auto">
                        <input type="submit" name="change_info" value="Update Profile" class="w-full py-2 bg-[#607d38] hover:bg-[#9ACD32] rounded-lg mx-auto text-white">
                    </div>

                </form>


            </div>

            <!-- other details -->

        </div>

    </section>

    <?php include "../View/common/commonFooter.php" ?>

</body>

</html>