@include('admindashboard.layouts.header')
<section class=" w-full">

    <div class="pl-10 bg-slate-100 py-5">
        <h1 class="text-2xl font-medium capitalize font-montserrat">Edit profile</h1>
        <h3>Dashboard - <a href="">Edit Profile</a></h3>
    </div>

    <div class=" bg-white p-10 max-w-[600px] flex flex-col gap-5 flex-wrap scale-up-hor-center">
        <div class="flex flex-wrap items-center gap-5">
            <div>
                <img src={{asset('assets/icons/editavatar.png')}} alt="">
            </div>
            <div>
                <button class="bg-black px-4 text-white py-3 rounded-lg flex items-center gap-1">Change Profile Images

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
        </div>

        {{--  --}}

        <div>
            <div class="inputGroup">
                <input type="text" required="" autocomplete="off" class="">
                <label for="name">Name</label>
            </div>
        </div>
        {{--  --}}
       <div>
        <div class="inputGroup">
            <input type="text" required="" autocomplete="off" class="placeholder:text-black ">
            <label for="name">Last Name</label>
        </div>

       </div>
       {{--  --}}

<div>
    <select name="Gender" id="1"  class="w-full border-none bg-slate-100 outline-none rounded-lg placeholder:text-black ">
        <option value="male" class="text-black font-montserrat">Male</option>
        <option value="male" class="text-black font-montserrat">Female</option>
        <option value="male" class="text-black font-montserrat">Other</option>
       </select>
</div>
{{--  --}}
<div class="grid lg:grid-cols-3 gap-2">

  <input type="number" class="rounded-lg bg-slate-100 border-none">
  <select name="Gender" id="1"  class="w-full border-none bg-slate-100 outline-none rounded-lg placeholder:text-black ">
    <option value="male" class="text-black font-montserrat">jan</option>
    <option value="male" class="text-black font-montserrat">Feb</option>
    <option value="male" class="text-black font-montserrat">March</option>
    <option value="male" class="text-black font-montserrat">April</option>
    <option value="male" class="text-black font-montserrat">MAY</option>
    <option value="male" class="text-black font-montserrat">june</option>
    <option value="male" class="text-black font-montserrat">July</option>
    <option value="male" class="text-black font-montserrat">Aug</option>
    <option value="male" class="text-black font-montserrat">Sep</option>
    <option value="male" class="text-black font-montserrat">Oct</option>
    <option value="male" class="text-black font-montserrat">Nov</option>
    <option value="male" class="text-black font-montserrat">Dec</option>
   </select>

   <input type="date" class="border-none bg-slate-100 rounded-lg">


</div>
{{--  --}}


<div>
    <div class="inputGroup">
        <input type="text" required="" autocomplete="off" class="placeholder:text-black ">
        <label for="name">Phone</label>
    </div>
</div>

{{--  --}}
<select name="Gender" id="1"  class="w-full border-none bg-slate-100 outline-none rounded-lg placeholder:text-black ">
    <option value="male" class="text-black font-montserrat">London</option>
    <option value="male" class="text-black font-montserrat">Uk</option>
    <option value="male" class="text-black font-montserrat">Spain</option>

   </select>


   {{--  --}}
   <div>
    <div class="inputGroup">
        <input type="text" required="" autocomplete="off" class="placeholder:text-black ">
        <label for="name">Adress</label>
    </div>
</div>
{{--  --}}
<div>
    <div class="inputGroup">
        <input type="text" required="" autocomplete="off" class="placeholder:text-black ">
        <label for="name">Adress</label>
    </div>
</div>

{{--  --}}
<div>
    <button class="bg-black px-4 text-white py-3 rounded-lg flex items-center gap-1">Update Profile

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

<div>




    </div>

@include('admindashboard.layouts.footer')
