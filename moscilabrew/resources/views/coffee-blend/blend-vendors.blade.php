@extends('layouts.master')
@section('title', 'Check your blend vendors | MoscilaBrew')

@section('navbar')
    @include('layouts.header')
@endsection

@section('bodyClass', 'blendVendorsPage')

@section('content')
    <section id="blend-vendors" class="blend-vendors nav-on">
        <div class="container-fluid">
            <div class="section-title">
                <h2>Check your Blend Vendors</h2>
            </div>

            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
                @foreach ($blend_vendors as $vendor)
                    <div class="col">
                        <a class="card vendor-card rounded-4 text-decoration-none" href="{{ route('coffeeBlend.confirmationBlend', ['vendor_id' => $vendor->id])}}">
                            <img src="{{ asset('img/beans-tall.png') }}" class="card-img-top">
                            <div class="card-body p-2">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title vendor-name mb-0">{{ $vendor->vendor_name }}</h5>
                                        <p class="card-text partner-status bg-danger">
                                            Gold Partner
                                            <img class="m-0 vendor-img"
                                                src={{ asset($partners_status_img['Gold Partner']) }}
                                                alt="">
                                        </p>
                                    </div>
                                    <div class="col-3">
                                        <img class="black-hole" src="{{ asset('img/black-hole.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('css')
    {{-- <link rel="stylesheet" href={{asset('css/style.css')}} type="text/css"> --}}
@endsection

@section('js')
    {{-- <script src={{asset('js/index.js')}}></script>   --}}
@endsection
