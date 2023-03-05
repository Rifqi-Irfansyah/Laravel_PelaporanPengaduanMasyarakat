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
                            <input class="p-2 rounded-2xl border w-full" type="password" name="password"
                                class="form-control" placeholder="Password" required="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray"
                                class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
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
</body>

</html>