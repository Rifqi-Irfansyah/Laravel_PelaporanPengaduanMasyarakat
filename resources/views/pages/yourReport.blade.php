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

        <p class="text-center text-2xl my-6 font-bold">Laporan Mu</p>

        <div class="flex flex-row my-6 justify-between bg-birumuda rounded-lg shadow-lg p-4 bg-gray-200">
            <div class="w-auto flex-shrink-0">
                <img src="{{url('storage/images_report/jalan rusak.jpg')}}" alt="Gambar"
                    class="rounded-xl h-48 w-72 object-cover object-center overflow-hidden">
            </div>
            <div class="w-4/10 text-left ml-4">
                <h2 class="text-xl text-left font-bold">Perbaikan Jalan di Cimahi Selatan</h2>
                <p>Salah satu pengacara asal Kota Probolinggo, Mulyono mengatakan, dalam UU Nomor 22/2009, pihak
                    penyelenggara jalan wajib segera memperbaiki jalan rusak yang dapat mengakibatkan kecelakaan lalu
                    lintas. “Masyarakat berhak meminta ganti rugi segalanya. Baik kerusakan kendaraan atau orangnya,”
                    ujarnya, Sabtu (13/3).</p>
            </div>
            <div class="w-1/10 text-right">
                <span class="bg-green-500 text-white rounded-full px-3 py-1 text-sm font-semibold">Terkirim</span>
            </div>
        </div>

        <div class="flex flex-row my-6 justify-between bg-white rounded-lg shadow-lg p-4 bg-gray-200">
            <div class="w-auto flex-shrink-0">
                <img src="{{url('storage/images_report/lemontea.jpg')}}" alt="Gambar"
                    class="rounded-xl h-48 w-72 object-cover object-center overflow-hidden">
            </div>
            <div class="w-1/4 text-left">
                <h2 class="text-xl text-left font-bold">Perbaikan Jalan</h2>
            </div>
            <div class="w-1/4 text-right">
                <span class="bg-green-500 text-white rounded-full px-3 py-1 text-sm font-semibold">Terkirim</span>
            </div>
        </div>

        <div class="flex flex-row my-6 justify-between bg-white rounded-lg shadow-lg p-4 bg-gray-200">
            <div class="w-auto flex-shrink-0">
                <img src="{{url('storage/images_report/jalan rusak.jpg')}}" alt="Gambar"
                    class="rounded-xl h-48 w-72 object-cover object-center overflow-hidden">
            </div>
            <div class="w-1/4 text-left">
                <h2 class="text-xl text-left font-bold">Perbaikan Jalan</h2>
            </div>
            <div class="w-1/4 text-right">
                <span class="bg-green-500 text-white rounded-full px-3 py-1 text-sm font-semibold">Terkirim</span>
            </div>
        </div>

    </div>
</section>
@endsection