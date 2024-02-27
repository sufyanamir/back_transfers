@include('layouts.header')

<form id="registerdata" method="post">
    @csrf
    <section class="grid lg:grid-cols-2 max-w-full px-20 mx-auto py-5 font-montserrat">
        <div class="flex flex-1 flex-col gap-5 p-4">
            <div class="flex flex-col items-center gap-2">
                <h1 class="text-2xl font-semibold">Sign in</h1>
                <p>Sign in with this account across the following sites.</p>
            </div>

            <div>
                <x-input :name="'name'" :type="'text'" :label="'UserName'"></x-input>
            </div>
            <div>
                <x-input :name="'email'" :type="'email'" :label="'Email'"></x-input>
                <p class="mt-1 text-red-600 font-semibold" id="emailEror"></p>
            </div>
            <div>
                <x-input :name="'phoneNo'" :type="'number'" :label="'Phone'"></x-input>
            </div>

            <div>
                <x-input :name="'password'" :type="'Password'" :label="'password'"></x-input>
            </div>
            <div>
                <x-input :name="'password_confirmation'" :type="'password'" :label="'Confirm Password'"></x-input>
                <p class="mt-1 text-red-600 font-semibold" id="passEror"></p>
            </div>

            <div>
                <img src={{ asset('assets/icons/applelogo.svg') }} alt="">
                <button class="w-full bg-black   text-white h-[55px] rounded-lg">Create Account</button>
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
            <div>
                <a href="/login">
                    <button type="button" class="w-full  text-blue-700 capitalize h-[55px] rounded-lg">Already a member
                        login</button>
                </a>
                <hr>

            </div>




        </div>
        <div class="flex   justify-center p-10 items-center  lg:block">
            <img src={{ asset('assets/icons/register.png') }} alt="" class=" w-full h-full mt-5 ">
        </div>



    </section>
</form>
@include('layouts.footer')

<script>
    $(document).ready(function() {
        $("#registerdata").submit(function(event) {
            event.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: "post",
                url: "/registerdata",
                data: formData,
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    if (response.success == true) {
                        window.location.href = '/';
                    } else if (response.success == false) {
                        console.log(response);
                    }
                },
                error: function(jqXHR) {
                    let response = JSON.parse(jqXHR.responseText);
                    if (response.message == "The password confirmation does not match.") {
                        $('#passEror').html('password not Match')

                    } else {
                        $('#emailEror').html('Email Already Exist');

                    }
                }
            });
        });
    });
</script>
