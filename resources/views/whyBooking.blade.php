@include('layouts.header')
<main class="max-w-full m-auto p-5">
    <div class="vehicals  max-w-[1130px] mx-auto  pt-10 font-montserrat grid md:grid-cols-2 gap-5 lg:grid-cols-4">
        <div class=" flex items-center   border-b-2 border-b-gray-800 justify-between w-full  lg:max-w-[300px] p-4">
            <div class="flex items-center gap-3">
                <img src={{asset('assets/icons/booking.svg')}} alt="">
                <div>
                    <span class="text-lg">Vehicle</span>
                </div>
            </div>
           
              <span class="text-3xl font-bold">01</span>

        </div>
        {{--  --}}
        <div class=" flex items-center justify-between border-b-2 border-b-gray-200  w-full lg:max-w-[300px] p-4">
            <div class="flex items-center gap-3">
                <img src={{asset('assets/icons/extras.svg')}} alt="">
                <div>
                    <span class="text-lg">Extras</span>
                </div>
            </div>
            
              <span class="text-3xl font-bold">02</span>

        </div>
        <div class=" flex items-center justify-between border-b-2 border-b-gray-200 w-full lg:max-w-[300px] p-4">
            <div class="flex items-center gap-3">
                <img src={{asset('assets/icons/details.svg')}} alt="">
                <div>
                    <span class="text-lg">Details</span>
                </div>
            </div>
            
              <span class="text-3xl font-bold">03</span>

        </div>
        <div class=" flex items-center justify-between border-b-2 border-b-gray-200
         w-full lg:max-w-[300px] p-4">
            <div class="flex items-center gap-3">
                <img src={{asset('assets/icons/payment.png')}} alt="">
                <div>
                    <span class="text-lg">payment</span>
                </div>
            </div>
            
              <span class="text-3xl font-bold">04</span>

        </div>


    </div>
    {{-- car cards --}}
    <section class="max-w-full m-auto  py-10">
       <div class="flex flex-wrap justify-evenly gap-10 ">
                       <div class="flex flex-col gap-10">
                         <x-cardcards></x-cardcards>
                         <x-cardcards></x-cardcards>
                         <x-cardcards></x-cardcards>
                         <x-cardcards></x-cardcards>
                       </div>
                       <div class="lg:max-w-[400px] w-full border border-gray-200 font-montserrat">
                        <div class="inner  p-3  flex flex-col gap-5 ">
                            <div class="flex  justify-between">
                                <h1>Ride Summary</h1>
                                <button class="capitalize">edit</button>
                            </div>
                            {{--  --}}
                            <div class="flex flex-col gap-5">
                                <div class="flex gap-5 items-center">
                                    <div class="bg-orange  text-white flex items-center justify-center w-10 h-10 rounded-full">
                                        <span>A</span>
                                    </div>
                                    <div>Manchester, UK</div>
                                </div>
                                {{--  --}}
                                <div class="flex gap-5 items-center">
                                    <div class="bg-orange flex items-center  text-white justify-center w-10 h-10 rounded-full">
                                        <span>B</span>
                                    </div>
                                    <div>London, UK</div>
                                </div>
                                {{--  --}}
                                <div class="flex gap-5 items-center">
                                    <div class="bg-orange flex items-center justify-center w-10 h-10 rounded-full">
                                        <span>
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.5205 3.17778H16.2127V1.22223H14.9111V3.17778H7.08884V1.22223H5.78717V3.17778H4.47939C3.61602 3.1794 2.78847 3.52309 2.17797 4.13359C1.56747 4.74409 1.22378 5.57163 1.22217 6.43501V17.5206C1.22378 18.3839 1.56747 19.2115 2.17797 19.822C2.78847 20.4325 3.61602 20.7762 4.47939 20.7778H17.5205C18.3839 20.7762 19.2114 20.4325 19.8219 19.822C20.4324 19.2115 20.7761 18.3839 20.7777 17.5206V6.43501C20.7761 5.57163 20.4324 4.74409 19.8219 4.13359C19.2114 3.52309 18.3839 3.1794 17.5205 3.17778ZM19.4761 17.5206C19.4761 18.0392 19.27 18.5366 18.9033 18.9034C18.5366 19.2701 18.0391 19.4761 17.5205 19.4761H4.47939C3.96074 19.4761 3.46334 19.2701 3.0966 18.9034C2.72987 18.5366 2.52383 18.0392 2.52383 17.5206V6.43501C2.52383 5.91636 2.72987 5.41896 3.0966 5.05222C3.46334 4.68548 3.96074 4.47945 4.47939 4.47945H5.78717V6.43501H7.08884V4.47945H14.9111V6.43501H16.2127V4.47945H17.5144C18.033 4.47945 18.5304 4.68548 18.8972 5.05222C19.2639 5.41896 19.4699 5.91636 19.4699 6.43501L19.4761 17.5206Z" fill="#fff"/>
                                                <path d="M16.2126 12.3016H13.6093C13.2641 12.3016 12.933 12.4388 12.6889 12.6829C12.4448 12.927 12.3076 13.2581 12.3076 13.6033V16.2127C12.3076 16.558 12.4448 16.8891 12.6889 17.1332C12.933 17.3773 13.2641 17.5144 13.6093 17.5144H16.2187C16.564 17.5144 16.895 17.3773 17.1391 17.1332C17.3833 16.8891 17.5204 16.558 17.5204 16.2127V13.6094C17.5204 13.2642 17.3833 12.9331 17.1391 12.689C16.895 12.4449 16.564 12.3077 16.2187 12.3077L16.2126 12.3016ZM16.2126 16.2127H13.6093V13.6094H16.2187L16.2126 16.2127Z" fill="#fff"/>
                                                </svg>

                                        </span>
                                    </div>
                                    <div>Thu, Oct 06, 2022</div>
                                </div>
                                {{--  --}}
                                <div class="flex gap-5 items-center">
                                    <div class="bg-orange flex text-white items-center justify-center w-10 h-10 rounded-full">
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


                            <div class="p-2 border border-gray-300 mt-10">

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
