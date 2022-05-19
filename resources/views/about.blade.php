@extends('layouts.main')

@section('template')
       <h1>Halaman About</h1>
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