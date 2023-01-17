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
                                            <td class="product-thumbnail"><a href="{{ route('products.show', ['product' => ($products_all->whereIn('id', $favorit->product_id))->value('name')]) }}"><img src=" {{ asset('storage/products/'.$favorit->product_id.'/1.jpg') }}" alt=""></a></td>
                                            <td class="product-name"><a href="{{ route('products.show', ['product' => ($products_all->whereIn('id', $favorit->product_id))->value('name')]) }}">{{ ($products_all->whereIn('id', $favorit->product_id))->value('name') }}</a></td>
                                            <td class="product-price"><span class="amount">${{ ($products_all->whereIn('id', $favorit->product_id))->value('price') }}.00</span></td>
                                            <td class="product-quantity">
                                                <div class="pro-cart-btn">
                                                    <a href="javascript:void(0)" id="ToCartId" data-id="{{ $favorit->product_id }}" type="submit" class="btn-tp">Add to Cart</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a data-id="{{ $favorit->product_id }}"  href="javascript:void(0)" class="delete-cart">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
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

@section('script')
    <script>
        $(document).ready(function () {

            $("body").on("click", "#ToCartId", function () {
                let id = $(this).data('id')
                console.log(id)
                $.ajax({
                    url: "{{ route('products.addToCartId', ['id' => '1']) }}".slice(0, -1) + id,
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

            $(".delete-cart").click(function () {
                let id = $(this).data("id")
                console.log(id)
                $.ajax({
                    url: "{{ route('products.deleteFromFavorite', ['id' => '1']) }}".slice(0, -1) + id,
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: () => {

                        $(this).parent().parent().remove()
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top',
                            showConfirmButton: false,
                            timer: 1000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: 'Deleted'
                        })

                    },
                })
            })
        })
    </script>
@endsection
