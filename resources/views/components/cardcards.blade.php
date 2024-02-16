<div class=" booking_card max-w-full xl:w-[900px]  p-4 bg-white rounded-xl hover:bg-lightGreen cursor-pointer  shadow-sm border border-slate-100 font-montserrat">
   <div class="grid  grid-cols-1 lg:grid-cols-[450px,auto]">
    {{-- 1st================================== --}}
         <div class="">
            <div class="">
                <img src={{asset('assets/icons/carCards.svg')}} alt="" class="w-full">
               </div>
            <div class="flex gap-4  mt-2">
                <div class="flex items-center gap-2">
                    <div><img src={{asset('assets/icons/meet.svg')}} alt=""></div>
                    <div>Meet & Greet </div>

                </div>
                <div class="flex items-center ap-2">
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
                    <button class="  btn bg-black text-white px-3 py-4 rounded-xl w-full flex justify-center gap-2">SELECT
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_745_502)">
                            <path
                                d="M15.3033 13.7794C15.0735 13.7794 14.865 13.6863 14.7141 13.5355C14.5633 13.3846 14.4701 13.1761 14.4701 12.9463L14.4701 6.70843L5.28603 15.8925C4.96017 16.2184 4.43338 16.2184 4.10752 15.8925C3.78166 15.5666 3.78166 15.0399 4.10752 14.714L13.2916 5.52992L7.05371 5.52989C6.59291 5.52989 6.22054 5.15751 6.22054 4.69671C6.22054 4.23592 6.593 3.86345 7.0538 3.86345L15.3034 3.86345C15.7642 3.86345 16.1365 4.2358 16.1365 4.6966L16.1365 12.9462C16.1365 13.407 15.7641 13.7794 15.3033 13.7794Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_745_502">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    </button>

                </div>
            </div>
         </div>



   </div>



</div>
