<?php $__env->startSection('title', 'Catalog'); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyClass', 'catalogPage'); ?>

<?php $__env->startSection('content'); ?>
    <section class="categories nav-on" id="categories">
        <div class="container">

            <div class="section-title text-start row">
                <div class="col">
                    <h2>Jenis Biji Kopi</h2>
                </div>

                <div class="col-5">
                    <form action="/catalog">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari nama produk / kategori / vendor" name="search" value="<?php echo e(request('search')); ?>">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center g-3">
                    <div class="col-3 d-none d-md-block">
                        <div class="accordion" id="accordionExample">

                            <?php $__currentLoopData = $bean_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bean_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="accordion-item filterBar">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse<?php echo e($bean_cat); ?>" aria-expanded="false"
                                            aria-controls="collapse<?php echo e($bean_cat); ?>">
                                            <?php echo e(ucwords($bean_cat)); ?>

                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo e($bean_cat); ?>" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="/catalog/<?php echo e($bean_cat); ?>"
                                                        class="filterItem link-body-emphasis text-decoration-none">
                                                        <?php echo e(ucwords($bean_cat)); ?>

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row row-cols-1 row-cols-md-2 g-2">
                            <?php if(count($coffees) > 0): ?>
                            <?php $__currentLoopData = $coffees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coffee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col">
                                    <a class="product-card card container"
                                        href="/catalog/<?php echo e($coffee->vendor->vendor_name); ?>/<?php echo e($coffee->id); ?>">
                                        <div class="vendor row g-0">
                                            <div class="col-1">
                                                <img src=<?php echo e(asset($coffee->vendor->vendor_logo)); ?> class="vendor-logo">
                                            </div>
                                            <div class="col">
                                                <span class="vendor-name">
                                                    <?php echo e($coffee->vendor->vendor_name); ?>

                                                </span>
                                            </div>
                                        </div>
                                        <div class="product-desc row g-0">
                                            <div class="col-4">
                                                <img class="product-img" src="<?php echo e(asset($coffee->product_img)); ?>"
                                                    alt="">
                                            </div>
                                            <div class="col">
                                                <span class="product-title"><?php echo e($coffee->product_name); ?></span>
                                                <span class="price">Rp
                                                    <?php echo e(number_format($coffee->harga_product, 0, ',', '.')); ?></span>
                                                <div class="rate-average">
                                                    <span class="rate"><?php echo e($coffee->rating_product); ?></span>
                                                    <span class="average"><?php echo e($coffee->average); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                
                            <?php else: ?>
                                <p>Tidak ditemukan</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/catalog.blade.php ENDPATH**/ ?>