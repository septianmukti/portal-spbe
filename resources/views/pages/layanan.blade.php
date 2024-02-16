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
    <div class="intro-y flex items-center mt-8 h-10">
        <h2 class="text-lg font-medium mr-auto">Daftar Aplikasi Layanan Pemerintah Kabupaten Madiun</h2>
        <a type="button" href="javascript:;" data-toggle="modal" data-target="#add-app-modal"  class="button w-25 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white"> <i data-feather="plus" class="w-4 h-4 mr-2"></i> Tambah Aplikasi </a>
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
                    <th class="border-b-2 text-center whitespace-no-wrap">NAMA APLIKASI & INSTANSI</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">DESKRIPSI</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">KATEGORI</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">STATUS</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">DITAMPILKAN</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border-b">
                        <div class="font-medium whitespace-no-wrap line-clamp-4">Portal SPBE</div>
                        <div class="text-gray-600 text-xs whitespace-no-wrap">Dinas Komunikasi dan Informatika</div>
                    </td>
                    <td class="text-center border-b">
                        <div class="line-clamp-4">
                            Aplikasi terkait SPBE Kabupaten Madiun untuk pendataan dan monitor capaian SPBE.
                        </div>
                    </td>
                    <td class="text-center border-b">Administrasi</td>
                    <td class="w-40 border-b">
                        <div class="flex items-center sm:justify-center text-theme-9">
                            <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Aktif
                        </div>
                        <div class="flex items-center sm:justify-center text-theme-6">
                            <i data-feather="x-square" class="w-4 h-4 mr-1"></i> Tidak Aktif
                        </div>
                        <div class="flex items-center sm:justify-center text-theme-9">
                            <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Dipakai
                        </div>
                        <div class="flex items-center sm:justify-center text-theme-6">
                            <i data-feather="x-square" class="w-4 h-4 mr-1"></i> Tidak Dipakai
                        </div>
                    </td>
                    <td class="w-40 border-b">
                        <div class="flex items-center sm:justify-center text-theme-9">
                            <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Ya
                        </div>
                        <div class="flex items-center sm:justify-center text-theme-6">
                            <i data-feather="x-square" class="w-4 h-4 mr-1"></i> Tidak
                        </div>
                    </td>
                    <td class="border-b w-2">
                        <div class="flex sm:justify-center items-center">
                            <a class="flex items-center text-theme-1 mr-2" href="">
                                <i data-feather="eye" class="w-4 h-4 mr-1"></i> Lihat
                            </a>
                            <a class="flex items-center mr-2" href="">
                                <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                            </a>
                            <a class="flex items-center text-theme-6" href="">
                                <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- END: Datatable -->
    <!-- BEGIN: Add App Modal -->
    <div class="modal" id="add-app-modal">
     <div class="modal__content modal__content--lg">
         <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
             <h2 class="font-medium text-base mr-auto">Tambahkan Aplikasi Layanan</h2>
         </div>
         <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
            <div class="col-span-12 sm:col-span-6"> <label>Nama Aplikasi</label> <input type="text" class="input w-full border mt-2 flex-1" placeholder="Masukkan Nama Aplikasi"> </div>
            <div class="col-span-12 sm:col-span-6"> <label>Nama Instansi</label>
                <div class="mt-2 flex">
                    <select class="select2 w-full border">
                        <option value="">Pilih Pemilik Aplikasi</option>
                        <option value="1">Johnny Deep</option>
                        <option value="2">Robert Downey, Jr</option>
                        <option value="3">Samuel L. Jackson</option>
                        <option value="4">Morgan Freeman</option>
                    </select>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6"> <label>Kategori Aplikasi</label>
                <select class="input w-full border mt-2 flex-1">
                    <option value="">Pilih Kategori Aplikasi</option>
                    <option value="1">Administrasi</option>
                    <option value="2">Pelayanan Publik</option>
                    <option value="3">Pengaduan</option>
                    <option value="4">Statistik</option>
                    <option value="5">Perizinan</option>
                </select>
            </div>
            <div class="col-span-12 sm:col-span-6"> <label>Alamat URL</label> <input type="url" name="url" class="input w-full border mt-2 flex-1" placeholder="https://madiunkab.go.id"> </div>
            <div class="col-span-12 sm:col-span-12"> <label>Deskripsi Aplikasi</label> <textarea class="input w-full border mt-2 flex-1" name="description" placeholder="Masukkan Deskripsi Aplikasi" required></textarea> </div>
            <div class="col-span-12 sm:col-span-6"> <label>Apakah Aplikasi masih aktif ?</label>
                <select class="input w-full border mt-2 flex-1">
                    <option value="">Pilih Salah Satu</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div>
            <div class="col-span-12 sm:col-span-6"> <label>Apakah Aplikasi masih dipakai ?</label>
                <select class="input w-full border mt-2 flex-1">
                    <option value="">Pilih Salah Satu</option>
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
            <div class="col-span-12 sm:col-span-6 mt-2"> <label>Tampilkan Aplikasi di Halaman Depan ?</label>
                <div class="flex items-center text-gray-700 mt-2"> <input type="radio" class="input border mr-2" id="ya" name="vertical_radio_button" value="1"> <label class="cursor-pointer select-none" for="ya">Ya</label> </div>
                <div class="flex items-center text-gray-700 mt-2"> <input type="radio" class="input border mr-2" id="tidak" name="vertical_radio_button" value="0"> <label class="cursor-pointer select-none" for="tidak">Tidak</label> </div>
            </div>
        </div>
         <div class="px-5 py-3 text-right border-t border-gray-200">
            <button type="button" data-dismiss="modal" class="button w-32 border text-gray-700 mr-1">Batal</button>
            <button type="submit" class="button w-32 bg-theme-1 text-white">Tambah Aplikasi</button>
        </div>
     </div>
    <!-- END: Add Account Modal -->
@endsection