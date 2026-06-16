@extends('plantilla')

@section('contenido')
<div class="py-5 text-center text-white">
    <h1 class="hansip-font text-magenta mb-3">¡COMPRA CONFIRMADA!</h1>
    <p class="text-secondary">Tu orden de alta relojería ha sido procesada de manera exitosa.</p>
    
    <div class="card bg-dark border-magenta mx-auto p-4 my-4" style="max-width: 600px;">
        <h3 class="h5 hansip-font mb-3 text-start">Resumen del Pedido #{{ $venta->id }}</h3>
        <p class="text-start text-secondary small">Fecha: {{ $venta->fecha_venta->format('d/m/Y H:i') }}</p>
        <hr class="border-secondary">
        
        @foreach($venta->detalles as $detalle)
            <div class="d-flex justify-content-between align-items-center mb-2">
                <span>{{ $detalle->producto->nombre }} (x{{ $detalle->cantidad }})</span>
                <span class="text-magenta">${{{ number_format($detalle->subtotal, 0, ',', '.') }}}</span>
            </div>
        @endforeach
        
        <hr class="border-secondary">
        <div class="d-flex justify-content-between align-items-center fw-bold fs-5">
            <span>TOTAL:</span>
            <span class="text-magenta">${{ number_format($venta->total, 0, ',', '.') }}</span>
        </div>
    </div>

    <a href="{{ route('catalogo.index') }}" class="btn-stanley-legend px-5 py-3 btn-glitch">VOLVER AL CATÁLOGO</a>
</div>
@endsection