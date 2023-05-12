<?php $__env->startSection("form"); ?>
<form action="index.php?action=registerT" method="post">
    <input type="email" placeholder="e-mail" name="email" required>
    <input type="text" placeholder="login" name="login" required>
    <input type="password" placeholder="Mot de passe" name="password" required>
    <input type="password" placeholder="Confirmation du mot de passe" name="password2" required>
    <button type="submit">S'enregistrer</button>
</form>
<p>Déjà inscrit ? <a href="index.php?action=login">Connectez-vous</a></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.loginTemplate", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>