@extends('../layout/side-menu')

@section('subhead')
    <title>Layanan - Portal Sistem Pemerintahan Berbasis Elektronik (SPBE) Pemerintah Kabupaten Madiun</title>
@endsection

@section('breadcrumb')
    <!-- BEGIN: Breadcrumb -->
    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="{{route('home')}}" class="">Home</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="{{route('layanan')}}" class="breadcrumb--active">Layanan</a> </div>
    <!-- END: Breadcrumb -->
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Semua Layanan</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        @include('../layout/components/profile-menu')
        <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
            <!-- BEGIN: Personal Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Informasi Akun</h2>
                </div>
                <div class="p-5">
                    <form action="{{route('update-profile')}}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- error message untuk content -->
                        @error('name')
                            <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> {{ $message }} </div>
                        @enderror
                        @if (session('success'))
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-18 text-theme-9"> <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> {{ session('success') }} </div>
                        @endif
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12 xl:col-span-6">
                                <div>
                                    <label>Email</label>
                                    <input type="text" name="email" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Email Akun" value="{{ Auth::user()->email }}" disabled>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div>
                                    <label>Nama</label>
                                    <input type="text" name="name" class="input w-full border mt-2" placeholder="Nama Akun" value="{{ Auth::user()->name }}" oninvalid="this.setCustomValidity('Nama tidak boleh kosong.')" oninput="setCustomValidity('')" required>
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