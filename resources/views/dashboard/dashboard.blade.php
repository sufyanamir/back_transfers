


@include('dashboard.layouts.header')

<div class="bg-slate-50">
    <div class="p-5 flex flex-col">
        <span class="text-2xl font-semibold font-montserrat">Dashboard</span>
        <span>Dashboard - Edit Profile</span>
     
     </div>
     
         <div class="p-4  rounded-lg">
            <div class="grid xl:grid-cols-4 gap-4 mb-4">
               <div class="flex items-center gap-5 justify-center  py-10 rounded-xl bg-white shadow-  dark:bg-gray-800">
                  <div class="bg-slate-100 rounded-xl w-14 h-14 flex justify-center items-center">
                      <img src={{asset('assets/icons/mybooking.svg')}} alt="" class="w-8">
                  </div>
                  <div class="flex flex-col justify-center items-center w-[132px] ">
                    <span class="text-lg font-montserrat">My Booking</span>
                    <span class="font-bold text-4xl">93</span>
                  </div>
               </div>
               <div class="flex items-center gap-5 justify-center  py-10 rounded-xl bg-white shadow-sm dark:bg-gray-800">
                 <div class="bg-slate-100 rounded-xl w-14 h-14 flex justify-center items-center">
                     <img src={{asset('assets/icons/invoice.svg')}} alt="" class="w-8">
                 </div>
                 <div class="flex flex-col justify-center items-center  w-[132px]">
                   <span class="text-lg font-montserrat">Invoice</span>
                   <span class="font-bold text-4xl">93</span>
                 </div>
              </div>
              <div class="flex items-center gap-5 justify-center  py-10 rounded-xl bg-white shadow-sm dark:bg-gray-800">
                 <div class="bg-slate-100 rounded-xl w-14 h-14 flex justify-center items-center">
                     <img src={{asset('assets/icons/pendingPayment.svg')}} alt="" class="w-8">
                 </div>
                 <div class="flex flex-col justify-center items-center  ">
                   <span class="text-lg font-montserrat">Pending Payment</span>
                   <span class="font-bold text-4xl">93</span>
                 </div>
              </div>
               {{--  --}}
               <div class="flex items-center gap-5 justify-center  py-10 rounded-xl bg-white shadow-sm dark:bg-gray-800">
                 <div class="bg-slate-100 rounded-xl w-14 h-14 flex justify-center items-center">
                     <img src={{asset('assets/icons/location.svg')}} alt="" class="w-8">
                 </div>
                 <div class="flex flex-col justify-center items-center ">
                   <span class="text-lg font-montserrat">Saved Loacation</span>
                   <span class="font-bold text-4xl">93</span>
                 </div>
              </div>
            </div>
        {{-- data Table --}}
        <div class="container w-full md:w-full xl:w-full mx-auto px-2">
     
         <!--Title-->
         {{-- <h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
             Responsive <a class="underline mx-2" href="https://datatables.net/">DataTables.net</a> Table
         </h1> --}}
     
     
         <!--Card-->
         <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white ">
     
     
             <table id="dataTable" class="display" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                 <thead>
                     <tr>
                         <th data-priority="1">Name</th>
                         <th data-priority="2">Position</th>
                         <th data-priority="3">Office</th>
                         <th data-priority="4">Age</th>
                         <th data-priority="5">Start date</th>
                         <th data-priority="6">Salary</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr class="bg-white">
                         <td>Tiger Nixon</td>
                         <td>System Architect</td>
                         <td>Edinburgh</td>
                         <td>61</td>
                         <td>2011/04/25</td>
                         <td>$320,800</td>
                     </tr>
     
                     <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
     
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     {{--  --}}
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                     <tr>
                         <td>Donna Snider</td>
                         <td>Customer Support</td>
                         <td>New York</td>
                         <td>27</td>
                         <td>2011/01/25</td>
                         <td>$112,000</td>
                     </tr>
                 </tbody>
     
             </table>
     
     
         </div>
         <!--/Card-->
     
     
     </div>
     <!--/container-->
     
     
        {{-- data Table --}}
     
     
     
     
         </div>



</div>

@include('dashboard.layouts.footer')
