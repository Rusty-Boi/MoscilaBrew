<body>
    <header></header>

    <main></main>

    <footer></footer>
</body>


<?php $__env->startSection('title', '...'); ?>

<?php $__env->startSection('navbar'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyClass', '...'); ?>

<?php $__env->startSection('content'); ?>
    <section class="add-product-process" id="add-product-process">
        <div class="position-relative">
            <div class="bg-danger">
                <div width="50" height="50">p</div>
                
                
        </div>
        <img class="position-absolute z-n1" src="<?php echo e(asset('img/line.png')); ?>" style="top: 50%; left: 0;">
                
        </div>

        
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/seller-style.css')); ?>" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script src="<?php echo e(asset('js/seller.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/test.blade.php ENDPATH**/ ?>