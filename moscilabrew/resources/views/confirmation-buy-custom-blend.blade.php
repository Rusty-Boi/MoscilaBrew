@extends('layouts.master')
@section('title', "...")

@section('navbar')
    @include('layouts.header')
@endsection

@section('content')
    <div class="container nav-on">
        <h1>Keranjang</h1>
        <div class="row gx-3">
            <div class="col-7" style="padding-right: 10rem;">
                <div class="bg-desertSand-30 rounded-4">
                    <img class="w-100" src="beans-tall.png" alt="">
                    <div class="container d-flex justify-content-between py-2">
                        <div>
                            <p class="mb-0">Vendor Name</p>
                            <p class="fw-bold ms-3 mb-0" style="font-size: small;">Gold-Partners</p>
                        </div>
                        <div class="position-relative d-flex align-items-center">
                            <img class="position-absolute" src="single-beans.png" alt="" style="min-width: 3rem; max-width: 100%; transform: translate(-100%, 20%);">
                            <img src="black-hole.png" alt="" style="width: 2rem; max-width: 100%;">
                        </div>
                    </div>
                </div>

                <div class="row gy-2">

                    <div class="col-12">
                        <div class="card border border-0">
                            <div class="card-body px-0 pb-0">
                                <h5 class="card-title">What you buy:</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary d-flex align-items-center">
                                    <img src="coffee-pack.png" alt="" style="width: 2rem; max-width: 100%;">
                                    Blend Coffee
                                </h6>
                                <p class="card-text">
                                    <div class="container">
                                        <div class="row">
                                            <p class="col-3 px-0 fw-bold align-self-center">(Base)</p>
                                            <p class="col-5 px-0 align-self-center">Arabica Sumatra</p>
                                            <p class="col-3 px-0 bg-krim text-center rounded-pill align-self-center">90%</p>
                                        </div>

                                        <div class="row">
                                            <p class="col-3 px-0 fw-bold align-self-center">(Primary)</p>
                                            <p class="col-5 px-0 align-self-center">Arabica Java</p>
                                            <p class="col-3 px-0 bg-krim text-center rounded-pill align-self-center">5%</p>
                                        </div>

                                        <div class="row">
                                            <p class="col-3 px-0 fw-bold align-self-center">(Secondary)</p>
                                            <p class="col-5 px-0 align-self-center">Arabica</p>
                                            <p class="col-3 px-0 bg-krim text-center rounded-pill align-self-center">5%</p>
                                        </div>

                                        <div class="row mt-2">
                                            <p class="col text-center mb-0">
                                                Weight
                                                <span class="rounded-3 py-2 px-5 mx-2 bg-desertSand-30">1000</span>
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
                    <div class="col-12">
                        <h4>Delivery</h4>
                        <div class="bg-desertSand-30 p-2 rounded-3 border border-2" style="font-size: small;">
                            <p class="fw-bold">Home</p>
                            <p class="mb-0">
                                Jl. Meruya Selatan No.36, RT.5/RW.1, Joglo, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11640
                            </p>
                            <p class="mb-0 fw-semibold">+62 812 9987 8847</p>
                        </div>

                        <div id="deliveryOptions">
                            <h6 class="title fw-semibold mt-2">Select delivery options</h6>
                            <div class="container mt-2">
                                <div class="row border border-2 rounded-3 p-2" style="background-color: #F8F8F8;">
                                    <div class="col-3 d-flex align-items-center">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="checkbox" value="jnt" id="jnt" onclick="changeColor()">
                                            <label class="form-check-label" for="jnt">
                                            JNT
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <select class="form-select form-select-sm rounded-4 mx-2" aria-label="Default select example">
                                            <option selected>Reguler</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-select form-select-sm rounded-4 mx-2" aria-label="Default select example">
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
                                            <input class="form-check-input" type="checkbox" value="sicepat" id="sicepat" onclick="changeColor()">
                                            <label class="form-check-label" for="sicepat">
                                            SiCepat
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <select class="form-select form-select-sm rounded-4 mx-2" aria-label="Default select example">
                                            <option selected>Reguler</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-select form-select-sm rounded-4 mx-2" aria-label="Default select example">
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
                    <a name="" id="" class="btn w-50 mx-auto d-block" href="#" role="button" style="background-color: #EFC3A4;">Beli</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
	{{-- ... --}}
@endsection

@section('js')
	{{-- ... --}}
@endsection