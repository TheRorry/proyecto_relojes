@extends('plantilla')

@section('titulo', 'Panel Admin - Gestión de Relojes')

@section('contenido')
<div class="row justify-content-center py-4">
    <div class="col-12">

        <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3" style="border-color: #D4AF37 !important;">
            @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm mb-4 rounded-3 d-flex align-items-center" role="alert">
        <i class="bi bi-check-circle-fill me-2 fs-5"></i>
        <div>{{ session('success') }}</div>
        <button type="button" class="btn-close" data-backdrop="false" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
            <div>
                <h1 class="h2 fw-bold" style="color: #1A2536; font-family: 'Playfair Display', serif;">Gestión de Productos</h1>
                <p class="text-muted small m-0">Lista total de piezas y relojes disponibles en la tienda.</p>
            </div>
            <a href="{{ url('admin/productos/create') }}" class="btn fw-semibold px-4 py-2 rounded-3 text-white shadow-sm" style="background-color: #1A2536; border: 1px solid #1A2536;">
                <i class="bi bi-plus-lg me-2"></i>Agregar Nuevo Reloj
            </a>
        </div>

        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle m-0">
                        <thead style="background-color: #1A2536; color: #F8F4EC;">
                            <tr>
                                <th class="text-center py-3" style="color: #D4AF37; width: 80px;">ID</th>
                                <th class="py-3">Producto / Reloj</th>
                                <th class="py-3">Precio</th>
                                <th class="text-center py-3">Stock</th>
                                <th class="text-center py-3" style="width: 150px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($productos as $producto)
                                <tr>
                                    <td class="text-center fw-bold text-muted">#{{ $producto->id }}</td>
                                    
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="rounded-3 d-flex align-items-center justify-content-center bg-light border" style="width: 45px; height: 45px;">
                                                <i class="bi bi-watch fs-4 text-secondary"></i>
                                            </div>
                                            <div>
                                                <span class="fw-semibold d-block text-dark text-capitalize">{{ $producto->nombre }}</span>
                                                <small class="text-muted d-block" style="font-size: 0.75rem;">{{ Str::limit($producto->descripcion, 40) }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td class="fw-semibold text-dark">
                                        ${{ number_format($producto->precio, 2, ',', '.') }}
                                    </td>
                                    
                                    <td class="text-center">
                                        @if($producto->stock > 5)
                                            <span class="badge bg-success-subtle text-success px-2.5 py-1.5 rounded-pill fw-medium">
                                                {{ $producto->stock }} unidades
                                            </span>
                                        @elseif($producto->stock > 0)
                                            <span class="badge bg-warning-subtle text-warning-emphasis px-2.5 py-1.5 rounded-pill fw-medium">
                                                Últimas {{ $producto->stock }}
                                            </span>
                                        @else
                                            <span class="badge bg-danger-subtle text-danger px-2.5 py-1.5 rounded-pill fw-medium">
                                                Sin Stock
                                            </span>
                                        @endif
                                    </td>
                                    
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ url('admin/productos/'.$producto->id.'/edit') }}" class="btn btn-sm btn-outline-secondary rounded-2" title="Editar Producto">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            
                                            <form action="{{ url('admin/productos/'.$producto->id) }}" method="POST" onsubmit="return confirm('¿Seguro que querés eliminar este reloj de forma permanente?');" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger rounded-2" title="Eliminar Producto">
                                                    <i class="bi bi-trash3"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-5 text-muted">
                                        <i class="bi bi-inbox fs-1 d-block mb-2 text-opacity-50"></i>
                                        No hay relojes registrados en la base de datos todavía.
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

<style>
    /* Estilos sutiles para pulir la tabla */
    .table th {
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    .table-hover tbody tr:hover {
        background-color: rgba(26, 37, 54, 0.02) !important;
    }
    .badge {
        font-size: 0.85rem;
    }
</style>
@endsection