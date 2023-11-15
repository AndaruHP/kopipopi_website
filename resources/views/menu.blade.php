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

    
    <section id="menu" class="menu section-bg mb-5">
        <div class="container" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="400">

            <div class="section-title" data-aos="fade-down-right" data-aos-duration="2000">
                <h2>Menu</h2>
                <p>Discover Our Tasty Menu</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="menu-flters">
                        <li data-filter=".filter-Appetizer">snacks & appetizer</li>
                        <li data-filter=".filter-MainCourse">main course</li>
                        <li data-filter=".filter-SideDish">coffee</li>
                        <li data-filter=".filter-Beverages">drinks</li>
                        <li data-filter=".filter-Dessert">tea/herb</li>
                    </ul>
                </div>
            </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
        AOS.init();
    </script>