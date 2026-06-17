<!DOCTYPE html>
<html lang="es" class="h-100"> <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('titulo', 'Imperial Relojería')</title>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body class="d-flex flex-column h-100 m-0" style="background: linear-gradient(to bottom, #F8F4EC); min-height: 100vh;">

    @include('partes.header')
    
    <main class="flex-grow-1 container mt-4">
        @yield('contenido')
    </main>

    @include('partes.footer')

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>