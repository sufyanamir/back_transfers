@include('layouts.header')

<section class=" w-full py-20 bg-black">
    <div>
       <h1 class="text-white max-w-[1030px] mx-auto  capitalize text-4xl font-montserrat font-semibold">Business Class</h1>
       <div>
        <ul class="text-white flex gap-2 max-w-[1030px] mx-auto">
            <li><a href="/">Home</a></li>/
            <li><a href="">Our Fleet</a></li>
        </ul>
       </div>
    </div>

</section>
<div>
    <img src={{asset('assets/icons/servicesingle.png')}} alt="" class="w-full">
</div>

{{--  --}}
<section class="max-w-[1130px] mx-auto px-20 mt-20">
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

<section class="max-w-[1230px] px-20 mx-auto my-10">
    <div class="flex gap-10 flex-wrap">



        <div class="flex-1">
            <img src={{asset('assets/icons/fleetslide.png')}} alt="" class="">
        </div>
        <div class="flex-1">
            <img src={{asset('assets/icons/fleetslide.png')}} alt="">
        </div>
    </div>



</section>


{{--  --}}
<section class="lg:w-[1230px] w-full lg:mx-auto grid px-20 gap-4 md:grid-cols-2 lg:grid-cols-3 py-20  mt-10">
    <x-trip-card :img="'assets/icons/dol.svg'" :title="'All-inclusive pricing'" :desc="'Both you and your shipments will travel with professional drivers. Always with the highest quality standards.'"></x-trip-card>
    <x-trip-card :img="'assets/icons/plane2.svg'" :title="'Seamless airport travel'" :desc="'Both you and your shipments will travel with professional drivers. Always with the highest quality standards.'"></x-trip-card>
    <x-trip-card :img="'assets/icons/timer.svg'" :title="'Travel on your terms'" :desc="'Both you and your shipments will travel with professional drivers. Always with the highest quality standards.'"></x-trip-card>




</section>
{{--  --}}
<section class="lg:w-[1230px] w-full lg:mx-auto grid px-20 gap-4 md:grid-cols-2 lg:grid-cols-3  ">
    <x-trip-card :img="'assets/icons/dol.svg'" :title="'All-inclusive pricing'" :desc="'Both you and your shipments will travel with professional drivers. Always with the highest quality standards.'"></x-trip-card>
    <x-trip-card :img="'assets/icons/plane2.svg'" :title="'Seamless airport travel'" :desc="'Both you and your shipments will travel with professional drivers. Always with the highest quality standards.'"></x-trip-card>
    <x-trip-card :img="'assets/icons/timer.svg'" :title="'Travel on your terms'" :desc="'Both you and your shipments will travel with professional drivers. Always with the highest quality standards.'"></x-trip-card>




</section>

{{--  --}}
 <div class="max-w-[1030px] mx-auto py-10">
    <h1 class="text-3xl font-montserrat font-semibold text-center">Explore Our Fleet</h1>
 </div>
<section class="max-w-[1030px] mx-auto flex gap-20 flex-wrap justify-center py-10">


    <x-cards></x-cards>
    <x-cards></x-cards>
    <x-cards></x-cards>
</section>
@include('layouts.footer')
