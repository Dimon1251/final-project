<header>
    <div class="header__area">
        <div class="header__bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-6">
                        <div class="logo">
                            <a href="{{route('main')}}">
                                <img src="{{ asset('assets/img/logo/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-8 d-none d-lg-block">
                        <div class="category__menu d-flex align-items-center">
                            <div class="category__btn mr-20">
                                <button class="cat-btn" type="button"><i class="far fa-bars"></i>All Categories</button>
                                <div class="side-submenu transition-3">
                                    <nav>
                                        <ul>
                                            @if(isset($categories))
                                            @foreach($categories as $category)
                                            <li>
                                                <a href="{{route('catalog.show', ['name' => $category->name])}}">{{$category->name}}</a>
                                            </li>
                                            @endforeach
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-1 col-6">
                        <div class="header__bottom-right-wrapper d-flex justify-content-end align-items-center">
                            <div class="header__bottom-right d-none d-xl-flex align-items-center justify-content-end">
<!--                                <div class="header__search">
                                    <form action="#">
                                        <div class="header__search-input">
                                            <input type="text" placeholder="Search anything..">
                                            <button type="submit"><i class="far fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>-->


                                @guest
                                    @if (Route::has('login'))
                                        <div class="header__action ml-45">
                                            <ul style="display: flex; flex-direction: row">
                                                <li>
                                                    <a style="font-size: 16px"  href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                                <li>
                                                    <a style="font-size: 16px" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    @endif
                                @else
                                    <div class="header__action ml-45">
                                        <ul>
                                            <li>
                                                <a href="{{ route('account') }}"><i class="fal fa-user-circle"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#cartMiniModal">
                                                    <i class="fal fa-shopping-basket"></i>
                                                    <span class="cart-count">{{ count($carts); }}</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('favorites.index') }}"><i class="fal fa-heart"></i>
                                                    <span class="cart-count">{{ count($favorits); }}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                @endguest




                            </div>
                            <div class="header-bar ml-20 d-xl-none">
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
        </div>
    </div>
</header>

<!-- header area end -->

<!-- cart mini area start -->

@guest
    @if (Route::has('login'))
    @endif
@else
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
                            @if($carts != '')
                                @foreach($carts as $cart)
                                <li class="cartmini__item p-relative d-flex align-items-start">
                                    <div class="cartmini__thumb mr-15">
                                        <a href="{{route('products.show', ['product' => ($products_all->where('id', $cart->product_id))->value('name')])}}">
                                            <img src=" {{ asset('storage/products/'.$cart->product_id.'/1.jpg') }}" alt="">
                                        </a>
                                    </div>
                                  <div class="cartmini__content">
                                        <h3 class="cartmini__title">
                                            <a href="{{route('products.show', ['product' => ($products_all->where('id', $cart->product_id))->value('name')])}}">{{ ($products_all->where('id', $cart->product_id))->value('name') }}</a>

                                        </h3>
                                        <span class="cartmini__price">
                                            <span class="price">{{ $cart->quantity }} ?? ${{ ($products_all->where('id', $cart->product_id))->value('price') }}.00</span>
                                        </span>
                                    </div>
                                </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="cartmini__total d-flex align-items-center justify-content-between">
                        <h5>Total</h5>
                        <span>${{ $carts_price }}.00</span>
                    </div>
                    <div class="cartmini__bottom">
                        <a href="{{ route('cart.index') }}" class="b-btn w-100 mb-20">view cart</a>

                        <form action ="/order/checkout" method ="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input class="carts-input" type="hidden" name="price" value="{{ $carts_price + 5 }}">
                            <button type="submit" class="b-btn-2 w-100"
                                    data-mdb-ripple-color="dark">checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endguest
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
                            <a>
                                <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
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
                    <div class="offcanvas__content p-relative z-index-1">
                        <div class="canvas__menu">
                            <div class="mobile-menu fix"></div>
                        </div>
                        <div class="offcanvas__action mt-40 mb-15">
                            <a href="{{ route('account') }}"><i class="align-middle fas fa-fw fa-user"></i></a>
                            <a href="{{ route('favorites.index') }}" class="has-tag">
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
                            <a href="{{ route('cart.index') }}" class="has-tag">
                                <i class="far fa-shopping-bag"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- sidebar area end -->
