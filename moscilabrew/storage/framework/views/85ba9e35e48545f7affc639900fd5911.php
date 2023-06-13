<?php $__env->startSection('title', 'Coffee Blend | MoscilaBrew'); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyClass', 'coffeeBlendPage'); ?>

<?php $__env->startSection('content'); ?>
    <section class="coffee-blend nav-on" id="coffee-blend">
        <div class="section-title">
            <h2>Let's Customize your Coffee!</h2>
        </div>

        <div class="coffee-blend-form rounded-4">
            <h2>COFFEE BLEND</h2>

            <div class="row justify-content-center g-2">

                <div class="col-4 align-self-center text-center">
                    <img class="rounded-4" src=<?php echo e(asset('img/coffee-pack.png')); ?> alt="" style="width: 80%;">
                </div>

                <div class="col">
                    <div class="container">
                        <form action="<?php echo e(route('coffeeBlend.create')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="d-flex align-items-end justify-content-between mb-3">
                                <div class="me-2 flex-fill">
                                    <label for="inputName" class="form-label mb-0">Reciept Name</label>
                                    <input type="text" class="form-control" name="inputName" id="inputName">
                                </div>

                                <a class="btn bg-primary d-flex align-items-center"
                                    href="#" role="button">
                                    <small class="text-truncate me-1">Your Receipt!</small>
                                    <i class="fa-solid fa-receipt"></i>
                                </a>
                            </div>

                            <div>
                                <div class="slider">
                                    <label for="slider1" class="form-label">Primary</label>
                                    <div class="row">
                                        <div class="col">
                                            <input name='primary_ratio' type="range" class="form-range me-3" id="slider1" step="1" min="0" max="10" value="5">       
                                        </div>
                                        <div class="col-1">
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>                          
                                                                                                                                                                                                                                                                                                                                                                                                                    
                                <div class="slider">
                                    <label for="slider2" class="form-label">Base</label>
                                    <div class="row">
                                        <div class="col">
                                            <input name='base_ratio' type="range" class="form-range me-3" id="slider2" step="1" min="0" max="10" value="5">       
                                        </div>
                                        <div class="col-1">
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>                          
                                                              
                                <div class="slider">
                                    <label for="slider3" class="form-label">Secondary (optional)</label>
                                    <div class="row">
                                        <div class="col">
                                            <input name='secondary_ratio' type="range" class="form-range me-3" id="slider3" step="1" min="0" max="10" value="0">       
                                        </div>
                                        <div class="col-1">
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>                          
                                  
                                <div class="d-flex justify-content-center">
                                    <span class="sliderRatio"></span>
                                    <span class="mx-2">:</span>
                                    <span class="sliderRatio"></span>
                                    <span class="mx-2">:</span>
                                    <span class="sliderRatio"></span>
                                </div>
                            </div>

                            <div class="ratio_sum_status alert alert-danger p-2 d-none" role="alert">
                            </div>

                            <div class="d-flex align-items-end justify-content-between mb-3">
                                <p class="mb-0 flex-fill"><span class="fs-5">Subtotal</span><br> <span
                                        class="fw-bold fs-4">Rp 180.000</span></p>

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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="https://kit.fontawesome.com/a72340eb77.js" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/coffee-blend/index.blade.php ENDPATH**/ ?>