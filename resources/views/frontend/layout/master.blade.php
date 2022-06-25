<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ایروایس - قالب تعمیرات</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="front/assets/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/backToTop.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/main.css') }}">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->

    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header area start here -->
    <header>
        <div class="header-top header-top-3 black-soft-bg d-none d-lg-block">
            <div class="custom-container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-4">
                        <div class="header-top-left header-top-left-3">
                            <span><i class="flaticon-return-of-investment"></i> ما هزینه اضافی دریافت نمی کنیم</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="header-top-right header-top-right-3">
                            <ul>
                                <li class="header--terms">
                                    <a href="about.html">درباره ما</a>
                                    <a href="about.html">شرایط و ضوابط</a>
                                    <a href="contact.html">درخواست آنلاین</a>
                                </li>
                                <li class="header--social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-google"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom-3 d-none d-lg-block">
            <div class="custom-container">
                <div class="row align-items-center">
                    <div class="col-xxl-2 col-xl-2 col-lg-3">
                        <div class="header-logo pt-30 pb-30">
                            <a href="index.html"><img src="{{ asset('front/assets/img/logo/logo.png') }}" class="img-fluid"
                                    alt="img"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-9">
                        <div class="header-bottom-right text-end">
                            <div class="header__widget text-start">
                                <div class="header__widget--icon">
                                    <i class=""><svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="36px" height="43px">
                                            <path fill-rule="evenodd" fill="rgb(255, 102, 0)"
                                                d="M33.018,26.645 C31.263,29.365 28.965,31.759 26.533,34.291 C24.113,36.808 21.612,39.413 19.600,42.439 C19.369,42.785 18.974,42.993 18.543,42.993 L17.456,42.993 C17.025,42.993 16.630,42.785 16.399,42.439 C14.388,39.414 11.886,36.811 9.467,34.291 C7.032,31.757 4.735,29.365 2.981,26.645 C0.978,23.542 0.003,20.414 -0.000,17.084 C0.005,12.518 1.880,8.225 5.279,4.997 C8.677,1.770 13.195,-0.009 18.000,-0.009 C22.804,-0.009 27.321,1.770 30.720,4.997 C34.119,8.225 35.993,12.518 35.999,17.084 C35.996,20.413 35.021,23.542 33.018,26.645 ZM18.000,2.370 C9.463,2.370 2.510,8.971 2.500,17.088 C2.507,23.520 6.587,27.768 11.312,32.688 C13.433,34.895 15.624,37.177 17.540,39.782 L17.999,40.405 L18.459,39.782 C20.376,37.174 22.567,34.895 24.686,32.688 C29.411,27.768 33.492,23.520 33.498,17.084 C33.489,8.971 26.536,2.370 18.000,2.370 ZM27.107,20.894 C26.986,20.894 26.865,20.877 26.747,20.842 C26.087,20.653 25.711,19.991 25.909,19.362 C26.139,18.633 26.256,17.872 26.256,17.103 C26.256,12.776 22.552,9.254 18.000,9.254 C13.447,9.254 9.743,12.776 9.743,17.103 C9.743,21.430 13.447,24.952 18.000,24.952 C18.770,24.952 19.532,24.851 20.265,24.654 C20.378,24.622 20.493,24.607 20.608,24.607 C21.163,24.607 21.658,24.962 21.810,25.472 C21.901,25.776 21.862,26.098 21.700,26.374 C21.537,26.652 21.271,26.852 20.950,26.938 C19.994,27.198 19.002,27.329 18.000,27.329 C12.068,27.329 7.243,22.742 7.243,17.103 C7.243,11.464 12.068,6.879 18.000,6.879 C23.931,6.879 28.756,11.464 28.756,17.103 C28.756,18.105 28.604,19.091 28.304,20.044 C28.147,20.542 27.655,20.894 27.107,20.894 Z" />
                                        </svg></i>
                                </div>
                                <div class="header__widget--text">
                                    <span>تماس با ما</span>
                                    <h4>ایران، کرج، پلاک 14</h4>
                                </div>
                            </div>
                            <div class="header__widget text-start">
                                <div class="header__widget--icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="header__widget--text">
                                    <span>پشتیبانی آنلاین</span>
                                    <h4><a
                                            href="https://themepure.net/cdn-cgi/l/email-protection#cfa6a1a9a08fbcb6aca7a0fdfbe1aca0a2"><span
                                                class="__cf_email__"
                                                data-cfemail="bfd6d1d9d0ffccc6dcd7d08d8b91dcd0d2">[ایمیل&#160;محافظت
                                                شده]</span></a></h4>
                                </div>
                            </div>
                            <div class="header__widget text-start">
                                <div class="header__widget--icon header__widget--icon__phone">
                                    <i class="flaticon-contact"></i>
                                </div>
                                <div class="header__widget--text">
                                    <span>تماس با ما</span>
                                    <h4><a href="tel:12345626475">02-365-632-2350</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="header-menu header-sticky header-menu-2 header-menu-3 z-index d-none d-lg-block">
            <div class="custom-container">
                <div class="header-menu-bg-3">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-8 col-4">
                            <div class="main-menu main-menu-3 d-none d-lg-block">
                                <nav id="mobile-menu">
                                    {{-- <ul>
                                        <li class="menu-item-has-children"><a href="index.html">خانه</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">استایل خانه 1</a></li>
                                                <li><a href="index-2.html">استایل خانه 2</a></li>
                                                <li><a href="index-3.html">استایل خانه 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="service.html">خدمات</a>
                                            <ul class="sub-menu">
                                                <li><a href="service.html">خدمات</a></li>
                                                <li><a href="service-details.html">جزئیات خدمات</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="project.html">پروژه</a>
                                            <ul class="sub-menu">
                                                <li><a href="project.html">پروژه</a></li>
                                                <li><a href="project-details.html">جزئیات پروژه</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">صفحات</a>
                                            <ul class="sub-menu">
                                                <li><a href="about.html">درباره ما</a></li>
                                                <li><a href="choose.html">چرا انتخاب ما</a></li>
                                                <li><a href="team.html">تیم ما</a></li>
                                                <li><a href="team-details.html">جزئیات تیم ما</a></li>
                                                <li><a href="price.html">قیمت ها</a></li>
                                                <li><a href="faq.html">سوالات متداول</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="blog.html">وبلاگ</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">وبلاگ گرید</a></li>
                                                <li><a href="blog-sidebar.html">وبلاگ با سایدبار</a></li>
                                                <li><a href="blog-details.html">جزئیات وبلاگ</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">تماس با ما</a></li>
                                    </ul> --}}
                                </nav>
                            </div>
                            <div class="side-menu-icon d-lg-none text-end">
                                <button class="side-toggle side-toggle-3"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                            <div class="header-right header-right-2 text-end">
                                <ul class="z-index">
                                    <li><a href="contact.html" class="theme-btn">حادثه</a></li>
                                    <li><a href="contact.html" class="theme-btn">عضویت</a></li>
                                    <li><a href="contact.html" class="theme-btn">تماس</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile-header header-sticky z-index d-lg-none">
            <div class="custom-container">
                <div class="header-menu-bg-33">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="header-logo pt-30 pb-30">
                                <a href="index.html"><img src="{{ asset('front/assets/img/logo/logo.png') }}" class="img-fluid"
                                        alt="img"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-4">
                            <div class="main-menu main-menu-3 d-none d-lg-block">
                                <nav>
                                    <ul>
                                        <li class="menu-item-has-children"><a href="index.html">خانه</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">استایل خانه 1</a></li>
                                                <li><a href="index-2.html">استایل خانه 2</a></li>
                                                <li><a href="index-3.html">استایل خانه 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="service.html">خدمات</a>
                                            <ul class="sub-menu">
                                                <li><a href="service.html">خدمات</a></li>
                                                <li><a href="service-details.html">جزئیات خدمات</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="project.html">پروژه</a>
                                            <ul class="sub-menu">
                                                <li><a href="project.html">پروژه</a></li>
                                                <li><a href="project-details.html">جزئیات پروژه</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">صفحات</a>
                                            <ul class="sub-menu">
                                                <li><a href="about.html">درباره ما</a></li>
                                                <li><a href="choose.html">چرا انتخاب ما</a></li>
                                                <li><a href="team.html">تیم ما</a></li>
                                                <li><a href="team-details.html">جزئیات تیم ما</a></li>
                                                <li><a href="price.html">قیمت ها</a></li>
                                                <li><a href="faq.html">سوالات متداول</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="blog.html">وبلاگ</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">وبلاگ گرید</a></li>
                                                <li><a href="blog-sidebar.html">وبلاگ با سایدبار</a></li>
                                                <li><a href="blog-details.html">جزئیات وبلاگ</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">تماس با ما</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="side-menu-icon d-lg-none text-end">
                                <button class="side-toggle side-toggle-3"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="fix">
        <div class="side-info">
            <button class="side-info-close"><i class="fal fa-times"></i></button>
            <div class="side-info-content">
                <div class="mobile-menu"></div>
                <div class="contact-infos mb-30">
                    <div class="contact-list mb-30">
                        <h4>اطلاعات تماس</h4>
                        <ul>
                            <li><i class="flaticon-history"></i>شنبه تا چهارشنبه</li>
                            <li><i class="flaticon-pin"></i>ایران، کرج، پلاک 14</li>
                            <li><i class="fal fa-envelope"></i><a
                                    href="https://themepure.net/cdn-cgi/l/email-protection#432a2d252c03303a202b2c71776d202c2e"><span
                                        class="__cf_email__"
                                        data-cfemail="076e69616847747e646f6835332964686a">[ایمیل&#160;محافظت
                                        شده]</span></a></li>
                        </ul>
                        <div class="sidebar__menu--social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <!-- header area end here -->

    <main>
        <!-- hero area start here -->
        <section class="slider-area-3 position-relative">
            <div class="slider-active swiper-container common-dots">
                <div class="swiper-wrapper">
                    <div class="single-slider-3 slider-height-3 slider-overlay swiper-slide"
                        data-swiper-autoplay="15000">
                        <i class="flaticon-air-conditioner slider__icon slider__icon1"></i>
                        <i class="flaticon-heating slider__icon slider__icon2"></i>
                        <i class="flaticon-vacuum-cleaner slider__icon slider__icon3"></i>
                        <div class="slide-bg" data-background="{{ asset('front/assets/img/hero/slider-bg-3.jpg') }}"></div>
                        <div class="slide-bg-pt" data-background="{{ asset('front/assets/img/hero/ddd.png') }}"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="aslider aslider-3 text-center pt-250 z-index">
                                        <h4 class="aslider--date" data-animation="fadeInUp" data-delay=".3s">از
                                            <span>ثثثث </span>
                                        </h4>
                                        <h2 class="aslider--title aslider--title__3 mb-35 text-white"
                                            data-animation="fadeInUp" data-delay=".5s">خدمات تعمیراتی <br> مطمئن</h2>
                                        <h3 class="aslider--subtitle aslider--subtitle__3 mb-50 text-white"
                                            data-animation="fadeInUp" data-delay=".8s">در نوک انگشتان شما کلید خنک
                                            کننده بوده است </h3>
                                        <div class="aslider--btn" data-animation="fadeInUp" data-delay="1.1s">
                                            <a href="service.html" class="theme-btn">بررسی خدمات</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider-3 slider-height-3 slider-overlay swiper-slide"
                        data-swiper-autoplay="15000">
                        <i class="flaticon-air-conditioner slider__icon slider__icon1"></i>
                        <i class="flaticon-heating slider__icon slider__icon2"></i>
                        <i class="flaticon-vacuum-cleaner slider__icon slider__icon3"></i>
                        <div class="slide-bg" data-background="{{ asset('front/assets/img/hero/slider-bg-4.jpg') }}"></div>
                        <div class="slide-bg-pt" data-background="front/assets/img/hero/ddd.png"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="aslider aslider-3 text-center pt-250 z-index">
                                        <h4 class="aslider--date" data-animation="fadeInUp" data-delay=".3s">از
                                            <span>2010</span>
                                        </h4>
                                        <h2 class="aslider--title aslider--title__3 mb-35 text-white"
                                            data-animation="fadeInUp" data-delay=".5s">خدمات تعمیراتی <br> مطمئن</h2>
                                        <h3 class="aslider--subtitle aslider--subtitle__3 mb-50 text-white"
                                            data-animation="fadeInUp" data-delay=".8s">در نوک انگشتان شما کلید خنک
                                            کننده بوده است </h3>
                                        <div class="aslider--btn" data-animation="fadeInUp" data-delay="1.1s">
                                            <a href="service.html" class="theme-btn">بررسی خدمات</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider-3 slider-height-3 slider-overlay swiper-slide"
                        data-swiper-autoplay="15000">
                        <i class="flaticon-air-conditioner slider__icon slider__icon1"></i>
                        <i class="flaticon-heating slider__icon slider__icon2"></i>
                        <i class="flaticon-vacuum-cleaner slider__icon slider__icon3"></i>
                        <div class="slide-bg" data-background="{{ asset('front/assets/img/hero/slider-bg-5.jpg') }}"></div>
                        <div class="slide-bg-pt" data-background="{{ asset('front/assets/img/hero/ddd.png') }}"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="aslider aslider-3 text-center pt-250 z-index">
                                        <h4 class="aslider--date" data-animation="fadeInUp" data-delay=".3s">از
                                            <span>2010</span>
                                        </h4>
                                        <h2 class="aslider--title aslider--title__3 mb-35 text-white"
                                            data-animation="fadeInUp" data-delay=".5s">خدمات تعمیراتی <br> مطمئن</h2>
                                        <h3 class="aslider--subtitle aslider--subtitle__3 mb-50 text-white"
                                            data-animation="fadeInUp" data-delay=".8s">در نوک انگشتان شما کلید خنک
                                            کننده بوده است </h3>
                                        <div class="aslider--btn" data-animation="fadeInUp" data-delay="1.1s">
                                            <a href="service.html" class="theme-btn">بررسی خدمات</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-paginations slide-dots"></div>
            </div>
            <div class="slide-shape"><img src="{{ asset('front/assets/img/hero/shape.png') }}" class="img-fluid" alt="img"></div>
        </section>
        <!-- hero area end here -->


        <!-- about area start here -->
        <section class="about-area-3 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="acontact__form mr-70 wow fadeInUp" data-wow-delay=".3s">
                            <h3 class="acontact__form--title">برآورد رایگان</h3>
                            <form action="#">
                                <input type="text" name="Name" placeholder="نام شما">
                                <input type="text" name="Number" placeholder="تلفن">
                                <div class="select__field--arrow">
                                    <select name="Subject">
                                        <option value="">انتخاب خدمات</option>
                                        <option value="">انتخاب خدمات</option>
                                        <option value="">انتخاب خدمات</option>
                                        <option value="">انتخاب خدمات</option>
                                        <option value="">انتخاب خدمات</option>
                                        <option value="">انتخاب خدمات</option>
                                    </select>
                                </div>
                                <textarea placeholder="پیام شما" name="Message"></textarea>
                                <button type="submit">برآورد رایگان</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="aabout-text-3">
                            <div class="section-title-wrapper mb-30 wow fadeInUp" data-wow-delay=".6s">
                                <h6 class="subtitle mb-20">درباره شرکت</h6>
                                <h2 class="section-title">ما محبوبترین شرکت<br> تعمیرات هستیم</h2>
                            </div>
                            <p class="mb-45 wow fadeInUp" data-wow-delay=".9s">لورم ایپسوم متن ساختگی با تولید سادگی
                                نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                                متنوع. </p>
                            <div class="aabout__fact">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="aabout__fact--single mb-30 wow fadeInUp" data-wow-delay="1.2s">
                                            <h2 class="aabout__fact--single__title">220+</h2>
                                            <h4 class="aabout__fact--single__subtitle">تکنسین خبره</h4>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="aabout__fact--single mb-30 wow fadeInUp" data-wow-delay="1.5s">
                                            <h2 class="aabout__fact--single__title">230+</h2>
                                            <h4 class="aabout__fact--single__subtitle">پروژه تکمیل</h4>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end here -->

        <!-- work area start here -->
        <section class="work-area pt-115 pb-115" data-background="{{ asset('front/assets/img/work/work-bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrapper text-center mb-70 wow fadeInUp" data-wow-delay=".3s">
                            <h6 class="subtitle subtitle-border mb-20">خدمات اصلی</h6>
                            <h2 class="section-title">ما بهترین هستیم <br> تماس بگیرید</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="awork mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="awork__img">
                                <img src="{{ asset('front/assets/img/work/work-img-1.jpg') }}" class="img-fluid" alt="img">
                                <div class="awork__img--overlay">
                                    <i class="flaticon-satisfaction"></i>
                                </div>
                            </div>
                            <div class="awork__text text-center">
                                <h4 class="awork__text--title mb-15"><a href="service-details.html">تست کیفیت</a></h4>
                                <p class="mb-15">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                <div class="awork__text--link">
                                    <a href="service-details.html">جزئیات خدمات</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="awork mb-30 wow fadeInUp" data-wow-delay=".6s">
                            <div class="awork__img">
                                <img src="{{ asset('front/assets/img/work/work-img-2.jpg') }}" class="img-fluid" alt="img">
                                <div class="awork__img--overlay">
                                    <i class="flaticon-heating"></i>
                                </div>
                            </div>
                            <div class="awork__text text-center">
                                <h4 class="awork__text--title mb-15"><a href="service-details.html">خدمات گرمایشی</a>
                                </h4>
                                <p class="mb-15">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                                <div class="awork__text--link">
                                    <a href="service-details.html">جزئیات خدمات</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="awork mb-30 wow fadeInUp" data-wow-delay=".9s">
                            <div class="awork__img">
                                <img src="{{ asset('front/assets/img/work/work-img-3.jpg') }}" class="img-fluid" alt="img">
                                <div class="awork__img--overlay">
                                    <i class="flaticon-settings"></i>
                                </div>
                            </div>
                            <div class="awork__text text-center">
                                <h4 class="awork__text--title mb-15"><a href="service-details.html">نصب کولر</a></h4>
                                <p class="mb-15">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                <div class="awork__text--link">
                                    <a href="service-details.html">جزئیات خدمات</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="awork__more--link text-center pt-20">
                            <span>اگر می خواهید از خدمات بیشتر ما مطلع شوید - <a href="service-details.html">اینجا کلیک
                                    کنید</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work area end here -->

        <!-- fact area start here -->
        {{-- <section class="fact-area-3 z-index">
            <div class="custom-container">
                <div class="theme-bg-blue pt-90 pb-65 z-index">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="afact__3 mb-30 wow fadeInUp" data-wow-delay=".3s">
                                <div class="afact__3--icon">
                                    <i class="flaticon-technician"></i>
                                </div>
                                <div class="afact__3--text">
                                    <h2>280+</h2>
                                    <span>تکنسین خبره</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="afact__3 mb-30 wow fadeInUp" data-wow-delay=".6s">
                                <div class="afact__3--icon">
                                    <i class="flaticon-business-and-trade"></i>
                                </div>
                                <div class="afact__3--text">
                                    <h2>120+</h2>
                                    <span>جمع شعب</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="afact__3 mb-30 wow fadeInUp" data-wow-delay=".9s">
                                <div class="afact__3--icon">
                                    <i class="flaticon-settings"></i>
                                </div>
                                <div class="afact__3--text">
                                    <h2>380+</h2>
                                    <span>پروژه تکمیل شده</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="afact__3 mb-30 wow fadeInUp" data-wow-delay="1.2s">
                                <div class="afact__3--icon">
                                    <i class="flaticon-quality"></i>
                                </div>
                                <div class="afact__3--text">
                                    <h2>350+</h2>
                                    <span>مشتری راضی</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- fact area end here -->

        <!-- choose area start here -->
            {{-- <div class="choose-area-3 pt-185" data-background="{{ asset('front/assets/img/choose/choose-bg3.jpg') }}">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="choose--content choose--content__3">
                                <div class="section-title-wrapper mb-35 wow fadeInUp" data-wow-delay=".3s">
                                    <h6 class="subtitle mb-20">چرا انتخاب ما</h6>
                                    <h2 class="section-title">زندگی را برای همیشه <br> بهتر کنید</h2>
                                </div>
                                <p class="mb-40 wow fadeInUp" data-wow-delay=".6s">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                                <div class="achoose mb-40 wow fadeInUp" data-wow-delay=".9s">
                                    <div class="achoose__icon theme-bg-blue">
                                        <i class="flaticon-technician"></i>
                                    </div>
                                    <div class="achoose__text fix">
                                        <h4 class="achoose__text--title">تعمیرکار متخصص</h4>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                        </p>
                                    </div>
                                </div>
                                <div class="achoose mb-40 wow fadeInUp" data-wow-delay="1.2s">
                                    <div class="achoose__icon theme-bg">
                                        <i class="flaticon-satisfaction"></i>
                                    </div>
                                    <div class="achoose__text fix">
                                        <h4 class="achoose__text--title">خدمات راضی کننده</h4>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="achoose__img--3 wow fadeInUp" data-wow-delay="1.5s">
                                <img src="{{ asset('front/assets/img/choose/choose-img-2.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        <!-- choose area end here -->

        <!-- feature area start here -->
        <section class="feature-area pt-115 pb-85">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrapper text-center mb-70 wow fadeInUp" data-wow-delay=".3s">
                            <h6 class="subtitle subtitle-border mb-20">چگونه کار می کند</h6>
                            <h2 class="section-title">ساختن فناوری دوباره برای <br>شما مفید است</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="afeature text-center mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="afeature__icon mb-35">
                                <i class="flaticon-app"></i>
                            </div>
                            <div class="afeature__text">
                                <h4 class="afeature__text--title"><a href="service-details.html">رزرو آنلاین</a></h4>
                                <p class="p-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="afeature text-center mb-30 wow fadeInUp" data-wow-delay=".6s">
                            <div class="afeature__icon mb-35">
                                <i class="flaticon-money-bag"></i>
                            </div>
                            <div class="afeature__text">
                                <h4 class="afeature__text--title"><a href="service-details.html">گفتگو درباره
                                        بودجه</a></h4>
                                <p class="p-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="afeature text-center mb-30 wow fadeInUp" data-wow-delay=".9s">
                            <div class="afeature__icon mb-35">
                                <i class="flaticon-message"></i>
                            </div>
                            <div class="afeature__text">
                                <h4 class="afeature__text--title"><a href="service-details.html">دریافت اطلاعات</a>
                                </h4>
                                <p class="p-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="afeature text-center mb-30 wow fadeInUp" data-wow-delay="1.2s">
                            <div class="afeature__icon mb-35">
                                <i class="flaticon-happiness"></i>
                            </div>
                            <div class="afeature__text">
                                <h4 class="afeature__text--title"><a href="service-details.html">خدمات عالی</a></h4>
                                <p class="p-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature area end here -->

        <!-- newsletter area start here -->
        <section class="newsletter-area-3 wow fadeInUp" data-wow-delay=".5s">
            <div class="newsletter__wrapper--3">
                <div class="news__subscribe theme-bg text-center pt-110 pb-100">
                    <div class="section-title-wrapper mb-50">
                        <h2 class="section-title text-white">پیشنهادات هفتگی<br> از خبرنامه</h2>
                    </div>
                    <form action="#">
                        <div class="field">
                            <input type="text" placeholder="آدرس ایمیل">
                        </div>
                        <button class="theme-btn black-btn">مشترک شوید</button>
                    </form>
                </div>
                <div class="news__service black-soft-bg text-center pt-110 pb-120">
                    <div class="section-title-wrapper mb-50">
                        <h2 class="section-title text-white">برای خدمات تعمیر یا نصب <br>تماس بگیرید</h2>
                    </div>
                    <div class="news__service--number">
                        <div class="news__service--number__icon">
                            <img src="{{ asset('front/assets/img/icon/subs-icon-1.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="news__service--number__btn">
                            <a href="tel:" class="theme-btn">09123456789 </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter area end here -->

        <!-- faq area start here -->
        {{-- <section class="faq-area-3 pt-120 pb-105">
            <div class="custom-container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="afaq__img--3 mb-30 mr-70 wow fadeInUp" data-wow-delay=".3s">
                            <img src="{{ asset('front/assets/img/faq/faq-img-1.jpg') }}" class="img-fluid img-1" alt="img">
                            <img src="{{ asset('front/assets/img/faq/faq-img-2.jpg') }}" class="img-fluid img-2" alt="img">
                            <img src="{{ asset('front/assets/img/faq/faq-img-3.png') }}" class="img-fluid img-3" alt="img">
                            <i class="flaticon-air-conditioner icon-one"></i>
                            <i class="flaticon-house icon-two"></i>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-9">
                        <div class="afaq__text afaq__text--3 mb-30 mr-165 wow fadeInUp" data-wow-delay=".6s">
                            <div class="section-title-wrapper mb-50">
                                <h6 class="subtitle mb-20">سوالات پرسیده شده</h6>
                                <h2 class="section-title">راه حل برای هر مشکل <br>تعمیرات</h2>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            لازم است
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            لازم است
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            لازم است
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            لازم است
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- faq area end here -->


        <!-- video area start here -->
        {{-- <section class="video-area video-area-3 pt-155 pb-155" data-background="front/assets/img/about/video-bg2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="avideo__text avideo__text--3 text-center wow fadeInUp" data-wow-delay=".5s">
                            <div class="avideo-btn mb-45 play_btn">
                                <a class="venobox" data-autoplay="true" data-vbtype="video"
                                    href="https://youtu.be/EpaLbYFVfbQ">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                            <div class="section-title-wrapper text-center">
                                <h2 class="section-title text-white">انجام کار در هر مکان<br>هر چند مثبت
                                    <span>مهم</span><br>چه <span>بزرگ</span> چه کوچک
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- video area end here -->

        <!-- team area start here -->
        <section class="team-area-3 pt-120 pb-120 fix">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-5">
                        <div class="ateam__3--left wow fadeInUp" data-wow-delay=".5s">
                            <div class="section-title-wrapper mb-25">
                                <h6 class="subtitle mb-20">تکنسین خبره</h6>
                                <h2 class="section-title">اعضای خبره <br>و متخصص ما</h2>
                            </div>
                            <p class="mb-30">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                            </p>
                            <div class="ateam__3--btn">
                                <a href="team-details.html" class="theme-btn theme-btn-blue">همه اعضا</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="swiper-container team-active-3 wow fadeInUp" data-wow-delay="1s">
                            <div class="swiper-wrapper">
                                <div class="ateam__3 swiper-slide" data-swiper-autoplay="8000">
                                    <div class="ateam__3--img">
                                        <img src="{{ asset('front/assets/img/team/team-img-4.jpg') }}" class="img-fluid" alt="img">
                                    </div>
                                    <div class="ateam__3--overlay">
                                        <div class="ateam__3--overlay__social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                        <div class="ateam__3--overlay__text">
                                            <span class="text-white">کارشناس ارشد</span>
                                            <h4 class="text-white ateam__3--title"><a href="team-details.html">جیسون
                                                    روی</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ateam__3 swiper-slide" data-swiper-autoplay="8000">
                                    <div class="ateam__3--img">
                                        <img src="{{ asset('front/assets/img/team/team-img-5.jpg') }}" class="img-fluid" alt="img">
                                    </div>
                                    <div class="ateam__3--overlay">
                                        <div class="ateam__3--overlay__social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                        <div class="ateam__3--overlay__text">
                                            <span class="text-white">کارشناس ارشد</span>
                                            <h4 class="text-white ateam__3--title"><a href="team-details.html"> مستر
                                                    دمیکا</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ateam__3 swiper-slide" data-swiper-autoplay="8000">
                                    <div class="ateam__3--img">
                                        <img src="{{ asset('front/assets/img/team/team-img-6.jpg') }}" class="img-fluid" alt="img">
                                    </div>
                                    <div class="ateam__3--overlay">
                                        <div class="ateam__3--overlay__social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                        <div class="ateam__3--overlay__text">
                                            <span class="text-white">کارشناس ارشد</span>
                                            <h4 class="text-white ateam__3--title"><a href="team-details.html">استیو
                                                    اسمیت</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ateam__3 swiper-slide" data-swiper-autoplay="8000">
                                    <div class="ateam__3--img">
                                        <img src="front/assets/img/team/team-img-11.jpg" class="img-fluid" alt="img">
                                    </div>
                                    <div class="ateam__3--overlay">
                                        <div class="ateam__3--overlay__social">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                        <div class="ateam__3--overlay__text">
                                            <span class="text-white">کارشناس ارشد</span>
                                            <h4 class="text-white ateam__3--title"><a href="team-details.html">جو
                                                    روت</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team area end here -->

        <!-- brand area end here -->
        <div class="brand-area brand-area-3 z-index">
            <div class="custom-container">
                <div class="brand__bg--3 theme-bg pt-100 pb-100">
                    <div class="brand-active z-index swiper-container">
                        <div class="swiper-wrapper">
                            <div class="brand-wrapper text-end swiper-slide wow fadeInUp" data-wow-delay=".3s"
                                data-swiper-autoplay="5000">
                                <a href="#"><img src="front/assets/img/brand/brand-6.png" class="img-fluid"
                                        alt="img"></a>
                            </div>
                            <div class="brand-wrapper text-end swiper-slide wow fadeInUp" data-wow-delay=".6s"
                                data-swiper-autoplay="5000">
                                <a href="#"><img src="front/assets/img/brand/brand-7.png" class="img-fluid"
                                        alt="img"></a>
                            </div>
                            <div class="brand-wrapper text-end swiper-slide wow fadeInUp" data-wow-delay=".9s"
                                data-swiper-autoplay="5000">
                                <a href="#"><img src="front/assets/img/brand/brand-8.png" class="img-fluid"
                                        alt="img"></a>
                            </div>
                            <div class="brand-wrapper text-end swiper-slide wow fadeInUp" data-wow-delay="1.2s"
                                data-swiper-autoplay="5000">
                                <a href="#"><img src="front/assets/img/brand/brand-9.png" class="img-fluid"
                                        alt="img"></a>
                            </div>
                            <div class="brand-wrapper text-end swiper-slide wow fadeInUp" data-wow-delay="1.5s"
                                data-swiper-autoplay="5000">
                                <a href="#"><img src="front/assets/img/brand/brand-10.png" class="img-fluid"
                                        alt="img"></a>
                            </div>
                            <div class="brand-wrapper text-end swiper-slide wow fadeInUp" data-wow-delay="1.8s"
                                data-swiper-autoplay="5000">
                                <a href="#"><img src="front/assets/img/brand/brand-6.png" class="img-fluid"
                                        alt="img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area start here -->

        <!-- testimonial area start here -->
        <section class="testimonial-area-3 pt-235 pb-115"
            data-background="front/assets/img/testimonial/testimonial-bg3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrapper text-center mb-70 wow fadeInUp" data-wow-delay=".3s">
                            <h6 class="subtitle subtitle-border mb-20">چگونه کار می کند</h6>
                            <h2 class="section-title">مشتریان راضی <br>و بازخورد آنها </h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-active-3 swiper-container pb-35">
                    <div class="swiper-wrapper">
                        <div class="atestimonial__3 mb-30 swiper-slide wow fadeInUp" data-wow-delay=".3s">
                            <div class="atestimonial__3--text mb-10">
                                <div class="atestimonial__3--text__rating mb-15">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع. </p>
                            </div>
                            <div class="atestimonial__3--client">
                                <div class="atestimonial__3--client__img">
                                    <img src="front/assets/img/testimonial/testimonial-img-6.png" class="img-fluid"
                                        alt="img">
                                </div>
                                <div class="atestimonial__3--client__text">
                                    <span>مدیر بازاریابی</span>
                                    <h4 class="atestimonial__3--client__text--title">راینور آدوارد</h4>
                                </div>
                            </div>
                        </div>
                        <div class="atestimonial__3 mb-30 swiper-slide wow fadeInUp" data-wow-delay=".6s">
                            <div class="atestimonial__3--text mb-10">
                                <div class="atestimonial__3--text__rating mb-15">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع. </p>
                            </div>
                            <div class="atestimonial__3--client">
                                <div class="atestimonial__3--client__img">
                                    <img src="front/assets/img/testimonial/testimonial-img-8.png" class="img-fluid"
                                        alt="img">
                                </div>
                                <div class="atestimonial__3--client__text">
                                    <span>مدیر بازاریابی</span>
                                    <h4 class="atestimonial__3--client__text--title">دیوید وارنر</h4>
                                </div>
                            </div>
                        </div>
                        <div class="atestimonial__3 mb-30 swiper-slide wow fadeInUp" data-wow-delay=".9s">
                            <div class="atestimonial__3--text mb-10">
                                <div class="atestimonial__3--text__rating mb-15">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع. </p>
                            </div>
                            <div class="atestimonial__3--client">
                                <div class="atestimonial__3--client__img">
                                    <img src="front/assets/img/testimonial/testimonial-img-7.png" class="img-fluid"
                                        alt="img">
                                </div>
                                <div class="atestimonial__3--client__text">
                                    <span>مدیر بازاریابی</span>
                                    <h4 class="atestimonial__3--client__text--title">ملیندا</h4>
                                </div>
                            </div>
                        </div>
                        <div class="atestimonial__3 mb-30 swiper-slide wow fadeInUp" data-wow-delay="1.2s">
                            <div class="atestimonial__3--text mb-10">
                                <div class="atestimonial__3--text__rating mb-15">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع. </p>
                            </div>
                            <div class="atestimonial__3--client">
                                <div class="atestimonial__3--client__img">
                                    <img src="front/assets/img/testimonial/testimonial-img-6.png" class="img-fluid"
                                        alt="img">
                                </div>
                                <div class="atestimonial__3--client__text">
                                    <span>مدیر بازاریابی</span>
                                    <h4 class="atestimonial__3--client__text--title">راینور آدوارد</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- If we need pagination -->
                    <div class="swiper-pagination2"></div>
                </div>
            </div>
        </section>
        <!-- testimonial area end here -->

        <!-- blog area start here -->
        {{-- <section class="blog-area pt-115 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrapper mb-70 wow fadeInUp" data-wow-delay=".3s">
                            <h6 class="subtitle mb-20">مطالب اخیر</h6>
                            <h2 class="section-title">داستان های به روز شده<br>از ژورنال ما</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="ablog ablog-2 ablog-3 mb-30 wow fadeInUp" data-wow-delay=".6s">
                            <div class="ablog__img ablog__img3">
                                <img src="front/assets/img/blog/blog-img-7.jpg" class="img-fluid" alt="img">
                                <div class="blog__date blog__date2 blog__date3">
                                    <h3 class="text-white">20</h3>
                                    <span class="text-white">دی</span>
                                </div>
                            </div>
                            <div class="ablog__text ablog__text2 ablog__text3 text-center">
                                <div class="ablog__meta ablog__meta3">
                                    <ul>
                                        <li><a href="#"><i class="far fa-bookmark"></i> خدمات گرمایشی</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 0 دیدگاه</a></li>
                                    </ul>
                                </div>
                                <h4 class="ablog__text--title ablog__text--title2 ablog__text--title3"><a
                                        href="blog-details.html">لورم ایپسوم متن</a></h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. </p>
                                <div class="ablog__text3--btn">
                                    <a href="blog-details.html" class="theme-btn grey-btn">بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ablog ablog-2 ablog-3 mb-30 wow fadeInUp" data-wow-delay=".9s">
                            <div class="ablog__img ablog__img3">
                                <img src="front/assets/img/blog/blog-img-8.jpg" class="img-fluid" alt="img">
                                <div class="blog__date blog__date2 blog__date3">
                                    <h3 class="text-white">22</h3>
                                    <span class="text-white">دی</span>
                                </div>
                            </div>
                            <div class="ablog__text ablog__text2 ablog__text3 text-center">
                                <div class="ablog__meta ablog__meta3">
                                    <ul>
                                        <li><a href="#"><i class="far fa-bookmark"></i> خدمات گرمایشی</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 0 دیدگاه</a></li>
                                    </ul>
                                </div>
                                <h4 class="ablog__text--title ablog__text--title2 ablog__text--title3"><a
                                        href="blog-details.html">لورم ایپسوم متن</a></h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. </p>
                                <div class="ablog__text3--btn">
                                    <a href="blog-details.html" class="theme-btn grey-btn">بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ablog ablog-2 ablog-3 mb-30 wow fadeInUp" data-wow-delay="1.2s">
                            <div class="ablog__img ablog__img3">
                                <img src="front/assets/img/blog/blog-img-9.jpg" class="img-fluid" alt="img">
                                <div class="blog__date blog__date2 blog__date3">
                                    <h3 class="text-white">24</h3>
                                    <span class="text-white">دی</span>
                                </div>
                            </div>
                            <div class="ablog__text ablog__text2 ablog__text3 text-center">
                                <div class="ablog__meta ablog__meta3">
                                    <ul>
                                        <li><a href="#"><i class="far fa-bookmark"></i> خدمات گرمایشی</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 0 دیدگاه</a></li>
                                    </ul>
                                </div>
                                <h4 class="ablog__text--title ablog__text--title2 ablog__text--title3"><a
                                        href="blog-details.html"> لورم ایپسوم متن </a></h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است </p>
                                <div class="ablog__text3--btn">
                                    <a href="blog-details.html" class="theme-btn grey-btn">بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- blog area end here -->

    </main>

    <!-- footer area start here -->
    <footer data-background="front/assets/img/footer/footer-bg.jpg">
        <section class="footer-area pt-115 pb-90">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer__widget mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <h4 class="footer__widget--title">درباره ما</h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                            <div class="emg__number">
                                <h5>تماس با ما :</h5>
                                <h4><a href="tel:01254987596">09123456789</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer__widget mb-30 pl-80 wow fadeInUp" data-wow-delay=".6s">
                            <h4 class="footer__widget--title">خدمات</h4>
                            <ul class="widget__links">
                                <li><a href="service-details.html">سرویس</a></li>
                                <li><a href="service-details.html">نصب</a></li>
                                <li><a href="service-details.html">تست کیفیت</a></li>
                                <li><a href="service-details.html">فشرده سازی</a></li>
                                <li><a href="service-details.html">نگهداری</a></li>
                                <li><a href="service-details.html">تمیز کردن کولر</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer__widget mb-30 fix wow fadeInUp" data-wow-delay=".9s">
                            <h4 class="footer__widget--title">مطالب اخیر</h4>
                            <div class="widget__post mb-30">
                                <div class="widget__post--img">
                                    <a href="blog.html"><img src="front/assets/img/footer/footer-post-1.jpg"
                                            class="img-fluid" alt="img"></a>
                                </div>
                                <div class="widget__post--text">
                                    <h5 class="widget__post--text__title"><a href="blog-details.html">لورم ایپسوم متن
                                            ساختگی <br>با تولید سادگی نامفهوم</a></h5>
                                    <span>21 دی 1400</span>
                                </div>
                            </div>
                            <div class="widget__post">
                                <div class="widget__post--img">
                                    <a href="blog.html"><img src="front/assets/img/footer/footer-post-2.jpg"
                                            class="img-fluid" alt="img"></a>
                                </div>
                                <div class="widget__post--text">
                                    <h5 class="widget__post--text__title"><a href="blog-details.html">لورم ایپسوم متن
                                            ساختگی <br>با تولید سادگی نامفهوم</a></h5>
                                    <span>21 دی 1400</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer__widget mb-30 pl-85 wow fadeInUp" data-wow-delay="1.2s">
                            <h4 class="footer__widget--title">گالری ما</h4>
                            <div class="insta__widget">
                                <div class="insta__widget--img">
                                    <a href="#"><img src="front/assets/img/footer/footer-gal-1.jpg" class="img-fluid"
                                            alt="img"></a>
                                </div>
                                <div class="insta__widget--img">
                                    <a href="#"><img src="front/assets/img/footer/footer-gal-2.jpg" class="img-fluid"
                                            alt="img"></a>
                                </div>
                                <div class="insta__widget--img">
                                    <a href="#"><img src="front/assets/img/footer/footer-gal-3.jpg" class="img-fluid"
                                            alt="img"></a>
                                </div>
                                <div class="insta__widget--img">
                                    <a href="#"><img src="front/assets/img/footer/footer-gal-4.jpg" class="img-fluid"
                                            alt="img"></a>
                                </div>
                                <div class="insta__widget--img">
                                    <a href="#"><img src="front/assets/img/footer/footer-gal-5.jpg" class="img-fluid"
                                            alt="img"></a>
                                </div>
                                <div class="insta__widget--img">
                                    <a href="#"><img src="front/assets/img/footer/footer-gal-6.jpg" class="img-fluid"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="copyright-area copyright-border">
            <div class="custom-container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-5 order-lg-1 order-2">
                        <div class="copyright__text copyright__text--3">
                            <span>کپی رایت © 2021 <a href="https://www.rtl-theme.com/author/pcstud/">Pcstud</a>. تمام
                                حقوق محفوظ می باشد.</span>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 order-lg-2 order-1">
                        <div class="copyright__logo text-center">
                            <a href="index.html"><img src="front/assets/img/logo/logo-white.png" alt="img"></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 order-lg-3 order-3">
                        <div class="copyright__social text-lg-end text-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end here -->


    <!-- JS here -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('front/assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('front/assets/js/venobox.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('front/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/backToTop.js') }}"></script>
    <script src="{{ asset('front/assets/js/main.js') }}"></script>
</body>


</html>
