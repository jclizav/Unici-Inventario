<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'UNICI') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    @include('layouts.navigation')
    <body class="font-sans antialiased">
   
        <!-- Establece un color azul claro específico para el fondo -->
      
           
            
           
                <!-- Page Heading -->
                @isset($header)
                
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        
                        {{ $header }}
                    </div>
            

                
                @endisset
                
                <!-- Page Content -->
                <main>
                    @yield('content')
                </main>
            </section>
        </div>
    </body>
</html>