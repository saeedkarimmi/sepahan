@extends('front.master')
@section('content')

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-area ptb-50">
        <div class="container">
            <div class="breadcrumb">
                <ul>

                    <li class="active"><a href="blog-details.html">{{$post->title}}</a></li>
                    <li><a href="http://www.sepahanelectric.ir/">صفحه اصلی</a></li>
                </ul>
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Breadcrumb End -->
    <!-- Blog Area Start -->
    <div class="blog-area pb-50">
        <div class="container">
            <div class="row">
                <!-- Main Blog Start -->

                <!-- Main Blog End -->
                <!-- Sidebar Main Blog Start -->
                <div class="col-md-4 col-sm-12">
                    <div class="main-right-sidebar border-default universal-padding">
                        <!-- Recent Post Start -->
                        <div class="recent-post pt-30 same-sidebar">
                            <h3 class="sidebar-title">آخرین اخبار</h3>
                            <ul>
                                <!-- Singel Post Thumb Start -->
                                <li class="post-thumb fix">
                                    <div class="left-post-thumb f-left mr-20 mb-20">
                                        <a href="#"><img class="img" src="img/products/1.jpg" alt="latest-post-imgae"></a>
                                    </div>
                                    <div class="right-post-thumb fix">
                                        <h4><a href="#">{{$post->title}}</a></h4>
                                        <span>{{ jdate($post->created_at ) }}</span>
                                    </div>
                                </li>
                                <!-- Singel Post Thumb End -->
                            </ul>
                        </div>
                        <!-- Recent Post End -->
                        <!-- Category Post Start -->
                        <div class="categorie recent-post same-sidebar">
                            <h3 class="sidebar-title mt-40">categories</h3>
                            <ul class="categorie-list text-right">
                                <li><a href="#">Corporate</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Technology</a></li>
                            </ul>
                        </div>
                        <!-- Category Post End -->
                        <!-- Meta Post Start -->
                        <div class="categorie recent-post same-sidebar">
                            <h3 class="sidebar-title mt-40">others</h3>
                            <ul class="categorie-list text-right">
                                <li><a href="log-in.html">Log in</a></li>
                                <li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                <li><a href="#">WordPress.org</a></li>
                            </ul>
                        </div>
                        <!-- Meta Post End -->
                        <!-- Meta Post Start -->
                        <div class="categorie recent-post same-sidebar">
                            <h3 class="sidebar-title mt-40">Tags</h3>
                            <ul class="tag-list text-right">
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">design</a></li>
                                <li><a href="#">develop</a></li>
                                <li><a href="#">new</a></li>
                                <li><a href="#">print</a></li>
                                <li><a href="#">ui/ux</a></li>
                            </ul>
                        </div>
                        <!-- Meta Post End -->
                    </div>
                </div>
                <!-- Sidebar Main Blog End -->
                <div class="col-md-8 col-sm-12">
                    <!-- Blog Details Start -->
                    <div class="blog-details">
                        <div class="blog-img">
                            <img src="{{asset($post->img_url)}}" alt="{{$post->title}}">
                        </div>
                        <div class="post-info">
                            <div class="post-info-left">
                                <div class="post-date">
                                    {{ jdate($post->created_at ) }}
                                </div>
                                <a href="#" class="post-author">
                                    <i class="fa fa-user"></i>
                                 {{\App\User::find($post->user_id)->firstname}} {{\App\User::find($post->user_id)->lastname}}

                                </a>
                            </div>
                            <div class="post-info-right">
                                <a href="#" class="post-like">
                                    {{ jdate($post->created_at ) }}
                                </a>
                                <a href="#" class="post-comment">
                                    <i class="fa fa-comment"></i> 150
                                </a>
                            </div>
                        </div>
                        <h3 class="semi-title text-right">{{$post->title}}</h3>
                        <p class="mb-20 text-right">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example,</p>
                        <blockquote class="mb-30 text-right"> <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms with righteous indignation and dislike.</p><span>Christine Rios</span></blockquote>
                        <p class="mb-20 text-right">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <p class="mb-20 text-right">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <div class="blog-img blog-single-img">
                            <div class="row">
                                <div class="col-sm-4 col-xs-6 col-xs">
                                    <a href="blog-details.html"><img src="img/products/9.jpg" alt="blog-image"></a>
                                </div>
                                <div class="col-sm-4 col-xs-6 col-xs">
                                    <a href="#"><img src="img/products/8.jpg" alt="blog-image"></a>
                                </div>
                                <div class="col-sm-4 col-xs-6 col-xs">
                                    <a href="#"><img src="img/products/13.jpg" alt="blog-image"></a>
                                </div>
                            </div>
                        </div>
                        <p class="mb-20 text-right">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <!--  Blog-Share Start  -->
                        <div class="blog-share mtb-50">
                            <div class="row">
                                <div class="col-lg-8 col-md-7 col-sm-6">
                                    <div class="social-links text-left">
                                        <ul class="social-link-list">
                                            <li>Share:</li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-reddit"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-6">
                                    <span class="pull-left">CATEGORIES:</span>
                                    <ul class="list-inline">
                                        <li><a href="#">Photography</a></li>
                                    </ul>
                                </div>

                            </div>
                            <!-- End of Row -->
                        </div>
                        <!--  Blog-Share End  -->
                        <!--  Blog-Pager Start  -->
                        <div class="blog-pager">
                            <ul class="pager">
                                <li class="next"><a href="#">Next post<i class="zmdi zmdi-chevron-right"></i></a></li>
                                <li class="previous"><a href="#"><i class="zmdi zmdi-chevron-left"></i>prev post</a></li>

                            </ul>
                        </div>
                        <!--  Blog-Pager End  -->
                    </div>
                    <!-- Blog Details End -->






                </div>
            </div>
        </div>
    </div>
@endsection
