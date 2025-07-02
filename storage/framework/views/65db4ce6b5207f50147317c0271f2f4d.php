<!-- <body> -->
<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('partials.headers-navigations.right-panel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

	<?php echo $__env->make('partials.headers-navigations.right-panel-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

	<?php echo $__env->make('partials.headers-navigations.header-BP', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

	<?php echo $__env->make('partials.headers-navigations.header-BP-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

	<div class="header-spacer"></div>

	<?php echo $__env->make('partials.headers-navigations.top-header-profile', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


	<div class="container">
		<div class="row">

			<!-- Main Content -->
			<main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
				<div class="ui-block">
					<?php echo $__env->make('partials.forms.news-feed-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
				</div>
				<div id="newsfeed-items-grid">
					<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($post->has_medias===0): ?>
							<div class="ui-block">
							<?php echo $__env->make('partials.posts.posts6-BP', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
							<?php echo $__env->make('partials.comments.comment-list2',['comments' => $post->comment, 'post_id' => $post->id], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
							<!-- <a href="#" class="more-comments">View more comments <span>+</span></a> -->
								<?php echo $__env->make('partials.forms.comment-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
							</div>
						<?php else: ?>
							<div class="ui-block">
							<?php echo $__env->make('partials.posts.posts7-BP', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
							<?php echo $__env->make('partials.comments.comment-list2',['comments' => $post->comment, 'post_id' => $post->id], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
							<!-- <a href="#" class="more-comments">View more comments <span>+</span></a> -->
								<?php echo $__env->make('partials.forms.comment-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
							</div>
						<?php endif; ?>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg></a>
			</main>

			<!-- ... end Main Content -->


			<!-- Left Sidebar -->

			<div class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-12">

				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Thông tin</h6>
					</div>
					<div class="ui-block-content">

						<?php echo $__env->make('partials.widgets.w-personal-info', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

					</div>
				</div>

				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Last Photos</h6>
					</div>
					<div class="ui-block-content">

						<?php echo $__env->make('partials.widgets.w-last-photo', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

					</div>
				</div>

			</div>

			<!-- ... end Left Sidebar -->


			<!-- Right Sidebar -->

			<aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Gợi ý kết bạn</h6>
						<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg></a>
					</div>
				</div>

				<div class="ui-block">

					<div class="ui-block-title">
						<h6 class="title">Hoạt động</h6>
						<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg></a>
					</div>

				</div>


				<div class="ui-block">
				</div>

			</aside>

			<!-- ... end Right Sidebar -->

		</div>
	</div>

	<?php echo $__env->make('partials.windows-popup.update-header-photo', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	<?php echo $__env->make('partials.windows-popup.update-avatar-photo', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

	<?php echo $__env->make('partials.windows-popup.choose-from-my-photo', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

	<?php echo $__env->make('partials.windows-popup.playlist-popup', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

	<?php echo $__env->make('partials.back-to-top', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

	<?php echo $__env->make('partials.windows-popup.window-chat-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampppp\htdocs\copysc\resources\views/profile.blade.php ENDPATH**/ ?>