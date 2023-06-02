@extends('layouts.master')
@section('title', "Coffee Blend | MoscilaBrew")

@section('navbar')
    @include('layouts.header')
@endsection

@section('bodyClass', "coffeeBlendPage")

@section('content')
    <section class="coffee-blend nav-on" id="coffee-blend">
        <div class="section-title">
            <h2>Let's Customize your Coffee!</h2>
        </div>

        <img src={{asset('img/coffee-pack.png')}} alt="" style="width: 40vmin;">
        
        <form class="coffee-blend-form w-md-50 rounded-4">
            <h2>COFFEE BLEND</h2>
            <div class="mb-3 w-100">
                <div class="row row-cols-1 row-cols-md-3 gx-3">
                    <div class="col col-md-3 text-center align-self-center">
                        <img class="w-25 w-md-75" src={{asset('img/double-beans.png')}} alt="">
                    </div>
                    <div class="col align-self-center">
                        <label for="category" class="form-label fw-semibold">Category</label>
                        <select class="form-select form-select-sm" name="category" id="category">
                            <option selected>Arabica</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>
                    <div class="col align-self-center">
                        <label for="percentage" class="form-label fw-semibold">Percentage</label>
                        <select class="form-select form-select-sm" name="percentage" id="percentage">
                            <option selected>90%</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>
                    <div class="col col-md-3 text-center align-self-center">
                        <img class="w-25 w-md-75" src={{asset('img/double-beans.png')}} alt="">
                    </div>
                    <div class="col align-self-center">
                        <label for="category" class="form-label fw-semibold">Category</label>
                        <select class="form-select form-select-sm" name="category" id="category">
                            <option selected>Arabica</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>
                    <div class="col align-self-center">
                        <label for="percentage" class="form-label fw-semibold">Percentage</label>
                        <select class="form-select form-select-sm" name="percentage" id="percentage">
                            <option selected>90%</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>
                    <div class="col col-md-3 text-center align-self-center">
                        <img class="w-25 w-md-75" src={{asset('img/double-beans.png')}} alt="">
                    </div>
                    <div class="col align-self-center">
                        <label for="category" class="form-label fw-semibold">Category</label>
                        <select class="form-select form-select-sm" name="category" id="category">
                            <option selected>Arabica</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>
                    <div class="col align-self-center">
                        <label for="percentage" class="form-label fw-semibold">Percentage</label>
                        <select class="form-select form-select-sm" name="percentage" id="percentage">
                            <option selected>90%</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>
                    <div class="col col-md-12 d-flex flex-column justify-content-center align-items-center mt-2 mt-md-0">
                        <div class="w-100 w-md-50">
                            <div class="mb-0 mb-md-3">
                            <label for="wight" class="form-label fw-semibold">Weight</label>
                            <input type="text" class="form-control" name="wight" id="wight" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary rounded-pill px-5 text-black" style="background-color: #F2EFEF;">Submit</button>
        </form>
    </section>


    {{-- <div class="container d-flex flex-column justify-content-center align-items-center nav-on">
        <h1>Let's Customize your Coffee!</h1>
        <img src={{asset('img/coffee-pack.png')}} alt="" style="width: 40vmin;">
        <form class="d-flex flex-column align-items-center justify-content-center w-80 w-md-50 p-2 rounded-4" style="background-color: #D9D9D9;">
            <h2>COFFEE BLEND</h2>
            <div class="mb-3 w-100">
                <div class="row row-cols-1 row-cols-md-3 gx-3">
                    <div class="col col-md-3 text-center align-self-center">
                        <img class="w-25 w-md-75" src={{asset('img/double-beans.png')}} alt="">
                    </div>
                    <div class="col align-self-center">
                        <label for="category" class="form-label fw-semibold">Category</label>
                        <select class="form-select form-select-sm" name="category" id="category">
                            <option selected>Arabica</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>
                    <div class="col align-self-center">
                        <label for="percentage" class="form-label fw-semibold">Percentage</label>
                        <select class="form-select form-select-sm" name="percentage" id="percentage">
                            <option selected>90%</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>
                    <div class="col col-md-3 text-center align-self-center">
                        <img class="w-25 w-md-75" src={{asset('img/double-beans.png')}} alt="">
                    </div>
                    <div class="col align-self-center">
                        <label for="category" class="form-label fw-semibold">Category</label>
                        <select class="form-select form-select-sm" name="category" id="category">
                            <option selected>Arabica</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>
                    <div class="col align-self-center">
                        <label for="percentage" class="form-label fw-semibold">Percentage</label>
                        <select class="form-select form-select-sm" name="percentage" id="percentage">
                            <option selected>90%</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>
                    <div class="col col-md-3 text-center align-self-center">
                        <img class="w-25 w-md-75" src={{asset('img/double-beans.png')}} alt="">
                    </div>
                    <div class="col align-self-center">
                        <label for="category" class="form-label fw-semibold">Category</label>
                        <select class="form-select form-select-sm" name="category" id="category">
                            <option selected>Arabica</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>
                    <div class="col align-self-center">
                        <label for="percentage" class="form-label fw-semibold">Percentage</label>
                        <select class="form-select form-select-sm" name="percentage" id="percentage">
                            <option selected>90%</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>
                    <div class="col col-md-12 d-flex flex-column justify-content-center align-items-center mt-2 mt-md-0">
                        <div class="w-100 w-md-50">
                            <div class="mb-0 mb-md-3">
                            <label for="wight" class="form-label fw-semibold">Weight</label>
                            <input type="text" class="form-control" name="wight" id="wight" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary rounded-pill px-5 text-black" style="background-color: #F2EFEF;">Submit</button>
        </form>
    </div> --}}
@endsection

@section('css')
    <link rel="stylesheet" href="main.css">
@endsection

@section('js')
	{{-- ... --}}
@endsection