
@extends('user.parts.layout')

@section('title')
    Blackwood
@endsection

@section('content')
    <!-- slider area start -->
    <section class="slider__area">
        <div class="slider__active swiper-container">
            <div class="swiper-wrapper">
                <div class="slider__item slider__height swiper-slide d-flex align-items-center include-bg" data-background="assets/img/slider/slider-1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-5">
                                <div class="slider__content p-relative z-index-11">
                                    <h3 class="slider__title" data-animation="fadeInUp" data-delay=".5s">Office Style</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__item slider__height swiper-slide d-flex align-items-center include-bg" data-background="assets/img/slider/slider-2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-5">
                                <div class="slider__content p-relative z-index-11">
                                    <h3 class="slider__title" data-animation="fadeInUp" data-delay=".5s">Living Luxury</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-slider-pagination">
                <button class="main-slider-button-prev"><i class="fal fa-angle-left"></i></button>
                <button class="main-slider-button-next"><i class="fal fa-angle-right"></i></button>
            </div>
        </div>
    </section>
    <!-- slider area end -->

    <!-- category area start -->
    <section class="category__area pt-40 grey-bg-3">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper section__title-line mb-40">
                        <h3 class="section__title">Top Categories</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="category__item mb-30 grey-bg-3">
                            <div class="category__thumb w-img fix">
                                <a href="{{route('catalog.show', ['name' => $category->name])}}">
                                    <img src="{{asset('storage/categories/'.$category->name.'/image.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="category__content text-center">
                                <h3 class="category__title">
                                    <a href="{{route('catalog.show', ['name' => $category->name])}}">{{$category->name}}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- category area end -->



    <!-- features area start -->
    <section class="features__area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="features__item text-center mb-30 features__item-border">
                        <div class="features__icon">
                            <i class="flaticon-truck"></i>
                        </div>
                        <div class="features__content">
                            <h3 class="features__title">Free Shipping</h3>
                            <p>Capped $39 per order</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="features__item text-center mb-30 features__item-border">
                        <div class="features__icon">
                            <i class="flaticon-credit-card"></i>
                        </div>
                        <div class="features__content">
                            <h3 class="features__title">Securety Payments</h3>
                            <p>Up to 12 months installments</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="features__item text-center mb-30 features__item-border">
                        <div class="features__icon">
                            <i class="flaticon-exchange"></i>
                        </div>
                        <div class="features__content">
                            <h3 class="features__title">14-Day Returns</h3>
                            <p>Shop with confidence</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="features__item text-center mb-30">
                        <div class="features__icon">
                            <i class="flaticon-call-center-agent"></i>
                        </div>
                        <div class="features__content">
                            <h3 class="features__title">24/7 Support</h3>
                            <p>Capped $39 per order</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features area end -->

    <!-- product area start -->
    <section class="product__area pt-95 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xxl-10 col-xl-10 col-lg-10">
                    <div class="product__item-wrapper pt-15">
                        <div class="product__top section__title-line d-sm-flex align-items-start mb-35">
                            <div class="section__title-wrapper mr-30">
                                <h3 class="section__title">Special Offer</h3>
                            </div>
                            <div class="product__tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured" type="button" role="tab" aria-controls="featured" aria-selected="true">Featured</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new" type="button" role="tab" aria-controls="new" aria-selected="false">New</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product__tab-content">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                    <div class="product__item-slider common-nav owl-carousel">
                                        @foreach($feature_product as $product)
                                            <div class="product__item mb-20">
                                                <div class="product__thumb w-img fix">
                                                    <a href="{{ route('products.show', ['product' => $product->name]) }}">
                                                        <img src="{{ asset('storage/products/'.$product->id.'/1.jpg') }}" alt="">
                                                    </a>
                                                    <div class="product__action transition-3">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                                l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                                C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
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
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="product__tag">
                                                                <span>
                                                                    <a href="#">{{ $product->category }}</a>
                                                                </span>
                                                    </div>
                                                    <h3 class="product__title">
                                                        <a href="{{ route('products.show', ['product' => $product->name]) }}">{{ $product->name }}</a>
                                                    </h3>
                                                    <div class="product__price">
                                                        <span class="price">${{ $product->price }}.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
                                    <div class="product__item-slider common-nav owl-carousel">
                                        @foreach($new_product as $product)
                                            <div class="product__item mb-20">
                                                <div class="product__thumb w-img fix">
                                                    <a href="{{ route('products.show', ['product' => $product->name]) }}">
                                                        <img src="{{ asset('storage/products/'.$product->id.'/1.jpg') }}" alt="">
                                                    </a>
                                                    <div class="product__action transition-3">
                                                        <ul>
                                                            <li>
                                                                <a href="{{route('products.addToCartId', ['id' => $product->id])}}">
                                                                    <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
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
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                    <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="product__tag">
                                                                <span>
                                                                    <a href="#">{{ $product->category }}</a>
                                                                </span>
                                                    </div>
                                                    <h3 class="product__title">
                                                        <a href="{{ route('products.show', ['product' => $product->name]) }}">{{ $product->name }}</a>
                                                    </h3>
                                                    <div class="product__price">
                                                        <span class="price">${{ $product->price }}.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product area end -->

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
                                                    <a href="cart.html" class="add-to-cart-btn">Add to cart</a>
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
@endsection
