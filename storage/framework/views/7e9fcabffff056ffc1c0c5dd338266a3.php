

<?php $__env->startSection('content'); ?>
<div class="container-fluid mt-4">
    <h2>Trang Quản Trị</h2>
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" onclick="showSection('users')">Quản lý người dùng</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showSection('posts')">Quản lý bài viết</a>
                <a href="#" class="list-group-item list-group-item-action" onclick="showSection('comments')">Quản lý bình luận</a>
            </div>
        </div>

        <!-- Nội dung -->
        <div class="col-md-10">
            <!-- Người dùng -->
            <div id="section-users" class="admin-section">
                <h4>👤 Quản lý người dùng</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Họ</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Năm sinh</th>
                            <th>Xoá</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(!$user->is_admin): ?>
                            <tr>
                                <td><?php echo e($user->last_name); ?></td>
                                <td><?php echo e($user->first_name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->profile->birth_date ?? 'N/A'); ?></td>
                                <td>
                                    <form method="POST" action="<?php echo e(url('/admin/delete-user/'.$user->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xoá người dùng này?')">Xoá</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>

            <!-- Bài viết -->
            <div id="section-posts" class="admin-section d-none">
                <h4>📝 Quản lý bài viết</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Người đăng</th>
                            <th>Nội dung</th>
                            <th>Ảnh</th>
                            <th>Thời gian</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($post->user->first_name ?? 'N/A'); ?></td>
                            <td><?php echo e($post->content); ?></td>
                            <td>
                                <?php $__currentLoopData = $post->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <img src="<?php echo e(asset('uploads/' . $media->link)); ?>" width="80">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td><?php echo e($post->created_at); ?></td>
                            <td>
                                <form method="POST" action="<?php echo e(url('/admin/delete-post/'.$post->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <!-- Bình luận -->
            <div id="section-comments" class="admin-section d-none">
                <h4>💬 Quản lý bình luận</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Người bình luận</th>
                            <th>Nội dung</th>
                            <th>Thời gian</th>
                            <th>Xoá</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($comment->user->first_name ?? 'N/A'); ?></td>
                            <td><?php echo e($comment->content); ?></td>
                            <td><?php echo e($comment->created_at); ?></td>
                            <td>
                                <form method="POST" action="<?php echo e(url('/admin/delete-comment/'.$comment->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Xác nhận xoá bình luận?')">Xoá</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
function showSection(section) {
    document.querySelectorAll('.admin-section').forEach(div => {
        div.classList.add('d-none');
    });
    document.querySelectorAll('.list-group-item').forEach(tab => {
        tab.classList.remove('active');
    });
    document.getElementById('section-' + section).classList.remove('d-none');
    event.target.classList.add('active');
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampppp\htdocs\copysc\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>