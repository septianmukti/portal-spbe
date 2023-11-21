@extends('../layout/login')

@section('head')
    <title>Login - Portal Sistem Pemerintahan Berbasis Elektronik (SPBE) Pemerintah Kabupaten Madiun</title>
@endsection

@section('content')
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Logo" class="w-10" src="{{ asset('assets/images/logo.png') }}">
                    <span class="text-white text-lg ml-3">
                        Portal <span class="font-medium">SPBE</span>
                    </span>
                </a>
                <div class="my-auto">
                    <img alt="Image Login" class="-intro-x w-3/4 -mt-16" src="{{ asset('dist/images/login-image.svg') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">Portal SPBE <br> Pemerintah Kabupaten Madiun</div>
                    <div class="-intro-x mt-5 text-lg text-white">Website informasi seputar Sistem Pemerintah Berbasis Elekronik.</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Login</h2>
                    <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Silahkan Login terlebih dahulu. Masukkan Username dan Password akun anda!</div>
                    <div class="intro-x mt-8">
                        <input type="text" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Email">
                        <input type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password">
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Login</button>
                        <button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0">Portal SPBE</button>
                    </div>
                    <div class="intro-x mt-10 xl:mt-24 text-gray-700 text-center xl:text-left">
                        Hak Cipta &copy; 2023 - <?php echo date("Y"); ?> <a class="text-theme-1" href="https://diskominfo.madiunkab.go.id/" target="_blank">Dinas Komunikasi dan Informatika</a> <br> Pemerintah Kabupaten Madiun
                    </div>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>    
@endsection