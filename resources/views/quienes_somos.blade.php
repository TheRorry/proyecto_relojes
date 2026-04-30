@extends('plantilla')

@section('titulo', 'Quiénes Somos - Imperial Relojería')

@section('contenido')
<div class="container my-5">

    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

        {{-- Encabezado --}}
        <div class="p-5 text-white" style="background: linear-gradient(135deg, #1A2238, #111827);">
            <h1 style="font-weight: 700; letter-spacing: 1px;">Quiénes somos</h1>
            <h2 style="color: #C19A6B;">Imperial Relojería</h2>
        </div>

        {{-- Cuerpo Principal --}}
        <div class="card-body p-5" style="background-color: #f8f9fa;">

            <p class="lead">
                En <strong>Imperial Relojería</strong> entendemos que un reloj no es solo un accesorio,
                sino una expresión de estilo, precisión y distinción.
            </p>

            <p>
                Nos especializamos en la comercialización de relojes de alta gama, ofreciendo piezas que combinan
                diseño, tecnología y exclusividad. Con más de <strong>50 años de trayectoria</strong>, hemos construido una reputación basada en la confianza[cite: 23].
            </p>

            <hr class="my-5">

            {{-- Sección de Staff (Requerimiento del Proyecto) --}}
            <h3 class="text-center mb-4" style="color: #1A2238;">Nuestro Equipo</h3>
            <div class="row g-4 justify-content-center">
                
                {{-- Integrante 1 --}}
                <div class="col-md-5">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center" 
                             style="width: 80px; height: 80px; background-color: #1A2238; color: #C19A6B;">
                            <i class="bi bi-person-badge" style="font-size: 2.5rem;"></i>
                        </div>
                        <h4 class="mb-1">Duarte Rodrigo</h4>
                        <p class="text-muted">Director Ejecutivo & Especialista en Alta Relojería</p>
                    </div>
                </div>

                {{-- Integrante 2 --}}
                <div class="col-md-5">
                    <div class="card h-100 border-0 shadow-sm text-center p-4">
                        <div class="mx-auto mb-3 rounded-circle d-flex align-items-center justify-content-center" 
                             style="width: 80px; height: 80px; background-color: #1A2238; color: #C19A6B;">
                            <i class="bi bi-person-gear" style="font-size: 2.5rem;"></i>
                        </div>
                        <h4 class="mb-1">Sardi Gustavo</h4>
                        <p class="text-muted">Director de Operaciones & Curador de Colecciones</p>
                    </div>
                </div>

            </div>

            {{-- Bloques destacados originales --}}
            <div class="row mt-5 text-center">
                <div class="col-md-4">
                    <div class="p-4 rounded-3 shadow-sm h-100" style="background-color: white;">
                        <i class="bi bi-gem mb-3" style="font-size: 2rem; color: #C19A6B;"></i>
                        <h5>Calidad Premium</h5>
                        <p class="text-muted mb-0">Seleccionamos únicamente relojes originales de las mejores marcas del mundo.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-3 shadow-sm h-100" style="background-color: white;">
                        <i class="bi bi-award mb-3" style="font-size: 2rem; color: #C19A6B;"></i>
                        <h5>Trayectoria</h5>
                        <p class="text-muted mb-0">Más de 50 años de experiencia respaldan nuestro compromiso.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 rounded-3 shadow-sm h-100" style="background-color: white;">
                        <i class="bi bi-people mb-3" style="font-size: 2rem; color: #C19A6B;"></i>
                        <h5>Atención Personalizada</h5>
                        <p class="text-muted mb-0">Brindamos asesoramiento experto para ayudarte a elegir el reloj ideal.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection