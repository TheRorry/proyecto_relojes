@extends('plantilla')

@section('contenido')
<div class="py-5 container">
    {{-- Encabezado --}}
    <div class="text-center mb-5">
        <h1 class="hansip-font mb-2" style="font-size: clamp(2.5rem, 6vw, 4rem); color: #1A2536;">
            IMPERIAL <span class="text-magenta">COLLECTION</span>
        </h1>
        <div class="mx-auto" style="width: 100px; height: 3px; background-color: #D4AF37;"></div>
        <p class="text-secondary hansip-font mt-3" style="letter-spacing: 3px; font-size: 0.8rem;">
            ALTA RELOJERÍA // EDICIONES LIMITADAS
        </p>
    </div>

    <div class="row g-4">
        @forelse($productos as $producto)
        <div class="col-md-4">
            <div class="card-esencia h-100 p-0 overflow-hidden border-magenta card-glow shadow-sm transition-hover">
                
                {{-- Header de la tarjeta --}}
                <div class="product-header px-3 py-2 d-flex justify-content-between align-items-center bg-light">
                    <span class="text-secondary small hansip-font fw-bold">STOCK: {{ $producto->stock }}</span>
                    @if($producto->stock > 0)
                        <span class="badge rounded-pill bg-magenta px-3" style="font-size: 0.6rem;">DISPONIBLE</span>
                    @else
                        <span class="badge rounded-pill bg-danger px-3" style="font-size: 0.6rem;">SIN STOCK</span>
                    @endif
                </div>

                {{-- Contenedor de la imagen corregido --}}
                    <div class="bg-white text-center p-4 d-flex align-items-center justify-content-center" style="height: 280px;">
    
    {{-- PRUEBA DE DEPURACIÓN --}}
<div class="bg-white text-center p-4">
    <p>Ruta en BD: {{ $producto->url_imagen }}</p>
    <img src="{{ Str::startsWith($producto->url_imagen, 'img/') ? asset($producto->url_imagen) : asset('img/productos/' . $producto->url_imagen) }}" 
     alt="{{ $producto->nombre }}">
</div>

</div>

                {{-- Cuerpo de la tarjeta --}}
                <div class="p-4 border-top border-secondary bg-light d-flex flex-column justify-content-between" style="min-height: 220px;">
                    <div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h3 class="hansip-font h5 text-dark mb-0">{{ $producto->nombre }}</h3>
                            <span class="text-magenta fw-bold fs-5">${{ number_format($producto->precio, 0, ',', '.') }}</span>
                        </div>
                        <p class="text-secondary small mb-3 lh-sm">
                            {{ Str::limit($producto->descripcion, 60) }}
                        </p>
                    </div>

                    <div>
                        <form action="{{ route('carrito.agregar', $producto->id) }}" method="POST" class="w-100 m-0">
                            @csrf
                            @if($producto->stock > 0)
                                <button type="submit" class="btn-stanley-legend w-100 py-3 border-0 fw-bold" style="background: #1A2536; color: #D4AF37; transition: 0.3s;">
                                    ADQUIRIR PIEZA
                                </button>
                            @else
                                <button type="button" class="btn btn-outline-secondary w-100 py-3" disabled>
                                    SIN STOCK
                                </button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted">No hay piezas disponibles en este momento.</p>
            </div>
        @endforelse
    </div>
</div>

<style>
    .card-glow:hover { box-shadow: 0 10px 20px rgba(212, 175, 55, 0.2); }
    .btn-stanley-legend:hover { background: #D4AF37 !important; color: #1A2536 !important; }
    .transition-hover { transition: all 0.3s ease; }
</style>
@endsection