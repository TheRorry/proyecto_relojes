@extends ('plantilla')
@section ('contenido')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0" style="background-color: #1A2238;">
                <div class="card-header text-center py-3" style="background-color: #1A2238; border-bottom: 4px solid #C19A6B;">
                    <h4 class="mb-0 text-uppercase" style="color: #C19A6B;">Iniciar Sesión</h4>
                </div>

                <div class="card-body p-4 ">
                    
                    <form action="{{ route('consultas.enviar') }}" method="POST">
                        @csrf 
                        
                        

                        <div class="mb-3 text-white">
                            <label for="email" class="form-label fw-bold">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com" required>
                        </div>


                        <div class="mb-3 text-white">
                            <label for="contrasena" class="form-label fw-bold">Contraseña</label>
                            <input type="password" id="contrasena" name="contrasena" placeholder="********" class="form-control border-secondary" required>
                        </div>

                        <div class="d-grid pt-2">
                            <button type="submit" class="btn btn-dark btn-lg" style="background-color: #1A2238; color: #C19A6B; border-color: #C19A6B;">INICIAR SESIÓN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection