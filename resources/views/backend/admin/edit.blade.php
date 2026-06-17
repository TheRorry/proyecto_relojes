@extends('plantilla')

@section('titulo', 'Admin - Editar Reloj')

@section('contenido')
<div class="row justify-content-center py-4">
    <div class="col-12 col-md-8">

        <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3" style="border-color: #D4AF37 !important;">
            <div>
                <h1 class="h2 fw-bold" style="color: #1A2536; font-family: 'Playfair Display', serif;">Modificar Pieza</h1>
                <p class="text-muted small m-0">Actualizá los valores o especificaciones del producto seleccionado.</p>
            </div>
            <a href="{{ url('admin/productos') }}" class="btn btn-outline-secondary btn-sm rounded-3">
                <i class="bi bi-arrow-left me-1"></i> Volver
            </a>
        </div>

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-4">
                
                <form action="{{ url('admin/productos/' . $producto->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <div class="mb-4">
                        <label for="imagen" class="form-label fw-semibold text-dark">Imagen del Reloj</label>
                        
                        @if($producto->imagen)
                            <div class="mb-2 p-2 border rounded-3 bg-light d-inline-block">
                                <small class="text-muted d-block mb-1">Imagen actual:</small>
                                <img src="{{ asset('img/productos/' . $producto->imagen) }}" alt="Reloj actual" class="img-thumbnail" style="max-height: 120px;">
                            </div>
                        @endif

                        <input type="file" name="imagen" id="imagen" class="form-control @error('imagen') is-invalid @enderror">
                        <small class="text-muted">Dejá este campo vacío si no deseás cambiar la imagen actual.</small>
                        @error('imagen')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label fw-semibold text-dark">Nombre del Reloj</label>
                        <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $producto->nombre) }}" required>
                        @error('nombre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label fw-semibold text-dark">Descripción / Detalles Técnicos</label>
                        <textarea name="descripcion" id="descripcion" rows="4" class="form-control @error('descripcion') is-invalid @enderror">{{ old('descripcion', $producto->descripcion) }}</textarea>
                        @error('descripcion')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6 mb-3">
                            <label for="precio" class="form-label fw-semibold text-dark">Precio (USD)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">$</span>
                                <input type="number" name="precio" id="precio" step="0.01" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $producto->precio) }}" required>
                                @error('precio')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 mb-3">
                            <label for="stock" class="form-label fw-semibold text-dark">Stock Disponible</label>
                            <input type="number" name="stock" id="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock', $producto->stock) }}" required>
                            @error('stock')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-4 border-top pt-3 text-end">
                        <button type="submit" class="btn fw-semibold px-5 py-2 text-white rounded-3 shadow-sm" style="background-color: #1A2536; border: 1px solid #1A2536;">
                            <i class="bi bi-arrow-clockwise me-2"></i>Actualizar Reloj
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>
@endsection