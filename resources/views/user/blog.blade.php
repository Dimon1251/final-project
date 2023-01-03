<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blackwood - Clean Minimal eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- CSS here -->

    <link rel="stylesheet" href="{{ asset('assets/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ui-range-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/backtotop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


<!-- prealoder area start -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="first_object"></div>
            <div class="object" id="second_object"></div>
            <div class="object" id="third_object"></div>
        </div>
    </div>
</div>
<!-- prealoder area end -->

<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- back to top end -->

<!-- header area start -->
<header class="d-none d-lg-block">
    <div class="header__area">
        <div class="header__top d-none d-md-block pt-25 pb-25">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 d-none d-xl-block">
                        <div class="header__top-info">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-6">
                        <div class="header__top-features header__top-features-3">
                            <div class="features__item features__item-2 mr-50">
                                <div class="features__icon features__icon-2 mr-20">
                                    <i class="flaticon-credit-card"></i>
                                </div>
                                <div class="features__content-2">
                                    <h3 class="features__title features__title-3">100% Payments</h3>
                                    <p>Monthly Installment</p>
                                </div>
                            </div>
                            <div class="features__item features__item-2 features__item-d">
                                <div class="features__icon features__icon-2 mr-20">
                                    <i class="flaticon-exchange"></i>
                                </div>
                                <div class="features__content-2">
                                    <h3 class="features__title features__title-3">14-Day Returns</h3>
                                    <p>Secure Payments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="header__action header__action-2 text-sm-end">
                            <ul>
                                <li>
                                    <a href="sign-in.html"><i class="fal fa-user-circle"></i></a>
                                </li>
                                <li>
                                    <a href="checkout.html">
                                        <i class="flaticon-random-button"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html"><i class="fal fa-heart"></i>
                                        <span class="cart-count">2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.html" data-bs-toggle="modal" data-bs-target="#cartMiniModal">
                                        <i class="fal fa-shopping-basket"></i>
                                        <span class="cart-count">3</span>
                                    </a>
                                    <span class="cart-price">$20.00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__middle header__border grey-bg-3 d-none d-md-block pt-10 pb-10">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="header__search-3">
                            <form action="#">
                                <div class="header__search-input-2 header__search-input-3">
                                    <input type="text" placeholder="Search for product, brands & offer..">
                                    <div class="header__search-select">
                                        <select>
                                            <option>All categories</option>
                                            <option>Furniture</option>
                                            <option>Electronics</option>
                                            <option>Beauty</option>
                                        </select>
                                    </div>
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="header__middle-right header__middle-right-d d-flex align-items-center justify-content-end">
                            <div class="sd-contact">
                                <span>Customer Service <a href="tel:+0889006690">+088 900 6690</a></span>
                            </div>
                            <div class="header__select header__select-2 d-flex align-items-center">
                                <div class="header__lang header__select-item header__select-item-3 mr-20">
                                    <div class="country-flag">
                                        <a href="#"><img src="assets/img/icon/flag.png" alt=""></a>
                                    </div>
                                    <select>
                                        <option>EN</option>
                                        <option>BN</option>
                                        <option>IN</option>
                                        <option>CH</option>
                                        <option>AM</option>
                                    </select>
                                </div>
                                <div class="header__currency header__select-item header__select-item-3">
                                    <select>
                                        <option>$USD</option>
                                        <option>Euro</option>
                                        <option>Yen</option>
                                        <option>Rupee</option>
                                        <option>Sterlin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom  black-bg d-none d-xl-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-12 col-lg-8 col-sm-6 col-4">
                        <div class="main-menu main-menu-3">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown">
                                        <a href="index.html">Home </a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="index.html">Home Style 1</a>
                                            </li>
                                            <li>
                                                <a href="index-2.html">Home Style 2</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Home Style 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop.html">New Arrivals</a>
                                    </li>
                                    <li>
                                        <a href="about.html">About</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">On Sale</a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="about.html">Pages</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="sign-in.html">Sign In</a>
                                            </li>
                                            <li>
                                                <a href="sign-up.html">Sign Up</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Shop Page</a>
                                            </li>
                                            <li>
                                                <a href="shop-2.html">Shop 2 Page</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html">product Details</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">Cart Page</a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">Checkout Page</a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">Wishlist Page</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="blog.html">Blogs</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="blog.html">Blog</a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-bar mb-5 d-xl-none">
                            <button type="button" class="header-bar-btn header-bar-btn-2" data-bs-toggle="modal" data-bs-target="#offCanvasModal">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-8 col-lg-4">
                        <div class="logo-d d-xl-none text-sm-end">
                            <img src="assets/img/logo/logo-white.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->

