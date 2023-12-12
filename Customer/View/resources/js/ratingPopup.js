$(document).ready(function () {
  var rating;
  var product_review;
  var productId;
  var rating_star = $(".rating-star");
  var give_review =$(".review");
  $("#rating_pop_up").hide();
  var orderproduct = $(".order");

  $("#review_is_send").hide();

  $("#close_rating_popup").click(function () {
    $("#rating_pop_up").hide();
    $("#product_review").val("");

    emptyStar(rating_star, rating_star.length);
  
  });

  for (let index = 0; index < give_review.length; index++) {
    $(give_review[index]).click(function () {
      $("#rating_pop_up").show();
      productId = $(orderproduct[index]).attr("id");
    });
  }

  $("input:radio[name=rating]").click(function () {
    rating = $(this).val();

    fill_star(rating_star, rating);

  });

  $("#send_review").click(function () {
    product_review = $("#product_review").val();

    $.ajax({
      url: "../Controller/saveRatingReviewController.php",
      type: "POST",
      data: {
        Rating: rating,
        Review: product_review,
        Product: productId,
      },
      success: function (res) {
        
        emptyStar( rating_star, rating_star.length)
        $("#rating_pop_up").hide();
        $("#product_review").val("");
        $("#review_is_send").show();

        setTimeout(() => {
          $("#review_is_send").hide();
        }, 3000);

      },
      error: function (error) {
        console.log(error);
      },
    });
    $("#rating_pop_up").hide();
    console.log(product_review);
  });
});

function fill_star( star_exists,starCount) {

  let fill_time = 100;
  
  for (let index = 0; index < starCount; index++) {

  setTimeout(() => {
    
    $(star_exists[index]).attr("name", "star");

  }, fill_time);
  
  fill_time +=100;

  }

}

function emptyStar(star_exists, star_empty) {
  
  for (let index = 0; index < star_empty; index++) {

    $(star_exists[index]).attr("name", "star-outline");

  }
  
}