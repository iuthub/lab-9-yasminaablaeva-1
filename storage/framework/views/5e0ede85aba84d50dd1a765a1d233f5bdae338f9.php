<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <p class="quote">The beautiful Laravel</p>
        </div>
    </div>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <div class="row">
        <p style="font-weight: bold"> <?php $__currentLoopData = $post ->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> - <?php echo e($tag ->name); ?> - <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> </p>
        <div class="col-md-12 text-center">
            <h1 class="post-title"><?php echo e($post->title); ?></h1>
            <p><?php echo e($post->content); ?>!</p>
            <p><a href="<?php echo e(route('blog.post', ['id' => $post->id])); ?>">Read more...</a></p>
        </div>
    </div>
    <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>