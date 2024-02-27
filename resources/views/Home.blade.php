@include('layouts.header')
<section class="   relative  md:h-full">
    <img class=" z-10 w-full object-cover lg:h-[80vh]  h-[60vh] md:h-[60vh]"
        src={{ asset('assets/images/header-image.png') }} alt="background">
    <div class="bg-black opacity-40  h-full w-full absolute top-0">

    </div>
    <div class=" h-full w-full object-contain z-20 px-6 ">
        <div class="">
            <div
                class="z-10 absolute header-content w-full lg:max-w-[1100px]     xl:top-[25%] lg:top-[40px]   md:top-[100px] top-10 text-white   ">
                <div class=" capitalize  px-2  md:w-full ">
                    <div>
                        <div class="circle  flex gap-8 items-center">
                            <button class="h-[50px] w-[50px] bg-gray-600 rounded-full flex items-center justify-center">
                                <svg width="18" height="18" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 6C11 6.2765 10.7765 6.5 10.5 6.5H2.70705L5.35355 9.1465C5.54905 9.342 5.54905 9.65805 5.35355 9.85355C5.25605 9.95105 5.12805 10 5.00005 10C4.87205 10 4.74406 9.95105 4.64656 9.85355L1.14656 6.35355C0.951064 6.15805 0.951064 5.842 1.14656 5.6465L4.64656 2.1465C4.84206 1.951 5.15805 1.951 5.35355 2.1465C5.54905 2.342 5.54905 2.65803 5.35355 2.85353L2.70705 5.5H10.5C10.7765 5.5 11 5.7235 11 6Z"
                                        fill="white" />
                                </svg>
                            </button>
                            <button class="h-[50px] w-[50px] bg-gray-600 rounded-full flex items-center justify-center">
                                <svg width="18" height="18" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.8534 5.64645L7.3534 2.14645C7.2559 2.04895 7.12795 2 6.99995 2C6.87195 2 6.74395 2.04895 6.64645 2.14645C6.45095 2.34195 6.45095 2.658 6.64645 2.8535L9.29295 5.5L1.49994 5.5C1.22344 5.5 0.999939 5.7235 0.999939 6C0.999939 6.2765 1.22344 6.5 1.49994 6.5L9.29295 6.5L6.64645 9.14647C6.45095 9.34197 6.45095 9.658 6.64645 9.8535C6.84195 10.049 7.1579 10.049 7.3534 9.8535L10.8534 6.3535C11.0489 6.158 11.0489 5.84195 10.8534 5.64645Z"
                                        fill="white" />
                                </svg>

                            </button>
                            <p class="text-lg font-semibold "><span>1</span> / <span>3</span></p>
                        </div>
                    </div>
                    <p class=" text-lg font-normal leading-10 mt-10">Where would you like Go</p>
                    <p
                        class="lg:text-[52px] md:text-[40px] text-[30px]   leading-[52px] lg:leading-[72px] mt-4 font-semibold">
                        Your Personal <br>Chauffeur Services
                    </p>



                </div>
            </div>

            <div
                class=" z-20 header_bottom  header-content  w-[1150px]   hidden lg:block rounded-full bg-white absolute bottom-10  py-3 px-5">
                <div class="flex items-center   justify-between gap-8">
                    <div class="flex items-center gap-3">
                        <div class="bg-[#f7f7f7] w-[52px] h-[52px] flex items-center justify-center rounded-full ">
                            <label for="date"><img src="{{ asset('assets/icons/date.svg') }}" alt="date"
                                    class=""></label>
                        </div>
                        <div class="">
                            <span class="font-semibold text-[#626262] text-sm">Date</span>
                            <div>
                                {{-- =============================== --}}
                                <input type="date" id="date"
                                    class="border-none  bg-slate-50 rounded-full   p-0 h-[24px] ">

                                {{-- ======================================================= --}}
                            </div>
                        </div>
                    </div>
                    {{-- date --}}
                    <div class="flex items-center gap-3">
                        <div class="bg-[#f7f7f7] w-[52px] h-[52px] flex items-center justify-center rounded-full ">
                            <label for="time"><img src="{{ asset('assets/icons/clock.svg') }}" alt="time"
                                    class=""></label>
                        </div>
                        <div class="">
                            <span class="font-semibold text-[#626262] text-sm">Date</span>
                            <div>
                                {{-- =============================== --}}
                                <input type="time" id="time"
                                    class="border-none  bg-slate-50 rounded-full   p-0 h-[24px] ">

                                {{-- ======================================================= --}}
                            </div>
                        </div>
                    </div>
                    {{-- from --}}
                    <div class="flex items-center gap-3">

                        <div class="bg-[#f7f7f7] w-[52px] h-[52px] flex items-center justify-center rounded-full ">
                            <label for="countries"><img src="{{ asset('assets/icons/from.svg') }}"
                                    alt="countries"></label>
                        </div>
                        <div>
                            <span class="font-semibold text-[#626262] text-sm">From</span>
                            <div>


                                <select id="fromllocation"
                                    class="border-none  bg-slate-50 rounded-full   p-0 h-[24px] ">
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
                        <div class="bg-[#f7f7f7] w-[52px] h-[52px] flex items-center justify-center rounded-full ">
                            <label for=""><img src="{{ asset('assets/icons/to.svg') }}" alt="time"></label>
                        </div>
                        <div>
                            <span class="font-semibold text-[#626262] text-sm">To</span>
                            <div>


                                <select id="" class="border-none  bg-slate-50 rounded-full   p-0 h-[24px] ">
                                    <option selected>Choose a country</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="bg-black text-white rounded-[60px]">
                        <button class="flex items-center  justify-center py-3 px-5 gap-2 ">
                            <img src="{{ asset('assets/icons/search.svg') }}" alt="search" class=" bg-black  ">
                            <p>Search</p>
                        </button>
                    </div>

                </div>



            </div>



        </div>

    </div>




