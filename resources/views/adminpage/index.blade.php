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
          <h4>Main Components</h4>
          <div class="row">
            <div class="card col-6 col-sm-6 col-md-3">
              <div class="row">
                <div class="card col-6 col-sm-6 col-md-6">
                  <img class="card-img-left" src="{{ asset('images/fork.png')}}" alt="Card image cap" /> 
                </div>
                <div class="card col-6 col-sm-6 col-md-6">
                    <div class="card-body">
                      <h3 class="card-title">Total Menu</h3>
                      <h1 class="card-text">69</h1>
                    </div>                
                </div>
              </div>
            </div>

            <div class="card col-6 col-sm-6 col-md-3">
              <div class="row">
                <div class="card col-6 col-sm-6 col-md-6">
                  <img class="card-img-left" src="{{ asset('images/fork.png')}}" alt="Card image cap" /> 
                </div>
                <div class="card col-6 col-sm-6 col-md-6">
                    <div class="card-body">
                      <h3 class="card-title">Total Category</h3>
                      <h1 class="card-text">120</h1>
                    </div>                
                </div>
              </div>
            </div>
            
            <div class="card col-6 col-sm-6 col-md-3">
              <div class="row">
                <div class="card col-6 col-sm-6 col-md-6">
                  <img class="card-img-left" src="{{ asset('images/fork.png')}}" alt="Card image cap" /> 
                </div>
                <div class="card col-6 col-sm-6 col-md-6">
                    <div class="card-body">
                      <h3 class="card-title">Total Review</h3>
                      <h1 class="card-text">69</h1>
                    </div>                
                </div>
              </div>
            </div>
            
            <div class="card col-6 col-sm-6 col-md-3">
              <div class="row">
                <div class="card col-6 col-sm-6 col-md-6">
                  <img class="card-img-left" src="{{ asset('images/fork.png')}}" alt="Card image cap" /> 
                </div>
                <div class="card col-6 col-sm-6 col-md-6">
                    <div class="card-body">
                      <h3 class="card-title">Event</h3>
                      <h1 class="card-text">10</h1>
                    </div>                
                </div>
              </div>
            </div>
            
            
            

          </div>

          <div class="row">
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
