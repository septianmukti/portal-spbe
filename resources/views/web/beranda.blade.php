<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Portal Sistem Pemerintahan Berbasis Elektronik (SPBE) Pemerintah Kabupaten Madiun</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!--====== flaticon css ======-->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    
    <!--====== odometer css ======-->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    
    <!--====== animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.8/datatables.min.css" rel="stylesheet">

  <style>
    .footer-new {
        padding-top: 100px;
        padding-bottom: 30px;
    }
    body::-webkit-scrollbar {
        display: none;
    }
  </style>
  
</head>

<body>

    <!-- PRELOADER -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- END PRELOADER -->
   
    <!--====== side menu PART START ======-->

    <div class="side-menu__block">
        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <div class="side-menu__top justify-content-end">

                <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="assets/images/close.png" alt=""></a>
            </div><!-- /.side-menu__top -->


            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
            <div class="side-menu__content">
                <p><b>Hubungi kami :</b></p>
                <p><a href="mailto:diskominfo@madiunkab.go.id">diskominfo@madiunkab.go.id</a> <br> <a href="tel:0351-462927">0351-462927</a></p>
                <div class="side-menu__social">
                    <a href="https://www.facebook.com/pemkab.madiun/"><i class="fa fa-facebook" style="color:#4267B2"></i></a>
                    <a href="https://twitter.com/pemkab_madiun"><i class="fa fa-twitter" style="color:#1DA1F2"></i></a>
                    <a href="https://www.instagram.com/pemkabmadiun/"><i class="fa fa-instagram" style="color:#E4405F"></i></a>
                    <a href="https://www.youtube.com/channel/UCv2HWvm0mF1gHJ327SMhn1Q"><i class="fa fa-youtube" style="color:#FF0000"></i></a>
                    
                </div>
            </div><!-- /.side-menu__content -->
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

    <!--====== side menu PART ends ======-->

    <!--====== HEADER PART START ======-->
    
    <header id="home" class="header-area header-v1-area">
        <div class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-light ">
                                <a class="navbar-brand" href="{{route('index')}}"><img src="assets/images/logo.png" alt="" width="90" height="90"></a> <!-- logo -->
                                <a class="navbar-brand-2" href="{{route('index')}}"><img src="assets/images/kampung-pesilat.png" alt="" width="90" height="90"></a> <!-- logo -->
                                <span class="side-menu__toggler"><i class="fa fa-bars"></i></span><!-- /.side-menu__toggler -->
                                                                  
                                <div class="collapse navbar-collapse sub-menu-bar main-nav__main-navigation" id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto main-nav__navigation-box">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{route('index')}}">Beranda</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Tentang SPBE</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Regulasi</a></li>
                                                <li><a href="#">SOP</a></li>
                                                <li><a href="#">Agenda</a></li>
                                                <li><a href="#">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Domain SPBE</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Kebijakan SPBE</a></li>
                                                <li><a href="#">Tata Kelola SPBE</a></li>
                                                <li><a href="#">Manajemen SPBE</a></li>
                                                <li><a href="#">Layanan SPBE</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('news-layout')}}">Berita</a>
                                        </li>
                                    </ul>
                                </div> <!-- navbar collapse -->
                                <div class="navbar-btn d-none d-sm-flex">
                                    <a class="main-btn" href="#">Apa itu SPBE ?</a>
                                </div>
                            </nav>
                        </div> <!-- navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!--====== HEADER PART ENDS ======-->
                                                                  
    <!--====== BANNER PART START ======-->
    
    <section class="banner-area">
        <div class="container">
            <div class="banner-items">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="banner-content">
                            <h1 class="title">Portal SPBE Kabupaten Madiun</h1>
                            <p>Berisi semua informasi tentang Sistem Pemerintahan Berbasis Elektronik (SPBE) di Kabupaten Madiun.</p>
                            <a class="main-btn page-scroll" href="#features">Jelajahi</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="banner-thumb text-right wow fadeInUp" data-wow-duration="1500ms">
                            <img src="assets/images/head-image.svg" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-circle-1"></div>
        <div class="banner-circle-2"></div>
        <div class="banner-circle-3"></div>
        <div class="banner-circle-4"></div>
    </section>
    
    <!--====== BANNER PART ENDS ======-->

    <!--====== FEATURES PART START ======-->
    
    <section id="features" class="features-area pt-35">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title text-center">
                        <span>Portal Layanan</span>
                        <h3 class="title">PEMERINTAH KABUPATEN MADIUN</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="features-btn">
                        <ul class="nav nav-pills d-flex justify-content-between" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html" >
                                    <i class="flaticon-responsive"><img src="assets/images/features-shape.png" alt="shape"></i>
                                    <span>Administrasi</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"href="#pills-2">
                                    <i class="flaticon-computer-graphic"><img src="assets/images/features-shape.png" alt="shape"></i>
                                    <span>Layanan Publik</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">
                                    <i class="flaticon-seo-and-web"><img src="assets/images/features-shape.png" alt="shape"></i>
                                    <span>Pengaduan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">
                                    <i class="flaticon-development"><img src="assets/images/features-shape.png" alt="shape"></i>
                                    <span>Statistik</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-5-tab" data-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false">
                                    <i class="flaticon-app-development"><img src="assets/images/features-shape.png" alt="shape"></i>
                                    <span>Perizinan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== FEATURES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->
    
    <section class="about-area pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumb wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="assets/images/bupati.jpeg" alt="" style="width: 75%; height: auto;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span>SPBE</span>
                            <h3 class="title">Sistem Pemerintahan Berbasis Elektronik</h3>
                        </div>
                        <p>Sistem Pemerintahan Berbasis Elektronik (SPBE) atau yang biasa disebut dengan e-Government adalah penyelenggaraan pemerintahan yang memanfaatkan teknologi informasi dan komunikasi untuk memberikan layanan kepada pengguna SPBE.</p>
                        <a class="main-btn" href="#">Lanjutkan Baca</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape-1"></div>
        <div class="about-shape-3"></div>
        <div class="about-shape-2">
            <img src="assets/images/about-shape.png" alt="shape">
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->

    <!--====== BUSINESS PART START ======-->
    
    <section class="business-area pt-110 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="business-content">
                        <div class="section-title">
                            <span>SPBE</span>
                            <h3 class="title">Domain SPBE</h3>
                        </div>
                        <div class="row mr-110">
                            <div class="col-sm-3">
                                <div class="business-item">
                                    <i class="flaticon-business"></i><br>
                                    <span>Kebijakan <br> SPBE</span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="business-item item-2">
                                    <i class="flaticon-people"></i><br>
                                    <span>Tata Kelola <br> SPBE</span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="business-item item-3">
                                    <i class="flaticon-human-resources"></i><br>
                                    <span>Manajemen <br> SPBE</span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="business-item item-4">
                                    <i class="flaticon-computer-graphic"></i><br>
                                    <span>Layanan <br> SPBE</span>
                                </div>
                            </div>
                        </div>
                        <p>Dasar penyusunan SPBE dengan memperhatikan komparasi peraturan PermenPanRB Nomor 5 Tahun 2018 dengan PermenPanRB Nomor 59 Tahun 2020</p>
                        <a class="main-btn" href="#">Lanjutkan Baca</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="business-thumb text-right">
            <img src="assets/images/domain-image.svg" alt="">
        </div>
        <div class="business-shape"></div>
    </section>
    
    <!--====== BUSINESS PART ENDS ======-->

    <!--====== CUSTOMERS PART START ======-->
    
    <section class="customers-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="section-title">
                        <span>Dokumen Terkait SPBE</span>
                        <h3 class="title">Kabupaten Madiun</h3>
                    </div>
                    <div class="customers-content">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                </tr>
                                <tr>
                                    <td>Shad Decker</td>
                                    <td>Regional Director</td>
                                    <td>Edinburgh</td>
                                    <td>51</td>
                                </tr>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="customers-shape text-right">
            <img src="assets/images/customers-shape.png" alt="shape">
        </div>
        <div class="customers-shape-1"></div>
    </section>
    
    <!--====== CUSTOMERS PART ENDS ======-->

    <!--====== BLOG PART START ======-->
    
    <section id="news" class="blog-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span>Berita</span>
                        <h3 class="title">Informasi Terbaru</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="blog-item mt-30">
                        <div class="blog-thumb">
                            <img src="assets/images/blog-1.jpg" alt="blog">
                        </div>
                        <div class="blog-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-clock-o"></i> 20 Feb</a></li>
                                <li><a href="#"><i class="fa fa-comments-o"></i> 2 Comments</a></li>
                            </ul>
                            <h4 class="title"><a href="blog-details.html">Launch New Mobile App Marketing Pitfalls To Avoid</a></h4>
                            <a href="blog-details.html"><i class="flaticon-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="blog-item mt-30">
                        <div class="blog-thumb">
                            <img src="assets/images/blog-2.jpg" alt="blog">
                        </div>
                        <div class="blog-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-clock-o"></i> 20 Feb</a></li>
                                <li><a href="#"><i class="fa fa-comments-o"></i> 2 Comments</a></li>
                            </ul>
                            <h4 class="title"><a href="blog-details.html">Launch New Mobile App Marketing Pitfalls To Avoid</a></h4>
                            <a href="blog-details.html"><i class="flaticon-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="blog-item mt-30">
                        <div class="blog-thumb">
                            <img src="assets/images/blog-3.jpg" alt="blog">
                        </div>
                        <div class="blog-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-clock-o"></i> 20 Feb</a></li>
                                <li><a href="#"><i class="fa fa-comments-o"></i> 2 Comments</a></li>
                            </ul>
                            <h4 class="title"><a href="blog-details.html">Launch New Mobile App Marketing Pitfalls To Avoid</a></h4>
                            <a href="blog-details.html"><i class="flaticon-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <a class="main-btn mt-60" href="{{route('news-layout')}}">Lihat Semua Berita</a>
            </div>
        </div>
    </section>
    
    <!--====== BLOG PART ENDS ======-->

    <!--====== BRAND PART START ======-->
    
    <div class="brand-area pt-120 pb-120">
        <div class="container">
            <div class="row brand-active">
                <div class="col-lg-3">
                    <div class="brand-item">
                        <a href="#"><img src="assets/images/kampung-pesilat.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="brand-item">
                        <a href="#"><img src="assets/images/kampung-pesilat.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="brand-item">
                        <a href="#"><img src="assets/images/kampung-pesilat.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="brand-item">
                        <a href="#"><img src="assets/images/kampung-pesilat.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="brand-item">
                        <a href="#"><img src="assets/images/kampung-pesilat.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="brand-item">
                        <a href="#"><img src="assets/images/kampung-pesilat.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== BRAND PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    
    <section class="footer-area">
        <div class="container">
            <div class="row footer-new">
                <div class="col-lg-4 col-md-7 col-sm-9 mt-10">
                    <div class="footer-widget footer-widget-about">
                        <a href="https://diskominfo.madiunkab.go.id/" target="_blank"><img src="assets/images/logo-kominfo.png" alt="logo"></a>
                        <p>Sistem Pemerintahan Berbasis Elektronik (SPBE)</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget footer-widget-list">
                        <div class="list-item d-flex">
                            <div class="item mr-80">
                                <h3 class="title">Domain SPBE</h3>
                                <ul>
                                    <li><a href="#">Kebijakan SPBE</a></li>
                                    <li><a href="#">Tata Kelola SPBE</a></li>
                                    <li><a href="#">Manajemen SPBE</a></li>
                                    <li><a href="#">Layanan SPBE</a></li>
                                </ul>
                            </div>
                            <div class="item mr-100">
                                <h3 class="title">Tautan Terkait</h3>
                                <ul>
                                    <li><a href="#">KemenPANRB</a></li>
                                    <li><a href="#">Kemenkominfo</a></li>
                                    <li><a href="#">Pemkab Madiun</a></li>
                                    <li><a href="#">Diskominfo Madiun</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="footer-widget footer-widget-list">
                        <div class="list-item d-flex">
                            <div class="item mr-10">
                            <h3 class="title">Hubungi kami</h3>
                            <ul>
                                <li><span><i class="fa fa-phone-square"></i> 0351-462927</span></li>
                                <li><span><i class="fa fa-envelope"></i> diskominfo@madiunkab.go.id</span></li>
                                <li><span><i class="fa fa-map-marker"></i> Jl. Mastrip No. 23 Madiun</span></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copyright text-center">
                        <p>Copyright © 2023 Dinas Komunikasi dan Informatika Kabupaten Madiun</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== GO TO TOP PART START ======-->
    
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="fa fa-angle-double-up"></i>
                    <i class="fa fa-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== GO TO TOP PART ENDS ======-->
    





    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    
    <!--====== wow js ======-->
    <script src="assets/js/wow.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    
    <!--====== odometer js ======-->
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <script src="https://cdn.datatables.net/v/bs4/dt-1.13.8/datatables.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>
