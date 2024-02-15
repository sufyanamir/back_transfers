@include('dashboard.layouts.header')

<div class="bg-slate-50">
    <div class="p-5 flex flex-col">
        <span class="text-2xl font-semibold font-montserrat">Dashboard</span>
        <span>Dashboard - Edit rofile</span>

    </div>

    <div class="p-4  rounded-lg">
        <div class="grid xl:grid-cols-4 gap-4 mb-4">
            <div class="flex items-center gap-5 justify-center  py-10 rounded-xl bg-white shadow-dark  dark:bg-gray-800">
                <div class="bg-slate-100 rounded-xl w-14 h-14 flex justify-center items-center">
                    <img src={{ asset('assets/icons/mybooking.svg') }} alt="" class="w-8">
                </div>
                <div class="flex flex-col justify-center items-center w-[132px] ">
                    <span class="text-lg font-montserrat">My Booking</span>
                    <span class="font-bold text-4xl">93</span>
                </div>
            </div>
            <div class="flex items-center gap-5 justify-center  py-10 rounded-xl bg-white shadow-dark dark:bg-gray-800">
                <div class="bg-slate-100 rounded-xl w-14 h-14 flex justify-center items-center">
                    <img src={{ asset('assets/icons/invoice.svg') }} alt="" class="w-8">
                </div>
                <div class="flex flex-col justify-center items-center  w-[132px]">
                    <span class="text-lg font-montserrat">Invoice</span>
                    <span class="font-bold text-4xl">93</span>
                </div>
            </div>
            <div class="flex items-center gap-5 justify-center  py-10 rounded-xl bg-white shadow-dark dark:bg-gray-800">
                <div class="bg-slate-100 rounded-xl w-14 h-14 flex justify-center items-center">
                    <img src={{ asset('assets/icons/pendingPayment.svg') }} alt="" class="w-8">
                </div>
                <div class="flex flex-col justify-center items-center  ">
                    <span class="text-lg font-montserrat">Pending Payment</span>
                    <span class="font-bold text-4xl">93</span>
                </div>
            </div>
            {{--  --}}
            <div
                class="flex items-center gap-5 justify-center  py-10 rounded-xl bg-white shadow-dark   dark:bg-gray-800">
                <div class="bg-slate-100 rounded-xl w-14 h-14 flex justify-center items-center">
                    <img src={{ asset('assets/icons/location.svg') }} alt="" class="w-8">
                </div>
                <div class="flex flex-col justify-center items-center ">
                    <span class="text-lg font-montserrat">Saved Loacation</span>
                    <span class="font-bold text-4xl">93</span>
                </div>
            </div>
        </div>
        {{-- data Table --}}
        <div class="mt-8 ">

            <div class="shadow-dark mt-3  rounded-xl pt-8  bg-white min-h-[500px]">
                <div>
                    <div class="flex justify-between px-[20px] mb-3">
                        <h3 class="text-[20px] text-black">Current Booking</h3>
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
                                <th>Action</th>
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


                                <td>
                                    <div class="flex gap-5">

                                        <a class="cursor-pointer" href="#"><img width="38px"
                                                src="{{ asset('assets/icons/delete.svg') }}" alt="delete"></a>
                                        <a class="cursor-pointer" href="#"><img width="38px"
                                                src="{{ asset('assets/icons/update.svg') }}" alt="update"></a>
                                    </div>
                                </td>
                            </tr>

                            <tr class="pt-4">
                                <td>#953</td>
                                <td>Thu, Oct 06, 2022 - 6 PM : 15</td>
                                <td>London City Airport (LCY) - New York City Airport</td>
                                <td>$2,865.03</td>
                                <td>
                                    <button class="bg-[#F7F3FF] text-[#8442FF] py-2 px-4">Pending</button>
                                </td>


                                <td>
                                    <div class="flex gap-5">

                                        <a class="cursor-pointer" href="#"><img width="38px"
                                                src="{{ asset('assets/icons/delete.svg') }}" alt="delete"></a>
                                        <a class="cursor-pointer" href="#"><img width="38px"
                                                src="{{ asset('assets/icons/update.svg') }}" alt="update"></a>
                                    </div>
                                </td>
                            </tr>

                            <tr class="pt-4">
                                <td>#953</td>
                                <td>Thu, Oct 06, 2022 - 6 PM : 15</td>
                                <td>London City Airport (LCY) - New York City Airport</td>
                                <td>$2,865.03</td>
                                <td>
                                    <button class="bg-[#F7F3FF] text-[#8442FF] py-2 px-4">Pending</button>
                                </td>


                                <td>
                                    <div class="flex gap-5">

                                        <a class="cursor-pointer" href="#"><img width="38px"
                                                src="{{ asset('assets/icons/delete.svg') }}" alt="delete"></a>
                                        <a class="cursor-pointer" href="#"><img width="38px"
                                                src="{{ asset('assets/icons/update.svg') }}" alt="update"></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <!--/Card-->


        </div>
        <!--/container-->


        {{-- data Table --}}




    </div>



</div>

@include('dashboard.layouts.footer')
