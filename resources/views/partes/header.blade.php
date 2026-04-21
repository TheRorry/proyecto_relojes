<header class="bg-dark-imperial"> 
    <div class="container py-3 d-flex align-items-center">
        <a href="{{ url('/') }}" class="d-flex align-items-center text-decoration-none">
            <img src="{{ asset('img/logo.png') }}" alt="Logo Imperial" width="70">
            <h2 class="nombre-empresa ms-3 mb-0" style="color: #C19A6B;">IMPERIAL RELOJERIA</h2>
        </a>

        <div class="ms-auto" style="max-width: 300px; width: 100%;">
            <form action="{{ url('/buscar') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="query" class="form-control form-control-sm border-secondary bg-dark text-white" 
                           placeholder="Buscar modelo..." aria-label="Buscar">
                    <button class="btn btn-outline-secondary btn-sm" type="submit" style="border-color: #C19A6B; color: #C19A6B;">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    @include('partes.navbar')
</header>