<!-- mobile-header-area start -->
<div class="mobile-header-area pt-20 pb-20 d-xl-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <div class="mobile-logo">
                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-6">
                <div class="header-bar d-xl-none text-end">
                    <button type="button" class="header-bar-btn" data-bs-toggle="modal" data-bs-target="#offCanvasModal">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-header-area end -->

<!-- cart mini area start -->
<div class="cartmini__area">
    <div class="modal fade" id="cartMiniModal" tabindex="-1" aria-labelledby="cartMiniModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="cartmini__wrapper">
                    <div class="cartmini__top d-flex align-items-center justify-content-between">
                        <h4>Your Cart</h4>
                        <div class="cartminit__close">
                            <button type="button" data-bs-dismiss="modal" data-bs-target="#cartMiniModal" class="cartmini__close-btn"> <i class="fal fa-times"></i></button>
                        </div>
                    </div>
                    <div class="cartmini__list">
                        <ul>
                            <li class="cartmini__item p-relative d-flex align-items-start">
                                <div class="cartmini__thumb mr-15">
                                    <a href="product-details.html">
                                        <img src="assets/img/products/product-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="cartmini__content">
                                    <h3 class="cartmini__title">
                                        <a href="product-details.html">Form Armchair Walnut Base</a>
                                    </h3>
                                    <span class="cartmini__price">
                                            <span class="price">1 × $70.00</span>
                                        </span>
                                </div>
                                <a href="#" class="cartmini__remove">
                                    <i class="fal fa-times"></i>
                                </a>
                            </li>
                            <li class="cartmini__item p-relative d-flex align-items-start">
                                <div class="cartmini__thumb mr-15">
                                    <a href="product-details.html">
                                        <img src="assets/img/products/product-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="cartmini__content">
                                    <h3 class="cartmini__title">
                                        <a href="product-details.html">Form Armchair Simon Legald</a>
                                    </h3>
                                    <span class="cartmini__price">
                                            <span class="price">1 × $95.99</span>
                                        </span>
                                </div>
                                <a href="#" class="cartmini__remove">
                                    <i class="fal fa-times"></i>
                                </a>
                            </li>
                            <li class="cartmini__item p-relative d-flex align-items-start">
                                <div class="cartmini__thumb mr-15">
                                    <a href="product-details.html">
                                        <img src="assets/img/products/product-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="cartmini__content">
                                    <h3 class="cartmini__title">
                                        <a href="product-details.html">Antique Chinese Armchairs</a>
                                    </h3>
                                    <span class="cartmini__price">
                                            <span class="price">1 × $120.00</span>
                                        </span>
                                </div>
                                <a href="#" class="cartmini__remove">
                                    <i class="fal fa-times"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="cartmini__total d-flex align-items-center justify-content-between">
                        <h5>Total</h5>
                        <span>$180.00</span>
                    </div>
                    <div class="cartmini__bottom">
                        <a href="cart.html" class="b-btn w-100 mb-20">view cart</a>
                        <a href="checkout.html" class="b-btn-2 w-100">checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart mini area end -->
<div class="body-overlay"></div>
<!-- cart mini area end -->

