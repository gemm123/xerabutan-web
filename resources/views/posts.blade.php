@extends('layouts/main')
@section('template')
    @foreach ($posts as $post)
    <article class="mb-4">
        <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
        <h5>{{ $post->author }}</h5>
        <p>{{ $post->excerpt }}</p>    
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
