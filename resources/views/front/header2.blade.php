        <!-- Header Area Start -->
        <header>
            <!-- Header Top Start -->
            <div class="header-top off-white-bg">
                <div class="container">
                    <!-- Header Top left Start -->
                    <div class="header-top-left f-left">
                        <ul class="header-list-menu">

                            <!-- Language Start -->
                            <li><a href="#">انگلیسی<i class="fa fa-angle-down"></i></a>
                                <ul class="ht-dropdown">
                                    <li><a href="#">فارسی</a></li>
                                    <li><a href="#">فرانسه</a></li>
                                    <li><a href="#">عربی</a></li>
                                </ul>
                            </li>
                            <!-- Language End -->
                        </ul>
                        <!-- Header-list-menu End -->
                    </div>
                    <!-- Header Top left End -->
                    <!-- Header Top Right Start -->
                    <div class="header-top-right f-right" style="float:left !important;">
                        <ul class="header-list-menu right-menu">
                            <li class="hidden-xs"><span><i class="fa fa-phone"></i> تلفن پشتیبانی ۰۹۱۲۳۴۵۶۷۸۹ -به سپاهان الکتریک خوش امدید</span></li>

                        </ul>
                        <!-- Header-list-menu End -->
                    </div>
                    <!-- Header Top Right End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End -->
            <!-- Header Middle Start -->
            <div class="header-middle white-bg header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Logo Start -->
                            <div class="logo pull-right hidden-xs">
                                <a href="index.html"><img src="/images/logo/logo.png" alt="logo-image"></a>
                            </div>
                            <!-- Logo End -->
                            <div class="col-xs-6 visible-xs full-col plr-0">
                                <!-- Logo Start -->
                                <div class="logo mt-12">
                                    <a href="index.html"><img src="{{ asset('/images/logo/logo.png') }}" alt="logo-image"></a>
                                </div>
                                <!-- Logo End -->
                            </div>
                            <!-- Header Middle Menu Start -->
                            <div class="middle-menu hidden-xs pull-rightt">
                                <nav>
                                    <ul class="middle-menu-list">
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


                                    </ul>
                                </nav>
                            </div>
                            <!-- Header Middle Menu End -->
                        </div>
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
                                                        <a href="#"><img src="{{ asset('/images/menu/1.jpg') }}" alt="cart-image"></a>
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
                                                        <a href="#"><img src="{{ asset('/images/menu/2.jpg') }}" alt="cart-image"></a>
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
                            <div class="mobile-menu">
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
            <!-- Header Middle End -->
            <!-- Header Bottom Start -->
            <div class="header-bottom black-bg hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 visible-xs full-col">
                            <!-- Logo Start -->
                            <div class="logo mt-10">
                                <a href="index.html"><img src="img/logo/logo.png" alt="logo-image"></a>
                            </div>
                            <!-- Logo End -->
                        </div>
                        <!-- Primary Vertical-Menu Start -->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 full-col fl-r">

                        </div>

                        <!-- Primary Vertical-Menu End -->
                        <!-- Search Box Start -->
                        <div class="col-lg-6 col-md-6 col-sm-5 hidden-xs ">
                            <div class="search-box-view fix">
                                <form action="#">
                                    <input type="text" class="email" placeholder="سرچ محصولات ..." name="email">
                                    <button type="submit" class="submit"></button>
                                </form>
                            </div>
                        </div>
                        <!-- Search Box End -->
                        <!-- Cartt Box Start -->
                        <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs">
                            <div class="vertical-menu">
                                <span class="categorie-title">محصولات </span>
                                <nav>
                                    <ul class="vertical-menu-list menu-hidden">
                                        <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/1.png') }}" alt="menu-icon"></span>Computer</a>
                                            <!-- Vertical Mega-Menu Start -->
                                            <ul class="ht-dropdown megamenu">
                                                <!-- Mega-Menu Three Column Start -->
                                                <li class="megamenu-three-column fix">
                                                    <ul>
                                                        <!-- Single Column Start -->
                                                        <li>
                                                            <h3>laptops</h3>
                                                            <ul>
                                                                <li><a href="shop.html">Best Laptops Price</a></li>
                                                                <li><a href="shop.html">New Laptops Price</a></li>
                                                                <li><a href="shop.html">Middle Laptops Price</a></li>
                                                                <li><a href="shop.html">Gaming Laptops Price</a></li>
                                                            </ul>
                                                        </li>
                                                        <!-- Single Column End -->
                                                        <!-- Single Column Start -->
                                                        <li>
                                                            <h3>monitors</h3>
                                                            <ul>
                                                                <li><a href="shop.html">Hd monitors</a></li>
                                                                <li><a href="shop.html">new monitors</a></li>
                                                                <li><a href="shop.html">dual monitors</a></li>
                                                                <li><a href="shop.html">qhd monitors</a></li>
                                                            </ul>
                                                        </li>
                                                        <!-- Single Column End -->
                                                        <!-- Single Column Start -->
                                                        <li>
                                                            <h3>ram / memory</h3>
                                                            <ul>
                                                                <li><a href="shop.html">memory one</a></li>
                                                                <li><a href="shop.html">memory two</a></li>
                                                                <li><a href="shop.html">memory three</a></li>
                                                                <li><a href="shop.html">memory four</a></li>
                                                            </ul>
                                                        </li>
                                                        <!-- Single Column End -->
                                                    </ul>
                                                </li>
                                                <!-- Mega-Menu Three Column End -->
                                            </ul>
                                            <!-- Vertical Mega-Menu End -->
                                        </li>
                                        <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/2.png') }}" alt="menu-icon"></span>Kitchen</a>
                                            <!-- Vertical Mega-Menu Start -->
                                            <ul class="ht-dropdown megamenu">
                                                <!-- Mega-Menu Three Column Start -->
                                                <li class="megamenu-three-column fix">
                                                    <ul>
                                                        <!-- Single Column Start -->
                                                        <li>
                                                            <h3>Digital Cameras</h3>
                                                            <ul>
                                                                <li><a href="shop.html">camera one</a></li>
                                                                <li><a href="shop.html">camrea two</a></li>
                                                                <li><a href="shop.html">camera theree</a></li>
                                                                <li><a href="shop.html">camera four</a></li>
                                                            </ul>
                                                        </li>
                                                        <!-- Single Column End -->
                                                        <!-- Single Column Start -->
                                                        <li>
                                                            <h3>Camcorders</h3>
                                                            <ul>
                                                                <li><a href="shop.html">Camcorders new</a></li>
                                                                <li><a href="shop.html">Camcorders old</a></li>
                                                                <li><a href="shop.html">Camcorders hero</a></li>
                                                                <li><a href="shop.html">Camcorders tiny</a></li>
                                                            </ul>
                                                        </li>
                                                        <!-- Single Column End -->
                                                        <!-- Single Column Start -->
                                                        <li>
                                                            <h3>Photo Accessories</h3>
                                                            <ul>
                                                                <li><a href="shop.html">Cords and Cables</a></li>
                                                                <li><a href="shop.html">Microphones</a></li>
                                                                <li><a href="shop.html">gps accessories</a></li>
                                                                <li><a href="shop.html">Wireless Transmitters</a></li>
                                                            </ul>
                                                        </li>
                                                        <!-- Single Column End -->
                                                    </ul>
                                                </li>
                                                <!-- Mega-Menu Three Column End -->
                                            </ul>
                                            <!-- Vertical Mega-Menu End -->
                                        </li>
                                        <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/3.png') }}" alt="menu-icon"></span>Smart Phone</a>
                                            <!-- Vertical Mega-Menu Start -->
                                            <ul class="ht-dropdown megamenu">
                                                <!-- Mega-Menu Two Column Start -->
                                                <li class="megamenu-three-column fix">
                                                    <ul>
                                                        <!-- Single Column Start -->
                                                        <li>
                                                            <h3>new Phones</h3>
                                                            <ul>
                                                                <li><a href="shop.html">phone one</a></li>
                                                                <li><a href="shop.html">phone two</a></li>
                                                                <li><a href="shop.html">phone three</a></li>
                                                                <li><a href="shop.html">phone four</a></li>
                                                            </ul>
                                                        </li>
                                                        <!-- Single Column End -->
                                                        <!-- Single Column Start -->
                                                        <li>
                                                            <h3>motion Phones</h3>
                                                            <ul>
                                                                <li><a href="shop.html">motion phone x</a></li>
                                                                <li><a href="shop.html">motion phone two</a></li>
                                                                <li><a href="shop.html">motion phone new</a></li>
                                                                <li><a href="shop.html">motion g5 </a></li>
                                                            </ul>
                                                        </li>
                                                        <!-- Single Column End -->
                                                        <!-- Single Column Start -->
                                                        <li>
                                                            <h3>modern Phones</h3>
                                                            <ul>
                                                                <li><a href="shop.html">tube phone one</a></li>
                                                                <li><a href="shop.html">tube phone two</a></li>
                                                                <li><a href="shop.html">new phone (16)</a></li>
                                                                <li><a href="shop.html">tube phone three</a></li>
                                                            </ul>
                                                        </li>
                                                        <!-- Single Column End -->
                                                    </ul>
                                                </li>
                                                <!-- Mega-Menu Two Column End -->
                                            </ul>
                                            <!-- Vertical Mega-Menu End -->
                                        </li>
                                        <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/4.png') }}" alt="menu-icon"></span>Fashion</a>
                                            <!-- Vertical Mega-Menu Start -->
                                            <ul class="ht-dropdown megamenu megamenu-four">
                                                <!-- Mega-Menu Three Column Start -->
                                                <li class="megamenu-three-column fix">
                                                    <ul>
                                                        <!-- Single Column Start -->
                                                        <li>
                                                            <h3>Towers Only</h3>
                                                            <ul>
                                                                <li><a href="shop.html">On Sale</a></li>
                                                                <li><a href="shop.html">Free Shipping Eligible</a></li>
                                                                <li><a href="shop.html">Clearance</a></li>
                                                                <li><a href="shop.html">3D-Capable</a></li>
                                                            </ul>
                                                        </li>
                                                        <!-- Single Column End -->
                                                        <!-- Single Column Start -->
                                                        <li>
                                                            <h3>Gaming Desktops</h3>
                                                            <ul>
                                                                <li><a href="shop.html">desktop rumer</a></li>
                                                                <li><a href="shop.html">desktop razar</a></li>
                                                                <li><a href="shop.html">Gamer Ultra Desktop </a></li>
                                                                <li><a href="shop.html">Alpha Desktop</a></li>
                                                            </ul>
                                                        </li>
                                                        <!-- Single Column End -->
                                                    </ul>
                                                </li>
                                            </ul>
                                            <!-- Vertical Mega-Menu End -->
                                        </li>
                                        <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/5.png') }}" alt="menu-icon"></span>Tablet</a>
                                        </li>
                                        <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/6.png') }}" alt="menu-icon"></span>Electtronic</a>
                                        </li>
                                        <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/7.png') }}" alt="menu-icon"></span>Books</a></li>
                                        <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/8.png') }}" alt="menu-icon"></span>Sports</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Cartt Box End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Bottom End -->
        </header>
        <!-- Header Area End -->
        <!-- Mobile Vertical Menu Start -->
        <div class="mobile-vertical-menu visible-xs vertical-style-one">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Primary Vertical-Menu Start -->
                        <div class="vertical-menu">
                            <span class="categorie-title">all Categories </span>
                            <nav>
                                <ul class="vertical-menu-list menu-hidden">
                                    <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/1.png') }}" alt="menu-icon"></span>Computer</a></li>
                                    <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/2.png') }}" alt="menu-icon"></span>Kitchen</a></li>
                                    <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/3.png') }}" alt="menu-icon"></span>Smart Phone</a></li>
                                    <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/4.png') }}" alt="menu-icon"></span>Fashion</a></li>
                                    <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/5.png') }}" alt="menu-icon"></span>Tablet</a></li>
                                    <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/6.png') }}" alt="menu-icon"></span>Electtronic</a></li>
                                    <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/7.png') }}" alt="menu-icon"></span>Books</a></li>
                                    <li><a href="shop.html"><span><img src="{{ asset('/images/vertical-menu/8.png') }}" alt="menu-icon"></span>Sports</a></li>
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
