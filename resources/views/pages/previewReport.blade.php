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
            class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm ">Create Report</a>
        <a href="{{ route('your_report') }}" class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Your Report</a>
        @endif

        @if (auth()->user()->role=="admin")
        <a href="{{ route('preview_report') }}" class="bg-birutua text-white rounded-3xl px-3 py-2 text-sm">Review Report</a>
        @endif

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

        @if(count($report) > 0)
        <p class="text-center text-2xl my-6 font-bold">Laporan Anda</p>
        @foreach ($report as $report)
        <div class="flex flex-row my-6 justify-between border-solid border-2 border-gray-300 rounded-3xl p-4">
            <div class="w-auto flex-shrink-0">
                <img src="{{url('storage/images_report/'.$report->images)}}" alt="Gambar"
                    class="rounded-xl h-48 w-72 object-cover object-center overflow-hidden">
            </div>

            <div class="relative w-full text-left ml-4 text-gray-600">
                <div class="overflow-hidden h-40">
                    <h2 class="text-md text-left font-bold">{{ $report->title }}</h2>
                    <p class="text-sm text-justify text-ellipsis ">{{ $report->message }}</p>
                </div>
                <div class="absolute bottom-0 text-xs font-bold items-end flex flex-row w-full">
                    <span class="w-auto bg-green-500 text-white px-3 py-1 rounded-3xl ">{{ $report->status }}</span>
                    <span
                        class="w-full text-gray-400 text-xs font-thin py-1 text-right">{{ \Carbon\Carbon::parse($report->created_at)->format('d M Y') }}</span>

                </div>
            </div>
        </div>
        @endforeach
        @else

        <div class="text-center items-center p-5">
            <img class="max-w-xl mx-auto" src="{{asset('images/ilustration_empty.png')}}" alt="#">
            <p class="text-gray-600 text-2xl font-bold pt-5">Ooops Anda Belum Membuat Laporan</p>
            <a href="{{ route('report') }}">
                <button
                    class="py-2 mt-2 px-5 bg-birutua text-white text-sm border rounded-2xl hover:scale-105 duration-300">Buat
                    Laporan
                </button>
            </a>
        </div>
        @endif

    </div>
</section>
@endsection