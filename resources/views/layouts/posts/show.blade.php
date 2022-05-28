@extends('layouts.layouts.main')
@section('template-dashboard')
<div class="container">
    <div class="row">
        <div class="col biru-xerabutan my-4">
            <h1>{{ $post->title }}</h1>
        </div>
    </div>
    
    @if ($post->image)
    <div class="row">
        <div class="col text-center">
            <img src="/storage/{{ $post->image }}" alt="thumbnail" class="rounded" style="width: 1000px; height: 400px">
        </div>
    </div>

    @else
    <div class="row">
        <div class="col text-center">
            <img src="/image/photo-dummy.png" alt="" class="rounded" style="width: 1000px; height: 400px">
        </div>
    </div>
    @endif
    
    <div class="row my-4">
        <div class="col">
            <h2 class="text-decoration-none biru-xerabutan">{{ $post->user->name }}</h2>
            <h4 class="text-decoration-none biru-xerabutan">
                {{ $post->university->name }} - 
                {{ $post->category->name }}
            </h4>
            <h4 class="biru-xerabutan fw-normal"><b>{{ $post->harga }}</b></h4>
        </div>
    </div>
</div>

<hr class="mx-3">

<div class="container my-4 biru-xerabutan">
    <div class="row">
        <div class="col">
            <h2>Deskripsi</h2>
            {!! $post->body !!} 
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <h2>Review</h2>
            <div id="carouselExampleControls" class="carousel slide bg-light mx-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="border border-2 rounded">
                        <h5 class="ms-5 biru-xerabutan mt-2">Lorem Ipsum</h5>
                        <div class="ms-5 d-flex mb-2">
                            <img class="me-2" src="/image/star.png" alt="" width="20" height="20">
                            <p class="mb-0 text-dark">5.0</p>
                        </div>
                        <hr class="mx-5">
                        <p class="mx-5 text-dark">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="border border-2 rounded">
                        <h5 class="ms-5 biru-xerabutan mt-2">Lorem Ipsum</h5>
                        <div class="ms-5 d-flex mb-2">
                            <img class="me-2" src="/image/star.png" alt="" width="20" height="20">
                            <p class="mb-0 text-dark">5.0</p>
                        </div>
                        <hr class="mx-5">
                        <p class="mx-5 text-dark">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="border border-2 rounded">
                        <h5 class="ms-5 biru-xerabutan mt-2">Lorem Ipsum</h5>
                        <div class="ms-5 d-flex mb-2">
                            <img class="me-2" src="/image/star.png" alt="" width="20" height="20">
                            <p class="mb-0 text-dark">5.0</p>
                        </div>
                        <hr class="mx-5">
                        <p class="mx-5 text-dark">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col">
            <a href="/dashboard/posts" class="btn bg-biru-xerabutan text-white">Back</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn bg-pink-xerabutan text-white">Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger text-decoration-none p-2 border-0" onclick="return confirm('Hapus postingan?')">Hapus</button>
                </form>
        </div>
    </div>
</div>
@endsection
    

    