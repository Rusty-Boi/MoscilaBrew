<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid vh-100">
        <div class="row align-items-center h-100">
            <div class="col d-none d-md-block">
                <div id="login_carousel" class="carousel slide">
                    <div class="carousel-indicators ">
                        <button type="button" data-bs-target="#login_carousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#login_carousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#login_carousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active vh-100 login_carousel_item">
                            <img src=<?php echo e(asset('/img/login-image.png')); ?> class="object-fit-cover py-2">
                        </div>
                        <div class="carousel-item vh-100 login_carousel_item">
                            <img src=<?php echo e(asset('/img/login-image.png')); ?> class="object-fit-cover py-2">
                        </div>
                        <div class="carousel-item vh-100 login_carousel_item">
                            <img src=<?php echo e(asset('/img/login-image.png')); ?> class="object-fit-cover py-2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col h-100 d-flex flex-column justify-content-center position-relative p-0">

                <div id="background_img" class="d-md-none z-n1"></div>
                <a class="h2 btn_home_hover text-decoration-none text-center position-absolute fw-bold" href="/"
                    style="top: 1rem; left: 50%; transform: translateX(-50%);">
                    <img src="<?php echo e(asset('img/moscilabrew_logo.png')); ?>" style="height: 3rem; object-fit: cover">
                </a>
                <div class="text-justify mx-5">
                    <h4 class="fw-bold">Welcome to MoscilaBrew,<br>Sign in to Continue.</h4>
                    <p>Don't have an account? <a class="fw-bold text-black" href="/register">Create an account.</a></p>
                </div>

                <?php if(session()->has('success')): ?>
                    <div class="mx-5">
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="check-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </symbol>
                            <symbol id="info-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                            </symbol>
                            <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </symbol>
                        </svg>
                        <div class="alert alert-success d-flex align-items-center mb-0" role="alert" style="height: 1rem">
                            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" style="width: 1rem">
                                <use xlink:href="#check-circle-fill" />
                            </svg>
                            <div>
                                <?php echo e(session('success')); ?>

                            </div>
                        </div>
                    </div>
                <?php elseif(session()->has('login_failed')): ?>
                    <div class="mx-5">
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="check-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </symbol>
                            <symbol id="info-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                            </symbol>
                            <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </symbol>
                        </svg>
                        <div class="alert alert-danger d-flex align-items-center mb-0" role="alert" style="height: 1rem">
                            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" style="width: 1rem"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div>
                                <?php echo e(session('login_failed')); ?>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <form id="login_form" class="mx-5" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">

                        <label for="email" class="form-label text-left">Email</label>
                        <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email"
                            name="email">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <label for="password" class="form-label text-left">Password</label>
                        <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password"
                            name="password">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="text-center">
                            <a href="#" class="text-black fw-bold"><small>Forgot Password?</small></a>
                            <br>
                            <button id="submit-button" type="submit" class="btn bg-krim mt-3 w-100 rounded-3">Sign
                                In</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('css/mystyle.css')); ?> type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Documents\GitHub\MoscilaBrew\moscilabrew\resources\views/login.blade.php ENDPATH**/ ?>