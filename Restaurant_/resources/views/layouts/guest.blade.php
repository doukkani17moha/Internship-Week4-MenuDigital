<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('founder/home/assets/img/favicons/favicon.ico') }}">
    <title>{{ config('app.name', 'Restaurant') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        .bg-image {
            /* Set the background image URL */
            background-image: url('{{ asset('home/assets/images/banner2.jpg') }}') !important;
            /* Set background properties */
            background-size: cover;
            background-position: center;
            /* Add other background properties as needed */
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased bg-image">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-image">
        <div class="w-full sm:max-w-xl mt-6 px-6 py-4"
            style="background-color: #BDB4AF; color: #D98C4A; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
