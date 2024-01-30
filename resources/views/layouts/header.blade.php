<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <section>
        <!-- ========== HEADER ========== -->
        <nav class="bg-black border-gray-200 dark:border-gray-700 py-1">
            <div class="  flex flex-wrap items-center gap-1 justify-between lg:justify-start lg:gap-10 mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{asset('assets/icons/logo.svg')}}" class="lg:w-full xxs:w-60" alt="Flowbite Logo" />
                </a>
                {{-- ================= --}}
                {{-- <div class="md:hidden ">
                    <a href="">
                        <button class="text-white bg-slate-800 px-5 py-2 rounded-full font-montserrat">sign in</button>
                    </a>
                 </div>
                 <div class="md:hidden">
                   <a href="">
                    <button class="text-white bg-slate-800 px-5 py-2 rounded-full font-montserrat">sign up</button>
                   </a>
                 </div> --}}
                {{-- ================= --}}


                <button data-collapse-toggle="navbar-multi-level" type="button"
                    class="inline-flex items-center  w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-multi-level" aria-expanded="false">

                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 text-white">

                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full py-2 px-3  md:border-0 md:p-0 md:w-auto md:dark:hover:bg-transparent">
                                Home
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home</a>
                                    </li>
                                    <li>
                                        <a href="/booking"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home1</a>
                                    </li>

                                </ul>

                            </div>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink6" data-dropdown-toggle="dropdownNavbar6"
                                class="flex items-center justify-between w-full py-2 px-3  md:border-0 md:p-0 md:w-auto md:dark:hover:bg-transparent">Fleets
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar6"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/fleets"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fleet List</a>
                                    </li>
                                    <li>
                                        <a href="/fleetsingle"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fleet Single</a>
                                    </li>


                                </ul>

                            </div>
                        </li>
                        {{-- ========================== --}}
                        <li>
                            <button id="dropdownNavbarLink1" data-dropdown-toggle="dropdownNavbar1"
                                class="flex items-center justify-between w-full py-2 px-3  md:border-0 md:p-0 md:w-auto md:dark:hover:bg-transparent">pages
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar1"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/dashboard"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                    </li>

                                </ul>

                            </div>
                        </li>
                        {{-- ================================= --}}
                        <li>
                            <button id="dropdownNavbarLink7" data-dropdown-toggle="dropdownNavbar7"
                                class="flex items-center justify-between w-full py-2 px-3  md:border-0 md:p-0 md:w-auto md:dark:hover:bg-transparent">servies
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar7"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/serviceslist"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Services List</a>
                                    </li>
                                    <li>
                                        <a href="/servicessingle"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Services Single</a>
                                    </li>


                                </ul>

                            </div>
                        </li>
                        {{-- ========================== --}}
                        <li>
                            <button id="dropdownNavbarLink10" data-dropdown-toggle="dropdownNavbar10"
                                class="flex items-center justify-between w-full py-2 px-3  md:border-0 md:p-0 md:w-auto md:dark:hover:bg-transparent">Booking
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar10"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownLargeButton10">
                                    <li>
                                        <a href="/booking"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Booking</a>
                                    </li>
                                    <li aria-labelledby="dropdownNavbarLink10">
                                        <button id="doubleDropdownButton3" data-dropdown-toggle="doubleDropdown3"
                                            data-dropdown-placement="right-start" type="button"
                                            class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Booking Pages<svg
                                                class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 1 4 4 4-4" />
                                            </svg></button>
                                        <div id="doubleDropdown3"
                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="doubleDropdownButton3">
                                                <li>
                                                    <a href="/whybooking"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">whyBooking</a>
                                                </li>
                                                <li>
                                                    <a href="/bookingextra"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">bookingExtra
                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/bookingpassenger"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">bookingPsseneger</a>
                                                </li>
                                                <li>
                                                    <a href="/bookingpayment"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">bookingPayment</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="/bookingrecieved"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">bookingRecieved</a>
                                    </li>
                                </ul>
                                {{-- <div class="py-1">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                        out</a>
                                </div> --}}
                            </div>
                        </li>
                        <li class="">

                            <a href="/login">
                                <button class="text-white lg:bg-slate-800 px-5 py-2 rounded-full font-montserrat">sign in</button>
                            </a>
                        </li>
                        <li class="">
                            <a href="/signup">
                                <button class="text-white md:bg-slate-800 px-5 py-2 rounded-full font-montserrat">sign up</button>
                               </a>
                        </li>

                    </ul>
                </div>

               {{-- <div class="float-end text-right mx-auto  flex gap-3">
                <div class="hidden md:block">
                    <a href="/login">
                        <button class="text-white bg-slate-800 px-5 py-2 rounded-full font-montserrat">sign in</button>
                    </a>
                 </div>
                 <div class="hidden md:block">
                   <a href="/signup">
                    <button class="text-white bg-slate-800 px-5 py-2 rounded-full font-montserrat">sign up</button>
                   </a>
                 </div>
               </div> --}}
            </div>

        </nav>





        <!-- ========== END HEADER ========== -->
    </section>
