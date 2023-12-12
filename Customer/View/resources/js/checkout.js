$(document).ready(function () {

  $(`[ del ]`).click(function () {
    id = $(this).attr("del");
    $(`div[ item_no = ${id}]`).remove();
  });
});
