@extends('backend.layout.master')
@section('content')

    <section class="content blog-page">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Blog Post</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                            <li class="breadcrumb-item"><a href="blog-dashboard.html">Blog</a></li>
                            <li class="breadcrumb-item active">New Post</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <form id="blogForm" method="POST">
                                    @csrf
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="col-sm-10 mx-auto">
                                                <img src="@if(isset($blog)) {{asset('uploads/'. $blog->cover_image)}} @endif" alt="" id="coverImageShow">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="header">
                                                <h2><strong>Görsel</strong> Yükleyin</h2>
                                            </div>
                                            <div class="body">
                                                <p>Sadece png, jpg ve jpeg olabilir.</p>
                                                <input type="file" class="form-control" id="coverImage" name="coverImage">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Başlık giriniz"/>
                                            <div class="help-info" style="padding-left:5px">Max. 60 karakter</div>
                                         </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Anahtar Kelime"/>
                                            <div class="help-info" style="padding-left:5px">Sadece bir anahtar kelime</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" name="description" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                                <div class="help-info" style="padding-left:5px">Max. 150 karakter</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-control show-tick ms select2" name="blogCategory">
                                            <option value="">-- Kategori Seçiniz --</option>
                                            @foreach($categories as $category)
                                            <option class="table-light" value="{{$category->id}}" @if(isset($blog) && $category->id == $blog->category_id) selected @endif>{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                        <div class="help-info" style="padding-left:5px">Sadece bir kategori seçiniz</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <textarea name="content" class="form-control my-editor"> </textarea>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-info btn-lg waves-effect m-t-20" id="submitButton">Kaydet</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('CustomJs')

    <script>

        $('#submitButton').on('click', function () {
                @if(isset($blog))
            var url='{{route('admin.blog.update', ['id'=>$blog->id])}}'; //slug değeri varsa editle demek
                @else
            var url='{{route('admin.blog.create')}}'; //slug değeri yoksa yeni sayfa oluştur.
                @endif

            var form =new FormData($('#blogForm')[0]);

            Swal.fire({
                title: 'Yükleniyor',
                html:
                    '<i class="fas fa-sync fa-spin"></i>'+
                    '<span class=sr-only>Yükleniyor...</span>',
                showCloseButton:false,
                showCancelButton:false,
                showConfirmButton:false,
                allowOutsideClick:false,
            })
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:url, // yukarıdan aldığı bilgiye göre değişiklik yapar.
                data:form,
                processData:false,
                contentType:false,

                success: function (response) {
                    Swal.close();
                    Swal.fire({
                        icon: response.status,
                        title: response.title,
                        text: response.message,
                    })
                    console.log(response);
                },

                error: function (response) {
                    Swal.close();
                    console.log(response);
                }
            });

        })

        $('#coverImage').change(function () {
            var input=this;
            if(input.files && input.files[0]){
                var reader = new FileReader();

                reader.onload=function (e) {
                    $('#coverImageShow').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }

        });
    </script>


    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>






@endpush

@push('CustomCss')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.15/css/bootstrap-select.min.css" integrity="sha256-GNFsRKj4Q3Q32hkM1oBsBA0goERfNG9YRA3RKwVOV1w=" crossorigin="anonymous" />

@endpush
