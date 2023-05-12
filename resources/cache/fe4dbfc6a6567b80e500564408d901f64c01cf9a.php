<?php $__env->startSection('content'); ?>

    <h2><?php echo e($titre); ?></h2>
    Bienvenu sur ce site !

    <a href='index.php?action=page2'>Suivez ce lien</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>