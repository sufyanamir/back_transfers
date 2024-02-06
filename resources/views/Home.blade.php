@include('layouts.header')
<section class="   relative  ">
    <img class=" z-10 w-full object-cover " src={{asset('assets/images/header-image.png')}} alt="">

    <div class=" h-full w-full object-contain z-20 ">
        {{-- <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/header_image.png') }}" alt=""
                        class="w-full object-cover h-[470px]">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/header_image.png') }}" alt=""
                        class="w-full object-cover h-[470px]">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/header_image.png') }}" alt=""
                        class="w-full object-cover h-[470px]">
                </div>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div> --}}
        <div
            class="z-10 absolute top-[30px] header-content w-full lg:max-w-[1024px]   lg:top-[80px]   md:top-[200px]  text-white   ">
            <div class=" font-montserrat capitalize w-[300px] px-2  m- lg:w-[400px] md:w-full ">
                <p class="text-lg font-light leading-10">Where would you like Go</p>
                <p class="text-2xl">
                    All countries and airports,stations and ports

                </p>



            </div>
        </div>
        {{--  --}}
        <div
            class="header-content z-20 header_bottom   w-[1024px]   hidden lg:block rounded-full bg-white absolute bottom-10  py-3 px-2">
            <div class="flex items-center  justify-between">
                <div class="flex items-center gap-3">
                    <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full">
                        <img src="{{ asset('assets/icons/date.svg') }}" alt="" class="w-4">
                    </div>
                    <div class="">
                        <span class="font-bold">Date</span>
                        <div>
                            {{-- =============================== --}}
                            <input type="date" class="border-none bg-slate-50 rounded-full ">

                            {{-- ======================================================= --}}
                        </div>
                    </div>
                </div>
                {{-- date --}}
                <div class="flex items-center gap-3">
                    <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full">
                        <img src="{{ asset('assets/icons/clock.svg') }}" alt="" class="w-4">
                    </div>
                    <div>
                        <span class="capitalize font-bold">time</span>
                        <div>
                            <input type="time" class="border-none bg-slate-100 rounded-full">
                        </div>
                    </div>
                </div>
                {{-- from --}}
                <div class="flex items-center gap-3">
                    <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full">
                        <img src="{{ asset('assets/icons/from.svg') }}" alt="" class="w-4">
                    </div>
                    <div>
                        <span class="capitalize font-bold">from</span>
                        <div>


                            <select id="countries"
                                class="bg-gray-100 border-none  text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>

                        </div>
                    </div>
                </div>
                {{-- to --}}
                <div class="flex items-center gap-3">
                    <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full">
                        <img src="{{ asset('assets/icons/to.svg') }}" alt="" class="w-4">
                    </div>
                    <div>
                        <span class="capitalize font-bold">to</span>
                        <div>


                            <select id="countries"
                                class="bg-gray-100 border-none  text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>

                        </div>
                    </div>
                </div>
                {{-- search bar --}}
                <div class="relative">
                    <img src="{{ asset('assets/icons/search.svg') }}"alt=""
                        class="absolute top-4 left-2  z-10 bg-black  ">
                    <input type="text" placeholder="Search"
                        class="relative rounded-full outline-none px-10 w-32 bg-black text-white py-3">
                </div>



            </div>



        </div>

    </div>




