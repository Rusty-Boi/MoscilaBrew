
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
            <p class="fw-bold">Seller Address</p>
            <form id="seller_add_product" class="row row-cols-2">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="street" class="form-label">Street</label>
                        <input type="text" class="form-control form-control-sm" name="street" id="street"
                            aria-describedby="helpStreet" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="mb-3">
                        <label for="street" class="form-label">Zip Code</label>
                        <input type="text" class="form-control form-control-sm" name="zipCode" id="zipCode"
                            aria-describedby="helpZipCode" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="mb-3">
                        <label for="street" class="form-label">City</label>
                        <input type="text" class="form-control form-control-sm" name="city" id="city"
                            aria-describedby="helpCity" placeholder="Enter a city">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="mb-3">
                        <label for="street" class="form-label">Building Number</label>
                        <input type="text" class="form-control form-control-sm" name="buildingNumber" id="buildingNumber"
                            aria-describedby="helpBuildingNumber" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="mb-3">
                        <label for="street" class="form-label">Premises Number (optional)</label>
                        <input type="text" class="form-control form-control-sm" name="premisesNumber" id="premisesNumber"
                            aria-describedby="helpPremisesNumber" placeholder="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="street" class="form-label">Additional Information</label>
                        <input type="text" class="form-control form-control-sm" name="street" id="street"
                            aria-describedby="helpAdditionalInformation" placeholder="Provide more details">
                        <small id="helpAdditionalInformation" class="form-text text-muted">0/600</small>
                    </div>
                </div>
                <div class="col-12 my-2">
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/seller/add-product/add-product-4.blade.php ENDPATH**/ ?>