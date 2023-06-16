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
                <form action="{{ route('coffeeBlend.beanChooser') }}" method="POST">
                    @csrf
                    <div class="existingRecipe d-flex justify-content-end">
                        <button class="btn btn-primary" id="receipt">Use Existing Recipe</button>
                    </div>
                    <div class="row mt-2 justify-content-center align-items-center beans-chooser">

                        {{-- base bean --}}
                        <div class="col-4 bean-chooser mt-auto">

                            {{-- remove button area --}}


                            <div class="card p-3 primaryBean">
                                <div class="row p-3 justify-content-center align-items-center">
                                    <img class="rounded bean_image" alt="./Assets/noimage.jpg"
                                        src="{{ asset('img/noimage.jpg') }}">
                                </div>

                                <input type="number" class="form-control visually-hidden bean_id" name="base_bean" value={{ old('base_bean') }}>

                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="bean-name-p text-truncate">
                                        <button data-bs-toggle="modal" data-bs-target="#modal1" type="button"
                                            class="btn bg-primary d-flex py-1 px-3 align-items-center justify-content-center rounded-4 border-0">
                                            <i class="me-2 bi bi-plus-circle"></i>
                                            <span class="bean-name text-nowrap">Add Bean</span>
                                        </button>
                                    </div>
                                    <!-- Modal Base Bean -->
                                    <div class="modal fade bean-modal" id="modal1" tabindex="-1"
                                        aria-labelledby="modalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="addBeanBase">Choose Base Bean</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body d-flex flex-column">
                                                    <div class="input-group flex-nowrap">
                                                        <span class="input-group-text" id="addon-wrapping"><svg
                                                                width="22" height="24" viewBox="0 0 34 36"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M23.3399 22.9956C25.2351 20.5639 26.432 17.4449 26.432 14.0088C26.432 6.29075 20.4972 0 13.216 0C5.93473 0 0 6.29075 0 14.0088C0 21.7269 5.93473 28.0176 13.216 28.0176C16.4078 28.0176 19.4001 26.8018 21.6942 24.7401L31.9677 35.63C32.2171 35.8943 32.5163 36 32.8155 36C33.1148 36 33.414 35.8943 33.6634 35.63C34.1122 35.1542 34.1122 34.3084 33.6634 33.8326L23.3399 22.9956ZM13.1661 25.4802C7.18152 25.4802 2.34397 20.3524 2.34397 14.0088C2.34397 7.6652 7.18152 2.53745 13.1661 2.53745C19.1507 2.53745 23.9883 7.6652 23.9883 14.0088C23.9883 20.3524 19.1507 25.4802 13.1661 25.4802Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="Bean Name"
                                                            aria-action="beanSearch" aria-describedby="addon-wrapping">
                                                    </div>
                                                    <div class="bean-options">
                                                        @foreach ($coffees as $coffee)
                                                            <button type="button"
                                                                class="btn p-0 m-0 text-start w-100 bean_option_btn"
                                                                data-bs-dismiss="modal">
                                                                <input type="number" class="form-control visually-hidden"
                                                                    aria-describedby="helpId" value="{{ $coffee->id }}">
                                                                <div class="container">
                                                                    <div
                                                                        class="row d-flex flex-row p-0 searchResult align-items-center justify-content-start">
                                                                        <div class="col-2 p-0 px-2">
                                                                            <img class="img-fluid h-auto"
                                                                                src="{{ asset($coffee->product_img) }}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="col p-2">
                                                                            <h5 class="p-0 m-0">{{ $coffee->product_name }}
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row justify-content-center align-items-center mt-4">
                                    <h3 class="mb-0">Base Bean</h3>
                                </div>
                            </div>
                        </div>
                        {{-- end of base bean --}}

                    </div>


                    <div class="d-flex justify-content-center mt-4">
                        <button id="addMore" type="button" class="btn shadow btn-primary addMore rounded-4">
                            <i class="me-2 bi bi-plus-circle"></i>
                            Add More
                        </button>
                    </div>

                    <div class="nextButton d-flex justify-content-end">
                        <button id="nextButton" type="submit" class="btn btn-primary py-2 px-4 rounded-4">
                            Next
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>



        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/bean-chooser.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection

