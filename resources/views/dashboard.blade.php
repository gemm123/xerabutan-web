@extends('layouts.dashboard')
@section('template-dashboard')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Selamat datang, {{ auth()->user()->name }}</h1>
        </div>
    </div>
</div>
@endsection
    

    