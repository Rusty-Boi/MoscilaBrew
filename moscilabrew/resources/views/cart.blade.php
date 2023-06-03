@extends('layouts.master')
@section('title', '...')

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
                        <div class="col">
                            <div class="product-card card container">
                                <div class="row">
                                    <div class="col-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel"
                                                value="" aria-label="...">
                                        </div>
                                    </div>
                                    <div class="col-11">
                                        <div class="vendor row g-0">
                                            <div class="col-1">
                                                <img src="{{ 'img/coffee-pack.png' }}" class="vendor-logo">
                                            </div>
                                            <div class="col">
                                                <span class="vendor-name">
                                                    Vendor Name
                                                </span>
                                            </div>
                                        </div>
                                        <div class="product-desc row g-0">
                                            <div class="col-2">
                                                <img class="product-img" src="{{ 'img/aceh-gayo.png' }}" alt="">
                                            </div>
                                            <div class="col">
                                                <span class="product-title">Kopi Gayo</span>
                                                <span class="price">Rp.90.000</span>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="d-flex">
                                                <div class="plus-minus-sign">
                                                    <div class="center">
                                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                                <button type="button" class="btn btn-number"
                                                                    disabled="disabled" data-type="minus"
                                                                    data-field="quant[1]">
                                                                    <i class="fa-solid fa-circle-minus fa-lg"></i>
                                                                </button>
                                                            </span>
                                                            <input type="text" name="quant[1]"
                                                                class="form-control input-number" value="1"
                                                                min="1" max="10">
                                                            <span class="input-group-text">
                                                                <button type="button" class="btn btn-number"
                                                                    data-type="plus" data-field="quant[1]">
                                                                    <i class="fa-solid fa-circle-plus fa-lg"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="input-group-text remove">
                                                    <button type="button" class="btn">
                                                        <i class="fa-solid fa-trash-can fa-lg"></i>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="d-flex">
                                                <p class="total-price">Total Rp 180.000</p>
                                                <a class="btn details" href="#" role="button">
                                                    Details
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card card container">
                                <div class="row">
                                    <div class="col-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel"
                                                value="" aria-label="...">
                                        </div>
                                    </div>
                                    <div class="col-11">
                                        <div class="vendor row g-0">
                                            <div class="col-1">
                                                <img src="{{ 'img/coffee-pack.png' }}" class="vendor-logo">
                                            </div>
                                            <div class="col">
                                                <span class="vendor-name">
                                                    Vendor Name
                                                </span>
                                            </div>
                                        </div>
                                        <div class="product-desc row g-0">
                                            <div class="col-2">
                                                <img class="product-img" src="{{ 'img/aceh-gayo.png' }}" alt="">
                                            </div>
                                            <div class="col">
                                                <span class="product-title">Kopi Gayo</span>
                                                <span class="price">Rp.90.000</span>
                                            </div>
                                        </div>
                                        <div class="bottom">
                                            <div class="d-flex">
                                                <div class="plus-minus-sign">
                                                    <div class="center">
                                                        <div class="input-group">
                                                            <span class="input-group-text">
                                                                <button type="button" class="btn btn-number"
                                                                    disabled="disabled" data-type="minus"
                                                                    data-field="quant[1]">
                                                                    <i class="fa-solid fa-circle-minus fa-lg"></i>
                                                                </button>
                                                            </span>
                                                            <input type="text" name="quant[1]"
                                                                class="form-control input-number" value="1"
                                                                min="1" max="10">
                                                            <span class="input-group-text">
                                                                <button type="button" class="btn btn-number"
                                                                    data-type="plus" data-field="quant[1]">
                                                                    <i class="fa-solid fa-circle-plus fa-lg"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="input-group-text remove">
                                                    <button type="button" class="btn">
                                                        <i class="fa-solid fa-trash-can fa-lg"></i>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="d-flex">
                                                <p class="total-price">Total Rp 180.000</p>
                                                <a class="btn details" href="#" role="button">
                                                    Details
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column border border-2 p-3 rounded-4">
                        <h3 class="fw-bold">List Produk</h3>

                        <div class="row row-cols-1 g-2 mb-2">
                            <div class="col">
                                <div class="product-card card container">
                                    <div class="vendor row g-0">
                                        <div class="col-1">
                                            <img src="{{ 'img/coffee-pack.png' }}" class="vendor-logo">
                                        </div>
                                        <div class="col">
                                            <span class="vendor-name">
                                                Vendor Name
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-desc row g-0">
                                        <div class="col-2">
                                            <img class="product-img" src="{{ 'img/aceh-gayo.png' }}" alt="">
                                        </div>
                                        <div class="col">
                                            <span class="product-title">Kopi Gayo</span>
        
                                            <div class="bottom mb-0">
                                                <div class="d-flex mb-0">
                                                    <div class="plus-minus-sign mb-0">
                                                        <div class="center mb-0">
                                                            <div class="input-group mb-0">
                                                                <span class="input-group-text">
                                                                    <button type="button" class="btn btn-number"
                                                                        disabled="disabled" data-type="minus"
                                                                        data-field="quant[1]">
                                                                        <i class="fa-solid fa-circle-minus fa-lg"></i>
                                                                    </button>
                                                                </span>
                                                                <input type="text" name="quant[1]"
                                                                    class="form-control input-number" value="1"
                                                                    min="1" max="10">
                                                                <span class="input-group-text">
                                                                    <button type="button" class="btn btn-number"
                                                                        data-type="plus" data-field="quant[1]">
                                                                        <i class="fa-solid fa-circle-plus fa-lg"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="input-group-text remove">
                                                        <button type="button" class="btn">
                                                            <i class="fa-solid fa-trash-can fa-lg"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn bg-primary rounded-pill fw-bold">
                            Beli
                            <i class="fa-solid fa-bag-shopping fa-lg ms-1"></i>
                        </button>
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
