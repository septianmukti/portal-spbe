@extends('../layout/side-menu')

@section('subhead')
    <title>Profile - Portal Sistem Pemerintahan Berbasis Elektronik (SPBE) Pemerintah Kabupaten Madiun</title>
@endsection

@section('breadcrumb')
    <!-- BEGIN: Breadcrumb -->
    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="{{url('/home')}}" class="">Home</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="{{url('/profile')}}" class="breadcrumb--active">Profile</a> </div>
    <!-- END: Breadcrumb -->
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">User Profil</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 xxl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img alt="Image Profile" class="rounded-full" src="{{ asset('assets/images/kampung-pesilat.png') }}">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">{{ Auth::user()->name }}</div>
                        <div class="text-gray-600">Admin</div>
                    </div>
                </div>
                <div class="p-5 border-t border-gray-200">
                    <a class="flex items-center text-theme-1 font-medium" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Informasi Akun
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Ganti Password Akun
                    </a>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
            <!-- BEGIN: Personal Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Informasi Akun</h2>
                </div>
                <div class="p-5">
                    <form action="{{route('update-profile')}}" method="POST">
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12 xl:col-span-6">
                                <div>
                                    <label>Email</label>
                                    <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{ Auth::user()->email }}" disabled>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div>
                                    <label>Nama</label>
                                    <input type="text" class="input w-full border mt-2" placeholder="Input text" value="{{ Auth::user()->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end mt-4">
                            <button type="submit" class="button w-20 bg-theme-1 text-white ml-auto">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END: Personal Information -->
        </div>
    </div>
@endsection