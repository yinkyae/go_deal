$(document).ready(function() {

  $("#brand_search_mobile").keyup(function () {
    
    brandSearch($(this).val());

  });
  $("#brand_search").keyup(function () {
    brandSearch($(this).val());
    
  });

  
  function brandSearch (searchkey) {
    $.ajax({
      url: "../Controller/brand_search_controller.php",
      type: "POST",
      data: {
        searchText: searchkey,
      },
      success: function (res) {
        console.log(res);
        let search_brand = JSON.parse(res);

        $("#brand_main_section").empty();

        for (const brand of search_brand) {
          $("#brand_main_section").append(
            `  <a  href="./brandProfile.php?brand_id=${brand["id"]}" class="w-40 h-20 border-[1px] py-2 my-2 flex justify-evenly items-center mx-2 ">

          <div class="w-4/12"><img src="../..${brand["brand_photo"]}" alt=""></div>

        </a>`
          );
        }
      },
      error: function () {},
    });
  }


  
});
