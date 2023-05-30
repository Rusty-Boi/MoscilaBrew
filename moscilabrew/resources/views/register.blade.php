@extends('layouts.master')
@section('title', "Register")

@section('content')
    <!-- content -->
    <div class="container-fluid vh-100">
    <div class="row align-items-center h-100">
        <div class="col d-none d-md-block" >
            <div id="login_carousel" class="carousel slide">
                <div class="carousel-indicators ">
                    <button type="button" data-bs-target="#login_carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#login_carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#login_carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active vh-100 login_carousel_item">
                    <img src={{asset('/img/login-image.png')}} class="object-fit-cover py-2">
                    </div>
                    <div class="carousel-item vh-100 login_carousel_item">
                    <img src={{asset('/img/login-image.png')}} class="object-fit-cover py-2">
                    </div>
                    <div class="carousel-item vh-100 login_carousel_item">
                    <img src={{asset('/img/login-image.png')}} class="object-fit-cover py-2">
                    </div>
                </div>
                </div>
        </div>
        <div class="col h-100 d-flex flex-column justify-content-center position-relative p-0">
            <div id="background_img"  class="d-md-none z-n1"></div>
            <a class="h2 btn_home_hover text-decoration-none text-center position-absolute fw-bold" href="/" style="top: 1rem; left: 50%; transform: translateX(-50%);">MoscilaBrew</a>
            <div class="text-center mx-5">
                <h4 class="fw-bold">Create Account</h4>
            </div>
            
            <form id="login_form" class="mx-5">
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-left">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-left">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="text-center">
                    <p class="m-0">Have an account? <a href="/login" class="text-black fw-bold"><small>Login</small></a></p>
                    <button id="submit-button" type="submit" class="btn bg-krim fw-bold mt-3 w-100 rounded-3">Create Account</button>
                </div>
            </form>
        </div>
    </div>
    </div>  
@endsection

@section('css')
    <link rel="stylesheet" href={{asset('css/mystyle.css')}} type="text/css">
    <link rel="stylesheet" href={{asset('css/main.css')}} type="text/css">
@endsection

@section('js')
	{{-- ... --}}
@endsection