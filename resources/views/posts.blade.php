@extends('layouts.app')

@section('content')
<div class="container">
    <a type="button" class="btn btn-primary" href="{{ route('post.create') }}">Create</a>
    <div class="row justify-content-center">
        <div class="col-md-8">            
            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-body">
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->cont }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
