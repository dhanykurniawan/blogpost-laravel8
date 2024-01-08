<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">WPU Blog</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto" style="min-height: 100vh;">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : 'text-dark' }}"
                        aria-current="page" href="/dashboard">
                        <span data-feather="home"></span> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'active' : 'text-dark' }}"
                        href="/dashboard/posts">
                        <span data-feather="file-text"></span> My Posts
                    </a>
                </li>
            </ul>

            <!-- menggunakan Gate -->
            @can('admin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Administrator</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/categories*') ? 'active' : 'text-dark' }}"
                        href="/dashboard/categories">
                        <span data-feather="grid"></span> Post Categories
                    </a>
                </li>
            </ul>
            @endcan

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <form action='/logout' method='post'>
                        @csrf
                        <button type="submit" class="nav-link d-flex align-items-center gap-2 text-dark">
                            <span data-feather="log-out"></span> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
