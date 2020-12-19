<!-- Signup Newsletter Start -->
<div class="newsletter">
            <div class="container">
                <div class="row">

                    <div class="col-md-5">
                        <div class="newsletter-box">
                            <form action="#">
                                <input class="subscribe" placeholder="ایمیل خود را وارد نمایید" name="email" id="subscribe" type="text">
                                <button type="submit" class="submit">ثبت نام</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="main-news-desc">
                            <div class="news-desc">
                                <h3>اشتراک در <span>خبرنامه</span></h3>
                                <p>ایمیل خود را وارد نمایید تا از اخرین اخبار مطلع شوید</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Signup-Newsletter End -->
        <footer class="black-o-bg">
            <!-- Footer Top Start -->
            <div class="footer-top ptb-75">
                <div class="container">
                    <div class="row">
                        <!-- Single Footer Start -->

                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-md-2 col-sm-4 col-xs-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">لینک ها میانبر</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
{{--                                        {{!! isset($settings['footer_1'])?$settings['footer_1']:''!!}}--}}

                                        <li><a href="#">درباره ما</a></li>
                                        <li><a href="#">تماس با ما</a></li>
                                        <li><a href="#">اخبار</a></li>
                                        <li><a href="#">نمایشگاه</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-md-2 col-sm-4 col-xs-6 footer-full">
                            <div class="single-footer">
                               @php
                                    $set=\App\Setting::find(8);
                               @endphp
                               {!! $set->value !!}

                                <h3 class="footer-title">برند </h3>
                                <div class="footer-content">
                                    <ul class="footer-list">

                                        <li><a href="">برند </a></li>
                                        <li><a href="#">برند</a></li>
                                        <li><a href="#">برند</a></li>
                                        <li><a href="#">برند</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-md-2 col-sm-4 col-xs-6 footer-full">
                            <div class="single-footer">
                                <h3 class="footer-title">محصولات </h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
{{--                                        {{!! isset($settings['footer_3'])?$settings['footer_3']:''!!}}--}}

                                        <li><a href="">دسته ۱</a></li>
                                        <li><a href="#">دسته ۱</a></li>
                                        <li><a href="#">دسته ۱</a></li>
                                        <li><a href="#">دسته ۱</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-md-2 col-sm-4 col-xs-6 footer-full">
                            <div class="single-footer">

                            </div>
                        </div>
                        <!-- Single Footer Start -->

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-footer">
                                <h3>درباره ما</h3>
                                <div class="footer-content">
                                    <p>سپاهان الکتریک فروشنده لوازم برق صنعتی و سازنده تابلوهای برق فشار ضعیف و متوسط در انواع متفاوت با توجه به نیاز مصرف کنندگان است. در حال حاضر عمده فعالیت این مؤسسه در زمینه اتصالات برق صنعتی، تابلوها و جعبه تقسیم های ضد آب و ضد انفجار و ..</p>
                                   <br>
                                    <div class="footer-social-content ">
                            <ul class="social-content-list">
                                <li>
                                    {{\App\Setting::find(1)->url}}<i class="fa fa-instagram"></i></a></li>
                                <li>
                                <li>
                                    <a href="{{!! isset($settings['twitter'])?$settings['twitter']:''!!}}"><i class="fa fa-twitter"></i></a></li>
                                </li>
                                <li>
                                    <a href="{{!! isset($settings['facebook'])?$settings['facebook']:''!!}}"><i class="fa fa-facebook"></i></a></li>

                                </li>
                                <li>
                                    <a href="{{!! isset($settings['linkedin'])?$settings['linkedin']:''!!}}"><i class="fa fa-linkedin"></i></a></li>
                                </li>
                                <li>
                                    <a href="{{!! isset($settings['Telegram'])?$settings['Telegram']:''!!}}"><i class="fa fa-telegram"></i></a></li>
                                </li>
                            </ul>
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Top End -->
            <!-- Footer Middle Start -->

            <!-- Footer Middle End -->
            <!-- Footer Bottom Start -->
            <div class="footer-bottom ptb-40">
                <div class="container">
                    <div class="footer-bottom-content text-right">
                        <p class="pt-10">کلیه حقوق مادی و معنوی این وب سایت برای شرکت <a href="#"> سپاهان الکتریک</a> محفوظ می باشد.   </p>

                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Bottom End -->
        </footer>
        <!-- Footer End -->
