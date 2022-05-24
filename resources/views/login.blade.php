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
    
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h1 class="fw-bold biru-xerabutan">Login</h1>
                    <h3 class="login-heading mb-4 fs-5">Login untuk mulai menyalurkan keahlianmu!</h3>
                    
                    @if(session()->has('succes'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      {{ session('succes') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <!-- Sign In Form -->
                    <form action="/login" method="POST">
                      @csrf
                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
      
                      <div class="mb-3">
                        <button class="btn btn-primary fw-bold mb-2 bg-biru-xerabutan me-3" type="submit">Login</button>
                        <span><a href="#" class="biru-xerabutan">Lupa password?</a></span>
                      </div>
                    </form>

                    <p>
                        Belum memiliki akun?
                        <a href="/register" class="biru-xerabutan">Gabung sekarang</a>
                    </p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
