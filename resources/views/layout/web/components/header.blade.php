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
                                <span class="side-menu__toggler"><i class="fa fa-bars"></i></span>
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
                                                <li><a href="{{route('kebijakan.spbe')}}">Kebijakan SPBE</a></li>
                                                <li><a href="{{route('tata.kelola.spbe')}}">Tata Kelola SPBE</a></li>
                                                <li><a href="{{route('manajemen.spbe')}}">Manajemen SPBE</a></li>
                                                <li><a href="{{route('layanan.spbe')}}">Layanan SPBE</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('news-layout')}}">Berita</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="navbar-btn d-none d-sm-flex">
                                    <a class="main-btn" href="#">Apa itu SPBE ?</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--====== HEADER PART ENDS ======-->