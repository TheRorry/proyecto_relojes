@extends('plantilla')

@section('contenido')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            
            <div class="mb-4">
                <i class="bi bi-check-circle" style="font-size: 4rem; color: #D4AF37;"></i>
            </div>

            <h1 class="display-5 fw-bold" style="color: #1A2536; font-family: 'Playfair Display', serif;">¡Compra Confirmada!</h1>
            <p class="text-muted lead mb-4">Tu orden de alta relojería ha sido procesada con éxito.</p>

            <div class="card border-0 shadow-sm rounded-4 mb-4" style="background-color: #f8f9fa;">
                <div class="card-body p-4 text-start">
                    <h5 class="fw-bold mb-3" style="color: #1A2536;">Detalles de la operación</h5>
                    <p class="mb-1"><strong class="text-muted">Fecha:</strong> {{ now()->format('d/m/Y H:i') }}</p>
                    <p class="mb-1"><strong class="text-muted">Estado:</strong> Procesado</p>
                    <hr>
                    <p class="small text-muted">Recibirás un correo electrónico con los detalles del seguimiento y la documentación de tu pieza.</p>
                </div>
            </div>

            <a href="{{ url('/catalogo') }}" class="btn btn-lg text-white px-5 rounded-3" style="background-color: #1A2536;">
                Volver al Catálogo
            </a>
        </div>
    </div>
</div>
@endsection