$(document).ready(function () {
    $("#pcategory").change(function () {
      // loadRegion($(this).find(':selected').Val())
      $.ajax({
        type: "POST",
        url: "../../Controller/selectCategoryController.php",
        data: {
          selectedCategoryId: $(this).val(),
        },
        success: function (res) {
          $("#psubcategory").empty();
          // $("#setown").empty();
          let receivesubcategory = JSON.parse(res);
          // console.log(receivesubcatgory);
          for (const subcategory of receivesubcategory) {
             $("#psubcategory").append(
              `
              <option value=" ${subcategory.id}"> ${subcategory.sub_category_name}</option>
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