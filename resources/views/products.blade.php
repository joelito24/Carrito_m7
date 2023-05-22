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
                        <th>proveedor</th>
                        <th>Descripción</th>
                        <th>Stock</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr style="vertical-align: middle">
                        <td>{{ $product->product_id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->provider->nombre }}</td>
                        <td>{{ $product->description }}</td>
                        <td @if ($product->stock <= 5) style="background-color: #FFFFE0" @endif>{{ $product->stock }}
                            @if ($product->stock <= 5)
                                <i class="fas fa-exclamation-circle"></i>
                            @endif
                        </td>
                        <td>
                            <input type="number" class="form-control" id="cantidad-{{$product->product_id}}" name="cantidad" step="1" value="{{ $product->cantidad }}">
                        </td>
                        <td>{{ $product->price }}</td>
                        <td style="text-align: center">
                            <a href="{{ route('products.edit', $product->product_id) }}" class="btn btn-primary" style="padding-bottom: 5px; width: 100%">Editar</a>
                            <form action="{{ route('products.destroy', $product->product_id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" style="padding-bottom: 5px; width: 100%">Eliminar</button>
                            </form>
                            <form action="{{ route('cart.save', $product->product_id) }}" id="formAddCart-{{$product->product_id}}" method="POST">
                                @csrf
                                <input type="hidden" name="quantity" id="quantity-{{$product->product_id}}" value="{{ $product->cantidad }}">
                                <div class="btn btn-success" id="addCart" onclick="submitForm({{$product->product_id}})" style="padding-bottom: 5px; width: 100%">Agregar al carrito</div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function submitForm(id) {
        var cantidad = $('#cantidad-'+id).val();
        $('#quantity-'+id).val(cantidad);
        $('#formAddCart-'+id).submit();
    }
</script>
@endsection


            