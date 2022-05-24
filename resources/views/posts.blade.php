@extends('layouts/main')
@section('template')

    <div class="container ms-5 me-5">
        @if ($posts->count())
            <div class="row justify-content-center mb-3 me-5">
                <div class="col align-self-center">
                    <h1 class="fw-bold biru-xerabutan" style="font-size: 50px;">
                        Cari keahlian <br>
                        yang kamu <br>
                        butuhin!
                    </h1>
                </div>
                <div class="col align-self-center me-5">
                    <h5>
                        Jelajahi puluhan keahlian di Xerabutan
                    </h5>

                    <form action="/posts">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('user'))
                            <input type="hidden" name="user" value="{{ request('user') }}">
                        @endif
                        <div class="row">
                            <div class="col pe-0">
                                <input type="text" name="search" id="" placeholder="Cari keahlian disini" class="form-control border-biru-xerabutan" value= "{{ request('search') }}">
                            </div>
                            <div class="col align-self-center">
                                <button type="submit" class="rounded border-biru-xerabutan" style="width: 50px; height: 40px;"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>

            <hr class="my-4" style="margin-right: 200px">

            @if ($title == "Posts")
                <p class="fw-bold biru-xerabutan fs-4">Keahlian yang tersedia</p>
            @else
                <p class="fw-bold biru-xerabutan fs-4">{{ $title }}</p>
            @endif

            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-6 mb-4">
                        <div class="card" style="width: 450px;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none biru-xerabutan">{{ $post->title }}</a></h5>
                                <p class="card-text">
                                    <a href="/posts?user={{ $post->user->name }}" class="text-decoration-none" style="color: black">{{ $post->user->name }}</a> - 
                                    {{ $post->university }} - 
                                    <a href="/posts?category= {{ $post->category->slug }}" class="text-decoration-none" style="color: black"> {{ $post->category->name }}</a> 
                                </p>
                                <p class="float-start">
                                    <img src="image/star.png" alt="" width="16px">
                                    <span class="mt-2">5.1</span>
                                </p>
                                <a href="/posts/{{ $post->slug }}" class="float-end" style="color: gray">Lihat detail ></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center fs-4 ">No post found.</p>
        @endif
        
    </div>
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
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