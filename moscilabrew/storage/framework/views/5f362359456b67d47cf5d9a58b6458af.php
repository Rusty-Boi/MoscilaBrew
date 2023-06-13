<?php $__env->startSection('title', 'Check your blend vendors | MoscilaBrew'); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyClass', 'blendVendorsPage'); ?>

<?php $__env->startSection('content'); ?>
    <section id="blend-vendors" class="blend-vendors nav-on">
        <div class="container-fluid">
            <div class="section-title">
                <h2>Check your Blend Vendors</h2>
            </div>

            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
                <?php $__currentLoopData = $blend_vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col">
                        <a class="card vendor-card rounded-4 text-decoration-none" href="<?php echo e(route('coffeeBlend.confirmationBlend', ['vendor_id' => $vendor->id, 'data' => session('coffee_blend_data')])); ?>">
                            <img src="<?php echo e(asset('img/beans-tall.png')); ?>" class="card-img-top">
                            <div class="card-body p-2">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title vendor-name mb-0"><?php echo e($vendor->vendor_name); ?></h5>
                                        <p class="card-text partner-status bg-danger">
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
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/coffee-blend/blend-vendors.blade.php ENDPATH**/ ?>