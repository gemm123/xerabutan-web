@extends('layouts.main')

@section('template')
       <div class="container my-4">
              <div class="row ms-5">
                     <div class="col align-self-center">
                            <h1 class="biru-xerabutan fw-bold" style="font-size: 60px">
                                   Apa itu <br>
                                   Xerabutan?
                            </h1>
                            <p class="fs-4">
                                   Platform freelance khusus untuk <br>
                                   mahasiswa Indonesia
                            </p>
                     </div>
                     <div class="col text-center">
                            <img src="image/logo-about.png" alt="logo" width="400">
                     </div>
              </div>
       </div>

       <hr>

       <div class="container my-4">
              <div class="row">
                     <div class="col">
                            <h2 class="biru-xerabutan text-center fw-bolder">Visi dan Misi</h2>
                     </div>
              </div>
       </div>

       <div class="container my-4">
              <div class="row ms-5 me-5">
                     <div class="col border border-2 rounded-4 text-center me-5">
                            <h2 class="biru-xerabutan text-center fw-bolder mt-4">Visi</h2>
                            <hr>
                            <p class="mt-4">Menjadi Platform Freelance pilihan utama mahasiswa Indonesia.</p>
                     </div>
                     <div class="col border border-2 rounded-4 text-center">
                            <h2 class="biru-xerabutan text-center fw-bolder mt-4">Misi</h2>
                            <hr>
                            <p class="mt-4">Menyediakan platform yang mudah untuk digunakan mahasiswa dalam menyalurkan keahliannya</p>
                     </div>
              </div>
       </div>

       <hr class="mt-5 mb-4">

       <div class="container my-5">
              <div class="row">
                     <div class="col text-center">
                            <h2 class="biru-xerabutan fw-bold">Logo Kami</h2>
                     </div>
              </div>
              <div class="row">
                     <div class="col text-center mb-5">
                            <img src="image/Xerabutan LOGO.png" alt="logo" width="600">
                     </div>
              </div>
       </div>

       {{-- <div class="container">
              <div class="d-flex justify-content-around mt-5">
                     <div class="card border-biru-xerabutan" style="width: 18rem; border: 2px solid;">
                       <img src="image/card1.png" class="card-img-top p-4" alt="" width="10px">
                       <div class="card-body text-center">
                         <h5>Tempat freelance khusus untuk mahasiswa</h5>
                         <p class="card-text">Kamu dapat menjual keahlianmu kepada mahasiswa lain di kampusmu</p>
                     </div>
              </div>
              <div class="d-flex justify-content-around">
                     <div class="card border-biru-xerabutan" style="width: 18rem; border: 2px solid;">
                       <img src="image/card1.png" class="card-img-top p-4" alt="" width="10px">
                       <div class="card-body text-center">
                         <h5>Tempat freelance khusus untuk mahasiswa</h5>
                         <p class="card-text">Kamu dapat menjual keahlianmu kepada mahasiswa lain di kampusmu</p>
                     </div>
              </div>
       </div> --}}
@endsection

@auth
<script>
       var botmanWidget = {
              title: '💬 Xerabutan Chatbot',
              introMessage: "✋ Halo! Aku chatbot Xerabutan!",
              aboutText: 'Xerabutan Chatbot v1.0',
              mainColor: 'white'
       };
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
@endauth