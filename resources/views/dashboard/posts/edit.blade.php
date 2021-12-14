@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit your Post</h1>
</div>

<div class="row">
    <div class="col-lg-8 mb-3">

        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control @error('title')
                    is-invalid
                @enderror" id="title" value="{{ old('title', $post->title) }}" required>
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control @error('slug')
                    is-invalid
                @enderror" id="slug" value="{{ old('slug', $post->slug) }}" readonly>
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category" class="form-label @error('category_id')
                    is-invalid
                @enderror">Category</label>
                <select class="form-select @error('category_id')
                    is-invalid
                @enderror" name="category_id">
                    <option readonly selected>Choose the Category</option>
                    @foreach ($categories as $category)
                    @if (old('category_id', $post->category_id) == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                    @endforeach
                </select>
                @error('category_id')
                <div class="invalid-feedback">
                    Please choose the Category
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Edit Image</label>
                <input class="form-control @error('image')
                                is-invalid
                            @enderror" type="file" name="image" id="image" onchange="previewImage()">
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid img-preview d-block mt-3 col-sm-5">
                @else
                <img class="img-fluid img-preview mt-3 col-sm-5">
                @endif
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="body" class="form-label @error('body')
                    is-invalid
                @enderror">Body</label>
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                <div class="invalid-feedback">
                    Please Input the Body field
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');
    
    imgPreview.style.display = 'block';
    
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);
    
    oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
    }
    }
</script>
@endsection