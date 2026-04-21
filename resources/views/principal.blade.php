@extends('plantilla')

@section('contenido')
    <div class="p-5 mb-4 rounded-3 shadow-lg border" style="background-color: #1A2238; border-color: #C19A6B !important;">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-4 fw-bold texto-dorado mb-3">Excelencia en Alta Relojería</h1>
            <p class="fs-4 text-white mx-auto" style="max-width: 800px;">
                En <span class="texto-dorado fw-bold">Imperial Relojeria</span>, nos dedicamos a la curaduría y venta de piezas exclusivas que trascienden el tiempo. Con más de 50 años de trayectoria, somos el nexo entre los mejores fabricantes del mundo y tu muñeca.
            </p>
            <div class="mt-4">
                <a href="{{ url('/catalogo') }}" class="btn btn-lg px-4" style="background-color: #C19A6B; color: #1A2238; font-weight: bold;">Explorar Catálogo</a>
            </div>
        </div>
    </div>

    <div class="row g-4 py-5">
        <div class="col-md-4 text-center">
            <div class="p-4 h-100 shadow-sm border rounded bg-white">
                <i class="bi bi-clock-history texto-dorado fs-1 mb-3 d-block"></i>
                <h3 class="texto-dorado">Piezas de Colección</h3>
                <p class="text-muted">Acceso exclusivo a modelos de edición limitada de las casas más prestigiosas: Rolex, AP y Patek Philippe.</p>
            </div>
        </div>
        
        <div class="col-md-4 text-center">
            <div class="p-4 h-100 shadow-sm border rounded bg-white">
                <i class="bi bi-tools texto-dorado fs-1 mb-3 d-block"></i>
                <h3 class="texto-dorado">Servicio Técnico</h3>
                <p class="text-muted">Mantenimiento especializado y restauración de mecanismos mecánicos con repuestos originales certificados.</p>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <div class="p-4 h-100 shadow-sm border rounded bg-white">
                <i class="bi bi-shield-check texto-dorado fs-1 mb-3 d-block"></i>
                <h3 class="texto-dorado">Tasación Oficial</h3>
                <p class="text-muted">Certificamos la autenticidad y el valor de mercado de sus piezas para seguros o transacciones privadas.</p>
            </div>
        </div>
    </div>
@endsection