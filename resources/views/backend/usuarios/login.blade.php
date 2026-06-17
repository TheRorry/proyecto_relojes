@extends ('plantilla')
@section ('contenido')
<div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 90vh;">
    
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-lg border-0" style="background-color: #1A2238;">
            
            <div class="card-header text-center py-4" style="background-color: #1A2238; border-bottom: 4px solid #C19A6B;">
                <h2 class="mb-0 text-uppercase fw-bold" style="color: #C19A6B; letter-spacing: 2px;">Iniciar Sesión</h2>
            </div>

            <div class="card-body p-5">
                <form action="{{ url('/login') }}" method="POST">
                    @csrf 
                    
                    <div class="mb-5 text-white">
                        <label for="email" class="form-label fw-bold" style="font-size: 1.2rem;">Correo Electrónico</label>
                        <input type="email" class="form-control form-control-lg py-3" id="email" name="email" placeholder="nombre@ejemplo.com" required>
                    </div>

                    <div class="mb-5 text-white">
                        <label for="password" class="form-label fw-bold" style="font-size: 1.2rem;">Contraseña</label>
                        <input type="password" id="password" name="password" placeholder="********" class="form-control form-control-lg py-3" required>
                    </div>

                    <div class="d-grid pt-3">
                        <button type="submit" class="btn btn-lg py-3" style="background-color: #C19A6B; color: #1A2238; font-weight: 800; font-size: 1.2rem;">
                            INICIAR SESIÓN
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
@endsection