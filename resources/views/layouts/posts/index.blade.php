@extends('layouts.layouts.main')
@section('template-dashboard')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>My Posts</h1>
        </div>
    </div>
</div>
<div class="table-responsive col-lg-8">
  <a href="/dashboard-post-create" class="btn btn-primary">Create New Post</a>
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
                <a href="/dashboard-posts-{{ $post->slug }}" class="badge bg-info">Liat</a>
                <a href="" class="badge bg-warning">Edit</a>
                <a href="" class="badge bg-danger">Hapus</a>
            </td>
          </tr>
        @endforeach
      
      
    </tbody>
  </table>
</div>
@endsection
    

    