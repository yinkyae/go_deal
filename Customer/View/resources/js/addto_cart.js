$(document).ready(function () {
    var cart = $(".cart");
    var home_popular = $(".home_product");
    var notice = $(".notice");
    $(".notice").hide();
  
    var isLogin;
  
    for (let index = 0; index < cart.length; index++) {
      $(cart[index]).click(function (event) {
        event.preventDefault();
        console.log("hello");
        isLogin = $(this).attr("islogin");
        let productIdString = $(home_popular[index]).attr("id");
  
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
  });