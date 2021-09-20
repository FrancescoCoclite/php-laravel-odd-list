@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dettagli prodotto</h2>
        <div class="card mt-5">
            <div class="card-header bg-success text-white text-uppercase">
                {{ $post->title }}
            </div>
            <div class="card-body">
                <h5 class="card-title text-uppercase mt-5"> {{ $post->slug }}</h5>
                <p class="card-text mt-5"> {{ $post->content }}</p>
            </div>
        </div>
        <div class="mt-3">
            <a href="{{ route('admin.posts.index') }} " class="btn btn-primary"> &larr; Back</a>
            <form action="" method="post" class="d-inline-block">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>
    </div>
@endsection