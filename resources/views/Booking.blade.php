@include('layouts.header')
<section class="Hero   ">
    <div class="relative ">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/header_image.png')}}"
                        alt="" class="w-full object-cover h-[470px]">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/header_image.png')}}"
            alt="" class="w-full object-cover h-[470px]">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/header_image.png')}}"
            alt="" class="w-full object-cover h-[470px]">
                </div>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
        <div
            class="z-10 absolute top-[250px] w-80  mx-4 lg:w-[400px]  lg:top-[80px]  lg:left-[15%] md:top-[200px] md:w-full  text-white   ">
            <div class="     font-montserrat capitalize">
                <p class="text-lg font-light leading-10">Where would you like Go</p>
                <p class="text-2xl">
                    All countries and airports,stations and ports

                </p>



            </div>
        </div>
        {{--  --}}
        <div
            class=" z-10 header_bottom lg:left-[15%]  w-[1024px]   hidden lg:block rounded-full bg-white absolute bottom-10  py-3 px-2">
            <div class="flex items-center  justify-between">
                <div class="flex items-center gap-3">
                    <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full">
                        <img src="{{ asset('assets/icons/date.svg') }}" alt="" class="w-4">
                    </div>
                    <div>
                        <span>Date</span>
                        <p class="font-semibold font-palanquin">Thu, Oct 06, 2022</p>
                    </div>
                </div>
                {{-- date --}}
                <div class="flex items-center gap-3">
                    <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full">
                        <img src="{{ asset('assets/icons/clock.svg') }}" alt="" class="w-4">
                    </div>
                    <div>
                        <span class="capitalize">time</span>
                        <p class="font-semibold font-palanquin">Thu, Oct 06, 2022</p>
                    </div>
                </div>
                {{-- from --}}
                <div class="flex items-center gap-3">
                    <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full">
                        <img src="{{ asset('assets/icons/from.svg') }}" alt="" class="w-4">
                    </div>
                    <div>
                        <span class="capitalize">from</span>
                        <p class="font-semibold font-palanquin">Thu, Oct 06, 2022</p>
                    </div>
                </div>
                {{-- to --}}
                <div class="flex items-center gap-3">
                    <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full">
                        <img src="{{ asset('assets/icons/to.svg') }}" alt="" class="w-4">
                    </div>
                    <div>
                        <span class="capitalize">to</span>
                        <p class="font-semibold font-palanquin">Thu, Oct 06, 2022</p>
                    </div>
                </div>
                {{-- search bar --}}
                <div class="relative">
                    <img src="{{ asset('assets/icons/search.svg') }}"alt=""
                        class="absolute top-3 left-2  z-10 bg-black  ">
                    <input type="text" placeholder="Search"
                        class="relative rounded-full outline-none px-10 w-32 bg-black text-white py-3">
                </div>



            </div>



        </div>

    </div>




</section>



<section class="select_country max-w-[1077px] m-auto py-20">
    <div>
        <div><h1 class="font-semibold text-5xl text-center">Select Country</h1></div>

        <div class="uppercase flex flex-wrap gap-10 justify-center p-5">
            <span><a href="">A</a></span>
            <span><a href="">b</a></span>
            <span><a href="">c</a></span>
            <span><a href="">d</a></span>
            <span><a href="">e</a></span>
            <span><a href="">f</a></span>
            <span><a href="">g</a></span>
            <span><a href="">h</a></span>
            <span><a href="">j</a></span>
            <span><a href="">k</a></span>
            <span><a href="">l</a></span>
            <span><a href="">m</a></span>
            <span><a href="">n</a></span>
            <span><a href="">o</a></span>
            <span><a href="">p</a></span>
            <span><a href="">q</a></span>
            <span><a href="">r</a></span>
            <span><a href="">s</a></span>
            <span><a href="">t</a></span>
            <span><a href="">u</a></span>
            <span><a href="">v</a></span>
            <span><a href="">w</a></span>
            <span><a href="">x</a></span>
            <span><a href="">y</a></span>
            <span><a href="">z</a></span>

        </div>

    </div>






</section>

<section class="max-w-full m-auto p-10  bg-slate-200 font-montserrat">
    <div class="flex  flex-wrap items-center justify-between max-w-[1100px] m-auto">
        <h1 class=" text-2xl lg:text-4xl font-semibold capitalize">The perfect vehicle for you</h1>
        <span>More Services</span>
    </div>
    {{-- images --}}
    <div class="flex flex-wrap gap-10 pt-10">
        <div><img src={{asset('assets/icons/express.png')}} alt="" class="w-[300px] h-[300px] object-contain"></div>
        <div><img src={{asset('assets/icons/coach.png')}} alt="" class="w-[300px] h-[300px] object-contain"></div>
        <div><img src={{asset('assets/icons/minivan.png')}} alt="" class="w-[300px] h-[300px] object-contain"></div>
        <div><img src={{asset('assets/icons/texi.png')}} alt="" class="w-[300px] h-[300px] object-contain"></div>
    </div>


