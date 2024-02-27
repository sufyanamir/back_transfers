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



<section class="select_country max-w-[1077px] m-auto py-20">
    <div>
        <div>
            <h1 class="font-semibold text-5xl text-center">Select Country</h1>
        </div>

        <div class="uppercase flex flex-wrap gap-10 justify-center p-5 mt-2">
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">A</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">b</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">c</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">d</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">e</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">f</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">g</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">h</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">j</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">k</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">l</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">m</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">n</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">o</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">p</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">q</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">r</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">s</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">t</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">u</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">v</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">w</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">x</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">y</a></span>
            <span><a  class="text-[#22C58B] text-lg font-bold" href="">z</a></span>

        </div>

    </div>






</section>

<section class="max-w-full m-auto p-10  bg-slate-200 font-montserrat">
    <div class="flex  flex-wrap items-center justify-between max-w-[1100px] m-auto">
        <h1 class=" text-2xl lg:text-4xl font-semibold capitalize">The perfect vehicle for you</h1>
        <span>More Services</span>
    </div>
    {{-- images --}}
    <div class="flex flex-wrap justify-center gap-10 pt-10">
        <div><img src={{ asset('assets/icons/express.png') }} alt=""
                class="w-[300px] h-[300px] object-contain"></div>
        <div><img src={{ asset('assets/icons/coach.png') }} alt="" class="w-[300px] h-[300px] object-contain">
        </div>
        <div><img src={{ asset('assets/icons/minivan.png') }} alt=""
                class="w-[300px] h-[300px] object-contain"></div>
        <div><img src={{ asset('assets/icons/texi.png') }} alt="" class="w-[300px] h-[300px] object-contain">
        </div>
    </div>


</section>
{{-- why booking transfer............ --}}
<section class="max-w-full m-auto py-10">
    <div class="Numbers_image text-white py-10 ">
        <div>
            <h1 class="text-center capitalize text-2xl lg:text-3xl font-montserrat font-semibold">Why book your
                transfers with Backtransfers.com?</h1>
        </div>
        <div class="flex flex-wrap py-10 px-2">
            <x-services-cards></x-services-cards>
            <x-services-cards></x-services-cards>
            <x-services-cards></x-services-cards>
        </div>


    </div>



</section>

{{-- reviews --}}
<section class="max-w-full m-auto pb-20 ">

    <div>
        <h1 class="text-gray-500 py-10 text-center   lg:text-3xl font-montserrat">You can also see our excellent
            reviews in</h1>
    </div>
    <div class="max-w-[1100px] m-auto pt-10 flex flex-col gap-10 px-32 ">

        <div class="flex  flex-wrap gap-10 justify-between ">
            <div class=" flex flex-col gap-3">
                <img src={{ asset('assets/icons/reviewsLogo.svg') }} alt="" class="w-[200px]">
                <div class="">
                    <img src={{ asset('assets/icons/star.svg') }} alt="">
                    <p class="text-[12px]">Based on 9,500+ reviews</p>
                </div>


            </div>
            <div class="flex flex-col gap-3">
                <img src={{ asset('assets/icons/googleLogo.svg') }} alt="" class="w-[200px]">
                <div class="">
                    <img src={{ asset('assets/icons/star.svg') }} alt="">
                    <p class="text-[12px]">Based on 9,500+ reviews</p>
                </div>


            </div>
        </div>
        {{-- next div --}}
        <div class="flex flex-wrap  justify-between gap-10">
            <div class="flex flex-col gap-3">
                <img src={{ asset('assets/icons/revieCenter.svg') }} alt="" class="w-[200px]">
                <div class="">
                    <img src={{ asset('assets/icons/star.svg') }} alt="">
                    <p class="text-[12px]">Based on 9,500+ reviews</p>
                </div>


            </div>
            <div class=" flex flex-col gap-3">
                <img src={{ asset('assets/icons/tripAdvice.svg') }} alt="" class="w-[200px]">
                <div class="">
                    <img src={{ asset('assets/icons/star.svg') }} alt="">
                    <p class="text-[12px]">Based on 9,500+ reviews</p>
                </div>


            </div>
        </div>

    </div>



</section>


{{-- customer satisfaction --}}
<section class="max-w-[1100px] m-auto px-2 py-10">
    <div class=" grid md:grid-cols-2 lg:grid-cols-2 gap-10">

        <x-service-satisfaction></x-service-satisfaction>
        <x-service-satisfaction></x-service-satisfaction>
        <x-service-satisfaction></x-service-satisfaction>
        <x-service-satisfaction></x-service-satisfaction>
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

<script>
    // set currunt data and time in  headerbar
    let currentDate = new Date();
    let currentDataValue = currentDate.toISOString().slice(0, 10);
    let currentTimeValue = currentDate.toTimeString().slice(0, 5);
    let time = document.getElementById('time').value = currentTimeValue;
    let date = document.getElementById('date').value = currentDataValue;
</script>
