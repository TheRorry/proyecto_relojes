<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-nav me-auto">
            <div class="navbar-nav ms-auto"> <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Principal</a>
                
                <a class="nav-link {{ request()->is('quienes-somos') ? 'active' : '' }}" href="{{ url('/quienes-somos') }}">Quienes somos</a>
                
                <a class="nav-link {{ request()->is('catalogo') ? 'active' : '' }}" href="{{ url('/catalogo') }}">Catalogo</a>
                
                <a class="nav-link {{ request()->is('comercializacion') ? 'active' : '' }}" href="{{ url('/comercializacion') }}">Comercializacion</a>
                
                <a class="nav-link {{ request()->is('consultas') ? 'active' : '' }}" href="{{ url('/consultas') }}">Consultas</a>
                
                <a class="nav-link {{ request()->is('informacion') ? 'active' : '' }}" href="{{ url('/informacion') }}">Informacion</a>
                
                <a class="nav-link {{ request()->is('terminos-y-usos') ? 'active' : '' }}" href="{{ url('/terminos-y-usos') }}">Terminos y usos</a>
            </div>
        </div>
    </div>
</nav>