@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row">
        <h1 class="text-center">Post Category : <br><span class="text-primary">{{ $category }}</span></h1>

        <div class="col-lg-6">
            @foreach ($posts as $post)
            <article>
                <h2><a href="/singlePost/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
                <p>by : <a href="/author/{{ $post->author->username }}" class="text-decoration-none">
                        {{ $post->author->name }}
                    </a> - Category : <a href="/categories/{{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a></p>
                <p>{{ $post->excerpt }}</p>
            </article>
            @endforeach
            <a href="/blog" class="mt-4 pb-5">Back to Posts</a>
        </div>
    </div>
</div>
@endsection