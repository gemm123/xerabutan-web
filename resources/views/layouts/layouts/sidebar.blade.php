<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
    <div class="list-group list-group-flush mx-3 mt-4">
        <li class="list-group-item py-1">
            {{-- <a href="/dashboard" class="text-decoration-none">Dashboard</a> --}}
            <a class="nav-link  biru-xerabutan fw-bold menu {{ Request::is('dashboard') ? 'pink-xerabutan' : '' }}" href="/dashboard">Dashboard</a>
        </li>
        @can('admin')
        <li class="list-group-item py-1">
            {{-- <a href="/dashboard-posts" class="text-decoration-none">My Posts</a> --}}
            <a class="nav-link  biru-xerabutan fw-bold menu {{ Request::is('dashboard/posts*') ? 'pink-xerabutan' : '' }}" href="/dashboard/posts">Daftar Keahlian</a>
        </li>
        
        <li class="list-group-item py-1">
            {{-- <a href="/dashboard-posts" class="text-decoration-none">My Posts</a> --}}
            <a class="nav-link  biru-xerabutan fw-bold menu {{ Request::is('dashboard/transaksi*') ? 'pink-xerabutan' : '' }}" href="/dashboard/transaksi">Transaksi</a>
        </li>
        @endcan
        @cannot('admin')
        <li class="list-group-item py-1">
            <a href="/dashboard/jadifreelancer" class="text-decoration-none biru-xerabutan fw-bold {{ Request::is('dashboard/jadifreelancer') ? 'pink-xerabutan' : '' }}">Jadi Freelancer</a>
        </li>
        @endcannot
    </div>

    @can('admin')
    <h6 class="sidebar-heading d-flex justify-content-beetween align-items-center px-3 mt-4 mb-1 text-muted ">
        <span>Administrator</span>
    </h6>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link  biru-xerabutan fw-bold menu {{ Request::is('dashboard/categories*') ? 'pink-xerabutan' : '' }}" href="/dashboard/categories">
                <span>Post categories</span>
            </a>
        </li>
    </ul>
    @endcan
    
    </div>
</nav>