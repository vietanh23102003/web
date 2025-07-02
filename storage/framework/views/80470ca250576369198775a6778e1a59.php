<!-- W-Latest-Photo -->


<ul class="widget w-last-photo">
	<?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li>
			<a href="/uploads/<?php echo e($photo->link); ?>">
				<img src="/uploads/<?php echo e($photo->link); ?>"  alt="photo" width="87px" height="87px">
			</a>
		</li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<!-- .. end W-Latest-Photo --><?php /**PATH C:\xampppp\htdocs\copysc\resources\views/partials/widgets/w-last-photo.blade.php ENDPATH**/ ?>