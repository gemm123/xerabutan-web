<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xerabutan - Salurkan Keahlianmu!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="/">
            <img src="/image/xerabutan Logo.png" alt="xerabutan" width="240" height="32">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link  biru-xerabutan fw-bold menu {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link biru-xerabutan fw-bold menu {{ Request::is('posts') ? 'active' : '' }} {{ Request::is('posts*') ? 'active' : '' }}" href="/posts">Cari Keahlian</a>
              </li>
              <li class="nav-item">
                <a class="nav-link biru-xerabutan fw-bold menu {{ Request::is('about') ? 'active' : '' }}" href="/about">Tentang Kami</a>
              </li>

              @auth
              
              <li class="nav-item">
                <div class="dropdown fw-bold text-white fw-bold fs-6 btn-bg-pink-hover bg-biru-xerabutan rounded">
                  <button class="btn dropdown-toggle fw-bold text-white fw-bold fs-6 btn-bg-pink-hover bg-biru-xerabutan rounded" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name }}
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                    <li>
                      <form action="/logout" method="post">
                          @csrf
                          <button type="submit" class="nav-link dropdown-item ps-3"
                          >Logout</button>
                      </form>
                    </li>
                  </ul>
                </div>
                
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link fw-bold text-white fw-bold fs-6 btn-bg-pink-hover bg-biru-xerabutan rounded px-3" aria-current="page" href="/login" style="width: 75px;">Login</a>
              </li>
              @endauth
            </ul>
          </div>
        </div>
    </nav>

   <div class="container mt-4">
       @yield('template')
   </div>

   <footer class="bg-biru-xerabutan py-4">
    <div class="container">
        <div class="row text-center text-white">
            <div class="col text-start">
                <p class="mb-0">
                    <span><a href="mailto:contact@xerabutan.com" target="_blank"><img src="image/gmail.png" alt="" width="20px" class="my-2 me-1"></a></span>contact@xerabutan.com <br>
                    <span><a href="https://api.whatsapp.com/send/?phone=6281398589316&text&app_absent=0" target="_blank"><img src="image/wa.png" alt="" width="20px" class="my-2 me-1"></a></span>0813-9868-9316<br>
                    <span><img src="image/alamat.png" alt="" width="20px" class="my-2 me-1"></span>Jalan Raya Cibanteng, Kabupaten Bogor.<br>
                    <span><a href="https://www.instagram.com/xerabutan/" target="_blank"><img src="image/instagram.png" alt="" width="20px" class="my-2 me-1"></a></span>@xerabutan<br>
                </p>
            </div>
            <div class="col mt-5">
              <p class="fw-bold fs-1 mb-0">#Salurkan Keahlianmu</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>