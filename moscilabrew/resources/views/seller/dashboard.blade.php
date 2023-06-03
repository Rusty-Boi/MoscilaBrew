@extends('layouts.master')
@section('title', "Dashboard | Moscila Partners")

@section('navbar')
    @include('layouts.header-seller')
@endsection

@section("bodyClass", "sellerDashboardPage")

@section('content')
  <div class="d-flex">
    @include("layouts/sidebar-seller")
    
    <div id="moscila_dashboard" class="d-flex flex-column container-fluid p-4">
      <h1 class="fw-bold mb-3">Welcome to<br>MoscilaBrew Partners!</h1>
      <div class="row row-cols-1 row-cols-md-2 g-4 flex-fill align-items-end">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Views Product</h5>
              <p class="card-text">
                <span class="h4">80.000</span> <span class="fw-bold">views</span>
                <br>
                <small>From January to March</small>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Selling Product</h5>
              <p class="card-text">
                <span class="h4">2.000</span> products
                <br>
                <small>From January to March</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4 flex-fill align-items-end">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Views Product</h5>
              <p class="card-text">
                <span class="h4">80.000</span> <span class="fw-bold">views</span>
                <br>
                <small>From January to March</small>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Selling Product</h5>
              <p class="card-text">
                <span class="h4">2.000</span> products
                <br>
                <small>From January to March</small>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Selling Product</h5>
              <p class="card-text">
                <span class="h4">2.000</span> products
                <br>
                <small>From January to March</small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('css')
  <link rel="stylesheet" href={{asset('css/seller-style.css')}} type="text/css">
@endsection

@section('js')
	{{-- ... --}}
@endsection