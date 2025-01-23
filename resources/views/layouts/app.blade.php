<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UNICI') }}</title>

    <link rel="icon" type="image/png" href="/UNICIicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/UNICIicons/favicon.svg" />
    <link rel="shortcut icon" href="/UNICIicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/UNICIicons/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Inventario" />
    <link rel="manifest" href="/UNICIicons/site.webmanifest" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <!-- Establece un color azul claro específico para el fondo -->
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 sm:flex">
            @include('layouts.navigation')
            
            <section class="ml-[0%] w-screen pl-16">
                <!-- Page Heading -->
                @isset($header)
                <header class="bg-black shadow dark:bg-gray-800">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
                @endisset
                
                <!-- Page Content -->
                <main>
                    @yield('content')
                </main>
            </section>
        </div>
    </body>
</html>