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
    <link rel="stylesheet" href="../resources/css/message.css">

</head>

<body>
    <?php include "../Layout/nav.php"; ?>
    <div class="text-md text-blueText ml-[300px] mt-[200px]">
        <!-- component -->

        

        <div class="w-[900px]" style="margin-top: -128px;">
            <div class="py-6 h-screen">
                <div class="flex  h-full">

                    <!-- Left -->
                    <div class="w-1/3 flex flex-col px-3 py-3 rounded-xl shadow-3xl bg-inputBox">

                        

                        <!-- Search -->
                        <div class="py-2">
                            <input type="text" class="w-full border border-inputBox rounded-xl px-2 py-3 text-sm" placeholder="Search or start new chat"/>
                        </div>

                        <!-- Contacts -->
                        <div class="mt-5 flex-1 overflow-auto">
                            <div class="px-3 flex items-center bg-whiteText rounded-xl cursor-pointer">
                                <div>
                                    <img class="h-12 w-12 rounded-full"
                                         src="https://darrenjameseeley.files.wordpress.com/2014/09/expendables3.jpeg"/>
                                </div>
                                <div class="ml-4 flex-1 py-4">
                                    <div class="flex items-bottom justify-between">
                                        <p class="text-sm">
                                            New Movi
                                        </p>
                                        <p class="text-sm">
                                            12:45 pm
                                        </p>
                                    </div>
                                    <p class="text-grey-dark mt-1 text-sm">
                                        Get Andrés on this movie ASAP!
                                    </p>
                                </div>
                            </div>
                            
                            <div class=" mt-5 bg-white px-3 flex items-center hover:bg-grey-lighter cursor-pointer">
                                <div>
                                    <img class="h-12 w-12 rounded-full"
                                         src="https://www.famousbirthdays.com/headshots/russell-crowe-6.jpg"/>
                                </div>
                                <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                    <div class="flex items-bottom justify-between">
                                        <p class="text-grey-darkest">
                                            Russell Crowe
                                        </p>
                                        <p class="text-xs text-grey-darkest">
                                            12:45 pm
                                        </p>
                                    </div>
                                    <p class="text-grey-dark mt-1 text-sm">
                                        Hold the line!
                                    </p>
                                </div>
                            </div>

                            <div class=" mt-5 bg-white px-3 flex items-center hover:bg-grey-lighter cursor-pointer">
                                <div>
                                    <img class="h-12 w-12 rounded-full"
                                         src="https://www.famousbirthdays.com/headshots/russell-crowe-6.jpg"/>
                                </div>
                                <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                    <div class="flex items-bottom justify-between">
                                        <p class="text-grey-darkest">
                                            Russell Crowe
                                        </p>
                                        <p class="text-xs text-grey-darkest">
                                            12:45 pm
                                        </p>
                                    </div>
                                    <p class="text-grey-dark mt-1 text-sm">
                                        Hold the line!
                                    </p>
                                </div>
                            </div>
                            
                            
                        </div>

                    </div>


                    <!-- Right -->
                    <div class="w-2/3 flex flex-col">

                        <!-- Header -->
                        <div class="py-2 px-3 bg-grey-lighter flex flex-row justify-center items-center">
                            <div class="flex items-center">
                                <div>
                                    <img class="w-10 h-10 rounded-full" src="https://darrenjameseeley.files.wordpress.com/2014/09/expendables3.jpeg"/>
                                </div>
                                <div class="ml-4">
                                    <p class="text-grey-darkest">
                                        New Movi
                                    </p>
                                    
                                </div>
                            </div>

                           
                        </div>

                        <!-- Messages -->
                        <div class="flex-1 overflow-auto">
                            <div class="py-2 px-3">

                                <div class="flex justify-center mb-2">
                                    <div class="py-2 px-4">
                                        <p class="text-sm uppercase font-bold">
                                            February 20, 2018
                                        </p>
                                    </div>
                                </div>

    

                                <div class="flex mb-2">
                                    <div class="rounded py-2 px-3" style="background-color: #F2F2F2">
                                        <p class="text-sm text-teal">
                                            Sylverter Stallone
                                        </p>
                                        <p class="text-sm mt-1">
                                            Hi everyone! Glad you could join! I am making a new movie.
                                        </p>
                                        <p class="text-right text-xs text-grey-dark mt-1">
                                            12:45 pm
                                        </p>
                                    </div>
                                </div>

                                <div class="flex mb-2">
                                    <div class="rounded py-2 px-3" style="background-color: #F2F2F2">
                                        <p class="text-sm text-purple">
                                            Tom Cruise
                                        </p>
                                        <p class="text-sm mt-1">
                                            Hi all! I have one question for the movie
                                        </p>
                                        <p class="text-right text-xs text-grey-dark mt-1">
                                            12:45 pm
                                        </p>
                                    </div>
                                </div>

                                <div class="flex mb-2">
                                    <div class="rounded py-2 px-3" style="background-color: #F2F2F2">
                                        <p class="text-sm text-orange">
                                            Harrison Ford
                                        </p>
                                        <p class="text-sm mt-1">
                                            Again?
                                        </p>
                                        <p class="text-right text-xs text-grey-dark mt-1">
                                            12:45 pm
                                        </p>
                                    </div>
                                </div>

                                <div class="flex mb-2">
                                    <div class="rounded py-2 px-3" style="background-color: #F2F2F2">
                                        <p class="text-sm text-orange">
                                            Russell Crowe
                                        </p>
                                        <p class="text-sm mt-1">
                                            Is Andrés coming for this one?
                                        </p>
                                        <p class="text-right text-xs text-grey-dark mt-1">
                                            12:45 pm
                                        </p>
                                    </div>
                                </div>

                                <div class="flex mb-2">
                                    <div class="rounded py-2 px-3" style="background-color: #F2F2F2">
                                        <p class="text-sm text-teal">
                                            Sylverter Stallone
                                        </p>
                                        <p class="text-sm mt-1">
                                            He is. Just invited him to join.
                                        </p>
                                        <p class="text-right text-xs text-grey-dark mt-1">
                                            12:45 pm
                                        </p>
                                    </div>
                                </div>

                                <div class="flex justify-end mb-2">
                                    <div class="rounded py-2 px-3" style="background-color: #E2F7CB">
                                        <p class="text-sm mt-1">
                                            Hi guys.
                                        </p>
                                        <p class="text-right text-xs text-grey-dark mt-1">
                                            12:45 pm
                                        </p>
                                    </div>
                                </div>

                                <div class="flex justify-end mb-2">
                                    <div class="rounded py-2 px-3" style="background-color: #E2F7CB">
                                        <p class="text-sm mt-1">
                                            Count me in
                                        </p>
                                        <p class="text-right text-xs text-grey-dark mt-1">
                                            12:45 pm
                                        </p>
                                    </div>
                                </div>

                                <div class="flex mb-2">
                                    <div class="rounded py-2 px-3" style="background-color: #F2F2F2">
                                        <p class="text-sm text-purple">
                                            Tom Cruise
                                        </p>
                                        <p class="text-sm mt-1">
                                            Get Andrés on this movie ASAP!
                                        </p>
                                        <p class="text-right text-xs text-grey-dark mt-1">
                                            12:45 pm
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Input -->
                        <div class="bg-grey-lighter px-4 py-4 flex items-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path opacity=".45" fill="#263238" d="M9.153 11.603c.795 0 1.439-.879 1.439-1.962s-.644-1.962-1.439-1.962-1.439.879-1.439 1.962.644 1.962 1.439 1.962zm-3.204 1.362c-.026-.307-.131 5.218 6.063 5.551 6.066-.25 6.066-5.551 6.066-5.551-6.078 1.416-12.129 0-12.129 0zm11.363 1.108s-.669 1.959-5.051 1.959c-3.505 0-5.388-1.164-5.607-1.959 0 0 5.912 1.055 10.658 0zM11.804 1.011C5.609 1.011.978 6.033.978 12.228s4.826 10.761 11.021 10.761S23.02 18.423 23.02 12.228c.001-6.195-5.021-11.217-11.216-11.217zM12 21.354c-5.273 0-9.381-3.886-9.381-9.159s3.942-9.548 9.215-9.548 9.548 4.275 9.548 9.548c-.001 5.272-4.109 9.159-9.382 9.159zm3.108-9.751c.795 0 1.439-.879 1.439-1.962s-.644-1.962-1.439-1.962-1.439.879-1.439 1.962.644 1.962 1.439 1.962z"></path></svg>
                            </div>
                            <div class="flex-1 mx-4">
                                <input class="w-full border rounded px-2 py-2" type="text"/>
                            </div>
                            <div>
                            <a class="inline-block w-full lg:w-auto py-3 px-8 text-sm leading-6 text-whiteText font-medium tracking-tighter font-heading text-center bg-button hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl" href="#">Send</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    
</body>

</html>