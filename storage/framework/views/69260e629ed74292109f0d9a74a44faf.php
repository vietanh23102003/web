<?php $__env->startSection('content'); ?>
    <body class="landing-page">

    <div class="content-bg-wrap"></div>

    <div class="header-spacer--standard"></div>

    <div class="container">
        <div class="row display-flex">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="landing-content">
                    <h1>Mạng xã hội dành cho mọi người</h1>
                    <p>Dự án mạng xã hội đơn giản! Kết nối mọi người, nhân rộng yêu thương!
                    </p>
                </div>
            </div>

            <div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
                <?php echo $__env->make('partials.forms.registration-login-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampppp\htdocs\copysc\resources\views/landing.blade.php ENDPATH**/ ?>