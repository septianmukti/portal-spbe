@extends('../layout/side-menu')

@section('subhead')
    <title>Manajemen Akun - Portal Sistem Pemerintahan Berbasis Elektronik (SPBE) Pemerintah Kabupaten Madiun</title>
@endsection

@section('breadcrumb')
    <!-- BEGIN: Breadcrumb -->
    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="{{url('/home')}}" class="">Home</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="{{url('/account-management')}}" class="breadcrumb--active">Manajemen Akun</a> </div>
    <!-- END: Breadcrumb -->
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Manajemen Akun</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a type="button" href="javascript:;" data-toggle="modal" data-target="#add-account-modal"  class="button w-25 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white"> <i data-feather="plus" class="w-4 h-4 mr-2"></i> Tambah Akun </a>
        </div>
    </div>
    <!-- BEGIN: Datatable -->
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <!-- Error message -->
        @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> {{ $error }} </div>
        @endforeach 
        @endif
        @if (session('error'))
            <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> {{ session('error') }} </div>
        @elseif (session('success'))
            <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-18 text-theme-9"> <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> {{ session('success') }} </div>
        @endif
        <!-- End error message -->
        <table class="table table-report table-report--bordered display datatable w-full">
            <thead>
                <tr>
                    <th class="border-b-2 text-center whitespace-no-wrap">NO</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">EMAIL AKUN</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">NAMA AKUN</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">TANGGAL DIBUAT</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">MENU</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach($users as $user)
                    <tr>
                        <td class="text-center border-b">{{ $no++ }}.</td>
                        <td class="text-center border-b">
                            <div class="font-medium whitespace-no-wrap">{{$user->email}}</div>
                        </td>
                        <td class="text-center border-b">{{$user->name}}</td>
                        <td class="text-center border-b">{{$user->created_at->format('d-m-Y')}}</td>
                        <td class="border-b w-5">
                            <div class="flex sm:justify-center items-center">
                                <a class="flex items-center mr-3 text-theme-1" data-id="{{$user->id}}" id="show-user" href="javascript:;" data-url="{{ route('show-account', $user->id) }}">
                                    <i data-feather="lock" class="w-4 h-4 mr-1"></i> Ganti Password
                                </a>
                                <a class="flex items-center text-theme-6" data-id="{{$user->id}}" id="delete-user" href="javascript:;" data-url="{{ route('show-account', $user->id) }}">
                                    <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Hapus
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <!-- END: Datatable -->
    <!-- BEGIN: Add Account Modal -->
    <div class="modal" id="add-account-modal">
        <div class="modal__content">
            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Tambahkan Akun Pengguna
                </h2>
            </div>
            <form action="{{route('register-account')}}" method="POST">
                @csrf
                <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                    <div class="col-span-12">
                        <label>Nama</label>
                        <input type="text" name="name" class="input w-full border mt-2 flex-1" placeholder="Masukkan Nama Akun" oninvalid="this.setCustomValidity('Form tidak boleh kosong.')" oninput="setCustomValidity('')" required>
                    </div>
                    <div class="col-span-12">
                        <label>Email</label>
                        <input type="text" name="email" class="input w-full border mt-2 flex-1" placeholder="Masukkan Email Akun" oninvalid="this.setCustomValidity('Form tidak boleh kosong.')" oninput="setCustomValidity('')" required>
                    </div>
                    <div class="col-span-12">
                        <label>Password</label>
                        <input type="password" name="password" class="input w-full border mt-2 flex-1" placeholder="Masukkan Password" oninvalid="this.setCustomValidity('Form tidak boleh kosong.')" oninput="setCustomValidity('')" required>
                    </div>
                    <div class="col-span-12">
                        <label>Konfirmasi Password</label>
                        <input type="password" name="confirm_password" class="input w-full border mt-2 flex-1" placeholder="Masukkan Konfirmasi Password" oninvalid="this.setCustomValidity('Form tidak boleh kosong.')" oninput="setCustomValidity('')" required>
                    </div>
                </div>
                <div class="px-5 py-3 text-right border-t border-gray-200">
                    <button type="button" data-dismiss="modal" class="button w-32 border text-gray-700 mr-1">Batal</button>
                    <button type="submit" class="button w-32 bg-theme-1 text-white">Tambah Akun</button>
                </div>
            </form>
        </div>
    </div>
    <!-- END: Add Account Modal -->
    <!-- BEGIN: Change Password Modal -->
    <div class="modal" id="change-password-modal">
        <div class="modal__content">
            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Ganti Password
                </h2>
            </div>
            <form action="{{route('change-account-password', $user->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                    <input type="hidden" id="idn" name="id" value="">
                    <div class="col-span-12">
                        <label>Email</label>
                        <input type="text" id="email-user" name="email" class="input w-full border mt-2 flex-1 cursor-not-allowed" value="" placeholder="Email Akun" disabled>
                    </div>
                    <div class="col-span-12">
                        <label>Password Baru</label>
                        <input type="password" id="new_password" name="new_password" class="input w-full border mt-2 flex-1" placeholder="Masukkan Password Baru" oninvalid="this.setCustomValidity('Form tidak boleh kosong.')" oninput="setCustomValidity('')" required>
                    </div>
                    <div class="col-span-12">
                        <label>Konfirmasi Password Baru</label>
                        <input type="password" id="new_confirm_password" name="new_confirm_password" class="input w-full border mt-2 flex-1" placeholder="Masukkan Konfirmasi Password Baru" oninvalid="this.setCustomValidity('Form tidak boleh kosong.')" oninput="setCustomValidity('')" required>
                    </div>
                </div>
                <div class="px-5 py-3 text-right border-t border-gray-200">
                    <button type="button" data-dismiss="modal" class="button w-32 border text-gray-700 mr-1">Batal</button>
                    <button type="submit" class="button w-32 bg-theme-1 text-white">Ganti Password</button>
                </div>
            </form>
        </div>
    </div>
    <!-- END: Change Password Modal -->
    <!-- BEGIN: Delete Account Modal -->
    <div class="modal" id="delete-account-modal">
        <div class="modal__content">
            <form action="{{route('delete-account', 'id')}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="p-5 text-center"> <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                    <input type="hidden" id="ids" name="id" value="">
                    <div class="text-3xl mt-5">Anda yakin?</div>
                    <div class="text-gray-600 mt-2">Apakah anda ingin menghapus akun ini? Akun yang telah dihapus tidak dapat dikembalikan.</div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Batal</button>
                    <button type="submit" class="button w-24 bg-theme-6 text-white">Hapus</button>
                </div>
            </form>
        </div>
    </div>
    <!-- END: Delete Account Modal -->
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('body').on('click', '#show-user', function () {
                var userURL = $(this).data('url');
                let id = $(this).attr('data-id');
                $.get(userURL, function (data) {
                    $('#change-password-modal').modal('show');
                    $('#idn').val(id);
                    $('#email-user').val(data.email);
                })
            });
        });
        $(document).ready(function () {
            $('body').on('click', '#delete-user', function () {
                var userURL = $(this).data('url');
                let id = $(this).attr('data-id');
                $.get(userURL, function (data) {
                    $('#delete-account-modal').modal('show');
                    $('#ids').val(id);
                })
            });
        });
    </script>
@endsection