@extends('layouts.master')
@section('title', 'MoscilaBrew')

@section('navbar')
    @include('layouts.header')
@endsection

@section('bodyClass', 'homePage')

@section('content')
    <!-- Carousel Section - Home Page -->
    <section class="carousel nav-on" id="carousel">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carousel_item as $item)
                  <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ $item['img'] }}" class="d-block object-fit-cover w-100 vh-md-90"
                        alt="...">
                    <h1 class="carousel-caption">
                        {{ $item['coffee-name'] }}
                    </h1>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- End of Carousel -->

    {{-- services section - Home Page --}}
    <section class="services" id="services">
        <div class="container">
            <div class="row justify-content-center align-items-stretch g-2 g-md-0">
                @foreach ($services as $service)
                    <div class="service col-11 col-md-3">
                        <img src="{{ $service['img'] }}" alt="">
                        <h4 class="title">{{ $service['name'] }}</h4>
                        <p class="subtitle">{{ $service['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- end services section - Home Page --}}

    <section id="featured" class="featured">
        <div class="container">
            <div class="section-title">
                <h2>Featured Coffee Catalog</h2>
            </div>
            <div class="row justify-content-center align-items-center g-2 g-md-3">
                @foreach ($featured_coffee_catalog as $coffee)
                    <div class="col-11 col-md-3">
                        <a class="featured-content" href="#">
                            <img src="{{ $coffee['img'] }}" alt="">
                            <span class="caption">{{ $coffee['coffee-name'] }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href={{ asset('css/style.css') }} type="text/css">
@endsection

@section('js')
    <script src={{ asset('js/index.js') }}></script>
@endsection
