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

    <div class="mt-5 p-5 rounded-4 shadow-lg border position-relative"
     style="background: linear-gradient(135deg, #1A2238, #111827); border: 1px solid #C19A6B;">

    <h3 class="text-white mb-4 d-flex align-items-center gap-2"
        style="font-weight: 600; letter-spacing: 1px;">
        <i class="bi bi-shield-check" style="color: #C19A6B; font-size: 1.8rem;"></i>
        Compra con confianza
    </h3>

    <div class="row">
        <div class="col-md-6 text-white-50">
            <div class="mb-4">
                <h5 class="text-white d-flex align-items-center gap-2">
                    <i class="bi bi-award" style="color: #C19A6B;"></i>
                    Garantía
                </h5>
                <p class="mb-0">
                    Todos nuestros relojes cuentan con una garantía de 6 meses ante fallas de fábrica,
                    asegurando una compra segura y respaldada.
                </p>
            </div>

            <div>
                <h5 class="text-white d-flex align-items-center gap-2">
                    <i class="bi bi-arrow-repeat" style="color: #C19A6B;"></i>
                    Cambios y devoluciones
                </h5>
                <p class="mb-0">
                    Podés solicitar cambios dentro de los 7 días posteriores a la compra en caso de inconvenientes.
                </p>
            </div>
        </div>

        <div class="col-md-6 text-white-50">
            <div class="mb-4">
                <h5 class="text-white d-flex align-items-center gap-2">
                    <i class="bi bi-patch-check" style="color: #C19A6B;"></i>
                    Autenticidad
                </h5>
                <p class="mb-0">
                    Trabajamos únicamente con productos originales, verificados antes de su entrega para garantizar calidad.
                </p>
            </div>

            <div>
                <h5 class="text-white d-flex align-items-center gap-2">
                    <i class="bi bi-truck" style="color: #C19A6B;"></i>
                    Envíos seguros
                </h5>
                <p class="mb-0">
                    Todos los envíos son embalados cuidadosamente y cuentan con seguimiento para tu tranquilidad.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection