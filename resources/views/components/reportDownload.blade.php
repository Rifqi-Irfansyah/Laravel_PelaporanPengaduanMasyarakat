<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Surat</title>
    <!-- Tambahkan link ke stylesheet Tailwind CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css"
        integrity="sha512-BKdKP1OzB1G+IZsaKoH0X2jKAgvu3qJH2rTjOfM24CZOlrh8WkR1DRt+fEFj+gHuX9vnZJcYPxZHxOFaUb/+GA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-white px-8">

    <!-- Kop Surat -->
    <div class="flex justify-center">
        <div class="border-t-2 border-black w-full"></div>
    </div>
    <div class="flex justify-between items-center mt-4">
        <div class="text-center">
            <p class="font-bold text-lg">PT. Pengaduan Layanan Masyarakat (Report Now)</p>
            <p class="text-sm">Jl. Wahana Bakti, Kel. Cigugur Tengah, No. 9D 35022</p>
            <p class="text-sm">Kota Cimahi</p>
        </div>
    </div>
    <div class="flex justify-center mt-4">
        <div class="border-b-2 border-black w-full"></div>
    </div>

    <div class="mx-max-2xl mt-0">
        <!-- Identity Report -->
        @foreach($report as $report)

        <p class="text-right">Cimahi, {{ date('d F Y') }}</p>
        <table>
            <tr>
                <td>Id Laporan</td>
                <td> : {{ $report->id_pengaduan }}</td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td> : Pengaduan Masyarakat</td>
            </tr>
            <tr>
                <td>Judul</td>
                <td> : {{ $report->title }}</td>
            </tr>
            <tr class="mt-2">
                <td>Kepada</td>
                <td> : {{ $report->destination_agency }}</td>
            </tr>
        </table>

        <div>
            <br>
            <p>Dengan Hormat,</p>
            <p class="text-justify">{{ $report->message }}</p>
        </div>

        <!-- Isi Surat -->
        <div class="mt-6">
            <p>Hormat, kami</p>
            <p class="mt-8">Report Now</p>
        </div>
        @endforeach
    </div>
</body>

</html>