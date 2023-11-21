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
    <link rel="stylesheet" href="{{ asset('css/adminmenu.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-WzN9qVZfSI/5MwFGb/7Kl6bQy7ZFLXn7vwZxDMEQx7p6jPvc1oRegQh8SSt5iKFZ5dFucxFr4G5ubRnXtfrNsQ=="
        crossorigin="anonymous" />

</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt="profile"> </div>
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
        <h1 class="text-align-start">Menu</h1>
        <hr>
        <div class="row">
            <div class="col-5">
                <button class="rounded-button">
                    <div class="button-content">
                        <img src="{{ asset('images/plusicon.svg') }}" alt="">
                        <p>Add Menu</p>
                    </div>
                </button>
            </div>
            <div class="col-7 ">
                <div class="row justify-content-end ">
                    <div class="col-3">
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
                    <div class="col-4">
                        <div class="wrap">
                            <div class="search">
                                <input type="text" class="searchTerm" placeholder="Search For...">
                                <button type="submit" class="searchButton">
                                    <img src="{{ asset('images/searchicon.svg') }}" alt="" width="20"
                                        height="20">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row pt-3">
            <div class="col-12">
                <div class="table-container">
                    <table class="img-table">
                        <tbody>
                            <tr>
                                <th data-sticky="left">#</th>
                                <th data-sticky="left">Images</th>
                                <th>Menu</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Category</th>
                                <th>Sub-Category</th>
                                <th data-sticky="right">Action</th>
                            </tr>
                            <tr>
                                <td data-sticky="left">1.</td>
                                <td data-sticky="left"><img
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Escudo_del_Club_Atl%C3%A9tico_Independiente.svg/1945px-Escudo_del_Club_Atl%C3%A9tico_Independiente.svg.png"
                                        alt="Logo"></td>
                                <td>Siomay</td>
                                <td>Rp. 18.000,-</td>
                                <td>
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="select">
                                                <select name="slct" id="slct">
                                                    <option>Status</option>
                                                    <option value="1">In Stock</option>
                                                    <option value="2">Low Stock</option>
                                                    <option value="3">Out of Stock</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>Side Dish</td>
                                <td>Snack</td>
                                <td data-sticky="right">
                                    <div class="row pb-1">
                                        <div class="col-12">
                                            <button class="button blue-button">
                                                <div class="icon">
                                                    <img src="{{ asset('images/trashcan.svg') }}" alt="">
                                                </div>
                                                <span>Edit</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-12">
                                            <button class="button">
                                                <div class="icon">
                                                    <img src="{{ asset('images/editlogo.svg') }}" alt="">
                                                </div>
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td data-sticky="left">2.</td>
                                <td data-sticky="left"><img
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Escudo_del_Club_Atl%C3%A9tico_Independiente.svg/1945px-Escudo_del_Club_Atl%C3%A9tico_Independiente.svg.png"
                                        alt="Logo"></td>
                                <td>Siomay</td>
                                <td>Rp. 18.000,-</td>
                                <td>
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="select">
                                                <select name="slct" id="slct">
                                                    <option>Status</option>
                                                    <option value="1">In Stock</option>
                                                    <option value="2">Low Stock</option>
                                                    <option value="3">Out of Stock</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>Side Dish</td>
                                <td>Snack</td>
                                <td data-sticky="right">
                                    <div class="row pb-1">
                                        <div class="col-12">
                                            <button class="button blue-button">
                                                <div class="icon">
                                                    <img src="{{ asset('images/trashcan.svg') }}" alt="">
                                                </div>
                                                <span>Edit</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-12">
                                            <button class="button">
                                                <div class="icon">
                                                    <img src="{{ asset('images/editlogo.svg') }}" alt="">
                                                </div>
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td data-sticky="left">3.</td>
                                <td data-sticky="left"><img
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Escudo_del_Club_Atl%C3%A9tico_Independiente.svg/1945px-Escudo_del_Club_Atl%C3%A9tico_Independiente.svg.png"
                                        alt="Logo"></td>
                                <td>Siomay</td>
                                <td>Rp. 18.000,-</td>
                                <td>
                                    <div class="row justify-content-center">
                                        <div class="col-8">
                                            <div class="select">
                                                <select name="slct" id="slct">
                                                    <option>Status</option>
                                                    <option value="1">In Stock</option>
                                                    <option value="2">Low Stock</option>
                                                    <option value="3">Out of Stock</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>Side Dish</td>
                                <td>Snack</td>
                                <td data-sticky="right">
                                    <div class="row pb-1">
                                        <div class="col-12">
                                            <button class="button blue-button">
                                                <div class="icon">
                                                    <img src="{{ asset('images/trashcan.svg') }}" alt="">
                                                </div>
                                                <span>Edit</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-12">
                                            <button class="button">
                                                <div class="icon">
                                                    <img src="{{ asset('images/editlogo.svg') }}" alt="">
                                                </div>
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <hr>
    </div>

    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/adminmenu.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
