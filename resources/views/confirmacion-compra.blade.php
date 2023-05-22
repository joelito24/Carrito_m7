@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center">Confirmación de compra</h1>
                    <p class="text-center">¡Gracias por tu compra!</p>
                    <p class="text-center">Tu compra ha sido procesada con éxito.</p>
                    <p class="text-center">Recibirás una confirmación por correo electrónico.</p>
                    <div class="text-center">
                        <button class="btn btn-primary" onclick="redirect()">Volver a la página principal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Estilos personalizados -->
<style>
    body {
        background-color: #f8f9fa;
    }

    .card {
        background-color: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 0.25rem;
        margin-top: 50px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        padding: 40px;
    }

    h1 {
        color: #4caf50;
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    p {
        color: #555;
        font-size: 18px;
        margin-bottom: 10px;
    }

    .btn-primary {
        background-color: #4caf50;
        border-color: #4caf50;
    }

    .btn-primary:hover {
        background-color: #45a049;
        border-color: #45a049;
    }
</style>

<!-- JavaScript para redireccionar a la página principal -->
<script>
    function redirect() {
        window.location.href = "{{ route('home') }}";
    }
</script>
@endsection
