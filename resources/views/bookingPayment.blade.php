@include('layouts.header')

<main class="max-w-full m-auto p-5">

    <section>
        <div class="vehicals    pt-10 font-montserrat grid md:grid-cols-2 gap-5 lg:grid-cols-4">
            <div class=" flex items-center   border-b-2 border-b-gray-800 justify-between w-full  lg:max-w-[300px] p-4">
                <div>
                    <img src={{ asset('assets/icons/booking.svg') }} alt="">
                </div>
                <div>
                    <span class="text-2xl">Vehicle</span>
                </div>
                <span class="text-3xl font-bold">01</span>

            </div>
            {{--  --}}
            <div class=" flex items-center justify-between border-b-2 border-b-gray-800  w-full lg:max-w-[300px] p-4">
                <div>
                    <img src={{ asset('assets/icons/extras.svg') }} alt="">
                </div>
                <div>
                    <span class="text-2xl">Extras</span>
                </div>
                <span class="text-3xl font-bold">02</span>

            </div>
            <div class=" flex items-center justify-between border-b-2 border-b-gray-800  w-full lg:max-w-[300px] p-4">
                <div>
                    <img src={{ asset('assets/icons/details.svg') }} alt="">
                </div>
                <div>
                    <span class="text-2xl">Details</span>
                </div>
                <span class="text-3xl font-bold">03</span>

            </div>
            <div
                class=" flex items-center justify-between border-b-2 border-b-gray-800
             w-full lg:max-w-[300px] p-4">
                <div>
                    <img src={{ asset('assets/icons/payment.png') }} alt="">
                </div>
                <div>
                    <span class="text-2xl">payment</span>
                </div>
                <span class="text-3xl font-bold">04</span>

            </div>


        </div>
    </section>



    <section class="py-20 max-w-full m-auto">
        <div class="max-w-[1130px] mx-auto">
            <h1 class="font-montserrat text-3xl font-semibold capitalize">Passenger Details</h1>
        </div>

        <div class="md:flex flex-wrap gap-10 max-w-[1130px] mx-auto  mt-5">
            {{-- first div --}}
            <div class="flex-1">
                <div class=" flex flex-col gap-5">
                    <div class="grid lg:grid-cols-2 gap-2">


                        <div>
                            <x-input :type="'text'" :label="'Name'"></x-input>
                        </div>
                        <div>
                            <x-input :type="'text'" :label="'Last Name'"></x-input>
                        </div>
                    </div>

                    {{-- 2nd --}}
                    <div class="grid lg:grid-cols-1 gap-2">


                        <div>
                            <x-input :type="'text'" :label="'company'"></x-input>
                        </div>

                    </div>
                    {{--  --}}
                    <div class="grid lg:grid-cols-1 gap-2">


                        <div>
                            <x-input :type="'text'" :label="'address'"></x-input>
                        </div>

                    </div>
                    {{--  --}}

                    <div class="grid lg:grid-cols-3 gap-2">
                        <div>
                            <select name="passengers" id="" class="bg-slate-100 w-full   mt-4 h-[55px] rounded-[6px] border-none font-montserrat">
                                <option value="">city</option>
                            </select>
                        </div>
                        <div>
                            <select name="passengers" id="" class="bg-slate-100 w-full  mt-4 h-[55px] rounded-[6px] border-none font-montserrat">
                                <option value="">country</option>
                            </select>

                        </div>
                        <div>
                            <x-input :type="'text'" :label="'Zip Postal/Code'"></x-input>
                        </div>



                    </div>
                    <div class="grid grid-cols-1 gap-2">


                        <div>
                            <h1>Select Payment Method</h1>
                        </div>

                    </div>
                    <div class="grid grid-cols-1 gap-2">


                        <div>

                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
                                option</label>
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 h-[55px] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Credit card</option>

                            </select>

                        </div>

                    </div>
                    {{--  --}}
                    <div class="grid grid-cols-1 gap-2">


                        <div>
                            <h1>cardit card payment</h1>
                        </div>

                    </div>
                    <div class="grid grid-cols-1 gap-2">


                        <div>
                            <input type="text" placeholder="Card Holder Name"
                                class="bg-gray-200 h-14 border-none outline-none w-full rounded-lg ">
                        </div>

                    </div>
                    <div class="grid grid-cols-1 gap-2">


                        <div>
                            <input type="text" placeholder="Card Name"
                                class="bg-gray-200 h-14 border-none outline-none w-full rounded-lg ">
                        </div>

                    </div>
                    <div class="grid lg:grid-cols-4 gap-2">
                        <div>

                            <label for="countries"
                            class="block mb-2 text-sm font-medium h-2 text-gray-900 dark:text-white">
                            </label>
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 h-[55px] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Month</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>

                        </div>
                        <div>
                            <label for="countries"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white h-2">
                            </label>

                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 h-[55px] text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Year</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>


                        </div>
                        <div class="col-span-2">

                            <x-input :type="'text'" :label="'Cvv'"></x-input>

                        </div>



                    </div>
                    {{-- logoo --}}

                    <div>
                        <div>

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
            <div class="flex-1">
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
                                    <span><img src={{ asset('assets/icons/date.svg') }} alt=""></span>
                                </div>
                                <div class="font-semibold">Thu, Oct 06, 2022</div>
                            </div>
                            {{--  --}}
                            <div class="flex gap-5 items-center">
                                <div class="bg-orange flex items-center justify-center w-10 h-10 rounded-full">
                                    <span>A</span>
                                </div>
                                <div class="font-semibold">6 PM : 15</div>
                            </div>
                        </div>
                        {{-- map div --}}
                        <div>
                            <div style="width: 100%"><iframe width="100%" height="300" frameborder="0"
                                    scrolling="no" marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=current%20location+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                        href="https://www.maps.ie/population/">Population calculator map</a></iframe>
                            </div>
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
                            <p class="font-semibold">1 x Child Seat - $5.00</p>
                            <p class="font-semibold">1 x Bouquet of Flowers - $75.00</p>
                            <p class="font-semibold">2 x Vodka Bottle - $78.00</p>
                            <p class="font-semibold">1 x Bodyguard Service - $750.00</p>



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
