<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <!-- bootstrap 5 css -->
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
    crossorigin="anonymous"
  />
  <!-- custom css -->
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
  />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-WzN9qVZfSI/5MwFGb/7Kl6bQy7ZFLXn7vwZxDMEQx7p6jPvc1oRegQh8SSt5iKFZ5dFucxFr4G5ubRnXtfrNsQ==" crossorigin="anonymous" />

</head>

<body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>             
            <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt="profile"> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i><img src="{{ asset('images/logo.png')}}" class="img-fluid logo" /></a>
                    <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a> <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> </div>
                </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </nav>
        </div>
      <!--Container Main start-->
      <div class="height-100 bg-light content">
          <div class="row mb-3">
            <div class="col-6 col-md-6 col-lg-3 p-4">
              <div class="row totalmenu">
                <div class="col-6 col-sm-6 col-md-6 b-0">
                  <img class="img-fluid" src="{{ asset('images/fork.png')}}" alt="Card image cap" /> 
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
                  <img class="img-fluid" src="{{ asset('images/fork.png')}}" alt="Card image cap" /> 
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
                  <img class="img-fluid" src="{{ asset('images/fork.png')}}" alt="Card image cap" /> 
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
                  <img class="img-fluid" src="{{ asset('images/fork.png')}}" alt="Card image cap" /> 
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

          <div class="row pr-1">
            <div class=" col-12 col-sm-12 col-md-6">
              <div class="row">
                <div class=" col-9 col-sm-9 col-md-9 mx-0 pr-0">
                  <div class="card text-dark">
                    <div class="card-body">
                      <h4 class="mb-0">Recent comments</h4>
                      <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>

                      <div class="d-flex flex-start">
                        <img class="rounded-circle shadow-1-strong me-3"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"
                          height="60" />
                        <div>
                          <h6 class="fw-bold mb-1">Maggie Marsh</h6>
                          <div class="d-flex align-items-center mb-3">
                            <p class="mb-0">
                              March 07, 2021
                              <span class="badge bg-primary">Pending</span>
                            </p>
                            <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                            <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                            <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                          </div>
                          <p class="mb-0">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s, when an unknown printer took a galley of type and
                            scrambled it.
                          </p>
                        </div>
                      </div>
                    </div>

                    <hr class="my-0" />

                    <div class="card-body p-4">
                      <div class="d-flex flex-start">
                        <img class="rounded-circle shadow-1-strong me-3"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(26).webp" alt="avatar" width="60"
                          height="60" />
                        <div>
                          <h6 class="fw-bold mb-1">Lara Stewart</h6>
                          <div class="d-flex align-items-center mb-3">
                            <p class="mb-0">
                              March 15, 2021
                              <span class="badge bg-success">Approved</span>
                            </p>
                            <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                            <a href="#!" class="text-success"><i class="fas fa-redo-alt ms-2"></i></a>
                            <a href="#!" class="link-danger"><i class="fas fa-heart ms-2"></i></a>
                          </div>
                          <p class="mb-0">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It
                            has roots in a piece of classical Latin literature from 45 BC, making it
                            over 2000 years old. Richard McClintock, a Latin professor at
                            Hampden-Sydney College in Virginia, looked up one of the more obscure
                            Latin words, consectetur, from a Lorem Ipsum passage, and going through
                            the cites.
                          </p>
                        </div>
                      </div>
                    </div>

                    <hr class="my-0" style="height: 1px;" />

                    <div class="card-body p-4">
                      <div class="d-flex flex-start">
                        <img class="rounded-circle shadow-1-strong me-3"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(33).webp" alt="avatar" width="60"
                          height="60" />
                        <div>
                          <h6 class="fw-bold mb-1">Alexa Bennett</h6>
                          <div class="d-flex align-items-center mb-3">
                            <p class="mb-0">
                              March 24, 2021
                              <span class="badge bg-danger">Rejected</span>
                            </p>
                            <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                            <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                            <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                          </div>
                          <p class="mb-0">
                            There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form, by injected humour, or
                            randomised words which don't look even slightly believable. If you are
                            going to use a passage of Lorem Ipsum, you need to be sure.
                          </p>
                        </div>
                      </div>
                    </div>

                    <hr class="my-0" />

                    <div class="card-body p-4">
                      <div class="d-flex flex-start">
                        <img class="rounded-circle shadow-1-strong me-3"
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(24).webp" alt="avatar" width="60"
                          height="60" />
                        <div>
                          <h6 class="fw-bold mb-1">Betty Walker</h6>
                          <div class="d-flex align-items-center mb-3">
                            <p class="mb-0">
                              March 30, 2021
                              <span class="badge bg-primary">Pending</span>
                            </p>
                            <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                            <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                            <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                          </div>
                          <p class="mb-0">
                            It uses a dictionary of over 200 Latin words, combined with a handful of
                            model sentence structures, to generate Lorem Ipsum which looks
                            reasonable. The generated Lorem Ipsum is therefore always free from
                            repetition, injected humour, or non-characteristic words etc.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card col-3 col-sm-3 col-md-3 pt-3">
                  <div class="row">
                    <i class="bi bi-share-fill">Share</i>
                    <i class="bi bi-reply-fill">Replies</i>
                    <i class="bi bi-download"> Download </i>
                    <i class="bi bi-trash">Delete</i>
                  </div>   
                  <div class="row mt-3">
                    <div class="5">
                      <input type="checkbox" id="rating" name="rating5" value="rating5">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="4">
                      <input type="checkbox" id="rating" name="rating4" value="rating4">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="3">
                      <input type="checkbox" id="rating" name="rating3" value="rating3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="2">
                      <input type="checkbox" id="rating" name="rating2" value="rating2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="1">
                      <input type="checkbox" id="rating" name="rating1" value="rating1">
                        <i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card col-12 col-sm-12 col-md-6">
              <div class="card">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                  and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
              </div>
            </div>
          </div>

        <div class="row">
          <div class="card col-12 col-sm-12 col-md-12">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                  and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
          </div>
        </div>


      </div>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
