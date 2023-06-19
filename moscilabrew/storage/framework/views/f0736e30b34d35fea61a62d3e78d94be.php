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
        <section class="pt-0" id="moscila_dashboard">

          <h2 class="fw-bold">Welcome to<br>MoscilaBrew Partners!</h2>      

          <div class="row row-cols-1 row-cols-md-2 g-4">
              <div class="col">
                  <div class="performa-card card">
                      <div class="card-body">
                          <h5 class="card-title">Views Product</h5>
                          <p class="card-text">
                              <span class="number">80.000</span> <span class="fw-bold">views</span>
                              <br>
                              <small class="month-duration">From January to March</small>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="performa-card card">
                      <div class="card-body">
                          <h5 class="card-title">Selling Product</h5>
                          <p class="card-text">
                              <span class="number">2.000</span> <span class="fw-bold">products</span>
                              <br>
                              <small class="month-duration">From January to March</small>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col col-md-4">
                  <div class="performa-card card">
                      <div class="card-body">
                          <h5 class="card-title">Views Product</h5>
                          <p class="card-text">
                              <span class="number">80.000</span> <span class="fw-bold">views</span>
                              <br>
                              <small class="month-duration">From January to March</small>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col col-md-4">
                  <div class="performa-card card">
                      <div class="card-body">
                          <h5 class="card-title">Selling Product</h5>
                          <p class="card-text">
                              <span class="number">2.000</span> <span class="fw-bold">products</span>
                              <br>
                              <small class="month-duration">From January to March</small>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col col-md-4">
                  <div class="performa-card card">
                      <div class="card-body">
                          <h5 class="card-title">Views Product</h5>
                          <p class="card-text">
                              <span class="number">80.000</span> <span class="fw-bold">views</span>
                              <br>
                              <small class="month-duration">From January to March</small>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      

        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/seller-style.css')); ?>" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/seller/dashboard.blade.php ENDPATH**/ ?>