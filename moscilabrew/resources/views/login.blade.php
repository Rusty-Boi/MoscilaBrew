@extends('layouts.master-noheader')
@section('title', "Login")

@section('content')
    <div class="container-fluid vh-100">
        <div class="row align-items-center">
            <div class="col" >
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active vh-100 login_carousel">
                        <img src={{asset('/img/login-image.png')}} class="object-fit-cover py-2">
                      </div>
                      <div class="carousel-item vh-100 login_carousel">
                        <img src={{asset('/img/login-image.png')}} class="object-fit-cover py-2">
                      </div>
                      <div class="carousel-item vh-100 login_carousel">
                        <img src={{asset('/img/login-image.png')}} class="object-fit-cover py-2">
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="text-justify mx-5">
                    <h4 class="fw-bold">Welcome to MoscilaBrew,<br>Sign in to Continue.</h4>
                    <p>Don't have an account? <span class="fw-bold">Create</span> an account.</p>
                </div>
                
                <form class="mx-5">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-left">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-left">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="text-center">
                        <a href="#" class="text-black fw-bold"><small>Forgot Password?</small></a>
                        <br>
                        <button type="submit" class="btn btn-primary mt-3 w-100">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('css')
  <link rel="stylesheet" href={{asset('css/mystyle.css')}} type="text/css">
@endsection

@section('js')
  {{-- <script src={{asset('js/index.js')}}></script>   --}}
@endsection
