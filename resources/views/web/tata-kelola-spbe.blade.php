@extends('../layout/web/main')

@section('title')
    <title>Tata Kelola SPBE | Portal Sistem Pemerintahan Berbasis Elektronik (SPBE) Pemerintah Kabupaten Madiun</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Tata Kelola SPBE</li>
                            </ol>
                        </nav>
                        <h3 class="title">Tata Kelola SPBE</h3>
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
                            <h3>Tata Kelola SPBE</h3>
                            
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
                                    <td>ARSITEKTUR SPBE 2019- 2023 PROBIS,DATA, INFORMASI DAN APLIKASI</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/SAD44ZweC6zjDoi">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>ARSITEKTUR SPBE 2019- 2023 KONDISI EKSISTING TI</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/53JfPT8dXAdAtxJ">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>ARSITEKTUR SPBE 2019- 2023 ARSITEKTUR INFRASTRUKTUR</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/cGaoWxaxzwFX89P">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>ARSITEKTUR SPBE 2019- 2023 ARSITEKTUR KEAMANAN</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/dL8dTNxQnMoZbcn">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>ARSITEKTUR SPBE 2019- 2023 LAYANAN, TATA KELOLA, MANAJEMEN TIK</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/yjGiJ4K6Af9FdNm">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>ARSITEKTUR SPBE 2019- 2023 PETA RENCANA SPBE</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/R6keD924FWG2wt2">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>REVIU ARSITEKTUR SPBE 2020 KONDISI EKSISTING</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/afRer4JiXrxMwZA">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>REVIU ARSITEKTUR SPBE 2020 DATA, INFORMASI, PROBIS, APLIKASI</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/So3Z69rDHFCgk8X">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>REVIU ARSITEKTUR SPBE 2020 INFRASTRUKTUR SPBE</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/q75jqTWkPnDbJ25">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>REVIU ARSITEKTUR SPBE 2020 KEAMANAN SPBE</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/Ycs3MZPR7kMeQqk">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>REVIU ARSITEKTUR SPBE 2020 TATAKELOLA, MANAJEMEN SPBE</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/FaHEgmB5fWzAXD8">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>REVIU ARSITEKTUR SPBE 2020 PETA RENCANA & ANGGARAN SPBE</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/JoECnoSnBkwe7LW">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td>REVIU ARSITEKTUR SPBE 2020 LAPORAN AKHIR</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/MRBNGNeojHpBkPk">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td>REVIU ARSITEKTUR SPBE 2021 BUKU 1 KONDISI EKSISTING DAN GAP ANALYSIS BARU</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/L3pMcNeN36rsaKY">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15.</td>
                                    <td>REVIU ARSITEKTUR SPBE 2021 BUKU 2 REVIEW DOKUMEN ARSITEKTUR PROSES BISNIS, ARSITEKTUR DATA DAN INFORMASI, ARSITEKTUR APLIKASI</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/5QYcqyWHP9txAMk">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16.</td>
                                    <td>REVIU ARSITEKTUR SPBE 2021 BUKU 3 REVIEW DOKUMAN ARSITEKTUR INFRASTRUKTUR</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/EpJeDSmHr6n3jc3">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>17.</td>
                                    <td>REVIU ARSITEKTUR SPBE 2021 BUKU 4 REVIEW DOKUMEN ARSITEKTUR KEAMANAN</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/e9PXKPeYWfpm9gj">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>18.</td>
                                    <td>REVIU ARSITEKTUR SPBE 2021 BUKU 5 REVIEW DOKUMEN ARSITEKTUR LAYANAN, TATA KELOLA, MANAJEMEN DAN PENYELENGGARA SPBE</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/SRMjGBGn23HsZoS">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19.</td>
                                    <td>REVIU ARSITEKTUR SPBE 2021 BUKU 6 PRIORITASI PETA RENCANA DAN KISARAN HARGA REVIEW ARSITEKTUR SPBE KABUPATEN MADIUN</td>
                                    <td>
                                        <a type="button" target="_blank" class="btn btn-primary" href="https://drive.madiunkab.go.id/index.php/s/kTxGrP2Xe8AnygY">Download</a>
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
