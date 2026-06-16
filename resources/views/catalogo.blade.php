@extends('plantilla')

@section('contenido')
<div class="py-5">
    <div class="text-center mb-5">
        <h1 class="hansip-font" style="font-size: clamp(2.5rem, 6vw, 4rem);">
            IMPERIAL <span class="text-magenta">COLLECTION</span>
        </h1>
        <p class="text-secondary hansip-font" style="letter-spacing: 3px; font-size: 0.8rem;">
            ALTA RELOJERÍA // EDICIONES LIMITADAS
        </p>
    </div>

    <div class="row g-4">
        {{-- 🔄 BUCLE DINÁMICO: Recorre todos los productos traídos desde la Base de Datos --}}
        @foreach($productos as $producto)
        <div class="col-md-4">
            <div class="card-esencia h-100 p-0 overflow-hidden border-magenta card-glow">
                
                <div class="product-header px-3 py-2 d-flex justify-content-between align-items-center">
                    <span class="text-secondary small hansip-font">STOCK: {{ $producto->stock }} UNIDADES</span>
                    @if($producto->stock > 0)
                        <span class="badge rounded-pill bg-magenta" style="font-size: 0.5rem;">DISPONIBLE</span>
                    @else
                        <span class="badge rounded-pill bg-danger" style="font-size: 0.5rem;">SIN STOCK</span>
                    @endif
                </div>

                <div class="bg-black text-center p-4 d-flex align-items-center justify-content-center" style="height: 280px;">
                    {{-- 📸 Si el producto tiene foto subida por el admin, la busca en img/productos/ --}}
                    @if($producto->imagen)
                        <img src="{{ asset('img/productos/' . $producto->imagen) }}" class="img-fluid img-catalog" alt="{{ $producto->nombre }}" style="max-height: 240px; object-fit: contain;">
                    {{-- 🖼️ Si es de los originales que tenías sueltos en img/ --}}
                    @else
                        <img src="{{ asset('img/logo.png') }}" class="img-fluid img-catalog" alt="Imagen por defecto" style="max-height: 240px; object-fit: contain;">
                    @endif
                </div>

                <div class="p-4 border-top border-secondary bg-dark-gradient d-flex flex-column justify-content-between" style="min-height: 280px;">
                    <div>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h3 class="hansip-font h5 text-black mb-0">{{ $producto->nombre }}</h3>
                            <span class="text-magenta fw-bold">${{ number_format($producto->precio, 0, ',', '.') }}</span>
                        </div>
                        <p class="text-secondary small mb-3">
                            {{ $producto->descripcion }}
                        </p>
                    </div>

                    <div>
                        <form action="{{ route('carrito.agregar', $producto->id) }}" method="POST" class="w-100 m-0">
                            @csrf
                            @if($producto->stock > 0)
                                <button type="submit" class="btn-stanley-legend w-100 py-3 btn-glitch">
                                    ADQUIRIR PIEZA
                                </button>
                            @else
                                <button type="button" class="btn btn-secondary w-100 py-3" disabled>
                                    SIN STOCK
                                </button>
                            @endif
                        </form>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
        {{-- 🔚 Fin del bucle dinámico --}}
    </div>
</div>
@endsection