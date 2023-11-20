<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Menu</title>
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />
    <!-- custom css -->
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/adminaddmenu.css') }}" />
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
    <div class="height-100 bg-light content">
        <a href="">
            < back</a>
            <br>
            <br>
                <h1 class="text-align-start">Add New Menu</h1>
                <hr>
                <br>
                <br>
                <div class="container form">
                    <form action="" class="pt-5">
                        <div class="row mx-2 py-1">
                            <div class="col-lg-6 col-sm-12">
                                <input type="text" class="box" placeholder="Menu Name...">
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <input type="text" class="box">
                            </div>
                        </div>
                        <div class="row mx-2 py-1">
                            <div class="col-lg-4 col-sm-12">
                                <label class="dropdown">

                                    <div class="dd-button">
                                        Dropdown
                                    </div>

                                    <input type="checkbox" class="dd-input" id="test">

                                    <ul class="dd-menu">
                                        <li>Action</li>
                                        <li>Another action</li>
                                        <li>Something else here</li>
                                        <li class="divider"></li>
                                    </ul>

                                </label>
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                <input type="text" class="box" placeholder="Rp...">
                            </div>
                        </div>
                        <div class="row mx-2 py-1">
                            <div class="col-lg-4 col-sm-12">
                                <label class="dropdown">

                                    <div class="dd-button">
                                        Dropdown
                                    </div>

                                    <input type="checkbox" class="dd-input" id="test">

                                    <ul class="dd-menu">
                                        <li>Action</li>
                                        <li>Another action</li>
                                        <li>Something else here</li>
                                        <li class="divider"></li>
                                    </ul>

                                </label>
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                <input type="text" class="box">
                            </div>
                        </div>
                        <div class="row mx-4 py-1">
                            <textarea rows="10" id="TITLE" placeholder="Description...">
                    </textarea>
                        </div>
                        <div class="row justify-content-center pt-3 pb-4">
                            <div class="col-lg-2 col-sm-4">
                                <a href="#" class="custom-button">
                                    <p>Add Menu</p>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>

    </div>

    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/adminaddmenu.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
