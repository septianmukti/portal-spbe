<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Logo" class="w-12" src="{{ asset('assets/images/logo.png') }}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-theme-24 py-5 hidden">
        <li>
            <a href="{{route('home')}}" class="menu {{ request()->is('home') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title"> Home </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="menu {{ request()->is('news-list', 'news-list/news-upload', 'category') ? 'menu__sub-open' : '' }}">
                <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="menu__title"> Berita <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="{{ request()->is('news-list', 'news-list/news-upload', 'category') ? 'menu__sub-open' : '' }}">
                <li>
                    <a href="{{route('news-list')}}" class="menu {{ request()->is('news-list', 'news-list/news-upload') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-feather="minus"></i> </div>
                        <div class="menu__title"> Semua Berita </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('category')}}" class="menu {{ request()->is('category') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-feather="minus"></i> </div>
                        <div class="menu__title"> Kategori Berita </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('layanan')}}" class="menu {{ request()->is('layanan') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-feather="clipboard"></i> </div>
                <div class="menu__title"> Layanan </div>
            </a>
        </li>
        <li class="menu__devider my-6"></li>
    </ul>
</div>
<!-- END: Mobile Menu -->