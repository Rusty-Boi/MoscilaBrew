@extends('layouts.master')
@section('title', 'Cart | MoscilBrew')

@section('navbar')
    @include('layouts.header')
@endsection

@section('bodyClass', 'cartPage')

@section('content')
    <div class="container-fluid container-lg">
        <section id="..." class="... nav-on">

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}                
                </div>
            @elseif (session('failed'))
            <div class="alert alert-danger" role="alert">
                {{session('failed')}}
              </div>
            @endif


            <div class="section-title text-start">
                <h2>Keranjang</h2>
            </div>

            <div class="row">
                <div class="col-7">
                    <div class="row row-cols-1 g-2">
                        @if (count($carts) > 0)
                            @foreach ($carts as $vendor_id => $value)
                                <div class="col">
                                    <div class="product-card card container">
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="form-check">
                                                    <input class="form-check-input vendor_check"
                                                        type="checkbox" id="checkboxNoLabel" value="{{ $vendor_id }}" @if ($orders->has($vendor_id))
                                                        @if (count($orders[$vendor_id]) == count($carts[$vendor_id]))
                                                        checked
                                                    @endif
                                                        @endif>
                                                </div>
                                            </div>


                                            <div class="col-11">
                                                <div class="row">
                                                    @foreach ($carts[$vendor_id] as $cart)
                                                        <div class="col-11 ps-0">
                                                            @if ($loop->first)
                                                                <div class="vendor row g-0">
                                                                    <div class="col-1">
                                                                        <img src="{{ $coffees->find($cart->coffee_id)->vendor->vendor_logo }}"
                                                                            class="vendor-logo">
                                                                    </div>
                                                                    <div class="col">
                                                                        <span class="vendor-name">
                                                                            {{ $coffees->find($cart->coffee_id)->vendor->vendor_name }}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            @endif

                                                            <div class="row">

                                                                <div class="col-1">
                                                                    <div class="form-check">
                                                                        
                                                                        <input class="form-check-input item_check" type="checkbox"
                                                                            value="{{ $cart->id }}" @if ($orders->has($vendor_id))
                                                                            @if ($orders[$vendor_id]->firstWhere("cart_id", $cart->id) != null)
                                                                            checked
                                                                        @endif
                                                                            @endif>
                                                                        {{-- <input onclick="orderInput(this, 'item')"
                                                                            class="form-check-input" type="checkbox"
                                                                            value="{{ $cart->coffee_id }}"
                                                                            @if (isset(session('order_list')[$coffees->find($cart->coffee_id)->vendor->id][$cart->coffee_id])) checked @endif> --}}
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <div class="product-desc row g-0">
                                                                        <div class="col-2">
                                                                            <img class="product-img"
                                                                                src="{{ asset($coffees->find($cart->coffee_id)->product_img) }}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="col">
                                                                            <span
                                                                                class="product-title">{{ $coffees->find($cart->coffee_id)->product_name }}</span>
                                                                            <span class="price">Rp
                                                                                {{ number_format($coffees->find($cart->coffee_id)->harga_product, 0, ',', '.') }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="bottom" aria-cart-id = {{ $cart->id }}>
                                                                        <div class="d-flex">
                                                                            <div class="plus-minus-sign">
                                                                                <div class="center">
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-text">
                                                                                            <button type="button"
                                                                                                class="btn btn-number"
                                                                                                data-type="minus"
                                                                                                data-field="quant[1]">
                                                                                                <i
                                                                                                    class="fa-solid fa-circle-minus fa-lg"></i>
                                                                                            </button>
                                                                                        </span>

                                                                                        <input type="text"
                                                                                            name="quant[1]"
                                                                                            class="form-control input-number"
                                                                                            value="{{ $cart->quantity }}"
                                                                                            min="1" max="{{ $coffees->find($cart->coffee_id)->jumlah_stok }}">

                                                                                        <span class="input-group-text">
                                                                                            <button type="button"
                                                                                                class="btn btn-number"
                                                                                                data-type="plus"
                                                                                                data-field="quant[1]">
                                                                                                <i
                                                                                                    class="fa-solid fa-circle-plus fa-lg"></i>
                                                                                            </button>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <span class="input-group-text remove">
                                                                                <a
                                                                                    href="{{ route('cart.remove', $cart->coffee_id) }}">
                                                                                    <button type="button" class="btn">
                                                                                        <i
                                                                                            class="fa-solid fa-trash-can fa-lg"></i>
                                                                                    </button>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                        <div class="d-flex">
                                                                            <p class="total-price">Total Rp
                                                                                {{ number_format($cart->total_price, 0, ',', '.') }}
                                                                            </p>
                                                                            <a class="btn details"
                                                                                href="/catalog/{{ $coffees->find($cart->coffee_id)->vendor->vendor_name }}/{{ $cart->coffee_id }}"
                                                                                role="button">
                                                                                Details
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col">
                                <h5>Your cart is empty!</h5>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column border border-2 p-3 rounded-4">
                        <h3 class="fw-bold">List Produk</h3>

                        @if ($orders)
                            @foreach ($orders as $vendor_id => $value)
                                <div class="row row-cols-1 g-2 mb-2">
                                    <div class="col">
                                        @foreach ($orders[$vendor_id] as $item)
                                            @if ($loop->first)
                                                <div class="product-card card container">
                                                    <div class="vendor row g-0">
                                                        <div class="col-1">
                                                            <img src="{{ $vendors->find($vendor_id)->vendor_logo }}"
                                                                class="vendor-logo">
                                                        </div>
                                                        <div class="col">
                                                            <span class="vendor-name">
                                                                {{ $vendors->find($vendor_id)->vendor_name }}
                                                            </span>
                                                        </div>
                                                    </div>
                                            @endif
                                            <div class="product-desc row g-0">
                                                <div class="col offset-1">
                                                    <span
                                                        class="product-title">{{ $coffees->find($carts[$vendor_id]->find($item->cart_id)->coffee_id)->product_name }}</span>
                                                </div>
                                                <div class="col-3 text-end">
                                                    <span>Qty : {{ $carts[$vendor_id]->find($item->cart_id)->quantity }} pax</span>
                                                </div>
                                            </div>
                                            @if ($loop->last)
                                                <div class="row g-0">
                                                    <div class="col-12 text-end">
                                                        <span>Total : ... pax</span>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                            <a href="{{ route('cart.checkout') }}" class="text-decoration-none text-black">
                            <button type="button" class="btn bg-primary rounded-pill fw-bold w-100">
                                    Checkout
                                    <i class="fa-solid fa-bag-shopping fa-lg ms-1"></i>
                                </button>
                            </a>
                        @else
                            <p>Empty</p>
                        @endif
                    </div>

                </div>
            </div>
    </div>
    </div>
    </div>

    </section>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href={{ asset('css/style.css') }} type="text/css">
    {{-- <link rel="stylesheet" href={{ asset('css/cart.css') }} type="text/css"> --}}
@endsection

@section('js')
    <script src={{ asset('js/main.js') }}></script>
    <script src="https://kit.fontawesome.com/a72340eb77.js" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $("input.item_check").on("change", function () {
                if ($(this).is(":checked")){
                    window.location.href = "/cart/addToOrderList/" + $(this).val();
                }else {
                    window.location.href = "/cart/removeItemOrderList/" + $(this).val();
                }
            });
            $("input.vendor_check").on("change", function () {
                if ($(this).is(":checked")){
                    window.location.href = "/cart/addItemsToOrderList/" + $(this).val();
                }else {
                    window.location.href = "/cart/removeItemsOrderList/" + $(this).val();
                }
            });
            
            $('div.bottom').each(function (index, element) {
                $(this).find("button[data-type='plus']").click(function (e) { 
                    e.preventDefault();
                    var $cart_id = $(element).attr('aria-cart-id');
                    
                    $.ajax({
                        type: "get",
                        url: "/cart/plusQty/",
                        data: {'cart' : $cart_id},
                        success: function (response) {
                            location.reload();
                        }
                    });
                });

                $(this).find('input[name="quant[1]"]').on('change', function () {
                    var $cart_id = $(element).attr('aria-cart-id');
                    var $value = $(this).val();
                    
                    $.ajax({
                        type: "get",
                        url: "/cart/updateQty/",
                        data: {'cart' : $cart_id,
                                'value' : $value},
                        success: function (response) {
                            location.reload();
                        }
                    });
                });

                $(this).find("button[data-type='minus']").click(function (e) { 
                    e.preventDefault();
                    var $cart_id = $(element).attr('aria-cart-id');
                    
                    $.ajax({
                        type: "get",
                        url: "/cart/minusQty/",
                        data: {'cart' : $cart_id},
                        success: function (response) {
                            location.reload();
                        }
                    });
                });
            });
        });
    </script>
@endsection
