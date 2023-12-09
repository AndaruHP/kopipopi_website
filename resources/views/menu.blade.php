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
    <!-- In your HTML head -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

</head>


<body>
    @include('navbar')

    <body id="menu" class="menu section-bg mb-5">
        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                    <li data-filter=".filter-all">All</li>
                    @foreach ($categories as $category)
                        <li data-filter=".filter-{{ $category->slug }}">{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-lg-8 justify-content-center d-flex">
            <div id="menu-container">
                @foreach ($categories as $category)
                    <div class="menu-category filter-{{ $category->slug }}">
                        <h2>--{{ $category->name }}--</h2>
                        @foreach ($category->subcategories as $subcategory)
                            <div class="menu-subcategory filter-{{ $subcategory->slug }}">
                                <h3>{{ $subcategory->name }}</h3>
                                <div class="menu-items">
                                    @if ($subcategory->menus && $subcategory->menus->count() > 0)
                                        @foreach ($subcategory->menus as $menu)
                                            <div class="menu-item">
                                                <h4>{{ $menu->name }}</h4>
                                                <div class="menu-image">
                                                    <img src="{{ asset('storage/' . $menu->image) }}" alt="">
                                                </div>
                                                <p>{!! $menu->description !!}</p>
                                                <!-- Your menu item content here -->
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
        </div>


    </body>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- jQuery CDN -->

    <script>
        $(document).ready(function() {
            // Initialize Isotope
            var $menuContainer = $('#menu-container').isotope({
                itemSelector: '.menu-category',
                layoutMode: 'vertical',
                // getCenter: true,
                // coulumnWidth: 'auto'

            });

            // Filter items on button click
            $('#menu-flters li').on('click', function() {
                $('#menu-flters li').removeClass('filter-active');
                $(this).addClass('filter-active');
                var selector = $(this).data('filter');

                if (selector === '.filter-all') {
                    // If All is selected, show all items
                    $menuContainer.isotope({
                        filter: '*'
                    });
                } else {
                    // Filter based on the selected category
                    $menuContainer.isotope({
                        filter: selector
                    });
                }
            });
        });
    </script>
</body>