<!-- sidebar area start -->
<section class="offcanvas__area">
    <div class="modal fade" id="offCanvasModal" tabindex="-1" aria-labelledby="offCanvasModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__top d-flex align-items-center mb-60 justify-content-between">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/img/logo/logo.png" alt="logo">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button class="offcanvas__close-btn" data-bs-dismiss="modal" data-bs-target="#offCanvasModal">
                                <svg viewBox="0 0 22 22">
                                    <path d="M12.41,11l5.29-5.29c0.39-0.39,0.39-1.02,0-1.41s-1.02-0.39-1.41,0L11,9.59L5.71,4.29c-0.39-0.39-1.02-0.39-1.41,0
                                            s-0.39,1.02,0,1.41L9.59,11l-5.29,5.29c-0.39,0.39-0.39,1.02,0,1.41C4.49,17.9,4.74,18,5,18s0.51-0.1,0.71-0.29L11,12.41l5.29,5.29
                                            C16.49,17.9,16.74,18,17,18s0.51-0.1,0.71-0.29c0.39-0.39,0.39-1.02,0-1.41L12.41,11z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="sidebar__search mb-25">
                        <form action="#">
                            <input type="text" placeholder="What are you searching for?">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="offcanvas__content p-relative z-index-1">
                        <div class="canvas__menu">
                            <div class="mobile-menu fix"></div>
                        </div>
                        <div class="offcanvas__action mt-40 mb-15">
                            <a href="contact.html">Login</a>
                            <a href="wishlist.html" class="has-tag">
                                <svg viewBox="0 0 22 22">
                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                </svg>
                                <span class="tag">2</span>
                            </a>
                            <a href="cart.html" class="has-tag">
                                <i class="far fa-shopping-bag"></i>
                                <span class="tag">3</span>
                            </a>
                            <div class="header__select header__select-d d-flex align-items-center mt-10">
                                <div class="header__lang header__select-item mr-15">
                                    <select>
                                        <option>EN</option>
                                        <option>BN</option>
                                        <option>IN</option>
                                        <option>CH</option>
                                        <option>AM</option>
                                    </select><div class="nice-select" tabindex="0"><span class="current">EN</span><ul class="list list-2"><li data-value="EN" class="option selected focus">EN</li><li data-value="BN" class="option">BN</li><li data-value="IN" class="option">IN</li><li data-value="CH" class="option">CH</li><li data-value="AM" class="option">AM</li></ul></div>
                                </div>
                                <div class="header__currency header__select-item">
                                    <select>
                                        <option>USD</option>
                                        <option>Euro</option>
                                        <option>Yen</option>
                                        <option>Rupee</option>
                                        <option>Sterlin</option>
                                    </select><div class="nice-select" tabindex="0"><span class="current">USD</span><ul class="list list-2"><li data-value="USD" class="option selected focus">USD</li><li data-value="Euro" class="option">Euro</li><li data-value="Yen" class="option">Yen</li><li data-value="Rupee" class="option">Rupee</li><li data-value="Sterlin" class="option">Sterlin</li></ul></div>
                                </div>
                            </div>
                        </div>
                        <div class="offcanvas__social mt-15">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- sidebar area end -->

