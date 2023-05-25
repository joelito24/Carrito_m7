@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">            
            <form class="createform" method="POST" id="createform" action="{{ route('post.update', $post->id) }}">
                @csrf
                @method('PUT')
                <input type="text" name="title" id="title" placeholder="Título" value="{{ $post->title }}">
                <textarea name="cont" id="cont" cols="30" rows="10" placeholder="Conteúdo">{{ $post->cont }}</textarea>
                <button type="submit">Editar</button>
            </form>
        </div>
    </div>
</div>
@endsection