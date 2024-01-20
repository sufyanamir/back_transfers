@include('layouts.header')
<main class="max-w-full m-auto p-5">
    <div class="vehicals    pt-10 font-montserrat grid md:grid-cols-2 gap-5 lg:grid-cols-4">
        <div class=" flex items-center   border-b-2 border-b-gray-800 justify-between w-full  lg:max-w-[300px] p-4">
            <div>
                <img src={{asset('assets/icons/booking.svg')}} alt="">
            </div>
            <div>
                <span class="text-2xl">Vehicle</span>
            </div>
              <span class="text-3xl font-bold">01</span>

        </div>
        {{--  --}}
        <div class=" flex items-center justify-between border-b-2 border-b-gray-800  w-full lg:max-w-[300px] p-4">
            <div>
                <img src={{asset('assets/icons/extras.svg')}} alt="">
            </div>
            <div>
                <span class="text-2xl">Extras</span>
            </div>
              <span class="text-3xl font-bold">02</span>

        </div>
        <div class=" flex items-center justify-between border-b-2 border-b-gray-800  w-full lg:max-w-[300px] p-4">
            <div>
                <img src={{asset('assets/icons/details.svg')}} alt="">
            </div>
            <div>
                <span class="text-2xl">Details</span>
            </div>
              <span class="text-3xl font-bold">03</span>

        </div>
        <div class=" flex items-center justify-between border-b-2 border-b-gray-800
         w-full lg:max-w-[300px] p-4">
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
       <div class="grid gap-10 xl:grid-cols-2 xl:gap-48  2xl:grid-cols-2   ">
                       <div class="flex flex-col gap-10">
                         <x-cardCards></x-cardCards>
                         <x-cardCards></x-cardCards>
                         <x-cardCards></x-cardCards>
                         <x-cardCards></x-cardCards>
                       </div>
                       <div class="lg:max-w-[400px] w-full border border-gray-400 font-montserrat">
                        <div class="inner  p-3  flex flex-col gap-5 ">
                            <div class="flex  justify-between">
                                <h1>Ride Summary</h1>
                                <button class="capitalize">edit</button>
                            </div>
                            {{--  --}}
                            <div class="flex flex-col gap-5">
                                <div class="flex gap-5 items-center">
                                    <div class="bg-orange flex items-center justify-center w-10 h-10 rounded-full">
                                        <span>A</span>
                                    </div>
                                    <div>Manchester, UK</div>
                                </div>
                                {{--  --}}
                                <div class="flex gap-5 items-center">
                                    <div class="bg-orange flex items-center justify-center w-10 h-10 rounded-full">
                                        <span>B</span>
                                    </div>
                                    <div>London, UK</div>
                                </div>
                                {{--  --}}
                                <div class="flex gap-5 items-center">
                                    <div class="bg-orange flex items-center justify-center w-10 h-10 rounded-full">
                                        <span><img src={{asset('assets/icons/date.svg')}} alt=""></span>
                                    </div>
                                    <div>Thu, Oct 06, 2022</div>
                                </div>
                                {{--  --}}
                                <div class="flex gap-5 items-center">
                                    <div class="bg-orange flex items-center justify-center w-10 h-10 rounded-full">
                                        <span>A</span>
                                    </div>
                                    <div>6 PM  :  15</div>
                                </div>
                            </div>
                            {{-- map div --}}
                            <div>
                                <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=current%20location+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/population/">Population calculator map</a></iframe></div>
                            </div>
                            {{--  --}}
                            <div class="font-montserrat">
                                <div class="flex justify-between">
                                    <span>Total Distance</span>
                                    <span>Total Time</span>
                                </div>
                                <div class="flex justify-between font-bold">
                                    <span>311 km/ 194 miles</span>
                                    <span>3h 43m</span>
                                </div>


                            </div>
                            {{--  --}}


                            <div class="p-2 border border-gray-600 mt-10">

                                 <div class="flex flex-col gap-5">
                                    <div class="flex gap-5 items-center">
                                        <div class="bg-pink flex items-center justify-center w-10 h-10 rounded-full">
                                            <span><img src={{asset('assets/icons/good.svg')}} alt=""></span>
                                        </div>
                                        <div>+100.000 passengers transported</div>
                                    </div>
                                    {{--  --}}
                                    <div class="flex gap-5 items-center">
                                        <div class="bg-pink flex items-center justify-center w-10 h-10 rounded-full">
                                            <span><img src={{asset('assets/icons/good.svg')}} alt=""></span>
                                        </div>
                                        <div>Instant confirmation</div>
                                    </div>
                                    {{--  --}}
                                    <div class="flex gap-5 items-center">
                                        <div class="bg-pink flex items-center justify-center w-10 h-10 rounded-full">
                                            <span><img src={{asset('assets/icons/good.svg')}} alt=""></span>
                                        </div>
                                        <div>All-inclusive pricing</div>
                                    </div>
                                    {{--  --}}
                                    <div class="flex gap-5 items-center">
                                        <div class="bg-pink flex items-center justify-center w-10 h-10 rounded-full">
                                            <span><img src={{asset('assets/icons/good.svg')}} alt=""></span>
                                        </div>
                                        <div class="w-[300px]">Secure Payment by credit card, debit card or Paypal</div>
                                    </div>
                                 </div>



                            </div>

                        </div>
                       </div>
       </div>

    </section>


</main>



 {{-- <script type="text/javascript">
 function showMap(){
    var mylatlng={
        lat:25.594095,
        lng:85.137566
    }
   var map = new google.maps.Map(document.getElementById("map"),{
        zoom:5,
        center:mylatlng
    })
    new google.maps.Marker({
        position:mylatlng
        map,
    })
 }

 showMap()

 </script> --}}


@include('layouts.footer')
