<!doctype html>
<html>

<style>
.gradient {
    background: linear-gradient(90deg, #758ABA 0%, #758ABA 100%);
}
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
@extends('components.footer')
@extends('components.header')
@extends('components.navbar')
</body>




<!-- @section('konten')
<h4>
    Selamat Datang
    <b>{{ Auth::user()->name }}</b>,
    Anda Login sebagai
    <b>{{ Auth::user()->role }}</b>
</h4>
@endsection -->