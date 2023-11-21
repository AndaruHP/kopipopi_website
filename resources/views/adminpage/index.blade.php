<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-WzN9qVZfSI/5MwFGb/7Kl6bQy7ZFLXn7vwZxDMEQx7p6jPvc1oRegQh8SSt5iKFZ5dFucxFr4G5ubRnXtfrNsQ=="
        crossorigin="anonymous" />

</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="{{ asset('images/profile.png') }}" alt="profile"> </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i><img
                        src="{{ asset('images/logo.png') }}" class="img-fluid logo" /></a>
                <div class="nav_list"> <a href="#" class="nav_link active"> <i
                            class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> <a
                        href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span
                            class="nav_name">Users</span> </a> <a href="#" class="nav_link"> <i
                            class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span>
                    </a> <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span
                            class="nav_name">Bookmark</span> </a> <a href="#" class="nav_link"> <i
                            class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> <a
                        href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span
                            class="nav_name">Stats</span> </a> </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="bg-light content">
        <div class="row mb-3">
            <div class="col-6 col-md-6 col-lg-3 p-4">
                <div class="row totalmenu">
                    <div class="col-6 col-sm-6 col-md-6 b-0">
                        <img class="img-fluid" src="{{ asset('images/fork.png') }}" alt="Card image cap" />
                    </div>
                    <div class=" col-6 col-sm-6 col-md-6 b-0">
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
                    <div class=" col-6 col-sm-6 col-md-6 b-0">
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
                    <div class=" col-6 col-sm-6 col-md-6 b-0">
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
                    <div class=" col-6 col-sm-6 col-md-6 b-0">
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
                        <div class="col-9 col-sm-9 col-md-9 me-0 pe-0 ps-0">
                            <div class="review p-3">
                                <div class="rating gambar d-flex justify-content-between">
                                    <h3 class="judul">Review & Rating</h3>
                                    <div class="view">
                                        <a href="#">View All Review</a>
                                    </div>
                                </div>
                                <div class="komentar">

                                    <div class="comments">
                                        <div class="profile rounded-top d-flex justify-content-between">
                                            <div class="gambar ps-1">
                                                <img src="{{ asset('images/profile.png') }}" alt="profile" />
                                                <div class="nama">
                                                    <h5>Wilson Losiento</h5>
                                                    <p>17 Agustus 1945</p>
                                                </div>
                                            </div>
                                            <div class="bintang">
                                                <?php
                        for ($i = 0; $i < 5; $i++) {
                        ?>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <?php
                        }
                        ?>
                                                <img src="./img/comment.png" alt="">
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
                                    <div class="comments">
                                        <div class="profile rounded-top d-flex justify-content-between">
                                            <div class="gambar ps-1">
                                                <img src="{{ asset('images/profile.png') }}" alt="profile" />
                                                <div class="nama">
                                                    <h5>Wilson Losiento</h5>
                                                    <p>17 Agustus 1945</p>
                                                </div>
                                            </div>
                                            <div class="bintang">
                                                <?php
                        for ($i = 0; $i < 5; $i++) {
                        ?>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <?php
                        }
                        ?>
                                                <img src="./img/comment.png" alt="">
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
                                    <div class="comments">
                                        <div class="profile rounded-top d-flex justify-content-between">
                                            <div class="gambar ps-1">
                                                <img src="{{ asset('images/profile.png') }}" alt="profile" />
                                                <div class="nama">
                                                    <h5>Wilson Losiento</h5>
                                                    <p>17 Agustus 1945</p>
                                                </div>
                                            </div>
                                            <div class="bintang">
                                                <?php
                        for ($i = 0; $i < 5; $i++) {
                        ?>
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <?php
                        }
                        ?>
                                                <img src="./img/comment.png" alt="">
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
                        <div class="col-3 col-sm-3 col-md-3 ms-0 ps-0">
                            <div class="py-2 tabelkanan" style="height: 100%;">
                                <div class="boxrating p-2">
                                    <div class="share">
                                        <h5>Share </h5>
                                        <img src="{{ asset('images/share.png') }}" alt="" class="shares">
                                    </div>
                                    <div class="replies">
                                        <h5>Replies </h5>
                                        <img src="{{ asset('images/replies.png') }}" alt="" class="shares">
                                    </div>
                                    <div class="download gambar">
                                        <img src="{{ asset('images/download.png') }}" alt="" class="shares">
                                        <h5>Download</h5>
                                    </div>
                                    <div class="delete gambar">
                                        <img src="{{ asset('images/trash.png') }}" alt="" class="shares">
                                        <h5>Delete</h5>
                                    </div>
                                    <div class="row mt-3">
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
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 px-4 pt-2">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 bg-warning mb-3 p-2 addmenu">
                            <div class="rating gambar d-flex justify-content-between">
                                <h3 class="judul">Recent Added Menu</h3>
                                <div class="view">
                                    <a href="#">View All Menu</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6">
                                    <div class="gambar ps-1">
                                        <img src="{{ asset('images/menu2.png') }}" alt="profile"
                                            style="max-width: 100px; height: auto; border-radius: 10px;" />
                                        <div class="nama">
                                            <h5>Kopi Enak</h5>
                                            <p>Rp.40,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6">
                                    <div class="gambar ps-1">
                                        <img src="{{ asset('images/menu2.png') }}" alt="profile"
                                            style="max-width: 100px; height: auto; border-radius: 10px;" />
                                        <div class="nama">
                                            <h5>Kopi Enak</h5>
                                            <p>Rp.40,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6">
                                    <div class="gambar ps-1">
                                        <img src="{{ asset('images/menu2.png') }}" alt="profile"
                                            style="max-width: 100px; height: auto; border-radius: 10px;" />
                                        <div class="nama">
                                            <h5>Kopi Enak</h5>
                                            <p>Rp.40,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6">
                                    <div class="gambar ps-1">
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
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 bg-warning p-2 addmenu">
                            <div class="rating gambar d-flex justify-content-between">
                                <h3 class="judul">Recent Added Menu</h3>
                                <div class="view">
                                    <a href="#">View All Menu</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6">
                                    <div class="gambar ps-1">
                                        <img src="{{ asset('images/menu2.png') }}" alt="profile"
                                            style="max-width: 100px; height: auto; border-radius: 10px;" />
                                        <div class="nama">
                                            <h5>Kopi Enak</h5>
                                            <p>Rp.40,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6">
                                    <div class="gambar ps-1">
                                        <img src="{{ asset('images/menu2.png') }}" alt="profile"
                                            style="max-width: 100px; height: auto; border-radius: 10px;" />
                                        <div class="nama">
                                            <h5>Kopi Enak</h5>
                                            <p>Rp.40,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6">
                                    <div class="gambar ps-1">
                                        <img src="{{ asset('images/menu2.png') }}" alt="profile"
                                            style="max-width: 100px; height: auto; border-radius: 10px;" />
                                        <div class="nama">
                                            <h5>Kopi Enak</h5>
                                            <p>Rp.40,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-6">
                                    <div class="gambar ps-1">
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

        <div class="promo bg-light mt-2 p-2">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="rating gambar d-flex justify-content-between">
                        <h3 class="judul">Event Card</h3>
                        <div class="view">
                            <a href="#">View All Event</a>
                        </div>
                    </div>
                    <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('images/menu2.png') }}" alt="...">
                                        <h1>Event Promo 11.11</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('images/event1.png') }}" alt="...">
                                        <h1>Event Promo 11.11</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="{{ asset('images/menu3.png') }}" alt="...">
                                        <h1>Event Promo 11.11</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper">

                                        <img src="{{ asset('images/event1.png') }}" alt="...">
                                        <h1>Event Promo 11.11</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper">

                                        <img src="{{ asset('images/menu2.png') }}" alt="...">
                                        <h1>Event Promo 11.11</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="img-wrapper">

                                        <img src="{{ asset('images/menu4.png') }}" alt="...">
                                        <h1>Event Promo 11.11</h1>
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
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
