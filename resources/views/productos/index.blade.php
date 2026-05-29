@extends('layouts.app')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Productos</h1>
        <p class="page-subtitle">Administra el inventario y sus categorias.</p>
    </div>

    <a class="btn btn-primary" href="{{ route('productos.create') }}">
        Nuevo producto
    </a>
</div>

<section class="panel">
    <div class="toolbar">
        <strong>{{ $productos->count() }} productos registrados</strong>
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
                        <strong>{{ $producto->nombre }}</strong>
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
