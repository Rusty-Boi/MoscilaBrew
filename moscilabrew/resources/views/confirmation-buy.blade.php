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
            <div class="row gx-3"  style="width: 31.8rem;">
                <div class="col">
                    <h4>Delivery

                    </h4>
                    <div class="bg-desertSand-30 p-2 rounded-3 border border-2" style="font-size: small;">
                        <p class="fw-bold">Home</p>
                        <p class="mb-0">
                            {{ Auth::user()->address }}
                        </p>
                        <p class="mb-0 fw-semibold">{{ Auth::user()->phone_number }}</p>
                    </div>
                </div>  
            </div>
            <div class="row gx-3 "> 
                
                <div class="col-7" style="padding-right: 10rem;">
                    @foreach ($transactions as $transaction)
                        <div class="bg-desertSand-30 rounded-4 mt-3" >
                            <img class="w-100" src="beans-tall.png" alt="">
                            <div class="container d-flex justify-content-between py-2">
                                <div>
                                    <p class="mb-0">{{ $transaction['vendor-name'] }}</p>
                                    <p class="fw-bold ms-3 mb-0" style="font-size: small;">Gold-Partners</p>
                                </div>
                                <div class="position-relative d-flex align-items-center">
                                    <img class="position-absolute" src="single-beans.png" alt="" style="min-width: 3rem; max-width: 100%; transform: translate(-100%, 20%);">
                                    <img src="black-hole.png" alt="" style="width: 2rem; max-width: 100%;">
                                </div>
                            </div>
                        </div>
                        <div class="row gy-2">
                            @foreach ($transaction['product-items'] as $item)
                                <div class="col-12">
                                    <div class="card border border-0">
                                        <div class="card-body px-0">
                                            <h5 class="card-title">What you buy:</h5>
                                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                                <img src="coffee-pack.png" alt="" style="width: 2rem; max-width: 100%;">
                                                {{ $item['product-title'] }}
                                            </h6>
                                            <p class="card-text">
                                                <img class="mb-2" src="{{ $item['product-img'] }}" alt="">
                                                <br>
                                                Total
                                                <span class="rounded-3 py-2 px-5 mx-2 bg-desertSand-30">{{ $item['qty'] }}</span>
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
                                    {{ $item['qty'] }} x {{ $item['price'] }} = Rp. 180.000
                                    </p>
                                </div>
                            @endforeach
                            <div class="col-12">
                                <div id="deliveryOptions">
                                    <h6 class="title fw-semibold mt-2">Select delivery options</h6>
                                    <div class="container mt-2">
                                        <div class="row border border-2 rounded-3 p-2" style="background-color: #F8F8F8;">
                                            <div class="col-3 d-flex align-items-center">
                                                <div name = "delivery_ops" class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="jnt" id="jnt" onclick="changeColor()">
                                                    <label class="form-check-label" for="jnt">
                                                    JNT
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <select class="form-select form-select-sm rounded-4 mx-2 text-center" aria-label="Default select example">
                                                    <option selected>Reguler</option>
                                                    <option value="1a">One day</option>
                                                    <option value="2a">Ekonomi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container mt-2">
                                        <div class="row border border-2 rounded-3 p-2" style="background-color: #F8F8F8;">
                                            <div class="col-3 d-flex align-items-center">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="sicepat" id="sicepat" onclick="changeColor()">
                                                    <label class="form-check-label" for="sicepat">
                                                    SiCepat
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <select class="form-select form-select-sm rounded-4 mx-2 text-center" aria-label="Default select example">
                                                    <option selected>Reguler</option>
                                                    <option value="1b">One day</option>
                                                    <option value="2b">Ekonomi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    @endforeach
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
                        <a name="" id="" data-bs-toggle="modal" data-bs-target="#buyPop" class="btn w-50 mx-auto d-block" href="#" role="button" style="background-color: #EFC3A4;">Beli</a>
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
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pm" aria-expanded="true" aria-controls="pm">
                            Select Payment
                          </button>
                        </h2>
                        <div id="pm" class="accordion-collapse collapse" data-bs-parent="#payMethod">
                          <div class="accordion-body">
                            <ul class="list-group list-unstyled">
                                <div class="accordion-item filterBar">
                                    <h2 class="accordion-header">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        E-Money
                                      </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse">
                                      <div class="accordion-body">
                                        <li><a value = "1pa" href="#" class="d-flex ms-3 justify-content-between align-items-center list-group-item"><img class="w-5" style="height: 2rem; width: 5rem;" src="/Assets/Logo-Ovo-Png 1.png">></a></li>
                                        <li><a value = "2pa" href="#" class="d-flex ms-3 justify-content-between align-items-center list-group-item"><img class="w-5" style="height: 1rem; width: 5rem;" src="/Assets/gopay.png">></a></li>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item filterBar">
                                    <h2 class="accordion-header">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Debit
                                      </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse">
                                      <div class="accordion-body">
                                        <ul class="list-group list-unstyled">
                                          <li><a value = "1pb" href="#" class="d-flex ms-3 justify-content-between align-items-center list-group-item"><img class="w-5" style="height: 2rem; width: 5rem;" src="/Assets/mandiriLogo.png">></a></li>
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
            </div>
            <div class="row m-3 justify-content-center ">
                <a name="" id="buyBtn" href="#" class="btn w-50 btn-primary" style="border: none; background-color: #EFC3A4; color: black;">Buy</a>
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
  
@endsection
