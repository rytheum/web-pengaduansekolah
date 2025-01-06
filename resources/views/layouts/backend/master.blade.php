<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Pengaduan</title>
    <link rel="shortcut icon" type="image/png" href="/template/src/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="/template/src/assets/css/styles.min.css" />
  
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="/template/src/assets/images/logos/icon1.png" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{url('home')}}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">UI COMPONENTS</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('siswa.index') }}" aria-expanded="false">
                                <span>
                                    <i class="fas fa-edit"></i>
                                </span>
                                <span class="hide-menu">CRUD SISWA</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('/kategori') }}" aria-expanded="false">
                                <span>
                                    <i class="fas fa-smile"></i>
                                </span>
                                <span class="hide-menu">CRUD KATEGORI</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('inputaspirasi.index')}}" aria-expanded="false">
                                <span>
                                    <i class="fas fa-list"></i>
                                </span>
                                <span class="hide-menu">Input Aspirasi/Pengaduan</span>
                            </a>
                        </li>

                                                <li class="sidebar-item">
                                                    <a class="sidebar-link" href="{{url('/laporan')}}" aria-expanded="false">
                                                        <span>
                                                            <i class="fas fa-print"></i>
                                                        </span>
                                                        <span class="hide-menu">Laporan</span>
                                                    </a>
                                                </li>
                        
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        @include('layouts.backend.navbar')
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                
                @yield('content')
                <script src="https://kit.fontawesome.com/189d0ccee0.js" crossorigin="anonymous"></script>
            </div>
        </div>
    </div>
    <script src="/template/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/template/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/template/src/assets/js/sidebarmenu.js"></script>
    <script src="/template/src/assets/js/app.min.js"></script>
    <script src="/template/src/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/template/src/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="/template/src/assets/js/dashboard.js"></script>
</body>

</html>