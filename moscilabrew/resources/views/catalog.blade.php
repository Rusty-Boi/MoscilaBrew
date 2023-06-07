@extends('layouts.master')
@section('title', 'Catalog')

@section('navbar')
    @include('layouts.header')
@endsection

@section('bodyClass', 'catalogPage')

@section('content')
    <section class="categories nav-on" id="categories">
        <div class="container">

            <div class="section-title text-start">
                <h2>Jenis Biji Kopi</h2>
            </div>

            <div class="container">
                <div class="row justify-content-center g-3">
                    <div class="col-3 d-none d-md-block">
                        <div class="accordion" id="accordionExample">

                            @foreach ($bean_categories as $bean_cat)
                                <div class="accordion-item filterBar">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $bean_cat }}" aria-expanded="false"
                                            aria-controls="collapse{{ $bean_cat }}">
                                            {{ ucwords($bean_cat) }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $bean_cat }}" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="/catalog/{{$bean_cat}}"
                                                        class="filterItem link-body-emphasis text-decoration-none">
                                                        {{ ucwords($bean_cat) }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col">
                        <div class="row row-cols-1 row-cols-md-2 g-2">
                            @foreach ($coffees as $coffee)
                                <div class="col">
                                    <a class="product-card card container"
                                        href="/catalog/{{ $coffee->vendor->vendor_id }}/{{ $coffee->product_id }}">
                                        <div class="vendor row g-0">
                                            <div class="col-1">
                                                <img src={{ asset($coffee->vendor->vendor_logo) }} class="vendor-logo">
                                            </div>
                                            <div class="col">
                                                <span class="vendor-name">
                                                    {{ $coffee->vendor->vendor_name }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="product-desc row g-0">
                                            <div class="col-4">
                                                <img class="product-img" src="{{ asset($coffee->product_img) }}" alt="">
                                            </div>
                                            <div class="col">
                                                <span class="product-title">{{ $coffee->product_name }}</span>
                                                <span class="price">Rp {{ number_format($coffee->harga_product, 0, ',', '.') }}</span>
                                                <div class="rate-average">
                                                    <span class="rate">{{ $coffee->rating_product }}</span>
                                                    <span class="average">{{ $coffee->average }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row g-2 g-lg-3">
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
            </div> --}}

            {{-- <div class="popular-purchase text-center mt-2">
              <h2>Popular Purchases</h2>
              <div class="row">
                <div class="col">
                  Arabica
                </div>
              </div>
            </div> --}}
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/main.js') }}"></script>
@endsection