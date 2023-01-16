@extends('user.parts.layout')

@section('title')
    Cart
@endsection

@section('content')

<section>
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="items d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                        <h6 class="mb-0 text-muted"></h6>
                                    </div>
                                    <hr class="my-4">

                                    @foreach($carts as $cart)
                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img
                                                    src="{{asset('storage/products/'.$cart->product_id.'/1.jpg')}}"
                                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h6 class="text-muted">{{ ($products_all->where('id', $cart->product_id))->value('category') }}</h6>
                                                <h6 class="text-black mb-0">{{ ($products_all->where('id', $cart->product_id))->value('name') }}</h6>
                                            </div>
                                            <div class="carts col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <button class="carts-minus btn btn-link px-2"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <input id="form1" min="0" name="quantity" value="{{ $cart->quantity }}" type="number"
                                                       class="form-control form-control-sm" />

                                                <button class="carts-plus btn btn-link px-2"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp();">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 data-price="{{ ($products_all->where('id', $cart->product_id))->value('price') }}"  class="mb-0">€ {{ ($products_all->where('id', $cart->product_id))->value('price') * $cart->quantity }}.00</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a data-id="{{ $cart->product_id }}"  href="javascript:void(0)" class="delete-cart"><i class="fas fa-times"></i></a>
                                            </div>
                                            <hr class="my-4">
                                        </div>
                                    @endforeach

                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="{{ route('main') }}" class="text-body"><i
                                                    class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                    <hr class="my-4">

                                    <div class="all-price d-flex justify-content-between mb-4">
                                        <h5 class="text-uppercase">items {{count($carts)}}</h5>
                                        <h5 class= "price">  € {{ $carts_price }}.00</h5>
                                    </div>

                                    <h5 class="text-uppercase mb-3">Shipping</h5>

                                    <div class="mb-4 pb-2">
                                        <select class="select">
                                            <option value="1">Standard-Delivery- €5.00</option>
                                        </select>
                                    </div>

                                    <hr class="my-4">

                                    <div class="total-prices d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">Total price</h5>
                                        <h5 class="total-price" data-price = "{{ $carts_price }}"> € {{ $carts_price + 5}}.00</h5>
                                    </div>
                                    <form action ="/order/checkout" method ="POST">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input class="carts-input" type="hidden" name="price" value="{{ $carts_price + 5 }}">

                                        <button type="submit" class="btn btn-dark btn-block btn-lg"
                                                data-mdb-ripple-color="dark">Buy</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<style>

    @media (min-width: 1025px) {
    .h-custom {
            height: 100vh !important;
        }
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }

    .bg-grey {
        background-color: #eae8e8;
    }

    @media (min-width: 992px) {
    .card-registration-2 .bg-grey {
            border-top-right-radius: 16px;
            border-bottom-right-radius: 16px;
        }
    }

    @media (max-width: 991px) {
    .card-registration-2 .bg-grey {
            border-bottom-left-radius: 16px;
            border-bottom-right-radius: 16px;
        }
    }

</style>

