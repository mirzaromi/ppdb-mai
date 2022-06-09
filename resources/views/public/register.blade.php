<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/public/assets/css/plugins.css" />
    <link rel="stylesheet" href="/assets/public/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/public/assets/css/colors/green.css" />
    <link rel="stylesheet" href="/assets/public/assets/css/register.css" />
    <title>Register</title>
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
        <div class="regis-title">
            <h1>Registration</h1>
        </div>
        <div class="regis-panel">

            <div class="regis-image">
                <img class="image-register" src="/assets/public/assets/img/AU.jpg"
                    alt="amanatul ummah register image" />
                <!-- <img class="image-register" src="" alt="amanatul ummah register image" /> -->
            </div>

            <div class="regis-form bg-pale-primary">
                <form action="/register" method="post">
                    @csrf
                    
                    <div class="form-floating mb-4">
                        <input id="textInputExample" type="text" class="form-control" placeholder="Text Input"
                            name="nama" value="{{ old('nama') }}" required>
                        <label for="textInputExample">Nama</label>
                        @error('nama')
                            <div class="invalid-form">
                                {{ $message }}
                            </div> 
                        @enderror
                    </div>
                    
                    <div class="form-floating mb-4 w-md-21 form-input">
                        <input id="textInputExample" type="text" class="form-control" placeholder="Text Input" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
                        <label for="textInputExample">Tempat Lahir</label>
                        @error('tempat_lahir')
                            <div class="invalid-form">
                                {{ $message }}
                            </div>
                        @enderror
                        
                    </div>
                    <div class="form-floating mb-4 w-md-22 form-input">
                        <input id="textInputExample" type="date" class="form-control" placeholder="Text Input" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                        <label for="textInputExample">Tanggal Lahir</label>
                        @error('tanggal_lahir')
                            <div class="invalid-form">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4 w-md-21 form-input ">
                        <input id="textInputExample" type="text" class="form-control" placeholder="Text Input" name="nisn" value="{{ old('nisn') }}" required>
                        <label for="textInputExample">NISN</label>
                        @error('nisn')
                            <div class="invalid-form">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <p>Jenis Kelamin</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="l" name="jenis_kelamin" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1"> Laki-laki </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" value="p" name="jenis_kelamin" id="flexRadioDefault2"
                            >
                        <label class="form-check-label" for="flexRadioDefault2"> Perempuan </label>
                    </div>
                    <div class="form-floating mb-4 form-input">
                        <input id="textInputExample" type="text" class="form-control" placeholder="Text Input" name="alamat" value="{{ old('alamat') }}">
                        <label for="textInputExample">Alamat</label>
                        @error('alamat')
                            <div class="invalid-form">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4 w-md-24 form-input">
                        <input id="textInputExample" type="text" class="form-control" placeholder="Text Input" name="sekolah_asal" value="{{ old('sekolah_asal') }}" required>
                        <label for="textInputExample">Sekolah Asal</label>
                        @error('sekolah_asal')
                            <div class="invalid-form">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4 w-md-24 form-input">
                        <input id="textInputExample" type="text" class="form-control" placeholder="Text Input" name="no_hp" value="{{ old('no_hp') }}" required>
                        <label for="textInputExample">No Hp</label>
                        @error('no_hp')
                            <div class="invalid-form">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4 w-md-21 form-input">
                        <input id="textInputExample" type="text" class="form-control" placeholder="Text Input" name="nama_ayah" value="{{ old('nama_ayah') }}" required>
                        <label for="textInputExample">Nama Ayah</label>
                        @error('nama_ayah')
                            <div class="invalid-form">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4 w-md-21 form-input">
                        <input id="textInputExample" type="text" class="form-control" placeholder="Text Input" name="nama_ibu" value="{{ old('nama_ibu') }}" required>
                        <label for="textInputExample">Nama Ibu</label>
                        @error('nama_ibu')
                            <div class="invalid-form">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-4 w-md-25 form-input">
                        <input id="textInputExample" type="text" class="form-control" placeholder="Text Input" name="email" value="{{ old('email') }}" required>
                        <label for="textInputExample">Email</label>
                        @error('email')
                            <div class="invalid-form">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-select-wrapper mb-4">
                        <select class="form-select" aria-label="Default select example" name="jalur_sks">
                            <option value="1">SKS 2 Tahun Jalur Akademik</option>
                            <option value="2">SKS 2 Tahun Jalur Prestasi</option>
                            <option value="3">SKS 3 Tahun Jalur Akademik</option>
                            <option value="4">SKS 3 Tahun Jalur Prestasi</option>

                        </select>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
