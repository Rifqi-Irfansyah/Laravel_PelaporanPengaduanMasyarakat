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
        <a href="{{ route('report') }}" class="hover:bg-birutua rounded-3xl px-3 py-2 text-sm bg-birutua">Create
            Report</a>
        <a href="{{ route('your_report') }}"
            class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Your Report</a>

        @endif

        @if (auth()->user()->role=="admin")
        <a href="{{ route('preview_report') }}" class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Review Report</a>
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
                Buat Laporan
            </h1>
            <p class="leading-normal text-2xl">
                Buat Dan Kirim Laporan Untuk Pengaduan Dan Aspirasi
            </p>
        </div>
        <!--Right Col-->
        <div class=" w-full md:w-3/5 pt-14 px-16">
            <img class="w-full md:w-4/5 z-50" src="{{url('images/ilustration_create.png')}}" />
        </div>
    </div>
</div>
@endsection

@section('contain')
<section class="bg-white border-b py-8">
    <div class="container max-w-3xl mx-auto text-birutua items-center">

        <p class="text-center text-2xl my-6 font-bold">Input Your Report</p>

        <form method="POST" action="{{ route('submit_report') }}" enctype="multipart/form-data"
            class="w-full max-w-2xl rounded-3xl mx-auto bg-birumuda p-10">
            @csrf

            <div class="mb-1 flex">
                <input
                    class="appearance-none block w-1/2 bg-gray-100 text-gray-700 border text-sm border-gray-200 rounded-2xl py-3 px-4 mr-2 leading-tight focus:outline-none"
                    id="name" name="name" type="text" value="{{ Auth::user()->name }} " readonly>
                <input
                    class="appearance-none block w-1/2 bg-gray-100 text-gray-700 border text-sm border-gray-200 rounded-2xl py-3 px-4 ml-2 leading-tight focus:outline-none"
                    id="email" name="email" type="email" value="{{ Auth::user()->email }} " readonly>
            </div>

            <div class="flex flex-wrap -mx-3 mb-1">
                <div class="w-full px-3 mt-5">
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-1" for="title_report">
                        Title Report
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-100 text-gray-700 border text-sm border-gray-200 rounded-2xl py-3 px-4 mb-3 leading-tight focus:outline-birutua focus:bg-white"
                        id="title_report" name="title_report" type="text" required placeholder="Incident Report">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-1">
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-1" for="description_report">
                        Description Report
                    </label>
                    <textarea
                        class="appearance-none block w-full bg-gray-100 text-gray-700 border text-sm border-gray-200 rounded-2xl py-3 px-4 mb-3 leading-tight focus:outline-birutua focus:bg-white"
                        id="description_report" name="description_report" rows="5" required
                        placeholder="Provide a detailed description of the incident"></textarea>
                </div>
            </div>

            <div class="flex -mx-3 mb-1">
                <div class="w-1/2 px-3">
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-1" for="incident_date">
                        Incident Date
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-100 text-gray-700 border text-sm border-gray-200 rounded-2xl py-3 px-4 mb-3 leading-tight focus:outline-birutua focus:bg-white"
                        id="incident_date" name="incident_date" type="date" required max="{{ date('Y-m-d') }}">
                </div>
                <div class="w-1/2 px-3">
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-1" for="destination_agency">
                        Destination Agency
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-100 text-gray-700 border text-sm border-gray-200 rounded-2xl py-3 px-4 mb-3 leading-tight focus:outline-birutua focus:bg-white"
                        id="destination_agency" name="destination_agency" type="text" required
                        placeholder="e.g. Police Department">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-8">
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-1" for="image_report">
                        Image
                    </label>
                    <input  
                        class="mt-1 text-sm text-gray-600 w-full bg-gray-100 py-2 rounded-2xl file:border-gray-200 file:text-xs file:font-bold file:bg-gray-200 file:rounded-xl file:px-2 file:mx-3 file:py-1"
                        id="image_report" name="image_report" type="file" accept="image/*" required>
                </div>
            </div>

            <div class="flex items-center justify-center">
                <button type="submit"
                    class="bg-birutua w-64 hover:scale-105 rounded-2xl text-white font-medium py-2 px-4 focus:outline-none focus:shadow-outline">
                    Submit
                </button>
            </div>
        </form>

    </div>
</section>
@endsection