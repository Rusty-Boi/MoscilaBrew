@extends('layouts.master')
@section('title', 'Cart | MoscilBrew')

@section('navbar')
    @include('layouts.header')
@endsection

@section('bodyClass', 'cartPage')

@section('content')
    <div class="container-fluid container-lg">
        <section id="..." class="... nav-on">

            <div class="section-title text-start">
                <h2>Keranjang</h2>
            </div>

            <div class="row">
                <div class="col-7">
                    <div class="row row-cols-1 g-2">
                        @if (session('cart'))

                            @foreach (session('cart') as $vendor_items)
                                <div class="col">
                                    <div class="product-card card container">
                                        <div class="row">

                                            @foreach ($vendor_items as $item)
                                                <div class="col-1">
                                                    <div class="form-check">
                                                        <input onclick="orderInput(this, 'items')" class="form-check-input" type="checkbox" id="checkboxNoLabel"
                                                            value="{{ $coffees->find($item['coffee_id'])->vendor->id }}"
                                                            @if (isset(session('order_list')[$coffees->find($item['coffee_id'])->vendor->id])) checked @endif>
                                                    </div>
                                                </div>

                                                <div class="col-11 ps-0">
                                                    @if ($loop->first)
                                                        <div class="vendor row g-0">
                                                            <div class="col-1">
                                                                <img src="{{ $coffees->find($item['coffee_id'])->vendor->vendor_logo }}"
                                                                    class="vendor-logo">
                                                            </div>
                                                            <div class="col">
                                                                <span class="vendor-name">
                                                                    {{ $coffees->find($item['coffee_id'])->vendor->vendor_name }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <div class="row">

                                                        <div class="col-1">
                                                            <div class="form-check">
                                                                <input onclick="orderInput(this, 'item')" class="form-check-input"
                                                                    type="checkbox" value="{{ $item['coffee_id'] }}"
                                                                    @if (isset(session('order_list')[$coffees->find($item['coffee_id'])->vendor->id][$item['coffee_id']])) checked @endif>
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="product-desc row g-0">
                                                                <div class="col-2">
                                                                    <img class="product-img"
                                                                        src="{{ asset($coffees->find($item['coffee_id'])->product_img) }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="col">
                                                                    <span
                                                                        class="product-title">{{ $coffees->find($item['coffee_id'])->product_name }}</span>
                                                                    <span class="price">Rp
                                                                        {{ number_format($coffees->find($item['coffee_id'])->harga_product, 0, ',', '.') }}</span>
                                                                </div>
                                                            </div>

                                                            <div class="bottom">
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

                                                                                <input type="text" name="quant[1]"
                                                                                    class="form-control input-number"
                                                                                    value="{{ $item['quantity'] }}"
                                                                                    min="1" max="10">

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
                                                                            href="{{ route('cart.remove', $item['coffee_id']) }}">
                                                                            <button type="button" class="btn">
                                                                                <i class="fa-solid fa-trash-can fa-lg"></i>
                                                                            </button>
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="total-price">Total Rp
                                                                        {{ number_format($item['total_price'], 0, ',', '.') }}
                                                                    </p>
                                                                    <a class="btn details"
                                                                        href="/catalog/{{ $coffees->find($item['coffee_id'])->vendor->vendor_name }}/{{ $item['coffee_id'] }}"
                                                                        role="button">
                                                                        Details
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endforeach


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

                    @if (!empty(session('order_list')))
                        @foreach (session('order_list') as $items)
                            <div class="row row-cols-1 g-2 mb-2">
                                <div class="col">
                                    @foreach ($items as $item)
                                        @if ($loop->first)
                                            <div class="product-card card container">

                                                <div class="vendor row g-0">
                                                    <div class="col-1">
                                                        <img src="{{ $coffees->find($item['coffee_id'])->vendor->vendor_logo }}"
                                                            class="vendor-logo">
                                                    </div>
                                                    <div class="col">
                                                        <span class="vendor-name">
                                                            {{ $coffees->find($item['coffee_id'])->vendor->vendor_name }}
                                                        </span>
                                                    </div>
                                                </div>
                                        @endif

                                        <div class="product-desc row g-0">
                                            <div class="col offset-1">
                                                <span
                                                    class="product-title">{{ $coffees->find($item['coffee_id'])->product_name }}</span>
                                            </div>
                                            <div class="col-3 text-end">
                                                <span>Qty : {{ $item['quantity'] }} pax</span>
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
                    @endif
                    <button type="button" class="btn bg-primary rounded-pill fw-bold">
                        Beli
                        <i class="fa-solid fa-bag-shopping fa-lg ms-1"></i>
                    </button>
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
@endsection