<main>
    <!-- page__title-start -->
    <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/bg/page-title-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Blog</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page__title-end -->

    <!-- blog-area start -->
    <section class="blog-area mt-100 mb-50">
        <div class="container custom-container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="blog__wrapper pr-50">
                        <div class="blog-wrap blog-item mb-50">
                            <div class="blog-thumb">
                                <img src="assets/img/blog/blog-big-1.jpg" alt="blog">
                            </div>
                            <div class="blog-details mt-35">
                                <ul class="blog-meta">
                                    <li><a href="#"><i class="fal fa-clock"></i> 20 JUN</a></li>
                                    <li><a href="#"><i class="fal fa-user-circle"></i>Josep</a></li>
                                    <li><a href="#"><i class="fal fa-comments"></i> 2 Comments</a></li>
                                </ul>
                                <h3 class="blog-title">
                                    <a href="blog-details.html">Basic rules of running web agency business</a>
                                </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                                <div class="blog-btn mt-25">
                                    <a href="blog-details.html" class="btn-tp">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap blog-item mb-50">
                            <div class="blog-thumb blog-video">
                                <img src="assets/img/blog/blog-big-2.jpg" alt="blog">
                                <a data-fancybox="" href="https://www.youtube.com/watch?v=M115YbZ70M0" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="blog-details mt-35">
                                <ul class="blog-meta">
                                    <li><a href="#"><i class="fal fa-clock"></i> 17 JUN</a></li>
                                    <li><a href="#"><i class="fal fa-user-circle"></i>Iqbal</a></li>
                                    <li><a href="#"><i class="fal fa-comments"></i> 2 Comments</a></li>
                                </ul>
                                <h3 class="blog-title">
                                    <a href="blog-details.html">Introducing the latest linoor features</a>
                                </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                                <div class="blog-btn mt-25">
                                    <a href="blog-details.html" class="btn-tp">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap blog-item mb-50">
                            <div class="blog-thumb">
                                <img src="assets/img/blog/blog-big-3.jpg" alt="blog">
                            </div>
                            <div class="blog-details mt-35">
                                <ul class="blog-meta">
                                    <li><a href="#"><i class="fal fa-clock"></i> 15 JUN</a></li>
                                    <li><a href="#"><i class="fal fa-user-circle"></i>Iqbal</a></li>
                                    <li><a href="#"><i class="fal fa-comments"></i> 2 Comments</a></li>
                                </ul>
                                <h3 class="blog-title">
                                    <a href="blog-details.html">Delivering the best digital marketing </a>
                                </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                                <div class="blog-btn mt-25">
                                    <a href="blog-details.html" class="btn-tp">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-50">
                        <div class="col-xxl-12">
                            <div class="basic-pagination-3 wow fadeInUp mt-20" data-wow-delay=".2s">
                                <ul class="d-flex align-items-center">
                                    <li class="prev">
                                        <a href="blog.html" class="link-btn link-prev">
                                            <i class="fal fa-long-arrow-left"></i>
                                            Prev
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog.html">
                                            <span>1</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="blog.html">
                                            <span>2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog.html">
                                            <span>3</span>
                                        </a>
                                    </li>
                                    <li class="next">
                                        <a href="blog.html" class="link-btn">
                                            Next
                                            <i class="fal fa-long-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="blog__sidebar">
                        <div class="sidebar__widget mb-50 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="sidebar__widget-content">
                                <div class="search">
                                    <form action="#">
                                        <input type="text" placeholder="Search...">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__widget sidebar__widget-padding mb-75 wow fadeInUp grey-bg-2" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <div class="sidebar__widget-title mb-25">
                                <h4>Recent News</h4>
                            </div>
                            <div class="sidebar__widget-content">
                                <div class="rc-post">
                                    <ul>
                                        <li class="d-flex align-items-center mb-20">
                                            <div class="rc-thumb mr-15">
                                                <a href="blog-details.html"><img src="assets/img/blog/rc/rc-1.jpg" alt="rc-post"></a>
                                            </div>
                                            <div class="rc-text">
                                                <h6><a href="blog-details.html">Best website traffice Booster with great tools.</a></h6>
                                                <span class="rc-meta"><i class="fal fa-clock"></i> 23 JUN</span>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center mb-20">
                                            <div class="rc-thumb mr-15">
                                                <a href="blog-details.html"><img src="assets/img/blog/rc/rc-2.jpg" alt="rc-post"></a>
                                            </div>
                                            <div class="rc-text">
                                                <h6><a href="blog-details.html">Google take latest step &amp; Catch the black SEO</a></h6>
                                                <span class="rc-meta"><i class="fal fa-clock"></i> 22 JUN</span>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="rc-thumb mr-15">
                                                <a href="blog-details.html"><img src="assets/img/blog/rc/rc-3.jpg" alt="rc-post"></a>
                                            </div>
                                            <div class="rc-text">
                                                <h6><a href="blog-details.html">How to become a best sale marketer in a year!</a></h6>
                                                <span class="rc-meta"><i class="fal fa-clock"></i> 20 JUN</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__widget sidebar__widget-padding mb-75 wow fadeInUp grey-bg-2" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <div class="sidebar__widget-title mb-25">
                                <h4>Categories</h4>
                            </div>
                            <div class="sidebar__widget-content">
                                <div class="cat-link">
                                    <ul>
                                        <li><a href="blog-details.html">Web Design (6)</a></li>
                                        <li><a href="blog-details.html"> Web Development (14)</a></li>
                                        <li><a href="blog-details.html">Graphics (12)</a></li>
                                        <li><a href="blog-details.html">IOS/Android Design (10)</a></li>
                                        <li><a href="blog-details.html">App &amp; Saas (4)</a></li>
                                        <li><a href="blog-details.html">Fresh Products (9)</a></li>
                                        <li><a href="blog-details.html">Saas Design (8)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__widget sidebar__widget-padding mb-50 wow fadeInUp grey-bg-2" data-wow-delay="1s">
                            <div class="sidebar__widget-title mb-15">
                                <h4>Popular Tags</h4>
                            </div>
                            <div class="sidebar__widget-content">
                                <div class="tags">
                                    <a href="blog-details.html">The Saas,</a>
                                    <a href="blog-details.html">Pix Saas Blog,</a>
                                    <a href="blog-details.html">Landing,</a>
                                    <a href="blog-details.html">UI/UX Design,</a>
                                    <a href="blog-details.html">Branding,</a>
                                    <a href="blog-details.html">Animation,</a>
                                    <a href="blog-details.html">Design,</a>
                                    <a href="blog-details.html">Ideas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area end -->

    <!-- shop modal start -->
    <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered product__modal" role="document">
            <div class="modal-content">
                <div class="product__modal-wrapper p-relative">
                    <div class="product__modal-close p-absolute">
                        <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                    </div>
                    <div class="product__modal-inner">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-box">
                                    <div class="tab-content" id="modalTabContent">
                                        <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="assets/img/products/quick-view/quick-view-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="assets/img/products/quick-view/quick-view-2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="assets/img/products/quick-view/quick-view-3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="assets/img/products/quick-view/quick-view-4.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                                <img src="assets/img/products/quick-view/nav/quick-nav-1.jpg" alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                                <img src="assets/img/products/quick-view/nav/quick-nav-2.jpg" alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                                <img src="assets/img/products/quick-view/nav/quick-nav-3.jpg" alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                                <img src="assets/img/products/quick-view/nav/quick-nav-4.jpg" alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4 class="product__modal-title"><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                    <div class="product__modal-des mb-40">
                                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt </p>
                                    </div>
                                    <div class="product__modal-stock">
                                        <span>Availability :</span>
                                        <span>In Stock</span>
                                    </div>
                                    <div class="product__modal-stock sku mb-30">
                                        <span>SKU:</span>
                                        <span>Samsung C49J89: £875, Debenhams Plus</span>
                                    </div>
                                    <div class="product__modal-review d-sm-flex">
                                        <div class="rating mb-15 mr-35">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__modal-add-review mb-15">
                                            <span><a href="#">1 Review</a></span>
                                            <span><a href="#">Add Review</a></span>
                                        </div>
                                    </div>
                                    <div class="product__modal-price">
                                        <span>$560.00</span>
                                    </div>
                                    <div class="product__modal-form mb-30">
                                        <form action="#">
                                            <div class="pro-quan-area d-lg-flex align-items-center">
                                                <div class="product-quantity mr-20 mb-25">
                                                    <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                                </div>
                                                <div class="pro-cart-btn mb-25">
                                                    <button class="add-to-cart-btn" type="submit">Add to cart</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="product__modal-links">
                                        <ul>
                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop modal end -->

