<!-- Window-popup Update Avatar Photo -->

<div class="modal fade" id="update-avatar-photo" tabindex="-1" role="dialog" aria-labelledby="update-avatar-photo" aria-hidden="true">
	<div class="modal-dialog window-popup update-avatar-photo" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-close-icon')); ?>"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Tải ảnh lên</h6>
			</div>

			<form method="POST" action="<?php echo e(route('update_avatar', ['id' => Auth::id()])); ?>" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<div class="modal-body">
					<a href="#" class="upload-photo-item">
					<svg class="olymp-computer-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-computer-icon')); ?>"></use></svg>

					<h6>Tải ảnh lên</h6>
					<span>Từ máy tính của bạn.</span>
					<input type="file" name="avatar" accept="image/*">
					</a>

					<a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

						<svg class="olymp-photos-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-photos-icon')); ?>"></use></svg>

						<h6>Tải ảnh lên</h6>
						<span>Từ bộ sưu tập</span>
					</a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					<button type="submit" class="btn btn-primary">Tải lên</button>
				</div>
			</form>
		</div>
	</div>
</div>


<!-- ... end Window-popup Update Header Photo --><?php /**PATH C:\xampppp\htdocs\copysc\resources\views/partials/windows-popup/update-avatar-photo.blade.php ENDPATH**/ ?>