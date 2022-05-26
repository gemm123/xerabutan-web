@extends('layouts.layouts.main')
@section('template-dashboard')
<div class="container">
    <div class="row m-3">
        <div class="col">
            <h1>Daftar Transaksi</h1>
        </div>
    </div>
    <div class="row m-3">
      <div class="col">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Nomor Hp</th>
                <th scope="col">Judul Keahlian</th>
                <th scope="col">Bukti pembayaran</th>
              </tr>
            </thead>
            <tbody>
                {{-- @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-biru-xerabutan text-decoration-none p-2"><i class="bi bi-eye"></i></a>
                        <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-pink-xerabutan text-decoration-none p-2"><i class="bi bi-pencil-square"></i></a>
                        <form action="/dashboard/categories/{{ $category->slug }}" class="d-inline" method="post">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger text-decoration-none p-2 border-0" onclick="return confirm('Hapus postingan?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                  </tr>
                @endforeach --}}
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection
    

    