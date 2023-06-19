@extends('layouts.master')
@section('title', '...')

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
                                                <p class="col text-center mb-0">
                                                    Weight
                                                    <span
                                                        class="rounded-3 py-2 px-5 mx-2 bg-desertSand-30 bg-danger">1000</span>
                                                    Pouch
                                                </p>
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
                                <p>
                                    Rp 180.000
                                </p>
                            </div>
                            <div class="col-12 deliveryCol">
                                <h4>Delivery</h4>
                                <div id="delivery_address" class="bg-desertSand-30 p-2 rounded-3 border border-2" style="font-size: small;">
                                    <input type="hidden" name="delivery_address_label" value="{{ $delivery_address_default }}">
                                    <p class="fw-bold ">

                                        <span class="label"></span>

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn m-0 ms-1 p-0 border-0" data-bs-toggle="modal"
                                            data-bs-target="#delivery_address_modal">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>

                                    </p>
                                    <p class="mb-0 address"></p>
                                    <p class="mb-0 fw-semibold phone_number"></p>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="delivery_address_modal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delivery Address
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                @foreach ($delivery_address_list as $item)
                                                    <button type="button"
                                                        class="btn m-0 mb-2 p-0 border-0 text-start delivery_address_option @if ($item['label'] == $delivery_address_default) selected-1 @endif">
                                                        <div class="bg-desertSand-30 p-2 rounded-3 border border-2"
                                                            style="font-size: small;">
                                                            <p class="fw-bold">
                                                                <span class="label">{{ $item['label'] }}</span>
                                                            </p>
                                                            <p class="mb-0 address">
                                                                {{ $item['address'] }}
                                                            </p>
                                                            <p class="mb-0 fw-semibold phone_number">
                                                                {{ $item['phone_number'] }}</p>
                                                        </div>
                                                    </button>
                                                @endforeach
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary save-changes">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="deliveryOptions">
                                    <h6 class="title fw-semibold mt-2">Select delivery options</h6>
                                    <div class="container mt-2">
                                        <div class="row border border-2 rounded-3 p-2" style="background-color: #F8F8F8;">
                                            <div class="col-3 d-flex align-items-center">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="radio" name='delivery_name'
                                                        id="jnt" onclick="changeColor()" value='jnt'>
                                                    <label class="form-check-label" for="jnt">
                                                        JNT
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <select class="form-select form-select-sm rounded-4 mx-2"
                                                    aria-label="Default select example">
                                                    <option selected>Reguler</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="form-select form-select-sm rounded-4 mx-2"
                                                    aria-label="Default select example">
                                                    <option selected>Reguler</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container mt-2">
                                        <div class="row border border-2 rounded-3 p-2" style="background-color: #F8F8F8;">
                                            <div class="col-3 d-flex align-items-center">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="radio" name='delivery_name'
                                                        id="sicepat" onclick="changeColor()" value='sicepat'>
                                                    <label class="form-check-label" for="sicepat">
                                                        SiCepat
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <select class="form-select form-select-sm rounded-4 mx-2"
                                                    aria-label="Default select example">
                                                    <option selected>Reguler</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="form-select form-select-sm rounded-4 mx-2"
                                                    aria-label="Default select example">
                                                    <option selected>Reguler</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
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
                                <p>Rp 180.000</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Delivery-fee</p>
                                <p>Rp 20.000</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between fw-bold">
                                <p>Total Harga</p>
                                <p>Rp 200.000</p>
                            </div>
                            <button type="submit" class="btn w-50 mx-auto d-block"
                                style="background-color: #EFC3A4;">Beli</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href={{ asset('css/style.css') }} type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection

@section('js')
    <script>
        var delivery_address_list = {{ Js::from($delivery_address_list) }}
        var delivery_address_choice = {{ Js::from($delivery_address_default) }}
    </script>
    <script src={{ asset('js/main.js') }}></script>
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
    </script>
@endsection
