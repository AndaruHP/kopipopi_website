<section id="navbar">
    <div class="navbar">
        <div class="navbar-content">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" />
            </a>
        </div>
        <div class="dropdown">
            <div class="navbar-content">
                <div class="dropbtn">Others &#9662;</div>
                <div class="dropdown-content">
                    <a href="/menu">Menu</a>
                    <a href="#">Gallery</a>
                    <a href="#">Location</a>
                    {{-- <a href="/login">Login</a> --}}
                    @auth
                        <a href="/review">Review</a>
                        <a href="/dashboard">Dashboard</a>
                        <a href="/logout">Logout</a>
                    @else
                        <a href="/login">Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</section>
