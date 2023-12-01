<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/promo.css') }}" />
</head>

<body>

</body>

</html>


<section id="promo" data-aos="fade-left" data-aos-offset="500" data-aos-duration="2000">

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
</section>
