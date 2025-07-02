<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.headers-navigations.right-panel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('partials.headers-navigations.right-panel-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('partials.headers-navigations.header-BP', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('partials.headers-navigations.header-BP-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="header-spacer"></div>

    <?php echo $__env->make('partials.headers-navigations.top-header-profile', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="container">
        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block responsive-flex">
                    <div class="ui-block-title">
                        <div class="h6 title">Bạn bè của <?php echo e($user->first_name); ?>(<span id="no_friends"><?php echo e(count($friends)); ?></span>)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Friends -->

    <div class="container">
        <input id="unfriend" name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
        <div class="row">
        <?php for($i = 0; $i < count($friends); $i++): ?>
            <div id="friend-item" class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6 ">
                <div class="ui-block">

                    <!-- Friend Item -->

                        <div class="friend-item">
                            <div class="friend-header-thumb">
                                <img src="<?php echo e(asset($profile_friends[$i]->header_path)); ?>" alt="friend" width="318" height="122">
                            </div>

                            <div class="friend-item-content">
                                <div class="friend-avatar">
                                    <div class="author-thumb">
                                        <img src="<?php echo e(asset($profile_friends[$i]->avatar_path)); ?>" alt="author" width="92" height="92">
                                    </div>
                                    <div class="author-content">
                                        <a href="#" class="h5 author-name"><?php echo e($friends[$i]->first_name.' '.$friends[$i]->last_name); ?></a>
                                        <div class="country"><?php echo e($profile_friends[$i]->address); ?></div>
                                    </div>
                                </div>
                                <div class="h6" data-swiper-parallax="-100">
                                    <div class="friend-about" data-swiper-parallax="-500">
                                        <span class="title"><?php echo e($profile_friends[$i]->about_me); ?></span>
                                    </div>
                                </div>
                                <div class="control-block-button" data-swiper-parallax="-100">
                                    <a href="javascript:;" class="btn btn-control bg-blue" onclick="unfriend(<?php echo e($friends[$i]->id); ?>)">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')); ?>"></use></svg>
                                    </a>
                                    <a href="javascript:;" class="btn btn-control bg-purple">
                                        <svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-chat---messages-icon')); ?>"></use></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <!-- ... end Friend Item -->
                </div>
            </div>
        <?php endfor; ?>
        </div>
    </div>
    <!-- ... end Friends -->
<?php $__env->stopSection(); ?>

<script>
function unfriend(id){

    var BASE_URL = "<?php echo e(url('/')); ?>";
	$.ajax({
		url: BASE_URL + '/friend/unfriend',
		type: "POST",
		data: {id_friend: id, _token: $('#unfriend').val()},
		success: function (response) {

			if (response.code == 200) {
                $('#friend-item').remove();
                $('#no_friends').text(response.no_friends);
			} else {
                alert("Something went wrong!");
            }
		},
		error: function () {
            alert("Something went wrong!");
		}
	});
}
</script>
<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampppp\htdocs\copysc\resources\views/friend.blade.php ENDPATH**/ ?>