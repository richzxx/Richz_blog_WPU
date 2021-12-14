@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <h2>{{ $post->title }}</h2>
            <p>by : <a href="/author/{{ $post->author->username }}" class="text-decoration-none">
                    {{ $post->author->name }}
                </a> - Category : <a href="/blog?category={{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}</a>
            </p>

            @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
            @else
            <img src=" https://source.unsplash.com/1200x800/?{{ $post->category->name }}" class="img-fluid"
                alt="{{ $post->category->name }}">
            @endif

            <article class="my-3">
                {!! $post->body !!}
            </article>
            <br>
            <a href="/blog">Back to Posts</a>
        </div>
    </div>
</div>
@endsection