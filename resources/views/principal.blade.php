@extends('plantilla')

@section('contenido')
    <div class="p-5 mb-4 rounded-3 shadow-lg border" style="background-color: #1A2238; border-color: #C19A6B !important;">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-4 fw-bold texto-dorado mb-3">Excelencia en Alta Relojería</h1>
            <p class="fs-4 text-white mx-auto" style="max-width: 800px;">
                En <span class="texto-dorado fw-bold">Imperial Relojeria</span>, nos dedicamos a la venta de piezas exclusivas que trascienden el tiempo. Con más de 50 años de trayectoria, somos el nexo entre los mejores fabricantes del mundo y tu muñeca.
            </p>
            <div class="mt-4">
                <a href="{{ url('/catalogo') }}" class="btn btn-lg px-4" style="background-color: #C19A6B; color: #1A2238; font-weight: bold;">Explorar Catálogo</a>
            </div>
        </div>
    </div>

    <div class="row g-4 py-5">
    <div class="col-md-4 text-center">
        <a href="{{ url('/quienes-somos') }}" class="text-decoration-none">
            <div class="p-4 h-100 shadow-sm border rounded bg-white tarjeta-link">
                <i class="bi bi-clock-history texto-dorado fs-1 mb-3 d-block"></i>
                <h3 class="texto-dorado">Nuestra Historia</h3>
                <p class="text-muted">Descubrí el origen de Imperial Relojería y nuestro compromiso con la excelencia a través del tiempo.</p>
            </div>
        </a>
    </div>
    
    <div class="col-md-4 text-center">
        <a href="{{ url('/comercializacion') }}" class="text-decoration-none">
            <div class="p-4 h-100 shadow-sm border rounded bg-white tarjeta-link">
                <i class="bi bi-cash-stack texto-dorado fs-1 mb-3 d-block"></i>
                <h3 class="texto-dorado">Gestión Comercial</h3>
                <p class="text-muted">Detalles sobre métodos de pago, envíos nacionales y políticas de seguridad para una compra de excelencia.</p>
            </div>
        </a>
    </div>

    <div class="col-md-4 text-center">
        <a href="{{ url('/informacion') }}" class="text-decoration-none">
            <div class="p-4 h-100 shadow-sm border rounded bg-white tarjeta-link">
                <i class="bi bi-info-circle texto-dorado fs-1 mb-3 d-block"></i>
                <h3 class="texto-dorado">Información de Contacto</h3>
                <p class="text-muted">Estamos para asesorarte. Conocé la ubicación de nuestro showroom y canales directos de comunicación.</p>
            </div>
        </a>
    </div>
</div>
    </div>
@endsection



