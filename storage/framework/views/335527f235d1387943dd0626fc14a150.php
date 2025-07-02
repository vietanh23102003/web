<?php $__env->startSection('content'); ?>


    <?php echo $__env->make('partials.headers-navigations.right-panel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('partials.headers-navigations.right-panel-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('partials.headers-navigations.header-BP', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('partials.headers-navigations.header-BP-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="header-spacer header-spacer-small"></div>

    <?php echo $__env->make('partials.headers-navigations.main-header-account', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Your Account Personal Information -->

    <div class="container">
        <div class="row">
            <div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Gợi ý kết bạn</h6>
                        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg></a>
                    </div>

                    <?php echo $__env->make('partials.notification-list.notification-list-friend-requests', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                </div>

            </div>

            <div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12  responsive-display-none">
                <div class="ui-block">

                    <?php echo $__env->make('partials.headers-navigations.your-profile', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                </div>
            </div>
        </div>
    </div>

    <!-- ... end Your Account Personal Information -->
    <?php echo $__env->make('partials.windows-popup.window-chat-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('partials.back-to-top', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampppp\htdocs\copysc\resources\views/friend_requests.blade.php ENDPATH**/ ?>