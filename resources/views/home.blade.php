@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('posts')}}">Posts</a>
        <a class="navbar-brand" href="{{ route('products')}}">Productos</a>
    </nav>
</div>
@endsection