@section('js')
    <script>
        var coffees = {!! $coffees !!}
    </script>
    <script src="https://kit.fontawesome.com/a72340eb77.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        function addBeanChooser() {
            beanChooserlength = updateBeanChooserList().length;

            if (beanChooserlength == 1) {
                $('body.coffeeBlendChooserPage .beans-chooser').append(`<div class="col-4 bean-chooser">

{{-- remove button area --}}


<div class="card p-3 primaryBean">
    <div class="row p-3 justify-content-center align-items-center">
        <img class="rounded bean_image" alt="./Assets/noimage.jpg"
            src="{{ asset('img/noimage.jpg') }}">
    </div>

    <input type="number" class="form-control visually-hidden bean_id" name="primary_bean" value={{ old('primary_bean') }}>

    <div class="d-flex justify-content-center align-items-center">
        <div class="bean-name-p text-truncate">
            <button data-bs-toggle="modal" data-bs-target="#modal2" type="button"
                class="btn bg-primary d-flex py-1 px-3 align-items-center justify-content-center rounded-4 border-0">
                <i class="me-2 bi bi-plus-circle"></i>
                <span class="bean-name text-nowrap">Add Bean</span>
            </button>
        </div>
        <!-- Modal Primary Bean -->
        <div class="modal fade bean-modal" id="modal2" tabindex="-1"
            aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addBeanBase">Choose Primary Bean</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex flex-column">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><svg width="22"
                                    height="24" viewBox="0 0 34 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.3399 22.9956C25.2351 20.5639 26.432 17.4449 26.432 14.0088C26.432 6.29075 20.4972 0 13.216 0C5.93473 0 0 6.29075 0 14.0088C0 21.7269 5.93473 28.0176 13.216 28.0176C16.4078 28.0176 19.4001 26.8018 21.6942 24.7401L31.9677 35.63C32.2171 35.8943 32.5163 36 32.8155 36C33.1148 36 33.414 35.8943 33.6634 35.63C34.1122 35.1542 34.1122 34.3084 33.6634 33.8326L23.3399 22.9956ZM13.1661 25.4802C7.18152 25.4802 2.34397 20.3524 2.34397 14.0088C2.34397 7.6652 7.18152 2.53745 13.1661 2.53745C19.1507 2.53745 23.9883 7.6652 23.9883 14.0088C23.9883 20.3524 19.1507 25.4802 13.1661 25.4802Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <input type="text" class="form-control" placeholder="Bean Name"
                                aria-action="beanSearch" aria-describedby="addon-wrapping">
                        </div>
                        <div class='bean-options'>
                        @foreach ($coffees as $coffee)
                            <button type="button"
                                class="btn p-0 m-0 text-start w-100 bean_option_btn"
                                data-bs-dismiss="modal">
                                <input type="number" class="form-control visually-hidden"
                                    aria-describedby="helpId" value="{{ $coffee->id }}">
                                <div class="container">
                                    <div
                                        class="row d-flex flex-row p-0 searchResult align-items-center justify-content-start">
                                        <div class="col-2 p-0 px-2">
                                            <img class="img-fluid h-auto"
                                                src="{{ asset($coffee->product_img) }}"
                                                alt="">
                                        </div>
                                        <div class="col p-2">
                                            <h5 class="p-0 m-0">{{ $coffee->product_name }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        @endforeach
                    </div>
                    </div>
                </div>
            </div>
        </div>



        {{-- <div class="input-group d-flex align-items-center justify-content-center border-0" >
            <span class="input-group-text bg-primary p-2 rounded-start-pill ps-3" id="basic-addon1">
              <i class="bi bi-plus-circle "></i>
            </span>
            <input name="beanName" id="" data-bs-toggle="modal" data-bs-target="#modal2"
                class="btn bg-primary p-2 rounded-end-pill pe-3 text-truncate"
                type="button" value="Add Bean">
        </div> --}}

    </div>
    <div class="row justify-content-center align-items-center mt-4">
        <h3 class="mb-0">Primary Bean</h3>
    </div>
</div>
</div>`);
            } else {
                $('body.coffeeBlendChooserPage .beans-chooser').append(`
            <div class="col-4 bean-chooser">


            <div class="card p-3 primaryBean">
                <div class="row p-3 justify-content-center align-items-center">
                    <img class="rounded bean_image" alt="./Assets/noimage.jpg"
                        src="{{ asset('img/noimage.jpg') }}">
                </div>

                <input type="number" class="form-control visually-hidden bean_id" name="secondary_bean" value={{ old('secondary_bean') }}>

                <div class="d-flex justify-content-center align-items-center">
                    <div class="bean-name-p text-truncate">
                        <button data-bs-toggle="modal" data-bs-target="#modal3" type="button"
                            class="btn bg-primary d-flex py-1 px-3 align-items-center justify-content-center rounded-4 border-0">
                            <i class="me-2 bi bi-plus-circle"></i>
                            <span class="bean-name text-nowrap">Add Bean</span>
                        </button>
                    </div>
                    <!-- Modal Secondary Bean -->
                    <div class="modal fade bean-modal" id="modal3" tabindex="-1"
                        aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="addBeanBase">Choose Secondary Bean</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex flex-column">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><svg width="22"
                                                height="24" viewBox="0 0 34 36" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.3399 22.9956C25.2351 20.5639 26.432 17.4449 26.432 14.0088C26.432 6.29075 20.4972 0 13.216 0C5.93473 0 0 6.29075 0 14.0088C0 21.7269 5.93473 28.0176 13.216 28.0176C16.4078 28.0176 19.4001 26.8018 21.6942 24.7401L31.9677 35.63C32.2171 35.8943 32.5163 36 32.8155 36C33.1148 36 33.414 35.8943 33.6634 35.63C34.1122 35.1542 34.1122 34.3084 33.6634 33.8326L23.3399 22.9956ZM13.1661 25.4802C7.18152 25.4802 2.34397 20.3524 2.34397 14.0088C2.34397 7.6652 7.18152 2.53745 13.1661 2.53745C19.1507 2.53745 23.9883 7.6652 23.9883 14.0088C23.9883 20.3524 19.1507 25.4802 13.1661 25.4802Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Bean Name"
                                            aria-action="beanSearch" aria-describedby="addon-wrapping">
                                    </div>
                                    <div class='bean-options'>
                                        @foreach ($coffees as $coffee)
                                        <button type="button" class="btn p-0 m-0 text-start w-100 bean_option_btn" data-bs-dismiss="modal">
                                            <input type="number" class="form-control visually-hidden" aria-describedby="helpId" value="{{ $coffee->id }}">
                                            <div class="container">
                                                <div
                                                class="row d-flex flex-row p-0 searchResult align-items-center justify-content-start">
                                                <div class="col-2 p-0 px-2">
                                                    <img class="img-fluid h-auto" src="{{ asset($coffee->product_img) }}"
                                                        alt="">
                                                </div>
                                                <div class="col p-2">
                                                    <h5 class="p-0 m-0">{{ $coffee->product_name }}</h5>
                                                </div>
                                            </div>
                                            </div>
                                            </button>
                                            @endforeach
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    {{-- <div class="input-group d-flex align-items-center justify-content-center border-0" >
                        <span class="input-group-text bg-primary p-2 rounded-start-pill ps-3" id="basic-addon1">
                          <i class="bi bi-plus-circle "></i>
                        </span>
                        <input name="beanName" id="" data-bs-toggle="modal" data-bs-target="#modal3"
                            class="btn bg-primary p-2 rounded-end-pill pe-3 text-truncate"
                            type="button" value="Add Bean">
                    </div> --}}

                </div>
                <div class="row justify-content-center align-items-center mt-4">
                    <h3 class="mb-0">Secondary Bean</h3>
                </div>
            </div>
        </div>`);
            }

            // menambahkan remove button pada bean-chooser yang baru
            addRemoveBtn($('body.coffeeBlendChooserPage .bean-chooser:last-child'))
        }

        function updateBeanChooser(bean_chooser, coffees) {
            // ketika input_bean_id berubah nilainya
            var bean_id = $(bean_chooser).find("input.bean_id").val()

            if (bean_id != '') {
                // tampilkan gambar coffenya
            $(bean_chooser).find('img.bean_image').attr('src',
                coffees[bean_id - 1]['product_img'])
            // tampllkan nama coffeenya
            // $(bean_chooser).find('.bean-name-p').html(
            //     '<h4 class="m-0">' + coffees[bean_id - 1][
            //         'product_name'
            //     ] + '</h4>')
            var data_bs_target = $(bean_chooser).find('.bean-name-p button').attr('data-bs-target')
            $(bean_chooser).find('.bean-name-p').html(
                `<button data-bs-toggle="modal" data-bs-target="${data_bs_target}" type="button"
                                        class="btn d-flex align-items-center justify-content-center rounded-4 border-0 mx-0 p-0">
                                        <h4 class="bean-name m-0 p-0">${coffees[bean_id - 1][
                                'product_name'
                            ]}</h4>
                                    </button>`)
            }
        }

        function addBean(bean_chooser) {
            // untuk setiap bean_option_btn
            var btn_bean_option = $(bean_chooser).find("button.bean_option_btn")
            $(btn_bean_option).each(function(index, element2) {
                // element == this
                var element_val;
                // ketika diklik
                $(element2).on('click', function(j) {
                    // j.preventDefault();
                    // ambil input.val() yang ada di dalamnya
                    element_val = $(element2).find('input').val()

                    // isi input_bean_id
                    $(bean_chooser).find("input.bean_id").val(element_val);

                    updateBeanChooser(bean_chooser, coffees)

                    console.log('ok')
                });
            });
        }

        function updateBeanChooserList() {
            var bean_chooser_list = $('body.coffeeBlendChooserPage .bean-chooser');
            var btn_addMore = $('body.coffeeBlendChooserPage button#addMore');

            // matikan button addMore ketika beanChooserList = 3
            if (bean_chooser_list.length == 3) {
                btn_addMore.attr('disabled', true);
            }
            // aktifkan button addMore ketika beanChooserList < 3
            else {
                btn_addMore.attr('disabled', false);
            }

            return bean_chooser_list;
        }

        function addRemoveBtn(bean_chooser) {
            $(bean_chooser).prepend(`<div class="d-flex m-3 flex-row justify-content-center align-items-center">
                                    <button type="button" class="btn btn-secondary remove-btn" id=""><svg width="20"
                                            height="20" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.75 15.75V19.25H26.25V15.75H8.75ZM17.5 0C7.83125 0 0 7.83125 0 17.5C0 27.1688 7.83125 35 17.5 35C27.1688 35 35 27.1688 35 17.5C35 7.83125 27.1688 0 17.5 0ZM17.5 31.5C9.7825 31.5 3.5 25.2175 3.5 17.5C3.5 9.7825 9.7825 3.5 17.5 3.5C25.2175 3.5 31.5 9.7825 31.5 17.5C31.5 25.2175 25.2175 31.5 17.5 31.5Z"
                                                fill="black" />
                                        </svg>
                                        Remove Bean</button>
                                </div>`);
            // menambahkan event listener
            var remove_btn = $(bean_chooser).find('button.remove-btn');

            remove_btn.on('click', function() {
                $(bean_chooser).remove();
                main()
            });
        }

        function main() {
            $(updateBeanChooserList()).each(function(index, element) {
                // element == this
                // var i_bean_name = $(element).find('input[name="beanName"]');
                var btn_bean_name = $(element).find('button:has(span.bean-name)')

                // ketika input_bean_id berubah nilainya
                updateBeanChooser(element, coffees)
                

                // ketika btn_bean_name diklik
                $(btn_bean_name).click(function() {
                    addBean(element)

                    // search bean
                    // ketika input[aria-action='beanSearch'] on change
                    $(element).find("input[aria-action='beanSearch']").on("keyup", function(e) {
                        var q = $(this).val();
                        // munculkan coffee sesuai dengan inputan
                        console.log(q)
                        $.ajax({
                            type: "GET",
                            url: "search",
                            data: {
                                'search': q
                            },
                            success: function(data) {
                                $(element).find('.bean-options').html(data);
                                
                                addBean(element);
                            }
                        });
                    });
                });
            });

            // nonaktifkan remove button ketika bean_chooser ada 3
            if ($("body.coffeeBlendChooserPage .bean-chooser").length == 3) {
                $("body.coffeeBlendChooserPage .bean-chooser:nth-child(2)").find('button.remove-btn').attr('disabled',
                    true);
            }
            // aktifkan untuk default
            else {
                $("body.coffeeBlendChooserPage .bean-chooser:nth-child(2)").find('button.remove-btn').attr('disabled',
                    false);
            }
        }

        $(document).ready(function() {
            var bean_chooser_list = updateBeanChooserList()
            var primary_bean_chooser = bean_chooser_list[1]
            var btn_addMore = $('body.coffeeBlendChooserPage button#addMore');

            addBeanChooser();

            btn_addMore.on('click', function() {

                addBeanChooser();

                main()
            });

            main()
        });
    </script>
@endsection
