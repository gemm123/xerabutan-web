@extends('layouts.layouts.main')
@section('template-dashboard')
<h1>Edit Post</h1>

<form action="/dashboard/posts/{{ $post->slug }}" method="post" class="biru-xerabutan" enctype="multipart/form-data">
    @method('put')
    @csrf
    {{-- <div class="form-floating mb-3">
        <input type="text" name="name" id="floatingInput" class="form-control @error('name') is-invalid @enderror" required value="{{ old('name') }}">
        <label for="floatingInput">Nama</label>
    </div> --}}
    <label for="title" class="form-label fw-bold" >Judul</label>
    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" required autofocus value="{{ old('title', $post->title)}}">
    @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    {{-- <label for="slug" class="form-label fw-bold">Slug</label> --}}
    <input type="hidden" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" required value="{{ old('slug', $post->slug) }}">
    @error('slug')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    <label for="category" class="form-label fw-bold">Category</label>
    <select class="form-select" name="category_id">
        @foreach ($categories as $category)
            @if(old('category_id', $post->category_id==$category->id))
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
        @endforeach
    </select>
    <label for="university" class="form-label fw-bold">Universitas</label>
    <input readonly type="text" name="university_id" class="form-control @error('university_id') is-invalid @enderror" required autofocus value="{{ auth()->user()->university_id }}">
    {{-- <select class="form-select" name="university_id">
        @foreach ($universities as $university)
            @if(old('university_id'==$university->id))
                <option value="{{ $university->id }}" selected>{{ $university->name }}</option>
            @else
                <option value="{{ $university->id }}">{{ $university->name }}</option>
            @endif
        @endforeach
    </select> --}}

    <label for="image" class="form-label fw-bold">Upload Thumbnail</label>
                <div class="input-group mb-3">
                    <input type="hidden" name="oldImage" value="{{ $post->image }}">
                    @if ($post->image)
                    <img src="/storage/{{ $post->image }}" class="image-preview image-fluid mb-3 col-sm-6 d-block">
                    @else
                    <img class="image-preview image-fluid mb-3 col-sm-6">
                    @endif
                    <input type="file" class="form-control @error('slug') is-invalid @enderror" id="image" name="image" required onchange="previewImage()">
                </div>

    <label for="body" class="form-label fw-bold">Deskripsi</label>
    {{-- ERROR BODY MASI GA MUNCUL --}}
    @error('body')
        <p class="text-danger">{{ $message }}</p>
    @enderror
    <input id="body" type="hidden" name="body" class="form-control" required value="{{ old('body', $post->body) }}">
    <trix-editor input="body"></trix-editor>
    {{-- <input type="text" name="body" id="body" class="form-control" required> --}}
    {{-- <label for="packet" class="form-label fw-bold">Paket</label>
    <input type="text" name="packet" id="packet" class="form-control" required> --}}
    <button type="submit" class="bg-biru-xerabutan text-white rounded p-2 px-3 btn-bg-pink-hover border-biru-xerabutan border-pink-hover mt-3">Edit</button>
    {{-- <input type="submit" value="Daftar" class="bg-biru-xerabutan text-white rounded p-2 px-3 btn-bg-pink-hover border-biru-xerabutan border-pink-hover mt-3"> --}}
    {{-- <a href="/dashboard/posts" style="color: gray;" class="ms-3">Batalkan pendaftaran</a> --}}

</form>
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change',function(){
        fetch('/dashboard/posts/checkSlug?title='+ title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept',function(e){
        e.preventDefault();
    })

    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.image-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection