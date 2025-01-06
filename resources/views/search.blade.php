<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pengaduan Sekolah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="front/assets/img/favicon.png" rel="icon">
    <link href="front/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
            <h1><a href="index.html">Pengaduan Sekolah</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="/search">Search</a></li>
                <li><a class="nav-link scrollto" href="/profil">Profil</a></li>
                <li><a class="getstarted scrollto" href="/login">Login</a></li>
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
                    <h1 data-aos="fade-up">Search</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400"></h2>
                   
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="front/assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    <!-- ======= Search Section ======= -->
    <section id="search" class="search">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>SEARCH</h2>
                <div class="form-group text-center">

                    <form action="{{ route('search.index') }}" method="GET">
                        <input type="text" name="keyword" class="text-center" placeholder="Cari Laporan...">
                        {{-- <button type="submit">Cari</button> --}}
                    </form>

                </div>
                <div class="col-md-12">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <table class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Kategori_id</th>
                                        <th>Lokasi</th>
                                        <th>Keterangan/Nama Kategori</th>
                                        <th>Foto</th>
                                        <th>Proses</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @if (count($inputaspirasis) > 0)
                                                                    @foreach ($inputaspirasis as $key => $inputaspirasi)
                                                                                                    <tr align:'center'>

                                                                                                        <th scope="row">{{ $key + 1 }}</th>

                                                                                                        <td>{{ $inputaspirasi->nis }}</td>
                                                                                                        <td>{{ $inputaspirasi->kategori_id }}</td>
                                                                                                        <td>{{ $inputaspirasi->lokasi }}</td>
                                                                                                        <td>{{ $inputaspirasi->keterangan }}</td>
                                                                                                        <td><img src="{{ asset('foto') }}/{{ $inputaspirasi->foto }}" width="40%">
                                                                                                        </td>

                                                                                                        <td>
                                                                                                            @if(
            empty(
            App\Models\Aspirasi::where('kategori_id', $inputaspirasi->id)
                ->latest()->first()->status
        )
        )
                                                                                                                                                    <b>Menunggu</b>
                                                                                                            @else
                                                                                                                                            <b>{{App\Models\Aspirasi::where('kategori_id', $inputaspirasi->id)
                ->latest()->first()->status}}</b>
                                                                                                            @endif
                                                                                                        </td>

                                                                                                        </td>


                                                                                                        @csrf
                                                                                                        </form>
                                                                                    </div>
                                                                                </div>

                                                                                </button></a>

                                                                                </td>
                                                                                </tr>
                                                                    @endforeach
                                    @else
                                        <td>Tidak ada Data yang dapat ditampilkan.</td>
                                    @endif
                </tbody>
                </table>
            </div>
        </div>
        </div>
        </div>
        </div>

    </section><!-- End  Section -->

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
                        Designed by <a>Josevan</a>
                    </div>
                </div>

            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Tambahkan link Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>


        </div>

        <!-- Tambahkan script Bootstrap dan jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>

</html>

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