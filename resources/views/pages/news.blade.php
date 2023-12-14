@extends('../layout/side-menu')

@section('subhead')
    <title>Semua Berita - Portal Sistem Pemerintahan Berbasis Elektronik (SPBE) Pemerintah Kabupaten Madiun</title>
@endsection

@section('breadcrumb')
    <!-- BEGIN: Breadcrumb -->
    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="{{route('home')}}" class="">Home</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="{{route('news-list')}}" class="breadcrumb--active">Berita</a> </div>
    <!-- END: Breadcrumb -->
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8 h-10">
        <h2 class="text-lg font-medium mr-auto">Semua Berita</h2>
        <a type="button" href="{{route('news-upload')}}" class="button w-25 mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white"> <i data-feather="upload" class="w-4 h-4 mr-2"></i> Upload Berita </a>
    </div>
    <!-- BEGIN: Datatable -->
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <table class="table table-report table-report--bordered display datatable w-full">
            <thead>
                <tr>
                    <th class="border-b-2 text-center whitespace-no-wrap">JUDUL</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">KATEGORI</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">SLUG</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">THUMBNAIL</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">TANGGAL UPLOAD</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">STATUS</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">MENU</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td class="border-b">
                            <div class="font-medium whitespace-normal">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</div>
                        </td>
                        <td class="text-center border-b">Kategori</td>
                        <td class="text-center border-b">Slug</td>
                        <td class="text-center border-b">
                            <div class="flex sm:justify-center">
                                <div class="intro-x w-10 h-10 image-fit">
                                    <img alt="Gambar Thumbnail" class="rounded-full" src="assets/images/logo.png">
                                </div>
                            </div>
                        </td>
                        <td class="text-center border-b">Tanggal Posting</td>
                        <td class="w-40 border-b">
                            <div class="flex items-center sm:justify-center text-theme-9">
                                <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Publik
                            </div>
                        </td>
                        <td class="border-b w-2">
                            <div class="flex sm:justify-center items-center">
                                <a class="flex items-center mr-3" href="">
                                    <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                </a>
                                <a class="flex items-center text-theme-6" href="">
                                    <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border-b">
                            <div class="font-medium whitespace-normal">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</div>
                        </td>
                        <td class="text-center border-b">Kategori</td>
                        <td class="text-center border-b">Slug</td>
                        <td class="text-center border-b">
                            <div class="flex sm:justify-center">
                                <div class="intro-x w-10 h-10 image-fit">
                                    <img alt="Gambar Thumbnail" class="rounded-full" src="assets/images/logo.png">
                                </div>
                            </div>
                        </td>
                        <td class="text-center border-b">Tanggal Posting</td>
                        <td class="w-40 border-b">
                            <div class="flex items-center sm:justify-center text-theme-6">
                                <i data-feather="x-square" class="w-4 h-4 mr-1"></i> Tidak Publik
                            </div>
                        </td>
                        <td class="border-b w-2">
                            <div class="flex sm:justify-center items-center">
                                <a class="flex items-center mr-3" href="">
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
@endsection