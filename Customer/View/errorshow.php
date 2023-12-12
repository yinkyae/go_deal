<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link rel="stylesheet" href="./resources/css/categoryProduct.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script src="./resources/js/homeSearch.js" defer></script>
    <script src="./resources/js/menu.js" defer></script>
    
    <title>Error</title>
</head>

<body>
    <div class="w-full">
    <div class = "w-96 h-96 mx-auto border-1 border-orange mt-4 ">
        <img src="./resources/img/photo/error.jpg" alt="">
    </div>
 <p class="text-center text-orange-500 text-3xl">SORRY!</p>
 <p class=" mt-3 text-base text-gray-400 text-center" >You have no specific data about  product.Please go to our home page and get data about products you want.</p>
<div class="w-64 mx-auto mt-5 text-center">
 <a href="./homepage.php" class=" bg-orange-500 py-1 px-2 mt-5 text-white rounded-lg text-lg" >Go Home page</a>
 </div>
 </div>
</body>
</html>