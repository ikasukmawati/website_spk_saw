<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sistem Informasi RT">
    <title>
        Halaman - Login
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="" id="body">
    <div class="container d-flex flex-column justify-content-between vh-100">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="app-brand bg-primary">
                            <a href="/login" class="brand-name">
                                <span>HALAMAN LOGIN</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        @if($errors->any())
                        <div class="alert alert-dismissible fade show alert-danger" role="alert">
                            {{$errors->first()}}
                        </div>
                        @endif
                        <h4 class="text-dark mb-5">Login</h4>
                        <form action="/login" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-row col-md-12 mb-4">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control input-lg" id="email" placeholder="Masukan email" name="email" value="{{ old('email') }}" required autocomplete="username" autofocus>

                                </div>
                                <div class="form-row col-md-12 mb-4">
                                    <label>Password</label>
                                    <input type="password" class="form-control input-lg" id="password" placeholder="Masukan Password" name="password" required autocomplete="current-password">

                                </div>
                                <div class="form-row col-md-12">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Login </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright pl-0">
            <p class="text-center">
                &copy; <span id="copy-year">2023 Copyright </span>
            </p>
        </div>
        <script>
            let d = new Date();
            let year = d.getFullYear();
            document.getElementById("copy-year").innerHTML = year + ' Copyright';
        </script>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>