$(document).ready(function () {
  var category = $(".cate_item");


  for (const sub_category of category) {
    $(sub_category).click(function () {
      for (let index = 0; index < category.length; index++) {
        $(category[index]).removeClass("bg-black");
        $(category[index]).removeClass("bg-opacity-80");
        $(category[index]).removeClass("text-white");
        $(category[index]).addClass("bg-gray-100");
      }
      $(this).removeClass("bg-gray-100");
      $(this).addClass("bg-black bg-opacity-80 text-white");

      $.ajax({
        url: "../Controller/filterSub_cateController.php",
        type: "POST",
        data: {
          subcate_id: $(this).attr("id"),
        },
        success: function (res) {
          console.log(res);
          $(".filter_sub_category").empty();
          let filter_sub_category = JSON.parse(res);

          for (const subCate_product of filter_sub_category) {
            var rating = "";

            var product_rating = subCate_product["product_rating"];

            for (let index = 0; index < product_rating; index++) {
              rating += `<ion-icon name="star" class="lg:w-2 w-1 lg:h-2 h-1 mr-[2px]"></ion-icon>`;
            }

            var discount = "";
            var normal_price = "";

            if (subCate_product["p_discount"] != null) {
              discount = `<p class="text-[#607d38] lg:text-xs text-[9px] mt-2 ml-2">${subCate_product["p_discount"]}%off</p>`;
              normal_price = `<p class = "text-gray-700 text-center line-through text-[9px]">${subCate_product["p_sell_price"]}</p>`;

              var price =
                subCate_product["p_sell_price"] -
                (subCate_product["p_discount"] / 100) *
                  subCate_product["p_sell_price"];
            } else price = subCate_product["p_sell_price"];

            $(".filter_sub_category").append(
              ` <a href="./detailpage.php?productid=${subCate_product["id"]}" class="lg:w-56 w-40 lg:h-72 h-60 rounded-xl bg-white drop-shadow-md mt-8 mx-5 group products_to_add" id ="${subCate_product["id"]}">
              
              <div class="w-full h-full absolute opacity-0 bg-green-800/20 -top-10 group-hover:top-0
              z-50 group-hover:opacity-100 rounded-xl transition-all delay-100 ease-in-out flex flex-col justify-around">
             <div>
                 <div class="w-32 mx-auto flex justify-evenly">
                     <div class=" rounded-full bg-white all_wishlist hover:bg-green-600" title="Add to wishlist">
                         <ion-icon name="heart" class="scale-150 mt-1 text-green-600 px-2 py-1 hover:text-white"></ion-icon>
                     </div>

                     <div class="rounded-full bg-white hover:bg-green-600 all_cart" title="Add to cart">
                         <ion-icon name="cart" class="scale-150 mt-1 text-green-600 px-2 py-1  hover:text-white"></ion-icon>
                     </div>

                     <div class=" rounded-full bg-white hover:bg-green-600 view_detail" title="view detail">
                         <ion-icon name="eye-outline" class="scale-150 mt-1 text-green-600 px-2 py-1 hover:text-white"></ion-icon>
                     </div>
                 </div>

                 <div class="w-36  bg-white text-gray-500 text-xs rounded-3xl mx-auto py-1 mt-2 text-center all_notice"></div>

             </div>

         </div>
              
              <!-- product image -->
               <div class="w-full mx-auto h-2/3 relative">
                            <div class="w-full h-full mt-2 mx-auto flex-col justify-items-center">
                            <img src="../..${subCate_product["p_photo_1"]} " alt="" class="w-full h-full ">
                            </div>
                          
                          
                        </div>
               <!-- product information -->
               <div class="flex justify-evenly lg:h-1/3 h-2/5 mt-3">
                   <div>
                       <p class="text-center text-xs mt-1 text-green-800">${subCate_product["p_title"]}</p>
                       <p class="lg:block text-[10px] text-center hidden text-gray-600 ">${subCate_product["p_des"]}</p>
                       ${discount}
                   
                   </div>
                   <div>
                       
                   <div class="flex mt-1 ml-3 text-[#607d38]">

                           ${rating}
   
                       </div>
                       <p class=" text-center lg:text-xs text-[10px] font-medium text-[#607d38] mt-1 w-16 ml-1">Ks <span>${price}</span></p>
                       ${normal_price}
                        
   
                   </div>
               </div>
           </a>`
            );

            handleWishList();
            handleAdd_toCart();
            handleViewDetail();

          }
        },
        error: function (error) {
          console.log(error);
        },
      });
    });
  }

  $("#cate_search").keyup(function () {
    searchCategoryProduct($(this).val());
  });
  $("#cate_search_mobile").keyup(function () {
    searchCategoryProduct($(this).val());
  });

  function searchCategoryProduct(search) {
    $.ajax({
      url: "../Controller/homeSearchController.php",
      type: "POST",
      data: {
        SearchText: search,
      },
      success: function (res) {
        let search_products = JSON.parse(res);

        console.log(search_products);

        $(".filter_sub_category").empty();

        for (const search_product of search_products) {
          var discount = "";
          var normal_price = "";

          var rating = "";

          var product_rating = search_product["product_rating"];

          for (let index = 0; index < product_rating; index++) {
            rating += `<ion-icon name="star" class="lg:w-2 w-1 lg:h-2 h-1 mr-[2px]"></ion-icon>`;
          }

          if (search_product["p_discount"] != null) {
            discount = `<p class="text-[#607d38] lg:text-xs text-[9px] mt-2 ml-2">${search_product["p_discount"]}%off</p>`;
            normal_price = `<p class="text-gray-700 text-center line-through text-[9px]">${search_product["p_sell_price"]}</p>`;

            var price =
              search_product["p_sell_price"] -
              (search_product["p_discount"] / 100) *
                search_product["p_sell_price"];
          } else price = search_product["p_sell_price"];

          $(".filter_sub_category").append(

            ` <a href="./detailpage.php?productid=${search_product["id"]}" class="lg:w-56 w-40 lg:h-72 h-60 bg-white rounded-xl drop-shadow-md mt-8 mx-4 products_to_add group" id ="${search_product["id"]}">
            
            <div class="w-full h-full absolute opacity-0 bg-green-800/20 -top-10 group-hover:top-0
            z-50 group-hover:opacity-100 rounded-xl transition-all delay-100 ease-in-out flex flex-col justify-around">
           <div>
               <div class="w-32 mx-auto flex justify-evenly">
                   <div class=" rounded-full bg-white all_wishlist hover:bg-green-600" title="Add to wishlist">
                       <ion-icon name="heart" class="scale-150 mt-1 text-green-600 px-2 py-1 hover:text-white"></ion-icon>
                   </div>

                   <div class="rounded-full bg-white hover:bg-green-600 all_cart" title="Add to cart">
                       <ion-icon name="cart" class="scale-150 mt-1 text-green-600 px-2 py-1  hover:text-white"></ion-icon>
                   </div>

                   <div class=" rounded-full bg-white hover:bg-green-600 view_detail" title="view detail">
                       <ion-icon name="eye-outline" class="scale-150 mt-1 text-green-600 px-2 py-1 hover:text-white"></ion-icon>
                   </div>
               </div>

               <div class="w-36  bg-white text-gray-500 text-xs rounded-3xl mx-auto py-1 mt-2 text-center all_notice"></div>

           </div>



       </div>


            <!-- product image -->
            <div class="w-full h-2/3 mx-auto relative">
                         <div class="w-full h-full mt-2 mx-auto flex-col justify-items-center">
                         <img src="../..${search_product["p_photo_1"]} " alt="" class="w-full h-full ">
                         </div>
                         
                       
                     </div>
            <!-- product information -->
            <div class="flex justify-evenly lg:h-1/3 h-2/5 mt-3">
                <div>
                    <p class="text-center text-xs mt-1 text-green-800">${search_product["p_title"]}</p>
                    <p class="lg:block text-[10px] text-center hidden text-gray-600 ">${search_product["p_des"]}</p>
                    ${discount}
                
                </div>
                <div>
                    
                <div class="flex mt-1 ml-3 text-[#607d38]">

                        ${rating}

                    </div>
                    <p class=" text-center lg:text-xs text-[10px] font-medium text-[#607d38] mt-1 w-16 ml-1">Ks <span>${price.toLocaleString()}</span></p>
                    ${normal_price}
                     

                </div>
            </div>
        </a>`
          );

          handleWishList();
          handleAdd_toCart();
          handleViewDetail();
        }
        
      },
      error: function () {},
    });
  }
});

