@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('posts') }}">Posts</a>
        <a class="navbar-brand" href="{{ route('products')}}">Productos</a>
    </nav>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Crear producto</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>proveedor</th>
                        <th>Descripción</th>
                        <th>Precio Unidad</th>
                        <th>Precio Subtotal</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->options->proveedor }}</td>
                        <td>{{ $product->options->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->price * $product->qty }}</td>
                        <td>
                            {{ $product->qty }}
                        </td>
                        <td>
                            <form action="{{ route('cart.remove', $product->rowId) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <p class="text-center">Total: {{ Cart::Total() }}</p>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection

                  