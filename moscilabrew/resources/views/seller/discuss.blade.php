@extends('layouts.master')
@section('title', "...")

@section('navbar')
    @include('layouts.header-seller')
@endsection

@section('content')
<div class="d-flex">
    
    @include("layouts/sidebar-seller")

    <div id="moscila_dashboard" class="d-flex flex-column container p-4">
      <h1 class="fw-bold mb-3">Discussion</h1>
      <div class="flex-fill rounded-5" style="background-color: rgba(239, 195, 164, .3);"></div>
    </div>
  </div>
@endsection

@section('css')
	<link rel="stylesheet" href={{asset('css/seller-style.css')}} type="text/css">
@endsection

@section('js')
	{{-- ... --}}
@endsection