<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('titulo', 'Imperial Relojería')</title>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body style="background: linear-gradient(to bottom, #F8F4EC, #EFE7DA);">

    @include('partes.header')
    
    <main class="container mt-4" 
      style="background-color: #E8DFD1 !important; min-height: 100vh;">
        @yield('contenido')
    </main>

    @include('partes.footer')

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
</body>
</html>