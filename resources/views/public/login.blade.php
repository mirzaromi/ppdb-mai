<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/public/assets/css/plugins.css" />
    <link rel="stylesheet" href="/assets/public/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/public/assets/css/colors/green.css" />
    <link rel="stylesheet" href="/assets/public/assets/css/login.css" />
    <title>Post Register</title>
</head>

<body>
    <div class="register bg-soft-primary">
        <header class="wrapper bg-gray">
            <nav class="navbar navbar-expand-lg center-logo transparent navbar-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="/assets/public/index.html">
                            <img src="/assets/public/assets/img/Logo MAI Lengkap Berwarna.png"
                                srcset="/assets/public/assets/img/Logo MAI Lengkap Berwarna.png" alt="" width="150px" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas-nav">
                        <div class="offcanvas-header d-lg-none d-xl-none">
                            <a href="/assets/public/index.html"><img src="/assets/public/assets/img/logo-light.png"
                                    srcset="/assets/public/assets/img/logo-light@2x.png 2x" alt="" /></a>
                            <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                                aria-label="Close"></button>
                        </div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#contact" style="color: #fff">Kontak Kami</a>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                            <li class="nav-item d-block">
                                <a href="/" class="btn btn-sm btn-primary rounded-pill">Home</a>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
        <div class="regis-panel">
            <div class="regis-image">
                <img class="image-register" src="/assets/public/assets/img/AU.jpg"
                    alt="amanatul ummah register image" />
                <!-- <img class="image-register" src="" alt="amanatul ummah register image" /> -->
            </div>
            <div class="regis-form bg-pale-primary">
                @if (session()->has('gagal'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('gagal') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
                <h1 class="regis-message">Selamat Datang di PPDB MAI Amanatul Ummah</h1>
                <h4>Silahkan masukkan nomor peserta dan password untuk login</h4>
                <p>Nomor Peserta</p>
                <form action="/user_login" method="post">
                    @csrf
                    <div class="form-floating mb-4">
                        <input id="textInputExample" type="text" class="form-control" placeholder="Text Input"
                            name="username">
                        <label for="textInputExample">Nomor Peserta</label>
                    </div>
                    <p>Password</p>
                    <div class="form-floating mb-4">
                        <input id="textInputExample" type="text" class="form-control" placeholder="Text Input"
                            name="password">
                        <label for="textInputExample">Password</label>
                    </div>
                    <div class="form-action">
                        <p>Belum punya akun? silahkan <a href="/register">daftar</a></p>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-login" type="submit">Go to Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
