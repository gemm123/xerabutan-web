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
            <img src="/image/photo-dummy.png" alt="" class="rounded" style="width: 1000px; height: 400px">
        </div>
    </div>
    <div class="row my-4">
        <div class="col">
            <h2 class="text-decoration-none biru-xerabutan">{{ $post->user->name }}</h2>
            <h4 class="text-decoration-none biru-xerabutan">
                {{ $post->university->name }} - 
                {{ $post->category->name }}
            </h4>
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
            <a href="/dashboard/posts" class="btn bg-biru-xerabutan text-white">Back</a>
            <a href="" class="btn bg-pink-xerabutan text-white">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>
        </div>
    </div>
</div>
@endsection
    

    