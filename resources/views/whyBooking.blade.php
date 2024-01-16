@include('layouts.header')
<main class="max-w-full m-auto p-5">
    <div class="vehicals    pt-10 font-montserrat grid md:grid-cols-2 gap-5 lg:grid-cols-4">
        <div class=" flex items-center  border border-b-gray-800 justify-between  max-w-[300px] p-4">
            <div>
                <img src={{asset('assets/icons/booking.svg')}} alt="">
            </div>
            <div>
                <span class="text-2xl">Vehicle</span>
            </div>
              <span class="text-3xl font-bold">01</span>

        </div>
        {{--  --}}
        <div class=" flex items-center justify-between border border-b-gray-800  max-w-[300px] p-4">
            <div>
                <img src={{asset('assets/icons/extras.svg')}} alt="">
            </div>
            <div>
                <span class="text-2xl">Extras</span>
            </div>
              <span class="text-3xl font-bold">02</span>

        </div>
        <div class=" flex items-center justify-between border  border-b-gray-800 max-w-[300px] p-4">
            <div>
                <img src={{asset('assets/icons/details.svg')}} alt="">
            </div>
            <div>
                <span class="text-2xl">Details</span>
            </div>
              <span class="text-3xl font-bold">03</span>

        </div>
        <div class=" flex items-center justify-between  border border-b-gray-800
         max-w-[300px] p-4">
            <div>
                <img src={{asset('assets/icons/payment.png')}} alt="">
            </div>
            <div>
                <span class="text-2xl">payment</span>
            </div>
              <span class="text-3xl font-bold">04</span>

        </div>


    </div>
    {{-- car cards --}}
    <section class="max-w-full m-auto  py-10">
        <div>
            <x-cardCards></x-cardCards>
        </div>

    </section>


</main>






@include('layouts.footer')
