@extends('plantilla')

@section('contenido')
<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="nombre-empresa" style="color: #C19A6B;">Contacto</h1>
        <p style="color: #C19A6B;">Estamos para asesorarlo en su próxima adquisición</p>
    </div>

    <div class="row g-5">
        <div class="col-lg-5">
            <div class="p-4 rounded-3 shadow-lg border h-100" style="background-color: #1A2238; border-color: #C19A6B !important;">
                <h3 class="text-white mb-4">Información Institucional</h3>
                
                <div class="mb-4">
                    <p class="mb-1 texto-dorado fw-bold">Titular:</p>
                    <p class="text-white">Perez, Juan</p>
                </div>

                <div class="mb-4">
                    <p class="mb-1 texto-dorado fw-bold">Razón Social:</p>
                    <p class="text-white">Imperial Relojería S.R.L.</p>
                </div>

                <div class="mb-4">
                    <p class="mb-1 texto-dorado fw-bold">Domicilio Legal:</p>
                    <p class="text-white">Av. 3 de Abril 1234, Corrientes, Argentina</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14159.029137278436!2d-58.82546323704834!3d-27.476814714063856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1776899565027!5m2!1ses!2sar" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <hr class="border-secondary">

                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-telephone texto-dorado me-3" style="font-size: 1.5rem;"></i>
                    <span class="text-white">+54 379 423-4567</span>
                </div>

                
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-envelope texto-dorado me-3" style="font-size: 1.5rem;"></i>
                    <span class="text-white">contacto@imperialrelojeria.com</span>
                </div>

                <div class="d-flex align-items-center">
                    <i class="bi bi-whatsapp texto-dorado me-3" style="font-size: 1.5rem;"></i>
                    <span class="text-white">+54 379 423-4567</span>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="p-4 bg-white rounded-3 shadow-lg h-100">
                <h3 class="mb-4" style="color: #1A2238;">Envíenos su consulta</h3>
                
                <form action="{{ url('/contacto') }}" method="POST" class="p-4 shadow-sm rounded bg-white">
                    @csrf 
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #1A2238;">Nombre</label>
                        <input type="text" name="nombre" class="form-control border-secondary" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #1A2238;">Correo Electrónico</label>
                        <input type="email" name="email" class="form-control border-secondary" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #1A2238;">Consulta</label>
                        <textarea name="mensaje" class="form-control border-secondary" rows="4" placeholder="¿En qué podemos ayudarle?" required></textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn text-white" style="background-color: #1A2238; border: 1px solid #C19A6B;"> Enviar Mensaje</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection