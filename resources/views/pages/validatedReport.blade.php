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
        <a href="{{ route('preview_report') }}"
            class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Review Report</a>
        <a href="{{ route('validated') }}" class="bg-birutua text-white rounded-3xl px-3 py-2 text-sm">Validated
            Report</a>
        <a href="{{ route('done_report') }}"
            class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Done Report</a>
        @endif

        @if (auth()->user()->role=="admin")
        <a href="{{ route('create_office') }}"
            class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Create Account</a>
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
                Laporan Masyarakat
            </h1>
            <p class="leading-normal text-2xl">
                Laporan Masyarakat Yang Telah Tervalidasi Tertera Disini
            </p>
        </div>
        <!--Right Col-->
        <div class=" w-full md:w-3/5 pt-14 px-16">
            <img class="w-full md:w-4/5 z-50" src="{{url('images/ilustration_succes.png')}}" />
        </div>
    </div>
</div>
@endsection

@section('contain')
<section class="bg-offwhite border-b py-8">


    <div
        class="container max-w-5xl mx-auto text-gray-600 items-center min-h-screen gap-4 flex-wrap flex justify-center items-center">
        @if(count($report) > 0)
        <p class="text-center text-2xl text-birutua font-bold w-full">Laporan Tervalidasi</p>

        <!-- Card Report -->
        @foreach ($report as $report)
        <!-- Link To PopUp -->
        <div
            class="w-72 p-2 mx-1 bg-white rounded-xl transform transition-all duration-300 shadow-lg hover:shadow-2xl relative">
            <!-- Comment -->
            @if( $report->total_comment >0)
            <button class="absolute top-0 right-0 bg-kuning text-white rounded-full transition-all hover:scale-110 px-2"
                onclick="showPopupComment('{{ $report->title }}','{{ $report->comments }}')">{{ $report->total_comment }}</button>
            @endif
            <!-- Image -->
            <img class="object-cover rounded-xl h-36 w-full overflow-hidden"
                src="{{url('storage/images_report/'.$report->images)}}" alt="">
            <div class="p-2 overflow-hidden h-48">
                <!-- Heading -->
                <h2 class="font-bold text-lg mb-0 leading-6">{{ $report->title }}</h2>
                <!-- Description -->
                <p class="text-sm text-justify mb-2 text-ellipsis leading-0">{{ $report->message }}</p>
            </div>
            <div class="m-2 flex flex-row w-auto">
                <!-- Button Detail -->
                <button class="text-white text-xs w-auto bg-orange-400 px-5 my-1 rounded-2xl hover:scale-105"
                    onclick="showPopupValidated('{{ $report->id_pengaduan }}', '{{ $report->title }}', '{{ $report->destination_agency }}', '{{ \Carbon\Carbon::parse($report->created_at)->format('d M Y') }}', '{{ $report->status }}', {{ json_encode($report->message) }}, '{{ Auth::user()->id }}', '{{ Auth::user()->role }}')">
                    Detail</button>
                <!-- Status -->
                <div class="w-full  text-xs font-thin py-1 text-right">
                    <div class="text-hijau font-semibold font-md">{{ $report->status }}</div>
                    <div class="text-gray-400">{{ \Carbon\Carbon::parse($report->updated_at)->format('d M Y') }}</div>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Handle empty data -->
        @else
        <div class="text-center items-center p-5">
            <img class="max-w-xl mx-auto" src="{{asset('images/ilustration_empty.png')}}" alt="#">
            <p class="text-gray-600 text-2xl font-bold mt-16">Oops, saat ini tidak ada laporan yang tervalidasi</p>
        </div>
        @endif
    </div>

</section>

</div>
@endsection