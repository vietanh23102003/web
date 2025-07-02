<!-- W-Personal-Info -->

<ul class="widget w-personal-info item-block">
	<?php if($profile->about_me&&strlen($profile->about_me)>0): ?>
		<li>
			<span class="title">Về tôi:</span>
			<span class="text"><?php echo e($profile->about_me); ?></span>
		</li>
	<?php endif; ?>
	<?php if($hobbies->hobbie&&strlen($hobbies->hobbie)>0): ?>
		<li>
			<span class="title">Sở thích:</span>
			<span class="text"><?php echo e($hobbies->hobbie); ?></span>
		</li>
	<?php endif; ?>
</ul>

<!-- .. end W-Personal-Info --><?php /**PATH C:\xampppp\htdocs\copysc\resources\views/partials/widgets/w-personal-info.blade.php ENDPATH**/ ?>