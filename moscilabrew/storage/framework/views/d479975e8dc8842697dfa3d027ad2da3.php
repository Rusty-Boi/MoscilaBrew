<?php $__env->startSection('title', '...'); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyClass', 'confirmationBuyCoffeeBlendPage'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <section id="confirmation-buy-custom-blend" class="confirmation-buy-custom-blend nav-on">

            <div class="section-title text-start">
                <h2>Keranjang</h2>
            </div>
            <div class="row gx-4">
                <div class="col-7">
                    <div class="card vendor-card rounded-4 text-decoration-none" href="#">
                        <img src="<?php echo e(asset('img/beans-tall.png')); ?>" class="card-img-top">
                        <div class="card-body p-2">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title vendor-name mb-0"><?php echo e($vendor->vendor_name); ?></h5>
                                    <p class="card-text partner-status">
                                        Gold Partner
                                        <img class="m-0 vendor-img"
                                            src=<?php echo e(asset($partners_status_img['Gold Partner'])); ?>

                                            alt="">
                                    </p>
                                </div>
                                <div class="col-3">
                                    <img class="black-hole" src="<?php echo e(asset('img/black-hole.png')); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-2">
                        <div class="col-12">
                            <div class="card border border-0">
                                <div class="card-body px-0 pb-0">
                                    <h5 class="card-title">What you buy:</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary d-flex align-items-center">
                                        <img src="<?php echo e(asset('img/coffee-pack.png')); ?>" alt="" style="width: 2rem; max-width: 100%;">
                                        Blend Coffee
                                    </h6>
                                    <p class="card-text">
                                    <div class="container">
                                        <div class="row takaran-coffee-blend">
                                            <p class="col-3 px-0 fw-bold align-self-center">(Base)</p>
                                            <p class="col-5 px-0 align-self-center">Arabica Sumatra</p>
                                            <div class="col-3 rounded-pill percentage-group">
                                                <p class="percentage-text position-relative z-1"><?php echo e(request()['data']['base_ratio'] * 10); ?>%</p>
                                                <div class="percentage-bar rounded-start-pill"></div>
                                            </div>
                                        </div>

                                        <div class="row takaran-coffee-blend">
                                            <p class="col-3 px-0 fw-bold align-self-center">(Primary)</p>
                                            <p class="col-5 px-0 align-self-center">Arabica Java</p>
                                            <div class="col-3 rounded-pill percentage-group">
                                                <p class="percentage-text position-relative z-1"><?php echo e(request()['data']['primary_ratio'] * 10); ?>%</p>
                                                <div class="percentage-bar rounded-start-pill"></div>
                                            </div>
                                        </div>
                                        <?php if(request()['data']['secondary_ratio']): ?>
                                        <div class="row takaran-coffee-blend">
                                            <p class="col-3 px-0 fw-bold align-self-center">(Secondary)</p>
                                            <p class="col-5 px-0 align-self-center">Arabica</p>
                                            <div class="col-3 rounded-pill percentage-group">
                                                <p class="percentage-text position-relative z-1"><?php echo e(request()['data']['secondary_ratio'] * 10); ?>%</p>
                                                <div class="percentage-bar rounded-start-pill"></div>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        
                                        <div class="row mt-2">
                                            <p class="col text-center mb-0">
                                                Weight
                                                <span class="rounded-3 py-2 px-5 mx-2 bg-desertSand-30">1000</span>
                                                Pouch
                                            </p>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col d-flex justify-content-between fw-bold">
                            <p>
                                Subtotal
                            </p>
                            <p>
                                Rp 180.000
                            </p>
                        </div>
                        <div class="col-12">
                            <h4>Delivery</h4>
                            <div class="bg-desertSand-30 p-2 rounded-3 border border-2" style="font-size: small;">
                                <p class="fw-bold">Home</p>
                                <p class="mb-0">
                                    Jl. Meruya Selatan No.36, RT.5/RW.1, Joglo, Kec. Kembangan, Kota Jakarta Barat, Daerah
                                    Khusus Ibukota Jakarta 11640
                                </p>
                                <p class="mb-0 fw-semibold">+62 812 9987 8847</p>
                            </div>

                            <div id="deliveryOptions">
                                <h6 class="title fw-semibold mt-2">Select delivery options</h6>
                                <div class="container mt-2">
                                    <div class="row border border-2 rounded-3 p-2" style="background-color: #F8F8F8;">
                                        <div class="col-3 d-flex align-items-center">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="jnt"
                                                    id="jnt" onclick="changeColor()">
                                                <label class="form-check-label" for="jnt">
                                                    JNT
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <select class="form-select form-select-sm rounded-4 mx-2"
                                                aria-label="Default select example">
                                                <option selected>Reguler</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select class="form-select form-select-sm rounded-4 mx-2"
                                                aria-label="Default select example">
                                                <option selected>Reguler</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="container mt-2">
                                    <div class="row border border-2 rounded-3 p-2" style="background-color: #F8F8F8;">
                                        <div class="col-3 d-flex align-items-center">
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="sicepat"
                                                    id="sicepat" onclick="changeColor()">
                                                <label class="form-check-label" for="sicepat">
                                                    SiCepat
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <select class="form-select form-select-sm rounded-4 mx-2"
                                                aria-label="Default select example">
                                                <option selected>Reguler</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <select class="form-select form-select-sm rounded-4 mx-2"
                                                aria-label="Default select example">
                                                <option selected>Reguler</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-5">
                    <div class="border border-2 p-3 rounded-4">
                        <p class="fw-bold">Ringkasan Belanja</p>
                        <div class="d-flex justify-content-between">
                            <p>Blend Coffee</p>
                            <p>Rp 180.000</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Delivery-fee</p>
                            <p>Rp 20.000</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between fw-bold">
                            <p>Total Harga</p>
                            <p>Rp 200.000</p>
                        </div>
                        <a name="" id="" class="btn w-50 mx-auto d-block" href="#" role="button"
                            style="background-color: #EFC3A4;">Beli</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('css/style.css')); ?> type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src=<?php echo e(asset('js/main.js')); ?>></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/coffee-blend/confirmation-buy.blade.php ENDPATH**/ ?>