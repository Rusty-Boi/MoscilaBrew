@extends('layouts.master')
@section('title', "...")

@section('navbar')
  @include('layouts.header')
@endsection

@section('bodyClass', "...")

@section('content')
    <section id="..." class="...">
    <div class="section-title nav-on">
        <h2>halo {{ Auth::user()['name'] }}</h2>
    </div>
    </section>
@endsection

@section('css')
  <link rel="stylesheet" href={{asset('css/style.css')}} type="text/css">
@endsection

@section('js')
  <script src={{asset('js/index.js')}}></script>  
@endsection