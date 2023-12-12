$(document).ready(function () {
  var product_images = $(".detail_image");
  let current_image = 0;
  var next_image;
  

  $("#forward").click(function () {

    if(current_image == (product_images.length)-1 ){
        next_image = 0;
    } else{next_image = current_image + 1;}
      
      $(product_images[current_image]).removeClass("inline");
      $(product_images[current_image]).addClass("hidden");

      $(product_images[next_image]).removeClass("hidden");
      $(product_images[next_image]).addClass("inline");

      current_image = next_image;

    
  });

  $("#backward").click(function () {  

    if(current_image == 0 ){
        next_image = (product_images.length)-1;
    } else{next_image = current_image - 1;}

    $(product_images[current_image]).removeClass("inline");
    $(product_images[current_image]).addClass("hidden");

    $(product_images[next_image]).removeClass("hidden");
    $(product_images[next_image]).addClass("inline");

    current_image = next_image;

  });
});
