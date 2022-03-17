@extends('layouts.main')

@section('container')
    <div class="col-md-8">

        <h1 class="mb-3">{{ $post->title }}</h1>

        <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
        <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            @endif

        <article class="my-3">
            {!! $post->body !!}
        </article>
        <a href="/posts" class="btn btn-success mb-5"><span data-feather="arrow-left"></span> Back to my blog</a>
    </div>

@endsection
