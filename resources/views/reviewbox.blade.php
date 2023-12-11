<link rel="stylesheet" href="{{ asset('css/reviewbox.css') }}" />

<div class="main-container">
    <div class="container">
        <div class="header-row row justify-content-center">
            <div class="coffee-title text-center p-5" data-aos="zoom-in-up">
                <span class="white-text">THEY ALL LOVE OUR</span><span class="red-text"> COFFEE</span>
            </div>
        </div>
        <div class="reviews-row row justify-content-center">
            @foreach ($reviews as $review)
                <div class="review-col col-lg-5 col-sm-10 m-2">
                    <div class="card text-center">
                        <div class="card-body bg-white text-center my-auto">
                            <p class="review-description">{!! $review->description !!}</p>
                            <p class="review-rating text-center">
                                {{ number_format($review->rating, 0) }}/5
                            </p>
                            <p class="review-user text-center">
                                -{{ $review->user->name }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="review-button-row row justify-content-center p-5">
            <div class="review-button-col col-9 text-center">
                <a href="/review" class="animated-button">LEAVE A REVIEW!</a>
            </div>
        </div>
    </div>
</div>
