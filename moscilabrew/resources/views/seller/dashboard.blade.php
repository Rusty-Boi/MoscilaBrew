@extends('layouts.master')
@section('title', '...')

@section('navbar')
    @include('layouts.header-seller')
@endsection

@section('bodyClass', 'seller-body')

@section('sideBar')
    @include('layouts.sidebar-seller')
@endsection

@section('content')
    <div class="container-fluid">
        <section class="pt-0" id="moscila_dashboard">

          <h2 class="fw-bold">Welcome to<br>MoscilaBrew Partners!</h2>      

          <div class="row row-cols-1 row-cols-md-2 g-4">
              <div class="col">
                  <div class="performa-card card">
                      <div class="card-body">
                          <h5 class="card-title">Views Product</h5>
                          <p class="card-text">
                              <span class="number">80.000</span> <span class="fw-bold">views</span>
                              <br>
                              <small class="month-duration">From January to March</small>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="performa-card card">
                      <div class="card-body">
                          <h5 class="card-title">Selling Product</h5>
                          <p class="card-text">
                              <span class="number">2.000</span> <span class="fw-bold">products</span>
                              <br>
                              <small class="month-duration">From January to March</small>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col col-md-4">
                  <div class="performa-card card">
                      <div class="card-body">
                          <h5 class="card-title">Views Product</h5>
                          <p class="card-text">
                              <span class="number">80.000</span> <span class="fw-bold">views</span>
                              <br>
                              <small class="month-duration">From January to March</small>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col col-md-4">
                  <div class="performa-card card">
                      <div class="card-body">
                          <h5 class="card-title">Selling Product</h5>
                          <p class="card-text">
                              <span class="number">2.000</span> <span class="fw-bold">products</span>
                              <br>
                              <small class="month-duration">From January to March</small>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col col-md-4">
                  <div class="performa-card card">
                      <div class="card-body">
                          <h5 class="card-title">Views Product</h5>
                          <p class="card-text">
                              <span class="number">80.000</span> <span class="fw-bold">views</span>
                              <br>
                              <small class="month-duration">From January to March</small>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      

        </section>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/seller-style.css') }}" type="text/css">
@endsection

@section('js')
@endsection
