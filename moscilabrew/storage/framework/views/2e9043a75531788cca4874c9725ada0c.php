<?php
    $deliveryOptions = array("Cash On Delivery",
"TIKI",
"Self-Delivery",
"JNE",
"JNT",
"Gojek-Instant",
"SiCepat",
"Grab-Instant")
?>


<?php $__env->startSection('title', '...'); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.header-seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyClass', 'seller-body'); ?>

<?php $__env->startSection('sideBar'); ?>
    <?php echo $__env->make('layouts.sidebar-seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <?php echo $__env->make('seller.add-product.add-product-process', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <section class="add-product-inputs" id="add-product-inputs">
            <p class="fw-bold">Select delivery options</p>
            <form class="row row-cols-2 gy-2">
                <?php $__currentLoopData = $deliveryOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col">
                        <div
                            class="delivery-option col form-check bg-grey p-3 rounded-2 d-flex align-items-center justify-content-start">
                            <input class="form-check-input" type="checkbox" value="<?php echo e($loop->index); ?>" id="<?php echo e($option); ?>">
                            <label class="form-check-label ms-2" for="<?php echo e($option); ?>" aria-selected="false">
                                <?php echo e($option); ?>

                            </label>
                        </div>
                    </div>                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <button name="next" id="next" type="submit" class="btn btn-submit" value="1">
                            Next
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/seller-style.css')); ?>" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
    <script src="<?php echo e(asset('js/seller.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/seller/add-product/add-product-3.blade.php ENDPATH**/ ?>