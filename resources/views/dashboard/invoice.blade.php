@include('dashboard.layouts.header')
<section class="bg-slate-50 ">
    <div class="p-5 px-10 flex flex-col">
        <span class="text-2xl font-semibold font-montserrat">My Invoice</span>
        <span>Dashboard - Invoice</span>

    </div>
    <div class="mt-8 mx-10 ">

        <div class="shadow-dark mt-3  rounded-xl pt-8  bg-white min-h-[500px]">
            <div>
                <div class="flex justify-between px-[20px] mb-3">
                    <h3 class="text-[20px] text-black">My Invoice</h3>
                    <button data-modal-target="addteachermodal" data-modal-toggle="addteachermodal"
                        class="bg-secondary text-white h-12 px-5 rounded-[6px]  shadow-sm font-semibold ">sdlkf)</button>
                </div>
                <table id="datatable" class="overflow-scroll">
                    <thead class="py-6 text-black">
                        <tr>
                            <th>Order ID</th>
                            <th>Date - Time</th>
                            <th>From - To</th>
                            <th>Total</th>
                            <th>Payment Status</th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr class="pt-4">
                            <td>#953</td>
                            <td>Thu, Oct 06, 2022 - 6 PM : 15</td>
                            <td>London City Airport (LCY) - New York City Airport</td>
                            <td>$2,865.03</td>
                            <td>
                                <button class="bg-[#F7F3FF] text-[#8442FF] py-2 px-4">Pending</button>
                            </td>



                        </tr>




                    </tbody>
                </table>

            </div>
        </div>
        <!--/Card-->


    </div>
    {{--  --}}

    <div class="shadow-dark my-8 p-10 mx-10  rounded-xl   bg-white px-10">
        <div class="w-[80%]  lg:mx-auto ">
            <div class="flex justify-between ">
                <div>
                    <img src="{{ asset('assets/images/Logo 2.svg') }}" alt="">
                </div>
                <div class="flex gap-10"0>
                    <h2 class="text-2xl  ">Invoice #</h2>
                    <p class="text-lg text-[#181A1F]">051521215</p>
                </div>
            </div>
            <div class="flex justify-between mt-10 ">
                <div>
                    <p class="text-sm text-[#626262]">Invoice date:</p>
                    <h2 class="text-lg">22 April 2022</h2>
                </div>
                <div class="text-right">
                    <p class="text-sm text-[#626262]">Due date:</p>
                    <h2 class="text-lg">22 April 2022</h2>
                </div>
            </div>
            <div class="flex justify-between mt-10 ">
                <div>

                    <h2 class="text-lg">Supplier</h2>
                </div>
                <div class="text-right">
                    <h2 class="text-lg">Customer</h2>
                </div>
            </div>
            <div class="flex justify-between mt-10 ">
                <div>

                    <h2 class="text-lg">Realton LLC</h2>
                    <p class="text-sm text-[#626262]">2301 Ravenswood Rd Madison,
                        WI 53711</p>

                </div>
                <div class="text-right">
                    <h2 class="text-lg">John Doe</h2>
                    <p class="text-sm text-[#626262]">2301 Ravenswood Rd Madison,
                        WI 53711</p>
                </div>
            </div>
            <div>
                <table class="w-full mt-8">
                    <thead>
                        <tr class="bg-[#F0FBF7]  rounded-md">
                            <th class="py-4">Description</th>
                            <th class="py-4">Price</th>
                            <th class="py-4">VAT (20%)</th>
                            <th class="py-4">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td class="border-b border-[#E5E5E5] py-6">Standard Plan </td>
                            <td class="border-b border-[#E5E5E5] py-6">$443.00 </td>
                            <td class="border-b border-[#E5E5E5] py-6">$921.80 </td>
                            <td class="border-b border-[#E5E5E5] py-6">$9243</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="py-4 text-left">Total Due </th>
                            <th class="py-4  text-right" colspan="4">$9,750</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <hr class="border-[#E5E5E5] mt-10">
        <div>
            <ul class="flex justify-center mt-6 gap-10">
                <li><a href="mailto:invoice@luxride.com ">invoice.com </a></li>
                <li><a href="tel:"> (123) 123-456 </a></li>
            </ul>
        </div>
    </div>



</section>

@include('dashboard.layouts.footer')
