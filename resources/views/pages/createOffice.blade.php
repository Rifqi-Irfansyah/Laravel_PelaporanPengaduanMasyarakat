@extends('components.footer')
@extends('components.popup')
@extends('components.header')
@extends('components.navbar')

@section('navbar')
<div class="hidden sm:ml-6 sm:block">
    <div class="flex space-x-4 font-medium">
        <a href="/" class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm"
            aria-current="page">Dashboard</a>

        @if (auth()->user()->role=="user")
        <a href="{{ route('report') }}"
            class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Create Report</a>
        <a href="{{ route('your_report') }}"
            class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Your Report</a>
        @endif

        @if (in_array(auth()->user()->role, ["admin", "office"]))
        <a href="{{ route('preview_report') }}"
            class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Review Report</a>
        <a href="{{ route('validated') }}"
            class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Validated Report</a>
        <a href="{{ route('done_report') }}"
            class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Done Report</a>
        @endif

        @if (auth()->user()->role=="admin")
        <a href="{{ route('create_office') }}" class="hover:bg-birutua rounded-3xl px-3 py-2 text-sm bg-birutua">Create
            Account</a>
        @endif
    </div>
</div>
@endsection

@section('hero')
<div class="py-8">
    <div class=" container mx-auto flex flex-wrap flex-col md:flex-row items-center pl-24">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
            <p class="uppercase tracking-loose w-full"></p>
            <h1 class="my-4 text-6xl font-bold leading-tight">
                Buat Akun
            </h1>
            <p class="leading-normal text-2xl">
                Buat Akun Petugas, Petugas Membantu Memvalidasi Data
            </p>
        </div>
        <!--Right Col-->
        <div class=" w-full md:w-3/5 pt-14 px-16">
            <img class="w-full md:w-4/5 z-50" src="{{url('images/ilustration_create_account.png')}}" />
        </div>
    </div>
</div>
@endsection

@section('contain')
<section class="bg-offwhite border-b py-8">
    <div class="container max-w-3xl mx-auto text-birutua items-center">

        <p class="text-center text-2xl my-6 font-bold">Buat Akun Petugas</p>

        <form id="form-create-account" method="POST" action="{{ route('registerofficer') }}" enctype="multipart/form-data"
            class="w-full max-w-2xl rounded-3xl mx-auto bg-birumuda p-10">
            @csrf

            <div class="flex flex-wrap -mx-3 mb-1">
                <div class="w-full px-3 mt-5">
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-1" for="name">
                        Name
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-100 text-gray-700 border text-sm border-gray-200 rounded-2xl py-3 px-4 mb-3 leading-tight focus:outline-birutua focus:bg-white"
                        id="name" name="name" type="text" required placeholder="Nama Petugas" autocomplete="off">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-1">
                <div class="w-full px-3 mt-5">
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-1" for="email">
                        Email
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-100 text-gray-700 border text-sm border-gray-200 rounded-2xl py-3 px-4 mb-3 leading-tight focus:outline-birutua focus:bg-white"
                        id="email" name="email" type="email" required placeholder="example@gmail.com"
                        autocomplete="off">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-1">
                <div class="w-full px-3 mt-5">
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-1" for="name">
                        Password
                    </label>
                    <div class="relative">
                        <input id="password" type="password" name="password"
                            class="appearance-none block w-full bg-gray-100 text-gray-700 border text-sm border-gray-200 rounded-2xl py-3 px-4 mb-3 leading-tight focus:outline-birutua focus:bg-white"
                            placeholder="Password" required="">
                        <button type="button" class="absolute top-1/2 right-3 transform -translate-y-1/2 text-gray-400"
                            onclick="togglePasswordVisibility()">
                            <img class="buka" src="{{asset('images/icon_eye.png')}}" width="16" height="16"></img>
                            <img class="tutup hidden" src="{{asset('images/icon_eye-slash.png')}}" width="16"
                                height="16"></img>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-1">
                <div class="w-full px-3 mt-5">
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-1" for="name">
                        Password Confirmation
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-100 text-gray-700 border text-sm border-gray-200 rounded-2xl py-3 px-4 mb-3 leading-tight focus:outline-birutua focus:bg-white"
                        id="password_confirmation" name="password_confirmation" type="password" required
                        placeholder="Password Akun" autocomplete="off">
                </div>
            </div>

            <div class="flex items-center justify-center">
                <button type="submit"
                    class="bg-birutua w-64 hover:scale-105 rounded-2xl text-white font-medium py-2 px-4 focus:outline-none focus:shadow-outline">
                    Buat Akun
                </button>
            </div>
        </form>

    </div>
</section>

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
@endsection