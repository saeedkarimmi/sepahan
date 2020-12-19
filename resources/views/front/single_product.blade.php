@extends('front.master')
@section('content')



    <!-- Breadcrumb Start -->
    <div class="breadcrumb-area ptb-50">
        <div class="container">
            <div class="breadcrumb">
                <ul>

                    <li class="active"><a href="product.html">{{$product->title}}</a></li>
                    <li><a href="shop.html"> {{\App\Category::find($product->category_id)->title}}</a></li>
                    <li><a href="http://sepahanelectric.ir">صفحه اصلی</a></li>
                </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Breadcrumb End -->
    <!-- Product Thumbnail Start -->
    <div class="main-product-thumbnail pb-50">
        <div class="container">
            <div class="row">
                <!-- Main Thumbnail Image Start -->
                <div class="col-sm-7">
                    <div class="thubnail-desc fix text-right">
                        <h3 class="product-header">{{$product->title}}</h3>

                        <div class="pro-price mb-10">
                            <p><span class="price">    {{$product->code_product}} :  کد کالا    </span></p>
                        </div>
                        <div class="pro-price mb-10">
                            <p><span class="price">   تیپ کالا  :  {{$product->tip_product}}    </span></p>
                        </div>
                        <div class="pro-price mb-10">
                            <p><span class="price">   برند   :  {{\App\Brand::find($product->brand_id)->title}}
 </span></p>
                        </div>

{{--                        <div class="pro-price mb-10">--}}
{{--                            <p><span class="price">    {{\App\Category::find($product->category_id)->title}} :  دسته بندی    </span></p>--}}
{{--                        </div>--}}
                        <div class="pro-price mb-10">
                            <p><span class="price">   کشور سازنده  :  {{\App\Country::find($product->country_id)->title}}
  </span></p>
                        </div>
{{--                        <div class="pro-ref mb-15">--}}
{{--                            <p><span class="in-stock">IN STOCK</span><span class="sku">sku:</span><span>25-UG05</span></p>--}}
{{--                        </div>--}}
                        <div class="box-quantity">
                            <form action="#">
{{--                                <input class="number" id="numeric" type="number" min="1" value="1">--}}
                                <a class="add-cart" href="#">خرید از فروشگاه</a>
                            </form>
                        </div>
                        <div class="product-link">
                            <ul class="list-inline">
                                @if(isset($product->certificate_pdf_url))
                                <li><a href="{{asset($product->certificate_pdf_url)}}">گواهینامه</a></li>
                                @endif
                                <li><a href="{{asset($product->datashid_pdf_url)}}">دیتاشید</a></li>
                                @if(isset($product->manual_pdf_url))
                                <li><a href="{{asset($product->manual_pdf_url)}}">دستی</a></li>
                                @endif
                            </ul>
                        </div>
                        <p class="ptb-20" style="direction: rtl;">{{$product->description_short}}</p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <!-- Thumbnail Large Image start -->
                    <div class="tab-content">
                      <!--  <div id="thumb1" class="tab-pane fade in active">
                            <a data-fancybox="images" href=""><img src="/images/products/13.jpg" alt="product-view"></a>
                        </div>-->

@foreach($product->image as $image)
                                    <?php
                                    $file_name =$image->img_url;
                                   $image_main = Storage::url('app/public/'.$file_name);

                                    ?>

                              <div id="thumb2" class="tab-pane fade {{ $loop->first ? 'in active' : '' }}">
                            <a data-fancybox="images" href="{{$image_main}}"><img src="{{$image_main}}" alt="product-view"></a>
                        </div>
                             @endforeach

                    </div>
                    <!-- Thumbnail Large Image End -->

                    <!-- Thumbnail Image End -->
                    <div class="product-thumbnail">
                        <div class="thumb-menu owl-carousel">
@foreach($product->image as $image)
                                    <?php
                                    $file_name =$image->img_url;
                                   $image_main = Storage::url('app/public/'.$file_name);

                                    ?>                            <div class="active">
                                <a data-toggle="tab" href="{{$image_main}}"> <img src="{{$image_main}}" alt="product-thumbnail"></a>
                            </div>
                             @endforeach





                        </div>
                    </div>
                    <!-- Thumbnail image end -->
                </div>
                <!-- Main Thumbnail Image End -->
                <!-- Thumbnail Description Start -->

                <!-- Thumbnail Description End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Product Thumbnail End -->
    <!-- Product Thumbnail Description Start -->
    <div class="thumnail-desc pb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="main-thumb-desc text-right" style="direction: rtl;">
                        <li class="active"><a data-toggle="tab" href="#dtail">توضیحات بیشتر</a></li>
                        <li><a data-toggle="tab" href="#review">نظرات کاربران</a></li>
                    </ul>
                    <!-- Product Thumbnail Tab Content Start -->
                    <div class="tab-content thumb-content border-default">
                        <div id="dtail" class="tab-pane fade in active" style="direction: rtl;">
                            <p>{!! $product->description !!} </p>

                        </div>
                        <div id="review" class="tab-pane fade">

                            <!-- Reviews Start -->
                            <div class="review border-default universal-padding mt-30">

                                <div class="riview-field mt-40">
                                    <form autocomplete="off" action="#">
                                        <div class="form-group">
                                            <label class="req" for="sure-name">نام و نام خانوادگی</label>
                                            <input type="text" class="form-control" id="sure-name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="req" for="subject">موضوع</label>
                                            <input type="text" class="form-control" id="subject" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="req" for="comments">پیام</label>
                                            <textarea class="form-control" rows="5" id="comments" required="required"></textarea>
                                        </div>
                                        <button type="submit" class="btn-submit">ارسال</button>
                                    </form>
                                </div>
                                <!-- Reviews Field Start -->
                            </div>
                            <!-- Reviews End -->
                        </div>
                    </div>
                    <!-- Product Thumbnail Tab Content End -->
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Product Thumbnail Description End -->

            </div>
        </div>
    </div>
    <!-- Realted Product End -->


@endsection
