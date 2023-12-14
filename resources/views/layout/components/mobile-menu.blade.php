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
            <a href="{{url('/home')}}" class="menu {{ request()->is('home') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title"> Home </div>
            </a>
        </li>
        <li>
            <a href="{{url('news-list')}}" class="menu">
                <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="menu__title"> Berita </div>
            </a>
        </li>
        <li>
            <a href="{{url('news-list')}}" class="menu">
                <div class="menu__icon"> <i data-feather="list"></i> </div>
                <div class="menu__title"> Kategori </div>
            </a>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="users"></i> </div>
                <div class="menu__title"> Users <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{url('#')}}" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Submenu 1 </div>
                    </a>
                </li>
                <li>
                    <a href="{{url('#')}}" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Submenu 2 </div>
                    </a>
                </li>
                <li>
                    <a href="{{url('#')}}" class="menu">
                        <div class="menu__icon"> <i data-feather="activity"></i> </div>
                        <div class="menu__title"> Submenu 3 </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- END: Mobile Menu -->