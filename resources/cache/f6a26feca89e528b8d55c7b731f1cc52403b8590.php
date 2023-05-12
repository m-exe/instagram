<?php $__env->startSection("css"); ?>
<link rel="stylesheet" href="public/css/publish.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div>
<h2>Une inspiration, une humeur ?</h2>
<h3>Partagez...</h3>
</div>
<form action="index.php?action=publishT" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="Titre de la publication" name="title" required>
    <input type="file" accept="image/*" name="img">
    <input type="text" placeholder="Tags" name="tags" pattern="^#[a-z0-9_]+(( )+#[a-z0-9_]+)*( )*$">
    <button type="submit">Publier</button>
</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>