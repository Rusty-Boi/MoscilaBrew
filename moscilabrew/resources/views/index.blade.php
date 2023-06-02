@extends('layouts.master')
@section('title', "MoscilaBrew")

@section('navbar')
  @include('layouts.header')
@endsection

@section('bodyClass', "homePage")

@section('content')
    <!-- Carousel Section - Home Page -->
    <section class="carousel nav-on" id="carousel">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('/img/coffee-18.jpg')}}" class="d-block object-fit-cover w-100 vh-md-90" alt="...">
            <h1 class="carousel-caption">
              Arabica Coffee
            </h1>
          </div>
          <div class="carousel-item">
            <img src="{{asset('/img/coffee-18.jpg')}}" class="d-block object-fit-cover w-100 vh-md-90" alt="...">
            <h1 class="carousel-caption">
              Arabica Coffee
            </h1>
          </div>
          <div class="carousel-item">
            <img src="{{asset('/img/coffee-18.jpg')}}" class="d-block object-fit-cover w-100 vh-md-90" alt="...">
            <h1 class="carousel-caption">
              Arabica Coffee
            </h1>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- End of Carousel -->

    {{-- services section - Home Page --}}
    <section class="services" id="services">
      <div class="container-fluid">
        <div class="row justify-content-center align-items-stretch g-2 g-md-0">
          <div class="service col-11 col-md-3">
            <img src="{{asset('img/freshly-roasted.png')}}" alt="">
            <h4 class="title">Freshly Roasted</h4>
            <p class="subtitle">Roasted 12 hours before shipment</p>
          </div>
          <div class="service col-11 col-md-3">
            <img src="{{asset('img/freshly-roasted.png')}}" alt="">
            <h4 class="title">Express Shipment</h4>
            <p class="subtitle">Express shipment for JABODETABEK</p>
          </div>
          <div class="service col-11 col-md-3">
            <img src="{{asset('img/freshly-roasted.png')}}" alt="">
            <h4 class="title">Quality Storage</h4>
            <p class="subtitle">High quality storage system</p>
          </div>
        </div>
      </div>
    </section>
    {{-- end services section - Home Page --}}

    <section id="featured" class="featured">
      <div class="container-fluid">
        <div class="section-title">
          <h2>Featured Coffee Catalog</h2>
        </div>
        <div class="row justify-content-center align-items-center g-2 g-md-3">
          <div class="col-11 col-md-3">
            <a class="featured-content" href="#">
              <img src="{{asset('img/aceh-gayo.png')}}" alt="">
              <span class="caption">Robusta</span>
            </a>
          </div>
          <div class="col-11 col-md-3">
            <a class="featured-content" href="#">
              <img src="{{asset('img/aceh-gayo.png')}}" alt="">
              <span class="caption">Robusta</span>
            </a>
          </div>
          <div class="col-11 col-md-3">
            <a class="featured-content" href="#">
              <img src="{{asset('img/aceh-gayo.png')}}" alt="">
              <span class="caption">Robusta</span>
            </a>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('css')
  <link rel="stylesheet" href={{asset('css/style.css')}} type="text/css">
  <link rel="stylesheet" href={{asset('css/main.css')}} type="text/css">
@endsection

@section('js')
  <script src={{asset('js/index.js')}}></script>  
@endsection