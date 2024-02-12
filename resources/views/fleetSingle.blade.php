@include('layouts.header')

<section class=" w-full py-10 bg-black">
    <div>
       <h1 class="text-white max-w-[1030px] mx-auto  capitalize text-4xl font-montserrat font-semibold ">Business Class</h1>
       <div>
        <ul class="text-white flex gap-2 max-w-[1030px] mx-auto">
            <li><a href="/">Home</a></li>/
            <li><a href="/fleets">Our Fleet</a></li>
        </ul>
       </div>
    </div>

</section>
<div>
    <img src={{asset('assets/icons/redcar.jpg')}} alt="" class="w-full">
</div>

{{--  --}}
<section class="max-w-[1124px] mx-auto px-5 mt-20">
    <div>
        <h1 class="text-4xl font-bold capitalize">Mercedes - Benz E-Class</h1>
    </div>

    <div class="flex flex-col  gap-10 pt-10">
        <p class="text-justify">We offer luxury chauffeur driven airport transfers and pickups to London. Exceptional Safe, Meet and Greet. One hour of complimentary wait time and flight tracking. Professional Drivers & Vehicles. Fixed prices on airport transfers. VIP service, get your quote today!

    </p>
    <p class="text-justify">
        Et, morbi at sagittis vehicula rutrum. Lacus tortor, quam arcu mi et, at lectus leo nunc. Mattis cras auctor vel pharetra tempor. Rhoncus pellentesque habitant ac tempor. At aliquam euismod est in praesent ornare etiam id. Faucibus libero sit vehicula sed condimentum. Vitae in nam porttitor rutrum sed aliquam donec sed. Sapien facilisi lectus.
    </p>
    </div>



    <div>
        <div class="p-2 mt-10">

            <div class="flex flex-col gap-5">
               <div class="flex gap-5 items-center">
                   <div class="bg-pink flex items-center justify-center w-10 h-10 rounded-full">
                       <span><img src={{asset('assets/icons/good.svg')}} alt=""></span>
                   </div>
                   <div>100% Luxurious Fleet</div>
               </div>
               {{--  --}}
               <div class="flex gap-5 items-center">
                   <div class="bg-pink flex items-center justify-center w-10 h-10 rounded-full">
                       <span><img src={{asset('assets/icons/good.svg')}} alt=""></span>
                   </div>
                   <div>All Our Fleet Are Fully Valeted & Serviced</div>
               </div>
               {{--  --}}
               <div class="flex gap-5 items-center">
                   <div class="bg-pink flex items-center justify-center w-10 h-10 rounded-full">
                       <span><img src={{asset('assets/icons/good.svg')}} alt=""></span>
                   </div>
                   <div>A Safe & Secure Journey</div>
               </div>
               {{--  --}}
               <div class="flex gap-5 items-center">
                   <div class="bg-pink flex items-center justify-center w-10 h-10 rounded-full">
                       <span><img src={{asset('assets/icons/good.svg')}} alt=""></span>
                   </div>
                   <div class="w-[300px]">Comfortable And Enjoyable</div>
               </div>
               {{--  --}}
               <div class="flex gap-5 items-center">
                <div class="bg-pink flex items-center justify-center w-10 h-10 rounded-full">
                    <span><img src={{asset('assets/icons/good.svg')}} alt=""></span>
                </div>
                <div class="w-[300px]">Clean, Polite & Knowledgeable</div>
            </div>
             {{--  --}}
             <div>
                <button class="bg-black text-white py-2 px-10 rounded-xl">Book Now</button>
             </div>


            </div>



       </div>
    </div>



</section>

<section class="max-w-[1130px] px-20 mx-auto my-10">




        <div class=" cards   ">
            <div class="swiper p-10 cards">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper cards ">
                  <!-- Slides -->
                  <div class="swiper-slide">
                    <img src={{asset('assets/icons/fleetslide.png')}} alt="" class="w-full">

                </div>
                <div class="swiper-slide">
                    <img src={{asset('assets/icons/fleetslide.png')}} alt="" class="w-full">

                </div><div class="swiper-slide">
                    <img src={{asset('assets/icons/fleetslide.png')}} alt="" class="">

                </div><div class="swiper-slide">
                    <img src={{asset('assets/icons/fleetslide.png')}} alt="" class="">

                </div><div class="swiper-slide">
                    <img src={{asset('assets/icons/fleetslide.png')}} alt="" class="">

                </div><div class="swiper-slide">
                    <img src={{asset('assets/icons/fleetslide.png')}} alt="" class="" >

                </div><div class="swiper-slide">
                    <img src={{asset('assets/icons/fleetslide.png')}} alt="" class="">

                </div><div class="swiper-slide">
                    <img src={{asset('assets/icons/fleetslide.png')}} alt="" class="">

                </div>
                  ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev absolute "></div>
                <div class="swiper-button-next absolute"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
              </div>
        </div>





