@extends('frontend.blog.layout.master')
@section('content')

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{$blog->title}}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog Single</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="single-post nobottommargin">

                    <!-- Single Post
                    ============================================= -->
                    <div class="entry clearfix">

                        <!-- Entry Title
                        ============================================= -->
                        <div class="entry-title">
                            <h2>{{$blog->title}}</h2>
                        </div><!-- .entry-title end -->

                        <!-- Entry Meta
                        ============================================= -->
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> {{date('d-m-Y', strtotime($blog->updated_at))}}</li>
                            <li><a href="#"><i class="icon-user"></i> admin</a></li>
                            <li><i class="icon-folder-open"></i> <a href="#">{{$blog->category->title}}</a></li>
                        </ul><!-- .entry-meta end -->

                        <!-- Entry Image
                        ============================================= -->
                        <div class="entry-image bottommargin">
                            <a href="#"><img src="{{asset('storage/'.$blog->cover_image)}}" alt="{{$blog->title}}"></a>
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
                        ============================================= -->
                        <div class="entry-content notopmargin">

                            {!!$blog->content!!}


                            <!-- Post Single - Content End -->


                            <div class="clear"></div>

                            <!-- Post Single - Share
                            ============================================= -->
                            <div class="si-share noborder clearfix">
                                <span>Share this Post:</span>
                                <div>
                                    <a href="#" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-instagram">
                                        <i class="icon-instagram"></i>
                                        <i class="icon-instagram"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-email3">
                                        <i class="icon-email3"></i>
                                        <i class="icon-email3"></i>
                                    </a>
                                </div>
                            </div><!-- Post Single - Share End -->

                        </div>
                    </div><!-- .entry end -->


                    <!-- Post Author Info
                    ============================================= -->
                    <div class="card">
                        <div class="card-header"><strong>Posted by <a href="#">John Doe</a></strong></div>
                        <div class="card-body">
                            <div class="author-image">
                                <img src="images/author/1.jpg" alt="" class="rounded-circle">
                            </div>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
                        </div>
                    </div><!-- Post Single - Author End -->

                    <div class="line"></div>

                    <h4>Related Posts:</h4>

                    <div class="related-posts clearfix">
                            @foreach($lastPosts as $key => $lastPost)
                                @if(($key%2)==0)
                                    <div class="col_half nobottommargin py-2">
                                        <div class="mpost clearfix">
                                            <div class="entry-image">
                                                <a href="#"><img src="{{asset('uploads/'.$lastPost->cover_image)}}" alt="Blog Single"></a>
                                            </div>
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="#">{{$lastPost->title}}</a></h4>
                                                </div>
                                                <ul class="entry-meta clearfix">
                                                    <li><i class="icon-calendar3"></i> {{date('d-m-Y', strtotime($blog->updated_at))}}</li>
                                                    <li><a href="#"><i class="icon-comments"></i> 8</a></li>
                                                </ul>
                                                <div class="entry-content">{{$lastPost->description}}</div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col_half nobottommargin py-2 col_last">
                                        <div class="mpost clearfix">
                                            <div class="entry-image">
                                                <a href="#"><img src="{{asset('uploads/'.$lastPost->cover_image)}}" alt="Blog Single"></a>
                                            </div>
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="#">{{$lastPost->title}}</a></h4>
                                                </div>
                                                <ul class="entry-meta clearfix">
                                                    <li><i class="icon-calendar3"></i> {{date('d-m-Y', strtotime($blog->updated_at))}}</li>
                                                    <li><a href="#"><i class="icon-comments"></i> 8</a></li>
                                                </ul>
                                                <div class="entry-content">{{$lastPost->description}}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                    </div>


                </div>

            </div>

        </div>

    </section><!-- #content end -->

@endsection

@push('CustomJs')

@endpush

@push('CustomCss')

@endpush
