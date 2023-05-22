@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear producto</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="proveedor_id" class="form-label">Proveedor</label>
                <select class="form-select" id="proveedor_id" name="proveedor_id">
                    @foreach ($proveedores as $proveedor)
                        <option value="{{ $proveedor->proveedor_id }}">{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" value=""></textarea>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" step="1">
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" step="1">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" class="form-control" id="price" name="price" step="0.50">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
