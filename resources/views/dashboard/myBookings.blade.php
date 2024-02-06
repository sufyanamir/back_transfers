@include('dashboard.layouts.header')
  <section>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        country
                    </th>
                    <th scope="col" class="px-6 py-3">
                        City
                    </th>
                    <th scope="col" class="px-6 py-3">
                        creation date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft Surface Pro
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4">
                        Laptop PC
                    </td>
                    <td class="px-6 py-4">
                        $1999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        Accessories
                    </td>
                    <td class="px-6 py-4">
                        $99
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Google Pixel Phone
                    </th>
                    <td class="px-6 py-4">
                        Gray
                    </td>
                    <td class="px-6 py-4">
                        Phone
                    </td>
                    <td class="px-6 py-4">
                        $799
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple Watch 5
                    </th>
                    <td class="px-6 py-4">
                        Red
                    </td>
                    <td class="px-6 py-4">
                        Wearables
                    </td>
                    <td class="px-6 py-4">
                        $999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{--  --}}
    <div class="pl-10 pt-5 ">
        <h1 class="capitalize text-2xl font-semibold">add new location</h1>
    </div>
    {{-- boxes --}}
    <div class="px-10 py-10 flex flex-wrap gap-5 justify-center ">
        <div class="w-[400px] border border-slate-200 p-10 font-montserrat">
             <h1 class="text-2xl font-semibold">Order Summary</h1>
          <div class="grid grid-cols-2 pt-5">
            <div class="flex flex-col flex-wrap gap-3">
               <p>Order Number</p>
               <p>Booking Date</p>
               <p>Select Vehicle</p>
            </div>
            <div class="flex flex-col flex-wrap gap-3">
             <p>#190</p>
             <p>Oct 18, 2022</p>
             <p>Mercedes-Benz E220</p>
            </div>
          </div>
        </div>

        {{-- box-2 --}}
        <div class="w-[500px] border border-slate-200 p-10 font-montserrat">
            <h1 class="text-2xl font-semibold">Order Summary</h1>
         <div class="grid   grid-cols-1 md:grid-cols-2 pt-5">
           <div class="flex flex-col flex-wrap gap-3">
              <p>First Name</p>
              <p>Last Name</p>
              <p>Email</p>
              <p>Phone</p>
              <p>Country</p>
              <p>City</p>
           </div>
           <div class="flex flex-col flex-wrap gap-3">
            <p>Usman</p>
            <p>Mirza</p>
            <p>creativelayers088@gmail.com</p>
            <p>+382 8382 2372</p>
            <p>UK</p>
            <p>London</p>
           </div>
         </div>
       </div>
        {{-- box-2== --}}

        <div class="w-[400px] border border-slate-300 font-montserrat capitalize p-5 flex flex-col gap-5">
            <div>
                <span>Order Status</span>
            </div>
            <div>
                <button class="px-3 text-purple-400 bg-slate-100 rounded-lg">pending</button>
            </div>
            {{--  --}}
            <div>
                <button class="bg-black px-4 capitalize text-white py-3 rounded-lg flex items-center gap-1">submit payment reciept

                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_495_3684)">
                        <path d="M15.3034 13.7795C15.0736 13.7795 14.8651 13.6864 14.7142 13.5355C14.5634 13.3847 14.4702 13.1761 14.4702 12.9463L14.4702 6.70846L5.28615 15.8925C4.9603 16.2184 4.4335 16.2184 4.10764 15.8925C3.78178 15.5667 3.78178 15.0399 4.10764 14.714L13.2917 5.52995L7.05383 5.52992C6.59303 5.52992 6.22066 5.15754 6.22066 4.69675C6.22066 4.23595 6.59312 3.86348 7.05392 3.86348L15.3035 3.86348C15.7643 3.86348 16.1366 4.23583 16.1366 4.69663L16.1366 12.9462C16.1366 13.407 15.7642 13.7795 15.3034 13.7795Z" fill="#fff"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_495_3684">
                        <rect width="20" height="20" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                </button>
            </div>
            {{--  --}}
            <div>
                <button class="border text-black px-4  capitalize py-3 rounded-lg flex items-center gap-1">make an online payment

                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_495_3684)">
                        <path d="M15.3034 13.7795C15.0736 13.7795 14.8651 13.6864 14.7142 13.5355C14.5634 13.3847 14.4702 13.1761 14.4702 12.9463L14.4702 6.70846L5.28615 15.8925C4.9603 16.2184 4.4335 16.2184 4.10764 15.8925C3.78178 15.5667 3.78178 15.0399 4.10764 14.714L13.2917 5.52995L7.05383 5.52992C6.59303 5.52992 6.22066 5.15754 6.22066 4.69675C6.22066 4.23595 6.59312 3.86348 7.05392 3.86348L15.3035 3.86348C15.7643 3.86348 16.1366 4.23583 16.1366 4.69663L16.1366 12.9462C16.1366 13.407 15.7642 13.7795 15.3034 13.7795Z" fill="#000"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_495_3684">
                        <rect width="20" height="20" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                </button>
            </div>

        </div>
















        <div class="w-[500px] border border-slate-200 p-10 font-montserrat">
            <h1 class="text-2xl font-semibold">Order Summary</h1>
         <div class="grid grid-cols-2 pt-5">
           <div class="flex flex-col flex-wrap gap-3">
              <p>First Name</p>
              <p>Last Name</p>
              <p>Email</p>
              <p>Phone</p>

           </div>
           <div class="flex flex-col flex-wrap gap-3">
            <p>Usman</p>
            <p>Mirza</p>
            <p>creativelayers088@gmail.com</p>
            <p>+382 8382 2372</p>

           </div>
         </div>
       </div>
       {{-- box-3    --}}

       <div class="w-[500px] border border-300 flex flex-col gap-4 p-10 font-montserrat">
          <div>
            <h1 class="text-2xl font-semibold">Order Summary</h1>
          </div>
          <hr>
          <div>
            <p>Mercedes-Benz E220</p>
            <p>Nov 2, 2022 - 16:45</p>
          </div>
          <hr>
          <div class="flex flex-col gap-4">
              <h1 class="text-xl font-semibold">Extra Options</h1>
              <p>1 x Child Seat - $5.00</p>
              <p> x Bouquet of Flowers - $75.00</p>
              <p>2 x Vodka Bottle - $78.00</p>
              <p>1 x Bodyguard Service - $750.00</p>
          </div>
          <hr>
          <div class="flex justify-between">
            <div>
                Selected vehicle
            </div>
            <div>
                $174
            </div>
          </div>
         {{--  --}}
         <div class="flex justify-between">
            <div>
                Selected vehicle
            </div>
            <div>
                $174
            </div>
          </div>
        <hr>
        <div class="flex justify-between">
            <div>
                Grand Total
            </div>
            <div>
                $174
            </div>
          </div>



       </div>










    </div>



  </section>

@include('dashboard.layouts.footer')
