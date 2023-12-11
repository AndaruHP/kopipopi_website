<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<!-- <section id="navbar"> -->
    <div class="navbar">
        <div class="navbar-left">
            <div class="navbar-content">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" />
                </a>
            </div>
        </div>

        <div class="navbar-right">
            <div class="navbar-inside">
                <a href="/menu">Menu</a>
            </div>
            

            <div class="dropdown">
                <div class="navbar-content">
                    <div class="dropbtn">Others &#9662;</div>
                    <div class="dropdown-content">
                        <a href="#carousel">Gallery</a>
                        <a href="#location">Location</a>
                        {{-- <a href="/login">Login</a> --}}
                        @can('admin')
                            <a href="/dashboard">Dashboard</a>
                            <a href="#" id="logout-link">Logout</a>
                            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            @auth
                                <a href="/review">Review</a>
                                <a href="#" id="logout-link">Logout</a>
                                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @else
                                <a href="/login">Login</a>
                            @endauth
                        @endcan
                    </div>
                </div>
            </div>

        </div>
    </div>
<!-- </section> -->

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

<script>
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>
