@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Crear producto</a>
            <a href="{{ route('proveedores.create') }}" class="btn btn-primary">Crear proveedor</a>
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
            <div class="rowjustify-content-end">
                <div class="col-md-12">
                    <p class="text-center" style="font-size: 20px; font-weight: bold; text-align-last: right;">Total: {{ Cart::Total() }}</p>
                </div>
            </div>
            <div class="row" style="text-align: right;">
                <div class="col-md-12">
                    <button class="btn btn-success" id="btnComprar" onclick="submitComprado()">Comprar</button>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    function submitComprado(){
        window.location.href = "{{ route('confirmacion-compra') }}";
    }
</script>

    


                  