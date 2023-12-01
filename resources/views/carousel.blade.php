<link rel="stylesheet" href="{{ asset('css/carousel.css') }}">

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
