<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav me-auto"> 
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Principal</a>
                <a class="nav-link {{ request()->is('quienes-somos') ? 'active' : '' }}" href="{{ url('/quienes-somos') }}">Quiénes somos</a>
                <a class="nav-link {{ request()->is('catalogo') ? 'active' : '' }}" href="{{ url('/catalogo') }}">Catálogo</a>
                <a class="nav-link {{ request()->is('comercializacion') ? 'active' : '' }}" href="{{ url('/comercializacion') }}">Comercialización</a>
                <a class="nav-link {{ request()->is('consultas') ? 'active' : '' }}" href="{{ url('/consultas') }}">Consultas</a>
                <a class="nav-link {{ request()->is('informacion') ? 'active' : '' }}" href="{{ url('/informacion') }}">Información</a>
                <a class="nav-link {{ request()->is('terminos-y-usos') ? 'active' : '' }}" href="{{ url('/terminos-y-usos') }}">Términos y usos</a>
            </div>

            <div class="navbar-nav">
                @auth
                    <a class="nav-link text-white me-2" href="{{ url('/cliente') }}">Hola, {{ auth()->user()->nombre }}</a>
                    
                    @if(auth()->user()->rol && auth()->user()->rol->nombre === 'admin')
                        <a class="btn btn-outline-warning btn-sm my-auto" href="{{ url('/admin') }}">Panel Admin</a>
                    @else
                
    <a class="nav-link {{ request()->is('carrito') ? 'active' : '' }} position-relative" href="{{ url('/carrito') }}">
        Mi carrito
        
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem;">
                {{ $cantidadCarrito }}
            </span>
    
            </a>
            
                    @endif

                    <form action="{{ url('/logout') }}" method="POST" class="d-inline my-auto ms-2">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Salir</button>
                    </form>
                @else
                    <a class="nav-link {{ request()->is('registro') ? 'active' : '' }}" href="{{ url('/registro') }}">Crear Cuenta</a>
                    <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ url('/login') }}">Iniciar Sesión</a>
                @endauth
            </div>
        </div>
    </div>
</nav>