@extends('layouts.main')
@section('template')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xerabutan - Salurkan Keahlianmu!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container my-3">
        <div class="row mx-5">
            <div class="col biru-xerabutan">
                <h1>Pendaftaran Freelancer Xerabutan</h1>
                <p class="fs-5">Lengkapi data berikut untuk menyelesaikan pendaftaran.</p>
            </div>

            <form action="" class="biru-xerabutan">
                <label for="" class="form-label fw-bold">Nama</label>
                <input type="text" name="" id="" class="form-control">

                <label for="" class="form-label fw-bold">E-mail</label>
                <input type="email" name="" id="" class="form-control">
                
                <label for="" class="form-label fw-bold">Password</label>
                <input type="password" name="" id="" class="form-control">
                
                <label for="" class="form-label fw-bold">Nomor HP</label>
                <input type="text" name="" id="" class="form-control">
                
                <label for="" class="form-label fw-bold">Asal Institusi</label>
                <input type="text" name="" id="" class="form-control">
                
                <label for="" class="form-label fw-bold">Upload bukti mahasiswa (KTM)</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                </div>
                
                <h5 class="alert border border-3 rounded border-pink-xerabutan p-1">
                    <div class="container d-inline-block">
                        <div class="row py-2">
                            <div class="col-1 text-center pe-0">
                                <img src="image/alert.png" alt="" width="30px">
                            </div>
                            <div class="col-11 ps-0">
                                <span class="text-start fs-6">Dengan mendaftar, kamu setuju dengan syarat dan ketentuan freelancer Xerabutan. 
                                    Untuk melihat S&K, kunjungi <a href="ipb.link/skxerabutan" class="biru-xerabutan" target="_blank">ipb.link/skxerabutan</a></span>
                            </div>
                        </div>
                    </div>
                </h5>

                <input type="button" value="Daftar >" class="bg-biru-xerabutan text-white rounded p-2 px-3 btn-bg-pink-hover border-biru-xerabutan border-pink-hover">
                <a href="" style="color: gray;" class="ms-3">Batalkan pendaftaran</a>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
@endsection