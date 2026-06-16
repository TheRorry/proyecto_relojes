@extends('plantilla')

@section('titulo', 'Admin - Agregar Nuevo Reloj')

@section('contenido')
<div class="row justify-content-center py-4">
    <div class="col-12 col-md-8">

        <!-- ENCABEZADO -->
        <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3" style="border-color: #D4AF37 !important;">
            <div>
                <h1 class="h2 fw-bold" style="color: #1A2536; font-family: 'Playfair Display', serif;">Agregar Nueva Pieza</h1>
                <p class="text-muted small m-0">Inspirá confianza cargando las especificaciones de alta relojería.</p>
            </div>
            <a href="{{ url('admin/productos') }}" class="btn btn-outline-secondary btn-sm rounded-3">
                <i class="bi bi-arrow-left me-1"></i> Volver a la lista
            </a>
        </div>

        <!-- TARJETA DEL FORMULARIO -->
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-4">
                
                <form action="{{ url('admin/productos') }}" method="POST" enctype="multipart/form-data">
                    @csrf
    
    <!-- Tu input de tipo file tiene que tener un name, por ejemplo: "imagen" -->
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen del Reloj</label>
        <input type="file" name="imagen" id="imagen" class="form-control">
    </div>

                    <!-- Nombre del Producto -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label fw-semibold text-dark">Nombre del Reloj</label>
                        <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}" placeholder="Ej: Rolex Submariner Gold" required>
                        @error('nombre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Descripción -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label fw-semibold text-dark">Descripción / Detalles Técnicos</label>
                        <textarea name="descripcion" id="descripcion" rows="4" class="form-control @error('descripcion') is-invalid @enderror" placeholder="Materiales, calibre, reserva de marcha, cristal de zafiro...">{{ old('descripcion') }}</textarea>
                        @error('descripcion')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <!-- Precio -->
                        <div class="col-12 col-sm-6 mb-3">
                            <label for="precio" class="form-label fw-semibold text-dark">Precio (ARS)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">$</span>
                                <input type="number" name="precio" id="precio" step="0.01" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio') }}" placeholder="0.00" required>
                                @error('precio')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Stock -->
                        <div class="col-12 col-sm-6 mb-3">
                            <label for="stock" class="form-label fw-semibold text-dark">Stock Inicial</label>
                            <input type="number" name="stock" id="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock') }}" placeholder="Ej: 5" required>
                            @error('stock')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>

                    <!-- Botón de Envío -->
                    <div class="mt-4 border-top pt-3 text-end">
                        <button type="submit" class="btn fw-semibold px-5 py-2 text-white rounded-3 shadow-sm" style="background-color: #1A2536; border: 1px solid #1A2536;">
                            <i class="bi bi-check-circle me-2"></i>Guardar en Catálogo
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>
@endsection