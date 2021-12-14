@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 mt-3 text-center">
            @if ($judul === '')
            <h1>All Post</h1>
            <h5>{{ $subTitle }}</h5>
            @else
            {!! $judul !!}
            @endif
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <form action="/blog" method="GET">
                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" value="{{ request('search') }}"
                        placeholder="Search...">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3">

                @if ($posts[0]->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top"
                        alt="{{ $posts[0]->category->name }}">
                </div>
                @else
                <img src=" https://source.unsplash.com/1200x800/?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
                @endif

                <div class="card-body text-center">
                    <h3 class="card-title"><a href="/singlePost/{{ $posts[0]->slug }}"
                            class="text-decoration-none text-dark fs-3">{{ $posts[0]->title }}</a></h5>

                        <p>by : <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">
                                {{ $posts[0]->author->name }}
                            </a> - Category : <a href="/blog?category={{ $posts[0]->category->slug }}"
                                class="text-decoration-none">{{ $posts[0]->category->name }}</a></p>
                        <p class="card-text">{{ $posts[0]->excerpt }}</p>
                        <p class="card-text"><small
                                class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
                        <a href="/singlePost/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read
                            More</a>
                </div>
            </div>
        </div>

    </div>

    <div class="row mb-3">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.5)">
                    <a href="/blog?category={{ $post->category->slug }}"
                        class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                    alt="{{ $post->category->name }}">
                @else
                <img src=" https://source.unsplash.com/700x500/?{{ $post->category->name }}" class="card-img-top"
                    alt="{{ $post->category->name }}">
                @endif

                <div class="card-body">
                    <h5>{{ $post->title }}</h5>
                    <p>by : <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">
                            {{ $post->author->name }}
                        </a> <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small> </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/singlePost/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="col-lg-12">
        <p class="text-center fs-4">No Post Found</p>
    </div>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

</div>
@endsection