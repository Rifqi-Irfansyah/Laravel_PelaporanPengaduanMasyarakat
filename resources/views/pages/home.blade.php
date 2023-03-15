@extends('components.footer')
@extends('components.header')
@extends('components.navbar')

@section('navbar')
<div class="hidden sm:ml-6 sm:block">
    <div class="flex space-x-4 font-medium">
        <a href="/" class="hover:bg-birutua text-white rounded-3xl px-3 py-2 text-sm bg-birutua"
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
        <a href="{{ route('create_office') }}"
            class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Create Account</a>
        @endif
    </div>
</div>
@endsection

@section('hero')
<div class="py-32">
    <div class=" container mx-auto flex flex-wrap flex-col md:flex-row items-center pl-24">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
            <p class="uppercase tracking-loose w-full">Pelaporan Pengaduan Masyarakat</p>
            <h1 class="my-4 text-6xl font-bold leading-tight">
                Report Now
            </h1>
            <p class="leading-normal text-2xl">
                Pemimpin yang baik dan bijaksana adalah yang mampu merealisasikan aspirasi masyarakatnya
            </p>
        </div>
        <!--Right Col-->
        <div class=" w-full md:w-3/5 py-6 text-center">
            <img class="w-full md:w-4/5 z-50" src="{{url('images/animate_chat.gif')}}" />
        </div>
    </div>
</div>
@endsection

@section('contain')
<section class="bg-offwhite border-b py-8">
    <div class="container max-w-5xl mx-auto">
        <h2 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">
            Ayo Adukan
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap mt-16">
            <div class="w-5/6 sm:w-1/2 p-6">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                    Jangan Takut !!
                </h3>
                <p class="text-gray-600 mb-8">
                    Kami memahami bahwa Anda mungkin merasa ragu atau takut untuk melaporkan suatu masalah. Namun, kami
                    ingin mengajak Anda untuk tidak ragu atau takut dan melaporkan setiap masalah yang perlu
                    ditindaklanjuti.
                </p>
            </div>
            <div class="w-full sm:w-1/2 p-6">
                <img class="w-auto sm:h-64 mx-auto" src="{{asset('images/ilustration_hesistant.png')}}" alt="">
            </div>
        </div>

        <div class="flex flex-wrap flex-col-reverse sm:flex-row mt-4">
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <img class="w-auto sm:h-64 mx-auto" src="{{asset('images/ilustration_urgent.png')}}" alt="">
            </div>
            <div class="w-full sm:w-1/2 p-6 mt-6">
                <div class="align-middle">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        Pengaduanmu Penting
                    </h3>
                    <p class="text-gray-600 mb-8">
                        Pengaduan Anda penting untuk memastikan tindakan yang tepat dan terkait dapat diambil. Jangan
                        ragu untuk melaporkan masalah apapun yang perlu ditindaklanjuti.
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap mt-4">
            <div class="w-5/6 sm:w-1/2 p-6 mt-6">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                    Perbaiki Situasi
                </h3>
                <p class="text-gray-600 mb-8">
                    Melapor kepada kami adalah langkah awal untuk memperbaiki situasi yang kurang baik. Jangan biarkan
                    masalah terus berlanjut, laporkan kepada kami agar dapat segera ditangani dengan cepat dan efektif.
                </p>
            </div>
            <div class="w-full sm:w-1/2 p-6">
                <img class="w-auto sm:h-64 mx-auto" src="{{asset('images/ilustration_solve.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="bg-white border-b py-8">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12 pb-8">
            <h2 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">
                Cara Kerja Sistem
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 my-0 py-0 rounded-t"></div>
            </div>
        </div>
        <div class="grid gap-8 row-gap-0 lg:grid-cols-3">
            <div class="relative text-center">
                <img src="{{asset('images/icon_step1.png')}}" class="flex mx-auto mb-4 sm:w-20 sm:h-20"
                    style="width:50%; height:auto;">
                </img>
                <div class="flex flex-col items-center justify-center">
                    <div class="w-full text-center">
                        <p class="max-w-md mb-3 text-lg text-gray-900 sm:mx-auto font-bold">
                            Buat Laporan
                        </p>
                    </div>
                </div>
                <div class="top-0 right-0 flex items-center justify-center h-24 lg:-mr-8 lg:absolute">
                    <svg class="w-8 text-birutua transform rotate-90 lg:rotate-0" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
                        <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
                    </svg>
                </div>
            </div>
            <div class="relative text-center">
                <img src="{{asset('images/icon_step2.png')}}" class="flex w-full mx-auto mb-4 sm:w-20 sm:h-20"
                    style="width:50%; height:auto;">
                </img>
                <div class="flex flex-col items-center justify-center">
                    <div class="w-full text-center">
                        <p class="max-w-md mb-3 text-lg text-gray-900 sm:mx-auto font-bold">
                            Laporan di Validasi
                        </p>
                    </div>
                    <div class="top-0 right-0 flex items-center justify-center h-24 lg:-mr-8 lg:absolute">
                        <svg class="w-8 text-birutua transform rotate-90 lg:rotate-0" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
                            <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="relative text-center">
                <img src="{{asset('images/icon_step3.png')}}" class="flex w-full mx-auto mb-4 sm:w-20 sm:h-20"
                    style="width:50%; height:auto;">
                </img>
                <div class="flex flex-col items-center justify-center">
                    <div class="w-full text-center">
                        <p class="max-w-md mb-3 text-lg text-gray-900 sm:mx-auto font-bold">
                            Laporan dicetak
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection