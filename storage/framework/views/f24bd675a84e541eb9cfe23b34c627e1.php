

<!-- Fixed Sidebar Right -->

<div class="fixed-sidebar right">
	<div class="fixed-sidebar-right sidebar--small" id="sidebar-right">
		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="chat-users">
				<?php $__currentLoopData = $listUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="inline-items js-chat-open" user-id="<?php echo e($user->id); ?>">
						<div class="author-thumb">
						<?php if(($user->profile->avatar_path ?? 'img/default-avatar.png') != null): ?>
							<img alt="author" src="<?php echo e(asset($user->profile->avatar_path ?? 'img/default-avatar.png')); ?>" class="avatar">
						<?php else: ?>
							<img alt="author" src="<?php echo e(asset('images/avatar67-sm.jpg')); ?>" class="avatar">
						<?php endif; ?>
						</div>
					</li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
		<a href="#" class="olympus-chat inline-items js-sidebar-open">
			<svg class="olymp-menu-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-menu-icon')); ?>"></use></svg>
		</a>
	</div>
	<div class="fixed-sidebar-right sidebar--large" id="sidebar-right-1">
		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<div class="ui-block-title ui-block-title-small">
				<p class="title">Danh sách người dùng</p>
			</div>
			<ul class="chat-users">
				<?php $__currentLoopData = $listUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="inline-items js-chat-open" user-id="<?php echo e($user->id); ?>">
						<div class="author-thumb">
							<?php if(($user->profile->avatar_path ?? 'img/default-avatar.png') != null): ?>
								<img alt="author" src="<?php echo e(asset($user->profile->avatar_path ?? 'img/default-avatar.png')); ?>" class="avatar">
							<?php else: ?>
								<img alt="author" src="<?php echo e(asset('images/avatar67-sm.jpg')); ?>" class="avatar">
							<?php endif; ?>
						</div>
						<div class="author-status">
							<a href="#" class="h6 author-name"><?php echo e($user->first_name.' '.$user->last_name); ?></a>
						</div>
					</li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
		<a href="#" class="olympus-chat inline-items js-sidebar-open">
			<h6 class="olympus-chat-title">Nhắn tin</h6>
			<svg class="olymp-close-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-close-icon')); ?>"></use></svg>
		</a>
	</div>
</div>

<!-- ... end Fixed Sidebar Right --><?php /**PATH C:\xampppp\htdocs\copysc\resources\views/partials/headers-navigations/right-panel.blade.php ENDPATH**/ ?>