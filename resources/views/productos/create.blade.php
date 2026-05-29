@extends('layouts.app')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Crear producto</h1>
        <p class="page-subtitle">Registra un nuevo producto en el catalogo.</p>
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
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <div class="form-grid">
                <div class="field">
                    <label for="nombre">Nombre</label>
                    <input
                        id="nombre"
                        type="text"
                        name="nombre"
                        value="{{ old('nombre') }}"
                    >
                </div>

                <div class="field">
                    <label for="sku">Codigo</label>
                    <input
                        id="sku"
                        type="text"
                        name="sku"
                        value="{{ old('sku') }}"
                    >
                </div>

                <div class="field">
                    <label for="precio">Precio</label>
                    <input
                        id="precio"
                        type="number"
                        name="precio"
                        value="{{ old('precio') }}"
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
                        value="{{ old('stock') }}"
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
                            @selected(old('categoria_id') == $categoria->id)
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
                            @checked(old('disponible', true))
                        >
                        <label for="disponible">Disponible</label>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a class="btn btn-secondary" href="{{ route('productos.index') }}">Cancelar</a>
            </div>
        </form>
    </div>
</section>

@endsection
