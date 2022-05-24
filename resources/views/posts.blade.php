@extends('layouts/main')
@section('template')

    <div class="container">
        <h1 class = "mb-3 text-center" >{{ $title }}</h1>
        @if ($posts->count())
            <div class="row justify-content-center mb-3">
                <div class="col-md-6">
                    <form action="/posts">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('user'))
                            <input type="hidden" name="user" value="{{ request('user') }}">
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search.." name="search" value= "{{ request('search') }}">
                            <button class="btn btn-outline-secondary" type="submit" >Search</button>
                        </div>
                    </form> 
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-6 mb-4">
                        <div class="card mx-auto" style="width: 450px;">
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

{{-- Post::create([
    'title' => 'Freelance Esai Murah',
    'slug' => 'freelance-esai-murah',
    'category_id' => 2,
    'author' => 'Qais',
    'university' => 'Universitas Indonesia',
    'excerpt' => 'nbvcxsdfghj uytrewerty jhgfdcvbn juyhtrd fghji uytgfvbnjkiuytfvbnjk iuytgfvbnjuytgf bjuytgfvbnmjuyhgtfv bnjuhg ',
    'body' => 'jbhssfcauhonv vsdfdg ngfds sddfgsdvbg bs'
])
Category::create([
    'name' => 'Programming',
    'slug' => 'programming',
]) --}}