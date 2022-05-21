@extends('layouts/main')
@section('template')
    @foreach ($posts as $post)
    <article class="mb-4">
        <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
        <h5><a href="#" class="text-decoration-none">{{ $post->user->name }}</a> - {{ $post->university }} - <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none" > {{ $post->category->name }}</a></h5>
        <p>{{ $post->excerpt }}</p>    

        <a href="/posts/{{ $post->slug }}">Read more</a>
    </article>    
    @endforeach
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