@extends('layouts.layouts.main')
@section('template-dashboard')
<div class="container">
    <div class="row">
        <div class="col biru-xerabutan my-4">
            <h1>{{ $post->title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <img src="image/photo-dummy.png" alt="" class="rounded" style="width: 1100px; height: 500px">
        </div>
    </div>
    <div class="row my-4">
        <div class="col">
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
        </div>
    </div>
</div>

<hr class="mx-3">

<div class="container my-4 biru-xerabutan">
    <div class="row">
        <div class="col">
            <h2>Deskripsi</h2>
            <p>{{ $post->body }}</p> 
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Review</h2>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <a href="/dashboard-posts" class="border border-2 rounded text-decoration-none p-1 border-biru-xerabutan biru-xerabutan fw-semibold">< Back to My Posts</a>
        </div>
    </div>
</div>
@endsection
    

    