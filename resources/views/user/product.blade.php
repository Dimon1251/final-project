@extends('user.parts.layout')

@section('title')
    {{ $product->name }}
@endsection

@section('content')

<main>
    <!-- page__title-start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-left">
                        <br><h1>Product Details</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-left">
                                    <li class="breadcrumb-item"><a href="{{route('main')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page__title-end -->

    <!-- product-details-start -->
    <section class="product-details pt-90 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="product__modal-box d-flex">
                        <div class="product__modal-nav mr-20">
                            <nav>
                                <div class="nav nav-tabs" id="product-details" role="tablist">

                                    <a class="nav-item nav-link active" id="pro-1-tab" data-bs-toggle="tab" href="#pro-1" role="tab" aria-controls="pro-1" aria-selected="true">
                                        <div class="product__nav-img w-img">
                                            <img style="max-width: 90px" src="{{asset('storage/products/'.$product->id.'/1.jpg')}}" alt="">
                                        </div>
                                    </a>
                                    @for ($i = 2; $i <= count(scandir('../storage/app/public/products/'.$product->id))-2; $i++)
                                        <a class="nav-item nav-link" id="#pro-{{$i}}-tab" data-bs-toggle="tab" href="#pro-{{$i}}" role="tab" aria-controls="#pro-{{$i}}" aria-selected="false">
                                            <div class="product__nav-img w-img">
                                                <img style="max-width: 90px" src="{{asset('storage/products/'.$product->id.'/'.$i.'.jpg')}}" alt="">
                                            </div>
                                        </a>
                                    @endfor
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content mb-20" id="product-detailsContent">
                            <div class="tab-pane fade active show" id="pro-1" role="tabpanel" aria-labelledby="pro-1-tab">
                                <div class="product__modal-img product__thumb w-img">
                                    <img src="{{ asset('storage/products/'.$product->id.'/1.jpg') }}" alt="">
                                </div>
                            </div>
                            @for ($i = 2; $i <= count(scandir('../storage/app/public/products/'.$product->id))-2; $i++)
                                <div class="tab-pane fade" id="pro-{{$i}}" role="tabpanel" aria-labelledby="pro-{{$i}}-tab">
                                    <div class="product__modal-img product__thumb w-img">
                                        <img src="{{ asset('storage/products/'.$product->id.'/'.$i.'.jpg') }}" alt="">
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="product__modal-content-2">
                        <h4><a href="{{ route('products.show', ['product' => $product->name]) }}">{{$product->name}}</a></h4>
                        <div class="product__price mb-25">
                            <span>${{$product->price}}</span>
                        </div>
                        <div class="product__modal-des mb-30">
                            <p>{{$product->description}}</p>
                        </div>
                        <form action="{{ route('products.addToCart') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <input hidden name="name" value="{{$product->name}}">
                            <input hidden name="id" value="{{$product->id}}">

                            <div class="pro-quan-area d-sm-flex align-items-center">
                                <div class="product-quantity-title mb-20">
                                    <label>Quantity</label>
                                </div>
                                <div class="product-quantity mr-20 mb-20">
                                    <div class="cart-plus-minus"><input name = "quantity" type="text" value="1"><div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                                </div>
                                <div class="pro-cart-btn">
                                    <button type="submit" class="add-cart-btn mb-20">+ Add to Cart</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-70">
                <div class="col-xl-12">
                    <div class="product__details-tab">
                        <div class="product__details-tab-nav text-center mb-45">
                            <nav>
                                <div class="nav nav-tabs justify-content-start justify-content-sm-center" id="pro-details" role="tablist">
<!--
                                    <a class="nav-item nav-link active" id="des-tab" data-bs-toggle="tab" href="#des" role="tab" aria-controls="des" aria-selected="true">Description</a>
-->
                                    <a class="nav-item nav-link" id="add-tab" data-bs-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="false">Additional Information</a>
                                    <a class="nav-item nav-link" id="review-tab" data-bs-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews ({{ count($comments) }})</a>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content" id="pro-detailsContent">
<!--                            <div class="tab-pane fade active show" id="des" role="tabpanel">
                                <div class="product__details-des mb-20">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>

                                    <div class="product__details-des-list mb-20">
                                        <ul>
                                            <li><span>Claritas est etiam processus dynamicus.</span></li>
                                            <li><span>Qui sequitur mutationem consuetudium lectorum.</span></li>
                                            <li><span>Claritas est etiam processus dynamicus.</span></li>
                                            <li><span>Qui sequitur mutationem consuetudium lectorum.</span></li>
                                            <li><span>Claritas est etiam processus dynamicus.</span></li>
                                            <li><span>Qui sequitur mutationem consuetudium lectorum.</span></li>
                                        </ul>
                                    </div>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release. Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                </div>
                            </div>-->
                            <div class="tab-pane fade active show" id="add" role="tabpanel">
                                <div class="product__desc-info mb-35">
                                    <ul>
                                        <li>
                                            <h6>Weight</h6>
                                            <span>{{ $product->weight }}</span>
                                        </li>
                                        <li>
                                            <h6>Dimensions</h6>
                                            <span>{{ $product->dimensions }}</span>
                                        </li>
                                        <li>
                                            <h6>Color</h6>
                                            <span>{{ $product->color }}</span>
                                        </li>
                                        <li>
                                            <h6>Country of origin of goods</h6>
                                            <span>{{ $product->country }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel">
                                <div class="product__details-review mb-35">
                                    <div class="postbox__comments">
                                        <div class="postbox__comment-title mb-30">
                                            <h3>Reviews ({{ count($comments) }})</h3>
                                        </div>
                                        <div class="latest-comments mb-30">
                                            <ul>
                                                @foreach($comments as $comment)
                                                <li>
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="{{ asset('assets/img/author/avater-3.png') }}" alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h5>{{ $comment->name }}</h5>
                                                                <span> {{ $comment->created_at }} </span>
                                                            </div>
                                                            <p> {{ $comment->text }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    @if(Auth::check())
                                    <div class="post-comments-form">
                                        <div class="post-comments-title mb-30">
                                            <h3>Your Review</h3>
                                        </div>
                                        <form action="{{ route('comments.store') }}" id="contacts-form" class="conatct-post-form" method="post" enctype="multipart/form-data" >
                                            @csrf
                                            <input hidden name="product_id" value="{{ $product->id }}">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="contact-icon p-relative contacts-name">
                                                        <h4>{{ Auth::user()->name }}</h4>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="contact-icon p-relative contacts-message">
                                                        <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Comments"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <button class="add-cart-btn" type="submit">Post comment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-details-end -->

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
                                                <img src="{{ asset('assets/img/products/quick-view/quick-view-1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('assets/img/products/quick-view/quick-view-2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('assets/img/products/quick-view/quick-view-3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="{{ asset('assets/img/products/quick-view/quick-view-4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                                <img src="{{ asset('assets/img/products/quick-view/nav/quick-nav-1.jpg') }}" alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                                <img src="{{ asset('assets/img/products/quick-view/nav/quick-nav-2.jpg') }}" alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                                <img src="{{ asset('assets/img/products/quick-view/nav/quick-nav-3.jpg') }}" alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                                <img src="{{ asset('assets/img/products/quick-view/nav/quick-nav-4.jpg') }}" alt="">
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

</main>

@endsection

