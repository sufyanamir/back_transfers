@include('dashboard.layouts.header')
<style>
    /* #datatable_length ,
    #datatable_filter
    {
display: none
    } */
</style>
</style>
<section class="w-full  bg-slate-100 pb-10 ">
    <div class="md:px-10 px-2 py-5 flex justify-between">
        <div>
            <h1 class="text-2xl font-medium capitalize">Saved Location</h1>
            <h3>Dashboard - <a href="">Edit Profile</a></h3>
        </div>
        <div>
            <button
                class="text-white bg-black  w-[216px] py-4 text-[16px] rounded-[6px] font-semibold flex gap-3 justify-center">Add
                New
                Location<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_745_502)">
                        <path
                            d="M15.3033 13.7794C15.0735 13.7794 14.865 13.6863 14.7141 13.5355C14.5633 13.3846 14.4701 13.1761 14.4701 12.9463L14.4701 6.70843L5.28603 15.8925C4.96017 16.2184 4.43338 16.2184 4.10752 15.8925C3.78166 15.5666 3.78166 15.0399 4.10752 14.714L13.2916 5.52992L7.05371 5.52989C6.59291 5.52989 6.22054 5.15751 6.22054 4.69671C6.22054 4.23592 6.593 3.86345 7.0538 3.86345L15.3034 3.86345C15.7642 3.86345 16.1365 4.2358 16.1365 4.6966L16.1365 12.9462C16.1365 13.407 15.7641 13.7794 15.3033 13.7794Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_745_502">
                            <rect width="20" height="20" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </button>
        </div>
    </div>
    <div>


        <div class="mt-2 mx-10 ">

            <div class="shadow-dark mt-3  rounded-xl pt-8  bg-white min-h-[500px]">
                <div class="p-4">
                    <div class="relative overflow-x-scroll overflowscrollbar">
                        <table id="datatable" class="overflow-scroll">
                            <thead class="my-6 px-10 text-black">
                                <tr class="bg-[#f2f2f2] ">
                                    <th  class="whitespace-nowrap">Title</th>
                                    <th  class="whitespace-nowrap">Country</th>
                                    <th  class="whitespace-nowrap">City</th>
                                    <th  class="whitespace-nowrap">Creation Date</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr class="pt-4">
                                    <td class="min-w-[150px]">London City Airport (LCY)</td>
                                    <td>UK</td>
                                    <td>London</td>
                                    <td class="min-w-[150px]">Thu, Oct 06, 2022</td>

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
            </div>
            <!--/Card-->


        </div>

        {{--  --}}
        <div class="shadow-dark mt-10  rounded-xl pt-8  bg-white mx-10 ">
            <div class="w-[70%]">
                <div class="md:pl-10  pl-2 pt-5">
                    <h1 class="capitalize text-2xl font-semibold">add new location</h1>
                </div>
                <div class="md:p-10 p-2 flex flex-col gap-5">
                    <div class=" grid lg:grid-cols-2 gap-5">
                        <div>
                            <div class="inputGroup">
                                <input type="text" required="" autocomplete="off" class="country">
                                <label>Country</label>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="inputGroup">
                            <input type="text" required="" autocomplete="off" class="">
                            <label>City</label>
                        </div>
                    </div>
                    {{--  --}}
                    <div>
                        <div class="inputGroup">
                            <input type="text" required="" autocomplete="off" class="">
                            <label>Latitude</label>
                        </div>
                    </div>
                    {{--  --}}
                    <div class=" grid lg:grid-cols-2 gap-5">
                        <div>
                            <div class="inputGroup">
                                <input type="text" required="" autocomplete="off" class="">
                                <label>Longitude</label>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="inputGroup">
                            <input type="text" required="" autocomplete="off" class="">
                            <label for="name">old password</label>
                        </div>
                    </div>




                </div>













                <div class="md:px-10 px-2">
                    <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=current%20location+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                href="https://www.maps.ie/population/">Population calculator map</a></iframe></div>
                </div>
                <div class="mx-10 mt-8  pb-5">
                    <button
                        class="text-white bg-black  w-[216px] py-4 text-[16px] rounded-[6px] font-semibold flex gap-3 justify-center">Add
                        Saved Location<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_745_502)">
                                <path
                                    d="M15.3033 13.7794C15.0735 13.7794 14.865 13.6863 14.7141 13.5355C14.5633 13.3846 14.4701 13.1761 14.4701 12.9463L14.4701 6.70843L5.28603 15.8925C4.96017 16.2184 4.43338 16.2184 4.10752 15.8925C3.78166 15.5666 3.78166 15.0399 4.10752 14.714L13.2916 5.52992L7.05371 5.52989C6.59291 5.52989 6.22054 5.15751 6.22054 4.69671C6.22054 4.23592 6.593 3.86345 7.0538 3.86345L15.3034 3.86345C15.7642 3.86345 16.1365 4.2358 16.1365 4.6966L16.1365 12.9462C16.1365 13.407 15.7641 13.7794 15.3033 13.7794Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_745_502">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>



</section>


@include('dashboard.layouts.footer')
