<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pengaduan Sekolah</title>

    <link rel="shortcut icon" type="image/png" href="template/src/assets/images/logos/logotc.jpg" />
    <link rel="stylesheet" href="template/src/assets/css/styles.min.css" />
</head>

<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">


<!-- Vendor CSS Files -->

<link href="front/assets/vendor/aos/aos.css" rel="stylesheet">
<link href="front/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="front/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="front/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="front/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="front/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="front/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="front/assets/css/style.css" rel="stylesheet">

<!-- =======================================================
  * Template Name: Vesperr
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">


            <div class="logo">
                <!-- Menambahkan link pada gambar -->
                <h1><a href="/home"><img src="/template/src/assets/images/logos/logotc.jpg" alt=""
                            class="img-fluid">Pengaduan
                        Sekolah</a></h1>
            </div>


            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/home">Home</a></li>
                    <li><a class="nav-link scrollto" href="/search">Search</a></li>
                    <li><a class="nav-link scrollto" href="/profil">Profil</a></li>
                    <li><a class="nav-link scrollto" href="/login">Login</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Pengaduan Sekolah</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Layanan Pengaduan Sekolah Input Aspirasi/Pengaduan Anda
                    </h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="/login" class="btn-get-started scrollto">Login </a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="front/assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->


    </head>

    <body>
        <div class="section-title" data-aos="fade-up">
            <h2>Input Aspirasi</h2>
        </div>

        <div class="container mt-5">


            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif

            <form action="{{ route('inputaspirasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label>NIS</label>
                        <label for="nis" class="form-label text-white"><b>NIS</b></label>
                        <input type="text" class="form-control" name="nis" @error('nis') is-invalid @enderror value="">
                        @error('nis')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label>Kategori</label>
                        <label for="kategori" class="form-label text-white"><b>Kategori</b></label>
                        <select class="form-control" id="kategori_id" name="kategori_id" @error('kategori_id')
                        is-invalid @enderror>
                            <option value="" disabled selected>Pilih</option>
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->keterangan }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <label>Lokasi</label>
                    <label for="lokasi" class="form-label text-white"><b>Lokasi</b></label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" @error('lokasi') is-invalid
                    @enderror>
                    @error('lokasi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Keterangan</label>
                    <label for="keterangan" class="form-label text-white"><b>Keterangan</b></label>
                    <textarea class="form-control" id="keterangan" name="keterangan" @error('keterangan') is-invalid
                    @enderror></textarea>
                    @error('keterangan')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Foto</label>
                    <label for="foto" class="form-label text-white"><b>Foto</b></label>
                    <input type="file" class="form-control" id="foto" name="foto" @error('foto') is-invalid @enderror>
                    @error('foto')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>

            </form>

        </div>

    </body>

</html>
<br>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 text-lg-left text-center">
                <div class="copyright">
                    &copy; Copyright <strong>Vesperr</strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
                    Designed by BootstrapMade
                </div>
            </div>

        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="front/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="front/assets/vendor/aos/aos.js"></script>
<script src="front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="front/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="front/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="front/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="front/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="front/assets/js/main.js"></script>

</body>

</html>