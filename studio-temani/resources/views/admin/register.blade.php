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
    {{-- <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/app-dark.css">
    <link rel="stylesheet" href="assets/css/auth.css"> --}}
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <script src="assets/static/js/initTheme.js"></script>
    @yield('register')
    <script src="assets/js/login.js"></script>
</body>