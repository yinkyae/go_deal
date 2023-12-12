$(document).ready(function () {
    $("#region").change(function () {
      // loadRegion($(this).find(':selected').Val())
      // console.log($(this).val());
  
      $.ajax({
        type: "POST",
        url: "../Controller/selectRegion1Controller.php",
        data: {
          selectedRegionId: $(this).val(),
        },
        success: function (res) {
          $("#township").empty();
          // console.log(res);
          $("#setown").empty();
  
          let receiveTownships = JSON.parse(res);
          console.log(receiveTownships);
          console.log(receiveTownships);
  
         
  
          for (const township of receiveTownships) {
             $("#township").append(
              `
              <option value=" ${township.id}"> ${township.name}</option>
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