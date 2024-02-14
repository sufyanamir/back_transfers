@include('layouts.header')

<section class=" w-full  py-10 bg-black">
    <div>
        <h1 class="text-white max-w-[1030px] mx-auto  capitalize text-4xl font-montserrat font-semibold ">Services
        </h1>
        <div>
            <ul class="text-white flex gap-2 max-w-[1030px] mx-auto mt-1">
                <li><a href="/">Home</a></li>-
                <li><a href="/serviceslist">Services</a> </li>
            </ul>
        </div>
    </div>

</section>
{{-- <div class="max-w-[1030px] mx-auto pt-10 capitalize font-montserrat text-2xl font-semibold">
<h1 class="capitalize">List style v1</h1>
</div> --}}
<section class="max-w-[1030px] mx-auto flex flex-wrap  gap-10 py-10 lg:justify-start justify-center">



    <a href="/servicessingle"><x-service-cards></x-service-cards></a>
    <a href="/servicessingle"><x-service-cards></x-service-cards></a>
    <a href="/servicessingle"><x-service-cards></x-service-cards></a>

</section>


<section class="max-w-[1030px] mx-auto flex flex-wrap  gap-10 py-10 lg:justify-start justify-center">


    <a href="/servicessingle"><x-service-cards></x-service-cards></a>
    <a href="/servicessingle"><x-service-cards></x-service-cards></a>
    <a href="/servicessingle"><x-service-cards></x-service-cards></a>

</section>




@include('layouts.footer')
