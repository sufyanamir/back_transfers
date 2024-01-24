@include('layouts.header')

<section class="grid lg:grid-cols-2 max-w-[1030px] mx-auto py-20">

    <div class="flex flex-col gap-5 p-4">
        <div class="flex flex-col items-center gap-2">
            <h1 class="text-2xl font-semibold">Sign in</h1>
            <p>Sign in with this account across the following sites.</p>
        </div>

        <div>
            <div class="coolinput">
                <label for="input" class="text text-2xl">Email:</label >
                <input type="text" class="rounded-xl" placeholder="Write here..." name="input" class="input">
            </div>
        </div>

        <div>
            <input type="text" placeholder="password" class="bg-slate-200 py-3 border-none w-full rounded-lg">
        </div>
        <div class="flex justify-between">
            <div>
                <input type="checkbox">
                <span>Remember me</span>
            </div>
            <div>
                <a href="">Lost your password?</a>
            </div>
        </div>
        <div>
            <button class="w-full bg-black   text-white h-10 rounded-lg">Sign In</button>
        </div>
        {{-- OR --}}
        <div class="text-center text-2xl font-medium">
            OR
        </div>
        <div>
            <button class="w-full bg-gray-200  text-black h-10 rounded-lg">Continue GoogLe</button>

        </div>
        <div>
            <button class="w-full bg-blue-500  text-white h-10 rounded-lg">Continue FaceBook</button>

        </div>
        <div>
            <button class="w-full bg-black  text-white h-10 rounded-lg">Continue Apple</button>

        </div>




    </div>
    <div class="flex justify-center p-10 items-center hidden lg:block">
        <img src={{asset('assets/icons/login.png')}} alt="" class="h-full">
    </div>




</section>



@include('layouts.footer')