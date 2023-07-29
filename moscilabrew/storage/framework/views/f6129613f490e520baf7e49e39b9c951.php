<?php $__env->startSection('title', 'Daftar Transaksi'); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyClass', 'daftarTransaksiPage'); ?>

<?php $__env->startSection('content'); ?>
    <section id="daftar-transaksi" class="daftar-transaksi nav-on">
        <div class="container-fluid px-4 text-center">
            <div class="row gx-5">
                <div class="col">
                    <div class="section-title text-start">
                        <h2>Daftar Transaksi</h2>
                    </div>

                    <div class="d-flex">
                        <div class="input-group mb-3 search-group">
                            <input type="text" class="search-input form-control rounded-pill" placeholder="Cari"
                                aria-label="Cari" aria-describedby="button-addon2">
                            <button class="btn search-btn" type="button" id="button-addon2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </div>

                        <form>
                            <div class="row form-group">
                                <label for="date" class="col-sm-1 col-form-label"></label>
                                <div class="col">
                                    <div class="input-group date" id="datepicker">
                                        <input type="text" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row gy-2">
                        <?php if(count($transactions) > 0): ?>
                        <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12">
                            <div class="product-card card container">
                                <div class="tgl-transaksi">
                                    <p><?php echo e($transaction['tgl_transaksi']); ?></p>
                                </div>
                                <?php $__currentLoopData = $transaction->transactionDetails->groupBy('vendor_id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor_id => $transaction_items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="vendor row g-0">
                                    <div class="col-1">
                                        <img src="<?php echo e($coffees->find($vendor_id)['vendor-logo']); ?>" class="vendor-logo">
                                    </div>
                                    <div class="col text-start">
                                        <span class="vendor-name">
                                            <?php echo e($coffees->find($vendor_id)['vendor-name']); ?>

                                        </span>
                                    </div>
                                </div>
                                <?php $__currentLoopData = $transaction_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                        
                                    <div class="product-desc row g-0 mb-2">
                                        <div class="col-2">
                                            <img class="product-img" src="<?php echo e($coffees->find($item->coffee_id)['product_img']); ?>" alt="">
                                        </div>
                                        <div class="col">
                                            <span class="product-title"><?php echo e($coffees->find($item->coffee_id)['product_name']); ?></span>
                                            <span class="qty">Total <span class="bg-primary rounded-pill px-2"><?php echo e($item['quantity']); ?></span>
                                                Pouch</span>
                                            <span class="total-price-item"><?php echo e($item['quantity']); ?> x Rp <?php echo e(number_format($coffees->find($item->coffee_id)['harga_product'], 0, ',', '.')); ?> = Rp <?php echo e(number_format($item['total_price'], 0, ',', '.')); ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="bottom justify-content-end">
                                    <div class="d-flex">
                                        <p class="total-price">Total Rp <?php echo e(number_format($transaction->subtotal, 0, ',', '.')); ?></p>
                                        <a class="btn details" href="#" role="button">
                                            <?php echo e($transaction['action']); ?>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <p>Tidak ada transaksi!</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Nama Pembeli</h5>
                            <div class="d-flex justify-content-center">
                                <img src="<?php echo e('img/Profile pict.png'); ?>" class="img-thumbnail border-0 text-center"
                                    alt="...">
                            </div>
                            <h6 class="card-subtitle mb-2 text-muted text-center fw-bold">Coffee-Lovers!</h6>

                            <div class="row justify-content-center">
                                <div class="col-md-10 px-2">
                                    <div class="progress " role="progressbar" aria-label="30px high" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100" style="height: 25px">
                                        <div class="progress-bar" style="width: 25%">25%</div>
                                    </div>
                                </div>
                                <div class="logomembership col-md px-0">
                                    <img src="<?php echo e('img/Starbucks.png'); ?>" class="img" alt="..."
                                        style="height: 30px; padding-bottom: 5px;">
                                </div>
                            </div>

                            <hr>
                            <div class="accordion" id="accordionExample">
                                <div class="container-prodaf">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Kotak Masuk
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#"
                                                        class="filterItem link-body-emphasis text-decoration-none">Chat</a>
                                                </li>
                                                <li><a href="#"
                                                        class="filterItem link-body-emphasis text-decoration-none">Ulasan</a>
                                                </li>
                                                <li><a href="#"
                                                        class="filterItem link-body-emphasis text-decoration-none">Komplain</a>
                                                </li>
                                                <li><a href="#"
                                                        class="filterItem link-body-emphasis text-decoration-none">Bantuan</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <h2 class="container-prodaf">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Profile
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#"
                                                        class="filterItem link-body-emphasis text-decoration-none">Edit
                                                        Profile</a></li>
                                                <li><a href="#"
                                                        class="filterItem link-body-emphasis text-decoration-none">Coupon</a>
                                                </li>
                                                <li><a href="#"
                                                        class="filterItem link-body-emphasis text-decoration-none">Wishlist</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="card-link">Card link</a>
                                                <a href="#" class="card-link">Another link</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('css/style.css')); ?> type="text/css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="daftar_transaksi.css" type="text/css">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src=<?php echo e(asset('js/index.js')); ?>></script>
    <script src="https://kit.fontawesome.com/a72340eb77.js" crossorigin="anonymous"></script>
    
    <script src='fullcalendar/dist/index.global.js'></script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/daftar-transaksi.blade.php ENDPATH**/ ?>