@extends('components.footer')
@extends('components.header')
@extends('components.navbar')

@section('navbar')
<div class="hidden sm:ml-6 sm:block">
    <div class="flex space-x-4 font-medium">
        <a href="/" class="hover:bg-birutua text-white rounded-3xl px-3 py-2 text-sm bg-birutua"
            aria-current="page">Dashboard</a>
        <a href="#" class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Reports</a>

        <a href="#" class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Approve</a>

        <a href="#" class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">About
            Us</a>
    </div>
</div>
@endsection





<!-- @section('konten')
<h4>
    Selamat Datang
    <b>{{ Auth::user()->name }}</b>,
    Anda Login sebagai
    <b>{{ Auth::user()->role }}</b>
</h4>
@endsection -->