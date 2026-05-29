@extends('layouts.app')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Productos</h1>
        <p class="page-subtitle">Administra el inventario, precios y disponibilidad por categoria.</p>
    </div>

    <a class="btn btn-primary" href="{{ route('productos.create') }}">
        Nuevo producto
    </a>
</div>

<div class="stats-grid">
    <div class="surface stat-card stat-card-total">
        <p class="stat-label">Total productos</p>
        <p class="stat-value">{{ $productos->count() }}</p>
    </div>

    <div class="surface stat-card stat-card-success">
        <p class="stat-label">Disponibles</p>
        <p class="stat-value">{{ $productos->where('disponible', true)->count() }}</p>
    </div>

    <div class="surface stat-card stat-card-stock">
        <p class="stat-label">Stock total</p>
        <p class="stat-value">{{ $productos->sum('stock') }}</p>
    </div>
</div>

<section class="panel">
    <div class="toolbar">
        <div class="toolbar-title">
            <strong>Inventario registrado</strong>
            <span>{{ $productos->count() }} productos en el catalogo</span>
        </div>
    </div>

    @if($productos->isEmpty())
    <div class="empty">
        <p>No hay productos registrados.</p>
        <a class="btn btn-primary" href="{{ route('productos.create') }}">
            Crear producto
        </a>
    </div>
    @else
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Codigo</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>
                        <div class="product-name">
                            <span class="product-avatar">{{ strtoupper(substr($producto->nombre, 0, 1)) }}</span>
                            <div class="product-meta">
                                <strong>{{ $producto->nombre }}</strong>
                                <span class="sku">ID {{ $producto->id }}</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="sku">{{ $producto->sku }}</span>
                    </td>
                    <td>{{ $producto->categoria->nombre }}</td>
                    <td>Bs {{ $producto->precio }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td>
                        @if($producto->disponible)
                        <span class="badge badge-success">Disponible</span>
                        @else
                        <span class="badge badge-warning">No disponible</span>
                        @endif
                    </td>
                    <td>
                        <div class="btn-group">
                            <a class="btn-link" href="{{ route('productos.show', $producto) }}">
                                Ver
                            </a>
                            <a class="btn-link" href="{{ route('productos.edit', $producto) }}">
                                Editar
                            </a>
                            <form
                                class="inline-form"
                                action="{{ route('productos.destroy', $producto) }}"
                                method="POST"
                                onsubmit="return confirm('Seguro que desea eliminar este producto?')"
                            >
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" type="submit">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</section>

@endsection
