<!-- start of sidebar -->
<section class="seller-sidebar" id="seller-sidebar">
  <div class="d-flex position-fixed flex-column flex-shrink-0 bg-body-tertiary vh-80">
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
      <li class="nav-item">
        <a href="/seller/dashboard" class="nav-link <?php echo e((request()->is('seller/dashboard')) ? 'active' : ''); ?> py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
          <img src=<?php echo e(asset('img/home.png')); ?> width="40" height="40">          
        </a>
      </li>
      <li>
        <a href="/seller/discuss" class="nav-link <?php echo e((request()->is('seller/discuss')) ? 'active' : ''); ?> py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
          <img src=<?php echo e(asset('img/chat-conversation.png')); ?> width="40" height="40">
        </a>
      </li>
      <li>
        <a href="#" class="nav-link <?php echo e((request()->is('#')) ? 'active' : ''); ?> py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
          <img src=<?php echo e(asset('img/show-chart.png')); ?> width="40" height="40">
        </a>
      </li>
      <li>
        <a href="/seller/add-product" class="nav-link <?php echo e((request()->is('seller/add-product*')) ? 'active' : ''); ?> py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
          <img src=<?php echo e(asset('img/add-beans.png')); ?> width="40" height="40">
        </a>
      </li>
    </ul>
    <div class="dropend border-top">
      <a href="#" class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
        <img src=<?php echo e(asset('img/settings.png')); ?> alt="mdo" width="40" height="40" class="rounded-circle">
      </a>
      <ul class="dropdown-menu text-small shadow">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
</section>
<!-- end of sidebar --><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/layouts/sidebar-seller.blade.php ENDPATH**/ ?>