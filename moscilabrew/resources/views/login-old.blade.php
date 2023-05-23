@extends('layouts.master-noheader')
@section('title', "Login")

@section('content')
    <div class="container-fluid containerForm">
      <div class="row">
        <div class="col">
          <div class="backbutton">
            <a class="nav-link back" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
              </svg>
            Back</a>
          </div>
          <div class="slider">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src={{asset('/img/coffee-18.jpg')}} class="carousel-img d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src={{asset('/img/Coffee-wallpaper-hd-wallpapers-download.jpg')}} class="carousel-img d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src={{asset('/img/R.jpg')}} class="carousel-img d-block w-100" alt="...">
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
        <div class="col-4">
          <div>
            <div class="mx-auto bg warning">
                <h1>Welcome to MoscilaBrew,<br>
                Sign in Continue</h1>
        
                <h4>Don't have an account? <a class="nav-link" href="register.html">create an account</a></h4>
                    
                    <form class="d-flex loginForm">
                        <label id="label" for="email">Email</label><br>
                        <input type="email" id="email" name="Email"><br>
                        <label id="label" for="password">Password</label><br>
                        <input type="password" id="password" name="Password"><br>
                        
                    </form>
                    <br>
        
                    <a class="nav-link" href="register.html"><ins>Forgot Password?</ins></a>
                    <br>
                    <button onclick="login()" class="button" type="button">Login</button>
                    
            </div>
          </div>
        </div>
      </div>
@endsection

@section('css')
  <link rel="stylesheet" href={{asset('css/login.css')}} type="text/css">
@endsection

@section('js')
  {{-- <script src={{asset('js/index.js')}}></script>   --}}
@endsection