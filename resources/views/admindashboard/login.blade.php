<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/dataTable.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <section class="  mx-auto py-20">

        <div class="">
            <form id="Alogindata" method="post">
                @csrf
                <div class="flex justify-center   ">

                    <div class=" flex flex-col gap-5 ">
                        <div class="flex flex-col items-center gap-2">
                            <h1 class="text-2xl font-semibold">Sign in</h1>
                            <p>Sign in with this account across the following sites.</p>
                        </div>

                        <div>
                            <x-input :type="'email'" :name="'email'" :label="'email'"></x-input>
                        </div>
                        <div>
                            <x-input :type="'Password'" :name="'password'" :label="'password'"></x-input>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-center gap-2">
                                <input type="checkbox">
                                <span>Remember me</span>
                            </div>
                        </div>
                        <div>
                            <button class="w-full bg-black   text-white h-[55px] rounded-lg">Sign In</button>
                        </div>
                    </div>
                </div>
            </form>



        </div>





    </section>




    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
</body>

</html>
<script>
    $(document).ready(function() {
        $("#Alogindata").submit(function(event) {
            event.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: "post",
                url: "../admin/Alogindata",
                data: formData,
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    if (response.success == true) {
                        window.location.href = '/admin';
                    }
                },
                error: function(jqXHR) {
                    let response = JSON.parse(jqXHR.responseText);
                    alert("Wrong credentials")
                }
            });
        });
    });
</script>
