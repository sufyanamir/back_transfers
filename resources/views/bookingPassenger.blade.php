@include('layouts.header')

  <main class="max-w-full m-auto p-5">

    <section>
        <div class="vehicals  max-w-[1130px] mx-auto  pt-10 font-montserrat grid md:grid-cols-2 gap-5 lg:grid-cols-4">
            <div class=" flex items-center   border-b-2 border-b-gray-800 justify-between w-full  lg:max-w-[300px] p-4">
                <div class="flex items-center gap-3">
                    <img src={{ asset('assets/icons/booking.svg') }} alt="booking">
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
            <div class=" flex items-center justify-between border-b-2 border-b-black w-full lg:max-w-[300px] p-4">
                <div class="flex items-center gap-3">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="60" height="60" rx="30" fill="black"/>
                        <path d="M32.4671 30.6692C31.412 30.6692 30.3807 30.3563 29.5034 29.7701C28.6261 29.184 27.9424 28.3508 27.5386 27.376C27.1349 26.4013 27.0292 25.3287 27.2351 24.2939C27.4409 23.2591 27.949 22.3085 28.695 21.5625C29.4411 20.8164 30.3916 20.3083 31.4264 20.1025C32.4612 19.8967 33.5338 20.0023 34.5086 20.4061C35.4833 20.8098 36.3165 21.4936 36.9027 22.3708C37.4888 23.2481 37.8017 24.2795 37.8017 25.3346C37.8001 26.7489 37.2375 28.1048 36.2374 29.1049C35.2373 30.1049 33.8814 30.6675 32.4671 30.6692ZM32.4671 21.3321C31.6755 21.3321 30.9017 21.5668 30.2435 22.0066C29.5853 22.4464 29.0722 23.0715 28.7693 23.8029C28.4664 24.5343 28.3871 25.339 28.5415 26.1154C28.696 26.8918 29.0772 27.605 29.6369 28.1648C30.1967 28.7245 30.9099 29.1057 31.6863 29.2602C32.4627 29.4146 33.2675 29.3353 33.9988 29.0324C34.7302 28.7295 35.3553 28.2165 35.7951 27.5583C36.2349 26.9 36.4696 26.1262 36.4696 25.3346C36.4696 24.2725 36.0481 23.2538 35.2977 22.5022C34.5473 21.7506 33.5292 21.3275 32.4671 21.3258V21.3321Z" fill="white"/>
                        <path d="M38.0143 40.006H26.9261C26.6139 40.0065 26.3058 39.9339 26.0266 39.7941C25.7474 39.6542 25.5048 39.4509 25.3182 39.2005C25.1316 38.9501 25.0062 38.6595 24.952 38.352C24.8979 38.0445 24.9164 37.7285 25.0062 37.4294L25.6316 35.3281C25.916 34.3641 26.5058 33.5185 27.3122 32.9185C28.1186 32.3185 29.098 31.9965 30.1031 32.001H34.8186C35.8237 31.9965 36.8031 32.3185 37.6095 32.9185C38.4159 33.5185 39.0056 34.3641 39.2901 35.3281L39.9155 37.4294C40.0048 37.727 40.0236 38.0413 39.9705 38.3474C39.9173 38.6535 39.7936 38.943 39.6091 39.193C39.4246 39.443 39.1845 39.6467 38.9077 39.7878C38.6309 39.9289 38.325 40.0036 38.0143 40.006ZM30.1094 33.3331C29.3911 33.3295 28.6911 33.5593 28.1148 33.9879C27.5384 34.4165 27.1169 35.0207 26.9136 35.7096L26.2882 37.8109C26.2595 37.9093 26.2537 38.013 26.2713 38.1139C26.289 38.2149 26.3296 38.3105 26.39 38.3933C26.4504 38.476 26.5291 38.5438 26.6199 38.5914C26.7107 38.639 26.8112 38.6651 26.9136 38.6677H38.0143C38.1175 38.6654 38.2187 38.6392 38.3101 38.5913C38.4015 38.5433 38.4806 38.4749 38.5411 38.3913C38.6017 38.3078 38.6421 38.2113 38.6592 38.1095C38.6763 38.0078 38.6696 37.9034 38.6397 37.8046L38.0143 35.7033C37.811 35.0144 37.3895 34.4102 36.8131 33.9816C36.2368 33.553 35.5368 33.3232 34.8186 33.3269L30.1094 33.3331Z" fill="white"/>
                        <path d="M26.676 30.5881H26.5509C25.3272 30.3595 24.2219 29.7101 23.4266 28.7525C22.6312 27.7948 22.1958 26.5891 22.1958 25.3442C22.1958 24.0993 22.6312 22.8936 23.4266 21.9359C24.2219 20.9782 25.3272 20.3288 26.5509 20.1003C26.6389 20.0793 26.7303 20.0764 26.8194 20.0917C26.9086 20.107 26.9937 20.1402 27.0696 20.1894C27.1456 20.2385 27.2108 20.3025 27.2613 20.3776C27.3118 20.4526 27.3465 20.5371 27.3635 20.626C27.3804 20.7148 27.3791 20.8062 27.3597 20.8946C27.3404 20.9829 27.3033 21.0664 27.2507 21.1401C27.1981 21.2137 27.1312 21.2759 27.0539 21.3229C26.9766 21.3699 26.8906 21.4008 26.8011 21.4136C25.8874 21.5892 25.0633 22.0776 24.4707 22.795C23.8781 23.5123 23.5539 24.4137 23.5539 25.3442C23.5539 26.2746 23.8781 27.176 24.4707 27.8934C25.0633 28.6107 25.8874 29.0992 26.8011 29.2747C26.9582 29.3121 27.0965 29.4049 27.1905 29.5361C27.2845 29.6674 27.3279 29.8282 27.3127 29.989C27.2974 30.1497 27.2246 30.2995 27.1076 30.4107C26.9906 30.522 26.8373 30.5872 26.676 30.5943V30.5881Z" fill="white"/>
                        <path d="M23.3365 40.0062H22.0044C21.6922 40.0067 21.3841 39.9341 21.1049 39.7942C20.8257 39.6543 20.5831 39.4511 20.3965 39.2007C20.2099 38.9503 20.0845 38.6597 20.0304 38.3521C19.9762 38.0446 19.9947 37.7287 20.0845 37.4296L20.7099 35.3283C20.9946 34.3632 21.5854 33.5168 22.393 32.9167C23.2007 32.3166 24.1815 31.9953 25.1877 32.0012C25.2806 31.9922 25.3743 32.0027 25.4629 32.0321C25.5515 32.0614 25.6329 32.109 25.702 32.1717C25.7711 32.2344 25.8264 32.3109 25.8642 32.3963C25.9019 32.4816 25.9215 32.5739 25.9215 32.6672C25.9215 32.7605 25.9019 32.8528 25.8642 32.9382C25.8264 33.0235 25.7711 33.1 25.702 33.1627C25.6329 33.2254 25.5515 33.273 25.4629 33.3024C25.3743 33.3317 25.2806 33.3423 25.1877 33.3333C24.4694 33.3296 23.7695 33.5594 23.1931 33.988C22.6167 34.4166 22.1952 35.0208 21.9919 35.7097L21.3665 37.811C21.3378 37.9094 21.332 38.0131 21.3496 38.1141C21.3673 38.215 21.4079 38.3106 21.4683 38.3934C21.5287 38.4762 21.6074 38.544 21.6982 38.5916C21.789 38.6392 21.8895 38.6652 21.9919 38.6678H23.3365C23.4294 38.6588 23.5232 38.6693 23.6117 38.6987C23.7003 38.7281 23.7818 38.7757 23.8509 38.8384C23.92 38.9011 23.9752 38.9776 24.013 39.0629C24.0508 39.1483 24.0703 39.2406 24.0703 39.3339C24.0703 39.4272 24.0508 39.5195 24.013 39.6048C23.9752 39.6902 23.92 39.7666 23.8509 39.8294C23.7818 39.8921 23.7003 39.9397 23.6117 39.969C23.5232 39.9984 23.4294 40.0089 23.3365 39.9999V40.0062Z" fill="white"/>
                        </svg>

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
                    <img src={{ asset('assets/icons/payment.png') }} alt="payment">
                    <div>
                        <span class="text-lg">payment</span>
                    </div>
                </div>

                <span class="text-3xl font-bold">04</span>

            </div>


        </div>
       </section>



       <section class="py-20 max-w-full m-auto">
        <div class="max-w-[1130px] mx-auto">
            <h1 class="font-montserrat  text-3xl font-semibold capitalize">Passenger Details</h1>
        </div>

        <div class="md:flex flex-wrap gap-5 max-w-[1130px] mx-auto  mt-5">
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

                   {{--  --}}
                   <div class="grid lg:grid-cols-2 gap-2">


                    <div>
                        <x-input :type="'email'" :label="'Email Address'"></x-input>
                    </div>
                    <div>
                        <x-input :type="'number'" :label="'Phone Number'"></x-input>
                    </div>
                   </div>
                   {{--  --}}
                   <h1 class="text-2xl font-bold font-montserrat">Options</h1>
                   <div class="grid lg:grid-cols-2 gap-2">


                    <div>
                        <select name="passengers" id="" class="bg-slate-100 w-full h-[55px] rounded-[6px] border-none font-montserrat">
                            <option value="">passengers</option>
                        </select>
                    </div>
                    <div>
                        <select name="lagguage" id="" class="bg-slate-100 w-full h-[55px] rounded-[6px] border-none font-montserrat">
                            <option value="">Luggage</option>
                        </select>
                    </div>
                   </div>
                 {{--  --}}
                 <div class="grid lg:grid-cols-2 gap-2">




                   </div>
                 <div class="grid grid-cols-1 gap-2">


                    <div>
                        <x-input :type="'text'" :label="'Notes For Driver'"></x-input>
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
           <div class="flex-2">
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
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5205 3.17778H16.2127V1.22223H14.9111V3.17778H7.08884V1.22223H5.78717V3.17778H4.47939C3.61602 3.1794 2.78847 3.52309 2.17797 4.13359C1.56747 4.74409 1.22378 5.57163 1.22217 6.43501V17.5206C1.22378 18.3839 1.56747 19.2115 2.17797 19.822C2.78847 20.4325 3.61602 20.7762 4.47939 20.7778H17.5205C18.3839 20.7762 19.2114 20.4325 19.8219 19.822C20.4324 19.2115 20.7761 18.3839 20.7777 17.5206V6.43501C20.7761 5.57163 20.4324 4.74409 19.8219 4.13359C19.2114 3.52309 18.3839 3.1794 17.5205 3.17778ZM19.4761 17.5206C19.4761 18.0392 19.27 18.5366 18.9033 18.9034C18.5366 19.2701 18.0391 19.4761 17.5205 19.4761H4.47939C3.96074 19.4761 3.46334 19.2701 3.0966 18.9034C2.72987 18.5366 2.52383 18.0392 2.52383 17.5206V6.43501C2.52383 5.91636 2.72987 5.41896 3.0966 5.05222C3.46334 4.68548 3.96074 4.47945 4.47939 4.47945H5.78717V6.43501H7.08884V4.47945H14.9111V6.43501H16.2127V4.47945H17.5144C18.033 4.47945 18.5304 4.68548 18.8972 5.05222C19.2639 5.41896 19.4699 5.91636 19.4699 6.43501L19.4761 17.5206Z" fill="#fff"/>
                                    <path d="M16.2126 12.3016H13.6093C13.2641 12.3016 12.933 12.4388 12.6889 12.6829C12.4448 12.927 12.3076 13.2581 12.3076 13.6033V16.2127C12.3076 16.558 12.4448 16.8891 12.6889 17.1332C12.933 17.3773 13.2641 17.5144 13.6093 17.5144H16.2187C16.564 17.5144 16.895 17.3773 17.1391 17.1332C17.3833 16.8891 17.5204 16.558 17.5204 16.2127V13.6094C17.5204 13.2642 17.3833 12.9331 17.1391 12.689C16.895 12.4449 16.564 12.3077 16.2187 12.3077L16.2126 12.3016ZM16.2126 16.2127H13.6093V13.6094H16.2187L16.2126 16.2127Z" fill="#fff"/>
                                    </svg>
                            </div>
                            <div class="font-semibold">Thu, Oct 06, 2022</div>
                        </div>
                        {{--  --}}
                        <div class="flex gap-5 items-center">
                            <div class="bg-orange flex items-center justify-center w-10 h-10 rounded-full">
                                <span class="text-white">A</span>
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
