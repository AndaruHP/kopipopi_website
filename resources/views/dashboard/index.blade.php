@extends('dashboard.layout.main')

@section('container')
    <div class=" content">
        <div class="row mb-3">
            <div class="col-6 col-md-6 col-lg-3 p-4">
                <div class="row totalmenu">
                    <div class="col-6 col-sm-6 col-md-6 b-0">
                        <img class="img-fluid" src="{{ asset('images/fork.png') }}" alt="Card image cap" />
                    </div>
                    <div class="col-sm-6 col-md-6 b-0">
                        <div class="a">
                            <h3 class="title">Total Menu</h3>
                            <h1 class="text">69</h1>
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
                            <h1 class="text">69</h1>
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
                            <h1 class="text">69</h1>
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
                            <h1 class="text">69</h1>
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
                                            <a href="#">View All Review</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="komentar">
                                    <div class="comments p-1">
                                        <div class="profile rounded-top d-flex justify-content-between">
                                            <div class="gambar ps-1">
                                                <img src="{{ asset('images/profile.png') }}" alt="profile" />
                                                <div class="nama">
                                                    <h5>Wilson Losiento</h5>
                                                    <p>17 Agustus 1945</p>
                                                </div>
                                            </div>
                                            <div class="bintang gambar">

                                                <i class="bi bi-star-fill text-warning"></i>
                                                <p>5/5</p>
                                                <!-- <img src="{{ asset('images/comment.png') }}" alt=""> -->
                                            </div>
                                        </div>
                                        <div class="comment ps-2">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's
                                                standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and scrambled it to make a
                                                type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting,
                                                remaining essentially unchanged.
                                            </p>
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>
                        <!-- <div class="row row-cols-12 row-cols-sm-12 row-cols-lg-12 row-cols-md-12 row-cols-lg-12 col-sm-12 col-md-3 ms-0 ps-0">
                                                        <div class="py-2 tabelkanan" style="height: 100%;">
                                                            <div class="boxrating p-2">
                                                                <div class="share mb-2">
                                                                   <button class="sharebutton warnashare">
                                                                        <div class="svg-wrapper-1">
                                                                            <div class="svg-wrapper">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                                                <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                                                            </svg>
                                                                            </div>
                                                                        </div>
                                                                        <span>Send</span>
                                                                    </button>
                                                                </div>
                                                                <div class="replies mb-2">
                                                                    <button class="sharebutton warnareplies">
                                                                        <div class="svg-wrapper-1">
                                                                            <div class="svg-wrapper">
                                                                            <img src="{{ asset('images/share.png') }}" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <span>Replies</span>
                                                                    </button>
                                                                </div>
                                                                <div class="download gambar mb-2">
                                                                    <button class="bookmarkBtn">
                                                                        <span class="IconContainer">
                                                                            <svg viewBox="0 0 384 512" height="0.9em" class="icon"><path d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z"></path></svg>
                                                                        </span>
                                                                        <p class="texts">Save</p>
                                                                    </button>
                                                                </div>
                                                                <div class="delete gambar">
                                                                    <button class="noselect"><span class="text">Delete</span><span class="icon">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                        <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z">
                                                                        </path></svg></span></button>
                                                                </div>
                                                                <div class="row mt-3">
                                                                    <h5>Rating</h5>
                                                                    <div class="5">
                                                                        <input type="checkbox" id="rating" name="rating5" value="rating5">
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                    </div>
                                                                    <div class="4">
                                                                        <input type="checkbox" id="rating" name="rating4" value="rating4">
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                    </div>
                                                                    <div class="3">
                                                                        <input type="checkbox" id="rating" name="rating3" value="rating3">
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                    </div>
                                                                    <div class="2">
                                                                        <input type="checkbox" id="rating" name="rating2" value="rating2">
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                    </div>
                                                                    <div class="1">
                                                                        <input type="checkbox" id="rating" name="rating1" value="rating1">
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
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
                                        <a href="#">View All Menu</a>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 ">
                                    <div class="gambar ps-1 menubang mb-2">
                                        <img src="{{ asset('images/menu2.png') }}" alt="profile"
                                            style="max-width: 100px; height: auto; border-radius: 10px;" />
                                        <div class="nama">
                                            <h5>Kopi Enak</h5>
                                            <p>Rp.40,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 ">
                                    <div class="gambar ps-1 menubang mb-2">
                                        <img src="{{ asset('images/menu2.png') }}" alt="profile"
                                            style="max-width: 100px; height: auto; border-radius: 10px;" />
                                        <div class="nama">
                                            <h5>Kopi Enak</h5>
                                            <p>Rp.40,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 ">
                                    <div class="gambar ps-1 menubang mb-2">
                                        <img src="{{ asset('images/menu2.png') }}" alt="profile"
                                            style="max-width: 100px; height: auto; border-radius: 10px;" />
                                        <div class="nama">
                                            <h5>Kopi Enak</h5>
                                            <p>Rp.40,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 ">
                                    <div class="gambar ps-1 menubang mb-2">
                                        <img src="{{ asset('images/menu2.png') }}" alt="profile"
                                            style="max-width: 100px; height: auto; border-radius: 10px;" />
                                        <div class="nama">
                                            <h5>Kopi Enak</h5>
                                            <p>Rp.40,000</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3 p-2 addmenu">
                            <div class="rating gambar d-flex justify-content-between row row-cols-2">

                                <div class="col-12 col-sm-9 col-md-6">
                                    <h4 class="judul">Recent Added Category</h4>
                                </div>
                                <div class="col-12 col-sm-3 col-md-6">
                                    <div class="d-flex justify-content-md-end">
                                        <a href="#">View All Category</a>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 ">
                                    <div class="gambar ps-1 menubang mb-2">
                                        <img src="{{ asset('images/menu2.png') }}" alt="profile"
                                            style="max-width: 100px; height: auto; border-radius: 10px;" />
                                        <div class="nama">
                                            <h5>Kopi Enak</h5>
                                            <p>Rp.40,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 ">
                                    <div class="gambar ps-1 menubang mb-2">
                                        <img src="{{ asset('images/menu2.png') }}" alt="profile"
                                            style="max-width: 100px; height: auto; border-radius: 10px;" />
                                        <div class="nama">
                                            <h5>Kopi Enak</h5>
                                            <p>Rp.40,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 ">
                                    <div class="gambar ps-1 menubang mb-2">
                                        <img src="{{ asset('images/menu2.png') }}" alt="profile"
                                            style="max-width: 100px; height: auto; border-radius: 10px;" />
                                        <div class="nama">
                                            <h5>Kopi Enak</h5>
                                            <p>Rp.40,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 ">
                                    <div class="gambar ps-1 menubang mb-2">
                                        <img src="{{ asset('images/menu2.png') }}" alt="profile"
                                            style="max-width: 100px; height: auto; border-radius: 10px;" />
                                        <div class="nama">
                                            <h5>Kopi Enak</h5>
                                            <p>Rp.40,000</p>
                                        </div>
                                    </div>
                                </div>


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
                                    <a href="#">View All Event</a>
                                </div>
                            </div>

                        </div>
                        <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card">
                                        <div class="img-wrapper">
                                            <img class="img-fluid" src="{{ asset('images/event1.png') }}"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card">
                                        <div class="img-wrapper">
                                            <img class="img-fluid" src="{{ asset('images/menu2.png') }}" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card">
                                        <div class="img-wrapper">
                                            <img class="img-fluid" src="{{ asset('images/event1.png') }}"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card">
                                        <div class="img-wrapper">

                                            <img class="img-fluid" src="{{ asset('images/menu2.png') }}" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card">
                                        <div class="img-wrapper">

                                            <img class="img-fluid" src="{{ asset('images/menu2.png') }}" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card">
                                        <div class="img-wrapper">

                                            <img class="img-fluid" src="{{ asset('images/event1.png') }}"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
