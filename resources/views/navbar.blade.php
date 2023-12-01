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
                        <a href="#" id="logout-link">Logout</a>

                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="/login">Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const logoutLink = document.getElementById('logout-link');
        const logoutForm = document.getElementById('logout-form');

        if (logoutLink && logoutForm) {
            logoutLink.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah navigasi langsung ke URL

                logoutForm.submit(); // Men-trigger formulir logout
            });
        }
    });
</script>
