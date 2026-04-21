@extends('plantilla')

@section('contenido')
    <div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="nombre-empresa" style="color: #C19A6B;">Comercialización</h1>
        <div class="mx-auto" style="width: 60px; height: 3px; background-color: #C19A6B;"></div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 bg-dark-imperial border-0 shadow-sm text-center p-4">
                <div class="card-body">
                    <i class="bi bi-box-seam mb-3" style="font-size: 2.5rem; color: #C19A6B;"></i>
                    <h4 class="text-white mb-3">Entregas</h4>
                    <p style="color: #C19A6B;0">
                        Los relojes son entregados en mano en nuestro local, o pueden ser enviados a todo el país mediante servicios de mensajería confiables y asegurados.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 bg-dark-imperial border-0 shadow-sm text-center p-4">
                <div class="card-body">
                    <i class="bi bi-truck mb-3" style="font-size: 2.5rem; color: #C19A6B;"></i>
                    <h4 class="text-white mb-3">Envíos</h4>
                    <p style="color: #C19A6B;">
                        Contamos con envio privado dentro de Corrientes, y para el resto del país utilizamos servicios de mensajería confiables y asegurados, como Andreani o OCA, garantizando la seguridad de tu reloj durante el transporte.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 bg-dark-imperial border-0 shadow-sm text-center p-4">
                <div class="card-body">
                    <i class="bi bi-credit-card mb-3" style="font-size: 2.5rem; color: #C19A6B;"></i>
                    <h4 class="text-white mb-3">Pagos</h4>
                    <p style="color: #C19A6B;">
                        Aceptamos pagos en efectivo, tarjetas de crédito y débito, y transferencias bancarias. También ofrecemos promociones especiales para pagos al contado.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 p-5 rounded-3 shadow-lg border" style="background-color: #1A2238; border-color: #C19A6B !important;">
        <h3 class="text-white mb-4"><i class="bi bi-info-circle me-2"></i> Información para tu tranquilidad</h3>
        <div class="row">
            <div class="col-md-6 text-white-50">
                <h5 class="text-white">Garantía</h5>
                <p></p>
            </div>
            <div class="col-md-6 text-white-50">
                <h5 class="text-white">Autenticidad</h5>
                <p></p>
            </div>
        </div>
    </div>
</div>
@endsection