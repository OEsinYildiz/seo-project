@extends('backend.layout.master')
@section('content')
    <section class="content">
        <div class="body_scroll">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Kategori</strong> Oluştur</h2>
                            </div>
                            <div class="body">
                                <form >
                                    @csrf
                                    <label for="title">Kategori Başlığı</label>
                                    <div class="form-group">
                                        <input type="text" id="title" name="title" class="form-control" placeholder="Başlığı giriniz">
                                    </div>
                                    <label for="keywords">Anahtar Kelime</label>
                                    <div class="form-group">
                                        <input type="text" id="keywords" name="keywords" class="form-control" placeholder="Anahtar kelime giriniz">
                                    </div>
                                    <label for="keywords">Açıklama</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" id="description" name="description" class="form-control no-resize" placeholder="Açıklama yazınız"></textarea>
                                        </div>
                                    </div>
                                    <button type="button" id="submitButton" class="btn btn-lg btn-raised btn-primary btn-round waves-effect">Kaydet</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Kategori</strong> Oluşturma Kuralları</h2>
                            </div>
                            <div class="body">
                                <h5>Nelere dikkat etmeliyiz?</h5>
                                 <ul>
                                     <li>Kategori isimleri etiket isimleri ile aynı olmamalıdır.</li>
                                     <li>Kategoriler ilgili alanlara göre oluşturulmalıdır.</li>
                                     <li>Kategori silmeden önce; o kategoriye ait yazılar başka bir kategoriye aktarılmalıdır.</li>
                                     <li>Kategori anahtar kelimesi <b>blog anahtar kelimesi</b> ile aynı olmamalıdır.</li>
                                 </ul>
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
                @if(isset($category))
            var url='{{route('admin.category.update', ['id'=>$category->id])}}'; //slug değeri varsa editle demek
                @else
            var url='{{route('admin.category.create')}}'; //slug değeri yoksa yeni sayfa oluştur.
            @endif
            $.ajax({
                type:'post',
                url:url, //yukarıdan aldığı bilgiye göre değişiklik yapar.
                data:{
                    _token:'{{csrf_token()}}',
                    title:$('#title').val(),
                    keywords:$('#keywords').val(),
                    description:$('#description').val(),
                },

                success:function (response) {
                    console.log('başarılı');
                    console.log(response);
                },

                error:function (response) {
                    console.log('hatalı');
                    console.log(response);
                }
            });

        })

    </script>

@endpush

@push('CustomCss')

@endpush
