@extends('front.master')
@section('content')
    <!-- Blog Area Start -->
    <div class="blog-area off-white-bg pb-50">
        <div class="container">
            <div class="row m-5">
                <!-- Section Title Start -->
                <div class="col-md-12">
                    @if($productsCount == 0 and $postsCount == 0 )
                        <h3>موردی یافت نشد</h3>
                    @endif
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-3">
                                <a href="#">
                                    <img src="{{ asset('storage/'.$product->image->first()->img_url) }}"
                                         style="width: 200px; height: 200px;" alt="">
                                    <h4>{{ $product->title }}</h4>
                                    <p>{{ $product->description_short }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    @if($productsCount > 10)
                        <a href="">مشاهده محصولات بیشتر</a>
                    @endif
                    <hr/>
                    @foreach($posts as $post)
                        <div class="col-lg-3">
                            <a href="#">
                                <img src="{{ asset($post->img_url) }}"
                                     style="width: 200px; height: 200px;" alt="">
                                <h4>{{ $post->title }}</h4>
                                <p>{{ $post->description_short }}</p>
                            </a>
                        </div>
                    @endforeach
                    @if($postsCount > 10)
                        <a href="">مشاهده اخبار بیشتر</a>
                    @endif
                </div>
                <!-- Section Title End -->
            </div>
            <!-- Row End -->
        </div>
    </div>
        <!-- Blog Area End -->

@endsection
