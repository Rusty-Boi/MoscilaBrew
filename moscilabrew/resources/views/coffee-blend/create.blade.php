@extends('layouts.master')
@section('title', 'Coffee Blend | MoscilaBrew')

@section('navbar')
    @include('layouts.header')
@endsection

@section('bodyClass', 'coffeeBlendPage')

@section('content')
    <section class="coffee-blend nav-on" id="coffee-blend">
        <div class="section-title">
            <h2>Let's Customize your Coffee!</h2>
        </div>

        <div class="coffee-blend-form rounded-4">
            <h2>COFFEE BLEND</h2>

            <div class="row justify-content-center g-2">

                <div class="col-4 align-self-center text-center">
                    <img class="rounded-4" src={{ asset('img/coffee-pack.png') }} alt="" style="width: 80%;">
                </div>

                <div class="col">
                    <div class="container">
                        <form action="{{ route('coffeeBlend.create') }}" method="POST">
                            @csrf
                            <div class="d-flex align-items-end justify-content-between mb-3">
                                <div class="me-2 flex-fill">
                                    <label for="receiptName" class="form-label mb-0">Reciept Name</label>
                                    <input type="text" class="form-control" name="receiptName" id="receiptName">
                                </div>

                                <a class="btn bg-primary d-flex align-items-center" href="#" role="button">
                                    <small class="text-truncate me-1">Your Receipt!</small>
                                    <i class="fa-solid fa-receipt"></i>
                                </a>
                            </div>

                            <div>
                                <div class="slider">
                                    <label for="slider1" class="form-label">[Base]
                                        {{ $coffeeBlendData['base_bean']['coffee']->product_name }}</label>
                                    <div class="row">
                                        <div class="col">
                                            <input name='base_ratio' type="range" class="form-range me-3" id="slider1"
                                                step="1" min="0" max="10" value="5">
                                        </div>
                                        <div class="col-1">
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>

                                @if (count($coffeeBlendData) > 1)
                                    @if ($coffeeBlendData['primary_bean']['coffee'] != null)
                                        <div class="slider">
                                            <label for="slider2" class="form-label">[Primary]
                                                {{ $coffeeBlendData['primary_bean']['coffee']->product_name }}</label>
                                            <div class="row">
                                                <div class="col">
                                                    <input name='primary_ratio' type="range" class="form-range me-3"
                                                        id="slider2" step="1" min="0" max="10"
                                                        value="5">
                                                </div>
                                                <div class="col-1">
                                                    <p class="mb-0"></p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif


                                    @if (count($coffeeBlendData) > 2)
                                        @for ($i = 2; $i < count($coffeeBlendData); $i++)
                                            @if ($coffeeBlendData[array_keys($coffeeBlendData)[$i]]['coffee'] != null)
                                                <div class="slider">
                                                    <label for="slider3" class="form-label">[Secondary]
                                                        {{ $coffeeBlendData[array_keys($coffeeBlendData)[$i]]['coffee']->product_name }}</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input name='secondary_ratio' type="range"
                                                                class="form-range me-3" id="slider3" step="1"
                                                                min="0" max="10" value="0">
                                                        </div>
                                                        <div class="col-1">
                                                            <p class="mb-0"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endfor
                                    @endif
                                @endif


                                <div class="d-flex justify-content-center">

                                    <span class="sliderRatio"></span>

                                    @if (count($coffeeBlendData) > 1)
                                        @if ($coffeeBlendData['primary_bean'] != null)
                                        <span class="mx-2">:</span>
                                        <span class="sliderRatio"></span>
                                    @endif
                                    @endif

                                    @if (count($coffeeBlendData) > 2)
                                        @for ($i = 2; $i < count($coffeeBlendData); $i++)
                                            @if ($coffeeBlendData[array_keys($coffeeBlendData)[$i]])
                                                <span class="mx-2">:</span>
                                                <span class="sliderRatio"></span>
                                            @endif
                                        @endfor
                                    @endif

                                </div>
                            </div>

                            <div class="ratio_sum_status alert alert-danger p-2 d-none" role="alert">
                            </div>

                            <div class="d-flex align-items-end justify-content-end mb-3">
                                {{-- <p class="mb-0 flex-fill"><span class="fs-5">Subtotal</span><br> <span
                                        class="fw-bold fs-4">Rp 180.000</span></p> --}}

                                <button type="submit" class="btn bg-primary mx-2 rounded-4">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                    Submit
                                </button>

                                <a name="" id="" class="btn bg-primary rounded-4" href="#"
                                    role="button">
                                    <i class="bi bi-bookmark-plus"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection

@section('js')
    <script src="https://kit.fontawesome.com/a72340eb77.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        $(document).ready(function () {
            // reset button submit
            jq
        });
    </script>
@endsection