</section>
{{-- =========================================================== --}}
{{-- mobile section --}}
<section>

    <div class="w-full mt-2 p-2 flex flex-col gap-5 py-10 lg:hidden block">
        <div class="flex items-center gap-3 bg-slate-200 mx-2 rounded-md p-2">
            <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full">
                <img src="{{ asset('assets/icons/date.svg') }}" alt="" class="w-4">
            </div>
            <div>
                <span class="capitalize">Date</span>
                <p class="font-semibold font-montserrat">Thu, Oct 06, 2022</p>
            </div>
        </div>
        {{-- ========== --}}
        <div class="flex items-center gap-3 bg-slate-200 mx-2 rounded-md p-2">
            <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full">
                <img src="{{ asset('assets/icons/clock.svg') }}" alt="" class="w-4">
            </div>
            <div>
                <span class="capitalize">time</span>
                <p class="font-semibold font-montserrat">6 PM : 15</p>
            </div>
        </div>
        {{-- ============= --}}
        <div class="flex items-center gap-3 bg-slate-200 mx-2 rounded-md p-2">
            <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full">
                <img src="{{ asset('assets/icons/from.svg') }}" alt="" class="w-4">
            </div>
            <div>
                <span class="capitalize">from</span>
                <p class="font-semibold font-montserrat">London City Airport (LCY)</p>
            </div>
        </div>
        {{-- ============= --}}
        <div class="flex items-center gap-3 bg-slate-200 mx-2 rounded-md p-2">
            <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full">
                <img src="{{ asset('assets/icons/to.svg') }}" alt="" class="w-4">
            </div>
            <div>
                <span class="capitalize">To</span>
                <p class="font-semibold font-montserrat">London City Airport (LCY)</p>
            </div>
        </div>

        {{-- serach bar --}}
        <div class="flex items-center gap-3   mx-2 rounded-md ">

            <input type="text" placeholder="search"
                class="w-full bg-black rounded-lg p-5 text-white outline-none">
        </div>





    </div>





</section>
{{-- ============================================================================= --}}

<section class="w-full absolute z-20 py-10 ">

    <div class="max-w-[1030px]  mx-auto grid gap-10 grid-cols-1 lg:grid-cols-[300px,auto]">

        <div class="mx-2">
            <p class="text-lg lg:text-2xl font-medium font-montserrat">The partners who sell our products</p>
        </div>
        <div class="flex  gap-3 lg:gap-10 items-center">
            <div>
                <img src="{{ asset('assets/icons/company1.svg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/icons/company2.svg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/icons/company3.svg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('assets/icons/company4.svg') }}" alt="">
            </div>
        </div>


    </div>



</section>
<hr>
{{-- =================================================================== --}}
<section class="py-10 max-w-[1030px] mx-auto my-32">


    <div class=" flex justify-between mx-2 font-montserrat">

        <h1 class="font-semibold text-3xl">Our Fleet</h1>
        <a href="/fleets">
            <button class="font-medium">More Fleet</button>
        </a>
    </div>
    {{-- cards --}}
    <div class=" cards h-[400px]">
        <div class="swiper p-10 cards">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper cards flex gap-5">
              <!-- Slides -->
              <div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
            </div><div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
            </div><div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
            </div><div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
            </div><div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
            </div><div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
            </div><div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
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
{{--  how it works --}}

<section class="w-full hidden lg:block">
    <div class="bg_image text-white w-full object-cover  mb-10 py-10">
        <div class="w-[1050px]  mx-auto   grid-cols-1 grid md:grid-cols-[300px,auto]">
            <div class="flex flex-col gap-4 justify-center  px-5 font-montserrat ">
                <div>
                    <h1 class="text-2xl font-semibold">How It Works</h1>
                </div>
                {{-- 2nd --}}
                <div class="flex flex-col gap-10">
                    <div class="w-[389px] flex flex-col gap-2">
                        <div>
                            <p>Create Your Route</p>
                        </div>
                        <div>
                            <p>Enter your pickup & dropoff locations or the number of hours you wish to book a car and
                                driver for</p>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[389px] flex flex-col gap-2">
                        <div>
                            <p>Choose Vehicle For You</p>
                        </div>
                        <div>
                            <p>On the day of your ride, you will receive two email and SMS updates - one informing you
                                that.</p>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[389px] flex flex-col gap-2">
                        <div>
                            <p>Enjoy The Journey</p>
                        </div>
                        <div>
                            <p>After your ride has taken place, we would appreciate it if you could rate your car and
                                driver.</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="">
                <img src="{{ asset('assets/icons/laptop.png') }}" alt="" class="">

            </div>


        </div>



    </div>






