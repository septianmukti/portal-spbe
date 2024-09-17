@extends('../layout/web/main')

@section('title')
    <title>Portal Sistem Pemerintahan Berbasis Elektronik (SPBE) Pemerintah Kabupaten Madiun</title>
@endsection

@section('css')
    <link href="https://cdn.datatables.net/2.1.6/css/dataTables.dataTables.css" rel="stylesheet">

    <style>
        .clearfix:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }
        
        .categories-list {
            display: flex;
            flex-wrap: wrap;
            max-height: 400px;
            overflow-y: auto;
            justify-content: space-between;
        }

        .categories-list li {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 1rem;
            border: 2px solid gray;
            margin-right: 1rem;
            border-radius: 5px;
            min-width: 150px;
            min-height: 100px;
            margin: 10px;
        }

        .categories-list li:hover {
            background-color: blue;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .categories-list li img {
            width: 30px;
            height: 30px;
        }
        .grow img{
            transition: 1s ease;
        }

        .grow img:hover{
            -webkit-transform: scale(1.2);
            -ms-transform: scale(1.2);
            transform: scale(1.2);
            transition: 1s ease;
        }

        table {
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #fff;
        }

        div.dataTables_info {
            color: white !important;
            background-color: black;
        }
    </style>
@endsection

@section('content')
    @include('../layout/web/components/side-menu')

    @include('../layout/web/components/header')

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
                            <li class="nav-item grow">
                                <a class="nav-link" data-target=".modal-administrasi" data-toggle="modal" href="">
                                    <img src="assets/images/administrasi.svg" alt="shape"></i>
                                    <span>Administrasi</span>
                                </a>
                            </li>
                            <li class="nav-item grow">
                                <a class="nav-link" data-target=".modal-layanan-publik" data-toggle="modal" href="">
                                    <img src="assets/images/layanan-publik.svg" alt="shape"></i>
                                    <span>Layanan Publik</span>
                                </a>
                            </li>
                            <li class="nav-item grow">
                                <a class="nav-link" data-target=".modal-pengaduan" data-toggle="modal" href="">
                                    <img src="assets/images/pengaduan.svg" alt="shape"></i>
                                    <span>Pengaduan</span>
                                </a>
                            </li>
                            <li class="nav-item grow">
                                <a class="nav-link" data-target=".modal-statistik" data-toggle="modal" href="">
                                    <img src="assets/images/statistik.svg" alt="shape"></i>
                                    <span>Statistik</span>
                                </a>
                            </li>
                            <li class="nav-item grow">
                                <a class="nav-link" data-target=".modal-perizinan" data-toggle="modal" href="">
                                    <img src="assets/images/perizinan.svg" alt="shape"></i>
                                    <span>Perizinan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MODAL ADMINISTRASI -->
    <div class="modal fade modal-administrasi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar Aplikasi Administrasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <table id="administrasi" class="display compact" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="30%" class="text-center">Nama Aplikasi</th>
                                    <th>Deskripsi</th>
                                    <th width="15%" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><b>TAUVAL SPBE</b></td>
                                    <td>Aplikasi penilaiaan internal SPBE</td>
                                    <td>
                                        <a class="btn btn-outline-info btn-sm" href="https://dinaskom.info/tauval" type="button" target="_blank">Buka Link</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><b>SRIKANDI</b></td>
                                    <td>Aplikasi persuratan</td>
                                    <td>
                                        <a class="btn btn-outline-info btn-sm" href="https://srikandi.arsip.go.id/" type="button" target="_blank">Buka Link</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL LAYANAN PUBLIK -->
    <div class="modal fade modal-layanan-publik" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar Aplikasi Layanan Publik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <table id="layanan-publik" class="display compact" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="30%" class="text-center">Nama Aplikasi</th>
                                    <th>Deskripsi</th>
                                    <th width="15%" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><b>SENOPATI</b></td>
                                    <td>Aplikasi Sistem Online Pelayanan Kependudukan Terintegrasi.</td>
                                    <td>
                                        <a class="btn btn-outline-info btn-sm" href="https://senopati.dukcapil.madiunkab.go.id/" type="button" target="_blank">Buka Link</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL PENGADUAN -->
    <div class="modal fade modal-pengaduan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar Aplikasi Pengaduan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <table id="pengaduan" class="display compact" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="30%" class="text-center">Nama Aplikasi</th>
                                    <th>Deskripsi</th>
                                    <th width="15%" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><b>LAPOR!</b></td>
                                    <td>Layanan Aspirasi dan Pengaduan Online Rakyat</td>
                                    <td>
                                        <a class="btn btn-outline-info btn-sm" href="https://www.lapor.go.id/" type="button" target="_blank">Buka Link</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL STATISTIK -->
    <div class="modal fade modal-statistik" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar Aplikasi Statistik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <table id="statistik" class="display compact" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="30%" class="text-center">Nama Aplikasi</th>
                                    <th>Deskripsi</th>
                                    <th width="15%" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><b>SATU DATA</b></td>
                                    <td>Portal Satu Data Kabupaten Madiun</td>
                                    <td>
                                        <a class="btn btn-outline-info btn-sm" href="https://data.madiunkab.go.id/" type="button" target="_blank">Buka Link</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><b>AKSATA</b></td>
                                    <td>Layanan untuk mengetahui harga pasar terupdate</td>
                                    <td>
                                        <a class="btn btn-outline-info btn-sm" href="https://aksata.madiunkab.go.id/" type="button" target="_blank">Buka Link</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL PERIZINAN -->
    <div class="modal fade modal-perizinan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar Aplikasi Perizinan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <table id="perizinan" class="display compact" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="30%" class="text-center">Nama Aplikasi</th>
                                    <th>Deskripsi</th>
                                    <th width="15%" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><b>Si-Pedalrum</b></td>
                                    <td>Sistem Informasi Pengendalian Pembangunan Perumahan</td>
                                    <td>
                                        <a class="btn btn-outline-info btn-sm" href="https://sipedalrum.madiunkab.go.id/" type="button" target="_blank">Buka Link</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== FEATURES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->
    <section class="about-area pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumb wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="assets/images/pj-bupati.png" alt="" style="width: 75%; height: auto;">
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

    @include('../layout/web/components/footer')

@endsection

@section('script')
    <script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#administrasi, #layanan-publik, #pengaduan, #statistik, #perizinan').DataTable({
                "language": {
                    emptyTable: "Tidak ada data",
                    "sSearch": "Pencarian"
                }
            })
        });
    </script>
@endsection
