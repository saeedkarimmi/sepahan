



<!-- Header Area Start -->
   <header style="height: 190px;">
        <!-- Header Top Start -->
        <div class="header-top off-white-bg">
            <div class="container">
                <!-- Header Top left Start -->

                <!-- Header Top left End -->

                <!-- Header Top Right End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Header Top End -->
        <!-- Header Middle Start -->
       <div class="menu-fix" style="position: fixed;
width: 100%;
top: 0;
z-index: 1000;">
           <div class="header-middle-three header-middle white-bg">
               <div class="container">
                   <div class="row">
                       <div class="col-md-3 col-sm-3">
                           <div class="cart-style-two cart-box">

                           </div>
                       </div>
                       <div class="col-md-6 col-sm-6">
                           <div class="search-box-style-three search-box-view fix">
                               <form method="get" action="{{ route('front.search') }}">
                                   <input type="text" id="search-input" class="search" placeholder="جستجو (محصولات ، اخبار و ...)" name="q" style="text-align:right;">
                                   <button type="submit" class="submit"></button>
                               </form>
                           </div>
                       </div>
                       <div class="col-md-3 col-sm-3 hidden-xs">
                           <!-- Logo Start -->
                           <div class="logo-style-two logo pull-right">
                               @php
                                   $set=\App\Setting::find(10);
                               @endphp
                               <a href="http://sepahanelectric.ir/"><img src="{{asset($set->img)}}" alt="سپاهان الکتریک"></a>
                           </div>
                           <!-- Logo End -->
                       </div>
                   </div>
                   <!-- Row End -->
               </div>
               <!-- Container End -->
           </div>
           <!-- Header Middle End -->
           <!-- Header Bottom Start -->
           <div class="home-3 header-bottom black-bg">
               <div class="container">
                   <div class="row">
                       <div class="col-xs-6 visible-xs full-col">
                           <!-- Logo Start -->
                           <div class="logo mt-10">
{{--                               <a href="index.html"><img src="images/logo/logo3.png" alt="logo-image"></a>--}}
                           </div>
                           <!-- Logo End -->
                       </div>
                       <!-- Primary Vertical-Menu Start -->
                       <div class="col-md-9">
                           <!-- Header Middle Menu Start -->
                           <div class="middle-menu hidden-xs">
                               <nav>
                                   <ul class="menu-styel-three middle-menu-list">
                                       @if($main_menu)
                                           @foreach($main_menu as $menu)
                                               <li>
                                                   <a href="{{ $menu['link'] }}" title="">{{ $menu['label'] }}</a>
                                                   @if( $menu['child'] )
                                                       <ul class="ht-dropdown">
                                                           @foreach( $menu['child'] as $child )
                                                               <li>
                                                                   <a href="{{ $child['link'] }}" title="">{{ $child['label'] }}</a>
                                                                   {{-- @if( $child['child'] )
                                                                       @foreach( $child['child'] as $childl3 )
                                                                           <li>
                                                                               <a href="{{ $childl3['link'] }}" title="">{{ $childl3['label'] }}</a>
                                                                           </li>
                                                                       @endforeach
                                                                   @endif --}}
                                                               </li>
                                                           @endforeach
                                                       </ul><!-- /.sub-menu -->
                                                   @endif
                                               </li>
                                       @endforeach
                                   @endif


                                   <!-- Home Version Dropdown End -->






                                   </ul>
                               </nav>
                           </div>
                           <!-- Header Middle Menu End -->
                       </div>
                       <div class="col-md-3 col-sm-4 hidden-xs">
{{--                           <a class="sticky-logo" href="index.html"><img src="images/logo/logo3.png" alt=""></a>--}}
                           <div class="vertical-menu mt-10">
                               <span class="categorie-title">  محصولات  </span>
                               <nav>

                                   <ul class="vertical-menu-list menu-hidden">
                                       @foreach(\App\Category::where('category_id',null)->get() as $category)
                                           <li><a href="{{url('category/'.$category->id)}}">
                                                   {{--                                                <span><img src="images/vertical-menu/1.png" alt="menu-icon"></span>--}}
                                                   {{$category->title}}
                                               </a>
                                               <!-- Vertical Mega-Menu Start -->
                                               @if($category->subCategory->count())
                                                   <ul class="ht-dropdown megamenu" style="text-align:right;">
                                                       <li class="megamenu-three-column fix">
                                                           <ul>
                                                               @foreach($category->subCategory as $item)
                                                                   <li>
                                                                       <a href="{{url('category/'.$item->id)}}"><h3>{{$item->title}}</h3></a>
                                                                       @if($item->subCategory->count())
                                                                           <ul>
                                                                               @foreach($item->subCategory as $value)
                                                                                   <li><a href="{{url('category/'.$value->id)}}">{{$value->title}}</a></li>

                                                                               @endforeach

                                                                           </ul>
                                                                       @endif

                                                                   </li>
                                                               @endforeach

                                                           </ul>
                                                       </li>
                                                   </ul>

                                           @endif
                                           <!-- Vertical Mega-Menu End -->
                                           </li>

                                       @endforeach
                                       {{--                                    <li><a href="shop.html"><span><img src="images/vertical-menu/2.png" alt="menu-icon"></span>دسته</a>--}}
                                       {{--                                        <!-- Vertical Mega-Menu Start -->--}}
                                       {{--                                        <ul class="ht-dropdown megamenu">--}}
                                       {{--                                            <!-- Mega-Menu Three Column Start -->--}}
                                       {{--                                            <li class="megamenu-three-column fix">--}}
                                       {{--                                                <ul>--}}
                                       {{--                                                    <!-- Single Column Start -->--}}
                                       {{--                                                    <li>--}}
                                       {{--                                                        <h3>Digital Cameras</h3>--}}
                                       {{--                                                        <ul>--}}
                                       {{--                                                            <li><a href="shop.html">camera one</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">camrea two</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">camera theree</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">camera four</a></li>--}}
                                       {{--                                                        </ul>--}}
                                       {{--                                                    </li>--}}
                                       {{--                                                    <!-- Single Column End -->--}}
                                       {{--                                                    <!-- Single Column Start -->--}}
                                       {{--                                                    <li>--}}
                                       {{--                                                        <h3>Camcorders</h3>--}}
                                       {{--                                                        <ul>--}}
                                       {{--                                                            <li><a href="shop.html">Camcorders new</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">Camcorders old</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">Camcorders hero</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">Camcorders tiny</a></li>--}}
                                       {{--                                                        </ul>--}}
                                       {{--                                                    </li>--}}
                                       {{--                                                    <!-- Single Column End -->--}}
                                       {{--                                                    <!-- Single Column Start -->--}}
                                       {{--                                                    <li>--}}
                                       {{--                                                        <h3>Photo Accessories</h3>--}}
                                       {{--                                                        <ul>--}}
                                       {{--                                                            <li><a href="shop.html">Cords and Cables</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">Microphones</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">gps accessories</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">Wireless Transmitters</a></li>--}}
                                       {{--                                                        </ul>--}}
                                       {{--                                                    </li>--}}
                                       {{--                                                    <!-- Single Column End -->--}}
                                       {{--                                                </ul>--}}
                                       {{--                                            </li>--}}
                                       {{--                                            <!-- Mega-Menu Three Column End -->--}}
                                       {{--                                        </ul>--}}
                                       {{--                                        <!-- Vertical Mega-Menu End -->--}}
                                       {{--                                    </li>--}}
                                       {{--                                    <li><a href="shop.html"><span><img src="images/vertical-menu/3.png" alt="menu-icon"></span>دسته</a>--}}
                                       {{--                                        <!-- Vertical Mega-Menu Start -->--}}
                                       {{--                                        <ul class="ht-dropdown megamenu">--}}
                                       {{--                                            <!-- Mega-Menu Two Column Start -->--}}
                                       {{--                                            <li class="megamenu-three-column fix">--}}
                                       {{--                                                <ul>--}}
                                       {{--                                                    <!-- Single Column Start -->--}}
                                       {{--                                                    <li>--}}
                                       {{--                                                        <h3>new Phones</h3>--}}
                                       {{--                                                        <ul>--}}
                                       {{--                                                            <li><a href="shop.html">phone one</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">phone two</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">phone three</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">phone four</a></li>--}}
                                       {{--                                                        </ul>--}}
                                       {{--                                                    </li>--}}
                                       {{--                                                    <!-- Single Column End -->--}}
                                       {{--                                                    <!-- Single Column Start -->--}}
                                       {{--                                                    <li>--}}
                                       {{--                                                        <h3>motion Phones</h3>--}}
                                       {{--                                                        <ul>--}}
                                       {{--                                                            <li><a href="shop.html">motion phone x</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">motion phone two</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">motion phone new</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">motion g5 </a></li>--}}
                                       {{--                                                        </ul>--}}
                                       {{--                                                    </li>--}}
                                       {{--                                                    <!-- Single Column End -->--}}
                                       {{--                                                    <!-- Single Column Start -->--}}
                                       {{--                                                    <li>--}}
                                       {{--                                                        <h3>modern Phones</h3>--}}
                                       {{--                                                        <ul>--}}
                                       {{--                                                            <li><a href="shop.html">tube phone one</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">tube phone two</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">new phone (16)</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">tube phone three</a></li>--}}
                                       {{--                                                        </ul>--}}
                                       {{--                                                    </li>--}}
                                       {{--                                                    <!-- Single Column End -->--}}
                                       {{--                                                </ul>--}}
                                       {{--                                            </li>--}}
                                       {{--                                            <!-- Mega-Menu Two Column End -->--}}
                                       {{--                                        </ul>--}}
                                       {{--                                        <!-- Vertical Mega-Menu End -->--}}
                                       {{--                                    </li>--}}
                                       {{--                                    <li><a href="shop.html"><span><img src="images/vertical-menu/4.png" alt="menu-icon"></span>دسته</a>--}}
                                       {{--                                        <!-- Vertical Mega-Menu Start -->--}}
                                       {{--                                        <ul class="ht-dropdown megamenu megamenu-four">--}}
                                       {{--                                            <!-- Mega-Menu Three Column Start -->--}}
                                       {{--                                            <li class="megamenu-three-column fix">--}}
                                       {{--                                                <ul>--}}
                                       {{--                                                    <!-- Single Column Start -->--}}
                                       {{--                                                    <li>--}}
                                       {{--                                                        <h3>Towers Only</h3>--}}
                                       {{--                                                        <ul>--}}
                                       {{--                                                            <li><a href="shop.html">On Sale</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">Free Shipping Eligible</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">Clearance</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">3D-Capable</a></li>--}}
                                       {{--                                                        </ul>--}}
                                       {{--                                                    </li>--}}
                                       {{--                                                    <!-- Single Column End -->--}}
                                       {{--                                                    <!-- Single Column Start -->--}}
                                       {{--                                                    <li>--}}
                                       {{--                                                        <h3>Gaming Desktops</h3>--}}
                                       {{--                                                        <ul>--}}
                                       {{--                                                            <li><a href="shop.html">desktop rumer</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">desktop razar</a></li>--}}
                                       {{--                                                            <li><a href="shop.html">Gamer Ultra Desktop </a></li>--}}
                                       {{--                                                            <li><a href="shop.html">Alpha Desktop</a></li>--}}
                                       {{--                                                        </ul>--}}
                                       {{--                                                    </li>--}}
                                       {{--                                                    <!-- Single Column End -->--}}
                                       {{--                                                </ul>--}}
                                       {{--                                            </li>--}}
                                       {{--                                        </ul>--}}
                                       {{--                                        <!-- Vertical Mega-Menu End -->--}}
                                       {{--                                    </li>--}}
                                       {{--                                    <li><a href="shop.html"><span><img src="images/vertical-menu/5.png" alt="menu-icon"></span>دسته</a>--}}
                                       {{--                                    </li>--}}
                                       {{--                                    <li><a href="shop.html"><span><img src="images/vertical-menu/6.png" alt="menu-icon"></span>دسته</a>--}}
                                       {{--                                    </li>--}}
                                       {{--                                    <li><a href="shop.html"><span><img src="images/vertical-menu/7.png" alt="menu-icon"></span>دسته</a></li>--}}
                                       {{--                                    <li><a href="shop.html"><span><img src="images/vertical-menu/8.png" alt="menu-icon"></span>دسته</a></li>--}}
                                   </ul>
                               </nav>
                           </div>
                       </div>
                       <!-- Primary Vertical-Menu End -->
                       <!-- Cartt Box Start -->
                       <div class="col-xs-6 full-col fl-r visible-xs">
                           <div class="cart-box text-right">
                               <ul>
                                   <li><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                   <li><a href="compare.html"><i class="fa fa-signal"></i></a></li>
                                   <li><a href="#"><i class="fa fa-shopping-basket"></i><span class="cart-counter">2</span></a>
                                       <ul class="ht-dropdown main-cart-box">
                                           <li>
                                               <!-- Cart Box Start -->
                                               <div class="single-cart-box">
                                                   <div class="cart-img">
                                                       <a href="#"><img src="images/menu/1.jpg" alt="cart-image"></a>
                                                   </div>
                                                   <div class="cart-content">
                                                       <h6><a href="product.html">Alpha Block Black Polo T-Shirt</a></h6>
                                                       <span>1 × $399.00</span>
                                                   </div>
                                                   <a class="del-icone" href="#"><i class="fa fa-window-close-o"></i></a>
                                               </div>
                                               <!-- Cart Box End -->
                                               <!-- Cart Box Start -->
                                               <div class="single-cart-box">
                                                   <div class="cart-img">
                                                       <a href="#"><img src="images/menu/2.jpg" alt="cart-image"></a>
                                                   </div>
                                                   <div class="cart-content">
                                                       <h6><a href="product.html">Red Printed Round Neck T-Shirt</a></h6>
                                                       <span>2 × $299.00</span>
                                                   </div>
                                                   <a class="del-icone" href="#"><i class="fa fa-window-close-o"></i></a>
                                               </div>
                                               <!-- Cart Box End -->
                                               <!-- Cart Footer Inner Start -->
                                               <div class="cart-footer fix">
                                                   <h5>total :<span class="f-right">$698.00</span></h5>
                                                   <div class="cart-actions">
                                                       <a class="checkout" href="checkout.html">Checkout</a>
                                                   </div>
                                               </div>
                                               <!-- Cart Footer Inner End -->
                                           </li>
                                       </ul>
                                   </li>
                                   <li class="search-bar-xs visible-xs"><a href="#"><i class="fa fa-search"></i></a>
                                       <div class="ht-dropdown search-box-view">
                                           <form action="#">
                                               <input type="text" class="email" placeholder="Search for item..." name="email">
                                               <button type="submit" class="submit"></button>
                                           </form>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                       </div>
                       <!-- Cartt Box End -->
                       <!-- Mobile Menu  Start -->
                       <div class="col-xs-12 visible-xs">
                           <div class="mobile-menu mobile-menu-three ">
                               <nav>
                                   <ul>
                                       <li><a href="index.html">home</a>
                                           <!-- Home Version Dropdown Start -->
                                           <ul>
                                               <li><a href="index.html">Home Version 1</a></li>
                                               <li><a href="index-2.html">Home Version 2</a></li>
                                               <li><a href="index-3.html">Home Version 3</a></li>
                                               <li><a href="index-4.html">Home Version 4</a></li>
                                           </ul>
                                           <!-- Home Version Dropdown End -->
                                       </li>
                                       <li><a href="shop.html">shop</a>
                                           <!-- Mobile Menu Dropdown Start -->
                                           <ul>
                                               <li><a href="product.html">product details</a></li>
                                               <li><a href="compare.html">compare</a></li>
                                               <li><a href="cart.html">cart</a></li>
                                               <li><a href="checkout.html">checkout</a></li>
                                               <li><a href="wishlist.html">wishlist</a></li>
                                           </ul>
                                           <!-- Mobile Menu Dropdown End -->
                                       </li>
                                       <li><a href="blog.html">Blog</a>
                                           <!-- Mobile Menu Dropdown Start -->
                                           <ul>
                                               <li><a href="blog-details.html">blog details</a></li>
                                           </ul>
                                           <!-- Mobile Menu Dropdown End -->
                                       </li>
                                       <li><a href="#">pages</a>
                                           <!-- Mobile Menu Dropdown Start -->
                                           <ul>
                                               <li><a href="login.html">login</a></li>
                                               <li><a href="register.html">register</a></li>
                                               <li><a href="404.html">404</a></li>
                                           </ul>
                                           <!-- Mobile Menu Dropdown End -->
                                       </li>
                                       <li><a href="about.html">about us</a></li>
                                       <li><a href="contact.html">contact us</a></li>
                                   </ul>
                               </nav>
                           </div>
                       </div>
                       <!-- Mobile Menu  End -->

                   </div>
                   <!-- Row End -->
               </div>
               <!-- Container End -->
           </div>
           <!-- Header Bottom End -->
       </div>

    </header>
    <!-- Header Area End -->
    <!-- Mobile Vertical Menu Start -->
    <div class="mobile-vertical-menu visible-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Primary Vertical-Menu Start -->
                    <div class="vertical-menu">
                        <span class="categorie-title">  محصولات  </span>
                        <nav>
                            <ul class="vertical-menu-list menu-hidden">
                                @foreach(\App\Category::where('category_id',null)->get() as $category)
                                    <li><a href="{{url('category/'.$category->id)}}">
                                            {{--                                                <span><img src="images/vertical-menu/1.png" alt="menu-icon"></span>--}}
                                            {{$category->title}}
                                        </a>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                    <!-- Primary Vertical Menu End -->

                        <!-- Container End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Vertical-Menu End -->
