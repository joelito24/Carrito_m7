@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background: url(../img/bgpro.jpg) no-repeat center center fixed; background-size: cover; height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="jumbotron text-center" style="background-color: darkblue; color: white;">
                <h1>Sule's Shop</h1>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 90px;">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <a href="{{ route('cart.index') }}" class="btn btn-primary btn-lg btn-block" style="background-color: darkblue;">Carrito</a>
            </div>
            <div class="col-md-2">
                <a href="{{ route('products') }}" class="btn btn-primary btn-lg btn-block" style="background-color: darkblue;">Productos</a>
            </div>
            <div class="col-md-2">
                <a href="{{ route('proveedores.create') }}" class="btn btn-primary btn-lg btn-block" style="background-color: darkblue;">Proveedores</a>
            </div>
        </div>
    </div>
</div>
@endsection
