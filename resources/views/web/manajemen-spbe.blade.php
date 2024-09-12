@extends('../layout/web/main')

@section('title')
    <title>Tata Kelola SPBE | Portal Sistem Pemerintahan Berbasis Elektronik (SPBE) Pemerintah Kabupaten Madiun</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Manajemen SPBE</li>
                            </ol>
                        </nav>
                        <h3 class="title">Manajemen SPBE</h3>
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
                            <h3>Manajemen SPBE</h3>   
                            <h4>Manajemen Risiko SPBE</h4>
                            <p>
                                1. Manajemen Risiko SPBE adalah pendekatan sistematis yang meliputi proses, pengukuran, struktur, dan budaya untuk menentukan tindakan terbaik terkait Risiko SPBE.<br>
                                2. Risiko SPBE adalah peluang terjadinya suatu peristiwa yang akan mempengaruhi keberhasilan terhadap pencapaian tujuan penerapan SPBE.<br>
                                3. Manajemen Risiko bertujuan untuk menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko dalam SPBE.<br>
                                4. Instansi Pusat dan Pemerintah Daerah menerapkan manajemen risiko SPBE berdasarkan pedoman Manajemen Risiko SPBE.
                            </p>
                            <br>
                            <h4>Manajemen Keamanan Informasi</h4>
                            <p>
                                1. Manajemen Keamanan Informasi dilakukan melalui serangkaian proses yang meliputi penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap Keamanan Informasi dalam SPBE.<br>
                                2. Manajemen Keamanan Informasi bertujuan untuk menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko Keamanan Informasi.<br>
                                3. Penerapan Keamanan Informasi berlandaskan penjaminan kerahasiaan, keutuhan, ketersediaan, keaslian, dan kenirsangkalan (non-repudiation) sumber daya terkait data dan informasi, Infrastruktur SPBE, dan aplikasi.
                            </p>
                            <br>
                            <h4>Manajemen Data</h4>
                            <p>
                                1. Manajemen Data dilakukan melalui serangkaian proses pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data dan interoperabilitas data.<br>
                                2. Manajemen Data bertujuan untuk menjamin terwujudnya data yang akurat, mutakhir, terintegrasi, dan dapat diakses sebagai dasar perencanaan, pelaksanaan, evaluasi, dan pengendalian pembangunan nasional.
                            </p>
                            <br>
                            <h4>Manajemen Aset TIK</h4>
                            <p>
                                1. Manajemen aset teknologi informasi dan komunikasi dilakukan melalui serangkaian proses perencanaan, pengadaan, pengelolaan, dan penghapusan perangkat keras dan perangkat lunak yang digunakan dalam SPBE.<br>
                                2. Manajemen aset teknologi informasi dan komunikasi bertujuan untuk menjamin ketersediaan dan optimalisasi pemanfaatan aset teknologi informasi dan komunikasi dalam SPBE.<br>
                                3. Aset TIK mencakup perangkat lunak, perangkat keras, data dan informasi, infrastruktur, SDM, lisensi, data, SOP, outsource services, dan IT asset register.
                            </p>

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
