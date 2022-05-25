<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
            aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <a class="navbar-brand" href="#">
            <img src="image/Xerabutan LOGO.png" style="width: 150px;" alt="Logo"
            loading="lazy" />
        </a>

        <ul class="navbar-nav ms-auto d-flex flex-row">
            <li class="mt-2">
            <a class="me-5 text-decoration-none fw-bold biru-xerabutan" href="/">Home</a>
            </li>
            <li>
            {{-- <a class="me-3 text-decoration-none btn btn-danger" href="/logout">Logout</a> --}}
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link text-decoration-none btn bg-biru-xerabutan text-white p-2 me-4"
                >Logout</button>
            </form>
            </li>
        </ul>
    </div>
</nav>