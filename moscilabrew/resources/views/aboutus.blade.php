@extends('layouts.master')
@section('title', 'MoscilaBrew')

@section('navbar')
    @include('layouts.header')
@endsection

@section('bodyClass', 'homePage')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="margin-top: 4rem; color: #ffffff;">
        <img class="z-0" src="{{ asset('img/about-us-img1.png') }}" alt="">
        <div class="z-1 position-absolute">
            <h3 style="font-size: 6vh; font-weight: bold;">We Deliver What You Brew</h3>
            <p style="font-size: 3vh; font-weight: 400; width: 50%;">We can help you make your own blend. Our website provides various bean for you to use in your coffee blend.</p>
        </div>
    </div>
    <div class="d-flex m-10 p-5 justify-content-center align-items-center">
      <div class="p-3"><img class="rounded shadow" src="{{ asset('img/kopi&orang 1.png') }}" alt=""></div>
      <div class="p-3" style="font-size: 3vh;">Connecting every bean roaster around Indonesia. High quality roasted bean and green bean from many moscila partners.</div>
    </div>
         <div class="d-flex m-10 p-5 justify-content-center align-items-center">
                <div class="p-3" style="font-size: 3vh;">Make your best coffee blend with our customizeable blend feature. Our website provides many variation of coffee bean to use in your blend. We process your custom blend and deliver it to your home.</div>
                <div class="p-3"><img class="rounded shadow" src="{{ asset('img/coffeebelnd 1.png') }}" alt=""></div>
          </div>
          <div class="d-flex slogan p-3 justify-content-center align-items-center">
            <img src="{{ asset('img/coffee-bag-removebg-preview 1.png') }}" alt="">
            <h5 style="font-size: 4vh; font-weight: 500;">Lets Make Your Best Blend With Us!</h5>
          </div>
</div>
@endsection

@src="{{ asset('img/about-us-img1.png') }}"
@src="{{ asset('img/kopi&orang 1.png') }}"
@src="{{ asset('img/coffeebelnd 1.png') }}"

@section('css')
    <!-- <link rel="stylesheet" href={{ asset('css/style.css') }} type="text/css"> -->
@endsection

@section('js')
    <!-- <script src={{ asset('js/index.js') }}></script> -->
@endsection
