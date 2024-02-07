@include('layouts.header')

<section class="grid lg:grid-cols-2 max-w-[1030px] mx-auto py-20">

    <div class="flex flex-col gap-5 ">
        <div class="flex flex-col items-center gap-2">
            <h1 class="text-2xl font-semibold">Sign in</h1>
            <p>Sign in with this account across the following sites.</p>
        </div>

        <div>

        </div>

        <div>
            <x-input :type="'Password'" :label="'password'"></x-input>
        </div>
        <div class="flex justify-between">
            <div class="flex items-center gap-2">
                <input type="checkbox">
                <span>Remember me</span>
            </div>
            <div>
                <a href="/signup">Lost your password?</a>
            </div>
        </div>
        <div>
            <button class="w-full bg-black   text-white h-[55px] rounded-lg">Sign In</button>
        </div>
        {{-- OR --}}
        <div class="text-center text-2xl font-medium">
            OR
        </div>
        <div>
            <button class="w-full bg-gray-200  text-black h-[55px] rounded-lg">Continue GoogLe</button>

        </div>
        <div>
            <button class="w-full bg-blue-500  text-white h-[55px] rounded-lg">Continue FaceBook</button>

        </div>
        <div>
            <button class="w-full bg-black  text-white h-[55px] rounded-lg">Continue Apple</button>

        </div>




    </div>
    <div class="flex flex-1 justify-center p-10 items-center hidden lg:block">
        <img src={{asset('assets/icons/login.png')}} alt="" class="h-full mt-10">
    </div>




</section>



@include('layouts.footer')
