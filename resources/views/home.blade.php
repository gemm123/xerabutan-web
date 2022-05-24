@extends('layouts.main')
@section('template')
<div class="container mb-3">
    <div class="row">
      <div class="col biru-xerabutan mt-5 ms-5">
        <h1 class="fw-bold" style="font-size: 60px;">
          Salurkan <br>
          Keahlianmu!
        </h1>
        <p class="fs-4">
          Tempat buat mahasiswa <br>
          nambah skill dan uang jajan!
        </p>
        <a href="/register" class="fw-bold text-white bg-biru-xerabutan rounded btn-bg-pink-hover p-2 px-3 text-decoration-none me-3">Gabung</a>
        <a href="/posts" class="fw-bold biru-xerabutan text-decoration-none border border-3 border-biru-xerabutan border-pink-hover rounded p-1">Cari Keahlian</a>
      </div>
      <div class="col text-center my-4">
        <img src="image/bro.png" alt="" width="370px">
      </div>
    </div>
  </div>

  <hr>

  <div class="container my-5">
    <div class="row">
      <div class="col text-center biru-xerabutan">
        <h1 class="fw-bold" style="font-size: 60px;">
          Apa itu Xerabutan?
        </h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="d-flex justify-content-around mt-5">
      <div class="card border-biru-xerabutan" style="width: 18rem; border: 2px solid;">
        <img src="image/card1.png" class="card-img-top p-4" alt="" width="10px">
        <div class="card-body text-center">
          <h5>Tempat freelance khusus untuk mahasiswa</h5>
          <p class="card-text">Kamu dapat menjual keahlianmu kepada mahasiswa lain di kampusmu</p>
        </div>
      </div>
      <div class="card border-biru-xerabutan" style="width: 18rem; border: 2px solid;">
        <img src="image/card2.png" class="card-img-top p-4" alt="" width="10px">
        <div class="card-body text-center">
          <h5>Raih uang jajan tambahan dengan mudah</h5>
          <p class="card-text">Bingung mau tambah uang jajan? tawarkan keahlianmu dan dapatkan uang, GRATIS!</p>
        </div>
      </div>
      <div class="card border-biru-xerabutan" style="width: 18rem; border: 2px solid;">
        <img src="image/card3.png" class="card-img-top p-4" alt="" width="10px">
        <div class="card-body text-center">
          <h5>Pelajari skill baru dengan bantuan Chatbot</h5>
          <p class="card-text">Bingung buat mulai belajar skill baru? Chatbot Xerabutan akan memandumu dalam belajar</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-3">
    <div class="row">
      <div class="col text-center">
        <p class="fs-4">
          Mau tau lebih lanjut? <span><a href="/about" class="biru-xerabutan">Tentang kami</a></span>
        </p>
      </div>
    </div>
  </div>

  <hr>

  <div class="container my-5">
    <div class="row">
      <div class="col text-center biru-xerabutan">
        <h1 class="fw-bold" style="font-size: 50px;">
          Mau jadi freelancer Xerabutan?
        </h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="d-flex justify-content-around mt-5">
      <div class="card border-biru-xerabutan" style="width: 18rem; border: 2px solid;">
        <img src="image/daftar.png" class="card-img-top px-5 pt-3" alt="" width="18px">
        <div class="card-body text-center">
          <h5>Daftarkan diri kamu sekarang!</h5>
          <p class="card-text">Tekan tombol Gabung untuk mulai mendaftarkan data diri kamu</p>
        </div>
      </div>
      <div class="card border-biru-xerabutan" style="width: 18rem; border: 2px solid;">
        <img src="image/gmail2.png" class="card-img-top px-5 pt-3" alt="" width="18px">
        <div class="card-body text-center">
          <h5>Tunggu konfirmasi lewat e-mail kamu</h5>
          <p class="card-text"> Kamu akan mendapatkan e-mail lanjutan untuk mulai freelance setelah berhasil mendaftar</p>
        </div>
      </div>
      <div class="card border-biru-xerabutan" style="width: 18rem; border: 2px solid;">
        <img src="image/upload.png" class="card-img-top px-5 pt-5" alt="" width="18px">
        <div class="card-body text-center">
          <h5>Upload keahlian yang ingin kamu jual!</h5>
          <p class="card-text">Kamu dapat langsung mengupload keahlian yang kamu tawarkan setelah login ke website Xerabutan</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-3">
    <div class="row">
      <div class="col text-center">
        <p class="fs-4">
          Mau tau lebih lanjut? <span><a href="#" class="biru-xerabutan">Panduan freelancer</a></span>
        </p>
      </div>
    </div>
  </div>

  <hr>

  <div class="container my-5">
    <div class="row">
      <div class="col text-center">
        <h1 class="fw-bold" style="font-size: 50px;">
          Belom punya skill buat freelance?
        </h1>
        <p class="fs-4">Ayo belajar skill baru dengan dipandu oleh chatbot Xerabutan!</p>
      </div>
    </div>
  </div>  
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
