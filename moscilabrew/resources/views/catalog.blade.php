@extends('layouts.master')
@section('title', "MoscilaBrew Catalog")

@section('content')
<div class="container d-block d-flex">
<div class="product">
<img src={{asset('/img/product1.jpg')}} alt="Product 1">
<div class="product-info">
  <h2 class="product-title">Product 1</h2>
  <p class="product-description">Description of Product 1</p>
  <p class="product-price">$99.99</p>
</div>
</div>

<div class="product">
<img src={{asset('/img/product2.jpg')}} alt="Product 2">
<div class="product-info">
  <h2 class="product-title">Product 2</h2>
  <p class="product-description">Description of Product 2</p>
  <p class="product-price">$49.99</p>
</div>
</div>

<div class="product">
<img src={{asset('/img/product3.jpg')}} alt="Product 3">
<div class="product-info">
  <h2 class="product-title">Product 3</h2>
  <p class="product-description">Description of Product 3</p>
  <p class="product-price">$149.99</p>
</div>
</div>
</div>
@endsection

@section('css')
  <link rel="stylesheet" href={{asset('css/catalog.css')}} type="text/css">
@endsection

@section('js')
  {{-- <script src={{asset('js/index.js')}}></script>   --}}
@endsection