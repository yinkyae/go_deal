<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />

  <title>My Order</title>
</head>

<body>


    <?php include "./common/nav_without_search.php"                     ?>
    <?php include "../Controller/myorderController.php"?>

  <!-- body -->
  <div class="float-left ml-20 mt-5 clear-both" id="edit_user_back" onclick="history.go(-1);">
        <ion-icon name="arrow-back" class="scale-[2]" title="back"></ion-icon>
    </div>

<p class="text-2xl my-8 text-orange-500 text-center font-medium">My orders</p>
  
<div class="relative">
    <table class="w-11/12 lg:w-4/5 text-sm text-left mx-auto bg-green-600/30">
        <thead class="text-xs text-gray-700 uppercase">
            <tr>
                <th scope="col" class="lg:px-6 px-2 py-1 lg:py-3">
                  No
                </th>
                <th scope="col" class="lg:px-6 px-2 py-1 lg:py-3">
                    Total Amount
                </th>
                <th scope="col" class="lg:px-6 px-2 py-1 lg:py-3">
                   Date
                </th>
                <th scope="col" class="lg:px-6 px-2 py-1 lg:py-3">
                   
                </th>
                
            </tr>
        </thead>
        <tbody>
            <?php $count = 0;
            foreach ($_get_user_order_result as $userOrder) {
                $count++; ?>
               
        
            <tr class="bg-white border-b order">
                <th scope="row" class="lg:px-6 px-2 py-1 lg:py-3 font-medium  whitespace-nowrap ">
                    <?=$count ?>
                </th>
                <td class="lg:px-6 px-2 py-1 lg:py-3">
                  <?=$userOrder["total_amt"] ?> Ks
                </td>
                <td class="lg:px-6 px-2 py-1 lg:py-3">
                    <?=$userOrder["order_receive_date"] ?>
                </td>
                <td scope="col" class="lg:px-6 px-2 py-1 lg:py-3">
                   <a href="./myorder_detail.php?order_id=<?=$userOrder["id"]?>" class="font-bold hover:text-red-500 hover:underline">View Detail</a>
                </td>
            </tr>
            <?php  } ?>
          
        </tbody>
    </table>
</div>

  </div>
   
   

    
  </body>
  </html>