</main>

<!-- footer area start -->
<footer>
    <div class="footer__area footer-bg">
        <div class="footer__top footer__top-space pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="footer__widget pb-30">
                            <h3 class="footer__widget-title footer__widget-title-3">Need help</h3>
                            <div class="footer__widget-content">
                                <div class="footer__contact">
                                    <h3 class="footer__contact-phone"><a href="tel:1234-5678-90">(+80) 1234 5678 90</a></h3>
                                    <div class="footer__opening mb-15">
                                        <p>Monday - Friday: 9:00-20:00</p>
                                        <p>Saturady: 11:00 - 15:00</p>
                                    </div>
                                    <div class="footer__contact-email footer__contact-email-2">
                                        <p><a href="mailto:balckwood@support.com">balckwood@support.com</a></p>
                                    </div>
                                    <div class="footer__social footer__social-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-pinterest"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="footer__widget footer-col-3 pb-30">
                            <h3 class="footer__widget-title footer__widget-title-3">Useful Links</h3>
                            <div class="footer__widget-content">
                                <div class="footer__links footer__links-2">
                                    <ul>
                                        <li>
                                            <a href="contact.html">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Returns</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Terms & Conditions</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">Latest News</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Our Sitemap</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="footer__widget footer-col-4 pb-30">
                            <h3 class="footer__widget-title footer__widget-title-3">Our Stores</h3>
                            <div class="footer__widget-content">
                                <div class="footer__links footer__links-2">
                                    <ul>
                                        <li>
                                            <a href="about.html">New York</a>
                                        </li>
                                        <li>
                                            <a href="about.html">London SF</a>
                                        </li>
                                        <li>
                                            <a href="about.html">Cockfosters BP</a>
                                        </li>
                                        <li>
                                            <a href="#">Los Angeles</a>
                                        </li>
                                        <li>
                                            <a href="about.html">Chicago</a>
                                        </li>
                                        <li>
                                            <a href="about.html">Las Vegas</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="footer__widget footer-col-5 pb-30">
                            <h3 class="footer__widget-title footer__widget-title-3">My Account</h3>
                            <div class="footer__widget-content">
                                <div class="footer__links footer__links-2">
                                    <ul>
                                        <li>
                                            <a href="contact.html">My Account</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Order History</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">Wish List</a>
                                        </li>
                                        <li>
                                            <a href="contact.htmcontact.html">Newsletter</a>
                                        </li>
                                        <li><a href="contact.html">Shipping & Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="footer__widget footer-col-5 pb-30">
                            <h3 class="footer__widget-title footer__widget-title-3">Customer Service</h3>
                            <div class="footer__widget-content">
                                <div class="footer__links footer__links-2">
                                    <ul>
                                        <li>
                                            <a href="contact.html">Search Terms</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Advanced Search</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Help & FAQs</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Furniture Expert</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Our Sitemap</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Find A Store</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__offer">
            <div class="container">
                <div class="footer__offer-inner footer__offer-inner-2">
                    <div class="row align-items-center">
                        <div class="col-xxl-6 col-lg-6 col-md-6">
                            <div class="footer__subscribe footer__subscribe-3">
                                <p>Sign up for our Newsletter</p>
                                <form action="#">
                                    <div class="footer__subscribe-input">
                                        <input type="email" placeholder="Enter Email ID ...">
                                        <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6 col-md-6">
                            <div class="payment-image-2 text-md-end">
                                <a href="#"><img src="assets/img/payment/payment-2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="footer__bottom-wrapper text-center">
                            <div class="footer__bottom-links">
                                <ul>
                                    <li>
                                        <a href="about.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Delivery Information</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Terms & Conditions</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Site Map</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer__copyright">
                                <p>Copyright ©2022 <a href="index.html">Blackwood.com.</a> All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->


<!-- JS here -->

<script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
<script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
<script src="{{ asset('assets/js/meanmenu.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
<script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui-slider-range.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/parallax.js') }}"></script>
<script src="{{ asset('assets/js/backtotop.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.js') }}"></script>
<script src="{{ asset('assets/js/counterup.js') }}"></script>
<script src="{{ asset('assets/js/countdown.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
<script src="{{ asset('assets/js/ajax-form.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>