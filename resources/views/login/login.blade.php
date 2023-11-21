<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Admin Login</title>
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: white;">
                <div class="featured-image mb-3">
                    <img src="images/logo.png" class="img-fluid"
                        style="width: 250px; bottom: -165px; position: relative;">
                </div>
                <small class="text-black text-wrap text-center"
                    style="width: 17rem;font-family: 'Courier New', Courier, monospace; bottom: -165px; position: relative;">Ngopi
                    Makan Nyanyi 👉 repeat</small>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <center>
                            <h2 class="bold-text">ADMIN</h2>
                            <h2 class="bold-text">LOGIN</h2>
                        </center>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Password">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-center">
                        <div class="contact">
                            <small><a href="#">Contact Developer</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3 d-flex justify-content-center">
                        <div class="text-center">
                            <button class="btn btn-lg btn-primary w-10 fs-6" style="background-color: red;"> <a
                                    href="/admin" style="text-decoration: none; color: inherit; ">Login</a></button>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
    </div>

</body>

</html>
