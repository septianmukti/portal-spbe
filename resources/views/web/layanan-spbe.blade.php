@extends('../layout/web/main')

@section('title')
    <title>Layanan SPBE | Portal Sistem Pemerintahan Berbasis Elektronik (SPBE) Pemerintah Kabupaten Madiun</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Layanan SPBE</li>
                            </ol>
                        </nav>
                        <h3 class="title">Layanan SPBE</h3>
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
                                <a href="#"><i class="fa fa-clock-o"></i> 12 September 2024</a>
                            </div><!-- /.blog-one__meta -->
                            <h3>Layanan SPBE</h3>
                            
                            

                        </div><!-- /.blog-details__content -->
                        <div class="blog-details__meta">
                            <div class="blog-details__tags">

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
