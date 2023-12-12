$(Document).ready(function () {
   var hello = $(".all_price");

   for (let index = 0; index < hello.length; index++) {
   
        let formatPrice = parseInt($(hello[index]).text());

        $(hello[index]).text(formatPrice.toLocaleString());
          

    
   }
   
})