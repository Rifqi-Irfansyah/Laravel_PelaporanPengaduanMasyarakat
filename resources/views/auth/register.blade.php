<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>ReportNow</title>
    <link rel="stylesheet" href="{{asset('css/popup.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <!-- FAILED REGISTER POP UP MODAL -->
    <script>
    @if($errors -> any())
    Swal.fire({
        icon: 'error',
        title: 'Register Failed',
        html: '@foreach ($errors->all() as $error)<li class="text-2md font-bold leading-5 text-sm text-left">{{ $error }}</li>@endforeach',
        confirmButtonText: ' Yes ',
        customClass: {
            popup: 'background',
            confirmButton: 'btn-confirm',
            title: 'title',
        }
    })
    @endif
    </script>
    <!-- END FAILED REGISTER POP UP MODAL -->

    <!-- REGISTER FORM -->
    <h1 class="text-3xl font-bold text-birumuda">
        <section class="bg-gray-50 min-h-screen flex items-center justify-center">
            <!-- login container -->
            <div class="bg-birutua flex rounded-3xl shadow-lg max-w-2xl p-5 items-center">
                <!-- form -->
                <div class="md:w-1/2 px-8 md:px-14">
                    <h2 class="text-2xl font-bold text-kuning">Register</h2>
                    <p class="text-xs mt-2 ">Register here, to create an account</p>

                    <form action="{{ route('registeraksi') }}" method="post"
                        class="flex flex-col gap-4 text-xs text-birutua">
                        @csrf
                        <input class="p-2 mt-8 rounded-2xl border" type="name" name="name" class="form-control"
                            placeholder="Name" required="" autocomplete="off">
                        <input class="p-2 rounded-2xl border" type="email" name="email" class="form-control"
                            placeholder="Email" required="" autocomplete="off">
                            <div class="relative">
                            <input id="password" class="p-2 rounded-2xl border w-full" type="password" name="password"
                                class="form-control" placeholder="Password" required="">
                            <button type="button"
                                class="absolute top-1/2 right-3 transform -translate-y-1/2 text-gray-400"
                                onclick="togglePasswordVisibility()">
                                <img class="buka" src="{{asset('images/icon_eye.png')}}" width="16" height="16"></img>
                                <img class="tutup hidden" src="{{asset('images/icon_eye-slash.png')}}" width="16"
                                    height="16"></img>
                            </button>
                        </div>
                        <input class="p-2 rounded-2xl border w-full" type="password" name="password_confirmation"
                            class="form-control" placeholder="Password Confirmation" required="">
                        <button
                            class="bg-kuning rounded-2xl text-sm text-birutua py-2 hover:scale-105 duration-300">Register</button>
                    </form>

                    <div class="mt-6 grid grid-cols-3 items-center">
                        <hr>
                        <p class="text-center text-sm">OR</p>
                        <hr>
                    </div>

                    <div class="mt-5 text-xs flex justify-between items-center">
                        <p>Already have an account?</p>
                        <a href="{{ url('/')}}" class="rounded-2xl">
                            <button
                                class="py-2 px-5 bg-white text-birutua border rounded-2xl hover:scale-110 duration-300">Login</button>
                        </a>
                    </div>
                </div>

                <!-- animate -->
                <div class="md:block hidden w-1/2">
                    <img class="rounded-3xl" src="{{ asset('images/animate_auth.gif') }}">
                </div>
            </div>
        </section>
    </h1>
    <!-- END OF REGISTER FORM -->

    <!-- Show Hidden Password -->
    <script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var showElements = document.querySelector(".buka");
        var hiddenElements = document.querySelector(".tutup");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showElements.classList.add('hidden');
            hiddenElements.classList.remove('hidden');
        } else {
            passwordInput.type = "password";
            showElements.classList.remove('hidden');
            hiddenElements.classList.add('hidden');
        }
    }
    </script>

</body>

</html>