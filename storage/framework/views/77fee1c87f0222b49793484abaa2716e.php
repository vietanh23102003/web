<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="csrfToken" content="<?php echo e(csrf_token()); ?>" >


    <title><?php echo e(config('app.name', 'Social Network')); ?></title>

    <script src="<?php echo e(asset('js/webfontloader.min.js')); ?>"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>

    <link rel="stylesheet" href="<?php echo e(asset('Bootstrap/dist/css/bootstrap-reboot.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Bootstrap/dist/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Bootstrap/dist/css/bootstrap-grid.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/fonts.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- JS Scripts -->
    <script src="<?php echo e(asset('js/jquery-3.2.1.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.appear.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.mousewheel.js')); ?>"></script>
    <script src="<?php echo e(asset('js/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.matchHeight.js')); ?>"></script>
    <script src="<?php echo e(asset('js/svgxuse.js')); ?>"></script>
    <script src="<?php echo e(asset('js/imagesloaded.pkgd.js')); ?>"></script>
    <script src="<?php echo e(asset('js/Headroom.js')); ?>"></script>
    <script src="<?php echo e(asset('js/velocity.js')); ?>"></script>
    <script src="<?php echo e(asset('js/ScrollMagic.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.waypoints.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.countTo.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/material.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-select.js')); ?>"></script>
    <script src="<?php echo e(asset('js/smooth-scroll.js')); ?>"></script>
    <script src="<?php echo e(asset('js/selectize.js')); ?>"></script>
    <script src="<?php echo e(asset('js/swiper.jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('js/moment.js')); ?>"></script>
    <script src="<?php echo e(asset('js/daterangepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('js/simplecalendar.js')); ?>"></script>
    <script src="<?php echo e(asset('js/fullcalendar.js')); ?>"></script>
    <script src="<?php echo e(asset('js/isotope.pkgd.js')); ?>"></script>
    <script src="<?php echo e(asset('js/ajax-pagination.js')); ?>"></script>
    <script src="<?php echo e(asset('js/Chart.js')); ?>"></script>
    <script src="<?php echo e(asset('js/chartjs-plugin-deferred.js')); ?>"></script>
    <script src="<?php echo e(asset('js/circle-progress.js')); ?>"></script>
    <script src="<?php echo e(asset('js/loader.js')); ?>"></script>
    <script src="<?php echo e(asset('js/run-chart.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.magnific-popup.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.gifplayer.js')); ?>"></script>
    <script src="<?php echo e(asset('js/mediaelement-and-player.js')); ?>"></script>
    <script src="<?php echo e(asset('js/mediaelement-playlist-plugin.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/uploadPreview.js')); ?>"></script>
    <script src="<?php echo e(asset('js/like.js')); ?>"></script>

    <script src="<?php echo e(asset('js/base-init.js')); ?>"></script>
    <script defer src="<?php echo e(asset('fonts/fontawesome-all.js')); ?>"></script>

    <script src="<?php echo e(asset('Bootstrap/dist/js/bootstrap.bundle.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampppp\htdocs\copysc\resources\views/layouts/master.blade.php ENDPATH**/ ?>