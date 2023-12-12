$(document).ready(function () {
  var add_products = $(".add");
  var remove_produts = $(".remove");
  var products_cart = $(".product_cart");
  var products_quantity = $(".qty");
  var p_delete = $(".delete");

  // plus quantity in cart
  for (let index = 0; index < products_cart.length; index++) {
    $(add_products[index]).click(function () {
      var quantity = $(products_quantity[index]).html();

      quantity = parseInt(quantity);
      quantity++;
      let product_id = $(products_cart[index]).attr("id");

      $.ajax({
        url: "../Controller/plusQtyController.php",
        type: "POST",
        data: {
          cart_productId: product_id,
          products_quantity: quantity,
        },
        success: function (res) {
          let qtyresult = JSON.parse(res);
          var sell_price = qtyresult[0]["p_sell_price"];
          var discount = qtyresult[0]["p_discount"];

          if (discount != null) {
            price = sell_price - (discount / 100) * sell_price;
          } else {
            price = sell_price;
          }

          var p_qty = qtyresult[0]["qty"];
          var totalprice = p_qty * price;
          $(products_quantity[index]).html(p_qty);

          let p_qty_price = $(".totalprice");
          $(p_qty_price[index]).html(totalprice);

          var totalAmount = 0;

          for (const price of p_qty_price) {
            totalAmount += parseInt($(price).html());
          }
          $("#subtotal").html(totalAmount);
          $("#total").html(totalAmount + 2250);
        },
        error: function () {},
      });
    });
  }
  // minus  quantity in cart
  for (let index = 0; index < products_cart.length; index++) {
    $(remove_produts[index]).click(function () {
      var quantity = $(products_quantity[index]).html();

      quantity = parseInt(quantity);
      if (quantity > 1) {
        quantity--;
      }

      let product_id = $(products_cart[index]).attr("id");

      $.ajax({
        url: "../Controller/plusQtyController.php",
        type: "POST",
        data: {
          cart_productId: product_id,
          products_quantity: quantity,
        },
        success: function (res) {
          let qtyresult = JSON.parse(res);
          var sell_price = qtyresult[0]["p_sell_price"];
          var discount = qtyresult[0]["p_discount"];
          console.log(discount);

          if (discount != null) {
            price = sell_price - (discount / 100) * sell_price;
            console.log("hello");
          } else {
            price = sell_price;
          }
          var p_qty = qtyresult[0]["qty"];
          var totalprice = p_qty * price;
          $(products_quantity[index]).html(p_qty);
          let p_qty_price = $(".totalprice");
          $(p_qty_price[index]).html(totalprice);

          var totalAmount = 0;
        
          for (const price of p_qty_price) {
            totalAmount += parseInt($(price).html());
          }
          $("#subtotal").html(totalAmount);
          $("#total").html(totalAmount + 2250);
        },
        error: function () {},
      });
    });
  }

  for (let index = 0; index < products_cart.length; index++) {
    $(p_delete[index]).click(function () {
      let product_id = $(products_cart[index]).attr("id");

      $.ajax({
        url: "../Controller/deleteFromCartController.php",
        type: "POST",
        data: {
          cart_productId: product_id,
        },
        success: function (res) {
        
          $products_from_cart = JSON.parse(res);
          console.log($products_from_cart);
          let totalPrice_cart =0;
        for (const delete_products of $products_from_cart) {
          
          let product_discount = delete_products["p_discount"];
          let product_sellPrice = delete_products["p_sell_price"];
          let product_quantity = delete_products["qty"];
          if(product_discount != null ){

            let price = product_sellPrice - ((product_discount/100) *product_sellPrice) ;

          }else {
           let price = product_sellPrice;
          }
         
          let subTotal = product_quantity * price;

          totalPrice_cart += subTotal;

        }


          $(products_cart[index]).remove();
          let p_qty_price = $(".totalprice");

          $("#subtotal").html(totalPrice_cart.toLocaleString());
          $("#total").html((totalPrice_cart + 2250).toLocaleString());
          
        },
        error: function () {},
      });
    });
  }
});
