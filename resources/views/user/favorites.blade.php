@extends('user.parts.layout')

@section('title')
    Favorits
@endsection

@section('content')


    <!-- cart-area start -->
    <section class="cart-area pb-120 pt-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($favorits != '')
                                    @foreach($favorits as $favorit)
                                        <tr>
                                            <td class="product-thumbnail"><a href="product-details.html"><img src=" {{ asset('storage/products/'.$favorit->product_id.'/1.jpg') }}" alt=""></a></td>
                                            <td class="product-name"><a href="product-details.html">{{ ($products_all->whereIn('id', $favorit->product_id))[1]->name }}</a></td>
                                            <td class="product-price"><span class="amount">${{ ($products_all->whereIn('id', $favorit->product_id))[1]->price }}.00</span></td>
                                            <td class="product-quantity">
                                                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" >
                                                @csrf
                                                    <input hidden name="name" value="{{($products_all->where('id', $favorit->product_id))->value('name')}}">
                                                    <input hidden name="id" value="{{$favorit->product_id}}">
                                                    <input hidden name="quantity" type="text" value="1">
                                                    <div class="pro-cart-btn">
                                                        <button type="submit" class="btn-tp">Add to Cart</button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- cart-area end -->

@endsection
