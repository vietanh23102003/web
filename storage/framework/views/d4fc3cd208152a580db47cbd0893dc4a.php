<?php use Carbon\Carbon;?>
<article class="hentry post has-post-thumbnail">

    <div class="post__author author vcard inline-items">
        <img src="/<?php echo e($post->user->profile->avatar_path); ?>" alt="author">

        <div class="author-date">
            <a class="h6 post__author-name fn" href="#"><?php echo e($post->user->last_name); ?> <?php echo e($post->user->first_name); ?></a>
            <div class="post__date">
                <time class="published" >
                    <?php
                        $date_post = $post->created_at;
                        $now = Carbon::now('Asia/Ho_Chi_Minh');
                        $result = $date_post->diffForHumans($now);
                        echo $result;
                    ?>
                </time>
            </div>
        </div>

        <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg>
            <ul class="more-dropdown">
                <li>
                    <a href="<?php echo e(route('get-edit-post',['pid'=>$post->id])); ?>">Chỉnh sửa</a>
                </li>
                <li>
                    <a href="<?php echo e(route('delete-post',['pid'=>$post->id])); ?>">Xóa</a>
                </li>
                <li>
                    <a href="#">Tắt thông báo</a>
                </li>
                <li>
                    <a href="#">Tính năng khác</a>
                </li>
            </ul>
        </div>

    </div>

    <p><?php echo e($post->content); ?></p>

    <?php $__currentLoopData = $post->media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="post-thumb">
        <img src="/uploads/<?php echo e($media->link); ?>" alt="photo">
    </div>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="post-additional-info inline-items">

        <a href="#" class="post-add-icon inline-items">
            <svg class="olymp-heart-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-heart-icon')); ?>"></use></svg>
            <span id="like_numb<?php echo e($post->id); ?>">
                <?php
                    $numb = 0;
                    foreach ($post->likes as $like) {
                        $numb ++;
                    }
                    echo $numb;
                ?>
            </span>
        </a>

        <ul class="friends-harmonic" id="like-item-<?php echo e($post->id); ?>">
            <?php $__currentLoopData = $post->likes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $like): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li id="item<?php echo e($like->user_id); ?>">
                    <a href="#">
                        <img src="/<?php echo e($like->user->profile->avatar_path); ?>" alt="friend">
                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>


        <div class="comments-shared">
            <a href="#" class="post-add-icon inline-items">
                <svg class="olymp-speech-balloon-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-speech-balloon-icon')); ?>"></use></svg>
                <span id="comment_numb<?php echo e($post->id); ?>">
                    <?php
                        $numb = 0;
                        foreach ($post->comment as $comment) {
                            $numb ++;
                        }
                        echo $numb;
                    ?>
                </span>
            </a>





        </div>


    </div>

    <div class="control-block-button post-control-button">


        <a href="#" class="btn btn-control like" id="<?php echo e($post->id); ?>" data-postid="<?php echo e($post->id); ?>"style="
            <?php if(!empty($post->likes)): ?>
                <?php $__currentLoopData = $post->likes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $like): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($like->user_id == $user->id): ?>
                        background-color:#ff5e3e;

                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
               background-color:#9a9fbf;
            <?php endif; ?>
        ">
            <svg class="olymp-like-post-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-like-post-icon')); ?>"></use></svg>
        </a>




    </div>

</article>
<?php /**PATH C:\xampppp\htdocs\copysc\resources\views/partials/posts/posts7-BP.blade.php ENDPATH**/ ?>