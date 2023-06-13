<header>
    <nav class="navbar fixed-top navbar-expand-lg bg-secondary vh-md-10">
        <div class="container-fluid">
            <a class="navbar-brand mr-20 fw-bold" href="/">
                <img src="<?php echo e(asset('img/moscilabrew_logo.png')); ?>" style="height: 3rem; object-fit: cover">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-underline me-auto mb-2 mb-lg-0 m-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>" href="/">Home</a>
                        <div class="border-bottom"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('catalog') ? 'active' : ''); ?>" href="/catalog">Catalog</a>
                        <div class="border-bottom"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('coffee-blend') ? 'active' : ''); ?>"
                            href="/coffee-blend">Blend</a>
                        <div class="border-bottom"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('aboutUs') ? 'active' : ''); ?>" href="/aboutUs">About
                            Us</a>
                        <div class="border-bottom"></div>
                    </li>
                </ul>
                <ul class="navbar-nav me-right flex-row">
                    <li class="nav-item">
                        <form class="d-flex" role="search">
                            
                            <button onclick="search()" class="btn" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </form>
                    </li>

                    <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item">
                            <a href="/profile" class="btn profile" type="button" id="userProfile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black"
                                    class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a name="cart" id="cart" class="btn position-relative" href="/cart" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-cart" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>

                                <?php if(session()->has('cart')): ?>
                                    <small class="badge-notification"><?php echo e(count(session('cart'))); ?></small>
                                <?php endif; ?>
                            </a>
                        </li>

                        <li class="nav-item ms-2">
                            <a name="" id=""
                                class="btn-partners btn border-2 bg-primary fw-bold rounded-pill px-4"
                                href="/seller/dashboard" role="button">Partners</a>
                        </li>

                    <?php endif; ?>

                    <?php if(auth()->guard()->guest()): ?>

                        <li class="nav-item ms-2">
                            <a name="" id="" class="btn border-2" href="<?php echo e(route('login')); ?>" role="button"
                                style="border-color: rgb(239, 195, 164);">Login</a>
                        </li>
                        <li class="nav-item ms-2">
                            <a name="" id="" class="btn bg-krim" href="<?php echo e(route('register')); ?>"
                                role="button">Register</a>
                        </li>

                    <?php endif; ?>

                    <!--  -->
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/layouts/header.blade.php ENDPATH**/ ?>