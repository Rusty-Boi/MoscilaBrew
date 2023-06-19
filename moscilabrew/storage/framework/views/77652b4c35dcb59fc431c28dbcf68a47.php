<?php $__env->startSection('title', 'Cart | MoscilBrew'); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyClass', 'cartPage'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid container-lg">
        <section id="..." class="... nav-on">

            <?php if(session('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('success')); ?>                
                </div>
            <?php elseif(session('failed')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e(session('failed')); ?>

              </div>
            <?php endif; ?>


            <div class="section-title text-start">
                <h2>Keranjang</h2>
            </div>

            <div class="row">
                <div class="col-7">
                    <div class="row row-cols-1 g-2">
                        <?php if(count($carts) > 0): ?>
                            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor_id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col">
                                    <div class="product-card card container">
                                        <div class="row">
                                            <div class="col-1">
                                                <div class="form-check">
                                                    <input class="form-check-input vendor_check"
                                                        type="checkbox" id="checkboxNoLabel" value="<?php echo e($vendor_id); ?>" <?php if($orders->has($vendor_id)): ?>
                                                        <?php if(count($orders[$vendor_id]) == count($carts[$vendor_id])): ?>
                                                        checked
                                                    <?php endif; ?>
                                                        <?php endif; ?>>
                                                </div>
                                            </div>


                                            <div class="col-11">
                                                <div class="row">
                                                    <?php $__currentLoopData = $carts[$vendor_id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-11 ps-0">
                                                            <?php if($loop->first): ?>
                                                                <div class="vendor row g-0">
                                                                    <div class="col-1">
                                                                        <img src="<?php echo e($coffees->find($cart->coffee_id)->vendor->vendor_logo); ?>"
                                                                            class="vendor-logo">
                                                                    </div>
                                                                    <div class="col">
                                                                        <span class="vendor-name">
                                                                            <?php echo e($coffees->find($cart->coffee_id)->vendor->vendor_name); ?>

                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>

                                                            <div class="row">

                                                                <div class="col-1">
                                                                    <div class="form-check">
                                                                        
                                                                        <input class="form-check-input item_check" type="checkbox"
                                                                            value="<?php echo e($cart->id); ?>" <?php if($orders->has($vendor_id)): ?>
                                                                            <?php if($orders[$vendor_id]->firstWhere("cart_id", $cart->id) != null): ?>
                                                                            checked
                                                                        <?php endif; ?>
                                                                            <?php endif; ?>>
                                                                        
                                                                    </div>
                                                                </div>

                                                                <div class="col">
                                                                    <div class="product-desc row g-0">
                                                                        <div class="col-2">
                                                                            <img class="product-img"
                                                                                src="<?php echo e(asset($coffees->find($cart->coffee_id)->product_img)); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="col">
                                                                            <span
                                                                                class="product-title"><?php echo e($coffees->find($cart->coffee_id)->product_name); ?></span>
                                                                            <span class="price">Rp
                                                                                <?php echo e(number_format($coffees->find($cart->coffee_id)->harga_product, 0, ',', '.')); ?></span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="bottom" aria-cart-id = <?php echo e($cart->id); ?>>
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

                                                                                        <input type="text"
                                                                                            name="quant[1]"
                                                                                            class="form-control input-number"
                                                                                            value="<?php echo e($cart->quantity); ?>"
                                                                                            min="1" max="<?php echo e($coffees->find($cart->coffee_id)->jumlah_stok); ?>">

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
                                                                                    href="<?php echo e(route('cart.remove', $cart->coffee_id)); ?>">
                                                                                    <button type="button" class="btn">
                                                                                        <i
                                                                                            class="fa-solid fa-trash-can fa-lg"></i>
                                                                                    </button>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                        <div class="d-flex">
                                                                            <p class="total-price">Total Rp
                                                                                <?php echo e(number_format($cart->total_price, 0, ',', '.')); ?>

                                                                            </p>
                                                                            <a class="btn details"
                                                                                href="/catalog/<?php echo e($coffees->find($cart->coffee_id)->vendor->vendor_name); ?>/<?php echo e($cart->coffee_id); ?>"
                                                                                role="button">
                                                                                Details
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </div>
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

                        <?php if($orders): ?>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor_id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row row-cols-1 g-2 mb-2">
                                    <div class="col">
                                        <?php $__currentLoopData = $orders[$vendor_id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($loop->first): ?>
                                                <div class="product-card card container">
                                                    <div class="vendor row g-0">
                                                        <div class="col-1">
                                                            <img src="<?php echo e($vendors->find($vendor_id)->vendor_logo); ?>"
                                                                class="vendor-logo">
                                                        </div>
                                                        <div class="col">
                                                            <span class="vendor-name">
                                                                <?php echo e($vendors->find($vendor_id)->vendor_name); ?>

                                                            </span>
                                                        </div>
                                                    </div>
                                            <?php endif; ?>
                                            <div class="product-desc row g-0">
                                                <div class="col offset-1">
                                                    <span
                                                        class="product-title"><?php echo e($coffees->find($carts[$vendor_id]->find($item->cart_id)->coffee_id)->product_name); ?></span>
                                                </div>
                                                <div class="col-3 text-end">
                                                    <span>Qty : <?php echo e($carts[$vendor_id]->find($item->cart_id)->quantity); ?> pax</span>
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
                            <a href="<?php echo e(route('cart.checkout')); ?>" class="text-decoration-none text-black">
                            <button type="button" class="btn bg-primary rounded-pill fw-bold w-100">
                                    Checkout
                                    <i class="fa-solid fa-bag-shopping fa-lg ms-1"></i>
                                </button>
                            </a>
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

    <script>
        $(document).ready(function () {
            $("input.item_check").on("change", function () {
                if ($(this).is(":checked")){
                    window.location.href = "/cart/addToOrderList/" + $(this).val();
                }else {
                    window.location.href = "/cart/removeItemOrderList/" + $(this).val();
                }
            });
            $("input.vendor_check").on("change", function () {
                if ($(this).is(":checked")){
                    window.location.href = "/cart/addItemsToOrderList/" + $(this).val();
                }else {
                    window.location.href = "/cart/removeItemsOrderList/" + $(this).val();
                }
            });
            
            $('div.bottom').each(function (index, element) {
                $(this).find("button[data-type='plus']").click(function (e) { 
                    e.preventDefault();
                    var $cart_id = $(element).attr('aria-cart-id');
                    
                    $.ajax({
                        type: "get",
                        url: "/cart/plusQty/",
                        data: {'cart' : $cart_id},
                        success: function (response) {
                            location.reload();
                        }
                    });
                });

                $(this).find('input[name="quant[1]"]').on('change', function () {
                    var $cart_id = $(element).attr('aria-cart-id');
                    var $value = $(this).val();
                    
                    $.ajax({
                        type: "get",
                        url: "/cart/updateQty/",
                        data: {'cart' : $cart_id,
                                'value' : $value},
                        success: function (response) {
                            location.reload();
                        }
                    });
                });

                $(this).find("button[data-type='minus']").click(function (e) { 
                    e.preventDefault();
                    var $cart_id = $(element).attr('aria-cart-id');
                    
                    $.ajax({
                        type: "get",
                        url: "/cart/minusQty/",
                        data: {'cart' : $cart_id},
                        success: function (response) {
                            location.reload();
                        }
                    });
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ihsan\Documents\GitHub\MoscilaBrew\moscilabrew\resources\views/cart.blade.php ENDPATH**/ ?>