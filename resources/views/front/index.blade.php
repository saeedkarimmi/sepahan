@extends('front.master')


@section('content')
 <!-- Slider Area Start -->
 <div class="slider-area slider-style-three pt-30 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- Single Banner Start -->
                    <div class="single-banner zoom mb-20">
                        @php
                        $set=\App\Setting::find(12);
                        @endphp
                        <a target="_blank" href="{!! $set->value !!}"><img src="{{asset($set->img)}}" alt="slider-banner"></a>
                    </div>
                    <!-- Single Banner End -->
                    <!-- Single Banner Start -->
                    <div class="single-banner zoom">
                        @php
                            $set=\App\Setting::find(13);
                        @endphp
                        <a target="_blank" href="{!! $set->value !!}"><img src="{{asset($set->img)}}" alt="slider-banner"></a>                    </div>
                    <!-- Single Banner End -->
                </div>
                <div class="col-md-offset-3 col-md-6 slider">
                    <div class="slider-wrapper theme-default">
                        <!-- Slider Background  Image Start-->
                        <div >
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('images/1.jpg') }}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('images/1.jpg') }}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('images/1.jpg') }}" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            @php
                                $set=\App\Setting::find(11);
                            @endphp
                            <a target="_blank" href="{!! $set->value !!}"> <img src="{{asset($set->img)}}" data-thumb="{{asset($set->img)}}" alt="" title="#htmlcaption"/></a>
                        </div>
                        <!-- Slider Background  Image Start-->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Slider Area End -->

    <div class="company-policy pb-50">
        <div class="container">
            <div class="main-policy">
                <div class="row">
                    <!-- Single Policy Start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="policy-conditions">
                            <div class="single-policy po-1">
                                <div class="policy-desc">
                                    <h3>آموزش</h3>
                                    <p>لورم ایپسوم یا طرح‌نما </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Policy End -->
                    <!-- Single Policy Start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="policy-conditions">
                            <div class="single-policy po-2">
                                <div class="policy-desc">
                                    <h3>کاتالوگ</h3>
                                    <p>لورم ایپسوم یا طرح‌نما </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Policy End -->
                    <!-- Single Policy Start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="policy-conditions">
                            <div class="single-policy po-3">
                                <div class="policy-desc">
                                    <h3>راهکار</h3>
                                    <p>لورم ایپسوم یا طرح‌نما </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Policy End -->
                    <!-- Single Policy Start -->
                    <div class="col-md-3 col-sm-6">
                        <div class="policy-conditions">
                            <div class="single-policy po-4">
                                <div class="policy-desc">
                                    <h3>مشاوره آنلاین</h3>
                                    <p>لورم ایپسوم یا طرح‌نما </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Policy End -->
                </div>
            <!-- Row End -->


            </div>
        </div>

    </div>

 <!-- Company Policy End -->
 <!-- Blog Page Start -->
 <div class="blog pb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="border-default universal-padding">
                        <div class="group-title">
                            <h2>آخرین اخبار</h2>
                        </div>
                        <div class="row text-right">
                            @foreach($posts as $post)
                                <div class="col-md-6 col-sm-12">
                                   <a target="_blank" href="{{url('news/'.$post->id.'-'.str_replace(' ','-',$post->title))}}" > 
                                   {{$post->title}} -
                                   </a>
                                    <br>
                                </div>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
     <br>
     <br>
    <!-- blog page end -->
<!-- New Products Banner Start -->
<div class="banner-bottom">
        <div class="banner pb-50">
            <div class="container">
                <div class="row">
                    <!-- Single Banner Start -->
                    <div class="col-sm-6">
                        <div class="single-banner zoom">
                            <a href="#"><img src="images/banner/4.jpg" alt="slider-banner"></a>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                    <!-- Single Banner Start -->
                    <div class="col-sm-6">
                        <div class="single-banner zoom">
                            <a href="#"><img src="images/banner/5.jpg" alt="slider-banner"></a>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
    </div>
    <!-- New Products Banner End -->

    <!-- Deal Products Start -->
    <div class="deal-products-three pb-50">
        <div class="container">
            <div class="row">

                    <div class="deal border-default universal-padding">
                        <div class="group-title">
                            <h2>محصولات ویژه</h2>
                        </div>
                        <!-- Deal Pro Activation Start -->
                        @foreach(\App\Product::where('show_in_homepage',1)->take(4)->get() as $value)

                        

                        <div class="col-lg-6 border">
                            <!-- Dual Product Start -->
                            <div class="dual-product fix">
                                    <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                @foreach($value->image as $image)
                                    <?php
                                    $file_name =$image->img_url;
                                   $image_main = Storage::url('app/public/'.$file_name);
                                    
                                    ?>                                 
                            
                              <div id="thumb2" class="tab-pane fade {{ $loop->first ? 'in active' : '' }}">
                            <a data-fancybox="images" href="{{$image_main}}"><img src="{{$image_main}}" alt="product-view"></a>
                        </div>
                             @endforeach  
                                                
                                                <!--<a href="{{$image_main}}">-->
                                                    <!--<img src="images/products/8.jpg" alt="single-product">-->
                                                <!--    <img src="{{$image_main}}" alt="single-product">-->

                                                <!--</a>-->

                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.html">{{$value->title}}</a></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                 <p> {{$value->code_product}} :  کد کالا</p>

                                                <p>{{$value->tip_product}} :  تیپ کالا </p>

                                                <p>{{$value->description_short}}</p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->


                        </div>
                        </div>
                        @endforeach


                        </div>
                        <!-- Deal Pro Three Activation End -->

                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Deal Products End -->

{{--                 </div>--}}
{{--             </div>--}}
{{--         </div>--}}
{{--         <!-- Row End -->--}}
{{--     </div>--}}
{{--     <!-- Container End -->--}}
{{-- </div>--}}
 <!-- Deal Products End -->
@endsection
