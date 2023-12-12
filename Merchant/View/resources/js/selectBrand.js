$(document).ready(function () {
    $("#pbrand").change(function () {
      // loadRegion($(this).find(':selected').Val())
      $.ajax({
        type: "POST",
        url: "../../Controller/selectBrandController.php",
        data: {
          selectedBrandId: $(this).val(),
        },
        success: function (res) {
          $("#bselectimgid").empty();
          // $("#setown").empty();
          let receivebrand = JSON.parse(res);
          console.log(receivebrand);
          for (const brand of receivebrand) {
             $("#bselectimgid").append(
              `
              <img src="../../..${brand.brand_photo}" class="rounded-lg w-[100px] h-[100px]" />
              `
             )
          }
        },
  
  
  
  
  
  
        error: function (error) {
          console.log(error);
        },
      });
    });
    
  })