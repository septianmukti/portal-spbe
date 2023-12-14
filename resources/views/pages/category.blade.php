@extends('../layout/side-menu')

@section('subhead')
    <title>Semua Kategori - Portal Sistem Pemerintahan Berbasis Elektronik (SPBE) Pemerintah Kabupaten Madiun</title>
@endsection

@section('breadcrumb')
    <!-- BEGIN: Breadcrumb -->
    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="{{route('home')}}" class="">Home</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="{{route('category')}}" class="breadcrumb--active">Kategori</a> </div>
    <!-- END: Breadcrumb -->
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8 h-10">
        <h2 class="text-lg font-medium mr-auto">Semua Kategori</h2>
        <a type="button" href="javascript:;" data-toggle="modal" data-target="#add-category"  class="button w-25 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white"> <i data-feather="plus" class="w-4 h-4 mr-2"></i> Tambah Kategori </a>
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
                    <th class="border-b-2 text-center whitespace-no-wrap">NAMA KATEGORI</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">SLUG</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">TANGGAL DIBUAT</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">MENU</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach($category as $categories)
                <tr>
                    <td class="text-center border-b">{{$no++}}</td>
                    <td class="text-center border-b">{{$categories->name}}</td>
                    <td class="text-center border-b">{{$categories->slug}}</td>
                    <td class="text-center border-b">{{$categories->created_at->format('d-m-Y')}}</td>
                    <td class="border-b w-2">
                    @if ($categories->id == '1')
                        <div class="flex sm:justify-center items-center">
                            <a class="flex items-center text-theme-6 cursor-not-allowed">
                                <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Hapus
                            </a>
                        </div>
                    @else
                        <div class="flex sm:justify-center items-center">
                            <a class="flex items-center mr-3 edit" href="javascript:;" data-toggle="modal" data-id='{{$categories->id}}' data-target="#category-edit" title="Edit Category">
                                <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                            </a>
                            <a class="flex items-center text-theme-6 hapus" href="javascript:;" data-toggle="modal" data-id='{{$categories->id}}' data-target="#delete-modal" title="Hapus Category">    
                                <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Hapus
                            </a>
                        </div>
                    @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END: Datatable -->
    <!-- BEGIN: Add Category Modal -->
    <div class="modal" id="add-category">
        <div class="modal__content">
            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Tambahkan Kategori
                </h2>
            </div>
            <form action="{{route('category-add')}}" method="POST">
                @csrf
                <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                    <div class="col-span-12">
                        <label>Nama Kategori</label>
                        <input type="text" name="name" class="input w-full border mt-2 flex-1" placeholder="Masukkan Nama Kategori" oninvalid="this.setCustomValidity('Form tidak boleh kosong.')" oninput="setCustomValidity('')" required>
                    </div>
                    <div class="col-span-12">
                        <label>Slug</label>
                        <input type="text" name="slug" class="input w-full border mt-2 flex-1" placeholder="Masukkan Slug">
                    </div>
                </div>
                <div class="px-5 py-3 text-right border-t border-gray-200">
                    <button type="button" data-dismiss="modal" class="button w-32 border text-gray-700 mr-1">Batal</button>
                    <button type="submit" class="button w-32 bg-theme-1 text-white">Tambah</button>
                </div>
            </form>
        </div>
    </div>
    <!-- END: Add Category Modal -->
    <!-- BEGIN: Edit Category Modal -->
    <div class="modal" id="category-edit">
        <div class="modal__content">
            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Edit Kategori
                </h2>
            </div>
            <form action="{{route('category-edit', $categories->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="col-span-12">
                        <label>Nama Kategori Baru</label>
                        <input type="text" name="name" class="input w-full border mt-2 flex-1" placeholder="Masukkan Nama Kategori Baru" oninvalid="this.setCustomValidity('Form tidak boleh kosong.')" oninput="setCustomValidity('')" required>
                    </div>
                    <div class="col-span-12">
                        <label>Slug Baru</label>
                        <input type="text" name="slug" class="input w-full border mt-2 flex-1" placeholder="Masukkan Slug Baru">
                    </div>
                </div>
                <div class="px-5 py-3 text-right border-t border-gray-200">
                    <button type="button" data-dismiss="modal" class="button w-32 border text-gray-700 mr-1">Batal</button>
                    <button type="submit" class="button w-32 bg-theme-1 text-white">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <!-- END: Edit Category Modal -->
    <!-- BEGIN: Delete Category Modal -->
    <div class="modal" id="delete-modal">
        <div class="modal__content">
            <form action="{{route('delete-category', $categories->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="p-5 text-center"> <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                    <input type="hidden" id="id" name="id" value="">
                    <div class="text-3xl mt-5">Anda yakin?</div>
                    <div class="text-gray-600 mt-2">Apakah anda yakin ingin menghapus kategori ini? Kategori yang dihapus tidak dapat dikembalikan.</div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Batal</button>
                    <button type="submit" class="button w-24 bg-theme-6 text-white">Hapus</button>
                </div>
            </form>
        </div>
    </div>
    <!-- END: Delete Category Modal -->
@endsection

@section('script')
    <script>
        $('.hapus, .edit').click(function() {
            var id = $(this).data('id');
            $('#id').val(id);
        });
    </script>
@endsection