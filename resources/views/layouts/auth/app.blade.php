<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="{{ asset('img/hantu.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
        
</head>

<body class="text-white font-sans h-screen w-full relative flex flex-col items-center justify-center">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('img/bg-login.jpg') }}" class="w-screen h-screen opacity-10" alt="Background">
    </div>
    <div class="marquee-container block">
        <div class="marquee-content">
            ✦ Selamat datang di Arsip Cerita Horor Digital ✦ Berhati-hatilah dengan apa yang kamu baca ✦ Jangan
            menoleh ke belakang saat kamu sendirian ✦ Tambahkan cerita horormu di sini ✦ Apakah kamu
            mendengar suara langkah kaki itu? ✦
        </div>
    </div>
    @yield('content')

</html>
