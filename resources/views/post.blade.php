@extends('layouts/main')
@section('template')
    <article class="mb-4">
        <h1>{{ $post->title }}</h1>
        <h5><a href="/posts?user={{ $post->user->name }}" class="text-decoration-none">{{ $post->user->name }}</a> - {{ $post->university }} in <a href="/posts?category= {{ $post->category->slug }}" class="text-decoration-none" >{{ $post->category->name }}</a></h5>
        <p>{{ $post->body }}</p>    
    </article> 
    <a href="/blog" class="d-block mt-3">Back to Posts</a>   
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