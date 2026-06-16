@extends('plantilla')

@section('contenido')
<div class="py-5 text-white">
    <div class="mb-5">
        <h1 class="hansip-font text-start" style="font-size: 2.5rem;">
            <span style="color: #D4AF37;">CARRITO</span>
        </h1>
        <p class="text-secondary small m-0 text-uppercase" style="letter-spacing: 2px;">
            Revisión de piezas seleccionadas para su adquisición
        </p>
    </div>

    {{-- 🛒 ESCENARIO 1: El carrito no existe o no tiene productos --}}
    @if(!$carrito || $carrito->detalles->isEmpty())
        <div class="row justify-content-center py-5">
    <div class="col-md-6 text-center p-5 rounded-4 border" style="background: #1A2536; border-color: #333 !important;">
        {{-- Icono más grande y elegante --}}
        <div class="mb-4">
            <i class="bi bi-bag-x" style="font-size: 5rem; color: #D4AF37;"></i>
        </div>
        
        <h2 class="hansip-font text-white mb-3" style="letter-spacing: 1px;">Tu Carrito esta vacio</h2>
        <p class="text-secondary mb-4" style="font-size: 1.1rem;">
            Aún no has seleccionado ninguna pieza exclusiva de nuestra colección.
        </p>
        
        <a href="{{ route('catalogo.index') }}" 
           class="btn px-5 py-3 rounded-0 text-uppercase fw-bold" 
           style="background-color: #D4AF37; color: #0b0c10; transition: 0.3s;">
            Explorar Colección
        </a>
    </div>
</div>
    @else
        {{-- 💳 ESCENARIO 2: El carrito tiene productos --}}
        <div class="row g-4">
            <div class="col-12 col-lg-8">
                <div class="table-responsive bg-dark-gradient p-3 rounded-3 border border-secondary">
                    <table class="table table-dark table-hover align-middle m-0">
                        <thead>
                            <tr class="text-secondary small hansip-font border-secondary">
                                <th scope="col">Pieza</th>
                                <th scope="col" class="text-center">Cantidad</th>
                                <th scope="col" class="text-end">Precio Unitario</th>
                                <th scope="col" class="text-end">Subtotal</th>
                                <th scope="col" class="text-center">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carrito->detalles as $detalle)
                                <tr class="border-secondary">
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            @if($detalle->producto->imagen)
                                                <img src="{{ asset('img/productos/' . $detalle->producto->imagen) }}" 
                                                     alt="{{ $detalle->producto->nombre }}" 
                                                     style="width: 60px; height: 60px; object-fit: contain;" 
                                                     class="bg-black rounded p-1">
                                            @else
                                                <img src="{{ asset('img/logo.png') }}" 
                                                     alt="No image" 
                                                     style="width: 60px; height: 60px; object-fit: contain;" 
                                                     class="bg-black rounded p-1">
                                            @endif
                                            <div>
                                                <span class="fw-bold d-block text-white">{{ $detalle->producto->nombre }}</span>
                                                <span class="text-muted small">Ref: IR-00{{ $detalle->producto->id }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td class="text-center fw-bold text-magenta">
                                        {{ $detalle->cantidad }}
                                    </td>
                                    
                                    <td class="text-end">
                                        ${{ number_format($detalle->precio_unitario, 0, ',', '.') }}
                                    </td>
                                    
                                    <td class="text-end fw-bold text-white">
                                        ${{ number_format($detalle->subtotal, 0, ',', '.') }}
                                    </td>
                                    
                                    <td class="text-center">
                                        <form action="{{ route('carrito.eliminar', $detalle->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm rounded-circle" title="Remover pieza">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card bg-dark border-magenta p-4 rounded-3 text-white">
                    <h3 class="hansip-font h5 mb-4 border-bottom border-secondary pb-2">RESUMEN DE ADQUISICIÓN</h3>
                    
                    <div class="d-flex justify-content-between mb-3 text-secondary">
                        <span>Items seleccionados:</span>
                        <span>{{ $carrito->detalles->sum('cantidad') }} unidades</span>
                    </div>
                    
                    <hr class="border-secondary">
                    
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="fw-bold fs-5">TOTAL ESTIMADO:</span>
                        <span class="text-magenta fw-bold fs-4">${{ number_format($carrito->total, 0, ',', '.') }}</span>
                    </div>

                    <form action="{{ route('carrito.confirmar') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-stanley-legend w-100 py-3 btn-glitch">
                            <i class="bi bi-shield-check me-2"></i> CONFIRMAR ADQUISICIÓN
                        </button>
                    </form>
                    
                    <div class="text-center mt-3">
                        <a href="{{ route('catalogo.index') }}" class="text-secondary small text-decoration-none">
                            <i class="bi bi-arrow-left me-1"></i> Continuar explorando la colección
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection