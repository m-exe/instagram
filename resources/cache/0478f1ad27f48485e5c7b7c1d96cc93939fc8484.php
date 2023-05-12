<?php $__env->startSection("css"); ?>
    <link rel="stylesheet" href="public/css/subscription.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection("topMenu"); ?>
    <form method="post" action="index.php?action=subscription">
        <input type="text" name="entry" placeholder="Votre recherche" required>
        <button type="submit"><i class='bx bx-search'></i></button>
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
    <?php if(!empty($accounts)): ?>
        <div class="users">
            <h2>Ma recherche</h2>

            <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="account">
                    <div>
                        <h3><?php echo e($account["login"]); ?></h3>
                        <?php if(isset($account["dateAbonnement"])): ?>
                            <span>depuis le <?php echo e($account["dateAbonnement"]); ?></span>
                        <?php endif; ?>
                    </div>
                    <?php if(isset($account["dateAbonnement"])): ?>
                        <a href="index.php?action=delFriend&id=<?php echo e($account['id']); ?>">se désabonner</a>
                    <?php else: ?>
                        <a href="index.php?action=addFriend&id=<?php echo e($account['id']); ?>">s'abonner</a>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    <?php endif; ?>
    <?php if(!empty($subs)): ?>
        <div class="users">
            <h2>Mes abonnements</h2>
            <?php $__currentLoopData = $subs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="account">
                    <div>
                        <h3><?php echo e($sub["login"]); ?></h3>
                        <span>depuis le <?php echo e($sub["dateAbonnement"]); ?></span></div>
                    <a href="index.php?action=delFriend&id=<?php echo e($sub['id']); ?>">se désabonner</a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>