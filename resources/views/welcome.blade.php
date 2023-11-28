<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Styles -->
    <style>
    </style>
</head>

@include('navbar')


<section id="hero">
    <div class="hero-image" id="parallax">
        <img src="{{ asset('images/hero.jpg') }}" alt="Hero Image" />
    </div>
    <div class="hero-content">
        Kopipopi
    </div>
</section>


<section id="explain">
    <div class="explain-image">
        <img src="{{ asset('images/explain.png') }}" alt="Explain Image" />
    </div>
    <div class="explain-title">
        <h2> KOPI </h2>
        <div class="explain-content">
            Kopi, sebuah minuman yang telah mengukir jejak panjang dalam sejarah manusia, bukan sekadar minuman
            sehari-hari, melainkan sebuah seni yang menyatu dengan kehidupan.
        </div>
        <div class="explain-content">
            Ditanam, dipetik, disangrai, dan diseduh, setiap tahapan dalam proses kopi membawa cerita tersendiri,
            menciptakan perjalanan unik dari biji ke cangkir yang menyejukkan.
        </div>
        <div class="explain-content">
            Aromanya yang menggoda, rasa yang kuat, dan keberagaman variasi rasa dan metode penyeduhan menjadikan kopi
            sebagai ritual yang memikat indera dan menyatukan orang dari berbagai latar belakang, menghidupkan
            percakapan, dan memperkaya pengalaman manusia.
        </div>
    </div>

</section>

<section id="menu">
    <div class="menu-grid">
        <div class="menu-item">
            <img src="{{ asset('images/menu1.jpg') }}" alt="Menu 1">
            <div class="menu-text">Item 1</div>
        </div>
        <div class="menu-item">
            <img src="{{ asset('images/menu2.png') }}" alt="Menu 2">
            <div class="menu-text">Item 2</div>
        </div>
        <div class="menu-item">
            <img src="{{ asset('images/menu3.png') }}" alt="Menu 3">
            <div class="menu-text">Item 3</div>
        </div>
        <div class="menu-item">
            <img src="{{ asset('images/menu4.png') }}" alt="Menu 4">
            <div class="menu-text">Item 4</div>
        </div>
    </div>
</section>


@include('carousel')

@include('promo')

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
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