</section>
{{-- =========================================================== --}}
{{-- mobile section --}}
<section>

    <div class="w-full mt-2 p-2 flex flex-col gap-5 py-10 lg:hidden ">
        <div class="flex items-center gap-3 bg-slate-200 mx-2 rounded-md p-2">
            <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full">
                <img src="{{ asset('assets/icons/date.svg') }}" alt="" class="w-4">
            </div>
            <div>
                <span class="capitalize font-bold">Date</span>
                <input type="date" class="border-none bg-transparent rounded-full ">
            </div>
        </div>
        {{-- ========== --}}
        <div class="flex items-center gap-3 bg-slate-200 mx-2 rounded-md p-2">
            <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full">
                <img src="{{ asset('assets/icons/clock.svg') }}" alt="" class="w-4">
            </div>
            <div>
                <span class="capitalize font-bold">time</span>
                <input type="time" class="border-none bg-transparent rounded-full">
            </div>
        </div>
        {{-- ============= --}}
        <div class="flex items-center gap-3 bg-slate-200 mx-2 rounded-md p-2">
            <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full mt-5">
                <img src="{{ asset('assets/icons/from.svg') }}" alt="" class="w-4 ">
            </div>
            <div class="">
                <span class="capitalize font-bold">from</span>
                <select id="countries"
                    class="bg-transparent border-none  text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a country</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
            </div>
        </div>
        {{-- ============= --}}
        <div class="flex items-center gap-3 bg-slate-200 mx-2 rounded-md p-2">
            <div class="bg-gray-300 w-10 h-10 flex items-center justify-center rounded-full mt-5">
                <img src="{{ asset('assets/icons/to.svg') }}" alt="" class="w-4">
            </div>
            <div>
                <span class="capitalize font-bold">To</span>
                <select id="countries"
                    class="bg-transparent border-none  text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a country</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
            </div>
        </div>

        {{-- serach --}}
        <button class=" gap-3 flex items-center justify-center    mx-2 rounded-md  bg-black py-4 text-2xl text-white ">
            <img src="{{ asset('assets/icons/search.svg') }}" alt="search" class=" bg-black  ">
            Search
        </button>





    </div>





</section>
{{-- ============================================================================= --}}

