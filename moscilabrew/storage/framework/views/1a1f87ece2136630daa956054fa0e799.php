<?php $__env->startSection('title', 'MoscilaBrew'); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyClass', 'homePage'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Carousel Section - Home Page -->
    <section class="carousel nav-on" id="carousel">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $__currentLoopData = $carousel_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="carousel-item <?php echo e($loop->first ? 'active' : ''); ?>">
                    <img src="<?php echo e($item['img']); ?>" class="d-block object-fit-cover w-100 vh-md-90"
                        alt="...">
                    <h1 class="carousel-caption">
                        <?php echo e($item['coffee-name']); ?>

                    </h1>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- End of Carousel -->

    
    <section class="services" id="services">
        <div class="container">
            <div class="row justify-content-center align-items-stretch g-2 g-md-0">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="service col-11 col-md-3">
                        <img src="<?php echo e($service['img']); ?>" alt="">
                        <h4 class="title"><?php echo e($service['name']); ?></h4>
                        <p class="subtitle"><?php echo e($service['desc']); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    

    <section id="featured" class="featured">
        <div class="container">
            <div class="section-title">
                <h2>Featured Coffee Catalog</h2>
            </div>
            <div class="row justify-content-center align-items-center g-2 g-md-3">
                <?php $__currentLoopData = $featured_coffee_catalog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coffee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-11 col-md-3">
                        <a class="featured-content" href="#">
                            <img src="<?php echo e($coffee['img']); ?>" alt="">
                            <span class="caption"><?php echo e($coffee['coffee-name']); ?></span>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('css/style.css')); ?> type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src=<?php echo e(asset('js/index.js')); ?>></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ihsan\Documents\GitHub\MoscilaBrew\moscilabrew\resources\views/index.blade.php ENDPATH**/ ?>