// add to wishlist function
function handleWishList() {
  var wishlist = $(".all_wishlist");
  var all_products = $(".products_to_add");
  var notice = $(".all_notice");
  $(".all_notice").hide();
  for (let index = 0; index < wishlist.length; index++) {
    $(wishlist[index]).click(function (event) {
      event.preventDefault();

      var isLogin = $("#sub_cate").attr("islogin");
      let productIdString = $(all_products[index]).attr("id");

      var numericCharacters = productIdString.match(/[0-9]/g);

      if (numericCharacters) {
         productId = numericCharacters.join(""); // Convert the array to a single string
        
      }

      if (isLogin == 1) {
        $.ajax({
          url: "../Controller/addToWishListController.php",
          type: "POST",
          data: {
            ProductId: productId,
          },
          success: function (res) {
            console.log(res);
           
            var result = res;
            if (result == "done"){
              $(notice[index]).show();
              $(notice[index]).html("<p>product added to wishlist</p>");

            }else if(result == "already Exit"){
              $(notice[index]).show();
              $(notice[index]).html("<p>product alredy in wishlist</p>");
             

            }

            setTimeout(function(){ $(notice[index]).hide(); }, 1000);
            
          },
          error: function () {},
        });
      } else if (isLogin == 2) {
        window.location.href = "Registeration/signUp.php";
      }
    });
  }
}

// products add to cart function

function handleAdd_toCart () {
  var cart = $(".all_cart");
  var all_products = $(".products_to_add");
  var notice = $(".all_notice");
  $(".all_notice").hide();

  var isLogin;

  for (let index = 0; index < cart.length; index++) {
    $(cart[index]).click(function (event) {
      event.preventDefault();
      isLogin = $("#sub_cate").attr("islogin");
      let productIdString = $(all_products[index]).attr("id");

      var numericCharacters = productIdString.match(/[0-9]/g);

      if (numericCharacters) {
         productId = numericCharacters.join(""); // Convert the array to a single string
        
      }

      if (isLogin == 1) {
        $.ajax({
          url: "../Controller/addto_cartController.php",
          type: "POST",
          data: {
            ProductId: productId,
          },
          success: function (res) {
            console.log(res);
           
            var result = res;
            if (result == "done"){
              $(notice[index]).show();
              $(notice[index]).html("<p>product added to cart</p>");

            }else if(result == "already Exit"){
              $(notice[index]).show();
              $(notice[index]).html("<p>product alredy in cart</p>");
             

            }

            setTimeout(function(){ $(notice[index]).hide(); }, 1000);
            
          },
          error: function () {},
        });
      } else if (isLogin == 2) {
        window.location.href = "Registeration/signUp.php";
      }
    });
  }
}


// handle product View function
function handleViewDetail () {
    
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
                   <div class="w-5/6 h-3/4 mx-auto">
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


  
}
