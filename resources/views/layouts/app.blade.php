<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="d-flex flex-column align-items-center mr-5">
        <div style="max-width: 50px; height:auto; margin-bottom: 8px;  margin-left:10px;">
            <img src="https://c8.alamy.com/comp/2RGT4W0/piv-letter-logo-design-with-polygon-shape-piv-polygon-and-cube-shape-logo-design-piv-hexagon-vector-logo-template-white-and-black-colors-piv-monogr-2RGT4W0.jpg" alt="">
        </div>
        <div style="font-family: 'Poppins', sans-serif; font-weight: bold; margin-left:10px;">PIV IG</div>

    </div>



    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen dark:bg-white-900">
        @include('layouts.navigation')

        <!-- Page Heading -->

        @isset($header)
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>