<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/review.css') }}">


    <!-- Styles -->
    <style>
    </style>
    <script src="{{ asset('js/app.js') }}"></script> <!-- Include compiled JS file containing jQuery -->

    <script src="{{ asset('path/to/compiled/isotope.js') }}"></script> <!-- Include Isotope JS file -->

</head>

@include('navbar')

@include('hero')

<section id="explain">
    <div class="explain-wrapper">
        <div class="explain-image">
            <img src="{{ asset('images/explain.png') }}" alt="Explain Image" />
        </div>
        <div class="explain-content">
            <h2> KOPI </h2>

            <p> Kopi, sebuah minuman yang telah mengukir jejak panjang dalam sejarah manusia, bukan sekadar minuman
                sehari-hari, melainkan sebuah seni yang menyatu dengan kehidupan. </p>
            <p>
                Ditanam, dipetik, disangrai, dan diseduh, setiap tahapan dalam proses kopi membawa cerita tersendiri,
                menciptakan perjalanan unik dari biji ke cangkir yang menyejukkan. </p>
            <p>
                Aromanya yang menggoda, rasa yang kuat, dan keberagaman variasi rasa dan metode penyeduhan menjadikan
                kopi
                sebagai ritual yang memikat indera dan menyatukan orang dari berbagai latar belakang, menghidupkan
                percakapan, dan memperkaya pengalaman manusia. </p>
        </div>
    </div>

</section>

<section id="menu">
    <div class="menu-grid">
        @foreach ($menus as $menu)
            <div class="menu-item">
                <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->slug }}">
                <div class="menu-text">{{ $menu->name }}</div>
            </div>
        @endforeach

    </div>
</section>

@include('carousel')
<section id="review">
    <div class="row justify-content-center">
        <div class="TheyAllLoveOurCoffee text-center p-5" data-aos="zoom-in-up" style="font-size: 64px; font-family: 'Bebas Neue'; font-weight: 400; letter-spacing: 11.84px; word-wrap: break-word">
            <span style="color: white">THEY ALL LOVE OUR</span><span style="color: #FE0002"> COFFEE</span>
          </div>
                  @foreach ($reviews as $review)
                  <div class="review col-lg-5 col-sm-10 justify-content-center" data-aos="zoom-in-up" style="display: flex; flex-direction: column; justify-content: center;">
                    <div class="text-center">
                        <div class="align-item-center">
                            <p class="text-center">
                                _____________{!! $review->description !!}_____________
                            </p>
                        </div>
                        <p class="text-center">
                            {{ number_format($review->rating, 0) }}/5
                        </p>
                        <p class="text-center">
                            -{{ $review->user->name }}
                        </p>
                    </div>
                </div>

        @endforeach


        {{-- <div class="row">
            <div class="container mt-5">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div> --}}
        <div class="row justify-content-center p-5">
            <div class="col-9 text-center">
                <a href="/review"><button class="btn btn-danger animated-button">LEAVE A REVIEW!</button></a>
            </div>
        </div>
    </div>
</section>
@include('promo')



<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    window.addEventListener('scroll', function() {
        const scrolled = window.scrollY;
        const parallax = document.getElementById('parallax');
        parallax.style.transform =
            `translateY(${scrolled * 0.9}px)`; // Adjust the factor to control the parallax effect
    });
</script>

<script>
    $(document).ready(function() {
        // Initialize Isotope
        $('.menu-container').isotope({
            itemSelector: '.menu-item',
            layoutMode: 'fitRows'
        });

        // Filter items on button click
        $('#menu-flters li').on('click', function() {
            $('#menu-flters li').removeClass('filter-active');
            $(this).addClass('filter-active');
            var selector = $(this).data('filter');
            $('.menu-container').isotope({
                filter: selector
            });
        });
    });

    function scrollToSection(sectionId) {
        var targetSection = document.querySelector(sectionId);

        if (targetSection) {
            targetSection.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }
</script>

<script>
    AOS.init();
</script>

@include('footer')

</html>
