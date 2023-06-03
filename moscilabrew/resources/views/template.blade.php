@extends('layouts.master')
@section('title', "...")

@section('navbar')
  @include('layouts.header')
@endsection

@section('bodyClass', "...")

@section('content')
    <section id="..." class="...">
    <div class="section-title">
        <h2>...</h2>
    </div>
    </section>
@endsection

@section('css')
  <link rel="stylesheet" href={{asset('css/style.css')}} type="text/css">
@endsection

@section('js')
  <script src={{asset('js/index.js')}}></script>  
@endsection

{{-- 
    SELLER
--}}

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
        <section>
            <section class="section-title"></section>
            {{-- CONTENT --}}
        </section>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/seller-style.css') }}" type="text/css">
@endsection

@section('js')
@endsection
