@extends('front.master')
@section('content')





    <!-- Breadcrumb Start -->
    <div class="breadcrumb-area ptb-50">
        <div class="container">
            <div class="breadcrumb">
                <ul>

                    <li class="active"><a href="blog.html">اخبار</a></li>
                    <li><a href="index.html">صفحه اصلی</a></li>
                </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Breadcrumb End -->
    <!-- Blog Area Start -->
    <div class="blog-area off-white-bg pb-50">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-xs-12">
                    <div class="section-title text-center ptb-50">
                        <h3 class="section-info">آخرین اخبار</h3>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>
            <!-- Row End -->

            @foreach( $query as $post )



                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <!-- Single Blog Start -->
                        <div class="single-blog">
                            <div class="blog-img">

                                <a href="#"><img src="{{asset($post->link)}}" alt="blog-image"></a>

                            </div>
                            <div class="blog-content">
                                <div class="blog-content-upper">
                                    <h6 class="blog-title"><a href="blog-details.html">{{ $post->title }}</a></h6>
                                    <p>{{$post->description_short != '' ?  \Illuminate\Support\Str::limit($post->description_short ,50)}}</p>
                                </div>
                                <div class="blog-content-lower">
                                    <a href="#">
                                        {{\App\User::find($post->user_id)->firstname}} {{\App\User::find($post->user_id)->lastname}}

                                    </a>
                                    <span class="f-right">{{ $post->created_at }}</span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                    </div>

                    @endforeach



                </div>
                <!-- Row End -->
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="blog-pagination ptb-20 pull-right">
                            <li><a href="#">3</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                        <!-- End of .blog-pagination -->
                    </div>
                </div>
                <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Blog Area End -->

@endsection
