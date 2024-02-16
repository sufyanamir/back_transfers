@include('layouts.header')

<section class=" w-full py-10 bg-black">
    <div>
        <h1 class="text-white max-w-[1030px] mx-auto  capitalize text-4xl font-montserrat font-semibold ">Sports Car
        </h1>
        <div>
            <ul class="text-white flex gap-2 max-w-[1030px] mx-auto">
                <li><a href="/">Home</a></li>/
                <li><a href="/fleets">Our Fleet</a></li>
            </ul>
        </div>
    </div>

</section>
<div>
    <img src={{ asset('assets/images/singlefleet.jpg') }} alt="Back Transfers" class="w-full h-[76vh]  object-cover">
</div>

{{--  --}}
<section class="lg:w-[60%] max-w-[1400px]  px-10 mt-20">
    <div>
        <h1 class="text-4xl font-bold capitalize">lamborghini revuelto</h1>
    </div>

    <div class="flex flex-col  gap-10 pt-10">
        <p class="text-justify">We offer luxury chauffeur driven airport transfers and pickups to London. Exceptional
            Safe, Meet and Greet. One hour of complimentary wait time and flight tracking. Professional Drivers &
            Vehicles. Fixed prices on airport transfers. VIP service, get your quote today!

        </p>
        <p class="text-justify">
            Et, morbi at sagittis vehicula rutrum. Lacus tortor, quam arcu mi et, at lectus leo nunc. Mattis cras auctor
            vel pharetra tempor. Rhoncus pellentesque habitant ac tempor. At aliquam euismod est in praesent ornare
            etiam id. Faucibus libero sit vehicula sed condimentum. Vitae in nam porttitor rutrum sed aliquam donec sed.
            Sapien facilisi lectus.
        </p>
    </div>



    <div>
        <div class="p-2 mt-10">

            <div class="flex flex-col gap-5">
                <div class="flex gap-5 items-center">
                    <div class="bg-pink flex items-center justify-center w-10 h-10 rounded-full">
                        <span><img src={{ asset('assets/icons/good.svg') }} alt=""></span>
                    </div>
                    <div>100% Luxurious Fleet</div>
                </div>
                {{--  --}}
                <div class="flex gap-5 items-center">
                    <div class="bg-pink flex items-center justify-center w-10 h-10 rounded-full">
                        <span><img src={{ asset('assets/icons/good.svg') }} alt=""></span>
                    </div>
                    <div>All Our Fleet Are Fully Valeted & Serviced</div>
                </div>
                {{--  --}}
                <div class="flex gap-5 items-center">
                    <div class="bg-pink flex items-center justify-center w-10 h-10 rounded-full">
                        <span><img src={{ asset('assets/icons/good.svg') }} alt=""></span>
                    </div>
                    <div>A Safe & Secure Journey</div>
                </div>
                {{--  --}}
                <div class="flex gap-5 items-center">
                    <div class="bg-pink flex items-center justify-center w-10 h-10 rounded-full">
                        <span><img src={{ asset('assets/icons/good.svg') }} alt=""></span>
                    </div>
                    <div class="w-[300px]">Comfortable And Enjoyable</div>
                </div>
                {{--  --}}
                <div class="flex gap-5 items-center">
                    <div class="bg-pink flex items-center justify-center w-10 h-10 rounded-full">
                        <span><img src={{ asset('assets/icons/good.svg') }} alt=""></span>
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

