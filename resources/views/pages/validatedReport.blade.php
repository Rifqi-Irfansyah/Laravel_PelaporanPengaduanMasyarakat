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
        <a href="{{ route('your_report') }}"
            class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Your Report</a>
        @endif

        @if (in_array(auth()->user()->role, ["admin", "office"]))
        <a href="{{ route('preview_report') }}" class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Review Report</a>
        <a href="{{ route('validated') }}"
            class="bg-birutua text-white rounded-3xl px-3 py-2 text-sm">Validated Report</a>
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
                Laporan Masyarakat
            </h1>
            <p class="leading-normal text-2xl">
                Laporan Masyarakat Yang Telah Dikirim Tertera Disini
            </p>
        </div>
        <!--Right Col-->
        <div class=" w-full md:w-3/5 pt-14 px-16">
            <img class="w-full md:w-4/5 z-50" src="{{url('images/ilustration_review.png')}}" />
        </div>
    </div>
</div>
@endsection

@section('contain')
<section class="bg-gray-100 border-b py-8">


    <div
        class="container max-w-5xl mx-auto text-gray-600 items-center min-h-screen gap-4 flex-wrap flex justify-center items-center">
        @if(count($report) > 0)
        <p class="text-center text-2xl text-birutua font-bold w-full">Laporan Tervalidasi</p>

        <!-- Card Report -->
        @foreach ($report as $report)
        <!-- Link To PopUp -->
        <button
            onclick="showPopupValidated('{{ $report->id_pengaduan }}', '{{ $report->title }}', '{{ $report->destination_agency }}', '{{ \Carbon\Carbon::parse($report->created_at)->format('d M Y') }}', '{{ $report->status }}', {{ json_encode($report->message) }})">
            <div
                class="w-72 p-2 mx-1 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
                <!-- Image -->
                <img class="h-30 object-cover rounded-xl h-36 w-full overflow-hidden" h-40 object-cover rounded-xl"
                    src="{{url('storage/images_report/'.$report->images)}}" alt="">
                <div class="p-2 overflow-hidden h-48">
                    <!-- Heading -->
                    <h2 class="font-bold text-lg mb-0 leading-6">{{ $report->title }}</h2>
                    <!-- Description -->
                    <p class="text-sm text-justify mb-2 text-ellipsis leading-0">{{ $report->message }}</p>
                </div>
                <div class="m-2 flex flex-row w-auto">
                    <!-- Status -->
                    <div class=" text-white text-xs w-auto bg-hijau px-3 py-1 rounded-xl">
                        {{ $report->status }}
                    </div>
                    <!-- Created At -->
                    <div class="w-full text-gray-400 text-xs font-thin py-1 text-right">
                        {{ \Carbon\Carbon::parse($report->created_at)->format('d M Y') }}
                    </div>
                </div>
            </div>
        </button>
        @endforeach
        @endif
    </div>

</section>

</div>
@endsection