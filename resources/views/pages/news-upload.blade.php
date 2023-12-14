@extends('../layout/side-menu')

@section('subhead')
    <title>Upload Berita - Portal Sistem Pemerintahan Berbasis Elektronik (SPBE) Pemerintah Kabupaten Madiun</title>
@endsection

@section('custom-css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .preview-upload {
            display:none;
            height:400px;
            object-fit: contain;
        }
    </style>
@endsection

@section('breadcrumb')
    <!-- BEGIN: Breadcrumb -->
    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="{{route('home')}}" class="">Home</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="{{route('news-list')}}" class="">Berita</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="{{route('news-upload')}}" class="breadcrumb--active">Upload Berita</a> </div>
    <!-- END: Breadcrumb -->
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8 h-10">
        <h2 class="text-lg font-medium mr-auto">Upload Berita Baru</h2>
    </div>
    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Post Content -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <input type="text" class="intro-y input input--lg w-full box pr-10 placeholder-theme-13" placeholder="Judul Berita">
            <div class="post intro-y overflow-hidden box mt-5">
                
                <div class="post__content tab-content">
                    <div class="tab-content__pane p-5 active" id="content">
                        <div class="border border-gray-200 rounded-md p-5">
                            <div class="font-medium flex items-center border-b border-gray-200 pb-5">
                                <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Konten Berita
                            </div>
                            <div class="mt-5">
                                <div id="editor" style="height: 250px;"></div>
                            </div>
                        </div>
                        <div class="border border-gray-200 rounded-md p-5 mt-5">
                            <div class="font-medium flex items-center border-b border-gray-200 pb-5">
                                <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Upload Gambar Thumbnail
                            </div>
                            <div class="mt-5">
                                <input type="file" name="image" id="selectImage" class="input w-full border" placeholder="Upload Thumbnails">
                                <img id="preview" src="#" alt="Upload Image" class="mt-3 rounded-md preview-upload center"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post Content -->
        <!-- BEGIN: Post Info -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y box p-5">
                <div>
                    <label>Penulis :</label>
                    <div class="dropdown relative mt-2">
                        <button class="dropdown-toggle button w-full border flex items-center">
                            <div class="w-6 h-6 absolute image-fit mr-3">
                                <img class="rounded" alt="Image User" src="{{ asset('assets/images/kampung-pesilat.png') }}">
                            </div>
                            <div class="ml-8 pl-1 truncate">{{ Auth::user()->name }}</div>
                        </button>
                    </div>
                </div>
                <div class="mt-3">
                    <label>Kategori :</label>
                    <div class="mt-2">
                        <select data-hide-search="true" class="select2 w-full" placeholder="Pilih Kategori" required>
                            <option value="">Pilih Kategori</option>
                            @foreach($category as $ctg)
                            <option value="{{$ctg->name}}">{{$ctg->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mt-3">
                    <label>Slug :</label>
                    <input type="text" class="input w-full border mt-2" placeholder="Slug">
                </div>
                <div class="mt-3">
                    <label>Publikasikan Berita</label>
                    <div class="mt-2">
                        <input class="input input--switch border" name="status" type="checkbox" checked>
                    </div>
                </div>
                <div class="mt-6">
                    <a type="button" href="{{url('javascript:;')}}" class="button mr-2 mb-2 flex items-center justify-center bg-theme-1 text-white"><i data-feather="save" class="w-4 h-4 mr-2"></i> Simpan </a>
                    <a type="button" href="{{route('news-list')}}" class="button mr-2 mb-2 flex items-center justify-center bg-gray-200 text-gray-600"> <i data-feather="arrow-left" class="w-4 h-4 mr-2"></i> Kembali </a>
                </div>
            </div>
        </div>
        <!-- END: Post Info -->
    </div>
@endsection

@section('script')
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <!-- Initialize Quill editor -->
    <script>
        var toolbarOptions = [
            [{'font': []}, { 'header': [1, 2, 3, 4, 5, 6, false] }],
            ['bold', 'italic', 'underline', 'strike'],
            ['link', 'image', 'video'],
            [{'list': 'ordered'}, { 'list': 'bullet' }, { 'align': [] }],
            [{'color': []}, {'background': []}],
            [{ 'indent': '-1'}, { 'indent': '+1' }],
        ];

        var quill = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });
    </script>
    <script>
        selectImage.onchange = evt => {
            preview = document.getElementById('preview');
            preview.style.display = 'block';
            const [file] = selectImage.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection