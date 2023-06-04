@extends('layouts.master')
@section('title', '...')

@section('navbar')
    @include('layouts.header')
@endsection

@section('bodyClass', 'productPage')

@section('content')
    <div class="container-fluid">
        <section id="product-page" class="product-page nav-on">
            <div class="section-title text-start">
                <h2>
                    <img class="vendor-logo" src="{{ asset('img/coffee-pack.png') }}" style="width: 3rem;">
                    Vendor Name
                </h2>
            </div>

            <div class="row">
                <div class="col">
                    <div class="my-border">
                        <div class="row">
                            <div class="col-4">
                                <img style="max-width: 100%; width: 20rem;" src="{{ asset('img/aceh-gayo.png') }}"
                                    alt="">
                            </div>
                            <div class="col">
                                <h3 class="fw-bold">Kopi Gayo</h3>

                                <div class="d-flex mb-3">
                                    <div class="rating" data-fbs-toggle="rating" data-bs-readonly="true">
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon w-50"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                    </div>
                                    <p class="mb-0 ms-2 fw-bold">4.5 <span class="text-muted">(200)</span></p>
                                </div>

                                <p class="mb-0" style="text-align: justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi officia,
                                    tenetur, blanditiis ex labore ullam est ut distinctio maiores dolores optio, excepturi
                                    doloremque inventore perferendis dolorum nisi. Voluptates dolores quis vitae maiores id
                                    deleniti praesentium quisquam asperiores nobis, ea molestiae quibusdam perspiciatis est
                                    tempore suscipit possimus consequuntur impedit, provident eius. Exercitationem nostrum
                                    vero quaerat pariatur debitis officia omnis aliquam corrupti laboriosam, nobis
                                    aspernatur? Dolor atque, tempore incidunt tempora, impedit, pariatur odit ab numquam
                                    dolorem cum ex! Animi repudiandae amet fugiat sapiente ratione deserunt autem cum
                                    exercitationem quasi. Dolor corrupti aut totam quasi, eveniet veritatis qui doloremque
                                    pariatur perferendis maxime velit?</p>
                            </div>
                        </div>
                        <hr>

                        {{-- reviews bar --}}
                        <div class="reviews-bar" id="reviews-bar">
                            <h3 class="mb-0">Review</h3>

                            <div class="mt-3 ms-1">
                                <span class="fw-bold fs-5">4.5 </span>
                                <span class="text-muted">(200 reviews)</span>
                            </div>

                            <div>
                                <div class="d-flex align-items-center rating-progress_bar">
                                    <div class="rating" data-fbs-toggle="rating" data-bs-readonly="true">
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                    </div>                                        
                                    <div class="progress mx-3">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example" aria-valuenow="180" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="text-muted progress-text">180</span>
                                </div>
                                <div class="d-flex align-items-center rating-progress_bar">
                                    <div class="rating" data-fbs-toggle="rating" data-bs-readonly="true">
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                    </div>                                        
                                    <div class="progress mx-3">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="text-muted progress-text">20</span>
                                </div>
                                <div class="d-flex align-items-center rating-progress_bar">
                                    <div class="rating" data-fbs-toggle="rating" data-bs-readonly="true">
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                    </div>                                        
                                    <div class="progress mx-3">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="text-muted progress-text">0</span>
                                </div>
                                <div class="d-flex align-items-center rating-progress_bar">
                                    <div class="rating" data-fbs-toggle="rating" data-bs-readonly="true">
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                    </div>                                        
                                    <div class="progress mx-3">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="text-muted progress-text">0</span>
                                </div>
                                <div class="d-flex align-items-center rating-progress_bar">
                                    <div class="rating" data-fbs-toggle="rating" data-bs-readonly="true">
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                    </div>                                        
                                    <div class="progress mx-3">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="text-muted progress-text">0</span>
                                </div>
                            </div>
                        </div>
                        {{-- end of reviews bar --}}

                        <hr>
                        <div>
                            <div class="container px-4">
                                <div class="row gx-5">
                                    <div class="col-2 text-center">
                                        <img class="rounded-circle" src="{{ asset('img/4352365-removebg-preview.png') }}"
                                            alt="" style="max-width: 100%">
                                        <p class="text-truncate fw-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="tooltip-arrow-auto" data-bs-title="Cristian ...">
                                            Cristian ...</p>
                                        <span class="text-start">Feb 22, 2023</span>
                                    </div>
                                    <div class="col d-flex flex-column justify-content-between">
                                        <div class="mb-2">
                                            <span class="fw-bold">Excelent</span>
                                            <br>
                                            <div class="rating" data-fbs-toggle="rating" data-bs-readonly="true">
                                                <label class="rating-item active">
                                                    <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                                    <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                                </label>
                                                <label class="rating-item active">
                                                    <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                                    <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                                </label>
                                                <label class="rating-item active">
                                                    <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                                    <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                                </label>
                                                <label class="rating-item active">
                                                    <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                                    <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                                </label>
                                                <label class="rating-item active">
                                                    <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                                    <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                                </label>
                                            </div>
                                        </div>
                                        <span style="text-align: justify">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="my-border d-flex flex-column justify-content-center">
                        <p>Stok : 55</p>
                        <p>Harga : <span class="fw-bold fs-5">Rp. 90.000</span></p>
                        <div class="plus-minus-sign w-50 mb-3">
                            <div class="center">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <button type="button" class="btn btn-number" disabled="disabled"
                                            data-type="minus" data-field="quant[1]">
                                            <i class="fa-solid fa-circle-minus fa-lg"></i>
                                        </button>
                                    </span>
                                    <input type="text" name="quant[1]" class="form-control input-number"
                                        value="1" min="1" max="10">
                                    <span class="input-group-text">
                                        <button type="button" class="btn btn-number" data-type="plus"
                                            data-field="quant[1]">
                                            <i class="fa-solid fa-circle-plus fa-lg"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a name="" id=""
                            class="btn bg-primary align-self-center fw-bold rounded-pill px-4" href="#"
                            role="button">
                            <i class="fa-solid fa-plus fa-lg"></i>
                            Keranjang
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fastbootstrap@1.1.1/dist/css/fastbootstrap.min.css"> --}}
    
    {{-- <link rel="stylesheet" href={{ asset('css/style.css') }} type="text/css"> --}}

@endsection

@section('js')
    <script src={{ asset('js/main.js') }}></script>
    <script src="https://kit.fontawesome.com/a72340eb77.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fastbootstrap@1.1.1/dist/js/fastbootstrap.min.js"></script>
@endsection
