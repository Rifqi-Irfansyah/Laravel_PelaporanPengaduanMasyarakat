<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <!-- FAILED LOGIN POP UP MODAL -->
    @if ($errors->any())
    <div class="fixed z-50 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div
                class="inline-block align-bottom bg-white rounded-2xl px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div class="sm:flex sm:items-start">
                    <div
                        class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-200 sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-red-600" stroke="currentColor" fill="none" viewBox="0 0 23 20">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12.707 10l4.647-4.646a.5.5 0 0 0-.708-.708L12 9.293l-4.646-4.647a.5.5 0 0 0-.708.708L11.293 10l-4.647 4.646a.5.5 0 0 0 .708.708L12 10.707l4.646 4.647a.5.5 0 0 0 .708-.708L12.707 10z">
                            </path>
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class=" mt-2 text-lg leading-6 font-medium text-gray-900">
                            Register Failed
                        </h3>
                    </div>
                </div>
                <div class="mt-4 ml-2">
                    @foreach ($errors->all() as $error)
                    <li class="text-md leading-5 text-gray-500 text-sm">{{ $error }}</li>
                    @endforeach
                </div>
                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button type="button"
                            class="inline-flex justify-center w-full rounded-2xl border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                            data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                            Oke
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- END FAILED LOGIN POP UP MODAL -->

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
                        <input class="p-2 mt-8 rounded-xl border" type="name" name="name" class="form-control"
                            placeholder="Name" required="">
                        <input class="p-2 rounded-xl border" type="email" name="email" class="form-control"
                            placeholder="Email" required="">
                        <div class="relative">
                            <input class="p-2 rounded-xl border w-full" type="password" name="password"
                                class="form-control" placeholder="Password" required="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray"
                                class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
                        </div>
                        <input class="p-2 rounded-xl border w-full" type="password" name="password_confirmation"
                            class="form-control" placeholder="Password Confirmation" required="">
                        <button
                            class="bg-kuning rounded-xl text-sm text-birutua py-2 hover:scale-105 duration-300">Register</button>
                    </form>

                    <div class="mt-6 grid grid-cols-3 items-center">
                        <hr>
                        <p class="text-center text-sm">OR</p>
                        <hr>
                    </div>

                    <div class="mt-5 text-xs flex justify-between items-center">
                        <p>Already have an account?</p>
                        <a href="{{ url('/')}}">
                            <button
                                class="py-2 px-5 bg-white text-birutua border rounded-xl hover:scale-110 duration-300">Login</button>
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
<script>
document.querySelector('[data-te-modal-dismiss]').addEventListener('click', function() {
    document.querySelector('.fixed').remove();
});
</script>

</html>