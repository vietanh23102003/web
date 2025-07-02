
<!-- Comment Form  -->

<form class="comment-form inline-items" action="#" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

	<div class="post__author author vcard inline-items">
		<img src="<?php echo e(asset($profile->avatar_path)); ?>" alt="author">

		<div class="form-group with-icon-right ">
			<textarea class="form-control" id="comment-content<?php echo e($post->id); ?>" placeholder=""></textarea>
		</div>
	</div>

	<button class="btn btn-md-2 btn-primary comment" id="comment-btn<?php echo e($post->id); ?>" data-postid="<?php echo e($post->id); ?>" type="submit">Đăng</button>
</form>

<!-- ... end Comment Form  --><?php /**PATH C:\xampppp\htdocs\copysc\resources\views/partials/forms/comment-form.blade.php ENDPATH**/ ?>