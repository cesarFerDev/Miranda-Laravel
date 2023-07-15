<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
        <title>@yield('title')</title>

        <link rel="stylesheet" href="/styles/style.css"/>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "{{$message}}",
                confirmButtonColor: '#BDAC8D'
                })
        </script>
        @endif
        @if ($message = Session::get('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Thank you!',
                    text: "{{$message}}",
                    confirmButtonColor: '#BDAC8D'
                    })
            </script>
        @endif
    </body>
</html>
