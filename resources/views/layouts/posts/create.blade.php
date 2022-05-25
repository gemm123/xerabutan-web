@extends('layouts.layouts.main')
@section('template-dashboard')
<h1>Create New Post</h1>

<form action="/register" method="post" class="biru-xerabutan">
    @csrf
    {{-- <div class="form-floating mb-3">
        <input type="text" name="name" id="floatingInput" class="form-control @error('name') is-invalid @enderror" required value="{{ old('name') }}">
        <label for="floatingInput">Nama</label>
    </div> --}}
    <label for="title" class="form-label fw-bold">Judul</label>
    <input type="text" name="title" id="title" class="form-control" required>
    <label for="slug" class="form-label fw-bold">Slug</label>
    <input type="slug" name="slug" id="slug" class="form-control" required>
    <label for="body" class="form-label fw-bold">Deskripsi</label>
    <input type="text" name="body" id="body" class="form-control" required>
    <label for="packet" class="form-label fw-bold">Paket</label>
    <input type="text" name="packet" id="packet" class="form-control" required>
   
    <input type="submit" value="Daftar" class="bg-biru-xerabutan text-white rounded p-2 px-3 btn-bg-pink-hover border-biru-xerabutan border-pink-hover mt-3">
    <a href="" style="color: gray;" class="ms-3">Batalkan pendaftaran</a>

</form>
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change',function(){
        fetch('/dashboard/posts/checkSlug?title='+ title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>
@endsection