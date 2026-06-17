@extends ('plantilla')
@section ('contenido')
<div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 85vh;">
    
    <div class="col-11 col-md-9 col-lg-7 col-xl-5">
        <div class="card shadow-lg border-0" style="background-color: #1A2238;">
            
            <div class="card-header text-center py-5" style="background-color: #1A2238; border-bottom: 4px solid #C19A6B;">
                <h2 class="mb-0 text-uppercase fw-bold" style="color: #C19A6B; letter-spacing: 3px; font-size: 2rem;">Iniciar Sesión</h2>
            </div>

            <div class="card-body p-4 p-md-5">
                <form action="{{ url('/login') }}" method="POST">
                    @csrf 
                    
                    <div class="mb-4 text-white">
                        <label for="email" class="form-label fw-bold" style="font-size: 1.3rem;">Correo Electrónico</label>
                        <input type="email" class="form-control form-control-lg py-3" id="email" name="email" placeholder="nombre@ejemplo.com" required>
                    </div>

                    <div class="mb-4 text-white">
                        <label for="password" class="form-label fw-bold" style="font-size: 1.3rem;">Contraseña</label>
                        <input type="password" id="password" name="password" placeholder="********" class="form-control form-control-lg py-3" required>
                    </div>

                    <div class="d-grid pt-4">
                        <button type="submit" class="btn btn-lg py-4" style="background-color: #C19A6B; color: #1A2238; font-weight: 800; font-size: 1.4rem;">
                            INICIAR SESIÓN
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
@endsection