
@include('layouts.header')

<section class=" w-full py-20 bg-black">
    <div>
       <h1 class="text-white max-w-[1030px] mx-auto  capitalize text-4xl font-montserrat font-semibold">services</h1>
    </div>

</section>
{{-- <div class="max-w-[1030px] mx-auto pt-10 capitalize font-montserrat text-2xl font-semibold">
<h1 class="capitalize">List style v1</h1>
</div> --}}
<section class="max-w-[1030px] mx-auto flex flex-wrap  gap-10 py-10 lg:justify-start justify-center">


<x-service-Cards></x-service-Cards>
<x-service-Cards></x-service-Cards>
<x-service-Cards></x-service-Cards>

</section>


<section class="max-w-[1030px] mx-auto flex flex-wrap  gap-10 py-10 lg:justify-start justify-center">


    <x-service-Cards></x-service-Cards>
    <x-service-Cards></x-service-Cards>
    <x-service-Cards></x-service-Cards>

    </section>




@include('layouts.footer')

