<html>

<head>
    <title>App Name - @yield('title')</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="grid grid-rows-3 grid-cols-2 admin-layout">
        @include('layouts.header')

        @include('layouts.sidebar')

        <main class="main row-start-2 row-end-3 col-start-2 col-end p-10 bg-[#f9f9f9]">
            @yield('content')
        </main>
        @include('layouts.footer')

    </div>

</body>

</html>