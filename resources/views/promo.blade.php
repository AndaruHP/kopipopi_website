<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/promo.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <style>
        .close-lightbox {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #fff;
            padding: 5px;
            border-radius: 50%;
            cursor: pointer;
            color: #000;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div id="promo" data-aos="fade-left" data-aos-offset="500" data-aos-duration="2000">
                <div class="header">
                    <span class="grid-title">Promo of the </span> <span class="grid-title-space">.</span>
                    <span class="grid-title2"> month</span>
                </div>
                <div class="row">
                    @foreach ($banners as $banner)
                        <div class="col-lg-6 mb-3">
                            <a href="{{ asset('storage/' . $banner->image) }}" class="glightbox"
                                data-glightbox="group:myGallery" data-gallery-id="myGallery">
                                <img src="{{ asset('storage/' . $banner->image) }}" alt=""
                                    style="object-fit: cover; width: 100%; height: 100%">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        const closeButtons = document.querySelectorAll(".close-lightbox");

        closeButtons.forEach(button => {
            button.addEventListener("click", () => {
                GLightbox.close();
            });
        });
    </script>

    <script>
        GLightbox({
            selector: ".glightbox"
        });
    </script>

</body>

</html>


{{-- <section id="promo" data-aos="fade-left" data-aos-offset="500" data-aos-duration="2000">

    <div class="header">
        <span class="grid-title">Promo of the </span> <span class="grid-title-space">.</span>
        <span class="grid-title2"> month</span>

    </div>
    <div class="grid-container">
        @foreach ($banners as $banner)
            <div class="grid-item">
                <img src="{{ asset('storage/' . $banner->image) }}" alt="Image 1">
            </div>
        @endforeach

    </div>
</section> --}}
