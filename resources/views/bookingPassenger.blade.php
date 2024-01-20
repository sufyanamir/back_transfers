@include('layouts.header')

  <main class="max-w-full m-auto p-5">

    <section>
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
       </section>



       <section class="py-20 max-w-[1430px] m-auto">
        <div>
            <h1 class="font-montserrat text-3xl font-semibold capitalize">Passenger Details</h1>
        </div>

        <div class="grid lg:grid-cols-2 gap-14 mt-5">
            {{-- first div --}}
             <div>
                <div class=" flex flex-col gap-5">
                   <div class="grid lg:grid-cols-2 gap-2">


                    <div>
                        <input type="text" placeholder="Name" class="bg-gray-200 h-14 border-none outline-none w-full rounded-lg ">
                    </div>
                    <div>
                        <input type="text" placeholder=" Last Name" class="bg-gray-200 h-14 border-none outline-none w-full rounded-lg ">
                    </div>
                   </div>

                   {{--  --}}
                   <div class="grid lg:grid-cols-2 gap-2">


                    <div>
                        <input type="text" placeholder="Name" class="bg-gray-200 h-14 border-none outline-none w-full rounded-lg ">
                    </div>
                    <div>
                        <input type="text" placeholder=" Last Name" class="bg-gray-200 h-14 border-none outline-none w-full rounded-lg ">
                    </div>
                   </div>
                   {{--  --}}
                   <div class="grid lg:grid-cols-2 gap-2">


                    <div>
                        <input type="text" placeholder="Name" class="bg-gray-200 h-14 border-none outline-none w-full rounded-lg ">
                    </div>
                    <div>
                        <input type="text" placeholder=" Last Name" class="bg-gray-200 h-14 border-none outline-none w-full rounded-lg ">
                    </div>
                   </div>
                 {{--  --}}
                 <div class="grid lg:grid-cols-2 gap-2">


                   <h1 class="text-2xl font-bold font-montserrat">Options</h1>

                   </div>
                 <div class="grid grid-cols-1 gap-2">


                    <div>
                       <textarea  class="h-28 w-full bg-gray-200 border-none rounded-md" name="Notes" placeholder="Notes For Driver" id="" cols="30" rows="10"></textarea>
                    </div>

                   </div>
                   <div class="grid grid-cols-1 gap-2">


                    <div>
                        <button class="w-full bg-black text-white py-6 rounded-xl">Continue</button>
                    </div>

                   </div>



















                  </div>







             </div>
           {{-- 2nd div --}}
           <div>
            <div class="lg:max-w-[400px] w-full border border-gray-200 font-montserrat">
                <div class="inner  p-5  flex flex-col gap-5  justify-center ">
                    <div class="flex  justify-between">
                        <h1 class="font-semibold text-2xl">Ride Summary</h1>
                        <button class="capitalize">edit</button>
                    </div>
                    {{--  --}}
                    <div class="flex flex-col gap-5">
                        <div class="flex gap-5 items-center">
                            <div class="bg-orange flex items-center justify-center w-10 h-10 rounded-full">
                                <span>A</span>
                            </div>
                            <div class="font-semibold">Manchester, UK</div>
                        </div>
                        {{--  --}}
                        <div class="flex gap-5 items-center">
                            <div class="bg-orange flex items-center justify-center w-10 h-10 rounded-full">
                                <span>B</span>
                            </div>
                            <div class="font-semibold">London, UK</div>
                        </div>
                        {{--  --}}
                        <div class="flex gap-5 items-center">
                            <div class="bg-orange flex items-center justify-center w-10 h-10 rounded-full">
                                <span><img src={{asset('assets/icons/date.svg')}} alt=""></span>
                            </div>
                            <div class="font-semibold">Thu, Oct 06, 2022</div>
                        </div>
                        {{--  --}}
                        <div class="flex gap-5 items-center">
                            <div class="bg-orange flex items-center justify-center w-10 h-10 rounded-full">
                                <span>A</span>
                            </div>
                            <div class="font-semibold">6 PM  :  15</div>
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
                     <hr class="mt-5 border-1 border-gray-500">

                     <div>
                             <div class="font-montserrat capitalize">
                                <span class="text-gray-600 font-semibold">vehicals</span>
                                <p class="font-semibold text-xl">Mercedes-Benz E220</p>
                             </div>
                     </div>
                     <hr class="mt-5 border-1 border-gray-500">
                     <div class="font-montserrat capitalize flex flex-col gap-3">
                        <h4 class="text-gry text-lg font-medium">Extra Options</h4>
                        <p  class="font-semibold">1 x Child Seat - $5.00</p>
                        <p  class="font-semibold">1 x Bouquet of Flowers - $75.00</p>
                        <p  class="font-semibold">2 x Vodka Bottle - $78.00</p>
                        <p  class="font-semibold">1 x Bodyguard Service - $750.00</p>



                     </div>
                     <hr class="mt-5 border-1 border-gray-500">
                     <div class="flex flex-col flex-wrap gap-3">
                        <div class="flex justify-between font-semibold text-lg">
                            <div><span>Selected vehicle</span></div>
                            <div><span>$174</span></div>
                        </div>

                        <div class="flex justify-between  font-semibold text-lg">
                            <div><span>Selected vehicle</span></div>
                            <div><span>$174</span></div>
                        </div>

                        <hr class="mt-5 border-1 border-gray-500">

                        <div class="flex justify-between pt-10 font-semibold text-2xl">
                            <div><span>total</span></div>
                            <div><span>$909.47</span></div>
                        </div>



                     </div>


                </div>
               </div>









           </div>
        </div>






       </section>






  </main>




@include('layouts.footer')
