@include('layouts.header')


<section class=" w-full py-10 bg-black">
    <div>
        <h1 class="text-white max-w-[1030px] mx-auto  capitalize text-4xl font-montserrat font-semibold ">Airport
            Transfer Service
        </h1>
        <div>
            <ul class="text-white flex gap-2 max-w-[1030px] mx-auto mt-1">
                <li><a href="/">Home</a></li>-
                <li><a href="/serviceslist">Services</a> </li>
            </ul>
        </div>
    </div>

</section>
<div>
    <img src={{ asset('assets/images/singlefleet.jpg') }} alt="Back Transfers" class="w-full h-[76vh]  object-cover">
</div>

{{--  --}}
<section class="lg:w-[1230px] w-full lg:mx-auto flex flex-wrap gap-10 py-20 justify-center">
    <x-trip-card :img="'assets/icons/dol.svg'" :title="'All-inclusive pricing'" :desc="'Both you and your shipments will travel with professional drivers. Always with the highest quality standards.'"></x-trip-card>
    <x-trip-card :img="'assets/icons/plane2.svg'" :title="'Seamless airport travel'" :desc="'Both you and your shipments will travel with professional drivers. Always with the highest quality standards.'"></x-trip-card>
    <x-trip-card :img="'assets/icons/timer.svg'" :title="'Travel on your terms'" :desc="'Both you and your shipments will travel with professional drivers. Always with the highest quality standards.'"></x-trip-card>




</section>

<section class="max-w-[1130px] mx-auto px-10">
    <div>
        <h1 class="text-4xl font-bold capitalize">Airport transfer in the city</h1>
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
            </div>



        </div>
    </div>



</section>

<section class="max-w-[1130px] mx-auto my-10 px-10">
    <div class="grid lg:grid-cols-2 gap-10">
        <div class="flex-1 flex justify-center">
            <img src='https://img.freepik.com/premium-photo/car-is-shown-front-dark-background_728472-590.jpg?size=626&ext=jpg&ga=GA1.1.969358918.1707215966&semt=sph'
                alt="" class="">
        </div>
        <div class="flex-1 flex flex-col gap-10 items-center justify-center">
            <h1 class="text-2xl font-semibold">Get to or from the
                airport</h1>
            <p class="text-center">The price of tickets for low-cost airlines for a specific route has a much larger
                spread than that of regular airlines. It depends on the time to departure, demand and competition on the
                route. Unlike regular airlines, low-cost airlines rarely offer cheap tickets more than 3 months before
                departure. </p>
        </div>





    </div>



</section>


{{--  --}}
<section class="max-w-[1130px] mx-auto my-10 px-10">
    <div class="grid lg:grid-cols-2 gap-10">

        <div class="flex-1 flex flex-col gap-10 items-center justify-center">
            <h1 class="text-2xl font-semibold">Get to or from the
                airport</h1>
            <p class="text-center">The price of tickets for low-cost airlines for a specific route has a much larger
                spread than that of regular airlines. It depends on the time to departure, demand and competition on the
                route. Unlike regular airlines, low-cost airlines rarely offer cheap tickets more than 3 months before
                departure. </p>
        </div>
        <div class="flex-1 flex justify-center">
            <img src='https://img.freepik.com/free-photo/3d-car-with-vibrant-colors_23-2150797034.jpg?size=626&ext=jpg&ga=GA1.1.969358918.1707215966&semt=sph'
                alt="" class="">
        </div>





    </div>



</section>


@include('layouts.footer')
