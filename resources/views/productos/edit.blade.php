@extends('layouts.app')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Editar producto</h1>
        <p class="page-subtitle">{{ $producto->nombre }}</p>
    </div>

    <a class="btn btn-secondary" href="{{ route('productos.index') }}">
        Volver
    </a>
</div>

@if($errors->any())
<div class="alert alert-error">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<section class="panel">
    <div class="panel-body">
        <p class="form-intro">Actualiza los datos del producto y conserva la informacion precisa para ventas y control de stock.</p>

        <form action="{{ route('productos.update', $producto) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-grid">
                <div class="field">
                    <label for="nombre">Nombre</label>
                    <input
                        id="nombre"
                        type="text"
                        name="nombre"
                        value="{{ old('nombre', $producto->nombre) }}"
                    >
                </div>

                <div class="field">
                    <label for="sku">Codigo</label>
                    <input
                        id="sku"
                        type="text"
                        name="sku"
                        value="{{ old('sku', $producto->sku) }}"
                    >
                </div>

                <div class="field">
                    <label for="precio">Precio</label>
                    <input
                        id="precio"
                        type="number"
                        name="precio"
                        value="{{ old('precio', $producto->precio) }}"
                        min="0"
                        step="0.01"
                    >
                </div>

                <div class="field">
                    <label for="stock">Stock</label>
                    <input
                        id="stock"
                        type="number"
                        name="stock"
                        value="{{ old('stock', $producto->stock) }}"
                        min="0"
                        step="1"
                    >
                </div>

                <div class="field">
                    <label for="categoria_id">Categoria</label>
                    <select id="categoria_id" name="categoria_id">
                        @foreach($categorias as $categoria)
                        <option
                            value="{{ $categoria->id }}"
                            @selected(old('categoria_id', $producto->categoria_id) == $categoria->id)
                        >
                            {{ $categoria->nombre }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="field">
                    <label>Estado</label>
                    <div class="check-row">
                        <input type="hidden" name="disponible" value="0">
                        <input
                            id="disponible"
                            type="checkbox"
                            name="disponible"
                            value="1"
                            @checked(old('disponible', $producto->disponible))
                        >
                        <label for="disponible">Disponible</label>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button class="btn btn-primary" type="submit">Actualizar</button>
                <a class="btn btn-secondary" href="{{ route('productos.index') }}">Cancelar</a>
            </div>
        </form>
    </div>
</section>

@endsection
