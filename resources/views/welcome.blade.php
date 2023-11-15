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
        <div class="hero-image">
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
            Kopi, sebuah minuman yang telah mengukir jejak panjang dalam sejarah manusia, bukan sekadar minuman sehari-hari, melainkan sebuah seni yang menyatu dengan kehidupan.
            </div>
            <div class="explain-content">
            Ditanam, dipetik, disangrai, dan diseduh, setiap tahapan dalam proses kopi membawa cerita tersendiri, menciptakan perjalanan unik dari biji ke cangkir yang menyejukkan.
            </div>
            <div class="explain-content">
            Aromanya yang menggoda, rasa yang kuat, dan keberagaman variasi rasa dan metode penyeduhan menjadikan kopi sebagai ritual yang memikat indera dan menyatukan orang dari berbagai latar belakang, menghidupkan percakapan, dan memperkaya pengalaman manusia.
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

<section id="carousel" class="carousel mb-5" data-aos="fade-right" data-aos-offset="500" data-aos-duration="2000">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/carousel1.jpg') }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="caption-content">
                            <h3>Warm and Welcoming Ambiance</h3>
                            <p>Our cafe-restaurant is designed to be a home away from home. The cozy and inviting
                                ambiance sets the stage for memorable experiences,
                                whether you're meeting friends for a leisurely brunch, enjoying a coffee catch-up, or
                                having a delightful dinner with loved ones. </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="css/gambar/carousel2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="caption-content">
                            <h3>Artistry in Every Bite</h3>
                            <p>Cafetarian is where the art of culinary excellence shines through in every dish we
                                create. Our chefs
                                are passionate about showcasing the full potential of plant-based ingredients,
                                crafting dishes that are not only visually stunning but also deliver a symphony of
                                flavors that elevate the dining experience.</p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="css/gambar/carousel3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="caption-content">
                            <h3>Seasonal and Fresh ingredients</h3>
                            <p>We believe that the key to exceptional food lies in the ingredients we use.
                                Our commitment to sourcing the freshest, seasonal, and locally-sourced produce ensures
                                that each dish bursts with natural flavors and goodness.</p>
                        </div>
                    </div>

                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    </html>