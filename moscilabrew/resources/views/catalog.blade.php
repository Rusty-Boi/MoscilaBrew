@extends('layouts.master')
@section('title', 'Catalog')

@section('navbar')
    @include('layouts.header')
@endsection

@section('content')
    <div class="container nav-on">

        <h2>Bean Category</h2>

        <div class="row g-2 g-lg-3">
            <div class="col-2 d-none d-lg-inline">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item filterBar">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Arabica
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item filterBar">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Robusta
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item filterBar">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Espresso Blend
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item filterBar">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                House Blend
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                    <li><a href="#" class="filterItem link-body-emphasis text-decoration-none">Robusta
                                            origin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container text-center">
                    <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
                        <div class="col product">
                            <img src="product1.jpg" alt="Product 1">
                            <div class="product-info">
                                <h2 class="product-title">Product 1</h2>
                                <p class="product-description">Description of Product 1</p>
                                <p class="product-price">$99.99</p>
                            </div>
                        </div>
                        <div class="col product">
                            <img src="product1.jpg" alt="Product 1">
                            <div class="product-info">
                                <h2 class="product-title">Product 1</h2>
                                <p class="product-description">Description of Product 1</p>
                                <p class="product-price">$99.99</p>
                            </div>
                        </div>
                        <div class="col product">
                            <img src="product1.jpg" alt="Product 1">
                            <div class="product-info">
                                <h2 class="product-title">Product 1</h2>
                                <p class="product-description">Description of Product 1</p>
                                <p class="product-price">$99.99</p>
                            </div>
                        </div>
                        <div class="col product">
                            <img src="product1.jpg" alt="Product 1">
                            <div class="product-info">
                                <h2 class="product-title">Product 1</h2>
                                <p class="product-description">Description of Product 1</p>
                                <p class="product-price">$99.99</p>
                            </div>
                        </div>
                        <div class="col product">
                            <img src="product1.jpg" alt="Product 1">
                            <div class="product-info">
                                <h2 class="product-title">Product 1</h2>
                                <p class="product-description">Description of Product 1</p>
                                <p class="product-price">$99.99</p>
                            </div>
                        </div>
                        <div class="col product">
                            <img src="product1.jpg" alt="Product 1">
                            <div class="product-info">
                                <h2 class="product-title">Product 1</h2>
                                <p class="product-description">Description of Product 1</p>
                                <p class="product-price">$99.99</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="popular-purchase text-center mt-2">
          <h2>Popular Purchases</h2>
          <div class="row">
            <div class="col">
              Arabica
            </div>
          </div>
        </div> --}}
    </div>
@endsection

@section('js')
    {{-- <script src="index.js"></script> --}}
@endsection
