@extends('components.footer')
@extends('components.header')
@extends('components.navbar')

@section('navbar')
<div class="hidden sm:ml-6 sm:block">
    <div class="flex space-x-4 font-medium">
        <a href="/" class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm"
            aria-current="page">Dashboard</a>

        @if (auth()->user()->role=="user")
        <a href="/report" class="hover:bg-birutua rounded-3xl px-3 py-2 text-sm bg-birutua">Report</a>
        @endif

        <a href="#" class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">Approve</a>

        <a href="#" class="text-gray-300 hover:bg-birutua hover:text-white rounded-3xl px-3 py-2 text-sm">About
            Us</a>
    </div>
</div>
@endsection

@section('contain')
<section class="bg-white border-b py-8">
    <div class="container max-w-3xl mx-auto text-birutua items-center">

        <p class="text-center text-2xl my-6 font-bold">Input Your Report</p>

        @if (session('success'))
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('
            success ') }}',
        });
        </script>
        @endif


        <!-- FAILED LOGIN POP UP MODAL -->
        @if ($errors->any())
        <div class="fixed z-50 inset-0 overflow-y-auto flex items-center justify-center" id="popup_send_error">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div
                class="inline-block align-bottom bg-white rounded-2xl px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div class="sm:flex sm:items-start">
                    <div
                        class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-200 sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-red-600" stroke="currentColor" fill="none" viewBox="0 0 23 20">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12.707 10l4.647-4.646a.5.5 0 0 0-.708-.708L12 9.293l-4.646-4.647a.5.5 0 0 0-.708.708L11.293 10l-4.647 4.646a.5.5 0 0 0 .708.708L12 10.707l4.646 4.647a.5.5 0 0 0 .708-.708L12.707 10z">
                            </path>
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class=" mt-2 text-lg leading-6 font-medium text-gray-900">
                            Failed Send
                        </h3>
                    </div>
                </div>
                <div class="mt-4 ml-2">
                    @foreach ($errors->all() as $error)
                    <li class="text-md leading-5 text-gray-500 text-sm">{{ $error }}</li>
                    @endforeach
                </div>
                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button type="button"
                            class="inline-flex justify-center w-full rounded-2xl border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                            data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                            Oke
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <script>
        document.querySelector('[data-te-modal-dismiss]').addEventListener('click', function() {
            document.querySelector('#popup_send_error').remove();
        });
        </script>

        @endif
        <!-- END FAILED LOGIN POP UP MODAL -->

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
                        id="title_report" name="title_report" type="text" placeholder="Incident Report">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-1">
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-1" for="description_report">
                        Description Report
                    </label>
                    <textarea
                        class="appearance-none block w-full bg-gray-100 text-gray-700 border text-sm border-gray-200 rounded-2xl py-3 px-4 mb-3 leading-tight focus:outline-birutua focus:bg-white"
                        id="description_report" name="description_report" rows="5"
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
                        id="incident_date" name="incident_date" type="date" max="{{ date('Y-m-d') }}">
                </div>
                <div class="w-1/2 px-3">
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-1" for="destination_agency">
                        Destination Agency
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-100 text-gray-700 border text-sm border-gray-200 rounded-2xl py-3 px-4 mb-3 leading-tight focus:outline-birutua focus:bg-white"
                        id="destination_agency" name="destination_agency" type="text"
                        placeholder="e.g. Police Department">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-8">
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-1" for="image_report">
                        Image
                    </label>
                    <input type="file" id="image_report" name="image_report" class="mt-1 text-sm">
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

<script>
const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
    event.preventDefault();
    Swal.fire({
        title: 'Are you sure, will send report?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes',
        customClass: {
            popup: 'background',
            confirmButton: 'btn-confirm',
            cancelButton: 'btn-cancel',
            title: 'title',
        }
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    })
})
</script>

@endsection