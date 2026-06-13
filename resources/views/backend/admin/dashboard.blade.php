@extends('plantilla')

@section('titulo', 'Panel de Administración - Imperial Relojería')

@section('contenido')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4 pb-3" style="border-bottom: 3px solid #C19A6B;">
        <h2 class="text-uppercase fw-bold m-0" style="color: #1A2238; letter-spacing: 1px;">
            <i class="bi bi-speedometer2 me-2"></i>Panel de Administración
        </h2>
        <span class="badge fs-6 px-3 py-2 text-uppercase" style="background-color: #C19A6B; color: #1A2238; fw-bold">Admin</span>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-white" style="background-color: #1A2238;">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="rounded-circle p-3 me-3" style="background-color: rgba(193, 154, 107, 0.2);">
                        <i class="bi bi-people-fill fs-1" style="color: #C19A6B;"></i>
                    </div>
                    <div>
                        <h6 class="text-uppercase text-muted small mb-1" style="color: #A0A5B5 !important;">Usuarios Registrados</h6>
                        <h2 class="display-6 fw-bold mb-0">{{ $totalUsuarios }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-white" style="background-color: #1A2238;">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="rounded-circle p-3 me-3" style="background-color: rgba(193, 154, 107, 0.2);">
                        <i class="bi bi-watch fs-1" style="color: #C19A6B;"></i>
                    </div>
                    <div>
                        <h6 class="text-uppercase text-muted small mb-1" style="color: #A0A5B5 !important;">Productos en Catálogo</h6>
                        <h2 class="display-6 fw-bold mb-0">{{ $totalProductos }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-white" style="background-color: #1A2238;">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="rounded-circle p-3 me-3" style="background-color: rgba(193, 154, 107, 0.2);">
                        <i class="bi bi-cart-check-fill fs-1" style="color: #C19A6B;"></i>
                    </div>
                    <div>
                        <h6 class="text-uppercase text-muted small mb-1" style="color: #A0A5B5 !important;">Pedidos Realizados</h6>
                        <h2 class="display-6 fw-bold mb-0">{{ $totalPedidos }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm mb-5" style="background-color: #1A2238;">
        <div class="card-header text-white p-3" style="background-color: #111726; border-bottom: 2px solid #C19A6B;">
            <h5 class="mb-0 text-uppercase" style="color: #C19A6B; letter-spacing: 0.5px;">
                <i class="bi bi-list-stars me-2"></i>Usuarios Registrados recientemente
            </h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-dark table-hover align-middle mb-0" style="background-color: #1A2238;">
                    <thead class="table-light text-uppercase small">
                        <tr>
                            <th class="py-3 px-4" style="background-color: #efefeF; color: #1A2238;">#</th>
                            <th class="py-3" style="background-color: #efefeF; color: #1A2238;">Nombre</th>
                            <th class="py-3" style="background-color: #efefeF; color: #1A2238;">Email</th>
                            <th class="py-3 text-center" style="background-color: #efefeF; color: #1A2238;">Rol</th>
                            <th class="py-3 text-end px-4" style="background-color: #efefeF; color: #1A2238;">Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($usuariosRecientes as $usuario)
                            <tr>
                                <td class="px-4 fw-bold" style="color: #C19A6B;">{{ $usuario->id }}</td>
                                <td>{{ $usuario->nombre }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td class="text-center">
                                    @if($usuario->rol && $usuario->rol->nombre === 'admin')
                                        <span class="badge text-uppercase px-3 py-1.5" style="background-color: #C19A6B; color: #1A2238; font-weight: bold;">Admin</span>
                                    @else
                                        <span class="badge bg-primary text-uppercase px-3 py-1.5">Cliente</span>
                                    @endif
                                </td>
                                <td class="text-end px-4 text-muted">{{ $usuario->created_at->format('d/m/Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted">No hay usuarios registrados recientemente.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm" style="background-color: #ffffff;">
        <div class="card-header bg-white p-3" style="border-bottom: 1px solid #EFE7DA;">
            <h5 class="mb-0 text-uppercase fw-bold" style="color: #1A2238;">
                <i class="bi bi-lightning-fill me-2" style="color: #C19A6B;"></i>Accesos Rápidos
            </h5>
        </div>
        <div class="card-body d-flex gap-2 flex-wrap">
            <a href="{{ url('/admin/productos') }}" class="btn btn-outline-dark px-4 py-2" style="border-color: #1A2238; color: #1A2238;">
                <i class="bi bi-box-seam me-2"></i>Gestionar Productos
            </a>
            <a href="{{ url('/') }}" class="btn btn-dark px-4 py-2" style="background-color: #1A2238; border-color: #1A2238; color: #ffffff;">
                <i class="bi bi-house-door me-2"></i>Ir al Inicio
            </a>
        </div>
    </div>
</div>
@endsection