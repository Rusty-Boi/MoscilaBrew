<?php $__env->startSection('title', '...'); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bodyClass', 'profilePage'); ?>

<?php $__env->startSection('content'); ?>

    <section class="nav-on">
        <div class="container">
            <div class="row profile-page">

                
                <div class="col-3">
                    <div class="card profile-container d-flex">
                        <div class="section-title">
                            <h2>Your Account</h2>
                        </div>

                        <div class="mb-2 text-center">
                            <img id="profileIMG" src="<?php echo e(asset('img/Profile pict.png')); ?>" alt="">
                            <p class="mb-0"><?php echo e(Auth::user()->name); ?></p>
                            <small><?php echo e(Auth::user()->email); ?></small>
                        </div>

                        <div class="w-100">
                            <a class="menu_link justify-content-center" href="#profileDetails" style="padding: 0">
                                <button onclick="gotoProfile()" type="button" class="btn btn-primary button active"
                                    id="profileDetail">
                                    <div class="button-flex d-flex flex-row">
                                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5 14.7368C16.0427 14.7368 14.6181 14.3047 13.4063 13.495C12.1946 12.6854 11.2502 11.5346 10.6925 10.1882C10.1348 8.84179 9.98885 7.36025 10.2732 5.93092C10.5575 4.50158 11.2592 3.18866 12.2897 2.15816C13.3202 1.12767 14.6332 0.425898 16.0625 0.141585C17.4918 -0.142727 18.9734 0.0031926 20.3198 0.560891C21.6662 1.11859 22.817 2.06302 23.6266 3.27475C24.4363 4.48648 24.8684 5.91109 24.8684 7.36842C24.8684 9.32265 24.0921 11.1968 22.7103 12.5787C21.3284 13.9605 19.4542 14.7368 17.5 14.7368ZM17.5 1.84211C16.407 1.84211 15.3385 2.16622 14.4297 2.77346C13.5209 3.3807 12.8126 4.24379 12.3943 5.25359C11.9761 6.2634 11.8666 7.37455 12.0799 8.44655C12.2931 9.51855 12.8194 10.5033 13.5923 11.2761C14.3652 12.049 15.3499 12.5753 16.4219 12.7886C17.4939 13.0018 18.605 12.8923 19.6148 12.4741C20.6246 12.0558 21.4877 11.3475 22.095 10.4387C22.7022 9.52988 23.0263 8.46143 23.0263 7.36842C23.0263 5.90275 22.4441 4.49711 21.4077 3.46073C20.3713 2.42434 18.9657 1.84211 17.5 1.84211ZM35 35H33.1579V34.0789C33.1579 29.9262 31.5082 25.9436 28.5718 23.0071C25.6354 20.0707 21.6527 18.4211 17.5 18.4211C13.3473 18.4211 9.36462 20.0707 6.4282 23.0071C3.49177 25.9436 1.84211 29.9262 1.84211 34.0789V35H0V34.0789C0 29.4377 1.84374 24.9865 5.12563 21.7046C8.40752 18.4227 12.8587 16.5789 17.5 16.5789C22.1413 16.5789 26.5925 18.4227 29.8744 21.7046C33.1563 24.9865 35 29.4377 35 34.0789V35Z"
                                                fill="black" />
                                        </svg>
                                        Profile Details
                                </button>
                            </a>
                            <hr class="my-1">
                            <a class="menu_link justify-content-center" href="#draftReceipt" style="padding: 0">
                                <button type="button" class="btn btn-primary button">
                                    <div class="button-flex d-flex flex-row"><svg width="28" height="40"
                                            viewBox="0 0 28 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23.5714 40H3.57143C2.62423 40 1.71582 39.6237 1.04605 38.954C0.376274 38.2842 0 37.3758 0 36.4286V3.57143C0 2.62423 0.376274 1.71583 1.04605 1.04605C1.71582 0.37628 2.62423 5.69637e-06 3.57143 5.69637e-06H16.6714C17.1407 -0.000832497 17.6056 0.0908394 18.0395 0.26978C18.4734 0.448721 18.8677 0.711421 19.2 1.04286L26.1 7.94286C26.4314 8.27514 26.6941 8.66949 26.8731 9.10336C27.052 9.53723 27.1437 10.0021 27.1429 10.4714V36.4286C27.1429 37.3758 26.7666 38.2842 26.0968 38.954C25.427 39.6237 24.5186 40 23.5714 40ZM3.57143 1.42858C3.00311 1.42858 2.45806 1.65434 2.0562 2.05621C1.65434 2.45807 1.42857 3.00311 1.42857 3.57143V36.4286C1.42857 36.9969 1.65434 37.5419 2.0562 37.9438C2.45806 38.3457 3.00311 38.5714 3.57143 38.5714H23.5714C24.1397 38.5714 24.6848 38.3457 25.0867 37.9438C25.4885 37.5419 25.7143 36.9969 25.7143 36.4286V10.4714C25.7138 9.9033 25.4877 9.35863 25.0857 8.95715L18.1857 2.05715C17.7842 1.65517 17.2396 1.42908 16.6714 1.42858H3.57143Z"
                                                fill="#794028" />
                                            <path
                                                d="M22.8571 10.7143H20C19.0528 10.7143 18.1444 10.338 17.4746 9.66825C16.8048 8.99848 16.4286 8.09007 16.4286 7.14287V4.28573C16.4286 4.09629 16.5038 3.91461 16.6378 3.78065C16.7717 3.6467 16.9534 3.57144 17.1429 3.57144C17.3323 3.57144 17.514 3.6467 17.6479 3.78065C17.7819 3.91461 17.8571 4.09629 17.8571 4.28573V7.14287C17.8571 7.71119 18.0829 8.25623 18.4848 8.6581C18.8866 9.05996 19.4317 9.28573 20 9.28573H22.8571C23.0466 9.28573 23.2283 9.36098 23.3622 9.49494C23.4962 9.62889 23.5714 9.81057 23.5714 10C23.5714 10.1895 23.4962 10.3711 23.3622 10.5051C23.2283 10.639 23.0466 10.7143 22.8571 10.7143ZM13.5714 7.85716H5.71429C5.52485 7.85716 5.34316 7.7819 5.20921 7.64795C5.07525 7.51399 5 7.33231 5 7.14287C5 6.95343 5.07525 6.77175 5.20921 6.63779C5.34316 6.50384 5.52485 6.42858 5.71429 6.42858H13.5714C13.7609 6.42858 13.9425 6.50384 14.0765 6.63779C14.2105 6.77175 14.2857 6.95343 14.2857 7.14287C14.2857 7.33231 14.2105 7.51399 14.0765 7.64795C13.9425 7.7819 13.7609 7.85716 13.5714 7.85716ZM15.7143 12.8572H5.71429C5.52485 12.8572 5.34316 12.7819 5.20921 12.6479C5.07525 12.514 5 12.3323 5 12.1429C5 11.9534 5.07525 11.7717 5.20921 11.6378C5.34316 11.5038 5.52485 11.4286 5.71429 11.4286H15.7143C15.9037 11.4286 16.0854 11.5038 16.2194 11.6378C16.3533 11.7717 16.4286 11.9534 16.4286 12.1429C16.4286 12.3323 16.3533 12.514 16.2194 12.6479C16.0854 12.7819 15.9037 12.8572 15.7143 12.8572ZM21.4286 17.8572H5.71429C5.52485 17.8572 5.34316 17.7819 5.20921 17.6479C5.07525 17.514 5 17.3323 5 17.1429C5 16.9534 5.07525 16.7717 5.20921 16.6378C5.34316 16.5038 5.52485 16.4286 5.71429 16.4286H21.4286C21.618 16.4286 21.7997 16.5038 21.9336 16.6378C22.0676 16.7717 22.1429 16.9534 22.1429 17.1429C22.1429 17.3323 22.0676 17.514 21.9336 17.6479C21.7997 17.7819 21.618 17.8572 21.4286 17.8572ZM21.4286 22.8572H5.71429C5.52485 22.8572 5.34316 22.7819 5.20921 22.6479C5.07525 22.514 5 22.3323 5 22.1429C5 21.9534 5.07525 21.7717 5.20921 21.6378C5.34316 21.5038 5.52485 21.4286 5.71429 21.4286H21.4286C21.618 21.4286 21.7997 21.5038 21.9336 21.6378C22.0676 21.7717 22.1429 21.9534 22.1429 22.1429C22.1429 22.3323 22.0676 22.514 21.9336 22.6479C21.7997 22.7819 21.618 22.8572 21.4286 22.8572ZM21.4286 27.8572H5.71429C5.52485 27.8572 5.34316 27.7819 5.20921 27.6479C5.07525 27.514 5 27.3323 5 27.1429C5 26.9534 5.07525 26.7717 5.20921 26.6378C5.34316 26.5038 5.52485 26.4286 5.71429 26.4286H21.4286C21.618 26.4286 21.7997 26.5038 21.9336 26.6378C22.0676 26.7717 22.1429 26.9534 22.1429 27.1429C22.1429 27.3323 22.0676 27.514 21.9336 27.6479C21.7997 27.7819 21.618 27.8572 21.4286 27.8572ZM21.4286 32.8572H5.71429C5.52485 32.8572 5.34316 32.7819 5.20921 32.6479C5.07525 32.514 5 32.3323 5 32.1429C5 31.9534 5.07525 31.7717 5.20921 31.6378C5.34316 31.5038 5.52485 31.4286 5.71429 31.4286H21.4286C21.618 31.4286 21.7997 31.5038 21.9336 31.6378C22.0676 31.7717 22.1429 31.9534 22.1429 32.1429C22.1429 32.3323 22.0676 32.514 21.9336 32.6479C21.7997 32.7819 21.618 32.8572 21.4286 32.8572Z"
                                                fill="#794028" />
                                        </svg>
                                        Draft Receipt</div>
                                </button>
                            </a>
                            <hr class="my-1">
                            <a class="menu_link justify-content-center" href="#reward" style="padding: 0">
                                <button type="button" class="btn btn-primary button">
                                    <div class="button-flex d-flex flex-row">
                                        <svg width="26" height="35" viewBox="0 0 26 35" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask id="path-1-inside-1_859_2309" fill="white">
                                                <path
                                                    d="M25.2036 2.76582C25.012 2.54152 24.7737 2.36139 24.5052 2.23792C24.2367 2.11445 23.9445 2.05059 23.6488 2.05078H21.8882C21.869 1.87838 21.8479 1.71117 21.8252 1.55094C21.7619 1.12084 21.5456 0.727683 21.2157 0.443034C20.8858 0.158384 20.4642 0.00116724 20.0276 0L5.66369 0C5.22716 0.00118603 4.80557 0.15842 4.47566 0.443082C4.14575 0.727744 3.92945 1.12091 3.86614 1.55101C3.84349 1.71124 3.82248 1.87845 3.80319 2.05078H2.04251C1.74676 2.05084 1.45455 2.11484 1.18608 2.23835C0.917603 2.36187 0.67926 2.54196 0.48752 2.76618C0.295779 2.99041 0.155214 3.25341 0.0755364 3.53702C-0.00414081 3.82063 -0.02103 4.11809 0.0260364 4.40884L0.411839 6.78897C0.740434 8.825 1.65305 10.723 3.03981 12.2546C4.42657 13.7861 6.22834 14.8857 8.22818 15.4212C8.92192 16.1611 9.67909 16.8395 10.4911 17.4485C10.2026 17.6107 9.96744 17.8527 9.81405 18.1451C9.66067 18.4376 9.59562 18.768 9.62677 19.0964C9.65791 19.4249 9.78393 19.7373 9.98957 19.996C10.1952 20.2547 10.4717 20.4485 10.7856 20.5541C10.7079 21.3027 10.5118 22.0344 10.2044 22.722C9.37769 24.5644 7.93766 25.6191 7.08038 26.1133H6.87327C6.55477 26.1136 6.24941 26.2398 6.0242 26.4641C5.79898 26.6883 5.67229 26.9924 5.67193 27.3096V31.582H4.81383C4.49533 31.5824 4.18997 31.7085 3.96475 31.9328C3.73954 32.1571 3.61285 32.4612 3.61249 32.7783V33.8037C3.61285 34.1209 3.73954 34.4249 3.96475 34.6492C4.18997 34.8735 4.49533 34.9996 4.81383 35H20.8775C21.196 34.9996 21.5013 34.8735 21.7266 34.6492C21.9518 34.4249 22.0785 34.1209 22.0788 33.8037V32.7783C22.0785 32.4612 21.9518 32.1571 21.7266 31.9328C21.5013 31.7085 21.196 31.5824 20.8775 31.582H20.0194V27.3096C20.019 26.9924 19.8923 26.6883 19.6671 26.4641C19.4419 26.2398 19.1365 26.1136 18.818 26.1133H18.6109C17.7536 25.619 16.3136 24.5644 15.4869 22.722C15.1795 22.0344 14.9834 21.3027 14.9057 20.5541C15.2196 20.4485 15.4961 20.2547 15.7017 19.996C15.9074 19.7373 16.0334 19.4249 16.0646 19.0964C16.0957 18.768 16.0307 18.4376 15.8773 18.1451C15.7239 17.8527 15.4887 17.6107 15.2002 17.4485C16.0122 16.8395 16.7694 16.1611 17.4631 15.4212C19.463 14.8858 21.2647 13.7861 22.6515 12.2546C24.0382 10.7231 24.9509 8.82511 25.2795 6.78911L25.6653 4.4087C25.7125 4.1179 25.6957 3.82034 25.616 3.53665C25.5363 3.25297 25.3955 2.98994 25.2036 2.76582ZM1.42845 6.62573L1.04265 4.2456C1.01933 4.10142 1.02771 3.95393 1.06723 3.8133C1.10674 3.67267 1.17644 3.54225 1.2715 3.43106C1.36657 3.31987 1.48474 3.23056 1.61786 3.16928C1.75097 3.10801 1.89586 3.07624 2.04251 3.07617H3.71985C3.57756 5.71562 4.0616 8.35134 5.13277 10.7698C5.6197 11.8649 6.22451 12.9042 6.93657 13.8694C5.49304 13.2034 4.23584 12.1946 3.27543 10.9315C2.31503 9.6685 1.68079 8.18994 1.42845 6.62573ZM20.8775 32.6074C20.923 32.6075 20.9666 32.6255 20.9988 32.6575C21.031 32.6896 21.0491 32.733 21.0491 32.7783V33.8037C21.0491 33.849 21.031 33.8925 20.9988 33.9245C20.9666 33.9565 20.923 33.9746 20.8775 33.9746H4.81383C4.76833 33.9746 4.72471 33.9565 4.69254 33.9245C4.66036 33.8925 4.64226 33.849 4.64221 33.8037V32.7783C4.64226 32.733 4.66036 32.6896 4.69254 32.6575C4.72471 32.6255 4.76833 32.6075 4.81383 32.6074H20.8775ZM18.4727 27.1387L18.4743 27.1387L18.4758 27.1387H18.818C18.8635 27.1387 18.9072 27.1567 18.9393 27.1888C18.9715 27.2208 18.9896 27.2643 18.9897 27.3096V31.582H6.70165V27.3096C6.70171 27.2643 6.71981 27.2208 6.75198 27.1888C6.78415 27.1567 6.82777 27.1387 6.87327 27.1387H7.21548L7.21699 27.1387L7.21857 27.1387H18.4727ZM16.8256 26.1133H8.86572C9.84248 25.3077 10.6219 24.291 11.1446 23.1403C11.499 22.349 11.7245 21.5065 11.8126 20.6445H13.8787C13.9668 21.5065 14.1923 22.349 14.5467 23.1403C15.0694 24.291 15.8488 25.3077 16.8256 26.1133ZM14.3559 19.6191H11.3354C11.1533 19.6191 10.9787 19.5471 10.85 19.4189C10.7212 19.2907 10.6489 19.1168 10.6489 18.9355C10.6489 18.7542 10.7212 18.5804 10.85 18.4522C10.9787 18.324 11.1533 18.252 11.3354 18.252H11.7919C11.808 18.2526 11.824 18.2527 11.84 18.252H13.8601C13.8654 18.2521 13.8706 18.2529 13.8759 18.2529C13.8805 18.2529 13.8852 18.2521 13.8899 18.252H14.3559C14.538 18.252 14.7126 18.324 14.8413 18.4522C14.9701 18.5804 15.0424 18.7542 15.0424 18.9355C15.0424 19.1168 14.9701 19.2907 14.8413 19.4189C14.7126 19.5471 14.538 19.6191 14.3559 19.6191ZM13.7253 17.2266H11.966C10.4196 16.2251 7.71943 14.0578 6.07435 10.355C4.56031 6.94682 4.59223 3.76414 4.8857 1.69436C4.9134 1.50855 5.00716 1.33881 5.14993 1.21604C5.2927 1.09327 5.47499 1.02562 5.66362 1.02539H20.0276C20.2163 1.0256 20.3985 1.09325 20.5413 1.21603C20.6841 1.33881 20.7778 1.50855 20.8055 1.69436C21.099 3.76414 21.1309 6.94682 19.6169 10.355C17.9718 14.0578 15.2716 16.225 13.7252 17.2266H13.7253ZM24.6487 4.24539L24.2629 6.62587C24.0106 8.19006 23.3763 9.66859 22.4159 10.9316C21.4555 12.1946 20.1983 13.2034 18.7548 13.8694C19.4668 12.9042 20.0716 11.8649 20.5585 10.7698C21.6297 8.35134 22.1138 5.71562 21.9715 3.07617H23.6488C23.7954 3.07623 23.9403 3.10798 24.0734 3.16923C24.2066 3.23048 24.3247 3.31978 24.4198 3.43095C24.5149 3.54212 24.5846 3.67251 24.6241 3.81313C24.6636 3.95374 24.672 4.10123 24.6487 4.24539Z" />
                                            </mask>
                                            <path
                                                d="M25.2036 2.76582C25.012 2.54152 24.7737 2.36139 24.5052 2.23792C24.2367 2.11445 23.9445 2.05059 23.6488 2.05078H21.8882C21.869 1.87838 21.8479 1.71117 21.8252 1.55094C21.7619 1.12084 21.5456 0.727683 21.2157 0.443034C20.8858 0.158384 20.4642 0.00116724 20.0276 0L5.66369 0C5.22716 0.00118603 4.80557 0.15842 4.47566 0.443082C4.14575 0.727744 3.92945 1.12091 3.86614 1.55101C3.84349 1.71124 3.82248 1.87845 3.80319 2.05078H2.04251C1.74676 2.05084 1.45455 2.11484 1.18608 2.23835C0.917603 2.36187 0.67926 2.54196 0.48752 2.76618C0.295779 2.99041 0.155214 3.25341 0.0755364 3.53702C-0.00414081 3.82063 -0.02103 4.11809 0.0260364 4.40884L0.411839 6.78897C0.740434 8.825 1.65305 10.723 3.03981 12.2546C4.42657 13.7861 6.22834 14.8857 8.22818 15.4212C8.92192 16.1611 9.67909 16.8395 10.4911 17.4485C10.2026 17.6107 9.96744 17.8527 9.81405 18.1451C9.66067 18.4376 9.59562 18.768 9.62677 19.0964C9.65791 19.4249 9.78393 19.7373 9.98957 19.996C10.1952 20.2547 10.4717 20.4485 10.7856 20.5541C10.7079 21.3027 10.5118 22.0344 10.2044 22.722C9.37769 24.5644 7.93766 25.6191 7.08038 26.1133H6.87327C6.55477 26.1136 6.24941 26.2398 6.0242 26.4641C5.79898 26.6883 5.67229 26.9924 5.67193 27.3096V31.582H4.81383C4.49533 31.5824 4.18997 31.7085 3.96475 31.9328C3.73954 32.1571 3.61285 32.4612 3.61249 32.7783V33.8037C3.61285 34.1209 3.73954 34.4249 3.96475 34.6492C4.18997 34.8735 4.49533 34.9996 4.81383 35H20.8775C21.196 34.9996 21.5013 34.8735 21.7266 34.6492C21.9518 34.4249 22.0785 34.1209 22.0788 33.8037V32.7783C22.0785 32.4612 21.9518 32.1571 21.7266 31.9328C21.5013 31.7085 21.196 31.5824 20.8775 31.582H20.0194V27.3096C20.019 26.9924 19.8923 26.6883 19.6671 26.4641C19.4419 26.2398 19.1365 26.1136 18.818 26.1133H18.6109C17.7536 25.619 16.3136 24.5644 15.4869 22.722C15.1795 22.0344 14.9834 21.3027 14.9057 20.5541C15.2196 20.4485 15.4961 20.2547 15.7017 19.996C15.9074 19.7373 16.0334 19.4249 16.0646 19.0964C16.0957 18.768 16.0307 18.4376 15.8773 18.1451C15.7239 17.8527 15.4887 17.6107 15.2002 17.4485C16.0122 16.8395 16.7694 16.1611 17.4631 15.4212C19.463 14.8858 21.2647 13.7861 22.6515 12.2546C24.0382 10.7231 24.9509 8.82511 25.2795 6.78911L25.6653 4.4087C25.7125 4.1179 25.6957 3.82034 25.616 3.53665C25.5363 3.25297 25.3955 2.98994 25.2036 2.76582ZM1.42845 6.62573L1.04265 4.2456C1.01933 4.10142 1.02771 3.95393 1.06723 3.8133C1.10674 3.67267 1.17644 3.54225 1.2715 3.43106C1.36657 3.31987 1.48474 3.23056 1.61786 3.16928C1.75097 3.10801 1.89586 3.07624 2.04251 3.07617H3.71985C3.57756 5.71562 4.0616 8.35134 5.13277 10.7698C5.6197 11.8649 6.22451 12.9042 6.93657 13.8694C5.49304 13.2034 4.23584 12.1946 3.27543 10.9315C2.31503 9.6685 1.68079 8.18994 1.42845 6.62573ZM20.8775 32.6074C20.923 32.6075 20.9666 32.6255 20.9988 32.6575C21.031 32.6896 21.0491 32.733 21.0491 32.7783V33.8037C21.0491 33.849 21.031 33.8925 20.9988 33.9245C20.9666 33.9565 20.923 33.9746 20.8775 33.9746H4.81383C4.76833 33.9746 4.72471 33.9565 4.69254 33.9245C4.66036 33.8925 4.64226 33.849 4.64221 33.8037V32.7783C4.64226 32.733 4.66036 32.6896 4.69254 32.6575C4.72471 32.6255 4.76833 32.6075 4.81383 32.6074H20.8775ZM18.4727 27.1387L18.4743 27.1387L18.4758 27.1387H18.818C18.8635 27.1387 18.9072 27.1567 18.9393 27.1888C18.9715 27.2208 18.9896 27.2643 18.9897 27.3096V31.582H6.70165V27.3096C6.70171 27.2643 6.71981 27.2208 6.75198 27.1888C6.78415 27.1567 6.82777 27.1387 6.87327 27.1387H7.21548L7.21699 27.1387L7.21857 27.1387H18.4727ZM16.8256 26.1133H8.86572C9.84248 25.3077 10.6219 24.291 11.1446 23.1403C11.499 22.349 11.7245 21.5065 11.8126 20.6445H13.8787C13.9668 21.5065 14.1923 22.349 14.5467 23.1403C15.0694 24.291 15.8488 25.3077 16.8256 26.1133ZM14.3559 19.6191H11.3354C11.1533 19.6191 10.9787 19.5471 10.85 19.4189C10.7212 19.2907 10.6489 19.1168 10.6489 18.9355C10.6489 18.7542 10.7212 18.5804 10.85 18.4522C10.9787 18.324 11.1533 18.252 11.3354 18.252H11.7919C11.808 18.2526 11.824 18.2527 11.84 18.252H13.8601C13.8654 18.2521 13.8706 18.2529 13.8759 18.2529C13.8805 18.2529 13.8852 18.2521 13.8899 18.252H14.3559C14.538 18.252 14.7126 18.324 14.8413 18.4522C14.9701 18.5804 15.0424 18.7542 15.0424 18.9355C15.0424 19.1168 14.9701 19.2907 14.8413 19.4189C14.7126 19.5471 14.538 19.6191 14.3559 19.6191ZM13.7253 17.2266H11.966C10.4196 16.2251 7.71943 14.0578 6.07435 10.355C4.56031 6.94682 4.59223 3.76414 4.8857 1.69436C4.9134 1.50855 5.00716 1.33881 5.14993 1.21604C5.2927 1.09327 5.47499 1.02562 5.66362 1.02539H20.0276C20.2163 1.0256 20.3985 1.09325 20.5413 1.21603C20.6841 1.33881 20.7778 1.50855 20.8055 1.69436C21.099 3.76414 21.1309 6.94682 19.6169 10.355C17.9718 14.0578 15.2716 16.225 13.7252 17.2266H13.7253ZM24.6487 4.24539L24.2629 6.62587C24.0106 8.19006 23.3763 9.66859 22.4159 10.9316C21.4555 12.1946 20.1983 13.2034 18.7548 13.8694C19.4668 12.9042 20.0716 11.8649 20.5585 10.7698C21.6297 8.35134 22.1138 5.71562 21.9715 3.07617H23.6488C23.7954 3.07623 23.9403 3.10798 24.0734 3.16923C24.2066 3.23048 24.3247 3.31978 24.4198 3.43095C24.5149 3.54212 24.5846 3.67251 24.6241 3.81313C24.6636 3.95374 24.672 4.10123 24.6487 4.24539Z"
                                                fill="#D9D9D9" stroke="black" stroke-width="2"
                                                mask="url(#path-1-inside-1_859_2309)" />
                                        </svg>
                                        Reward
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                

                <?php if(session()->has('success')): ?>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary d-none" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">

                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm">
                            <div class="modal-content">
                                <div class="modal-body d-flex flex-column justify-content-center align-items-center">
                                    <?php echo e(session('success')); ?>

                                    <button type="button" class="btn btn-primary bg-primary"
                                        data-bs-dismiss="modal">Oke</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                
                

                
                <div id="profileDetails" class="col-9 content align-items-center justify-content-center">
                    <div class="title">
                        <h3>Profile Details</h3>
                    </div>

                    <div class="card container personalInfo px-4">
                        <div class="row justify-content-center">
                            <div class="col-6 data-changable">
                                <form action="<?php echo e(route('profile.editName')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="bar-name d-flex justify-content-start"
                                        style="font-weight: 700; font-size: 1.2rem;">
                                        Name
                                        <div class="btn-group d-flex justify-content-start">
                                            <button type="button" class="<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                eb
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  button border-0 rounded-3 edit-btn"
                                                style="width: fit-content; background-color: white;">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </button>
                                        </div>
                                    </div>
    
                                    <hr class="my-1" style="width: auto;">
                                    <input type="text" name='name' class="form-control"
                                        value="<?php echo e(Auth::user()->name); ?>" disabled>
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger mb-0 mt-1"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </form>
                            </div>
                            <div class="col-6 ">
                                <div class="bar-name" style="font-weight: 700; font-size: 1.2rem;">Jenis Kelamin</div>
                                <div class="bar-name" style="font-size: 1.2rem;--bs-border-opacity: 0.45;">
                                    <hr class="my-1" style="width: auto;">
                                    <small><?php echo e(Auth::user()->gender); ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6 data-changable">
                                <form action="<?php echo e(route('profile.editEmail')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="bar-email d-flex justify-content-start"
                                        style="font-weight: 700; font-size: 1.2rem;">
                                        Email
                                        <div class="btn-group d-flex justify-content-start">
                                            <button type="button" class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                eb
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  button border-0 rounded-3 edit-btn"
                                                style="width: fit-content; background-color: white;">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </button>
                                        </div>
                                    </div>
    
                                    <hr class="my-1" style="width: auto;">
                                    <input type="email" name='email' class="form-control"
                                        value="<?php echo e(Auth::user()->email); ?>" disabled>
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger mb-0 mt-1"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </form>
                            </div>
                            <div class="col-6 ">
                                <div class="bar-date" style="font-weight: 700; font-size: 1.2rem;">Tanggal Lahir</div>
                                <div class="bar-date" style="font-size: 1.2rem;--bs-border-opacity: 0.45;">
                                    <hr class="my-1" style="width: auto;">
                                    <small><?php echo e(Auth::user()->birth_date); ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <div class="bar-password" style="font-weight: 700; font-size: 1.2rem;">
                                    Password
                                    <button type="button" class="button border-0 rounded-3"
                                        style="width: fit-content; background-color: white;">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>

                                </div>

                                <hr class="my-1" style="width: auto;">
                                <div class="bar-email" style="--bs-border-opacity: 0.45;">
                                    <small><?php echo e(Auth::user()->password); ?></small>
                                </div>
                            </div>
                            <div class="col-6 ">
                                <div class="bar-phonenumber" style="font-weight: 700; font-size: 1.2rem;">Nomor Telepon
                                </div>
                                <div class="bar-phonenumber" style="font-size: 1.2rem;--bs-border-opacity: 0.45;">
                                    <hr class="my-1" style="width: auto;">
                                    <small><?php echo e(Auth::user()->phone_number); ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 data-changable">
                                <form action="<?php echo e(route('profile.editAddress')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="bar-name d-flex justify-content-start"
                                        style="font-weight: 700; font-size: 1.2rem;">
                                        Alamat
                                        <div class="btn-group d-flex justify-content-start">
                                            <button type="button" class="<?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                eb
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  button border-0 rounded-3 edit-btn"
                                                style="width: fit-content; background-color: white;">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </button>
                                        </div>
                                    </div>
    
                                    <hr class="my-1" style="width: auto;">
                                    <textarea class="form-control" name="address" id="" rows="3" disabled><?php echo e(Auth::user()->address); ?></textarea>

                                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger mb-0 mt-1"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                

                
                <div id="draftReceipt" class="col-9 content align-items-center justify-content-center d-none">
                    <div class="title">
                        <h3>Draft Receipt</h3>
                    </div>
                    <div class="row shadow receipt align-items-stretch justify-content-center">
                        <div class="shadow col-1 p-0 align-self-stretch">
                            <button onclick="" type="button" class="btn btn-secondary button editButton"
                                id="editButton">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.5 16.825V23.5C23.5 24.163 23.2366 24.7989 22.7678 25.2678C22.2989 25.7366 21.663 26 21 26H3.5C2.83696 26 2.20107 25.7366 1.73223 25.2678C1.26339 24.7989 1 24.163 1 23.5V6C1 5.33696 1.26339 4.70107 1.73223 4.23223C2.20107 3.76339 2.83696 3.5 3.5 3.5H10.175"
                                        stroke="#794028" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21 1L26 6L13.5 18.5H8.5V13.5L21 1Z"
                                        stroke="#794028" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="col-3 beanImage py-3">
                            <img src="<?php echo e(asset('img/pexels-igor-haritanovich-1695052 1.png')); ?>" alt=""
                                style="width: 100%">
                        </div>
                        <div class="col-5 blendTemplate py-3 d-flex flex-column justify-content-start">

                            <h4>kopi Ajaib</h4>

                            <div class="row">
                                <div class="col">
                                    <small>Base bean</small>
                                </div>
                                <div class="col">
                                    <small>: Arabica 50%</small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <small>Primary Bean</small>
                                </div>
                                <div class="col">
                                    <small>: Robusta 50%</small>
                                </div>
                            </div>

                        </div>
                        <div class="col-1 offset-2 justify-content-center d-flex">
                            <button onclick="" type="button" class="btn removeButton p-0" id="removeButton"><svg
                                    width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.24348 21.7565C8.42676 21.9398 8.6663 22.0312 8.9063 22.0312C9.1463 22.0312 9.38583 21.9398 9.56911 21.7565L15 16.3256L20.431 21.7565C20.6143 21.9398 20.8538 22.0312 21.0938 22.0312C21.3338 22.0312 21.5733 21.9398 21.7566 21.7565C21.9324 21.5807 22.0311 21.3423 22.0311 21.0937C22.0311 20.8451 21.9324 20.6067 21.7566 20.4309L16.3257 15L21.7566 9.56905C21.8462 9.48257 21.9176 9.37912 21.9667 9.26474C22.0158 9.15036 22.0417 9.02734 22.0428 8.90286C22.0439 8.77838 22.0201 8.65493 21.973 8.53972C21.9259 8.4245 21.8563 8.31983 21.7682 8.2318C21.6802 8.14378 21.5755 8.07417 21.4603 8.02703C21.3451 7.97989 21.2217 7.95617 21.0972 7.95725C20.9727 7.95833 20.8497 7.98419 20.7353 8.03333C20.6209 8.08246 20.5175 8.15388 20.431 8.24342L15 13.6744L9.56911 8.24342C9.48263 8.15388 9.37918 8.08246 9.2648 8.03333C9.15042 7.98419 9.0274 7.95833 8.90292 7.95725C8.77844 7.95617 8.65499 7.97989 8.53978 8.02703C8.42456 8.07417 8.31989 8.14378 8.23186 8.2318C8.14384 8.31983 8.07423 8.4245 8.02709 8.53972C7.97995 8.65493 7.95623 8.77838 7.95731 8.90286C7.95839 9.02734 7.98425 9.15036 8.03339 9.26474C8.08252 9.37912 8.15394 9.48257 8.24348 9.56905L13.6744 15L8.24348 20.4309C8.06773 20.6067 7.969 20.8451 7.969 21.0937C7.969 21.3423 8.06773 21.5807 8.24348 21.7565Z"
                                        fill="#794028" />
                                    <path
                                        d="M15 30C19.0064 30 22.7733 28.4395 25.6059 25.6064C28.4395 22.7733 30 19.0064 30 15C30 10.9936 28.4395 7.22672 25.6059 4.39406C22.7733 1.56047 19.0064 0 15 0C10.9936 0 7.22672 1.56047 4.39406 4.39359C1.56047 7.22672 0 10.9936 0 15C0 19.0064 1.56047 22.7733 4.39406 25.6059C7.22672 28.4395 10.9936 30 15 30ZM5.71969 5.71969C8.19844 3.24047 11.4942 1.875 15 1.875C18.5058 1.875 21.8016 3.24047 24.2803 5.71969C26.7595 8.19844 28.125 11.4942 28.125 15C28.125 18.5058 26.7595 21.8016 24.2803 24.2803C21.8016 26.7595 18.5058 28.125 15 28.125C11.4942 28.125 8.19844 26.7595 5.71969 24.2803C3.24047 21.8016 1.875 18.5058 1.875 15C1.875 11.4942 3.24047 8.19844 5.71969 5.71969Z"
                                        fill="#794028" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                

                
                <div id="reward" class="col-9 content align-items-center justify-content-center d-none">
                    <div class="title">
                        <h3>Reward</h3>
                    </div>
                    <div class="card reward-content">
                        <div class="card justify-content-center align-items-center border-0"
                            style="padding-top: 1rem;padding-bottom: 1rem;">
                            <div class="row">
                                <img src="<?php echo e(asset('img/Starbucks.png')); ?>" class="rounded-5"
                                    style="width: 7rem; height: auto;">
                            </div>
                            <h4 style="font-weight: 700; padding-top: 1.3rem;">
                                Coffee Lover!
                            </h4>
                            <div class="col" style="width: 20rem;">
                                <small style="font-weight: 700;">
                                    13 transaction more......
                                </small>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 25%; background-color: #a17453">25%</div>
                                </div>
                            </div>
                            <div class="row" style="width: 40rem;">
                                <small>
                                    Your Reward as
                                </small><small style="font-weight: 700;">
                                    Coffee Lovers
                                </small>
                                <div class="row" style="padding-top: 1.5rem;">
                                    <div class="col border rounded position-relative ps-0 d-flex" style="margin: 0.5rem;">
                                        <div class="position-relative z-1 " style="overflow: hidden;">
                                            <img src="<?php echo e(asset('img/Group 384.png')); ?>" class="position-absolute z-0"
                                                style="height: 120%;" alt="...">
                                            <div class="infovoucher" style="padding-left: 5rem;">
                                                <h3 class="font-weight-bold"
                                                    style="justify-content: center; font-size: 1.5rem;">
                                                    15% OFF
                                                </h3>
                                                <h6 class="font-weight-bold" style="font-size: 0.7rem;">
                                                    FOR ORDERS OVER RP 100.000!
                                                </h6>
                                                <div class="row" style="font-size: 0.7rem;  margin-bottom: 0.5rem;">
                                                    <div class="col d-flex align-items-center"
                                                        style="padding-top: 0.2rem;">
                                                        <img src="<?php echo e(asset('img/Vector.png')); ?>" class="icons"
                                                            alt="..."
                                                            style="height: 0.65rem; padding-right: 0.2rem;">
                                                        <small class="date_expired_voucher">
                                                            7 JUNE 2023
                                                        </small>
                                                    </div>
                                                    <div class="col d-flex">
                                                        <button
                                                            class="btn btn-primary p-1 text-truncate border-1 border d-flex align-items-center"><small
                                                                class="font-weight-bold" style="font-size: small;">Redeem
                                                                Now</small></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                    <div class="col border rounded position-relative ps-0 d-flex" style="margin: 0.5rem;">
                                        <div class="position-relative z-1 "style="overflow: hidden;">
                                            <img src="<?php echo e(asset('img/Group 384.png')); ?>" class="position-absolute z-0"
                                                style="height: 120%; object-fit: cover;" alt="...">
                                            <div class="infovoucher" style="padding-left: 5rem;">
                                                <h3 class="font-weight-bold"
                                                    style="justify-content: center; font-size: 1.5rem;">
                                                    15% OFF
                                                </h3>
                                                <h6 class="font-weight-bold" style="font-size: 0.7rem;">
                                                    FOR ORDERS OVER RP 100.000!
                                                </h6>
                                                <div class="row" style="font-size: 0.7rem; margin-bottom: 0.5rem;">
                                                    <div class="col d-flex align-items-center">
                                                        <img src="<?php echo e(asset('img/Vector.png')); ?>" class="icons"
                                                            alt="..."
                                                            style="height: 0.65rem; padding-right: 0.2rem;">
                                                        <small class="date_expired_voucher">
                                                            7 JUNE 2023
                                                        </small>
                                                    </div>
                                                    <div class="col d-flex ">
                                                        <button
                                                            class="btn btn-primary p-1 text-truncate border-1 border d-flex align-items-center"><small
                                                                class="font-weight-bold" style="font-size: small;">Redeem
                                                                Now</small></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('css/draft-receipt.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/profile.css')); ?>" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="https://kit.fontawesome.com/a72340eb77.js" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/profile.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MoscilaBrew\moscilabrew\resources\views/profile.blade.php ENDPATH**/ ?>