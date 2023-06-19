
<?php $__env->startSection('title', "Coffee Blend | MoscilaBrew"); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyClass', "coffeeBlendPage"); ?>

<?php $__env->startSection('content'); ?>
    <section class="coffee-blend nav-on" id="coffee-blend">
        <div class="section-title">
            <h2>Let's Customize your Coffee!</h2>
        </div>

        <img src=<?php echo e(asset('img/coffee-pack.png')); ?> alt="" style="width: 40vmin;">
        
        <form class="coffee-blend-form w-md-50 rounded-4">
            <h2>COFFEE BLEND</h2>
            <div class="mb-3 w-100">
                <div class="row row-cols-1 row-cols-md-3 gx-3">
                    <div class="col col-md-3 text-center align-self-center">
                        <img class="w-25 w-md-75" src=<?php echo e(asset('img/double-beans.png')); ?> alt="">
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
                        <img class="w-25 w-md-75" src=<?php echo e(asset('img/double-beans.png')); ?> alt="">
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
                        <img class="w-25 w-md-75" src=<?php echo e(asset('img/double-beans.png')); ?> alt="">
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


    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="main.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/coffee-blend.blade.php ENDPATH**/ ?>