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
        <div class="col-md-8">            
            <form class="createform" method="POST" id="createform" action="{{ route('post.save') }}">
                @csrf
                <input type="text" name="title" id="title" placeholder="Título">
                <textarea name="cont" id="cont" cols="30" rows="10" placeholder="Conteúdo"></textarea>
                <button type="submit">Crear</button>
            </form>
        </div>
    </div>
</div>
@endsection