<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        <!-- Styles -->
        <style>
        </style>
    </head>


    <section id="navbar">
        <div class="navbar">
            <div class="navbar-content">
                <img src="{{ asset('images/logo.png')}}" />
            </div>
            <div class="navbar-content">
                Home
            </div>
            <div class="navbar-content">
                Menu
            </div>
            <div class="navbar-content">
                Gallery
            </div>
            <div class="navbar-content">
                Location
            </div>
        </div>
    </section>



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
</html>
