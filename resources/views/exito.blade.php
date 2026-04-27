@extends('plantilla')

@section('contenido')
<section class="container mt-5">
    <div class="p-5 rounded-3 shadow-lg border text-white" style="background-color: #1A2238; border-color: #C19A6B !important;">
        <h1 class="texto-dorado">¡Mensaje enviado con éxito!</h1>
        <p class="lead">
            Hola <strong>{{ $nombre }}</strong>, qué bueno recibir tu mensaje.
        </p>
        <p>
            Tu consulta sobre <strong class="texto-dorado">{{ $asunto }}</strong> ha sido recibida.
        </p>
        <p>
            Un miembro del equipo de ventas se pondrá en contacto con vos al correo: 
            <strong class="texto-dorado">{{ $email }}</strong>
        </p>
        <hr class="border-light">
        <p>¡Muchas gracias por confiar en <strong>Imperial Relojería</strong>!</p>
        
        <a href="{{ url('/') }}" class="btn btn-outline-light mt-3">Volver al inicio</a>
    </div>
</section>
@endsection