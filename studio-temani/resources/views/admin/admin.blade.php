<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Studio Temani Official</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="assets/img/svg/favicon.svg" type="image/x-icon">
    
    {{-- Remixicon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/app-dark.css">
    <link rel="stylesheet" href="assets/css/iconly.css">
</head>
<body>
    <script src="assets/js/initTheme.js"></script>
    @include('admin.partials.sidebar')
    <div id="main">
        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="ri-menu-line"></i>
          </a>
        </header>

        <div class="page-heading">
          <h3>Profile Statistics</h3>
        </div>
        @yield('contentdash')
    </div>
    <script src="assets/js/component/dark.js"></script>
    <script src="assets/js/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    {{-- App --}}
    <script src="assets/js/app.js"></script>

    {{-- Apexchart --}}
    <script src="assets/js/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
</body>
</html>