@extends('plantilla')

@section('contenido')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0" style="background-color: #1A2238;">
                <div class="card-header text-center py-3" style="background-color: #1A2238; border-bottom: 4px solid #C19A6B;">
                    <h4 class="mb-0 text-uppercase" style="color: #C19A6B;">Envianos tu Consulta</h4>
                </div>

                <div class="card-body p-4 ">
                    <p class="text-white text-center mb-4">Completá el formulario y nos pondremos en contacto a la brevedad.</p>
                    
                    <form action="#" method="POST">
                        @csrf <div class="mb-3 text-white">
                            <label for="nombre" class="form-label fw-bold">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Juan Pérez">
                        </div>

                        <div class="mb-3 text-white">
                            <label for="email" class="form-label fw-bold">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com">
                        </div>

                        <div class="mb-3 text-white">
                            <label for="asunto" class="form-label fw-bold">Asunto</label>
                            <select class="form-control" id="asunto" name="asunto">
                                <option value="">Seleccioná una opción</option>
                                <option value="ventas">Ventas</option>
                                <option value="servicio">Servicio Técnico</option>
                                <option value="garantia">Garantía</option>
                                <option value="otros">Otros</option>
                            </select>
                        </div>

                        <div class="mb-3 text-white">
                            <label for="mensaje" class="form-label fw-bold">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Escribí tu consulta aquí..."></textarea>
                        </div>

                        <div class="d-grid pt-2">
                            <button type="submit" class="btn btn-dark btn-lg" style="background-color: #1A2238; color: #C19A6B; border-color: #C19A6B;">ENVIAR CONSULTA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection