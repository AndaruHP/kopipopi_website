@extends('dashboard.layout.main')

@section('container')
    <div class=" content mb-3">
        <div class="row mb-3">
            <div class="col-6 col-md-6 col-lg-3 p-4">
                <div class="row totalmenu">
                    <div class="col-6 col-sm-6 col-md-6 b-0">
                        <img class="img-fluid" src="{{ asset('images/fork.png') }}" alt="Card image cap" />
                    </div>
                    <div class="col-sm-6 col-md-6 b-0">
                        <div class="a">
                            <h3 class="title">Total Menu</h3>
                            <h1 class="text">{{ $totalmenu }}</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 p-4">
                <div class="row totalcategory">
                    <div class="col-6 col-sm-6 col-md-6 b-0">
                        <img class="img-fluid" src="{{ asset('images/fork.png') }}" alt="Card image cap" />
                    </div>
                    <div class="col-sm-6 col-md-6 b-0">
                        <div class="a">
                            <h3 class="title">Total Category</h3>
                            <h1 class="text">{{ $totalcategory }}</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 p-4">
                <div class="row totalreview">
                    <div class="col-6 col-sm-6 col-md-6 b-0">
                        <img class="img-fluid" src="{{ asset('images/fork.png') }}" alt="Card image cap" />
                    </div>
                    <div class="col-sm-6 col-md-6 b-0">
                        <div class="a">
                            <h3 class="title">Total Review</h3>
                            <h1 class="text">{{ $totalreview }}</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 p-4">
                <div class="row totalevent">
                    <div class="col-6 col-sm-6 col-md-6 b-0">
                        <img class="img-fluid" src="{{ asset('images/fork.png') }}" alt="Card image cap" />
                    </div>
                    <div class="col-sm-6 col-md-6 b-0">
                        <div class="a">
                            <h3 class="title">Event</h3>
                            <h1 class="text">{{ $totalbanner }}</h1>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="box px-3">
            <div class="row ">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="row reviewrating">
                        <div class="col-12 col-sm-12 col-md-12 me-0 pe-0 ps-0">
                            <div class="review p-3">
                                <div class="rating gambar d-flex justify-content-between row row-cols-2">
                                    <div class="col-12 col-sm-9 col-md-6">
                                        <h3 class="judul">Review & Rating</h3>
                                    </div>
                                    <div class="col-12 col-sm-3 col-md-6">
                                        <div class="d-flex justify-content-md-end">
                                            <a href="/dashboard/review">View All Review</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="komentar">
                                    @foreach ($reviews as $review)
                                        <div class="comments p-1 mb-1 mr-2">
                                            <div class="profile rounded-top d-flex justify-content-between">
                                                <div class="gambar ps-1">
                                                    <img src="{{ asset('images/profile.png') }}" alt="profile" />
                                                    <div class="nama">
                                                        <h5>{{ $review->user->name }}</h5>
                                                        <p>{{ $review->created_at->format('d F Y') }}</p>
                                                    </div>
                                                </div>
                                                <div class="bintang gambar">

                                                    <i class="bi bi-star-fill text-warning"></i>
                                                    <p>{{ number_format($review->rating, 1) }}/5</p>
                                                    <!-- <img src="{{ asset('images/comment.png') }}" alt=""> -->
                                                </div>
                                            </div>
                                            <div class="comment ps-2">
                                                {!! $review->description !!}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 px-4 pt-2">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3 p-2 addmenu">
                            <div class="rating gambar d-flex justify-content-between row row-cols-2">

                                <div class="col-12 col-sm-9 col-md-6">
                                    <h3 class="judul">Recent Added Menu</h3>
                                </div>
                                <div class="col-12 col-sm-3 col-md-6">
                                    <div class="d-flex justify-content-md-end">
                                        <a href="/dashboard/menus">View All Menu</a>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                @foreach ($menus as $menu)
                                    <div class="col-12 col-sm-12 col-md-6 ">
                                        <div class="gambar ps-1 menubang mb-2">
                                            <img src="{{ asset('storage/' . $menu->image) }}" alt="profile"
                                                style="max-width: 90px; height: auto; border-radius: 10px;" />
                                            <div class="nama">
                                                <h5>{{ $menu->name }}</h5>
                                                <p>Rp.{{ number_format($menu->price, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3 p-2 addmenu">
                            <div class="rating gambar d-flex justify-content-between row row-cols-2">

                                <div class="col-12 col-sm-9 col-md-6">
                                    <h4 class="judul">Recent Added Category</h4>
                                </div>
                                <div class="col-12 col-sm-3 col-md-6">
                                    <div class="d-flex justify-content-md-end">
                                        <a href="/dashboard/categories">View All Category</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($categories as $category)
                                    <div class="col-12 col-sm-12 col-md-6 ">
                                        <div class="gambar ps-1 menubang mb-2">
                                            <div class="nama">
                                                <h5>{{ $category->name }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="pr-3 pl-1">

            <div class="box promo bg-light mt-2 p-2">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="rating gambar d-flex justify-content-between row row-cols-2">

                            <div class="col-12 col-sm-9 col-md-6">
                                <h3 class="judul">Event Card</h3>
                            </div>
                            <div class="col-12 col-sm-3 col-md-6">
                                <div class="d-flex justify-content-md-end">
                                    <a href="/dashboard/banners">View All Event</a>
                                </div>
                            </div>

                        </div>
                        <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($banners as $banner)
                                    <div class="carousel-item">
                                        <div class="card">
                                            <div class="img-wrapper">
                                                <img class="img-fluid" src="{{ asset('storage/' . $banner->image) }}"
                                                    alt="...">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if ($banners->count() > 3)
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