</section>
{{-- mobile responsive How its works --}}
<section class="w-full lg:hidden block ">
    <div class= " bg-image px-5 text-white w-full  object-cover  mb-10 py-10">
        <div class="content_container flex flex-col gap-5">
            <div>
                <h1 class="capitalize font-montserrat  text-3xl">how it works</h1>
            </div>
            <div>
                <img src="{{ asset('assets/icons/laptop.png') }}" alt="">
            </div>
            <div class="font-montserrat flex flex-col gap-2">
                <div>
                    <p>Choose Vehicle For You</p>
                </div>
                <div class="">
                    <p class="text-[12px]">On the day of your ride, you will receive two email and SMS updates - one
                        informing you that.</p>
                </div>
            </div>





        </div>

    </div>





</section>
{{-- trip components --}}
<section>
    <div>
        <h1 class="text-3xl text-center font-montserrat font-semibold">Make Your Trip Your Way With Us</h1>
    </div>
</section>
<section class="lg:w-[1140px] w-full lg:mx-auto grid px-5 gap-4 md:grid-cols-2 lg:grid-cols-3 py-20">
    <x-trip-card :img="'assets/icons/insurance.svg'" :title="'Safety First'" :desc="'Both you and your shipments will travel with professional drivers. Always with the
        highest quality standards.'"></x-trip-card>
    <x-trip-card :img="'assets/icons/dollar.svg'" :title="'Prices With No Surprises'" :desc="'Both you and your shipments will travel with professional drivers. Always with the
        highest quality standards.'"></x-trip-card>
    <x-trip-card :img="'assets/icons/travel.svg'" :title="'Private Travel Solutions'" :desc="'Both you and your shipments will travel with professional drivers. Always with the
        highest quality standards.'"></x-trip-card>




</section>

{{-- Numbers --}}
<section class="w-full py-20 hidden lg:block">
    <div class="Numbers_image w-full h-full">
        <div
            class="w-[1170px] mx-auto grid grid-cols-1 lg:grid-cols-2 py-20 capitalize  px-10 text-white font-montserrat">
            <div class="w-[470px]">
                <p class="text-4xl">
                    Showcase some impressive numbers.
                </p>

            </div>
            <div class="text-white flex gap-20">
                <div class=" text-center">
                    <h1 class="font-bold text-5xl">285</h1>
                    <span class="text-xl">vehicals</span>
                </div>
                <div class=" text-center">
                    <h1 class="font-bold text-5xl">97</h1>
                    <span class="text-xl">awards</span>
                </div>
                <div class=" text-center">
                    <h1 class="font-bold text-5xl">13k</h1>
                    <span class="text-xl">happy Customer</span>
                </div>
            </div>
        </div>

    </div>



</section>

{{-- mobile number screen --}}
<section class="w-full py-20 block lg:hidden">
    <div class="Numbers_image h-full py-10 text-white">
        <div class="px-5 flex flex-col gap-10 w-[330px] capitalize font-montserrat">
            <div>
                <h1 class="text-3xl">
                    Showcase some impressive numbers.
                </h1>
            </div>
            <div class="text-white  flex flex-wrap  gap-20">
                <div class=" text-center">
                    <h1 class="font-bold text-5xl">285</h1>
                    <span class="text-lg">vehicals</span>
                </div>
                <div class=" text-center">
                    <h1 class="font-bold text-5xl">97</h1>
                    <span class="text-xl">awards</span>
                </div>
                <div class=" ">
                    <h1 class="font-bold text-5xl">13k</h1>
                    <span>happy Customer</span>
                </div>
            </div>
        </div>


    </div>


