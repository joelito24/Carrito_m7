@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ route('proveedores.create') }}" class="btn btn-primary">Crear proveedor</a>
            @if ($proveedoresCount > 0)
                <a href="{{ route('products.create') }}" class="btn btn-primary">Crear producto</a>
            @else
                <div class="alert alert-warning" role="alert">
                    No hay proveedores disponibles. Debes crear al menos un proveedor antes de crear un producto.
                </div>
            @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th style="text-align: center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proveedores as $proveedor)
                        <tr style="vertical-align: middle">
                            <td>{{ $proveedor->proveedor_id }}</td>
                            <td>{{ $proveedor->nombre }}</td>
                            <td>
                                <form action="{{ route('proveedores.destroy', $proveedor->proveedor_id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection



            