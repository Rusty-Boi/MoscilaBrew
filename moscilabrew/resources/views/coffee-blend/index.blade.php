@extends('layouts.master')
@section('title', 'Coffee Blend | MoscilaBrew')

@section('navbar')
    @include('layouts.header')
@endsection

@section('bodyClass', 'coffeeBlendChooserPage')

@section('content')
    <section class="coffee-blend nav-on" id="coffee-blend">
        <div class="section-title">
            <h2>Choose Your Coffee Bean</h2>
        </div>

        <div class="coffee-blend-form rounded-4">
            <div class="container">
                <div class="existingRecipe d-flex justify-content-end">
                    <button class="btn btn-primary" id="getRecipe">Use Existing Recipe</button>
                </div>
                <div class="row m-5 justify-content-center align-items-center">
                    
                    {{-- base bean --}}
                    <div class="col-4">
                      <div class="d-flex m-3 flex-row justify-content-center align-items-center">
                          <button type="button" class="btn btn-secondary" id=""><svg width="20"
                                  height="20" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path
                                      d="M8.75 15.75V19.25H26.25V15.75H8.75ZM17.5 0C7.83125 0 0 7.83125 0 17.5C0 27.1688 7.83125 35 17.5 35C27.1688 35 35 27.1688 35 17.5C35 7.83125 27.1688 0 17.5 0ZM17.5 31.5C9.7825 31.5 3.5 25.2175 3.5 17.5C3.5 9.7825 9.7825 3.5 17.5 3.5C25.2175 3.5 31.5 9.7825 31.5 17.5C31.5 25.2175 25.2175 31.5 17.5 31.5Z"
                                      fill="black" />
                              </svg>
                              Remove Bean</button>
                      </div>
                      <!-- example card -->

                      
                      <div class="card p-3 primaryBean">
                          <div class="row p-3 justify-content-center align-items-center">
                              <img class="rounded" id="beanImage" alt="./Assets/noimage.jpg"
                                  src="{{ asset('img/aceh-gayo.png') }}">
                          </div>
                              <div class="d-flex justify-content-center">
                                <h4 class="m-0">Aceh Gayo Arabica</h4>
                              </div>
                          <div class="row justify-content-center align-items-center mt-4">
                              <h3 class="mb-0">Base Bean</h3>
                          </div>
                      </div>
                    </div>
                  {{-- end of base bean --}}

                    {{-- primary bean --}}
                    <div class="col-4">
                        <div class="d-flex m-3 flex-row justify-content-center align-items-center">
                            <button type="button" class="btn btn-secondary" id=""><svg width="20"
                                    height="20" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.75 15.75V19.25H26.25V15.75H8.75ZM17.5 0C7.83125 0 0 7.83125 0 17.5C0 27.1688 7.83125 35 17.5 35C27.1688 35 35 27.1688 35 17.5C35 7.83125 27.1688 0 17.5 0ZM17.5 31.5C9.7825 31.5 3.5 25.2175 3.5 17.5C3.5 9.7825 9.7825 3.5 17.5 3.5C25.2175 3.5 31.5 9.7825 31.5 17.5C31.5 25.2175 25.2175 31.5 17.5 31.5Z"
                                        fill="black" />
                                </svg>
                                Remove Bean</button>
                        </div>
                        <!-- example card -->

                        
                        <div class="card p-3 primaryBean">
                            <div class="row p-3 justify-content-center align-items-center">
                                <img class="rounded" id="beanImage" alt="./Assets/noimage.jpg"
                                    src="{{ asset('img/noimage.jpg') }}">
                            </div>
                                <div class="d-flex justify-content-center">
                                  <button class="bg-primary d-flex py-1 px-3 align-items-center justify-content-center rounded-4 border-0" data-bs-toggle="modal" data-bs-target="#addPBean" type="button"
                                    class="btn btn-primary addButton">
                                    <i class="me-2 bi bi-plus-circle"></i>
                                    Add Bean
                                  </button> <!-- ds-bs-target="#[id]" -->
                                </div>
                            <div class="row justify-content-center align-items-center mt-4">
                                <h3 class="mb-0">Primary Bean</h3>
                            </div>
                        </div>
                      </div>
                    {{-- end of primary bean --}}

                </div>

                <!-- Secondary Bean (hidden with d-none) -->
                <div class="d-none row justify-content-center align-items-center">
                    <div class="d-flex m-3 flex-row justify-content-center align-items-center">
                        <button type="button" class="btn btn-secondary" id=""><svg width="35" height="35"
                                viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.75 15.75V19.25H26.25V15.75H8.75ZM17.5 0C7.83125 0 0 7.83125 0 17.5C0 27.1688 7.83125 35 17.5 35C27.1688 35 35 27.1688 35 17.5C35 7.83125 27.1688 0 17.5 0ZM17.5 31.5C9.7825 31.5 3.5 25.2175 3.5 17.5C3.5 9.7825 9.7825 3.5 17.5 3.5C25.2175 3.5 31.5 9.7825 31.5 17.5C31.5 25.2175 25.2175 31.5 17.5 31.5Z"
                                    fill="black" />
                            </svg>
                            Remove Bean</button>
                    </div>
                    <div class="card col-4 p-3 d-none secondaryBean">

                        <div class="row justify-content-center align-items-center">
                            <img id="beanImage" class="rounded" alt="./Assets/noimage.jpg"
                                src="{{ asset('img/noimage.jpg') }}">
                        </div>
                        <div class="row p-3 justify-content-center align-items-center">
                            <button data-bs-toggle="modal" data-bs-target="#addSBean" type="button"
                                class="btn btn-primary addButton">Add Bean</button>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <h3>Secondary Bean</h3>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button id="addMore" type="button" class="btn shadow btn-primary addMore rounded-4">
                      <i class="me-2 bi bi-plus-circle"></i>
                        Add More
                    </button>
                </div>

                <div class="nextButton d-flex justify-content-end">
                    <button id="nextButton" type="button" class="btn btn-primary py-2 px-4 rounded-4">
                      Next
                      <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Modal Base Bean -->
            <div class="modal fade" id="addBBean" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addBeanBase">Choose Base Bean</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex flex-column">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><svg width="22" height="24"
                                        viewBox="0 0 34 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.3399 22.9956C25.2351 20.5639 26.432 17.4449 26.432 14.0088C26.432 6.29075 20.4972 0 13.216 0C5.93473 0 0 6.29075 0 14.0088C0 21.7269 5.93473 28.0176 13.216 28.0176C16.4078 28.0176 19.4001 26.8018 21.6942 24.7401L31.9677 35.63C32.2171 35.8943 32.5163 36 32.8155 36C33.1148 36 33.414 35.8943 33.6634 35.63C34.1122 35.1542 34.1122 34.3084 33.6634 33.8326L23.3399 22.9956ZM13.1661 25.4802C7.18152 25.4802 2.34397 20.3524 2.34397 14.0088C2.34397 7.6652 7.18152 2.53745 13.1661 2.53745C19.1507 2.53745 23.9883 7.6652 23.9883 14.0088C23.9883 20.3524 19.1507 25.4802 13.1661 25.4802Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <input type="text" class="form-control" placeholder="Bean Name" aria-label="baseBean"
                                    aria-describedby="addon-wrapping">
                            </div>
                            <div class="card d-flex flex-row p-3 searchResult align-items-center">
                                <img src="{{ asset('img/noimage.jpg') }}" alt="">
                                <h5 class="p-3">Bean Title</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Primary Bean -->
            <div class="modal fade" id="addPBean" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addBeanBase">Choose Primary Bean</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><svg width="22" height="24"
                                        viewBox="0 0 34 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.3399 22.9956C25.2351 20.5639 26.432 17.4449 26.432 14.0088C26.432 6.29075 20.4972 0 13.216 0C5.93473 0 0 6.29075 0 14.0088C0 21.7269 5.93473 28.0176 13.216 28.0176C16.4078 28.0176 19.4001 26.8018 21.6942 24.7401L31.9677 35.63C32.2171 35.8943 32.5163 36 32.8155 36C33.1148 36 33.414 35.8943 33.6634 35.63C34.1122 35.1542 34.1122 34.3084 33.6634 33.8326L23.3399 22.9956ZM13.1661 25.4802C7.18152 25.4802 2.34397 20.3524 2.34397 14.0088C2.34397 7.6652 7.18152 2.53745 13.1661 2.53745C19.1507 2.53745 23.9883 7.6652 23.9883 14.0088C23.9883 20.3524 19.1507 25.4802 13.1661 25.4802Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <input type="text" class="form-control" placeholder="Bean Name"
                                    aria-label="primaryBean" aria-describedby="addon-wrapping">
                            </div>
                            <div class="card d-flex flex-row p-3 searchResult align-items-center">
                                <img src="{{ asset('img/noimage.jpg') }}" alt="">
                                <h5 class="p-3">Bean Title</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Secondary Bean -->
            <div class="modal fade" id="addSBean" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addBeanBase">Choose Secondary Bean</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><svg width="22" height="24"
                                        viewBox="0 0 34 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.3399 22.9956C25.2351 20.5639 26.432 17.4449 26.432 14.0088C26.432 6.29075 20.4972 0 13.216 0C5.93473 0 0 6.29075 0 14.0088C0 21.7269 5.93473 28.0176 13.216 28.0176C16.4078 28.0176 19.4001 26.8018 21.6942 24.7401L31.9677 35.63C32.2171 35.8943 32.5163 36 32.8155 36C33.1148 36 33.414 35.8943 33.6634 35.63C34.1122 35.1542 34.1122 34.3084 33.6634 33.8326L23.3399 22.9956ZM13.1661 25.4802C7.18152 25.4802 2.34397 20.3524 2.34397 14.0088C2.34397 7.6652 7.18152 2.53745 13.1661 2.53745C19.1507 2.53745 23.9883 7.6652 23.9883 14.0088C23.9883 20.3524 19.1507 25.4802 13.1661 25.4802Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <input type="text" class="form-control" placeholder="Bean Name"
                                    aria-label="secondaryBean" aria-describedby="addon-wrapping">
                            </div>
                            <div class="card d-flex flex-row p-3 searchResult align-items-center">
                                <img src="{{ asset('img/noimage.jpg') }}" alt="">
                                <h5 class="p-3">Bean Title</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/bean-chooser.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection

@section('js')
    <script src="https://kit.fontawesome.com/a72340eb77.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
@endsection
