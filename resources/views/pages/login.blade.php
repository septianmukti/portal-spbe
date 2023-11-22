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
                    <div class="-intro-x mt-5 text-md text-white">Portal SPBE merupakan sebuah halaman informasi seputar Sistem Pemerintah Berbasis Elekronik milik Pemerintah Kabupaten Madiun.</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    @if ($message = Session::get('error'))
                    <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> {{ $message }} </div>
                    @elseif ($message = Session::get('success'))
                    <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-18 text-theme-9"> <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> {{ $message }} </div>
                    @endif
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Login</h2>
                    <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Silahkan Login terlebih dahulu. Masukkan Username dan Password akun anda!</div>
                    <form action="{{route('authenticate')}}" method="POST">
                        @csrf
                        <div class="intro-x mt-8">
                            <input type="email" name="email" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Email" oninvalid="this.setCustomValidity('Masukkan Email')" oninput="setCustomValidity('')" required>
                            <input type="password" name="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password" oninvalid="this.setCustomValidity('Masukkan Password')" oninput="setCustomValidity('')" required>
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Login</button>
                            <a class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0" href="{{url('/')}}">Portal SPBE</a>
                        </div>
                    </form>
                    <div class="intro-x mt-10 xl:mt-24 text-gray-700 text-center xl:text-left">
                        Hak Cipta &copy; <?php echo date("Y"); ?> <a class="text-theme-1" href="https://diskominfo.madiunkab.go.id/" target="_blank">Dinas Komunikasi dan Informatika</a> <br> Pemerintah Kabupaten Madiun
                    </div>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>    
@endsection
