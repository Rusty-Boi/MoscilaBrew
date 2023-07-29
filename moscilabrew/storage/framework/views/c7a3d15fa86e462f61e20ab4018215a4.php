
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
            <form class="row gx-3 mt-2">
                <div class="col-md-7">
                    <p>Fill in the basic information about your item</p>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control form-control-sm" name="title" id="title"
                            aria-describedby="helpTitle" placeholder="Graphic card GIGABYTE GeForce RTX 3050">
                        <small id="helpTitle" class="form-text text-muted">0/60</small>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select form-select-sm" name="category" id="category">
                            <option selected>Arabica</option>
                            <option value="">New Delhi</option>
                            <option value="">Istanbul</option>
                            <option value="">Jakarta</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control form-control-sm" name="description" id="description" rows="5"
                            aria-describedby="helpDescription"></textarea>
                        <small id="helpDescription" class="form-text text-muted">0/1200</small>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="availability" class="form-label">Number of units available</label>
                        <input type="text" class="form-control form-control-sm" name="availability" id="availability"
                            aria-describedby="helpAvailability" placeholder="availability">
                    </div>
                    <p>Dimensions (optional)</p>
                    <div class="mb-3 d-flex align-items-center ">
                        <label for="length" class="form-label m-0 flex-grow-1">Length [mm]</label>
                        <input type="text" class="form-control form-control-sm w-25" name="length" id="length"
                            aria-describedby="helpLength" placeholder="">
                    </div>
                    <div class="mb-3 d-flex align-items-center ">
                        <label for="width" class="form-label m-0 flex-grow-1">Width [mm]</label>
                        <input type="text" class="form-control form-control-sm w-25" name="width" id="width"
                            aria-describedby="helpWidth" placeholder="">
                    </div>
                    <div class="mb-3 d-flex align-items-center ">
                        <label for="height" class="form-label m-0 flex-grow-1">Height [mm]</label>
                        <input type="text" class="form-control form-control-sm w-25" name="height" id="height"
                            aria-describedby="helpHeight" placeholder="">
                    </div>
                    <div class="mb-3 d-flex align-items-center ">
                        <label for="price" class="form-label m-0 flex-grow-1">Price</label>
                        <input type="text" class="form-control form-control-sm w-50" name="price" id="price"
                            aria-describedby="helpPrice" placeholder="">
                    </div>
                </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/seller/add-product/add-product-2.blade.php ENDPATH**/ ?>