<section class="w-full  z-20 py-10 px-6 my-6 ">

    <div class="max-w-[1030px]  mx-auto grid gap-10 grid-cols-1 lg:grid-cols-[300px,auto]">

        <div class="mx-2">
            <p class="text-lg lg:text-2xl font-medium font-montserrat">The partners who sell our products</p>
        </div>
        <div class="flex  gap-3 lg:gap-16 items-center  justify-center">
            <div>
                <img src="{{ asset('assets/icons/company1.svg') }}" alt="partner">
                <img src="{{ asset('assets/icons/company1.svg') }}" alt="partner">
            </div>
            <div>
                <img src="{{ asset('assets/icons/company2.svg') }}" alt="partner">
            </div>
            <div>
                <img src="{{ asset('assets/icons/company3.svg') }}" alt="partner">
            </div>
            <div>
                <img src="{{ asset('assets/icons/company4.svg') }}" alt="partner">
            </div>
        </div>


    </div>




</section>
<hr class="mb-8 border-2">
{{-- =================================================================== --}}
{{-- <section class="py-10 px-6 lg:max-w-[1130px] mx-auto my-32">


    <div class=" flex justify-between mx-2 font-montserrat">

        <h1 class="font-semibold text-3xl">Our Fleet</h1>
        <a href="/fleets" class="flex  gap-2 items-center">
            <button class="font-medium">More Fleet</button>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_745_563)">
                    <path
                        d="M15.3033 13.7794C15.0735 13.7794 14.865 13.6863 14.7141 13.5355C14.5633 13.3846 14.4701 13.1761 14.4701 12.9463L14.4701 6.70843L5.28603 15.8925C4.96017 16.2184 4.43338 16.2184 4.10752 15.8925C3.78166 15.5666 3.78166 15.0399 4.10752 14.714L13.2916 5.52992L7.05371 5.52989C6.59291 5.52989 6.22054 5.15751 6.22054 4.69671C6.22054 4.23592 6.593 3.86345 7.0538 3.86345L15.3034 3.86345C15.7642 3.86345 16.1365 4.2358 16.1365 4.6966L16.1365 12.9462C16.1365 13.407 15.7641 13.7794 15.3033 13.7794Z"
                        fill="#181A1F" />
                </g>
                <defs>
                    <clipPath id="clip0_745_563">
                        <rect width="20" height="20" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </a>
    </div>
    <div>
        <div class="swiper p-10">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper flex gap-5">
                <!-- Slides -->
                <div class="swiper-slide">
                    <x-cards></x-cards>
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="swiper-slide">
                    <x-cards></x-cards>
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="swiper-slide">
                    <x-cards></x-cards>
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="swiper-slide">
                    <x-cards></x-cards>
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="swiper-slide">
                    <x-cards></x-cards>
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="swiper-slide">
                    <x-cards></x-cards>
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="swiper-slide">
                    <x-cards></x-cards>
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="swiper-slide">
                    <x-cards></x-cards>
                    <div class="swiper-lazy-preloader"></div>
                </div>
            </div>

        </div>
    </div>

    <div class="flex gap-6  items-center">
        <button
            class="swiper-pre flex  justify-center items-center h-[60px] w-[60px] rounded-full border  border-gray-400  ">
            <svg width="20" height="16" viewBox="0 0 18 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.3334 7C17.3334 7.46083 16.9609 7.83333 16.5001 7.83333H3.51175L7.92258 12.2442C8.24841 12.57 8.24841 13.0967 7.92258 13.4226C7.76008 13.5851 7.54675 13.6667 7.33342 13.6667C7.12008 13.6667 6.90677 13.5851 6.74427 13.4226L0.91094 7.58925C0.585107 7.26341 0.585107 6.73666 0.91094 6.41083L6.74427 0.577505C7.07011 0.251672 7.59675 0.251672 7.92258 0.577505C8.24841 0.903338 8.24841 1.43005 7.92258 1.75589L3.51175 6.16666H16.5001C16.9609 6.16666 17.3334 6.53916 17.3334 7Z"
                    fill="#181A1F" />
            </svg>

        </button>
        <button
            class="swiper-button flex justify-center items-center h-[60px] w-[60px] rounded-full  border  border-gray-400">
            <svg width="20" height="16" viewBox="0 0 18 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.089 6.41075L11.2557 0.57742C11.0932 0.41492 10.8799 0.333336 10.6666 0.333336C10.4532 0.333336 10.2399 0.41492 10.0774 0.57742C9.75158 0.903254 9.75158 1.43 10.0774 1.75584L14.4882 6.16667L1.4999 6.16667C1.03906 6.16667 0.666564 6.53917 0.666564 7C0.666564 7.46084 1.03906 7.83334 1.4999 7.83334L14.4882 7.83334L10.0774 12.2441C9.75158 12.5699 9.75158 13.0967 10.0774 13.4225C10.4032 13.7483 10.9298 13.7483 11.2557 13.4225L17.089 7.58917C17.4148 7.26334 17.4148 6.73659 17.089 6.41075Z"
                    fill="#181A1F" />
            </svg>


        </button>


    </div>

</section> --}}
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
<section class="max-w-[1130px] mx-auto flex flex-wrap justify-center gap-10 py-20">
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
<section class="  px-6 lg:max-w-[1350px] mx-auto my-32">


    <div class=" flex justify-between mx-2 font-montserrat">

        <h1 class="font-semibold text-3xl">Our Services</h1>
        <a href="/fleets" class="flex gap-2 items-center">
            <button class="font-medium">More Services </button>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_745_563)">
                    <path
                        d="M15.3033 13.7794C15.0735 13.7794 14.865 13.6863 14.7141 13.5355C14.5633 13.3846 14.4701 13.1761 14.4701 12.9463L14.4701 6.70843L5.28603 15.8925C4.96017 16.2184 4.43338 16.2184 4.10752 15.8925C3.78166 15.5666 3.78166 15.0399 4.10752 14.714L13.2916 5.52992L7.05371 5.52989C6.59291 5.52989 6.22054 5.15751 6.22054 4.69671C6.22054 4.23592 6.593 3.86345 7.0538 3.86345L15.3034 3.86345C15.7642 3.86345 16.1365 4.2358 16.1365 4.6966L16.1365 12.9462C16.1365 13.407 15.7641 13.7794 15.3033 13.7794Z"
                        fill="#181A1F" />
                </g>
                <defs>
                    <clipPath id="clip0_745_563">
                        <rect width="20" height="20" fill="white" />
                    </clipPath>
                </defs>
            </svg>

        </a>
    </div>
    {{-- cards --}}
    <div>
        <div class="swiper p-10">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper ">

                <!-- Slides -->
                <div class="swiper-slide">
                    {{-- =====card======= --}}
                    <div class=" h-[400px]  border border-gray-300 rounded-lg  flex flex-col gap-8">
                        <a href="?">
                            <div class="relative w-full card-main">
                                <div>
                                    <img class="h-[400px] object-cover" width="100%"
                                        src="https://img.freepik.com/free-photo/blue-car-driving-road_114579-4056.jpg?size=626&ext=jpg&ga=GA1.1.255768399.1706697545&semt=ais"
                                        loading="lazy" alt="">
                                </div>
                                <div class=" mx-4 absolute bottom-3 w-full  text-white font-semibold ">
                                    <h1 class="font-medium text-lg  text-[20px]">Intercity Rides</h1>
                                    <div class="  card-content ">
                                        <p class="mt-2 font-normal  break-words">Mercedes-Benz E-Class, BMW 5 Series,
                                            Cadill XTS or similar
                                        </p>
                                        <div
                                            class="h-[50px] w-[50px]  border rounded-full border-white  flex  justify-center items-center mt-2">
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

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>
                    </div>

                    <div class="swiper-lazy-preloader"></div>
                </div>
                <!-- Slides end-->
                <!-- Slides -->
                <div class="swiper-slide">
                    {{-- =====card======= --}}
                    <div class="w-full h-[400px]  border border-gray-300 rounded-lg  flex flex-col gap-8">
                        <a href="?">
                            <div class="relative w-full card-main">
                                <div>
                                    <img class="h-[400px] object-cover" width="100%"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1L1dh2tusMTM9__gz3O2MZldnVXWv6_9psw&usqp=CAU"
                                        loading="lazy" alt="">
                                </div>
                                <div class=" mx-4 absolute bottom-3 w-full  text-white font-semibold ">
                                    <h1 class="font-medium text-lg  text-[20px]">Intercity Rides</h1>
                                    <div class="  card-content ">
                                        <p class="mt-2 font-normal  break-words">Mercedes-Benz E-Class, BMW 5 Series,
                                            Cadill XTS or similar
                                        </p>
                                        <div
                                            class="h-[50px] w-[50px]  border rounded-full border-white  flex  justify-center items-center mt-2">
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

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>
                    </div>

                    <div class="swiper-lazy-preloader"></div>
                </div>
                <!-- Slides end-->
                <!-- Slides -->
                <div class="swiper-slide">
                    {{-- =====card======= --}}
                    <div class="w-full h-[400px]  border border-gray-300 rounded-lg  flex flex-col gap-8">
                        <a href="?">
                            <div class="relative w-full card-main">
                                <div>
                                    <img class="h-[400px] object-cover" width="100%"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPcBP9fVzwk7Y1fj0o1CbFji3-r5PSukvQSQ&usqp=CAU"
                                        loading="lazy" alt="">
                                </div>
                                <div class=" mx-4 absolute bottom-3 w-full  text-white font-semibold ">
                                    <h1 class="font-medium text-lg  text-[20px]">Intercity Rides</h1>
                                    <div class="  card-content ">
                                        <p class="mt-2 font-normal  break-words">Mercedes-Benz E-Class, BMW 5 Series,
                                            Cadill XTS or similar
                                        </p>
                                        <div
                                            class="h-[50px] w-[50px]  border rounded-full border-white  flex  justify-center items-center mt-2">
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

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>
                    </div>

                    <div class="swiper-lazy-preloader"></div>
                </div>
                <!-- Slides end-->
                <!-- Slides -->
                <div class="swiper-slide">
                    {{-- =====card======= --}}
                    <div class="w-full h-[400px]  border border-gray-300 rounded-lg  flex flex-col gap-8">
                        <a href="?">
                            <div class="relative w-full card-main">
                                <div>
                                    <img class="h-[400px] object-cover" width="100%"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTArDvbuNaTT1TovUO6eF4wnOUi0K7QGAMm3A&usqp=CAU"
                                        loading="lazy" alt="">
                                </div>
                                <div class=" mx-4 absolute bottom-3 w-full  text-white font-semibold ">
                                    <h1 class="font-medium text-lg  text-[20px]">Intercity Rides</h1>
                                    <div class="  card-content ">
                                        <p class="mt-2 font-normal  break-words">Mercedes-Benz E-Class, BMW 5 Series,
                                            Cadill XTS or similar
                                        </p>
                                        <div
                                            class="h-[50px] w-[50px]  border rounded-full border-white  flex  justify-center items-center mt-2">
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

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>
                    </div>

                    <div class="swiper-lazy-preloader"></div>
                </div>
                <!-- Slides end-->
                <!-- Slides -->
                <div class="swiper-slide">
                    {{-- =====card======= --}}
                    <div class="w-full h-[400px]  border border-gray-300 rounded-lg  flex flex-col gap-8">
                        <a href="?">
                            <div class="relative w-full card-main">
                                <div>
                                    <img class="h-[400px] object-cover" width="100%"
                                        src="https://img.freepik.com/free-photo/blue-car-driving-road_114579-4056.jpg?size=626&ext=jpg&ga=GA1.1.255768399.1706697545&semt=ais"
                                        loading="lazy" alt="">
                                </div>
                                <div class=" mx-4 absolute bottom-3 w-full  text-white font-semibold ">
                                    <h1 class="font-medium text-lg  text-[20px]">Intercity Rides</h1>
                                    <div class="  card-content ">
                                        <p class="mt-2 font-normal  break-words">Mercedes-Benz E-Class, BMW 5 Series,
                                            Cadill XTS or similar
                                        </p>
                                        <div
                                            class="h-[50px] w-[50px]  border rounded-full border-white  flex  justify-center items-center mt-2">
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

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>
                    </div>

                    <div class="swiper-lazy-preloader"></div>
                </div>
                <!-- Slides end-->



            </div>

        </div>
    </div>

    <div class="flex gap-6  items-center">
        <button
            class="swiper-pre flex  justify-center items-center h-[60px] w-[60px] rounded-full border  border-gray-400  ">
            <svg width="20" height="16" viewBox="0 0 18 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.3334 7C17.3334 7.46083 16.9609 7.83333 16.5001 7.83333H3.51175L7.92258 12.2442C8.24841 12.57 8.24841 13.0967 7.92258 13.4226C7.76008 13.5851 7.54675 13.6667 7.33342 13.6667C7.12008 13.6667 6.90677 13.5851 6.74427 13.4226L0.91094 7.58925C0.585107 7.26341 0.585107 6.73666 0.91094 6.41083L6.74427 0.577505C7.07011 0.251672 7.59675 0.251672 7.92258 0.577505C8.24841 0.903338 8.24841 1.43005 7.92258 1.75589L3.51175 6.16666H16.5001C16.9609 6.16666 17.3334 6.53916 17.3334 7Z"
                    fill="#181A1F" />
            </svg>

        </button>
        <button
            class="swiper-button flex justify-center items-center h-[60px] w-[60px] rounded-full  border  border-gray-400">
            <svg width="20" height="16" viewBox="0 0 18 14" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.089 6.41075L11.2557 0.57742C11.0932 0.41492 10.8799 0.333336 10.6666 0.333336C10.4532 0.333336 10.2399 0.41492 10.0774 0.57742C9.75158 0.903254 9.75158 1.43 10.0774 1.75584L14.4882 6.16667L1.4999 6.16667C1.03906 6.16667 0.666564 6.53917 0.666564 7C0.666564 7.46084 1.03906 7.83334 1.4999 7.83334L14.4882 7.83334L10.0774 12.2441C9.75158 12.5699 9.75158 13.0967 10.0774 13.4225C10.4032 13.7483 10.9298 13.7483 11.2557 13.4225L17.089 7.58917C17.4148 7.26334 17.4148 6.73659 17.089 6.41075Z"
                    fill="#181A1F" />
            </svg>


        </button>


    </div>