</section>


{{--  --}}
<div class="font-montserrat text-3xl font-medium text-center mt-44">
    <h1>Features Of Our Mercedes-Benz E-Class Vehicles</h1>
</div>
<section class="max-w-[1230px] mx-auto flex flex-wrap gap-10 py-10 justify-center  mt-10">
    <x-trip-card :img="'assets/icons/dol.svg'" :title="'All-inclusive pricing'" :desc="'Both you and your shipments will travel with professional drivers. Always with the highest quality standards.'"></x-trip-card>
    <x-trip-card :img="'assets/icons/plane2.svg'" :title="'Seamless airport travel'" :desc="'Both you and your shipments will travel with professional drivers. Always with the highest quality standards.'"></x-trip-card>
    <x-trip-card :img="'assets/icons/timer.svg'" :title="'Travel on your terms'" :desc="'Both you and your shipments will travel with professional drivers. Always with the highest quality standards.'"></x-trip-card>




</section>
{{--  --}}
<section class="lg:w-[1230px] w-full lg:mx-auto flex justify-center flex-wrap gap-10  ">
    <x-trip-card :img="'assets/icons/dol.svg'" :title="'All-inclusive pricing'" :desc="'Both you and your shipments will travel with professional drivers. Always with the highest quality standards.'"></x-trip-card>
    <x-trip-card :img="'assets/icons/plane2.svg'" :title="'Seamless airport travel'" :desc="'Both you and your shipments will travel with professional drivers. Always with the highest quality standards.'"></x-trip-card>
    <x-trip-card :img="'assets/icons/timer.svg'" :title="'Travel on your terms'" :desc="'Both you and your shipments will travel with professional drivers. Always with the highest quality standards.'"></x-trip-card>




</section>
<div class="font-montserrat text-3xl font-medium text-center mt-10">
    <h1>Book Your Business Class</h1>
</div>
<section class="max-w-[1230px] mx-auto py-20 font-montserrat">
    <div class="flex flex-wrap gap-5 px-10">


        <div class=" flex flex-col gap-3">
            <div>
                <span class="text-xl font-bold">Business Class</span>
            </div>
            <div>
                <p>Mercedes-Benz E-Class, BMW 5 Series, Cadillac XTS or similar</p>
            </div>

            {{--  --}}
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
            {{--  --}}
            <div>
                <img src='https://images.unsplash.com/photo-1617650728468-8581e439c864?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FycyUyMHdhbGxwYXBlcnN8ZW58MHwwfDB8fHww' alt="" class="w-full">
            </div>
        </div>
        {{-- =========== --}}
        <div class="md:mt-32">
            <div class=" bg-lightGreen rounded-xl flex flex-col gap-4 max-w[400px] p-5">
                <div class="flex justify-between ">
                    <div><h1>Hourly rate (minimum 3 hours)</h1></div>
                    <div>$29</div>
                </div>
                <hr>
                <div class="flex justify-between ">
                    <div><h1>Hourly rate (minimum 3 hours)</h1></div>
                    <div>$29</div>
                </div>
                <hr>
                <div class="flex justify-between ">
                    <div><h1>Hourly rate (minimum 3 hours)</h1></div>
                    <div>$29</div>
                </div>
                {{-- button --}}
                <div>
                    <button class="bg-black text-white px-3 py-4 rounded-xl w-full">Get a Price & Book</button>

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
            {{--  --}}
            <div class="flex gap-4 mt-5">
                <div class="flex items-center gap-2">
                    <div><img src={{asset('assets/icons/meet.svg')}} alt=""></div>
                    <div>Meet & Greet included</div>

                </div>
                <div class="flex items-center gap-2">
                    <div><img src={{asset('assets/icons/cancel.svg')}} alt=""></div>
                    <div>Meet & Greet included</div>

                </div>
            </div>
        </div>
    </div>




</section>

{{--  --}}
 <div class="max-w-[1030px] mx-auto py-10">
    <h1 class="text-3xl font-montserrat font-semibold text-center">Explore Our Fleet</h1>
 </div>
<section class="max-w-[1130px] mx-auto flex gap-20 flex-wrap justify-center py-10">


    <x-cards></x-cards>
    <x-cards></x-cards>
    <x-cards></x-cards>
</section>
@include('layouts.footer')
