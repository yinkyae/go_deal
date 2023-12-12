$(document).ready(function () {
    

    var register_popup = $(".register");

    var viewDetail = $(".view_detail");
    $(".show_detail").hide();
    $(".close_detail_popup").click(function () {
        $(".show_detail").hide();
    });
  

    var show_product = $(".products_to_add");

    for (let index = 0; index < viewDetail.length; index++) {
        
       $(viewDetail[index]).click(function (event) {

            event.preventDefault();

      let productIdString = $(show_product[index]).attr("id");

      var numericCharacters = productIdString.match(/[0-9]/g);

      if (numericCharacters) {
        var show_product_id = numericCharacters.join(""); // Convert the array to a single string
        
      }


        $.ajax({
            url: "../Controller/showDetailController.php",
            type: "POST",
            data: {
              ProductId: show_product_id,
            },
            success: function (res) {
                
            let productResult = JSON.parse(res);
            $(".show_detail_product").empty();
            
            var price;

            let discount_show = "";

            let product_discount = productResult[0]["p_discount"];
            let product_sellPrice = productResult[0]["p_sell_price"];

            if (product_discount != null) {
                
                price = product_sellPrice - (product_discount/100 * product_sellPrice);
                discount_show = `<p class="text-sm text-orange-500 font-medium "> ${product_discount} % off<span class="text-gray-500 ml-4 line-through">Ks ${product_sellPrice}</span></p>`;

            } else{
                price = product_sellPrice;
            }
            
            console.log(productResult);
             $(".show_detail_product").append(`
             <div class="flex mt-5 justify-center">
                 <div class="w-60 h-60  ">
                     <div class="w-4/5 h-3/4 mx-auto">
                         <img src="../..${productResult[0]["p_photo_1"]}" alt="product_photo" class="w-full h-full">
                     </div>
                 </div>
 
                 <div class="text-center mt-10">
                     <p class="text-2xl">${productResult[0]["p_title"]}</p>
                     <p class="text-base">${productResult[0]["p_des"]}</p>
                     <p class="text-base mt-5 font-medium">Ks ${price}</p>
                    ${discount_show}
                 </div>
             </div>
             <p class="w-11/12 mx-auto text-sm text-gray-600 text-center">${productResult[0]["p_detail"]}</p>`)
              
              
            },
            error: function () {},
          });



        $(".show_detail").show();

        
       }) 
        
    }


    
})