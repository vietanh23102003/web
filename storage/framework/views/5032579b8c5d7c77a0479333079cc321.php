<?php use Carbon\Carbon;?>
<!-- Comments -->
<?php if(!empty($comments)): ?>
<ul class="comments-list" id="comment-<?php echo e($post_id); ?>">
	<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<li class="comment-item">
		<div class="post__author author vcard inline-items">
			<img src="/<?php echo e($comment->user->profile->avatar_path); ?>" alt="author">

			<div class="author-date">
				<a class="h6 post__author-name fn" href="02-ProfilePage.html"><?php echo e($comment->user->last_name); ?> <?php echo e($comment->user->first_name); ?></a>
				<div class="post__date">
					<time class="published" >
						<?php
	                        $date_comment = $comment->created_at;
	                        $now = Carbon::now('Asia/Ho_Chi_Minh');
	                        $result = $date_comment->diffForHumans($now);
	                        echo $result;
	                    ?>
					</time>
				</div>
			</div>



		</div>

		<p><?php echo e($comment->content); ?></p>

	</li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>

<!-- ... end Comments -->
<?php /**PATH C:\xampppp\htdocs\copysc\resources\views/partials/comments/comment-list2.blade.php ENDPATH**/ ?>