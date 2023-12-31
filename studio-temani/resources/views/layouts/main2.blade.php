<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Studio Temani Official Page | @yield('title') </title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    @vite('resources/css/app.css')
    {{-- Remix Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    {{-- Owl Carousel --}}
    <link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel/owl.theme.default.min.css">

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Font Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="scroll-smooth scrollbar-thin scrollbar-thumb-slate-950 scrollbar-track-white">
    @include('partials.navbar2')
    <div>
        @yield('container2')
    </div>
    @include('partials.footer')
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
{{-- jQuery --}}
<script src="assets/js/jquery/jquery-3.7.1.min.js"></script>

{{-- Owl Carousel --}}
<script src="assets/js/owl-carousel/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel();
    });
</script>

</html>