</section>
{{-- why booking transfer............ --}}
<section class="max-w-full m-auto py-10">
    <div class="Numbers_image text-white py-10 ">
        <div>
            <h1 class="text-center capitalize text-2xl lg:text-3xl font-montserrat font-semibold">Why book your transfers with Backtransfers.com?</h1>
        </div>
        <div class="flex flex-wrap py-10 px-2">
            <x-servicesCards></x-servicesCards>
            <x-servicesCards></x-servicesCards>
            <x-servicesCards></x-servicesCards>
        </div>


    </div>



</section>

{{-- reviews --}}
<section class="max-w-full m-auto pb-20 ">

    <div>
        <h1 class="text-gray-500 py-10 text-center   lg:text-3xl font-montserrat">You can also see our excellent reviews in</h1>
    </div>
    <div class="max-w-[1100px] m-auto pt-10 flex flex-col gap-10 px-32 ">

        <div class="flex  flex-wrap gap-10 justify-between ">
                  <div class=" flex flex-col gap-3">
                    <img src={{asset('assets/icons/reviewsLogo.svg')}} alt="" class="w-[200px]">
                    <div class="">
                        <img src={{asset('assets/icons/star.svg')}} alt="">
                         <p class="text-[12px]">Based on 9,500+ reviews</p>
                    </div>


                  </div>
                  <div class="flex flex-col gap-3">
                    <img src={{asset('assets/icons/googleLogo.svg')}} alt="" class="w-[200px]">
                    <div class="">
                        <img src={{asset('assets/icons/star.svg')}} alt="">
                         <p class="text-[12px]">Based on 9,500+ reviews</p>
                    </div>


                  </div>
        </div>
        {{-- next div --}}
        <div class="flex flex-wrap  justify-between gap-10">
            <div class="flex flex-col gap-3">
              <img src={{asset('assets/icons/revieCenter.svg')}} alt="" class="w-[200px]">
              <div class="">
                  <img src={{asset('assets/icons/star.svg')}} alt="">
                   <p class="text-[12px]">Based on 9,500+ reviews</p>
              </div>


            </div>
            <div class=" flex flex-col gap-3">
              <img src={{asset('assets/icons/tripAdvice.svg')}} alt="" class="w-[200px]">
              <div class="">
                  <img src={{asset('assets/icons/star.svg')}} alt="">
                   <p class="text-[12px]">Based on 9,500+ reviews</p>
              </div>


            </div>
  </div>

    </div>



</section>


{{-- customer satisfaction --}}
<section class="max-w-[1100px] m-auto px-2 py-10">
    <div class=" grid md:grid-cols-2 lg:grid-cols-2 gap-10">

        <x-serviceSatisfaction></x-serviceSatisfaction>
        <x-serviceSatisfaction></x-serviceSatisfaction>
        <x-serviceSatisfaction></x-serviceSatisfaction>
        <x-serviceSatisfaction></x-serviceSatisfaction>
    </div>



</section>
{{-- populer air ports worls wide --}}

<section class="max-w-full m-auto p-5  py-10">

    <div>
        <h1 class="text-center text-3xl font-montserrat capitalize font-bold">Popular airports worldwide</h1>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 pt-10 gap-10 font-medium text-green-500">
        <div>
            <ul class="flex flex-col items-center gap-5 font-montserrat  text-lg capitalize">
                <li><a href="">Alicante airport
                </a></li>
                <li><a href="">Amsterdam airport
                </a></li>
                <li><a href="">Antalya airport

                </a></li>
                <li><a href="">Barcelona airport

                </a></li>
                <li><a href="">Budapest airport


                </a></li>
                <li><a href="">Cancún airport



                </a></li>
            </ul>
        </div>
        {{-- 2nd --}}
        <div>
            <ul class="flex flex-col  items-center gap-5 font-montserrat text-lg capitalize">
                <li><a href="">Alicante airport
                </a></li>
                <li><a href="">Amsterdam airport
                </a></li>
                <li><a href="">Antalya airport

                </a></li>
                <li><a href="">Barcelona airport

                </a></li>
                <li><a href="">Budapest airport


                </a></li>
                <li><a href="">Cancún airport



                </a></li>
            </ul>
        </div>
        {{-- 3rd --}}
        <div>
            <ul class="flex flex-col  items-center gap-5 font-montserrat text-lg capitalize">
                <li><a href="">Alicante airport
                </a></li>
                <li><a href="">Amsterdam airport
                </a></li>
                <li><a href="">Antalya airport

                </a></li>
                <li><a href="">Barcelona airport

                </a></li>
                <li><a href="">Budapest airport


                </a></li>
                <li><a href="">Cancún airport



                </a></li>
            </ul>
        </div>
        {{-- 4th --}}
        <div>
            <ul class="flex flex-col  items-center gap-5 font-montserrat text-lg capitalize">
                <li><a href="">Alicante airport
                </a></li>
                <li><a href="">Amsterdam airport
                </a></li>
                <li><a href="">Antalya airport

                </a></li>
                <li><a href="">Barcelona airport

                </a></li>
                <li><a href="">Budapest airport


                </a></li>
                <li><a href="">Cancún airport



                </a></li>
            </ul>
        </div>




    </div>


</section>


@include('layouts.footer')
