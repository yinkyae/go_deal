$(document).ready(function () {
    $("#dateId").on('change', function(event) {
        event.preventDefault();
        // console.log(this.value);
      $.ajax({
        type: "POST",
        url: "../../Controller/searchDateController.php",
        data: {
          dateVal: $(this).val(),
        },
        success: function(res){
            $("#searchDateResult").empty();
            let products = JSON.parse(res);
            console.log(products);
            
            for (const product of products) {
                var details = "";
                for (const inner  of product) {
                    console.log(inner);
                    details += 
                    `
                    <!-- start of order details -->
                                <div class="">
                                    <div class="relative flex flex-wrap items-center xl:justify-between -mx-4 mb-1 pb-5 border-b border-gray-200 border-opacity-40">
                                        <div class="relative w-full md:w-auto px-3 mb-6 xl:mb-0">
                                            <a class="block mx-auto max-w-max" href="#">
                                                <img class="h-28 object-cover" src="../../..${inner.p_photo_1}" alt="">
                                            </a>
                                        </div>
                                        <div class="w-full md:w-auto mb-6 xl:mb-0">
                                            
                                            <div class="flex flex-wrap">
                                                <p class="mr-4 text-sm font-medium">
                                                    <span class="font-heading">${inner.p_title}</span>
                                                    <!-- <span class="ml-2 text-gray-400">Silver</span> -->
                                                </p>
                                                <!-- <p class="text-sm font-medium">
                                                   <span>Memory storage:</span>
                                                   <span class="ml-2 text-gray-400">128GB</span>
                                               </p> -->
                                            </div>
                                        </div>
                                        <div class="w-full xl:w-auto px-4 mb-6 xl:mb-0 mt-6 xl:mt-0">
                                            <div class="flex items-center">
                                                <h4 class="mr-4 font-heading font-medium">Qty:</h4>
                                                <h4 class="">${inner.qty}</h4>

                                            </div>
                                        </div>
                                        <div class="w-full xl:w-auto px-4">
                                            <span class="text-md font-heading font-medium text-blue-500">
                                                <span class="text-sm">$</span>
                                                <span>${inner.unit_price}</span>
                                            </span>
                                        </div>

                                    </div>

                                </div>
                                <!-- end of order details -->
                    `;
                }
               $("#searchDateResult").append(
                `
                <div class="flex flex-row mb-3">
                    <div class="w-[650px] md:mb-0">
                        <div class="py-12 px-3 md:px-12 bg-whiteText text-blueText text-md rounded-3xl">
                            <span class="inline-block mb-3 text-blueText text-md font-bold">Order Id:</span>
                            <span class="font-bold">${product[0].id}</span>
                            <span class="float-right"><span class="inline-block font-bold">Total Price:</span>
                                <span class="font-bold">${product[0].total_amt}Ks</span></span>
                                ${details}
                           
                        </div>
                    </div>

                    <div class="text-blueText text-sm px-4 ml-5 mt-10">
                        <div class="flex flex-col justify-center">
                            <h2 class="mb-2 font-heading font-bold underline underline-offset-2 text-md">Customers</h2>
                            <div class="flex flex-row  py-1 mb-3 leading-8 bg-white bg-opacity-50 font-heading font-medium rounded-3xl">

                                <span class="w-32">Name:</span>
                                <span>${product[0].c_name}</span>



                            </div>
                            <div class="flex flex-row py-1 mb-3 leading-8 bg-white bg-opacity-50 font-heading font-medium rounded-3xl">
                                <span class="w-32">Phone No:</span>
                                <span>${product[0].c_phone}</span>


                            </div>
                            <div class="flex flex-row py-1 mb-3 leading-8 bg-white bg-opacity-50 font-heading font-medium rounded-3xl">
                                <span class="w-32">Address:</span>

                                <span>${product[0].address}, ${product[0].town}, ${product[0].reg}</span>



                            </div>
                            <div class="flex flex-row py-1 mb-3 leading-8 bg-white bg-opacity-50 font-heading font-medium rounded-3xl">
                                <span class="w-32">Payment Name:</span>
                                <span>${product[0].payment}</span>

                            </div>
                            <div class="flex flex-row py-1 mb-3 leading-8 bg-white bg-opacity-50 font-heading font-medium rounded-3xl">
                                <span class="w-32">Payment Method:</span>
                                <span>${product[0].payment_no}</span>

                            </div>
                            <a href="../../Controller/invoiceController.php?id=${product[0].id}" class="inline-block w-full lg:w-auto py-1.5 px-10 text-md leading-6 text-whiteText font-medium tracking-tighter font-heading text-center bg-button hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl">Inovice</a>
                        </div>
                    </div>


                </div>
                `
               )
    
            
        }
        $(".status").val("");
        },
  
  
  
  
  
        error: function (error) {
          console.log(error);
        },
      });
    });
    
  })