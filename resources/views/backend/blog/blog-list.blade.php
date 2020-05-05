@extends('backend.layout.master')
@section('title', 'Blog Listesi')
@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Product List</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                            <li class="breadcrumb-item">eCommerce</li>
                            <li class="breadcrumb-item active">Product List</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover product_item_list c_table theme-color mb-0">
                                    <thead>
                                    <tr>
                                        <th>Görsel</th>
                                        <th>Başlık</th>
                                        <th data-breakpoints="sm xs">Açıklama</th>
                                        <th data-breakpoints="xs">Anahtar Kelime</th>
                                        <th data-breakpoints="xs md">Kategori</th>
                                        <th data-breakpoints="sm xs md">İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $blog)
                                    <tr>
                                        <td><img src="{{asset('uploads/'.$blog->cover_image)}}" width="100" alt="Product img"></td>
                                        <td><h5>{{$blog->title}}</h5></td>
                                        <td><p>{{$blog->description}}</p></td>
                                        <td>{{$blog->keywords}}</td>
                                        <td><span class="col-green">{{$blog->category->title}}</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('CustomJs')
    <script src="{{asset('backend/js/footable.js')}}"></script><!-- Custom Js -->
    <script src="{{asset('backend/js/footable.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->

@endpush

@push('CustomCss')

@endpush
