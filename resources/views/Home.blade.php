@include('layouts.header')
<section class="   relative  md:h-full">
    <img class=" z-10 w-full object-cover lg:h-[80vh]  h-[40vh]" src={{ asset('assets/images/header-image.png') }}
        alt="background">
    <div class="bg-black opacity-30  h-full w-full absolute top-0">

    </div>
    <div class=" h-full w-full object-contain z-20 px-6 ">
        <div class="">
            <div
                class="z-10 absolute header-content w-full lg:max-w-[1100px]     xl:top-[25%] lg:top-[40px]   md:top-[100px] top-10 text-white   ">
                <div class=" font-montserrat capitalize  px-2  md:w-full ">
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
                        All countries and airports, <br>stations and ports
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


                                <select id="countries" class="border-none  bg-slate-50 rounded-full   p-0 h-[24px] ">
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
                    {{-- search bar --}}
                    <div class="relative  flex  items-center">
                        <a href="#" class="absolute  left-3  z-10">
                            <img src="{{ asset('assets/icons/search.svg') }}" alt="search" class=" bg-black  ">
                        </a>
                        <input type="text" placeholder="Search"
                            class="relative rounded-full outline-none px-10 w-[131px] bg-black text-white py-3  border-none">
                    </div>



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

        {{-- serach bar --}}
        <div class="flex items-center gap-3   mx-2 rounded-md ">

            <input type="text" placeholder="search"
                class="w-full bg-black rounded-lg p-5 text-white outline-none">
        </div>





    </div>





</section>
{{-- ============================================================================= --}}

<section class="w-full absolute z-20 py-10 px-6 ">

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
<hr>
{{-- =================================================================== --}}
<section class="py-10 px-6 lg:max-w-[1130px] mx-auto my-32">


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
    {{-- cards --}}
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
                ...
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
<section class="py-10 px-6 lg:max-w-[1130px] mx-auto my-32">


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
                ...
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
@include('layouts.footer')
