<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen md:grid grid-rows-3 grid-cols-2 admin-layout">

        @include('layouts.navigation')

        @include('layouts.sidebar')


        <!-- Page Content -->
        <main class="main row-start-2 row-end-3 col-start-2 col-end p-10 bg-[#f9f9f9]">
            {{ $slot }}
        </main>
        @include('layouts.footer')

    </div>
</body>

</html>