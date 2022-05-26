<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
    <div class="list-group list-group-flush mx-3 mt-4">
        <li class="list-group-item py-1">
            {{-- <a href="/dashboard" class="text-decoration-none">Dashboard</a> --}}
            <a class="nav-link  biru-xerabutan fw-bold menu {{ Request::is('dashboard') ? 'pink-xerabutan' : '' }}" href="/dashboard">Dashboard</a>
        </li>
        <li class="list-group-item py-1">
            {{-- <a href="/dashboard-posts" class="text-decoration-none">My Posts</a> --}}
            <a class="nav-link  biru-xerabutan fw-bold menu {{ Request::is('dashboard/posts*') ? 'pink-xerabutan' : '' }}" href="/dashboard/posts">My Posts</a>
        </li>
        <li class="list-group-item py-1">
            <a href="/dashboard/jadifreelancer" class="text-decoration-none biru-xerabutan fw-bold">Jadi Freelancer</a>
        </li>
    </div>
    </div>
</nav>