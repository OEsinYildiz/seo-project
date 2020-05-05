@extends('backend.layout.master')
@section('content')
    <!-- Striped Rows -->
<section class="content">
   <div class="body_scroll">
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2> <strong>Admin Panel</strong> Sayfaları</h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr class="bg-blue" style="color:#ffffff">
                                <th>Başlık</th>
                                <th>Açıklama</th>
                                <th>Slug</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($settings as $setting)
                            <tr>
                                <th scope="row">{{$setting->title}}</th>
                                <td>{{$setting->description}}</td>
                                <td>{{$setting->slug}}</td>
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

@endpush

@push('CustomCss')

@endpush
