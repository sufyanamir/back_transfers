@include('admindashboard.layouts.header')

<div class="bg-slate-50">
    <div class="p-5 flex flex-col">
        <span class="text-2xl font-semibold font-montserrat">Dashboard</span>

    </div>

    <div class="p-4  rounded-lg min-h-[80vh]">
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




    </div>



</div>

@include('admindashboard.layouts.footer')
