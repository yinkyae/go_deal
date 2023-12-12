$(document).ready(function () {
  $("#logOut_popUp").hide();
  $("#no_logout").click(function () {
    $("#logOut_popUp").hide();
  });

  $("#logOut").click(function () {
    $("#logOut_popUp").show();
  });
});
