<?php $__env->startSection("css"); ?>
<link rel="stylesheet" href="public/css/articles.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="article">
    <span><?php echo e($article['login']); ?></span><img src="<?php echo e($article['img_url']); ?>" alt="">
    <h2><?php echo e($article['titre']); ?></h2>
    <div>
        <h3><?php echo e($article['tags']); ?></h3>
        <a href=""><i class='bx bx-message-rounded-dots'></i></a><a href=""><i class='bx bx-heart' ></i></a></div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>