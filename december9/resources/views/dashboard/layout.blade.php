<html>
    <head>
        <title>داشبورد - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    </head>
    <body>
        <div class="page">
			<!-- Sidemenu -->
			<div class="main-sidebar main-sidebar-sticky side-menu">
				<div class="sidemenu-logo">
					<a class="main-logo" href="{{ route('dashboard') }}">
						<img src="{{ asset('images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
						<img src="{{ asset('images/brand/icon.png') }}" class="header-brand-img icon-logo" alt="logo">
						<img src="{{ asset('images/brand/logo-light.png') }}" class="header-brand-img desktop-logo theme-logo" alt="logo">
						<img src="{{ asset('images/brand/icon-light.png') }}" class="header-brand-img icon-logo theme-logo" alt="logo">
					</a>
				</div>
				<div class="main-sidebar-body">
					<ul class="nav">
                        <li class="nav-label">داشبورد</li>
                        <li class="nav-item show">
							<a class="nav-link" href="{{ route('dashboard') }}"><i class="fa fa-home"></i><span class="sidemenu-label">داشبورد</span></a>
                        </li>


						<li class="nav-label">محصولات</li>


                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.product.index') }}"><i class="fa fa-list"></i><span class="sidemenu-label">لیست محصولات</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.product.create') }}"><i class="fa fa-plus-square"></i><span class="sidemenu-label">افزودن محصول</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.category.index') }}"><i class="fa fa-spinner"></i><span class="sidemenu-label">دسته بندی</span></a>
                        </li>


						</li>
						<li class="nav-label">برگه ها </li>

						<li class="nav-item">
							<a class="nav-link" href="{{ route('pages') }}"><i class="fa fa-file"></i><span class="sidemenu-label">همه برگه ها</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('page-create') }}"><i class="fa fa-plus-square"></i><span class="sidemenu-label">افزودن برگه</span></a>
						</li>
						<li class="nav-label">نوشته ها</li>

							<li class="nav-item">
								<a class="nav-link" href="{{ route('admin.news.index') }}"><i class="fa fa-newspaper"></i><span class="sidemenu-label">خبرها</span></a>

							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('admin.news.create') }}"><i class="fa fa-plus-square"></i><span class="sidemenu-label">افزودن خبر</span></a>

							</li>



						<li class="nav-label">برند</li>

							<li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.brand.index') }}"><i class="fa fa-certificate"></i><span class="sidemenu-label">برند</span></a>

							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('admin.brand.create') }}"><i class="fa fa-plus-square"></i><span class="sidemenu-label">افزودن برند</span></a>

							</li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.country.index') }}"><i class="fas fa-globe"></i><span class="sidemenu-label"> کشور</span></a>

                            </li>


                        @if(auth()->check() && auth()->user()->isSuperUser)
                            <li class="nav-label">احراز هویت</li>

                            <li class="nav-item show">
                                <a class="nav-link" href="{{ route('users') }}"><i class="fa fa-users"></i><span class="sidemenu-label">کاربران</span></a>
                            </li>
                        @endif



						<li class="nav-label">تنظیمات</li>

						<li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.setting.index') }}"><i class="fa fa-cogs"></i><span class="sidemenu-label">تنظیمات</span></a>

						</li>
                        <li class="nav-label">سرچ</li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.search.index') }}"><i class="fa fa-certificate"></i><span class="sidemenu-label">سرچ</span></a>

                        </li>


                    </ul>
                </div>
            </div>

            <div class="main-content side-content pt-0">
                <div class="main-header side-header sticky">
					<div class="container-fluid">
						<div class="main-header-left">
							<a class="main-logo d-lg-none" href="{{ route('dashboard') }}">
								<img src="assets/img/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
								<img src="assets/img/brand/icon.png" class="header-brand-img icon-logo" alt="logo">
								<img src="assets/img/brand/logo-light.png" class="header-brand-img desktop-logo theme-logo" alt="logo">
								<img src="assets/img/brand/icon-light.png" class="header-brand-img icon-logo theme-logo" alt="logo">
							</a>
							<a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
						</div>
						<div class="main-header-right">
							<div class="dropdown d-md-flex header-search">
								<a class="nav-link icon header-search">
									<i class="fa fa-search"></i>
								</a>
								<div class="dropdown-menu">
									<div class="main-form-search p-2">
										<input class="form-control" placeholder="جستجو" type="search">
										<button class="btn"><i class="fa fa-search"></i></button>
									</div>
								</div>
							</div>
							<div class="dropdown d-md-flex">
								<a class="nav-link icon full-screen-link">
									<i class="fa fa-window-maximize fullscreen-button"></i>
								</a>
							</div>
							<div class="dropdown main-header-notification">
								<a class="nav-link icon" href="#">
									<i class="fa fa-bell"></i>
									<span class="pulse bg-danger"></span>
								</a>
								<div class="dropdown-menu">
									<div class="header-navheading">
										<p class="main-notification-text">شما یک پیام نخوانده دارید<span class="badge badge-pill badge-primary mr-3">دیدن همه</span></p>
									</div>
									<div class="main-notification-list">
										<div class="media new">
											<div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg"></div>
											<div class="media-body">
												<p>Congratulate <strong>Olivia James</strong> for New template start</p><span>Oct 15 12:32pm</span>
											</div>
										</div>


									</div>
									<div class="dropdown-footer">
										<a href="#">View All Notifications</a>
									</div>
								</div>
							</div>
							<div class="dropdown main-profile-menu">
								<a class="main-img-user" href="#"><img alt="avatar" src="{{ asset('images/users/1.jpg') }}"></a>
								<div class="dropdown-menu">
									<div class="header-navheading">
										<h6 class="main-notification-title">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h6>
										<p class="main-notification-text">Web Designer</p>
									</div>
									<a class="dropdown-item border-top" href="{{ route('profile') }}">
										<i class="fa fa-user"></i> پروفایل من
									</a>
									<a class="dropdown-item" href="#">
										<i class="fa fa-edit"></i> ویرایش پروفایل
									</a>
									<a class="dropdown-item" href="#">
										<i class="fa fa-cogs"></i> تنظیمات حساب کاربری
									</a>
									<a class="dropdown-item" href="#">
										<i class="fa fa-cog"></i> حمایت
									</a>
									<a class="dropdown-item" href="#">
										<i class="fa fa-compass"></i> فعالیت های شما
									</a>
									<a class="dropdown-item" href="{{ route('logout') }}">
										<i class="fa fa-sign-out-alt"></i> خروج
									</a>
								</div>
							</div>
						</div>
					</div>
                </div>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <div class="main-footer text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<span>Copyright © 2019 <a href="#">سپاهان الکتریک</a> All rights reserved.</span>
						</div>
					</div>
				</div>
			</div>


        </div>



        <script type="text/javascript" src="{{ asset('js/dashboard.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
        <script>
            CKEDITOR.replace('description', {
                language: 'fa'
            });
        </script>
        {!! Menu::scripts() !!}
    </body>
</html>
