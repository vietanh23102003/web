

<!-- Top Header-Profile -->

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="top-header">
					<div class="top-header-thumb">
						<?php if(($profile->header_path) != null): ?>
							<img src="<?php echo e(asset($profile->header_path)); ?>" width="1920" height="640" alt="header" >
						<?php else: ?>
							<img src="<?php echo e(asset('images/bg-group.png')); ?>" width="1920" height="640" alt="header" >
						<?php endif; ?>
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<?php if(\Request::route()->getName()=='profile'): ?>
											<a href="<?php echo e(route('profile', ['id'=>Auth::id()])); ?>" class="active">Timeline</a>
										<?php else: ?>
											<a href="<?php echo e(route('profile', ['id'=>Auth::id()])); ?>" >Dòng thời gian</a>
										<?php endif; ?>
									</li>
									<li>
										<?php if(\Request::route()->getName()=='about'): ?>
											<a href="<?php echo e(route('about', ['id' => Auth::id()])); ?>" class="active">Về bạn</a>
										<?php else: ?>
											<a href="<?php echo e(route('about', ['id' => Auth::id()])); ?>">Về bạn</a>
										<?php endif; ?>
									</li>
								</ul>
							</div>
							<div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
								<ul class="profile-menu">
									<li>
										<?php if(\Request::route()->getName()=='friend'): ?>
											<a href="<?php echo e(route('friend', ['id' => Auth::id()])); ?>" class="active">Bạn bè</a>
										<?php else: ?>
											<a href="<?php echo e(route('friend', ['id' => Auth::id()])); ?>">Bạn bè</a>
										<?php endif; ?>
									</li>
									<li>
										<?php if(\Request::route()->getName()=='photo'): ?>
											<a href="<?php echo e(route('photo', ['id' => Auth::id()])); ?>" class="active">Ảnh</a>
										<?php else: ?>
											<a href="<?php echo e(route('photo', ['id' => Auth::id()])); ?>">Ảnh</a>
										<?php endif; ?>
									</li>
								</ul>
							</div>
						</div>
						<div class="control-block-button">
							<div class="btn btn-control bg-primary more">
								<svg class="olymp-settings-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-settings-icon')); ?>"></use></svg>

								<ul class="more-dropdown more-with-triangle triangle-bottom-right">
									<li>
										<a href="#" data-toggle="modal" data-target="#update-header-photo">Cập nhật ảnh bìa</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="top-header-author">
						<a href="" class="author-thumb" data-toggle="modal" data-target="#update-avatar-photo">
							<img src="<?php echo e(asset($profile->avatar_path)); ?>" width="124" height="124" alt="author">
						</a>
						<div class="author-content">
							<a href="<?php echo e(route('profile', ['id'=>Auth::id()])); ?>" class="h4 author-name"><?php echo e($user->first_name." ".$user->last_name); ?></a>
							<div class="country"><?php echo e($profile->address); ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Top Header-Profile --><?php /**PATH C:\xampppp\htdocs\copysc\resources\views/partials/headers-navigations/top-header-profile.blade.php ENDPATH**/ ?>