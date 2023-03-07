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
        <a href="{{ route('preview_report') }}" class="bg-birutua text-white rounded-3xl px-3 py-2 text-sm">Review
            Report</a>
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
    <div class="container max-w-4xl mx-auto text-birutua items-center">

        <div class="flex flex-row my-6 justify-between border-solid border-2 border-gray-300 rounded-3xl">

            <div class="border-solid w-1/3 border-2 border-black rounded-2xl p-2 mx-4">
                <div class="flex-shrink-0">
                    <img src="{{url('storage/images_report/jalan rusak.jpg')}}" alt="Gambar"
                        class="rounded-xl h-36 w-72 object-cover object-center overflow-hidden">
                </div>

                <div class="relative text-left mx-1 text-gray-600">
                    <div class="overflow-hidden h-52">
                        <h2 class="text-md text-left font-bold pt-2">Laman Judul</h2>
                        <p class="text-sm text-justify text-ellipsis ">Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Quam quo distinctio possimus optio hic deserunt quisquam nisi quasi
                            aspernatur autem maxime, consequuntur aperiam esse voluptatibus ab repellat? Veritatis, rem
                            sequi.</p>
                    </div>
                    <div class="absolute bottom-0 text-xs font-bold items-end flex flex-row w-full">
                        <span class="w-auto bg-green-500 text-white px-3 py-1 rounded-3xl ">Terkirim</span>
                        <span class="w-full text-gray-400 text-xs font-thin py-1 text-right">2 feb 2020</span>
                    </div>
                </div>
            </div>

            <div class="border-solid w-1/3 border-2 border-black rounded-2xl p-2 mx-4">
                <div class="flex-shrink-0">
                    <img src="{{url('storage/images_report/jalan rusak.jpg')}}" alt="Gambar"
                        class="rounded-xl h-36 w-72 object-cover object-center overflow-hidden">
                </div>

                <div class="relative text-left mx-1 text-gray-600">
                    <div class="overflow-hidden ">
                        <h2 class="text-md text-left font-bold pt-2">Laman Judul</h2>
                        <p class="text-sm text-justify text-ellipsis h-28">Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Quam quo distinctio possimus optio hic deserunt quisquam nisi quasi
                            aspernatur autem maxime, consequuntur aperiam esse voluptatibus ab repellat? Veritatis, rem
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla molestias placeat error
                            eligendi ipsa, sapiente in dolor, pariatur ipsum vero, ex quia hic aliquam commodi quis
                            fugiat repellat id porro.
                            sequi.</p>
                    </div>
                    <div class="absolute bottom-0 text-xs font-bold items-end flex flex-row w-full">
                        <span class="w-auto bg-green-500 text-white px-3 py-1 rounded-3xl ">Terkirim</span>
                        <span class="w-full text-gray-400 text-xs font-thin py-1 text-right">2 feb 2020</span>
                    </div>
                </div>
            </div>

            <div class="border-solid w-1/3 border-2 border-black rounded-2xl p-2 mx-4">
                <div class="flex-shrink-0">
                    <img src="{{url('storage/images_report/jalan rusak.jpg')}}" alt="Gambar"
                        class="rounded-xl h-36 w-72 object-cover object-center overflow-hidden">
                </div>

                <div class="relative text-left mx-1 text-gray-600">
                    <div class="overflow-hidden h-52">
                        <h2 class="text-md text-left font-bold pt-2">Laman Judul</h2>
                        <p class="text-sm text-justify text-ellipsis ">Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Quam quo distinctio possimus optio hic deserunt quisquam nisi quasi
                            aspernatur autem maxime, consequuntur aperiam esse voluptatibus ab repellat? Veritatis, rem
                            sequi.</p>
                    </div>
                    <div class="absolute bottom-0 text-xs font-bold items-end flex flex-row w-full">
                        <span class="w-auto bg-green-500 text-white px-3 py-1 rounded-3xl ">Terkirim</span>
                        <span class="w-full text-gray-400 text-xs font-thin py-1 text-right">2 feb 2020</span>
                    </div>
                </div>
            </div>


        </div>



    </div>
</section>
@endsection