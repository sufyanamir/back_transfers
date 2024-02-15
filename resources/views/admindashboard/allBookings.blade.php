@include('admindashboard.layouts.header')
<div class="p-5 flex flex-col">
    <span class="text-2xl font-semibold">Booking</span>

</div>

<div class="mt-8 mx-8 mb-10">

    <div class="shadow-dark mt-3  rounded-xl pt-8  bg-white min-h-[700px]">
        <div>
            <div class="flex justify-between px-[20px] mb-3">
                <h3 class="text-[20px] text-black">Booking List</h3>
            </div>
            <table id="datatable" class="overflow-scroll">
                <thead class="py-6 text-black">
                    <tr>
                        <th>Order No</th>
                        <th>Name</th>
                        <th>Date - Time</th>
                        <th>From - To</th>
                        <th>Total</th>
                        <th>Distance</th>
                        <th>Selected Car</th>
                        <th>Payment Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    <tr class="pt-4">
                        <td>#953</td>
                        <td>Joned</td>
                        <td>Thu, Oct 06, 2022 - 6 PM : 15</td>
                        <td>London City Airport (LCY) - New York City Airport</td>
                        <td>$2,865.03</td>
                        <td>$2,865.03</td>
                        <td>lamborghini</td>
                        <td>
                            <button class="bg-[#FFF4DE] text-[#FFA800] py-2 px-6 rounded-md">In Progress</button>
                        </td>




                        <td>
                            <div class="flex gap-5">

                                <a class="cursor-pointer" href="#"><img width="38px"
                                        src="{{ asset('assets/icons/delete.svg') }}" alt="delete"></a>
                                <a class="cursor-pointer" href="#"><img width="38px"
                                        src="{{ asset('assets/icons/update.svg') }}" alt="update"></a>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
    <!--/Card-->


</div>


<div id="addteachermodal" data-modal-backdrop="static"
    class="hidden overflow-y-auto overflow-x-hidden fixed  left-0 z-50 justify-center  w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full ">
        <form action="#" method="post">
            @csrf
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700  ">
                <div class="flex items-center  justify-center  p-5  rounded-t  bg-black">
                    <h3 class="text-xl font-semibold text-white text-center">
                        Add User
                    </h3>
                    <button type="button"
                        class="cursor-pointer absolute right-2 text-white bg-transparent rounded-lg text-sm w-8 h-8 ms-auto "
                        data-modal-hide="addteachermodal">
                        <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>

                <div class=" px-10">

                    <div class="mt-8">

                        <label class="text-[14px] font-normal" for="username">User Name</label>
                        <input type="text"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-black   h-[40px] text-[14px]"
                            name="username" id="username">
                    </div>
                    <div class="mt-8">

                        <label class="text-[14px] font-normal" for="email">Email</label>
                        <input type="email"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-black   h-[40px] text-[14px]"
                            name="email" id="email">
                    </div>
                    <div class="mt-8">

                        <label class="text-[14px] font-normal" for="password">Password</label>
                        <input type="password"
                            class="w-full border-[#DEE2E6] rounded-[4px] focus:border-black   h-[40px] text-[14px]"
                            name="password" id="password">
                    </div>
                    <div class="flex justify-end mt-6">
                        <button
                            class="bg-black text-white py-2 px-6 my-4 rounded-[4px]  mx-6  font-semibold">ADD</button>
                    </div>
                </div>
        </form>
        <div>

        </div>
    </div>

</div>
</div>

@include('admindashboard.layouts.footer')