<section class=" relative  px-10  my-10">

    <div class=" relative ">
        <div class="swiper w-full">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper ">
                <!-- Slides -->
                <div class="swiper-slide">

                    <a href="#">
                        <div class="h-[600px]">

                            <img class="w-[100%] h-full object-cover" src="{{ asset('assets/images/singlefleet.jpg') }}"
                                alt="">
                        </div>
                    </a>
                </div>

                <!-- Slides -->
                <div class="swiper-slide">

                    <a href="#">
                        <div class="h-[600px]">

                            <img class="w-[100%] h-full object-cover" src="{{ asset('assets/images/singlefleet.jpg') }}"
                                alt="">
                        </div>
                    </a>
                </div>

                <!-- Slides -->
                <div class="swiper-slide">

                    <a href="#">
                        <div class="h-[600px]">

                            <img class="w-[100%] h-full object-cover" src="{{ asset('assets/images/singlefleet.jpg') }}"
                                alt="">
                        </div>
                    </a>
                </div>





            </div>

        </div>
    </div>

    <div class="flex gap-6  mt-5  items-center">
        <button
            class="swiper-pre flex  justify-center items-center h-[60px] w-[60px] rounded-full border  border-gray-400  ">
            <svg width="20" height="16" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.3334 7C17.3334 7.46083 16.9609 7.83333 16.5001 7.83333H3.51175L7.92258 12.2442C8.24841 12.57 8.24841 13.0967 7.92258 13.4226C7.76008 13.5851 7.54675 13.6667 7.33342 13.6667C7.12008 13.6667 6.90677 13.5851 6.74427 13.4226L0.91094 7.58925C0.585107 7.26341 0.585107 6.73666 0.91094 6.41083L6.74427 0.577505C7.07011 0.251672 7.59675 0.251672 7.92258 0.577505C8.24841 0.903338 8.24841 1.43005 7.92258 1.75589L3.51175 6.16666H16.5001C16.9609 6.16666 17.3334 6.53916 17.3334 7Z"
                    fill="#181A1F" />
            </svg>

        </button>
        <button
            class="swiper-button flex justify-center items-center h-[60px] w-[60px] rounded-full  border  border-gray-400">
            <svg width="20" height="16" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.089 6.41075L11.2557 0.57742C11.0932 0.41492 10.8799 0.333336 10.6666 0.333336C10.4532 0.333336 10.2399 0.41492 10.0774 0.57742C9.75158 0.903254 9.75158 1.43 10.0774 1.75584L14.4882 6.16667L1.4999 6.16667C1.03906 6.16667 0.666564 6.53917 0.666564 7C0.666564 7.46084 1.03906 7.83334 1.4999 7.83334L14.4882 7.83334L10.0774 12.2441C9.75158 12.5699 9.75158 13.0967 10.0774 13.4225C10.4032 13.7483 10.9298 13.7483 11.2557 13.4225L17.089 7.58917C17.4148 7.26334 17.4148 6.73659 17.089 6.41075Z"
                    fill="#181A1F" />
            </svg>


        </button>


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
                    <div><img src="{{ asset('assets/icons/passenger.svg') }}" alt=""></div>
                    <div><span>Passenger</span></div>
                </div>
                <div class="flex items-center gap-4 ">
                    <div><img src="{{ asset('assets/icons/lagage.svg') }}" alt=""></div>
                    <div><span>Luggage</span></div>
                </div>

            </div>
            {{--  --}}
            <div>
                <img src='https://images.unsplash.com/photo-1617650728468-8581e439c864?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FycyUyMHdhbGxwYXBlcnN8ZW58MHwwfDB8fHww'
                    alt="" class="w-full">
            </div>
        </div>
        {{-- =========== --}}
        <div class="md:mt-32">
            <div class=" bg-lightGreen rounded-xl flex flex-col gap-4 max-w[400px] p-5">
                <div class="flex justify-between ">
                    <div>
                        <h1>Hourly rate (minimum 3 hours)</h1>
                    </div>
                    <div>$29</div>
                </div>
                <hr>
                <div class="flex justify-between ">
                    <div>
                        <h1>Hourly rate (minimum 3 hours)</h1>
                    </div>
                    <div>$29</div>
                </div>
                <hr>
                <div class="flex justify-between ">
                    <div>
                        <h1>Hourly rate (minimum 3 hours)</h1>
                    </div>
                    <div>$29</div>
                </div>
                {{-- button --}}
                <div>
                    <button class="bg-black text-white px-3 py-4 rounded-xl w-full">Get a Price & Book</button>

                </div>
            </div>
            <div class="flex gap-4">
                <div class="flex items-center gap-2">
                    <div><img src={{ asset('assets/icons/meet.svg') }} alt=""></div>
                    <div>Meet & Greet included</div>

                </div>
                <div class="flex items-center gap-2">
                    <div><img src={{ asset('assets/icons/cancel.svg') }} alt=""></div>
                    <div>Meet & Greet included</div>

                </div>
            </div>
            {{--  --}}
            <div class="flex gap-4 mt-5">
                <div class="flex items-center gap-2">
                    <div><img src={{ asset('assets/icons/meet.svg') }} alt=""></div>
                    <div>Meet & Greet included</div>

                </div>
                <div class="flex items-center gap-2">
                    <div><img src={{ asset('assets/icons/cancel.svg') }} alt=""></div>
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

<script>
    const swiper2 = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,
        autoplay: false,
        spaceBetween: 30,

        slidesPerView: 1,
        breakpoints: {

            834: {
                slidesPerView: 2,
                spaceBetween: 20
            },


        },

        navigation: {
            nextEl: '.swiper-button',
            prevEl: '.swiper-pre',
        },
    });
</script>
