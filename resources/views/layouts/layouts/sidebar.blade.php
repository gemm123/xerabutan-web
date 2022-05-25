<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
    <div class="list-group list-group-flush mx-3 mt-4">
        <li class="list-group-item py-1">
            {{-- <a href="/dashboard" class="text-decoration-none">Dashboard</a> --}}
            <a class="nav-link  biru-xerabutan fw-bold menu {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">Dashboard</a>
        </li>
        <li class="list-group-item py-1">
            {{-- <a href="/dashboard-posts" class="text-decoration-none">My Posts</a> --}}
            <a class="nav-link  biru-xerabutan fw-bold menu {{ Request::is('dashboard-posts') ? 'active' : '' }}  {{ Request::is('dashboard-post*') ? 'active' : '' }}" href="/dashboard-posts">My Posts</a>
        </li>
        <li class="list-group-item py-1">
            <a href="/dashboard/account" class="text-decoration-none">Account</a>
        </li>
    </div>
    </div>
</nav>