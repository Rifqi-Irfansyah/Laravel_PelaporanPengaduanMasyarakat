@extends('components.footer')
@extends('components.header')
@extends('components.navbar')

@section('navbar')
<div class="hidden sm:ml-6 sm:block">
    <div class="flex space-x-4 font-medium">
        <a href="/" class="hover:bg-birutua text-white rounded-3xl px-3 py-2 text-sm bg-birutua"
            aria-current="page">Dashboard</a>
        <a href="/report" class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Report</a>

        <a href="#" class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Approve</a>

        <a href="#" class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">About
            Us</a>
    </div>
</div>
@endsection

@section('contain')
<section class="bg-white border-b py-8">
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
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            Title
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                        xGETTING STARTED
                    </p>
                    <div class="w-full font-bold text-xl text-gray-800 px-6">
                        Lorem ipsum dolor sit amet.
                    </div>
                    <p class="text-gray-800 text-base px-6 mb-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                        posuere et sit amet ligula.
                    </p>
                </a>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="flex items-center justify-start">
                    <button
                        class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Action
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                        xGETTING STARTED
                    </p>
                    <div class="w-full font-bold text-xl text-gray-800 px-6">
                        Lorem ipsum dolor sit amet.
                    </div>
                    <p class="text-gray-800 text-base px-6 mb-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                        posuere et sit amet ligula.
                    </p>
                </a>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="flex items-center justify-center">
                    <button
                        class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Action
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                        xGETTING STARTED
                    </p>
                    <div class="w-full font-bold text-xl text-gray-800 px-6">
                        Lorem ipsum dolor sit amet.
                    </div>
                    <p class="text-gray-800 text-base px-6 mb-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                        posuere et sit amet ligula.
                    </p>
                </a>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="flex items-center justify-end">
                    <button
                        class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Action
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection