@extends('layouts.master')
@section('title', 'Blend Coffee Checkout')

@section('navbar')
    @include('layouts.header')
@endsection

@section('bodyClass', 'confirmationBuyCoffeeBlendPage')

@section('content')
    <div class="container-fluid">
        <section id="confirmation-buy-custom-blend" class="confirmation-buy-custom-blend nav-on">

            <div class="section-title text-start">
                <h2>Keranjang</h2>
            </div>
            <form action="{{ route('coffeeBlend.buy') }}" method="POST">
                @csrf
                <div class="row gx-4">
                    <div class="col-7">
                        <div class="card vendor-card rounded-4 text-decoration-none" href="#">
                            <img src="{{ asset('img/beans-tall.png') }}" class="card-img-top">
                            <div class="card-body p-2">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title vendor-name mb-0">
                                            {{ $coffeeBlendData['blend_vendor']->vendor_name }}</h5>
                                        <p class="card-text partner-status">
                                            Gold Partner
                                            <img class="m-0 vendor-img"
                                                src={{ asset($partners_status_img['Gold Partner']) }} alt="">
                                        </p>
                                    </div>
                                    <div class="col-3">
                                        <img class="black-hole" src="{{ asset('img/black-hole.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row gy-2">
                            <div class="col-12">
                                <div class="card border border-0">
                                    <div class="card-body px-0 pb-0">

                                        <h5 class="card-title">What you buy:</h5>
                                        <h6 class="card-subtitle mb-2 text-body-secondary d-flex align-items-center">
                                            <img src="{{ asset('img/coffee-pack.png') }}" alt=""
                                                style="width: 2rem; max-width: 100%;">
                                            Blend Coffee
                                        </h6>

                                        <p class="card-text">
                                        <div class="container">


                                            @for ($i = 0; $i < count(session('coffeeBlendData')['beans']); $i++)
                                                <div class="row takaran-coffee-blend">
                                                    @if ($i == 0)
                                                        <p class="col-2 px-0 fw-bold align-self-center">Base</p>
                                                    @else
                                                        @if ($i == 1)
                                                            <p class="col-2 px-0 fw-bold align-self-center">Primary</p>
                                                        @else
                                                            <p class="col-2 px-0 fw-bold align-self-center">Secondary</p>
                                                        @endif
                                                    @endif

                                                    <p class="col-6 px-0 align-self-center text-truncate">
                                                        {{ session('coffeeBlendData')['beans'][array_keys(session('coffeeBlendData')['beans'])[$i]]['coffee']->product_name }}
                                                    </p>
                                                    <div class="col-3 rounded-pill percentage-group">
                                                        <p class="percentage-text position-relative z-1">
                                                            {{ session('coffeeBlendData')['beans'][array_keys(session('coffeeBlendData')['beans'])[$i]]['ratio'] * 10 }}%
                                                        </p>
                                                        <div class="percentage-bar rounded-start-pill"></div>
                                                    </div>
                                                </div>
                                            @endfor

                                            <div class="row mt-2">
                                                <div
                                                    class="col text-center mb-0 d-flex align-items-center justify-content-center">
                                                    <p class="mb-0">Weight</p>

                                                    <select class="form-select mx-3" aria-label="weight"
                                                        style="width: 5rem">
                                                        <option selected>200</option>
                                                        <option value="1">400</option>
                                                        <option value="2">600</option>
                                                        <option value="3">800</option>
                                                    </select>

                                                    <p class="mb-0">gr</p>
                                                </div>
                                            </div>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col d-flex justify-content-between fw-bold">
                                <p>
                                    Subtotal
                                </p>
                                <p class='blend_price'>
                                    Rp 0
                                </p>
                            </div>
                            <div class="col-12 deliveryCol">
                                <h4>Delivery</h4>
                                <div class="bg-desertSand-30 p-2 rounded-3 border border-2" style="font-size: small;">
                                    <p class="fw-bold">Home</p>
                                    <p class="mb-0">
                                        {{ Auth::user()->address }}
                                    </p>
                                    <p class="mb-0 fw-semibold">{{ Auth::user()->phone_number }}</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="deliveryOptions">
                                    <h6 class="title fw-semibold mt-2">Select delivery options</h6>
                                    <div class="container mt-2">
                                        @foreach ($deliveries[session('coffeeBlendData')['blend_vendor']->id]->groupBy('delivery_name') as $delivery_name => $delivery_item)
                                            <div class="row border border-2 rounded-3 p-2 deliveryField"
                                                style="background-color: #F8F8F8;">
                                                <div class="col-3 d-flex align-items-center">
                                                    <div class="form-radio mb-0">
                                                        {{-- <input class="form-radio-input" type="radio" value="{{$delivery_name}}" --}}
                                                        <input checked class="form-radio-input" type="radio"
                                                            value="" id="{{ $delivery_name }}"
                                                            name="deliveryId{{ session('coffeeBlendData')['blend_vendor']->id }}">
                                                        <label class="form-radio-label" for="{{ $delivery_name }}">
                                                            {{ $delivery_name }}
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <select class="form-select form-select-sm rounded-4 mx-2"
                                                        aria-label="deliveryChoice">
                                                        @foreach ($delivery_item as $item)
                                                            <option aria-delivery-detail-id={{ $item->deliveryDetail_id }}
                                                                @if ($loop->first) selected @endif>
                                                                {{ $item->service_name }}</option>
                                                        @endforeach
                                                        {{-- <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option> --}}
                                                    </select>
                                                </div>
                                                {{-- <div class="col">
                                                <select class="form-select form-select-sm rounded-4 mx-2"
                                                    aria-label="Default select example">
                                                    <option selected>Reguler</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div> --}}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-5">
                        <div class="border border-2 p-3 rounded-4">
                            <p class="fw-bold">Ringkasan Belanja</p>
                            <div class="d-flex justify-content-between">
                                <p>Blend Coffee</p>
                                <p class='blend_price'>Rp {{ number_format($coffeeBlendData['blend_price'], 0, ',', '.') }}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Delivery-fee</p>
                                <p>Rp {{ number_format($coffeeBlendData['total_delivery'], 0, ',', '.') }}</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between fw-bold">
                                <p>Total Harga</p>
                                <p class="total-harga">Rp {{ number_format($coffeeBlendData['subtotal'], 0, ',', '.') }}</p>
                            </div>
                            <a name="" id="" data-bs-toggle="modal" data-bs-target="#buyPop"
                            class="btn w-50 mx-auto d-block" href="#" role="button"
                            style="background-color: #EFC3A4;">Beli</a>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>

    <div class="modal fade" id="buyPop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="">Payment</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-10 d-flex flex-column">
                    <div class="border border-2 p-3 rounded-4">
                        <p class="fw-bold">Payment Method</p>
                        <div class="accordion" id="payMethod">
                            <div class="accordion-item filterBar">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#pm" aria-expanded="true" aria-controls="pm">
                                        Select Payment
                                    </button>
                                </h2>
                                <div id="pm" class="accordion-collapse collapse" data-bs-parent="#payMethod">
                                    <div class="accordion-body">
                                        <ul class="list-group list-unstyled">
                                            <div class="accordion-item filterBar">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        E-Money
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse">
                                                    <div class="accordion-body">
                                                        <li><a href="#"
                                                                class="disabled d-flex ms-3 justify-content-between align-items-center list-group-item"><img
                                                                    class="w-5" style="height: 2rem; width: 5rem;"
                                                                    src="{{ asset('img/Logo-Ovo-Png 1.png') }}"></a></li>
                                                        <li><a href="#"
                                                                class="disabled d-flex ms-3 justify-content-between align-items-center list-group-item"><img
                                                                    class="w-5" style="height: 1rem; width: 5rem;"
                                                                    src="{{ asset('img/gopay.png') }}"></a></li>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item filterBar">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="true" aria-controls="collapseTwo">
                                                        Debit
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse">
                                                    <div class="accordion-body">
                                                        <ul class="list-group list-unstyled">
                                                            <li><a href="#" id='btn_mandiri'
                                                                    class="d-flex ms-3 justify-content-between align-items-center list-group-item"><img
                                                                        class="w-5" style="height: 2rem; width: 5rem;"
                                                                        src="{{ asset('img/mandiriLogo.png') }}">></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border border-2 p-3 rounded-4">
                        <p class="fw-bold">Payment Summary</p>
                        <div class="d-flex justify-content-between">
                            <p>Coffee Blend</p>
                            <p class="blend_price">Rp {{ number_format((session('priceDetail')['blend_price'] ?? '0'), 0, ',', '.') }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Delivery-fee</p>
                            <p>Rp {{ number_format($coffeeBlendData['total_delivery'], 0, ',', '.') }}</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between fw-bold">
                            <p>Total Harga</p>
                            <p class="total-harga">Rp {{ number_format((session('priceDetail')['subtotal'] ?? '0'), 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div class="row m-3 justify-content-center">
                        <a id="buyBtn" href="{{ route('showWaitingPayment2', ['total_harga' => (session('priceDetail')['subtotal'] ?? '0')]) }}" class="btn w-50 btn-primary"
                            style="border: none; background-color: #EFC3A4; color: black;">Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href={{ asset('css/style.css') }} type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection

@section('js')
    <script src={{ asset('js/main.js') }}></script>

    <script>
        $(document).ready(function() {
            $('select[aria-label="weight"]').change(function(e) {
                e.preventDefault();
                var value = $(this).find(':selected').text();
                $.ajax({
                    type: "get",
                    url: "/coffee-blend/set-weight",
                    data: {
                        "weight": value
                    },
                    success: function(response) {
                        
                        var total = response['subtotal']
                        $("p.blend_price").html("Rp " + response['blend_price']);
                        $("p.total-harga").html("Rp " + response['subtotal']);
                        $('#buyBtn').attr(`href`, "/waiting-payment/2?total_harga="+total)
                    }
                });
            });
        });
    </script>

    {{-- <script>
        var delivery_address_list = {{ Js::from($delivery_address_list) }}
        var delivery_address_choice = {{ Js::from($delivery_address_default) }}
    </script>
    <script>
        function updateDeliveryAddress() {
            // delivery address
            // isikan data delivery address berdasarkan nilai dari input[name='delivery_address_label']
            // mendapatkan elemen .deliveryCol
            var delivery_col = $('.deliveryCol')
            // mendapatkan input[name='delivery_address_label']
            var delivery_address_label = delivery_col.find("#delivery_address input[name='delivery_address_label']").val()
            // mendapatkan label2index
            delivery_address_list.forEach(element => {
                if (element['label'] === delivery_address_label) {
                    // mengisi label 
                    $(delivery_col).find('#delivery_address span.label').html(element['label']);
                    // mengisi address
                    $(delivery_col).find('#delivery_address p.address').html(element['address']);
                    // mengisi phone_number
                    $(delivery_col).find('#delivery_address p.phone_number').html(element['phone_number']);                
                }
            });
        }

        $(document).ready(function() {
            updateDeliveryAddress()

            // untuk setiap button.delivery_address_option
            $("button.delivery_address_option").each(function(index, element) {
                // ketika salah satu button.delivery_address_option diklik
                $(element).click(function(e) {
                    e.preventDefault();
                    // higlight
                    $("button.delivery_address_option.selected-1").removeClass('selected-1');
                    $(this).addClass('selected-1');
                    // ketika tombol save changes diklik
                    $("button.save-changes").click(function (e) { 
                        e.preventDefault();
                        // ubah value input[name='delivery_address_label'] dengan text pada button.delivery_address_option
                        $("input[name='delivery_address_label']").val($(element).find('.label').html());                        
                        
                        // tutup modal dialog
                        $('button[data-bs-dismiss="modal"]').click();

                        // updateDeliveryAddress
                        updateDeliveryAddress()
                        
                    });

                });
            });
        });
    </script> --}}
@endsection
