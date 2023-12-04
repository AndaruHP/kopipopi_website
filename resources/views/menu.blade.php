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
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}" />

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
                    @foreach ($categories as $category)
                        <li data-filter=".filter-{{ $category->slug }}">{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        @foreach ($categories as $category)
            <div class="menu-container">
                @foreach ($category->subcategories as $subcategory)
                    <div class="menu-item filter-{{ $category->slug }}">
                        <div class="menu-category">
                            <h3>{{ $subcategory->name }}</h3>
                            @if ($subcategory->menus && $subcategory->menus->count() > 0)
                                @foreach ($subcategory->menus as $menu)
                                    <div class="menu-item">
                                        <div class="menu-image">
                                            <img src="{{ asset('storage/' . $menu->image) }}" alt="Explain Image" />
                                        </div>
                                        <div class="menu-name">
                                            {{ $menu->name }}
                                        </div>
                                        {{-- <div class="menu-description">
                                            <p>{{ $menu->description }}</p>
                                        </div> --}}
                                        <div class="menu-price">
                                            <p>Rp.{{ number_format($menu->price, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>No menus available for this subcategory.</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach



    </div>



</section>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
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
    $(document).ready(function() {
        // Initialize Isotope
        var $menuContainer = $('.menu-container');

        // Initialize Isotope with all items
        $menuContainer.isotope({
            itemSelector: '.menu-item',
            layoutMode: 'fitRows'
        });

        // Filter items on button click
        $('#menu-flters li').on('click', function() {
            $('#menu-flters li').removeClass('filter-active');
            $(this).addClass('filter-active');
            var selector = $(this).data('filter');

            // Use Isotope's filter function to only show items with the selected category
            $menuContainer.isotope({
                filter: selector
            });
        });
    });
</script>
