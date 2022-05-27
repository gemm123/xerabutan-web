@extends('layouts/main')
@section('template')
<div class="container my-4">
    <div class="row">
        <div class="col">
            <h1 class="biru-xerabutan fw-bold">Checkout</h1>
            <p class="fs-5">
                Silahkan melakukan pembayaran melalui rekening berikut terlebih dahulu sebelum melanjutkan pemesanan. 
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <img src="/image/transaksi.png" alt="transaksi" style="height: 300px; width: 900px">
        </div>
    </div>
    <div class="row mt-4 mb-2">
        <div class="col">
            <p class="fs-5">
                Lengkapi data berikut untuk menyelesaikan pembayaran.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="transaksi/store" method="post" class="biru-xerabutan" enctype="multipart/form-data">
                @method('put')
                @csrf
                <input type="hidden" name="name" id="name" class="form-control" required autofocus value="{{ auth()->user()->name }}">

                <input type="hidden" name="email" id="email" class="form-control" required autofocus value="{{ auth()->user()->email }}">

                <input type="hidden" name="nomorhp" id="nomorhp" class="form-control" required autofocus value="{{ auth()->user()->nomorhp }}">
                <input type="hidden" name="post_id" id="post_id" class="form-control" required autofocus value="{{ $post->id }}">

                <label for="title" class="form-label fw-bold mb-3" >Judul Keahlian</label>
                <input readonly type="text" name="title" id="title" class="form-control" required autofocus value="{{ $post->title }}">
                
                <label for="harga" class="form-label fw-bold mb-3" >Harga</label>
                <input readonly type="text" name="harga" id="harga" class="form-control" required autofocus value="{{ $post->harga }}">

                {{-- <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Jumlah pesanan</label>
                </div> --}}

                <div class="mb-3">
                    <label for="bukti" class="form-label fw-bold">Upload bukti pembayaran</label>
                    <span>(jpg/png/jpeg)</span>
                    <input class="form-control" type="file" name="bukti" id="bukti">
                </div>

                <h5 class="alert border border-3 rounded border-pink-xerabutan p-1 mt-3">
                    <div class="container d-inline-block">
                        <div class="row py-2">
                            <div class="col-1 text-center pe-0 align-self-center">
                                <img src="/image/alert.png" alt="" width="30px">
                            </div>
                            <div class="col-11 ps-0">
                                <span class="text-start fs-6">Jangan pernah melakukan pembayaran tanpa melalui rekening Xerabutan demi 
                                    keamanan transaksi. Kami tidak bertanggung jawab atas terjadinya tindak penipuan.</span>
                            </div>
                        </div>
                    </div>
                </h5>

                <input type="submit" value="Selesaikan pembayaran" class="bg-biru-xerabutan text-white rounded p-2 px-3 btn-bg-pink-hover border-biru-xerabutan border-pink-hover mt-3">
                <a href="/posts" style="color: gray;" class="ms-3">Batalkan pesanan</a>

            </form>
        </div>
    </div>
</div>
@endsection