</section>

<section>
    <div class="bg-black mb-32">
        <div
            class="py-2 px-4 flex justify-center  items-center max-w-[1350px] min-h-[650px] mx-auto text-white  relative">

            <div class="flex gap-10 w-full  justify-between  items-center">
                <div class="md:w-[470px]">
                    <div class="flex gap-5 items-center">
                        <div class="w-[70px] h-[70px] bg-white rounded-[6px] ">

                        </div>
                        <div>
                            <h2 class="text-lg font-semibold">Jonathan Miller</h2>
                            <p class="text-sm font-normal">Web Developer</p>
                        </div>
                    </div>
                    <div class="mt-8">
                        <p class="text-xl leading-8  font-normal"> I really can recommend this theme, because it’s
                            coded
                            very well and it’s really easy to build your own website!</p>
                    </div>
                    <div class="mt-8">
                        <div class="flex gap-3 px-2 items-center ">
                            <label class="font-semibold ">01</label>
                            <div class="h-1   w-[200px]  bg-[#333333]">
                                <div class="h-1 mt-1  w-[200px]  bg-[#333333] ">
                                    <div class="w-[25%] h-full bg-white "> </div>
                                </div>
                            </div>
                            <label class="font-semibold">04</label>
                        </div>
                    </div>
                </div>

                <div class="md:w-[470px] ">
                    <div class="absolute top-0">

                        <svg class="z-0 hidden md:block" width="120" height="135" viewBox="0 0 120 135"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.2">
                                <path
                                    d="M33.5034 2.19013C4.55356 -1.32957 -12.1267 45.0629 17.8681 54.8969C44.0324 63.4755 65.7586 21.9251 41.6639 7.63956"
                                    stroke="white" stroke-width="3" stroke-miterlimit="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M52.6831 29.6533C79.4811 24.4767 115.52 51.4488 98.081 80.9343C87.2321 99.2768 58.8301 85.2355 72.9783 67.5208C83.7109 54.084 101.023 60.673 109.014 73.4639C119.254 89.8559 118.87 114.541 115.451 133"
                                    stroke="white" stroke-width="3" stroke-miterlimit="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                        </svg>

                    </div>
                    <div class="w-[400px] h-[410px] z-10 relative hidden md:block">
                        <div>
                            <button id="vidoeplaybtn" data-modal-target="videomodal" data-modal-toggle="videomodal"
                                class="w-[90px] h-[90px] bg-white flex justify-center items-center  rounded-full shadow-lg absolute top-[150px] left-[-40px]">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.1629 9.58228L4.97562 0.369445C3.25854 -0.610831 1.50793 0.461247 1.50793 2.38907V21.6218C1.50793 23.2551 2.57123 23.9998 3.55949 23.9998C4.02488 23.9998 4.49905 23.853 4.97003 23.5664L21.23 13.6136C22.0474 13.1114 22.5064 12.3682 22.4921 11.574C22.4785 10.7789 21.9947 10.0525 21.1629 9.58228ZM20.1404 11.8358L3.88119 21.7862C3.77183 21.8533 3.68562 21.8868 3.62654 21.9036C3.61058 21.8445 3.59461 21.7535 3.59461 21.6218V2.38987C3.59461 2.1919 3.63054 2.09211 3.63054 2.06737C3.6944 2.07136 3.80615 2.10409 3.94665 2.18391L20.1316 11.3968C20.3312 11.5109 20.3902 11.6099 20.4094 11.5883C20.399 11.6155 20.3312 11.7169 20.1404 11.8358Z"
                                        fill="#181A1F" />
                                </svg>

                            </button>
                        </div>
                        <img class="w-full h-full object-cover rounded-lg"
                            src="data:image/jpeg;base64,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"
                            alt="Baner">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- video section --}}
