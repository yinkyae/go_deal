// $(document).ready(function() {
//     var max_fields = 10;
//     var wrapper = $(".input_fields_wrap");
//     var add_button = $(".add_field_button");
// var num = 1;
//     var x = 1;
//     $(add_button).click(function(e) {
//         e.preventDefault();
//         if (x < max_fields) {
//             x++;
//             $(wrapper).append(
//                 `
//                 <div class="mb-5 text-md flex flex-row items-center">

//                     <label class="w-44 text-blueText ">Sub-Category Name:</label>
//                     <input name="subcatname`+num+`" type="text" required class="block w-lg rounded-lg border border-blueText px-20 py-2 text-blueText shadow-sm focus:ring-blueText focus:border-blueText placeholder:text-inputBox pl-[45px]" placeholder="Name">


//                 </div>
//             `
//             )
//             num++;
//         }
//     });
//     $(wrapper).on("click", ".remove_field", function(e) {
//         e.preventDefault();
//         $(this).parent('div').remove();
//         x--;
//     })
// })
