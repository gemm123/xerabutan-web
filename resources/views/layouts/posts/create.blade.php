@extends('layouts.layouts.main')
@section('template-dashboard')
<h1>Create New Post</h1>

<form action="/dashboard/posts" method="post" class="biru-xerabutan">
    @csrf
    {{-- <div class="form-floating mb-3">
        <input type="text" name="name" id="floatingInput" class="form-control @error('name') is-invalid @enderror" required value="{{ old('name') }}">
        <label for="floatingInput">Nama</label>
    </div> --}}
    <label for="title" class="form-label fw-bold" >Judul</label>
    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" required autofocus value="{{ old('title') }}">
    @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    <label for="slug" class="form-label fw-bold">Slug</label>
    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" required value="{{ old('slug') }}">
    @error('slug')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    <label for="category" class="form-label fw-bold">Category</label>
    <select class="form-select" name="category_id">
        @foreach ($categories as $category)
            @if(old('category_id'==$category->id))
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
        @endforeach
    </select>
    <label for="university" class="form-label fw-bold">Universitas</label>
    <select class="form-select" name="university_id">
        @foreach ($universities as $university)
            @if(old('university_id'==$university->id))
                <option value="{{ $university->id }}" selected>{{ $university->name }}</option>
            @else
                <option value="{{ $university->id }}">{{ $university->name }}</option>
            @endif
        @endforeach
    </select>
    <label for="body" class="form-label fw-bold">Deskripsi</label>
    {{-- ERROR BODY MASI GA MUNCUL --}}
    @error('body')
        <p class="text-danger">{{ $message }}</p>
    @enderror
    <input id="body" type="hidden" name="body" class="form-control" required value="{{ old('body') }}">
    <trix-editor input="body"></trix-editor>
    {{-- <input type="text" name="body" id="body" class="form-control" required> --}}
    {{-- <label for="packet" class="form-label fw-bold">Paket</label>
    <input type="text" name="packet" id="packet" class="form-control" required> --}}
    <button type="submit" class="bg-biru-xerabutan text-white rounded p-2 px-3 btn-bg-pink-hover border-biru-xerabutan border-pink-hover mt-3">Daftar</button>
    {{-- <input type="submit" value="Daftar" class="bg-biru-xerabutan text-white rounded p-2 px-3 btn-bg-pink-hover border-biru-xerabutan border-pink-hover mt-3"> --}}
    <a href="/dashboard/posts" style="color: gray;" class="ms-3">Batalkan pendaftaran</a>

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
</script>
@endsection