<div class=" booking_card max-w-full xl:w-[900px]  p-4 bg-white rounded-xl hover:bg-lightGreen cursor-pointer  shadow-sm border border-slate-100 font-montserrat">
   <div class="grid  grid-cols-1 lg:grid-cols-[450px,auto]">
    {{-- 1st================================== --}}
         <div class="">
            <div class="">
                <img src={{asset('assets/icons/carCards.svg')}} alt="" class="w-full">
               </div>
            <div class="flex gap-4">
                <div class="flex items-center gap-2">
                    <div><img src={{asset('assets/icons/meet.svg')}} alt=""></div>
                    <div>Meet & Greet included</div>

                </div>
                <div class="flex items-center gap-2">
                    <div><img src={{asset('assets/icons/cancel.svg')}} alt=""></div>
                    <div>Meet & Greet included</div>

                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex items-center gap-2">
                    <div><img src={{asset('assets/icons/meet.svg')}} alt=""></div>
                    <div>Meet & Greet included</div>

                </div>
                <div class="flex items-center gap-2">
                    <div><img src={{asset('assets/icons/cancel.svg')}} alt=""></div>
                    <div>Meet & Greet included</div>

                </div>
            </div>
            <div class="pt-3">
                <a href=" " class="font-semibold">Show more information</a>
            </div>


         </div>
         <hr class="border-1 border-gray-700 lg:hidden my-5">
         {{-- 2nd================================ --}}
         <div class="pl-5">
            <div class="flex flex-col gap-5 font-montserrat">
                <div>
                    <h1 class="font-medium text-xl">Business Class</h1>
                    <p>Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p>
                </div>
                {{-- 2nd --}}
                <div class="flex gap-10">
                    <div class="flex items-center gap-4 ">
                        <div><img src="{{asset('assets/icons/passenger.svg')}}" alt=""></div>
                        <div><span>Passenger</span></div>
                    </div>
                    <div class="flex items-center gap-4 ">
                        <div><img src="{{asset('assets/icons/lagage.svg')}}" alt=""></div>
                        <div><span>Luggage</span></div>
                    </div>

                </div>
                {{-- 3rd --}}
                <div>
                   <span class="text-3xl font-bold">$125.25</span>
                    <p>All prices include VAT, fees & tip.</p>
                </div>
                {{-- 4th --}}
                <div>
                    <button class="  btn bg-black text-white px-3 py-4 rounded-xl w-full flex justify-center gap-2">SELECT </button>

                </div>
            </div>
         </div>



   </div>



</div>