</section>
{{-- cards repeat slider paste later...... --}}
<section class="py-10 max-w-[1130px] mx-auto">


    <div class=" flex justify-between mx-2 font-montserrat">

        <h1 class="font-semibold text-3xl">Our Fleet</h1>
        <a href="/fleets">
            <button class="font-medium">More Fleet</button>
        </a>
    </div>
    {{-- cards --}}
    <div class=" cards h-[400px]">
        <div class="swiper p-10 cards">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper cards">
              <!-- Slides -->
              <div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
            </div>
            <div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
            </div><div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
            </div><div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
            </div><div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
            </div><div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
            </div><div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
            </div><div class="swiper-slide">
                <x-cards></x-cards>
                <div class="swiper-lazy-preloader"></div>
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
{{-- video section --}}
<section class="w-full py-20 flex justify-center flex-wrap items-center px-10  ">
    <div class=" grid grid-cols-1 lg:grid-cols-2 gap-5 font-montserrat capitalize">


        <div class=" w-full grid grid-cols-2  gap-3 flex-1 ">
            <div class="box1  row-span-2">
                <img src={{ asset('assets/images/citywith.png') }} alt="" class="h-full ">
            </div>
            <div class="box2 ">
                <img src={{ asset('assets/images/allcity.png') }} alt="" class="">
            </div>
            <div class="box3">
                <img src={{ asset('assets/images/taxi.png') }} alt="" class="">

            </div>

        </div>

        <div class=" flex flex-col gap-10 justify-center flex-1 max-w-[470px]">
            <h1 class="text-3xl font-bold">From the region, for the region</h1>
            <p>Superide operates in more than 120 cities in 18 countries from Morocco to Pakistan.</p>
            <button class="bg-black rounded-md py-3 text-white">view All cities</button>

        </div>
    </div>



</section>
{{-- ================================= --}}
<section class="w-full bg-black mb-10">
    <div class="py-12 max-w-[1030px] mx-auto text-white  ">


        <div class=" flex flex-wrap justify-between mx-2 font-montserrat">

            <h1 class="font-semibold text-3xl">Latest From News</h1>
            <button class="font-medium">More news</button>
        </div>
        {{-- cards --}}
        <div class="flex  flex-wrap gap-10 justify-center lg:justify-start pt-20">
            <x-news-cards></x-news-cards>
            <x-news-cards></x-news-cards>
            <x-news-cards></x-news-cards>



        </div>



    </div>



</section>

{{-- frequantly ask questions --}}
<section class=" w-full lg:w-[1100px] mx-auto py-20 px-5">
    <div>
        <h1 class="text-center text-6xl mb-10 capitalize">Frequently Asked Questions</h1>
    </div>

    <div id="accordion-flush" data-accordion="collapse"
        data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
        data-inactive-classes="text-gray-500 dark:text-gray-400">
        <h2 id="accordion-flush-heading-1">
            <button type="button"
                class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                aria-controls="accordion-flush-body-1">
                <span>What is Flowbite?</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive
                    components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                        href="/docs/getting-started/introduction/"
                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing
                    websites even faster with components on top of Tailwind CSS.</p>
            </div>
        </div>
        <h2 id="accordion-flush-heading-2">
            <button type="button"
                class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                aria-controls="accordion-flush-body-2">
                <span>Is there a Figma file available?</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using
                    the Figma software so everything you see in the library has a design equivalent in our Figma file.
                </p>
                <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
                        class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the
                    utility classes from Tailwind CSS and components from Flowbite.</p>
            </div>
        </div>
        <h2 id="accordion-flush-heading-3">
            <button type="button"
                class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                aria-controls="accordion-flush-body-3">
                <span>What are the differences between Flowbite and Tailwind UI?</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from
                    Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another
                    difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers
                    sections of pages.</p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite,
                    Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best
                    of two worlds.</p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                    <li><a href="https://flowbite.com/pro/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                    <li><a href="https://tailwindui.com/" rel="nofollow"
                            class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                </ul>
            </div>
        </div>
    </div>





</section>
{{-- =========================== --}}
<section class="w-full   bg-pink flex  flex-wrap px-5">

    <div class="  flex-1 flex flex-col gap-10 font-montserrat py-10   justify-center max-w-[470px] mx-auto">
        <div>
            <h1 class="text-4xl">Download the app</h1>
        </div>
        <p class="text-justify">
            Have a personal driver at your fingertips no matter where you are with oureasy-to-use smartphone app.
        </p>
        <div class="flex gap-4 flex-wrap">
            <a href="">
                <img src={{ asset('assets/icons/apple.svg') }} alt="">
            </a>
            <a href="">
                <img src={{ asset('assets/icons/google.svg') }} alt="">
            </a>
        </div>

    </div>

    <div class="flex-2 hidden lg:block">
        <img src={{ asset('assets/icons/mobile.png') }} alt="">


    </div>
</section>
@include('layouts.footer')
