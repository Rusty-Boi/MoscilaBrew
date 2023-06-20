@extends('layouts.master')
@section('title', '...')

@section('navbar')
    @include('layouts.header')
@endsection

@section('bodyClass', 'confirmationBuyCoffeeBlendPage')

@section('content')
    <section class="nav-on">
        <div class="container-fluid">
            <h1>Keranjang</h1>
            <div class="row gx-3">
                <div class="col-7" style="padding-right: 10rem;">

                    <h4>Delivery</h4>
                    <div class="bg-desertSand-30 p-2 rounded-3 border border-2" style="font-size: small;">
                        <p class="fw-bold">Home</p>
                        <p class="mb-0">
                            {{Auth::user()->address}}
                        </p>
                        <p class="mb-0 fw-semibold">{{Auth::user()->phone_number}}</p>
                    </div>

                    @foreach ($transaction->transactionDetails->groupBy('vendor_id') as $vendor_item)
                        <div class="bg-desertSand-30 rounded-4 mt-3">
                            <img class="w-100" src="{{asset('img/beans-tall.png')}}" alt="">
                            <div class="container d-flex justify-content-between py-2">
                                <div>
                                    <p class="mb-0">{{$vendors->find($vendor_item[0]->vendor_id)->vendor_name}}</p>
                                    <p class="fw-bold ms-3 mb-0" style="font-size: small;">Gold-Partners</p>
                                </div>
                                <div class="position-relative d-flex align-items-center">
                                    <img class="position-absolute" src="{{asset('img/single-beans.png')}}" alt=""
                                        style="min-width: 3rem; max-width: 100%; transform: translate(-100%, 20%);">
                                    <img src="black-hole.png" alt="" style="width: 2rem; max-width: 100%;">
                                </div>
                            </div>
                        </div>
                        @foreach ($vendor_item as $item)
                            <div class="row gy-2">
                                <div class="col-12">
                                    <div class="card border border-0">
                                        <div class="card-body px-0">
                                            <h5 class="card-title">What you buy:</h5>
                                            {{-- <div class="row">
                                                <div class="col-3">
                                                    <img src="{{asset($coffees->find($item->coffee_id)->product_img)}}" alt="" style="width: 2rem; max-width: 100%;">
                                                </div>
                                                <div class="col">
                                                    {{$coffees->find($item->coffee_id)->product_name}}
                                                </div>
                                            </div> --}}
                                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                                <img src="{{asset($coffees->find($item->coffee_id)->product_img)}}" alt="" style="width: 8rem; max-width: 100%;">
                                                {{$coffees->find($item->coffee_id)->product_name}}
                                            </h6>
                                            <p class="card-text">
                                                <img class="mb-2" src="aceh-gayo.png" alt="">
                                                <br>
                                                Total
                                                <span class="rounded-3 py-2 px-5 mx-2 bg-desertSand-30">{{ $item->quantity }}</span>
                                                Pouch
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-between fw-bold">
                                    <p>
                                        Subtotal
                                    </p>
                                    <p>
                                        Rp {{ number_format($item->total_price, 0, ',', '.') }}
                                    </p>
                                </div>

                                @if ($loop->last)
                                <div class="col-12">
        
        
                                    <div class="deliveryOptions">
                                        <h6 class="title fw-semibold mt-2">Select delivery options</h6>
                                        <div class="container mt-2">
                                            
                                            @foreach ($deliveries[$vendor_item[0]->vendor_id]->groupBy('delivery_name') as $delivery_name => $delivery_item)
                                            <div class="row border border-2 rounded-3 p-2 deliveryField" style="background-color: #F8F8F8;">
                                                <div class="col-3 d-flex align-items-center">
                                                    <div class="form-radio mb-0">
                                                        {{-- <input class="form-radio-input" type="radio" value="{{$delivery_name}}" --}}
                                                        <input checked class="form-radio-input" type="radio" value=""
                                                            id="{{$delivery_name}}" name="deliveryId{{$vendor_item[0]->vendor_id}}">
                                                        <label class="form-radio-label" for="{{$delivery_name}}">
                                                            {{$delivery_name}}
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <select class="form-select form-select-sm rounded-4 mx-2"
                                                        aria-label="deliveryChoice">
                                                        @foreach ($delivery_item as $item)
                                                            <option aria-delivery-detail-id = {{$item->deliveryDetail_id}} @if ($loop->first) selected @endif>{{ $item->service_name }}</option>
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
                                @endif
                                
                            </div>
                        @endforeach
                    @endforeach
                    
                    

                </div>
                <div class="col-5">
                    <div class="border border-2 p-3 rounded-4">
                        <p class="fw-bold">Ringkasan Belanja</p>
                        <div class="d-flex justify-content-between">
                            <p>Blend Coffee</p>
                            <p>Rp {{ number_format($transaction->product_fee, 0, ',', '.') }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Delivery-fee</p>
                            <p>Rp {{ number_format($transaction->delivery_fee, 0, ',', '.') }}</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between fw-bold">
                            <p>Total Harga</p>
                            <p>Rp {{ number_format($transaction->subtotal, 0, ',', '.') }}</p>
                        </div>

                        <a name="" id="" data-bs-toggle="modal" data-bs-target="#buyPop"
                            class="btn w-50 mx-auto d-block" href="#" role="button"
                            style="background-color: #EFC3A4;">Beli</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            <p>Product subtotal</p>
                            <p>Rp {{ number_format($transaction->product_fee, 0, ',', '.') }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Delivery-fee</p>
                            <p>Rp {{ number_format($transaction->delivery_fee, 0, ',', '.') }}</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between fw-bold">
                            <p>Total Harga</p>
                            <p>Rp {{ number_format($transaction->subtotal, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div class="row m-3 justify-content-center ">
                        <a id="buyBtn" href="{{ route('showWaitingPayment', ['transaction' => session('transaction')]) }}" class="btn w-50 btn-primary"
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
    <script>
        $(document).ready(function () {
            window.location = {{route('setDeliveryFee')}}
        });
    </script>

    <script>
        // var deliveries = {!!$deliveries!!}
        // alert('okay')
        // function choosen(element,e) {
        //     $service_name = $(element).find(".delivery_Service_choice").find(':selected').text()
        //     alert($(e).val())
        // }
        $(document).ready(function () {
            
            $('.deliveryOptions').each(function (index, elementP) {
                // element == this
                $(elementP).find(".deliveryField").each(function (index, element) {
                    // element == this
                    // $(this).find("input.form-radio-input").on("click", function () {
                    //     $(element).find('.form-radio-input').val($(element).find('select[aria-label="deliveryChoice"]').find(':selected').attr('aria-delivery-detail-id'))
                    //     // alert($(inp).val())
                    //     // alert($(element).find('select[aria-label="deliveryChoice"]').find(':selected').attr('aria-delivery-detail-id'))                    
                    // });                    
                    // $(element).find('.form-select').on('input', function () {
                    //     $(element).find('.form-radio-input').val($(element).find('select[aria-label="deliveryChoice"]').find(':selected').attr('aria-delivery-detail-id'))
                    //     $(inp).click()
                    //     alert('ok')
                    //     // alert($(elementP).find('.form-radio-input')).val())                        
                    // });
                    // $(inp).on('change', function () {
                    //     alert($(element).find('.form-radio-input').val())
                    // });
                    $(element).find('select[aria-label="deliveryChoice"]').change(function() {
                        var deliveryId = $(this).find(':selected').attr('aria-delivery-detail-id');
                        $(element).find('input[name="deliveryId2"]').val(deliveryId);
                        alert($(element).find('input[name="deliveryId2"]').val())
                    });
                    $("#btn_mandiri").click(function (e) { 
                        e.preventDefault();
                        if ($(this).hasClass('bg-primary')){
                            $(this).removeClass('bg-primary');
                        }else {
                            $(this).addClass('bg-primary');
                        }
                        // if($(this).addClass('bg-secondary'))
                    });
                });
            });


            // $('div.delivery_process').each(function (index, element) {
            
            //     $(this).find('input.delivery_check').click(function (e) { 
            //         e.preventDefault();
            //         // alert($(this).attr('id'))
            //         // console.log(deliveries)
            //         // console.log($(element).find(".delivery_Service_choice").find(':selected').attr("aria-service-price"))
            //         $service_name = $(element).find(".delivery_Service_choice").find(':selected').text()
            //         $id = $(element).find(".delivery_Service_choice").find(':selected').attr("aria-service-id")
            //         window.location =  "/cart/calculate_total_delivery_vendor?"+ $id
                    
                    


            //     // window.location = "/cart/calculate_total_delivery_vendor";
            //     // $.ajax({
            //     //     type: "get",
            //     //     url: "/cart/calculate_total_delivery_vendor",
            //     //     data: {'price':$},
            //     //     dataType: "dataType",
            //     //     success: function (response) {
                        
            //     //     }
            //     // });
            //     });
            // });
            
     });

    </script>
@endsection
