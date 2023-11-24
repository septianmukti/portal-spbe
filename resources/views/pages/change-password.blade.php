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
        <h2 class="text-lg font-medium mr-auto">User Profile</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        @include('../layout/components/profile-menu')
        <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
            <!-- BEGIN: Change Password -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">Ganti Password Akun</h2>
                </div>
                <div class="p-5">
                    <form action="{{route('update-password')}}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- error message untuk content
                        @if (session('error'))
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> {{ session('error') }} </div>
                        @elseif (session('success'))
                        <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-18 text-theme-9"> <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> {{ session('success') }} </div>
                        @endif -->
                        <div>
                            <label>Password Lama</label>
                            <input type="password" id="old_pasword" name="old_password" class="input w-full border mt-2" placeholder="Masukkan Password Lama" oninvalid="this.setCustomValidity('Form tidak boleh kosong.')" oninput="setCustomValidity('')" required>
                        </div>
                        <div class="mt-3">
                            <label>Password Baru</label>
                            <input type="password" id="new_pasword" name="new_pasword" class="input w-full border mt-2" placeholder="Masukkan Password Baru" oninvalid="this.setCustomValidity('Form tidak boleh kosong.')" oninput="setCustomValidity('')" required>
                        </div>
                        <div class="mt-3">
                            <label>Konfirmasi Password Baru</label>
                            <input type="password" id="new_confirm_password" name="new_confirm_password" class="input w-full border mt-2" placeholder="Masukkan Konfirmasi Password Baru" oninvalid="this.setCustomValidity('Form tidak boleh kosong.')" oninput="setCustomValidity('')" required>
                        </div>
                        <button type="submit" class="button bg-theme-1 text-white mt-4">Ganti Password</button>
                    </form>
                </div>
            </div>
            <!-- END: Change Password -->
        </div>
    </div>
@endsection