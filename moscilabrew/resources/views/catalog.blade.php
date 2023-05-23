@extends('layouts.master')
@section('title', "MoscilaBrew Catalog")

@section('content')
  <div class="containerFlex d-flex">
    <div class="catalog">
      <h1>Catalog</h1>
      <div class="catalog-content d-flex justify-content-between">
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
  </div>
@endsection

@section('css')
  <link rel="stylesheet" href={{asset('css/style.css')}} type="text/css">
@endsection

@section('js')
  <script src={{asset('js/index.js')}}></script>  
@endsection