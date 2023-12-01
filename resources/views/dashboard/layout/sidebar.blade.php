<header class="header" id="header">
    <div class="header_toggle">
        <i class='bx bx-menu' id="header-toggle"></i>
    </div>
    <div class="header_img gambar">
        @auth
            <p>
                Welcome back, {{ auth()->user()->name }}
            </p>
        @endauth
    </div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="/" class="nav_logo">
                <i class='bx bx-layer nav_logo-icon'></i>
                <img src="{{ asset('images/logo.png') }}" class="img-fluid logo" />
            </a>
            <div class="nav_list">
                <a href="/dashboard" class="nav_link {{ $active === 'dashboard' ? 'active' : '' }}">
                    <i class='bx bx-grid-alt nav_icon'></i>
                    <span class="nav_name">Dashboard</span>
                </a>
                <a href="/dashboard/menus" class="nav_link {{ $active === 'menu' ? 'active' : '' }}">
                    <i class="bi bi-menu-app"></i>
                    <span class="nav_name">Menu</span>
                </a>
                <a href="/dashboard/categories" class="nav_link {{ $active === 'category' ? 'active' : '' }}">
                    <i class="bi bi-list-columns-reverse"></i>
                    <span class="nav_name">Category</span>
                </a>
                <a href="/dashboard/banners" class="nav_link {{ $active === 'banner' ? 'active' : '' }}">
                    <i class="bi bi-image"></i>
                    <span class="nav_name">Banner</span>
                </a>
                <a href="/dashboard/review" class="nav_link {{ $active === 'review' ? 'active' : '' }}">
                    <i class='bx bx-folder nav_icon'></i>
                    <span class="nav_name">Review</span>
                </a>
                <a href="/dashboard/galleries" class="nav_link {{ $active === 'gallery' ? 'active' : '' }}">
                    <i class="bi bi-images"></i>
                    <span class="nav_name">Galleries</span>
                </a>
                <a href="/dashboard/contact" class="nav_link {{ $active === 'contact' ? 'active' : '' }}">
                    <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                    <span class="nav_name">Contact</span>
                </a>
            </div>
        </div>
        <form action="/logout" method="post" class="nav_link" style="border: none; background: none; padding: 0;">
            @csrf
            <button type="submit" style="border: none; background: none; cursor: pointer;" class="text-light">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">Logout</span>
            </button>
        </form>
    </nav>
</div>
