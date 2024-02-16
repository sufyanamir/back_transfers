@include('layouts.header')

  <main class="w-full mx-auto">
    <section class="max-w-full m-auto pt-20">
        <div class="flex flex-col flex-wrap items-center gap-5 capitalize font-montserrat">
           <div>
            <img src={{asset('assets/icons/tik.svg')}} alt="">
           </div>
           <div class="flex  flex-wrap flex-col gap-2 items-center justify-center">
            <p class="font-semibold text-3xl font-montserrat text-center">System, your order was submitted successfully!</p>
            <div>
                <p class="text-center">Booking details has been sent to: booking@luxride.com</p>
               </div>
           </div>



        </div>



    </section>

     <section class="max-w-full mx-auto border-dotted border-2 border-gry  my-10">

      <div class="bg-gray-100 py-10 px-20  font-montserrat grid md:grid-cols-2 lg:grid-cols-4 gap-10 ">

        <div>
          <h4 class="font-semibold">Order Number</h4>
          <span>#4039</span>
        </div>
        <div>
          <h4 class="font-semibold">Date</h4>
          <span>Thu, Oct 06, 2022</span>
        </div>
        <div>
          <h4 class="font-semibold">Total</h4>
          <span>$40.10</span>
        </div>
        <div>
          <h4 class="font-semibold">Payment Method</h4>
          <span>Direct Bank Transfer</span>
        </div>

      </div>



    </section>

    <section class="max-w-[800px] m-auto  py-10  border border-gray-200 my-10 ">
      <div class="px-10 flex flex-col gap-10">
      <div>
        <h1 class="font-bold text-2xl font-montserrat">Reservation Information</h1>
      </div>
     <div class="flex flex-col flex-wrap gap-3 font-montserrat">
      <div class="grid grid-cols-2  gap-20">
        <div>
          <h3>Pick Up Address</h3>
        </div>
        <div><h3>London City Airport (LCY)</h3></div>



      </div>
      <hr class="mt-5">
      <div class="grid grid-cols-2 gap-20">
        <div>
          <h3>Drop Off Address</h3>
        </div>
        <div><h3>London City Airport (LCY)</h3></div>



      </div>
      <hr class="mt-5">
      <div class="grid grid-cols-2 gap-20">
        <div>
          <h3>Pick Up Date</h3>
        </div>
        <div><h3>Thu, Oct 06, 2022</h3></div>



      </div>
      <hr class="mt-5">
      <div class="grid grid-cols-2 gap-20">
        <div>
          <h3>Pick Up Time</h3>
        </div>
        <div><h3>6 PM  :  15</h3></div>



      </div>
      <hr class="mt-5">
      <div class="grid grid-cols-2 gap-20">
        <div>
          <h3>Distance</h3>
        </div>
        <div><h3>311 km/ 194 miles</h3></div>



      </div>
      <hr class="mt-5">
      <div class="grid grid-cols-2 gap-20">
        <div>
          <h3>Time</h3>
        </div>
        <div><h3>3h 43m</h3></div>



      </div>
      <hr class="mt-5">




     </div>



      </div>




    </section>


    <section class="w-full">
      <div class="max-w-[800px] mx-auto my-10 px-10 border border-gray-200 rounded-lg ">

        <div class="flex flex-wrap flex-col gap-5 p-10">


          <div>
            <h1>Selected Car</h1>
          </div>
          <div>
            <img src={{asset('assets/icons/selectImage.png')}} alt="" class="w-full">
          </div>
          <div class="pt-10">
            <div class="flex  flex-wrap gap-5 lg:justify-between">
              <span>class</span>
              <span>Bussiness Class</span>
            </div>
          </div>
          <hr>
          <div>
            <div class="flex flex-wrap gap-5 lg:justify-between">
              <span>class</span>
              <span>Bussiness Class</span>
            </div>
          </div>


        </div>




      </div>





    </section>

    

    {{--  --}}
    <section class="max-w-[800px] m-auto  py-10  border border-gray-200 my-10 ">
      <div class="px-10 flex flex-col gap-10">
      <div>
        <h1 class="font-bold text-2xl font-montserrat">Reservation Information</h1>
      </div>
     <div class="flex flex-col flex-wrap gap-3 font-montserrat">
      <div class="grid grid-cols-2  gap-20">
        <div>
          <h3>Pick Up Address</h3>
        </div>
        <div><h3>London City Airport (LCY)</h3></div>



      </div>
      <hr class="mt-5">
      <div class="grid grid-cols-2 gap-20">
        <div>
          <h3>Drop Off Address</h3>
        </div>
        <div><h3>London City Airport (LCY)</h3></div>



      </div>
      <hr class="mt-5">
      <div class="grid grid-cols-2 gap-20">
        <div>
          <h3>Pick Up Date</h3>
        </div>
        <div><h3>Thu, Oct 06, 2022</h3></div>



      </div>
      <hr class="mt-5">
      <div class="grid grid-cols-2 gap-20">
        <div>
          <h3>Pick Up Time</h3>
        </div>
        <div><h3>6 PM  :  15</h3></div>



      </div>
      <hr class="mt-5">
      <div class="grid grid-cols-2 gap-20">
        <div>
          <h3>Distance</h3>
        </div>
        <div><h3>311 km/ 194 miles</h3></div>



      </div>
      <hr class="mt-5">
      <div class="grid grid-cols-2 gap-20">
        <div>
          <h3>Time</h3>
        </div>
        <div><h3>3h 43m</h3></div>



      </div>
      <hr class="mt-5">




     </div>



      </div>




    </section>





  </main>




@include('layouts.footer')


