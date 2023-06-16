<?php $__env->startSection('title', 'Cart | MoscilBrew'); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyClass', 'cartPage'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid container-lg">
        <section id="..." class="... nav-on">

            <div class="section-title text-start">
                <h2>Keranjang</h2>
            </div>

            <div class="row">
                <div class="col-7">
                    <div class="row row-cols-1 g-2">
                        <?php if(session('cart')): ?>

                            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor_items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col">
                                    <div class="product-card card container">
                                        <div class="row">

                                            <?php $__currentLoopData = $vendor_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-1">
                                                    <div class="form-check">
                                                        <input onclick="orderInput(this, 'items')" class="form-check-input" type="checkbox" id="checkboxNoLabel"
                                                            value="<?php echo e($coffees->find($item['coffee_id'])->vendor->id); ?>"
                                                            <?php if(isset(session('order_list')[$coffees->find($item['coffee_id'])->vendor->id])): ?> checked <?php endif; ?>>
                                                    </div>
                                                </div>

                                                <div class="col-11 ps-0">
                                                    <?php if($loop->first): ?>
                                                        <div class="vendor row g-0">
                                                            <div class="col-1">
                                                                <img src="<?php echo e($coffees->find($item['coffee_id'])->vendor->vendor_logo); ?>"
                                                                    class="vendor-logo">
                                                            </div>
                                                            <div class="col">
                                                                <span class="vendor-name">
                                                                    <?php echo e($coffees->find($item['coffee_id'])->vendor->vendor_name); ?>

                                                                </span>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>

                                                    <div class="row">

                                                        <div class="col-1">
                                                            <div class="form-check">
                                                                <input onclick="orderInput(this, 'item')" class="form-check-input"
                                                                    type="checkbox" value="<?php echo e($item['coffee_id']); ?>"
                                                                    <?php if(isset(session('order_list')[$coffees->find($item['coffee_id'])->vendor->id][$item['coffee_id']])): ?> checked <?php endif; ?>>
                                                            </div>
                                                        </div>

                                                        <div class="col">
                                                            <div class="product-desc row g-0">
                                                                <div class="col-2">
                                                                    <img class="product-img"
                                                                        src="<?php echo e(asset($coffees->find($item['coffee_id'])->product_img)); ?>"
                                                                        alt="">
                                                                </div>
                                                                <div class="col">
                                                                    <span
                                                                        class="product-title"><?php echo e($coffees->find($item['coffee_id'])->product_name); ?></span>
                                                                    <span class="price">Rp
                                                                        <?php echo e(number_format($coffees->find($item['coffee_id'])->harga_product, 0, ',', '.')); ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="bottom">
                                                                <div class="d-flex">
                                                                    <div class="plus-minus-sign">
                                                                        <div class="center">
                                                                            <div class="input-group">
                                                                                <span class="input-group-text">
                                                                                    <button type="button"
                                                                                        class="btn btn-number"
                                                                                        data-type="minus"
                                                                                        data-field="quant[1]">
                                                                                        <i
                                                                                            class="fa-solid fa-circle-minus fa-lg"></i>
                                                                                    </button>
                                                                                </span>

                                                                                <input type="text" name="quant[1]"
                                                                                    class="form-control input-number"
                                                                                    value="<?php echo e($item['quantity']); ?>"
                                                                                    min="1" max="10">

                                                                                <span class="input-group-text">
                                                                                    <button type="button"
                                                                                        class="btn btn-number"
                                                                                        data-type="plus"
                                                                                        data-field="quant[1]">
                                                                                        <i
                                                                                            class="fa-solid fa-circle-plus fa-lg"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <span class="input-group-text remove">
                                                                        <a
                                                                            href="<?php echo e(route('cart.remove', $item['coffee_id'])); ?>">
                                                                            <button type="button" class="btn">
                                                                                <i class="fa-solid fa-trash-can fa-lg"></i>
                                                                            </button>
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <p class="total-price">Total Rp
                                                                        <?php echo e(number_format($item['total_price'], 0, ',', '.')); ?>

                                                                    </p>
                                                                    <a class="btn details"
                                                                        href="/catalog/<?php echo e($coffees->find($item['coffee_id'])->vendor->vendor_name); ?>/<?php echo e($item['coffee_id']); ?>"
                                                                        role="button">
                                                                        Details
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        </div>
                                    </div>
                                </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="col">
                        <h5>Your cart is empty!</h5>
                    </div>

                    <?php endif; ?>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column border border-2 p-3 rounded-4">
                    <h3 class="fw-bold">List Produk</h3>

                    <?php if(!empty(session('order_list'))): ?>
                        <?php $__currentLoopData = session('order_list'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row row-cols-1 g-2 mb-2">
                                <div class="col">
                                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($loop->first): ?>
                                            <div class="product-card card container">

                                                <div class="vendor row g-0">
                                                    <div class="col-1">
                                                        <img src="<?php echo e($coffees->find($item['coffee_id'])->vendor->vendor_logo); ?>"
                                                            class="vendor-logo">
                                                    </div>
                                                    <div class="col">
                                                        <span class="vendor-name">
                                                            <?php echo e($coffees->find($item['coffee_id'])->vendor->vendor_name); ?>

                                                        </span>
                                                    </div>
                                                </div>
                                        <?php endif; ?>

                                        <div class="product-desc row g-0">
                                            <div class="col offset-1">
                                                <span
                                                    class="product-title"><?php echo e($coffees->find($item['coffee_id'])->product_name); ?></span>
                                            </div>
                                            <div class="col-3 text-end">
                                                <span>Qty : <?php echo e($item['quantity']); ?> pax</span>
                                            </div>
                                        </div>
                                        <?php if($loop->last): ?>
                                            <div class="row g-0">
                                                <div class="col-12 text-end">
                                                    <span>Total : ... pax</span>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <button type="button" class="btn bg-primary rounded-pill fw-bold">
                            Beli
                            <i class="fa-solid fa-bag-shopping fa-lg ms-1"></i>
                        </button>
                    <?php else: ?>
                        <p>Empty</p>
                    <?php endif; ?>
                </div>

            </div>
    </div>
    </div>
    </div>
    </div>

    </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('css/style.css')); ?> type="text/css">
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src=<?php echo e(asset('js/main.js')); ?>></script>
    <script src="https://kit.fontawesome.com/a72340eb77.js" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/cart.blade.php ENDPATH**/ ?>