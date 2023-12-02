<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link rel="stylesheet" href="/css/login.css">
    <title>Login</title>
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div
            class="border rounded-5 p-3 mx-auto my-auto bg-white shadow login-container d-flex flex-md-row flex-column-reverse">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 right-box col-12 p-3 mt-5 mt-md-0">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2 class="bold-text text-center">Login</h2>
                    </div>
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <form method="post" action="/login">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Login</button>
                    </form>
                    <p>Not have account yet?<a href="/register" class="text-decoration-none"> Register</a></p>

                </div>

            </div>

            <!-------------------- ------ Right Box ---------------------------->
            <div class="col-md-6 rounded-4 col-12  align-items-center d-flex flex-column justify-content-center left-box"
                style="background: white;">
                <a href="/"><img src="images/logo.png" class=""
                        style="width: 250px; position: relative;"></a>
                <p class="text-black text-wrap text-center "
                    style="width: 17rem;font-family: 'Courier New', Courier, monospace; position: relative;">Ngopi Makan
                    Nyanyi 👉 repeat</p>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
