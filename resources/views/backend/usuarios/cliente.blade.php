@extends ('plantilla')
@section('titulo', 'Mi Cuenta - Imperial Relojería')

@section('contenido')
<div class="row justify-content-center py-4">
    <div class="col-12 col-lg-10">

        <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3" style="border-color: #D4AF37 !important;">
            <h1 class="h2 fw-bold" style="color: #1A2536; font-family: 'Playfair Display', serif;">Mi Cuenta</h1>
            <span class="badge px-3 py-2 fs-6 rounded-pill" style="background-color: #1A2536; color: #D4AF37; border: 1px solid #D4AF37;">
                <i class="bi bi-gem me-1"></i> Cliente Premium
            </span>
        </div>

        <div class="card border-0 shadow-sm rounded-4 mb-4" style="background-color: #1A2536; color: #F8F4EC;">
            <div class="card-body p-4">
                <div class="d-flex align-items-center gap-4">
                    <div class="rounded-circle d-flex align-items-center justify-content-center bg-light shadow-sm" style="width: 80px; height: 80px; min-width: 80px;">
                        <i class="bi bi-person-fill fs-1" style="color: #1A2536;"></i>
                    </div>
                    <div>
                        <h2 class="h3 fw-semibold m-0 text-capitalize" style="color: #D4AF37;">
                            {{ auth()->user()->nombre }}
                        </h2>
                        <p class="m-0 opacity-75 mt-1">
                            <i class="bi bi-envelope me-2"></i>{{ auth()->user()->email }}
                        </p>
                        <small class="d-block mt-2 opacity-50 italic">
                            <i class="bi bi-calendar3 me-2"></i>Miembro desde: {{ auth()->user()->created_at->format('d/m/Y') }}
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            
            <div class="col-12 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 bg-white transition-hover">
                    <div class="card-body d-flex flex-column align-items-center justify-content-between">
                        <div>
                            <div class="rounded-circle d-flex align-items-center justify-content-center mb-3 mx-auto" style="width: 60px; height: 60px; background-color: #F8F4EC;">
                                <i class="bi bi-cart3 fs-2" style="color: #1A2536;"></i>
                            </div>
                            <h4 class="fw-bold" style="color: #1A2536;">Mi Carrito</h4>
                            <p class="text-muted small px-3">Revisá las piezas exclusivas seleccionadas que agregaste a tu orden.</p>
                        </div>
                        <a href="{{ url('/carrito') }}" class="btn w-100 mt-3 fw-semibold py-2 rounded-3 text-white" style="background-color: #1A2536; border: 1px solid #1A2536;">
                            <i class="bi bi-bag-check me-2"></i>Ver carrito
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 bg-white transition-hover">
                    <div class="card-body d-flex flex-column align-items-center justify-content-between">
                        <div>
                            <div class="rounded-circle d-flex align-items-center justify-content-center mb-3 mx-auto" style="width: 60px; height: 60px; background-color: #F8F4EC;">
                                <i class="bi bi-watch fs-2" style="color: #1A2536;"></i>
                            </div>
                            <h4 class="fw-bold" style="color: #1A2536;">Productos</h4>
                            <p class="text-muted small px-3">Explorá nuestra colección de alta relojería y piezas de colección.</p>
                        </div>
                        <a href="{{ url('/catalogo') }}" class="btn w-100 mt-3 fw-semibold py-2 rounded-3 dynamic-btn" style="background-color: transparent; color: #1A2536; border: 2px solid #1A2536;">
                            <i class="bi bi-search me-2"></i>Ver productos
                        </a>
                    </div>
                </div>
            </div>

        </div> {{-- Fin row --}}

    </div>
</div>

<style>
    /* Efecto sutil de elevación en las tarjetas al pasar el mouse */
    .transition-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .transition-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.08) !important;
    }
    .dynamic-btn:hover {
        background-color: #1A2536 !important;
        color: #F8F4EC !important;
    }
</style>
@endsection