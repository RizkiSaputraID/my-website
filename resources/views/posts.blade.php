@extends('layouts.main')

<header class="thead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">My Blog</h1>
                <hr class="divider">
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5">My Blog, website ini adalah model prototype untuk tugas akhir yang menggunakan framework laravel 8</p>
            </div>
        </div>
    </div>
</header>

@section('container')


    <h1 class="mb-5">{{ $title }}</h1>

    @if ($posts[0]->image)
        <div style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid mt-3">
        </div>
    @else
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" class="img-fluid mt-3">
    @endif


@if ($posts->count())
    <div class="card mb-3">
        {{-- <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}"> --}}
        <div class="card-body text-center">
        <h2 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h2>
            <p>
                <small class="text-muted">
                    <p>By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                        <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>{{ $posts[0]->created_at->diffForHumans() }}</p>
                </small>
            </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Readme More.</a>

        </div>
    </div>
@else
    <p class="text-center fs-2">No Post Found.</p>
@endif



<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                    <h5 class="card-title">{{  $post->title }}</h5>
                        <p>
                            <small class="text-muted">
                                <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}</p>
                            </small>
                        </p>
                    <p class="card-text">{{  $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Readme More.</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<footer class="bg-light py-5">
    <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - Company Name</div></div>
</footer>

@endsection