@section('script')
    <script>
        $(document).ready(function () {

            let totalquantity = 0
            $(".carts").each(function(i,elem){
                let quantity = $(this).find('.form-control').val();
                totalquantity = parseInt(totalquantity) + parseInt(quantity)
            });
            $(".all-price").find(".text-uppercase").text("ITEMS " + totalquantity)
            $(".items").find(".text-muted").text(totalquantity + " items")


            $(".carts").change(function() {
                let oneprice = $(this).parent().find('.offset-lg-1').find('.mb-0').data('price')
                let quantity = $(this).find('.form-control').val();
                $(this).parent().find('.offset-lg-1').find('.mb-0').text("$ " + (oneprice * quantity) + ".00")

                let totalprice = 0
                let totalquantity = 0
                $(".carts").each(function(i,elem){
                    let oneprice = $(this).parent().find('.offset-lg-1').find('.mb-0').data('price')
                    let quantity = $(this).find('.form-control').val();
                    totalquantity = parseInt(totalquantity) + parseInt(quantity)
                    totalprice = totalprice + (oneprice * quantity)
                });
                $(".all-price").find(".text-uppercase").text("ITEMS " + totalquantity)
                $(".all-price").find(".price").text("$ " + totalprice + ".00")
                $(".total-prices").find(".total-price").text("$ " + (parseInt(totalprice) + 5) + ".00")
                $(".carts-input").val(parseInt(totalprice) + 5)
                $(".items").find(".text-muted").text(totalquantity + " items")



            })

            $(".carts-plus").click(function() {
                let oneprice = $(this).parent().parent().find('.offset-lg-1').find('.mb-0').data('price')
                let quantity = $(this).parent().find('.form-control').val();
                $(this).parent().parent().find('.offset-lg-1').find('.mb-0').text("$ " + (oneprice * quantity) + ".00")

                let totalprice = 0
                let totalquantity = 0
                $(".carts").each(function(i,elem){
                    let oneprice = $(this).parent().find('.offset-lg-1').find('.mb-0').data('price')
                    let quantity = $(this).find('.form-control').val();
                    totalquantity = parseInt(totalquantity) + parseInt(quantity)
                    totalprice = totalprice + (oneprice * quantity)
                });
                $(".all-price").find(".text-uppercase").text("ITEMS " + totalquantity)
                $(".all-price").find(".price").text("$ " + totalprice + ".00")
                $(".total-prices").find(".total-price").text("$ " + (parseInt(totalprice) + 5) + ".00")
                $(".carts-input").val(parseInt(totalprice) + 5)
                $(".items").find(".text-muted").text(totalquantity + " items")
            })

            $(".carts-minus").click(function() {
                let oneprice = $(this).parent().parent().find('.offset-lg-1').find('.mb-0').data('price')
                let quantity = $(this).parent().find('.form-control').val();
                $(this).parent().parent().find('.offset-lg-1').find('.mb-0').text("$ " + (oneprice * quantity) + ".00")

                let totalprice = 0
                let totalquantity = 0
                $(".carts").each(function(i,elem){
                    let oneprice = $(this).parent().find('.offset-lg-1').find('.mb-0').data('price')
                    let quantity = $(this).find('.form-control').val();
                    totalquantity = parseInt(totalquantity) + parseInt(quantity)
                    totalprice = totalprice + (oneprice * quantity)
                });
                $(".all-price").find(".text-uppercase").text("ITEMS " + totalquantity)
                $(".all-price").find(".price").text("$ " + totalprice + ".00")
                $(".total-prices").find(".total-price").text("$ " + (parseInt(totalprice) + 5) + ".00")
                $(".carts-input").val(parseInt(totalprice) + 5)
                $(".items").find(".text-muted").text(totalquantity + " items")
            })


            $(".delete-cart").click(function() {
                let id = $(this).data("id")
                console.log(id)
                $.ajax({
                    url: "{{ route('products.deleteFromCart', ['id' => '1']) }}".slice(0,-1) + id,
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: () => {

                        $(this).parent().parent().remove()
                        let totalprice = 0
                        let totalquantity = 0
                        $(".carts").each(function(i,elem){
                            let oneprice = $(this).parent().find('.offset-lg-1').find('.mb-0').data('price')
                            let quantity = $(this).find('.form-control').val();
                            totalquantity = parseInt(totalquantity) + parseInt(quantity)
                            totalprice = totalprice + (oneprice * quantity)
                        });
                        $(".all-price").find(".text-uppercase").text("ITEMS " + totalquantity)
                        $(".all-price").find(".price").text("$ " + totalprice + ".00")
                        $(".total-prices").find(".total-price").text("$ " + (parseInt(totalprice) + 5) + ".00")
                        $(".carts-input").val(parseInt(totalprice) + 5)
                        $(".items").find(".text-muted").text(totalquantity + " items")
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
