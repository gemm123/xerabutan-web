@extends('layouts/main')
@section('template')

    <div class="container">
        <div class="row">
            <div class="col biru-xerabutan my-4">
                <h1>{{ $post->title }}</h1>
            </div>
        </div>
        <div class="row">
            @if ($post->image)
            <div class="row">
                <div class="col text-center">
                    <img src="/storage/{{ $post->image }}" alt="thumbnail" class="rounded" style="height: 400px">
                </div>
            </div>

            @else
            <div class="row">
                <div class="col text-center">
                    <img src="/image/photo-dummy.png" alt="" class="rounded" style= "height: 400px">
                </div>
            </div>
            @endif
        </div>
        <div class="row my-4">
            <div class="col">
                <h2><a href="/posts?user={{ $post->user->name }}" class="text-decoration-none biru-xerabutan pink-xerabutan-hover">{{ $post->user->name }}</a></h2>
                <h4>
                    <a href="/posts?university={{ $post->university->slug }}" class="text-decoration-none biru-xerabutan pink-xerabutan-hover">{{ $post->university->name }}</a> - 
                    <a href="/posts?category= {{ $post->category->slug }}" class="text-decoration-none biru-xerabutan pink-xerabutan-hover" >{{ $post->category->name }}</a>
                </h4>
                <h4 class="biru-xerabutan fw-normal"><b>{{ $post->harga }}</b></h4>
            </div>
            <div class="col align-self-center">
                <a href="/transaksi/{{ $post->slug }}/create" class="float-end btn bg-biru-xerabutan text-white btn-bg-pink-hover fw-bolder p-2 px-3">Pesan Sekarang</a>
                <a href="#!" class="float-end btn biru-xerabutan border-biru-xerabutan border-pink-hover pink-xerabutan-hover border border-3 fw-bolder me-3">Hubungi freelancer</a>
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
        <div class="row">
            <div class="col">
                <h2>Review</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2>Share</h2>
                <span>
                    <a href="#!" class="btn btn-primary"><i class="bi bi-facebook"> Facebook</i></a>
                    <a href="#!" class="btn btn-info text-white"><i class="bi bi-twitter"> Twitter</i></a>
                    <a href="#!" class="btn btn-outline-primary"><i class="bi bi-linkedin"> Linkedin</i></a>
                    <a href="#!" class="btn btn-outline-success"><i class="bi bi-whatsapp"> whatsapp</i></a>
                </span>
                
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <a href="/posts" class="border rounded text-decoration-none p-2 bg-biru-xerabutan fw-semibold text-white btn-bg-pink-hover">< Back to Posts</a>
            </div>
        </div>
    </div>
@endsection

<script>
       var botmanWidget = {
              title: '💬 Xerabutan Chatbot',
              introMessage: "✋ Halo! Aku chatbot Xerabutan!",
              aboutText: 'Xerabutan Chatbot v1.0',
              mainColor: 'white'
       };
       </script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>