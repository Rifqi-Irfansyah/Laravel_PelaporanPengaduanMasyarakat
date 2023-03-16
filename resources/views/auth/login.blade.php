<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>ReportNow</title>
    <link rel="stylesheet" href="{{asset('css/popup.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <!-- FAILED LOGIN POP UP MODAL -->
    <script>
    @if(session('error'))
    Swal.fire({
        icon: 'error',
        title: 'Login Failed\nUsername atau Password Salah',
        confirmButtonText: ' Yes ',
        customClass: {
            popup: 'background',
            confirmButton: 'btn-confirm',
            title: 'title',
        }
    })
    @endif
    </script>
    <!-- END FAILED LOGIN POP UP MODAL -->

    <h1 class="text-3xl font-bold text-birumuda">
        <section class="bg-gray-50 min-h-screen flex items-center justify-center">
            <!-- login container -->
            <div class="bg-birutua flex rounded-3xl shadow-lg max-w-2xl p-5 items-center">
                <!-- form -->
                <div class="md:w-1/2 px-8 md:px-14">
                    <h2 class="text-2xl font-bold text-kuning">Login</h2>
                    <p class="text-xs mt-2 ">If you are already a member, easily log in</p>

                    <form action="{{ route('loginaksi') }}" method="post"
                        class="flex flex-col gap-4 text-xs text-birutua">
                        @csrf
                        <input class="p-2 mt-8 rounded-2xl border" type="email" name="email" class="form-control"
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
                        <button
                            class="bg-kuning rounded-2xl text-sm text-birutua py-2 hover:scale-105 duration-300">Login</button>
                    </form>

                    <div class="mt-6 grid grid-cols-3 items-center">
                        <hr>
                        <p class="text-center text-sm">OR</p>
                        <hr>
                    </div>

                    <div class="mt-5 text-xs flex justify-between items-center">
                        <p>Don't have an account?</p>
                        <a href="{{ url('/register')}}" class="rounded-2xl">
                            <button
                                class="py-2 px-5 bg-white text-birutua border rounded-2xl hover:scale-110 duration-300">Register</button>
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