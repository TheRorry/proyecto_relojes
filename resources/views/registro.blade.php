@extends ('plantilla')
@section ('contenido')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0" style="background-color: #1A2238;">
                <div class="card-header text-center py-3" style="background-color: #1A2238; border-bottom: 4px solid #C19A6B;">
                    <h4 class="mb-0 text-uppercase" style="color: #C19A6B;">Nueva Cuenta</h4>
                </div>

                <div class="card-body p-4 ">
                    <p class="text-white text-center mb-4">Completá el formulario para crear tu nueva cuenta.</p>
                    
                    <form action="{{ route('consultas.enviar') }}" method="POST">
                        @csrf 
                        
                        <div class="mb-3 text-white">
                            <label for="nombre_usuario" class="form-label fw-bold">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Ej: Juan Pérez" required>
                        </div>

                        <div class="mb-3 text-white">
                            <label for="email" class="form-label fw-bold">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com" required>
                        </div>

                        <div class="mb-3 text-white">
                            <label for="email_confirmation" class="form-label fw-bold">Correo Electrónico (De nuevo)</label>
                            <input type="email" class="form-control" id="email_confirmation" name="email_confirmation" placeholder="nombre@ejemplo.com" required>
                        </div>
                        
                        <div class="mb-3 text-white">
                            <label for="nombre" class="form-label fw-bold">Nombre/s</label>
                            <input type="text" id="nombre" name="nombre" class="form-control border-secondary" required>
                        </div>

                        <div class="mb-3 text-white">
                            <label for="apellido" class="form-label fw-bold">Apellido/s</label>
                            <input type="text" id="apellido" name="apellido" class="form-control border-secondary" required>
                        </div>

                        <div class="mb-3 text-white">
                            <label for="contrasena" class="form-label fw-bold">Contraseña</label>
                            <input type="password" id="contrasena" name="contrasena" placeholder="********" class="form-control border-secondary" required>
                        </div>

                        <div class="d-grid pt-2">
                            <button type="submit" class="btn btn-dark btn-lg" style="background-color: #1A2238; color: #C19A6B; border-color: #C19A6B;">CREAR CUENTA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection