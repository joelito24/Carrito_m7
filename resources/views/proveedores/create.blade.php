@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear proveedor</h1>
        <form action="{{ route('proveedores.store') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection

