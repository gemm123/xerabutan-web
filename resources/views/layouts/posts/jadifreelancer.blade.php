@extends('layouts.layouts.main')
@section('template-dashboard')
<h1>Jadi Freelancer</h1>

<form action="/dashboard/posts" method="post" class="biru-xerabutan">
    @csrf
    {{-- <div class="form-floating mb-3">
        <input type="text" name="name" id="floatingInput" class="form-control @error('name') is-invalid @enderror" required value="{{ old('name') }}">
        <label for="floatingInput">Nama</label>
    </div> --}}
    <label for="title" class="form-label fw-bold" >Nama</label>
    <input readonly type="text" name="name" id="name" class="form-control" required autofocus value="{{ auth()->user()->name}}">
    <label for="email" class="form-label fw-bold" >Email</label>
    <input readonly type="text" name="email" id="email" class="form-control" required autofocus value="{{ auth()->user()->email}}">
    <label for="university_id" class="form-label fw-bold" >Pilih Universitas/Institusi</label>
    <select class="form-select" name="university_id">
        @foreach ($universities as $university)
            @if(old('university_id'==$university->id))
                <option value="{{ $university->id }}" selected>{{ $university->name }}</option>
            @else
                <option value="{{ $university->id }}">{{ $university->name }}</option>
            @endif
        @endforeach
    </select>
    <label for="ktm" class="form-label fw-bold">Upload bukti mahasiswa (KTM)</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                </div>
    {{-- <input type="text" name="body" id="body" class="form-control" required> --}}
    {{-- <label for="packet" class="form-label fw-bold">Paket</label>
    <input type="text" name="packet" id="packet" class="form-control" required> --}}
    <button type="submit" class="bg-biru-xerabutan text-white rounded p-2 px-3 btn-bg-pink-hover border-biru-xerabutan border-pink-hover mt-3">Gabung</button>
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