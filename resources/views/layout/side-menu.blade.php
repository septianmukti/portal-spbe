@extends('../layout/main')

@section('head')
    @yield('subhead')
@endsection

@section('css')
    @yield('custom-css')
@endsection

@section('content')
    @include('../layout/components/mobile-menu')
    <div class="flex">
        <!-- BEGIN: Side Menu -->
        <nav class="side-nav">
            <a href="{{route('home')}}" class="intro-x flex items-center pl-5 pt-4">
                <img alt="Logo" class="w-1/4" src="{{ asset('assets/images/logo.png') }}">
                <span class="hidden xl:block text-white text-lg ml-3"> Portal <span class="font-medium">SPBE</span> </span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                <li>
                    <a href="{{route('home')}}" class="side-menu {{ request()->is('home') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                        <div class="side-menu__title"> Home </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu {{ request()->is('news-list', 'news-list/news-upload', 'category') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                        <div class="side-menu__title"> Berita <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                    </a>
                    <ul class="{{ request()->is('news-list', 'news-list/news-upload', 'category') ? 'side-menu__sub-open' : '' }}">
                        <li>
                            <a href="{{route('news-list')}}" class="side-menu {{ request()->is('news-list', 'news-list/news-upload') ? 'side-menu--active' : '' }}">
                                <div class="side-menu__icon"> <i data-feather="minus"></i> </div>
                                <div class="side-menu__title"> Semua Berita </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('category')}}" class="side-menu {{ request()->is('category') ? 'side-menu--active' : '' }}">
                                <div class="side-menu__icon"> <i data-feather="minus"></i> </div>
                                <div class="side-menu__title"> Kategori Berita </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('layanan')}}" class="side-menu {{ request()->is('layanan') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                        <div class="side-menu__title"> Layanan </div>
                    </a>
                </li>
                <li class="side-nav__devider my-6"></li>
            </ul>
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            @include('../layout/components/top-bar')
            @yield('subcontent')
        </div>
        <!-- END: Content -->
    </div>
@endsection