@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-8 my-3">
            <h2>{{ $post->title }}</h2>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning my-4"><span
                    data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure to Delete this ?')"><span
                        data-feather="x-circle"></span> Delete</button>
            </form>

            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
            </div>
            @else
            <img src=" https://source.unsplash.com/1200x800/?{{ $post->category->name }}" class="img-fluid"
                alt="{{ $post->category->name }}">
            @endif

            <article class="my-3">
                {!! $post->body !!}
            </article>
            <br>
            <a href="/dashboard/posts" class=" btn btn-success my-4"><span data-feather="arrow-left"></span>Back all
                Posts</a>
        </div>
    </div>
</div>
@endsection