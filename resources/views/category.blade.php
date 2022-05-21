@extends('layouts/main')
@section('template')
<h1>Post : {{ $category }}</h1>
    @foreach ($posts as $post)
    <article class="mb-4">
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <h5>{{ $post->author }} - {{ $post->university }}</h5>
        <p>{{ $post->excerpt }}</p>    
    </article>
    @endforeach
    <a href="/blog">Back to Posts</a> 
@endsection