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

        <p class="text-center text-2xl my-6 font-bold">Laporan Anda</p>
        @foreach ($report as $report)
            <tr>
                <td>{{ $report->title }}</td>
                <td>{{ $report->message }}</td>
                <td>{{ $report->images }}</td>
                <td>{{ $report->status }}</td>
                <td>{{ $report->created_at }}</td>
            </tr>
            @endforeach

        <div class="flex flex-row my-6 justify-between border-solid border-2 border-gray-300 rounded-3xl p-4">
            <div class="w-auto flex-shrink-0">
                <img src="{{url('storage/images_report/jalan rusak.jpg')}}" alt="Gambar"
                    class="rounded-xl h-48 w-72 object-cover object-center overflow-hidden">
            </div>

           

            <div class="relative w-auto text-left ml-4 text-gray-600">
                <div class="overflow-hidden h-40">
                    <h2 class="text-md text-left font-bold">Perbaikan Jalan di Cimahi Selatan </h2>
                    <p class="text-sm text-justify text-ellipsis ">Salah satu pengacara asal Kota Probolinggo, Mulyono
                        mengatakan, dalam UU Nomor
                        22/2009, pihak penyelenggara jalan wajib segera memperbaiki jalan rusak yang dapat mengakibatkan
                        kecelakaan lalu lintas. “Masyarakat berhak meminta ganti rugi segalanya. Baik kerusakan
                        kendaraan atau orangnya,”
                        ujarnya, Sabtu (13/3).Salah satu pengacara asal Kota Probolinggo, Mulyono mengatakan, dalam UU
                        Nomor
                        22/2009, pihak penyelenggara Salah satu pengacara asal Kota Probolinggo, Mulyono mengatakan,
                        dalam UU Nomor
                        22/2009, pihak penyelenggara jalan wajib segera memperbaiki jalan rusak yang dapat mengakibatkan
                        kecelakaan lalu lintas. “Masyarakat berhak meminta ganti rugi segalanya. Baik kerusakan
                        kendaraan atau orangnya,”
                        ujarnya, Sabtu (13/3).Salah satu pengacara asal Kota Probolinggo, Mulyono mengatakan, dalam UU
                        Nomor
                        22/2009, pihak penyelenggara</p>
                </div>
                <div class="absolute bottom-0 text-xs font-bold items-end flex flex-row w-full">
                    <span class="w-auto bg-green-500 text-white px-3 py-1 rounded-3xl ">Terkirim</span>
                    <span class="w-full text-gray-400 text-xs font-thin py-1 text-right">2 Feb 2023</span>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection