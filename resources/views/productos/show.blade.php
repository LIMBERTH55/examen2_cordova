@extends('layouts.app')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">{{ $producto->nombre }}</h1>
        <p class="page-subtitle">
            Codigo: <span class="sku">{{ $producto->sku }}</span>
        </p>
    </div>

    <div class="btn-group">
        <a class="btn btn-secondary" href="{{ route('productos.index') }}">
            Volver
        </a>
        <a class="btn btn-primary" href="{{ route('productos.edit', $producto) }}">
            Editar
        </a>
    </div>
</div>

<section class="panel">
    <div class="panel-body">
        <div class="product-summary">
            <span class="product-avatar">{{ strtoupper(substr($producto->nombre, 0, 1)) }}</span>
            <div>
                <h2>{{ $producto->nombre }}</h2>
                <p>Producto registrado en {{ $producto->categoria->nombre }} con codigo <span class="sku">{{ $producto->sku }}</span>.</p>
            </div>
        </div>

        <div class="details-grid">
            <div class="detail-item">
                <p class="detail-label">Categoria</p>
                <p class="detail-value">{{ $producto->categoria->nombre }}</p>
            </div>

            <div class="detail-item">
                <p class="detail-label">Precio</p>
                <p class="detail-value">Bs {{ $producto->precio }}</p>
            </div>

            <div class="detail-item">
                <p class="detail-label">Stock</p>
                <p class="detail-value">{{ $producto->stock }}</p>
            </div>

            <div class="detail-item">
                <p class="detail-label">Estado</p>
                <p class="detail-value">
                    @if($producto->disponible)
                    <span class="badge badge-success">Disponible</span>
                    @else
                    <span class="badge badge-warning">No disponible</span>
                    @endif
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
