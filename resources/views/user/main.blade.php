
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
                            <div class="category__thumb w-img fix" style="height: 200px">
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
    <section class="features__area pb-30 pt-30">
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
    <section class="product__area pt-50 pb-80">
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
                                                                <a href="javascript:void(0)" id="ToCartId" data-id="{{ $product->id }}">
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
                                                                <a href="javascript:void(0)" id="ToFavorite" data-id="{{ $product->id }}">
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
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="product__tag">
                                                                <span>
                                                                    <a href="{{ route('catalog.show', ['name' => $product->category])}}">{{ $product->category }}</a>
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
                                                                <a href="javascript:void(0)" id="ToCartId" data-id="{{ $product->id }}">
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
                                                                <a href="javascript:void(0)" id="ToFavorite" data-id="{{ $product->id }}">
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
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="product__tag">
                                                                <span>
                                                                     <a href="{{ route('catalog.show', ['name' => $product->category])}}">{{ $product->category }}</a>
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
@endsection

@section('script')
    <script>

        $(document).ready(function () {
            $("body").on("click", "#ToCartId", function(){
                let id = $(this).data('id')
                console.log(id)
                $.ajax({
                    url: "{{ route('products.addToCartId', ['id' => '1']) }}".slice(0,-1) + id,
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: () => {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: 'Successfully added to cart'
                        })
                    },
                })
            })

            $("body").on("click", "#ToFavorite", function(){
                let id = $(this).data('id')
                $.ajax({
                    url: "{{ route('products.addToFavorite', ['id' => '1']) }}".slice(0,-1) + id,
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: () => {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: 'Successfully added to favorite'
                        })
                    },
                    error: () => {
                        location.href = "http://localhost:49000/login"
                    }
                })
            })


        })



    </script>
@endsection
