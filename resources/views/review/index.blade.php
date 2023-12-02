<!-- resources/views/review/index.blade.php -->

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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

        .rating-header {
            margin-top: -10px;
            margin-bottom: 10px;
        }

        .description {
            height: 100px;
            text-align: left;
            vertical-align: top;
            border: none;
            border-radius: 5px;
        }

        .box {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .form-group {
            text-align: center;
            font-weight: bold;
            font-size: 25px;
            margin-bottom: 10px;
        }

        .row {
            width: 100%;
            /* Membuat lebar row menjadi 100% dari parent */
            max-width: 400px;
            /* Optional: Sesuaikan dengan lebar maksimum yang diinginkan */
            margin: 0 auto;
            /* Menengahkan row secara horizontal */
        }

        .btnrating:hover {
            background-color: #f8d61e;
            /* Ganti warna latar hover sesuai keinginan Anda */
            color: #333;
            /* Ganti warna teks hover sesuai keinginan Anda */
        }

        .submit-btn-container {
            text-align: center;
        }

        .warna {
            background-color: #f0f0f0;
            border-radius: 12px;
        }

        @media screen and (min-width: 768px) {
            .warna {
                min-width: 400px;
            }

        }
    </style>

    <!-- Styles -->
    <style>
    </style>
</head>

@include('navbar')

<!-- <div class="container">
    <div class="col-lg-6">
        <form action="{{ route('review.store') }}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <div class="mb-3">
                <label for="rating" class="form-label">Rating:</label>
                <input type="range" class="form-range" min="0" max="5" step="0.1" id="rating"
                    oninput="updateRating(this.value)" value="4" name="rating">
                <span id="rating-value">4.0</span>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi Review:</label>
                <input type="hidden" name="description" id="description" value="{{ old('description') }}">
                <trix-editor input="description"></trix-editor>
                <div class="text-muted">Anda hanya bisa mengisi review sekali</div>

            </div>

            <button type="submit" class="btn btn-primary">Submit Review</button>
        </form>
    </div>
</div> -->

<div class="container box pt-5">
    <form action="{{ route('review.store') }}" method="post" class="px-1 py-3 warna">
        @csrf

        <div class="form-group" id="rating-ability-wrapper">
            <label class="control-label" for="rating">
                <span class="field-label-header">LEAVE A REVIEW!</span><br>
                <span class="field-label-info"></span>
                <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
            </label>
            <h2 class="bold rating-header" style="">
                <span class="selected-rating">0</span><small> / 5</small>
            </h2>
            <button type="button" class="btnrating btn btn-default btn-lg" data-attr="1" id="rating-star-1">
                <i class="fa fa-star" aria-hidden="true"></i>
            </button>
            <button type="button" class="btnrating btn btn-default btn-lg" data-attr="2" id="rating-star-2">
                <i class="fa fa-star" aria-hidden="true"></i>
            </button>
            <button type="button" class="btnrating btn btn-default btn-lg" data-attr="3" id="rating-star-3">
                <i class="fa fa-star" aria-hidden="true"></i>
            </button>
            <button type="button" class="btnrating btn btn-default btn-lg" data-attr="4" id="rating-star-4">
                <i class="fa fa-star" aria-hidden="true"></i>
            </button>
            <button type="button" class="btnrating btn btn-default btn-lg" data-attr="5" id="rating-star-5">
                <i class="fa fa-star" aria-hidden="true"></i>
            </button>
        </div>
        <div class="row container">
            <textarea type="description" id="desc" name="desc" class="col-12 description"
                placeholder="Input Your Comment"></textarea>
        </div>
        <div class="submit-btn-container mt-3">
            <button type="submit" class="btn bg-secondary text-light">Submit Review</button>
        </div>
    </form>

</div>


<script>
    //buat star
    jQuery(document).ready(function($) {

        $(".btnrating").on('click', (function(e) {

            var previous_value = $("#selected_rating").val();

            var selected_value = $(this).attr("data-attr");
            $("#selected_rating").val(selected_value);

            $(".selected-rating").empty();
            $(".selected-rating").html(selected_value);

            for (i = 1; i <= selected_value; ++i) {
                $("#rating-star-" + i).toggleClass('btn-warning');
                $("#rating-star-" + i).toggleClass('btn-default');
            }

            for (ix = 1; ix <= previous_value; ++ix) {
                $("#rating-star-" + ix).toggleClass('btn-warning');
                $("#rating-star-" + ix).toggleClass('btn-default');
            }

        }));


    });
</script>


<script>
    function updateRating(value) {
        document.getElementById('rating-value').innerText = value;
    }
</script>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

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

{{-- @include('footer') --}}

</html>
