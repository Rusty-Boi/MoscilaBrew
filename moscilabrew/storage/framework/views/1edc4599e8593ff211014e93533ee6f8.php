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
            <form action="">
                
                <div id="prod-desc" class="row gx-3 mt-2 d-none">
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
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <button name="next" id="next" class="btn btn-submit" value="#prod-photos">
                                Next
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                

                
                <div id="prod-photos" class="d-none">
                    <p>Add product photos (max. 10)</p>
                    <input type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                        multiple>
                    <div class="d-flex justify-content-center mt-3">
                        <button name="next" id="next" class="btn btn-submit" value="#prod-delivery">
                            Next
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </button>
                    </div>
                </div>
                

                
                <div id="prod-delivery" class="d-none">
                    <p class="fw-bold">Select delivery options</p>
                    <div class="row row-cols-2 gy-2 mb-2">
                        <?php $__currentLoopData = $deliveryOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col">
                                <div
                                    class="delivery-option col form-check bg-grey p-3 rounded-2 d-flex align-items-center justify-content-start">
                                    <input class="form-check-input" type="checkbox" value="<?php echo e($loop->index); ?>"
                                        id="<?php echo e($option); ?>">
                                    <label class="form-check-label ms-2" for="<?php echo e($option); ?>" aria-selected="false">
                                        <?php echo e($option); ?>

                                    </label>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <button name="next" id="next" class="btn btn-submit" value="#prod-complaints">
                                    Next
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                

                
                <div id="prod-complaints" class="d-none">
                    <p class="fw-bold">Seller Address</p>
                    <div class="row row-cols-2">
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
                                <input type="text" class="form-control form-control-sm" name="buildingNumber"
                                    id="buildingNumber" aria-describedby="helpBuildingNumber" placeholder="">
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="mb-3">
                                <label for="street" class="form-label">Premises Number (optional)</label>
                                <input type="text" class="form-control form-control-sm" name="premisesNumber"
                                    id="premisesNumber" aria-describedby="helpPremisesNumber" placeholder="">
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
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <button name="next" id="kirim" type="submit" class="btn btn-submit"
                                    value="#prod-success">
                                    Kirim
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                

                
                <div id="prod-success" class="d-none">
                    <?php echo $__env->make("layouts.success", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                
            </form>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/seller-style.css')); ?>" type="text/css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href=<?php echo e(asset('css/imageuploadify.min.css')); ?> rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('js/seller.js')); ?>"></script>
    <script type="text/javascript" src=<?php echo e(asset('js/imageuploadify.min.js')); ?>></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('input[type="file"]').imageuploadify();
        })
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\GitHub\MoscilaBrew\moscilabrew\resources\views/seller/add-product/add-product.blade.php ENDPATH**/ ?>