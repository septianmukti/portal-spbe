@extends('../layout/web/main')

@section('title')
    <title>Kebijakan SPBE | Portal Sistem Pemerintahan Berbasis Elektronik (SPBE) Pemerintah Kabupaten Madiun</title>
@endsection

@section('css')
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.8/datatables.min.css" rel="stylesheet">
@endsection

@section('content')
    @include('../layout/web/components/side-menu')

    @include('../layout/web/components/header')

    <!--====== PAGE TITLE PART START ======-->
        
    <div class="page-title-area bg_cover" style="background-image: url(assets/images/page-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-item text-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Kebijakan SPBE</li>
                            </ol>
                        </nav>
                        <h3 class="title">Kebijakan Internal SPBE</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== PAGE TITLE PART ENDS ======-->

    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details__main">
                        <div class="blog-details__content">
                            <div class="blog-one__meta">
                                <a href="#"><i class="fa fa-clock-o"></i> 20 Feb 2023</a>
                            </div><!-- /.blog-one__meta -->
                            <h3>Kebijakan Internal SPBE</h3>
                            
                            <table id="kebijakan" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Dokumen</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>PERATURAN PRESIDEN REPUBLIK INDONESIA NOMOR 95 TAHUN 2018 TENTANG SSISTEM PEMERINTAHAN BERBASIS ELEKTRONIK</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/SP3DxXzJnwJXMd5">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>PERMENPAN-RB NOMOR 59 TAHUN 2020 TENTANG PEMANTAUAN DAN EVALUASI SISTEM PEMERINTAHAN BERBASIS ELEKTRONIK</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/Bq2P77cCFsKpDXD">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>PERATURAN BUPATI MADIUN NOMOR 81 TAHUN 2019 TENTANG SISTEM PEMERINTAHAN BERBASIS ELEKTRONIK PEMERINTAHAN DAERAH</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/N7kE76Zr373mYtA">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>PERBUP NOMOR 62 TAHUN 2022 TENTANG PERUBAHAN ATAS PERBUP NOMOR 81 TAHUN 2019 TENTANG SPBE PEMERINTAHAN DAERAH</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/odWzDzR7mFfrSDH">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>PERBUP NO. 46 TAHUN 2020 TENTANG PELAKSANAAN PERASANDIAN UNTUK PENGAMANAN INFORMASI DI PEMERINTAH KABUPATEN MADIUN</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/kNWqwS8FopWxA7M">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>PERBUP NO. NOMOR 24 TAHUN 2020 TENTANG SATU DATA INDONESIA TINGKAT KABUPATEN MADIUN</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/5Cp4TEiE2grJMrk">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>KEPUTUSAN BUPATI MADIUN TENTANG TIM KOORDINASI SPBE 2020</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/pMgj2mbjtnANcwe">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>KEPUTUSAN BUPATI MADIUN TENTANG TIM KOORDINASI SPBE TAHUN 2021</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/ZBD5fbqYJjByikB">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>KEPUTUSAN BUPATI MADIUN TENTANG TIM KOORDINASI SPBE TAHUN 2023</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/WZKg3PcKPg6YEz8">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>KEPUTUSAN BUPATI MADIUN TENTANG TIM AUDITOR INTERNAL DAN AUDITEE</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/BNi8Mjg5nLSqioS">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>KEPUTUSAN BUPATI MADIUN TENTANG TIM EVALUATOR INTERNAL SPBE</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/ckmMJgb264HJKPS">Download</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        </div><!-- /.blog-details__content -->
                        <div class="blog-details__meta">
                            <div class="blog-details__tags">
                                <span>Kategori: </span> <a href="#">Business,</a> <a href="#">Agency,</a> <a
                                    href="#">Technology</a>
                            </div><!-- /.blog-details__tags -->
                            <div class="blog-details__share">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div><!-- /.blog-details__share -->
                        </div><!-- /.blog-details__meta -->
                    </div><!-- /.blog-details__main -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <form action="#" class="sidebar__search-form">
                                <input type="text" name="search" placeholder="Search here...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Berita Terbaru</h3><!-- /.sidebar__title -->
                            <div class="sidebar__post-wrap">
                                <div class="sidebar__post__single">
                                    <div class="sidebar__post-image">
                                        <div class="inner-block"><img src="assets/images/post-1.png"
                                                alt="Awesome Image" /></div>
                                        <!-- /.inner-block -->
                                    </div><!-- /.sidebar__post-image -->
                                    <div class="sidebar__post-content">
                                        <h4 class="sidebar__post-title"><a href="#">Pre launch Mobile App Marketing Pitfalls</a></h4>
                                        <!-- /.sidebar__post-title -->
                                    </div><!-- /.sidebar__post-content -->
                                </div><!-- /.sidebar__post__single -->
                                <div class="sidebar__post__single">
                                    <div class="sidebar__post-image">
                                        <div class="inner-block"><img src="assets/images/post-2.png"
                                                alt="Awesome Image" /></div>
                                        <!-- /.inner-block -->
                                    </div><!-- /.sidebar__post-image -->
                                    <div class="sidebar__post-content">
                                        <h4 class="sidebar__post-title"><a href="#">Pre launch Mobile App Marketing Pitfalls</a></h4>
                                        <!-- /.sidebar__post-title -->
                                    </div><!-- /.sidebar__post-content -->
                                </div><!-- /.sidebar__post__single -->
                                <div class="sidebar__post__single">
                                    <div class="sidebar__post-image">
                                        <div class="inner-block"><img src="assets/images/post-3.png"
                                                alt="Awesome Image" /></div>
                                        <!-- /.inner-block -->
                                    </div><!-- /.sidebar__post-image -->
                                    <div class="sidebar__post-content">
                                        <h4 class="sidebar__post-title"><a href="#">Pre launch Mobile App Marketing Pitfalls</a></h4>
                                        <!-- /.sidebar__post-title -->
                                    </div><!-- /.sidebar__post-content -->
                                </div><!-- /.sidebar__post__single -->
                            </div><!-- /.sidebar__post-wrap -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single sidebar__category">
                            <h3 class="sidebar__title">Categories</h3><!-- /.sidebar__title -->
                            <ul class="sidebar__category-list">
                                <li class="sidebar__category-list-item"><a href="#">Business</a></li>
                                <li class="sidebar__category-list-item"><a href="#">Introductions</a></li>
                                <li class="sidebar__category-list-item"><a href="#">One Page Template</a></li>
                                <li class="sidebar__category-list-item"><a href="#">Parallax Effects</a></li>
                                <li class="sidebar__category-list-item"><a href="#">New Technologies</a></li>
                                <li class="sidebar__category-list-item"><a href="#">Video Backgrounds</a></li>
                            </ul><!-- /.sidebar__category-list -->
                        </div><!-- /.sidebar__single -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-details -->

    @include('../layout/web/components/footer')

@endsection

@section('script')
    <script src="https://cdn.datatables.net/v/bs4/dt-1.13.8/datatables.min.js"></script>
    <script>
        new DataTable('#kebijakan', {
            ordering: false,
        });
    </script>
@endsection
