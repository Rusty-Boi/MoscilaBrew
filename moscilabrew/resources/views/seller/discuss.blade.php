@extends('layouts.master')
@section('title', '...')

@section('navbar')
    @include('layouts.header-seller')
@endsection

@section('bodyClass')
  "seller-body sellerDiscussPage"
@endsection

@section('sideBar')
    @include('layouts.sidebar-seller')
@endsection

@section('content')
    <div class="container-fluid">
        <section class="pt-0" id="seller-discuss">

            <h2 class="fw-bold">Discussion</h2>

            <div class="mb-3">
              <label for="" class="form-label"></label>
              <textarea class="form-control" name="" id="" rows="3"></textarea>
            </div>

        </section>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/seller-style.css') }}" type="text/css">
@endsection

@section('js')
@endsection
