<?php $__env->startSection('title', 'Add-product'); ?>

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

        
        <p><?php echo e(session('message')); ?></p>

        <section class="add-product-inputs" id="add-product-inputs">
            
            
                
                <form action="<?php echo e(route('seller.addProductProcess', ['process_num' => '1'])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div id="prod-desc" class="row gx-3 mt-2 d-none">
                        <div class="col-md-7">
                            <p>Fill in the basic information about your item</p>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control form-control-sm" name="product_name" id="title" value="<?php echo e(session('new_product')['product_name'] ?? ''); ?>"
                                    aria-describedby="helpTitle" placeholder="" required>
                                <small id="helpTitle" class="form-text text-muted">0/60</small>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select form-select-sm" name="bean_category_name" id="category" required value="<?php echo e(session('new_product')['bean_category_name'] ?? ''); ?>"> 
                                    <?php $__currentLoopData = $beanCategoryList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option><?php echo e($cat); ?></option>                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control form-control-sm" name="product_desc" id="description" rows="5"
                                    aria-describedby="helpDescription" required><?php echo e(session('new_product')['product_desc'] ?? ''); ?></textarea>
                                <small id="helpDescription" class="form-text text-muted">0/1200</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="availability" class="form-label">Number of units available</label>
                                <input type="text" class="form-control form-control-sm" name="jumlah_stok" id="availability" value="<?php echo e(session('new_product')['jumlah_stok'] ?? ''); ?>"
                                    aria-describedby="helpAvailability" placeholder="availability" required>
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
                                <input type="text" class="form-control form-control-sm w-50" name="harga_product" id="price" value="<?php echo e(session('new_product')['harga_product'] ?? ''); ?>"
                                    aria-describedby="helpPrice" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <button type="submit" aria-btn-name="next" id="next" class="btn btn-submit" value="#prod-photos">
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
                </form>
                

                
                <form action="<?php echo e(route('seller.addProductProcess', ['process_num' => '2'])); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div id="prod-photos" class="d-none">
                        <p>Add product photos (max. 10)</p>
                        <input name="product_img" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                         required>
                        <div class="d-flex justify-content-center mt-3">
                            
                            <button type="submit" aria-btn-name="next" id="next" class="btn btn-submit" value="#prod-delivery">
                                Kirim
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
                

                
                <form action="<?php echo e(route('seller.addProductProcess', ['process_num' => '3'])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div id="prod-delivery" class="d-none">
                        <p class="fw-bold">Select delivery options</p>
                        <div class="row row-cols-2 gy-2 mb-2">
                            <?php $__currentLoopData = $deliveryOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col">
                                    <div
                                        class="delivery-option col form-check bg-grey p-3 rounded-2 d-flex align-items-center justify-content-start">
                                        <input class="form-check-input" type="checkbox" value="<?php echo e($loop->index); ?>"
                                            id="<?php echo e($option); ?>" name="<?php echo e($option); ?>">
                                        <label class="form-check-label ms-2" for="<?php echo e($option); ?>" aria-selected="false">
                                            <?php echo e($option); ?>

                                        </label>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" aria-btn-name="next" id="next" class="btn btn-submit" value="#prod-complaints">
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
                </form>
                

                
                <form action="<?php echo e(route('seller.addProductProcess', ['process_num' => '4'])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div id="prod-complaints" class="d-none">
                        <p class="fw-bold">Seller Address</p>
                        <div class="row row-cols-2">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="street" class="form-label">Street</label>
                                    <input type="text" class="form-control form-control-sm" name="street" id="street"
                                        aria-describedby="helpStreet" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3">
                                    <label for="street" class="form-label">Zip Code</label>
                                    <input type="number" class="form-control form-control-sm" name="zipCode" id="zipCode"
                                        aria-describedby="helpZipCode" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3">
                                    <label for="street" class="form-label">City</label>
                                    <input type="text" class="form-control form-control-sm" name="city" id="city"
                                        aria-describedby="helpCity" placeholder="Enter a city" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3">
                                    <label for="street" class="form-label">Building Number</label>
                                    <input type="number" class="form-control form-control-sm" name="buildingNumber"
                                        id="buildingNumber" aria-describedby="helpBuildingNumber" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3">
                                    <label for="street" class="form-label">Premises Number (optional)</label>
                                    <input type="text" class="form-control form-control-sm" name="premisesNumber"
                                        id="premisesNumber" aria-describedby="helpPremisesNumber">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="street" class="form-label">Additional Information</label>
                                    <input type="text" class="form-control form-control-sm" name="additional_information" id="street"
                                        aria-describedby="helpAdditionalInformation" placeholder="Provide more details">
                                    <small id="helpAdditionalInformation" class="form-text text-muted">0/600</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex justify-content-center">
                                    <button id="kirim" type="submit" class="btn btn-submit"
                                        value="#prod-success">
                                        Kirim
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                

                
                <div id="prod-success" class="d-none">
                    <?php echo $__env->make("layouts.success", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                
            
        </section>
    </div>

    <div class="modal" id="meassageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <p><?php echo e(session('message')); ?></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/seller-style.css')); ?>" type="text/css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link type="text/css" href="<?php echo e(asset('css/imageuploadify.min.css')); ?>" rel="stylesheet">
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
        // var _gaq = _gaq || [];
        // _gaq.push(['_setAccount', 'UA-36251023-1']);
        // _gaq.push(['_setDomainName', 'jqueryscript.net']);
        // _gaq.push(['_trackPageview']);

        // (function() {
        //     var ga = document.createElement('script');
        //     ga.type = 'text/javascript';
        //     ga.async = true;
        //     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
        //         '.google-analytics.com/ga.js';
        //     var s = document.getElementsByTagName('script')[0];
        //     s.parentNode.insertBefore(ga, s);
        // })();
    </script>

    <script>
        $(document).ready(function () {
            // $(".process-link-eclipse").click(function (e) {
            //     e.preventDefault();
            //     // [href = '#prod-photos']
            //     var process_link_active = $('.process-link.active');
            //     var href = $(process_link_active).find('a.process-link-eclipse').attr('href');
            //     // alert($(this).attr('href') === href)
            //     // alert($(this).attr('href'))
            //     // alert($(this).attr('href'))
            //     alert($('.process-link.passed').find($(this).attr('href')));
            //     if ($(this).hasClass('passed')){
            //         alert('y')
            //     }
            //     else if ($(this).attr('href') !== href){
            //         $(href).find('button[type="submit"]').click();
            //     }

            // })
            // if (<?php echo e($process_num); ?> === 1) {
            //     $(".process-link-eclipse[href = '#prod-desc']").click()
            //     // $(".process-link-eclipse[href = '#prod-photos']").click()
            // }
            // else if (<?php echo e($process_num); ?> === 2){
            //     $(".process-link-eclipse[href = '#prod-delivery']").click()
            // }
            // else if (<?php echo e($process_num); ?> === 3){
            //     $(".process-link-eclipse[href = '#prod-complaints']").click()
            // }
            // else if (<?php echo e($process_num); ?> === 4){
            //     $(".process-link-eclipse[href = '#prod-success']").click()
            // }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/seller/add-product/add-product.blade.php ENDPATH**/ ?>