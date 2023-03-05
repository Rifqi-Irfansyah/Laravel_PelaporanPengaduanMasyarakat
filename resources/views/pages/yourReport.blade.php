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
        <a href="{{ route('report') }}" class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm ">Create Report</a>
        @endif

        <a href="{{ route('your_report') }}" class="bg-birutua rounded-3xl px-3 py-2 text-sm">Your Report</a>

        <a href="#" class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">About
            Us</a>
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
                Laporan Pengaduanmu
            </h1>
            <p class="leading-normal text-2xl">
                Laporan Yang Telah Dikirimkan Akan Segera Diproses Oleh Kami
            </p>
        </div>
        <!--Right Col-->
        <div class=" w-full md:w-3/5 pt-14 px-16">
            <img class="w-full md:w-4/5 z-50" src="{{url('images/ilustration_myreport.png')}}" />
        </div>
    </div>
</div>
@endsection

@section('contain')
<section class="bg-white border-b py-8">
    <div class="container max-w-3xl mx-auto text-birutua items-center">

        <p class="text-center text-2xl my-6 font-bold">Input Your Report</p>


    </div>
</section>
@endsection