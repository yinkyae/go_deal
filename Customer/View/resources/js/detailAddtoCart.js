$(document).ready(function () {
    $(".noti").hide();
    $("#add_to_cart").click(function () {
        
        let checkLogin = $(this).attr("isLogin");
        let detail_product_id = $(this).attr("pId");
        
       
        if (checkLogin == 1) {

            $.ajax({
                url: "../Controller/addto_cartController.php",
                type: "POST",
                data: {
                  ProductId: detail_product_id,
                },
                success: function (res) {
                  console.log(res);
                 
                  var result = res;
                  if (result == "done"){
                  
                    $(".noti").show();
                    $(".noti").html("<p> Product added to cart </p>");

                  }else if(result == "already Exit"){
                   
                    $(".noti").show();
                    $(".noti").html("<p> Product alreay in cart </p>");
      
                  }
      
                  setTimeout(function(){ $(".noti").hide(); }, 1000);
                  
                },
                error: function () {},
              });
            
        }else if(checkLogin == 2){
            window.location.href = "Registeration/signUp.php";
        }


    })

})