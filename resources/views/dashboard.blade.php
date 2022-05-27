@extends('layouts.layouts.main')
@section('template-dashboard')
<div class="container">
    <div class="row">
        <div class="col m-4">
            <h1>Selamat datang, {{ auth()->user()->name }}</h1>
        </div>
    </div>
</div>
@endsection
    

    