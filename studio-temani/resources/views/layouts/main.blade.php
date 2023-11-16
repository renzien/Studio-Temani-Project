<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Studio Temani Official Page | {{ $title }} </title>
    @vite('resources/css/app.css')
    {{-- Remix Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    {{-- Font Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="scroll-smooth scrollbar scrollbar-thin scrollbar-thumb-slate-950 scrollbar-track-white scrollbar">
    @include('partials.navbar')
    <div>
        @yield('container')
    </div>
    @include('partials.footer')
</body>
</html>