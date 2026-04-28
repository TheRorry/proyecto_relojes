@extends('plantilla')

@section('titulo', 'Quiénes Somos - Imperial Relojería')

@section('contenido')
<div class="container my-5">

    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

        <!-- Header elegante -->
        <div class="p-5 text-white" style="background: linear-gradient(135deg, #1A2238, #111827);">
            <h1 style="font-weight: 700; letter-spacing: 1px;">Quiénes somos</h1>
            <h2 style="color: #C19A6B;">Imperial Relojería</h2>
        </div>

        <!-- Contenido -->
        <div class="card-body p-5" style="background-color: #f8f9fa;">

            <p class="lead">
                En <strong>Imperial Relojería</strong> entendemos que un reloj no es solo un accesorio,
                sino una expresión de estilo, precisión y distinción.
            </p>

            <p>
                Nos especializamos en la comercialización de relojes de alta gama, ofreciendo piezas que combinan
                diseño, tecnología y exclusividad. Cada producto que forma parte de nuestro catálogo es seleccionado
                cuidadosamente para garantizar los más altos estándares de calidad.
            </p>

            <p>
                Trabajamos con marcas reconocidas internacionalmente como 
                <strong>Rolex</strong>, <strong>Audemars Piguet</strong> y <strong>Richard Mille</strong>,
                asegurando autenticidad y excelencia en cada detalle.
            </p>

            <p>
                Con más de <strong>50 años de trayectoria</strong>, hemos construido una reputación basada en la confianza,
                la atención personalizada y el compromiso con nuestros clientes.
            </p>

            <!-- Bloques destacados -->
            <div class="row mt-5 text-center">

                <div class="col-md-4">
                    <div class="p-4 rounded-3 shadow-sm h-100" style="background-color: white;">
                        <i class="bi bi-gem mb-3" style="font-size: 2rem; color: #C19A6B;"></i>
                        <h5>Calidad Premium</h5>
                        <p class="text-muted mb-0">
                            Seleccionamos únicamente relojes originales de las mejores marcas del mundo.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-3 shadow-sm h-100" style="background-color: white;">
                        <i class="bi bi-award mb-3" style="font-size: 2rem; color: #C19A6B;"></i>
                        <h5>Trayectoria</h5>
                        <p class="text-muted mb-0">
                            Más de 50 años de experiencia respaldan nuestro compromiso con la excelencia.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-3 shadow-sm h-100" style="background-color: white;">
                        <i class="bi bi-people mb-3" style="font-size: 2rem; color: #C19A6B;"></i>
                        <h5>Atención Personalizada</h5>
                        <p class="text-muted mb-0">
                            Brindamos asesoramiento experto para ayudarte a elegir el reloj ideal.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
@endsection
