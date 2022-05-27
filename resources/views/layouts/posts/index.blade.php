@extends('layouts.layouts.main')
@section('template-dashboard')
<div class="container">
    <div class="row m-3 mb-0">
        <div class="col mt-4">
            <h1 class="float-start">Daftar Keahlian Saya</h1>
            <a href="/dashboard/posts/create" class="btn bg-biru-xerabutan text-white float-end mt-3">Tambah keahlian</a>
        </div>
    </div>
    <div class="row m-3 mt-0">
      <div class="col mt-0">
        <div class="table-responsive">
          {{-- ALERT SUCCES JUGA BELUM MUNCUL --}}
          @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
              {{ session('success') }}
            </div>
          @endif
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-biru-xerabutan text-decoration-none p-2"><i class="bi bi-eye"></i></a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-pink-xerabutan text-decoration-none p-2"><i class="bi bi-pencil-square"></i></a>
                        <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="post">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger text-decoration-none p-2 border-0" onclick="return confirm('Hapus postingan?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                  </tr>
                @endforeach
              
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection
    

    