@extends('layouts.layouts.main')
@section('template-dashboard')
<div class="container">
    <div class="row m-3">
        <div class="col">
            <h1>My Posts</h1>
        </div>
    </div>
    <div class="row m-3">
      <div class="col">
        <div class="table-responsive">
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
                        <a href="/dashboard-posts-{{ $post->slug }}" class="badge bg-biru-xerabutan text-decoration-none p-2"><i class="bi bi-eye"></i></a>
                        <a href="" class="badge bg-pink-xerabutan text-decoration-none p-2"><i class="bi bi-pencil-square"></i></a>
                        <a href="" class="badge bg-danger text-decoration-none p-2"><i class="bi bi-trash"></i></a>
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
    

    