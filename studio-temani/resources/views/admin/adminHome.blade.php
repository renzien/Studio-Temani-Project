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

    {{-- Filepond --}}
    <link rel="stylesheet" href="assets/css/filepond/filepond.css">
    <link rel="stylesheet" href="assets/css/filepond-plugin-image-preview/filepond-plugin-image-preview.css">

    {{-- Toastify --}}
    <link rel="stylesheet" href="assets/js/toastify-js/src/toastify.css">
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
        @yield('homeeditor')
    </div>
</body>
<script src="assets/js/component/dark.js"></script>
<script src="assets/js/perfect-scrollbar/perfect-scrollbar.min.js"></script>
{{-- App JS --}}
<script src="assets/js/app.js"></script>
{{-- Tiny MCE --}}
<script src="assets/js/tinymce/tinymce.min.js"></script>
<script src="assets/js/tinymce/static/pages/tinymce.js"></script>
{{-- Filepond --}}
<script src="assets/css/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
<script src="assets/css/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
<script src="assets/css/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
<script src="assets/css/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
<script src="assets/css/filepond-plugin-image-filter/filepond-plugin-image-filter.min.js"></script>
<script src="assets/css/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
<script src="assets/css/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
<script src="assets/css/filepond/filepond.js"></script>
<script src="assets/js/filepond.js"></script>

{{-- Toastify --}}
<script src="assets/js/toastify-js/src/toastify.js"></script>
