//$(document).ready(function () {
  var imagesildes = $(".hero_img");
  var showImage = 0;
  console.log(imagesildes);
  function images_slider() {
    if (showImage >= imagesildes.length) {
      showImage = 0;
    }

    for (let index = 0; index < imagesildes.length; index++) {
      $(imagesildes[index]).removeClass("inline");
      $(imagesildes[index]).addClass("hidden");
    }
    $(imagesildes[showImage]).addClass("inline");
    $(imagesildes[showImage]).removeClass("hidden");

    showImage++;
  }

 var brandImages_slides = $(".b_hero_img");
 var b_showImage = 0;
  function brand_images_slider() {
    if (b_showImage >= brandImages_slides.length) {
      b_showImage = 0;
    }

    for (let index = 0; index < brandImages_slides.length; index++) {
      $(brandImages_slides[index]).removeClass("inline");
      $(brandImages_slides[index]).addClass("hidden");
    }
    $(brandImages_slides[b_showImage]).addClass("inline");
    $(brandImages_slides[b_showImage]).removeClass("hidden");

    b_showImage++;
  }

  setInterval(() => {
    brand_images_slider();
  }, 4000);


  setInterval(() => {
    images_slider();
  }, 4000);
//});
