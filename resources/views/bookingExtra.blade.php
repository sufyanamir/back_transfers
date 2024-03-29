@include('layouts.header')

<main class="max-w-full m-auto p-5">

    <section>
        <div class="vehicals  max-w-[1130px] mx-auto  pt-10 font-montserrat grid md:grid-cols-2 gap-5 lg:grid-cols-4">
            <div class=" flex items-center   border-b-2 border-b-gray-800 justify-between w-full  lg:max-w-[300px] p-4">
                <div class="flex items-center gap-3">
                    <img src={{ asset('assets/icons/booking.svg') }} alt="">
                    <div>
                        <span class="text-lg">Vehicle</span>
                    </div>
                </div>

                <span class="text-3xl font-bold">01</span>

            </div>
            {{--  --}}
            <div class=" flex items-center justify-between border-b-2 border-b-black  w-full lg:max-w-[300px] p-4">
                <div class="flex items-center gap-3">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="60" height="60" rx="30" fill="black"/>
                        <g clip-path="url(#clip0_112_3105)">
                        <path d="M19.8594 26.1328H32.9272C33.323 27.9724 34.9619 29.3555 36.918 29.3555C39.1688 29.3555 41 27.5243 41 25.2734C41 23.0226 39.1688 21.1914 36.918 21.1914C34.9619 21.1914 33.323 22.5745 32.9272 24.4141H19.8594C19.3847 24.4141 19 24.7988 19 25.2734C19 25.7481 19.3847 26.1328 19.8594 26.1328ZM36.918 22.9102C38.2211 22.9102 39.2812 23.9703 39.2812 25.2734C39.2812 26.5766 38.2211 27.6367 36.918 27.6367C35.6148 27.6367 34.5547 26.5766 34.5547 25.2734C34.5547 23.9703 35.6148 22.9102 36.918 22.9102ZM40.1406 33.8672H27.0728C26.677 32.0276 25.0381 30.6445 23.082 30.6445C20.8312 30.6445 19 32.4757 19 34.7266C19 36.9774 20.8312 38.8086 23.082 38.8086C25.0381 38.8086 26.677 37.4255 27.0728 35.5859H40.1406C40.6153 35.5859 41 35.2012 41 34.7266C41 34.2519 40.6153 33.8672 40.1406 33.8672ZM23.082 37.0898C21.7789 37.0898 20.7188 36.0297 20.7188 34.7266C20.7188 33.4234 21.7789 32.3633 23.082 32.3633C24.3852 32.3633 25.4453 33.4234 25.4453 34.7266C25.4453 36.0297 24.3852 37.0898 23.082 37.0898Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_112_3105">
                        <rect width="22" height="22" fill="white" transform="translate(19 19)"/>
                        </clipPath>
                        </defs>
                        </svg>

                    <div>
                        <span class="text-lg">Extras</span>
                    </div>
                </div>

                <span class="text-3xl font-bold">02</span>

            </div>
            <div class=" flex items-center justify-between border-b-2 border-b-gray-200 w-full lg:max-w-[300px] p-4">
                <div class="flex items-center gap-3">
                    <img src={{ asset('assets/icons/details.svg') }} alt="">
                    <div>
                        <span class="text-lg">Details</span>
                    </div>
                </div>

                <span class="text-3xl font-bold">03</span>

            </div>
            <div
                class=" flex items-center justify-between border-b-2 border-b-gray-200
             w-full lg:max-w-[300px] p-4">
                <div class="flex items-center gap-3">
                    <img src={{ asset('assets/icons/payment.png') }} alt="">
                    <div>
                        <span class="text-lg">payment</span>
                    </div>
                </div>

                <span class="text-3xl font-bold">04</span>

            </div>


        </div>
    </section>



    <section class="py-20 max-w-[1430px] m-auto">
        <div>
            <h1 class="font-montserrat text-3xl font-semibold capitalize ml-28">extra options</h1>
        </div>

        <div class="flex flex-wrap justify-evenly gap-10 mt-5">

            <div class="flex flex-col gap-8">
                <div class="flex flex-col">
                    <x-input :type="'text'" :label="'Flight/train number'"></x-input>
                </div>
                {{-- child seat --}}
                <div class="flex flex-wrap justify-between  font-montserrat mt-5">
                    <div class="flex flex-col gap-4">
                        <div class="flex   items-center gap-3">
                            <span class="font-bold text-2xl font-montserrat">Child Seat</span>
                            <div class="flex items-center justify-center bg-orange gap-3 w-20 h-10 rounded-full">
                                <span class="text-white font-semibold font-montserrat">$12</span>
                            </div>
                        </div>
                        <div>
                            <p>Suitable for toddlers weighing 0-18 kg (approx 0 to 4 years).</p>
                        </div>

                    </div>
                    {{-- buttons --}}
                    <div class="flex  justify-center gap-3">
                        <div
                            class="w-10 h-10  rounded-full  border border-slate-500 text-black flex items-center justify-center">
                            <span class="  text-lg">-</span>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full  border border-slate-500 text-black flex items-center justify-center">
                            <span>1</span>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full  border border-slate-500 text-black flex items-center justify-center">
                            <span>+</span>
                        </div>



                    </div>


                </div>
                <hr class="mt-5">

                {{-- booster seat --}}
                <div class="flex flex-wrap justify-between  font-montserrat mt-5">
                    <div class="flex flex-col gap-4">
                        <div class="flex  items-center gap-3">
                            <span class="font-bold text-2xl font-montserrat">Child Seat</span>
                            <div class="flex items-center justify-center bg-orange gap-3 w-20 h-10 rounded-full">
                                <span class="text-white">$12</span>
                            </div>
                        </div>
                        <div>
                            <p>Suitable for toddlers weighing 0-18 kg (approx 0 to 4 years).</p>
                        </div>

                    </div>
                    {{-- buttons --}}
                    <div class="flex  gap-3">
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>-</span>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>1</span>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>+</span>
                        </div>



                    </div>


                </div>
                <hr class="mt-5">
                {{-- vodaka bottle --}}
                <div class="flex flex-wrap justify-between font-montserrat mt-5">
                    <div class="flex flex-col gap-4">
                        <div class="flex  items-center gap-3">
                            <span class="font-bold text-2xl font-montserrat">Child Seat</span>
                            <div class="flex items-center justify-center bg-orange gap-3 w-20 h-10 rounded-full">
                                <span class="text-white">$12</span>
                            </div>
                        </div>
                        <div>
                            <p>Suitable for toddlers weighing 0-18 kg (approx 0 to 4 years).</p>
                        </div>

                    </div>
                    {{-- buttons --}}
                    <div class="flex  gap-3 text-white">
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>-</span>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>1</span>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>+</span>
                        </div>



                    </div>


                </div>
                <hr class="mt-5">
                {{-- flowers --}}
                <div class="flex flex-wrap justify-between  font-montserrat mt-5">
                    <div class="flex flex-col gap-4">
                        <div class="flex  items-center gap-3">
                            <span class="font-bold text-2xl font-montserrat">Child Seat</span>
                            <div class="flex items-center justify-center bg-orange gap-3 w-20 h-10 rounded-full">
                                <span class="text-white">$12</span>
                            </div>
                        </div>
                        <div>
                            <p>Suitable for toddlers weighing 0-18 kg (approx 0 to 4 years).</p>
                        </div>

                    </div>
                    {{-- buttons --}}
                    <div class="flex  gap-3 text-white">
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>-</span>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>1</span>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>+</span>
                        </div>



                    </div>


                </div>
                <hr class="mt-5">
                {{-- alcohal --}}
                <div class="flex flex-wrap justify-between  font-montserrat mt-5">
                    <div class="flex flex-col gap-4">
                        <div class="flex  items-center gap-3">
                            <span class="font-bold text-2xl font-montserrat">Child Seat</span>
                            <div class="flex items-center justify-center bg-orange gap-3 w-20 h-10 rounded-full">
                                <span class="text-white">$12</span>
                            </div>
                        </div>
                        <div>
                            <p>Suitable for toddlers weighing 0-18 kg (approx 0 to 4 years).</p>
                        </div>

                    </div>
                    {{-- buttons --}}
                    <div class="flex  gap-3 text-white">
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>-</span>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>1</span>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>+</span>
                        </div>



                    </div>


                </div>
                <hr class="mt-5">
                {{-- airpot --}}
                <div class="flex flex-wrap justify-between  font-montserrat mt-5">
                    <div class="flex flex-col gap-4">
                        <div class="flex  items-center gap-3">
                            <span class="font-bold text-2xl font-montserrat">Child Seat</span>
                            <div class="flex items-center justify-center bg-orange gap-3 w-20 h-10 rounded-full">
                                <span class="text-white">$12</span>
                            </div>
                        </div>
                        <div>
                            <p>Suitable for toddlers weighing 0-18 kg (approx 0 to 4 years).</p>
                        </div>

                    </div>
                    {{-- buttons --}}
                    <div class="flex  gap-3 text-white">
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>-</span>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>1</span>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>+</span>
                        </div>



                    </div>


                </div>
                <hr class="mt-5">
                {{-- body guard service --}}
                <div class="flex flex-wrap justify-between  font-montserrat mt-5">
                    <div class="flex flex-col gap-4">
                        <div class="flex  items-center gap-3">
                            <span class="font-bold text-2xl font-montserrat">Child Seat</span>
                            <div class="flex items-center justify-center bg-orange gap-3 w-20 h-10 rounded-full">
                                <span class="text-white">$12</span>
                            </div>
                        </div>
                        <div>
                            <p>Suitable for toddlers weighing 0-18 kg (approx 0 to 4 years).</p>
                        </div>

                    </div>
                    {{-- buttons --}}
                    <div class="flex  gap-3 text-white">
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>-</span>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>1</span>
                        </div>
                        <div
                            class="w-10 h-10 rounded-full border border-slate-500 text-black flex items-center justify-center">
                            <span>+</span>
                        </div>



                    </div>


                </div>
                <hr class="mt-5">
                <div>
                    <x-input :type="'text'" :label="'Notes For Chauffer'"></x-input>
                </div>
                <div>
                    <button class="w-full bg-black text-white py-6 rounded-xl">Continue</button>
                </div>




            </div>

            <div>



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
                                    <span class="text-white">A</span>
                                </div>
                                <div class="font-semibold">Manchester, UK</div>
                            </div>
                            {{--  --}}
                            <div class="flex gap-5 items-center">
                                <div class="bg-orange flex items-center justify-center w-10 h-10 rounded-full">
                                    <span class="text-white">B</span>
                                </div>
                                <div class="font-semibold">London, UK</div>
                            </div>
                            {{--  --}}
                            <div class="flex gap-5 items-center">
                                <div class="bg-orange flex items-center justify-center w-10 h-10 rounded-full">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5205 3.17778H16.2127V1.22223H14.9111V3.17778H7.08884V1.22223H5.78717V3.17778H4.47939C3.61602 3.1794 2.78847 3.52309 2.17797 4.13359C1.56747 4.74409 1.22378 5.57163 1.22217 6.43501V17.5206C1.22378 18.3839 1.56747 19.2115 2.17797 19.822C2.78847 20.4325 3.61602 20.7762 4.47939 20.7778H17.5205C18.3839 20.7762 19.2114 20.4325 19.8219 19.822C20.4324 19.2115 20.7761 18.3839 20.7777 17.5206V6.43501C20.7761 5.57163 20.4324 4.74409 19.8219 4.13359C19.2114 3.52309 18.3839 3.1794 17.5205 3.17778ZM19.4761 17.5206C19.4761 18.0392 19.27 18.5366 18.9033 18.9034C18.5366 19.2701 18.0391 19.4761 17.5205 19.4761H4.47939C3.96074 19.4761 3.46334 19.2701 3.0966 18.9034C2.72987 18.5366 2.52383 18.0392 2.52383 17.5206V6.43501C2.52383 5.91636 2.72987 5.41896 3.0966 5.05222C3.46334 4.68548 3.96074 4.47945 4.47939 4.47945H5.78717V6.43501H7.08884V4.47945H14.9111V6.43501H16.2127V4.47945H17.5144C18.033 4.47945 18.5304 4.68548 18.8972 5.05222C19.2639 5.41896 19.4699 5.91636 19.4699 6.43501L19.4761 17.5206Z"
                                            fill="#fff" />
                                        <path
                                            d="M16.2126 12.3016H13.6093C13.2641 12.3016 12.933 12.4388 12.6889 12.6829C12.4448 12.927 12.3076 13.2581 12.3076 13.6033V16.2127C12.3076 16.558 12.4448 16.8891 12.6889 17.1332C12.933 17.3773 13.2641 17.5144 13.6093 17.5144H16.2187C16.564 17.5144 16.895 17.3773 17.1391 17.1332C17.3833 16.8891 17.5204 16.558 17.5204 16.2127V13.6094C17.5204 13.2642 17.3833 12.9331 17.1391 12.689C16.895 12.4449 16.564 12.3077 16.2187 12.3077L16.2126 12.3016ZM16.2126 16.2127H13.6093V13.6094H16.2187L16.2126 16.2127Z"
                                            fill="#fff" />
                                    </svg>
                                </div>
                                <div class="font-semibold">Thu, Oct 06, 2022</div>
                            </div>
                            {{--  --}}
                            <div class="flex gap-5 items-center">
                                <div class="bg-orange flex items-center justify-center w-10 h-10 rounded-full">
                                    <span class="text-white">A</span>
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
