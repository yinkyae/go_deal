$(document).ready(function () {
  $("#add").click(function () {
    let product_qty = $("#qty").html();
    var product_qtyInt = parseInt(product_qty);
    product_qtyInt++;

    $("#qty").html(product_qtyInt);
    $("#p_qty").val(product_qtyInt);
  });

  $("#remove").click(function () {
    let product_qty = $("#qty").html();
    var product_qtyInt = parseInt(product_qty);
    if (product_qtyInt>1) {
        
        product_qtyInt--;
    }
   
    $("#qty").html(product_qtyInt);
    $("#p_qty").val(product_qtyInt);
  });
});
