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
            <a class="flex items-center {{ request()->is('profile') ? 'text-theme-1 font-medium' : '' }}" href="{{url('/profile')}}">
                <i data-feather="user" class="w-4 h-4 mr-2"></i> User Profile
            </a>
            <a class="flex items-center mt-5 {{ request()->is('change-password') ? 'text-theme-1 font-medium' : '' }}" href="{{url('/change-password')}}">
                <i data-feather="lock" class="w-4 h-4 mr-2"></i> Ganti Password Akun
            </a>
        </div>
    </div>
</div>
<!-- END: Profile Menu -->