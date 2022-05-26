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
            <img src="image/transaksi.png" alt="transaksi" style="height: 300px; width: 900px">
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
            <form action="" class="biru-xerabutan">
                
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option selected>Pilih paket</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">Paket yang dipilih</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Jumlah pesanan</label>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label fw-bold">Upload bukti pembayaran</label>
                    <span>(jpg/png/jpeg)</span>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <h5 class="alert border border-3 rounded border-pink-xerabutan p-1 mt-3">
                    <div class="container d-inline-block">
                        <div class="row py-2">
                            <div class="col-1 text-center pe-0 align-self-center">
                                <img src="image/alert.png" alt="" width="30px">
                            </div>
                            <div class="col-11 ps-0">
                                <span class="text-start fs-6">Jangan pernah melakukan pembayaran tanpa melalui rekening Xerabutan demi 
                                    keamanan transaksi. Kami tidak bertanggung jawab atas terjadinya tindak penipuan.</span>
                            </div>
                        </div>
                    </div>
                </h5>

                <input type="submit" value="Selesaikan pembayaran >" class="bg-biru-xerabutan text-white rounded p-2 px-3 btn-bg-pink-hover border-biru-xerabutan border-pink-hover mt-3">
                <a href="" style="color: gray;" class="ms-3">Batalkan pesanan</a>

            </form>
        </div>
    </div>
</div>
@endsection