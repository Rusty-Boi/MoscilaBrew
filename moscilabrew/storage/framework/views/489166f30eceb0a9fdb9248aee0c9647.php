
<?php $__env->startSection('title'); ?>
    <?php echo e($coffee['product_name']); ?> | MoscilaBrew
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyClass', 'productPage'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <section id="product-page" class="product-page nav-on">
            <div class="section-title text-start">
                <h2>
                    <img class="vendor_logo" src="<?php echo e(asset($coffee->vendor->vendor_logo)); ?>" style="width: 3rem;">
                    <?php echo e($coffee->vendor->vendor_name); ?>

                </h2>
            </div>

            <div class="row">
                <div class="col">
                    <div class="my-border">
                        <div class="row">
                            <div class="col-4">
                                <img style="max-width: 100%; width: 20rem;" src="<?php echo e(asset($coffee->product_img)); ?>"
                                    alt="">
                            </div>
                            <div class="col">
                                <h3 class="fw-bold"><?php echo e($coffee->product_name); ?></h3>

                                <div class="d-flex mb-3">
                                    <div class="rating" data-fbs-toggle="rating" data-bs-readonly="true">
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon w-50"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                    </div>
                                    <p class="mb-0 ms-2 fw-bold"><?php echo e($coffee->rating_product); ?> <span
                                            class="text-muted">(200)</span></p>
                                </div>

                                <p class="mb-0" style="text-align: justify">Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Modi officia,
                                    tenetur, blanditiis ex labore ullam est ut distinctio maiores dolores optio, excepturi
                                    doloremque inventore perferendis dolorum nisi. Voluptates dolores quis vitae maiores id
                                    deleniti praesentium quisquam asperiores nobis, ea molestiae quibusdam perspiciatis est
                                    tempore suscipit possimus consequuntur impedit, provident eius. Exercitationem nostrum
                                    vero quaerat pariatur debitis officia omnis aliquam corrupti laboriosam, nobis
                                    aspernatur? Dolor atque, tempore incidunt tempora, impedit, pariatur odit ab numquam
                                    dolorem cum ex! Animi repudiandae amet fugiat sapiente ratione deserunt autem cum
                                    exercitationem quasi. Dolor corrupti aut totam quasi, eveniet veritatis qui doloremque
                                    pariatur perferendis maxime velit?</p>
                            </div>
                        </div>
                        <hr>

                        
                        <div class="reviews-bar" id="reviews-bar">
                            <h3 class="mb-0">Review</h3>

                            <div class="mt-3 ms-1">
                                <span class="fw-bold fs-5"><?php echo e($coffee->rating_product); ?> </span>
                                <span class="text-muted">(200 reviews)</span>
                            </div>

                            <div>
                                <div class="d-flex align-items-center rating-progress_bar">
                                    <div class="rating" data-fbs-toggle="rating" data-bs-readonly="true">
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                    </div>
                                    <div class="progress mx-3">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="180" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="text-muted progress-text">180</span>
                                </div>
                                <div class="d-flex align-items-center rating-progress_bar">
                                    <div class="rating" data-fbs-toggle="rating" data-bs-readonly="true">
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                    </div>
                                    <div class="progress mx-3">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="text-muted progress-text">20</span>
                                </div>
                                <div class="d-flex align-items-center rating-progress_bar">
                                    <div class="rating" data-fbs-toggle="rating" data-bs-readonly="true">
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                    </div>
                                    <div class="progress mx-3">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="text-muted progress-text">0</span>
                                </div>
                                <div class="d-flex align-items-center rating-progress_bar">
                                    <div class="rating" data-fbs-toggle="rating" data-bs-readonly="true">
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                    </div>
                                    <div class="progress mx-3">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="text-muted progress-text">0</span>
                                </div>
                                <div class="d-flex align-items-center rating-progress_bar">
                                    <div class="rating" data-fbs-toggle="rating" data-bs-readonly="true">
                                        <label class="rating-item active">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                        <label class="rating-item">
                                            <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                            <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                        </label>
                                    </div>
                                    <div class="progress mx-3">
                                        <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="text-muted progress-text">0</span>
                                </div>
                            </div>
                        </div>
                        

                        <hr>
                        <div>
                            <div class="container px-4">
                                <div class="row gx-5">
                                    <div class="col-2 text-center">
                                        <img class="rounded-circle" src="<?php echo e(asset('img/4352365-removebg-preview.png')); ?>"
                                            alt="" style="max-width: 100%">
                                        <p class="text-truncate fw-bold" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" data-bs-custom-class="tooltip-arrow-auto"
                                            data-bs-title="Cristian ...">
                                            Cristian ...</p>
                                        <span class="text-start">Feb 22, 2023</span>
                                    </div>
                                    <div class="col d-flex flex-column justify-content-between">
                                        <div class="mb-2">
                                            <span class="fw-bold">Excelent</span>
                                            <br>
                                            <div class="rating" data-fbs-toggle="rating" data-bs-readonly="true">
                                                <label class="rating-item active">
                                                    <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                                    <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                                </label>
                                                <label class="rating-item active">
                                                    <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                                    <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                                </label>
                                                <label class="rating-item active">
                                                    <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                                    <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                                </label>
                                                <label class="rating-item active">
                                                    <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                                    <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                                </label>
                                                <label class="rating-item active">
                                                    <span class="rating-icon"><i class="fa-regular fa-star"></i></span>
                                                    <span class="rating-icon"><i class="fa-solid fa-star"></i></span>
                                                </label>
                                            </div>
                                        </div>
                                        <span style="text-align: justify">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="my-border d-flex flex-column justify-content-center">
                        <p>Stok : 55</p>
                        <p>Harga : <span class="fw-bold fs-5"><?php echo e($coffee['price']); ?></span></p>

                        <form action="<?php echo e(route('cart.add', $coffee->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="coffee_id" value="<?php echo e($coffee->id); ?>">
                            <div class="plus-minus-sign w-50 mb-3">
                                <div class="center">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <button type="button" class="btn btn-number" disabled="disabled"
                                                data-type="minus" data-field="quantity">
                                                <i class="fa-solid fa-circle-minus fa-lg"></i>
                                            </button>
                                        </span>
                                        <input type="text" name="quantity" class="form-control input-number"
                                            value="1" min="1" max="10">
                                        <span class="input-group-text">
                                            <button type="button" class="btn btn-number" data-type="plus"
                                                data-field="quantity">
                                                <i class="fa-solid fa-circle-plus fa-lg"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Button trigger modal -->
                            <button type="submit" class="btn bg-primary align-self-center fw-bold rounded-pill px-4">
                                <i class="fa-solid fa-plus fa-lg"></i>
                                Keranjang
                            </button>

                            

                            <?php if(session()->has('success')): ?>
                                <!-- Modal -->
                                <div class="modal fade" id="addToCartSuccessModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" style="top: 50%; transform: translateY(-50%)">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                Success add to cart!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <a href="<?php echo e(route('cart')); ?>">
                                                    <button type="button" class="btn btn-primary">View cart</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    

    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src=<?php echo e(asset('js/main.js')); ?>></script>
    <script src="https://kit.fontawesome.com/a72340eb77.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fastbootstrap@1.1.1/dist/js/fastbootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#addToCartSuccessModal").modal('show');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/product-page.blade.php ENDPATH**/ ?>