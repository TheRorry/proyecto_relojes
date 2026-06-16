@extends('plantilla') {{-- 💡 Asegurate de que apunte a tu plantilla base --}}

@section('titulo', 'Panel de Control - Imperial Relojería')

@section('contenido')
<div class="container-fluid py-4">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold text-dark m-0" style="font-family: 'Playfair Display', serif;">Panel de Administración</h2>
        <p class="text-muted small m-0">Bienvenido al centro de control de Imperial Relojería.</p>
    </div>
    <a href="{{ url('admin/productos') }}" class="btn fw-semibold px-4 text-white rounded-3 shadow-sm" style="background-color: #1A2536; border: 1px solid #1A2536;">
        <i class="bi bi-gear me-2"></i>Gestionar Productos
    </a>
</div>

    <!-- 📊 TARJETAS DE ESTADÍSTICAS (KPIs) -->
    <div class="row g-3 mb-5">
        <!-- Tarjeta Productos -->
        <div class="col-12 col-sm-6 col-xl-3">
    <div class="card border-0 shadow-sm rounded-4 p-3 bg-white">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h6 class="text-muted small text-uppercase mb-1 fw-bold">Piezas en Catálogo</h6>
                <h3 class="m-0 fw-bold text-dark">{{ $totalProductos }}</h3>
            </div>
            <div class="rounded-3 p-3 bg-dark-subtle text-dark">
                <i class="bi bi-watch fs-3"></i>
            </div>
        </div>
    </div>
</div>

        <!-- Tarjeta Usuarios -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-4 p-3 bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted small text-uppercase mb-1 fw-bold">Usuarios Totales</h6>
                        <h3 class="m-0 fw-bold text-dark">{{ $totalUsuarios }}</h3>
                    </div>
                    <div class="rounded-3 p-3 bg-primary-subtle text-primary">
                        <i class="bi bi-people fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta Consultas -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-4 p-3 bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted small text-uppercase mb-1 fw-bold">Consultas Web</h6>
                        <h3 class="m-0 fw-bold text-dark">{{ $totalConsultas }}</h3>
                    </div>
                    <div class="rounded-3 p-3 bg-warning-subtle text-warning-emphasis">
                        <i class="bi bi-envelope-paper fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta Ventas -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-4 p-3 bg-white" style="border-left: 4px solid #D4AF37 !important;">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted small text-uppercase mb-1 fw-bold">Ventas Realizadas</h6>
                        <h3 class="m-0 fw-bold text-dark">{{ $totalPedidos }}</h3>
                    </div>
                    <div class="rounded-3 p-3 bg-success-subtle text-success">
                        <i class="bi bi-currency-dollar fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 👥 SECCIÓN DE TABLAS: USUARIOS Y CONSULTAS -->
    <div class="row g-4">
        
        <!-- 1. TABLA: ÚLTIMOS USUARIOS REGISTRADOS -->
        <div class="col-12 col-lg-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                <div class="card-header bg-transparent border-0 pt-4 px-4 d-flex align-items-center justify-content-between">
                    <h5 class="fw-bold m-0 text-dark" style="font-family: 'Playfair Display', serif;">Usuarios Recientes</h5>
                    <span class="badge bg-light text-dark border">Últimos 5</span>
                </div>
                <div class="card-body px-4 pb-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nombre / Email</th>
                                    <th class="text-center">Rol</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($usuariosRecientes as $user)
                                    <tr>
                                        <td>
                                            <span class="fw-semibold text-dark d-block text-capitalize">{{ $user->nombre }}</span>
                                            <small class="text-muted">{{ $user->email }}</small>
                                        </td>
                                        <td class="text-center">
                                            @if($user->rol && $user->rol->nombre == 'admin')
                                                <span class="badge bg-danger-subtle text-danger px-2.5 py-1.5 rounded-pill fw-semibold text-uppercase" style="font-size: 0.7rem;">Admin</span>
                                            @else
                                                <span class="badge bg-secondary-subtle text-secondary-emphasis px-2.5 py-1.5 rounded-pill fw-semibold text-uppercase" style="font-size: 0.7rem;">Cliente</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2" class="text-center py-4 text-muted">No hay usuarios registrados.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- ✉️ 2. TABLA: CONSULTAS DE CONTACTO -->
        <div class="col-12 col-lg-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                <div class="card-header bg-transparent border-0 pt-4 px-4 d-flex align-items-center justify-content-between">
                    <h5 class="fw-bold m-0 text-dark" style="font-family: 'Playfair Display', serif;">Bandeja de Contactos</h5>
                    <span class="badge bg-warning-subtle text-warning-emphasis">Mensajes</span>
                </div>
                <div class="card-body px-4 pb-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Remitente</th>
                                    <th>Mensaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($consultasRecientes as $consulta)
                                    <tr>
                                        <td>
                                            <span class="fw-semibold text-dark d-block text-capitalize">{{ $consulta->nombre }}</span>
                                            <small class="text-muted d-block">{{ $consulta->email }}</small>
                                        </td>
                                        <td>
                                            <span class="fw-medium text-dark d-block text-truncate" style="max-width: 200px;">{{ $consulta->asunto ?? 'Sin Asunto' }}</span>
                                            <small class="text-muted d-block text-truncate" style="max-width: 250px;">{{ $consulta->mensaje }}</small>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2" class="text-center py-4 text-muted">No se recibieron consultas todavía.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded-4 bg-white">
                <div class="card-header bg-transparent border-0 pt-4 px-4 d-flex align-items-center justify-content-between">
                    <h5 class="fw-bold m-0 text-dark" style="font-family: 'Playfair Display', serif;">Últimas Ventas Realizadas</h5>
                    <span class="badge bg-success-subtle text-success border border-success-subtle">Módulo Comercial</span>
                </div>
                <div class="card-body px-4 pb-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle m-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="py-3">Nro. Pedido</th>
                                    <th class="py-3">Cliente / Email</th>
                                    <th class="py-3">Fecha de Compra</th>
                                    <th class="py-3">Monto Total</th>
                                    <th class="text-center py-3">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($ventasRecientes as $venta)
                                    <tr>
                                        <td class="fw-bold text-muted">#{{ $venta->id }}</td>
                                        <td>
                                            <span class="fw-semibold text-dark d-block text-capitalize">{{ $venta->usuario->nombre ?? 'Usuario Eliminado' }}</span>
                                            <small class="text-muted">{{ $venta->usuario->email ?? '-' }}</small>
                                        </td>
                                        <td>{{ $venta->created_at->format('d/m/Y H:i') }} hs</td>
                                        <td class="fw-bold text-dark">${{ number_format($venta->total, 2, ',', '.') }}</td>
                                        <td class="text-center">
                                            <span class="badge bg-success-subtle text-success px-2.5 py-1.5 rounded-pill fw-medium text-uppercase" style="font-size: 0.7rem;">
                                                {{ $venta->estado }}
                                            </span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-muted">
                                            <i class="bi bi-cash-coin fs-2 d-block mb-2 text-opacity-50"></i>
                                            Aún no se han procesado compras en la tienda.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection