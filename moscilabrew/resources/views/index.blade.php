@extends('layouts.master')
@section('title', "MoscilaBrew")

@section('content')
    <!-- Carousel -->
    <div class="slider">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src={{asset('/img/coffee-18.jpg')}} class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src={{asset('/img/Coffee-wallpaper-hd-wallpapers-download.jpg')}} class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src={{asset('/img/R.jpg')}} class="d-block w-100" alt="...">
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
    </div>
      
    <!-- End of Carousel -->

    <div class="container-info">
      <div class="info d-flex justify-content-between">
        <div class="freshlyRoaster">
          <h3>Freshly Roasted</h3>
          <h5>Roasted 12 hours before shipment</h5>
        </div>
        <div class="expressShipment">
          <h3>Express Shipment</h3>
          <h5>Express shipment for JABODETABEK</h5>
        </div>
        <div class="qualityStorage">
          <h3>Quality Storage</h3>
          <h5>High quality storage system</h5>
        </div>
      </div>
    </div>

    <div class="featured">
      <h1>Featured</h1>
      <div class="featured-content d-flex justify-content-between">
        <div class="card text-bg-dark">
          <img src="..." class="card-img" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small>Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card text-bg-dark">
          <img src="..." class="card-img" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small>Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card text-bg-dark">
          <img src="..." class="card-img" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small>Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('css')
  <link rel="stylesheet" href={{asset('css/style.css')}} type="text/css">
@endsection

@section('js')
  <script src={{asset('js/index.js')}}></script>  
@endsection