<section class="w-full mb-10  flex justify-center flex-wrap items-center px-8  ">
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
    <div class="py-12 max-w-[1350px] mx-auto text-white  ">


        <div class=" flex flex-wrap justify-between mx-2 font-montserrat">

            <h1 class="font-semibold text-3xl">Latest From News</h1>
            <div class="flex gap-3 items-center">
                <button class="font-medium">More news</button>
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

            </div>
        </div>
        {{-- cards --}}
        <div class="flex  flex-wrap gap-10 justify-center  pt-20">
            <x-news-cards></x-news-cards>
            <x-news-cards></x-news-cards>
            <x-news-cards></x-news-cards>



        </div>



    </div>



</section>

{{-- frequantly ask questions --}}
<section class=" w-full lg:w-[1100px] mx-auto py-20 px-5">
    <div>
        <h1 class="text-center text-5xl mb-10 font-semibold ">Frequently Asked Questions</h1>
    </div>

    <div id="accordion-flush" data-accordion="collapse"
        data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
        data-inactive-classes="text-gray-500 dark:text-gray-400">
        <div class="mt-2">
            <h2 id="accordion-flush-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium  border-b border-gray-200  gap-3"
                    data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                    aria-controls="accordion-flush-body-1">
                    <span class="text-xl text-black">How do I create an account?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-[16px] text-[#181A1F] font-normal">Sad ipscing elitrsed diamnonu myeir mod,
                        sadipscing elitrsed dia morem ipsum dolor situamet consetetur loutrytru hury. Lorem ipsum dolor
                        sitametco nsetetur sa cingelitrse diamonu eirmoid, sad ipscing elitrstrud diamtre ute riyutroui
                        tout.</p>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <h2 id="accordion-flush-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium  border-b border-gray-200  gap-3"
                    data-accordion-target="#accordion-flush-body-2" aria-expanded="true"
                    aria-controls="accordion-flush-body-2">
                    <span class="text-xl text-black">How do I earn Easy Ride Rewards points?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-[16px] text-[#181A1F] font-normal">Sad ipscing elitrsed diamnonu myeir mod,
                        sadipscing elitrsed dia morem ipsum dolor situamet consetetur loutrytru hury. Lorem ipsum dolor
                        sitametco nsetetur sa cingelitrse diamonu eirmoid, sad ipscing elitrstrud diamtre ute riyutroui
                        tout.</p>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <h2 id="accordion-flush-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium  border-b border-gray-200  gap-3"
                    data-accordion-target="#accordion-flush-body-3" aria-expanded="true"
                    aria-controls="accordion-flush-body-2">
                    <span class="text-xl text-black">How do I become a Captain?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-[16px] text-[#181A1F] font-normal">Sad ipscing elitrsed diamnonu myeir mod,
                        sadipscing elitrsed dia morem ipsum dolor situamet consetetur loutrytru hury. Lorem ipsum dolor
                        sitametco nsetetur sa cingelitrse diamonu eirmoid, sad ipscing elitrstrud diamtre ute riyutroui
                        tout.</p>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <h2 id="accordion-flush-heading-4">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium  border-b border-gray-200  gap-3"
                    data-accordion-target="#accordion-flush-body-4" aria-expanded="true"
                    aria-controls="accordion-flush-body-2">
                    <span class="text-xl text-black">Where can I get more information, support or make a claim?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-[16px] text-[#181A1F] font-normal">Sad ipscing elitrsed diamnonu myeir mod,
                        sadipscing elitrsed dia morem ipsum dolor situamet consetetur loutrytru hury. Lorem ipsum dolor
                        sitametco nsetetur sa cingelitrse diamonu eirmoid, sad ipscing elitrstrud diamtre ute riyutroui
                        tout.</p>
                </div>
            </div>
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
                <img src={{ asset('assets/icons/apple.svg') }} alt="apple">
            </a>
            <a href="">
                <img src={{ asset('assets/icons/google.svg') }} alt="google">
            </a>
        </div>

    </div>

    <div class="flex-2 hidden lg:block">
        <img src={{ asset('assets/icons/mobile.png') }} alt="">


    </div>
</section>




<!-- vidoe modal -->
<div id="videomodal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full">
        <div class="relative  rounded-lg shadow dark:bg-gray-700">
            <button id="vidoeclosebtn" type="button"
                class="text-black bg-white absolute z-30 top-[-20px] right-[-15px]  rounded-full text-sm w-10 h-10 flex items-center justify-center "
                data-modal-hide="videomodal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
        <!-- Modal body -->
        <video id="video" src="{{ asset('assets/Lamborghini .mp4') }}" controls width="100%"
            height="480px"></video>
    </div>
</div>
</div>

@include('layouts.footer')

<script>
    // set currunt data and time in  headerbar
    let currentDate = new Date();
    let currentDataValue = currentDate.toISOString().slice(0, 10);
    let currentTimeValue = currentDate.toTimeString().slice(0, 5);
    let date = document.getElementById('date').value = currentDataValue;
    let time = document.getElementById('time').value = currentTimeValue;


    // video play and  pause
    let playBtn = document.getElementById("vidoeplaybtn");
    let pauseBtn = document.getElementById("vidoeclosebtn");
    let video = document.getElementById("video");
    playBtn.addEventListener("click", () => {
        video.play();

    });
    pauseBtn.addEventListener("click", () => {
        video.pause();
    });




    const swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,
        autoplay: true,
        delay: 200,
        speed: 500,
        spaceBetween: 50,
        slidesPerView: 1,
        enabled: true,
        // onlyInViewport: true,
        pageUpDown: true,
        // Responsive breakpoints
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 300
            },

            834: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            1050: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1100: {
                slidesPerView: 3,
                spaceBetween: 20
            }

        },

        navigation: {
            nextEl: '.swiper-button',
            prevEl: '.swiper-pre',
        },

    });
</script>
