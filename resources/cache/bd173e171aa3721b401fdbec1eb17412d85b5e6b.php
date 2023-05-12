<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link href="public/css/normalize.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="public/css/app.css">
    <?php echo $__env->yieldContent("css"); ?>
</head>

<body>

<header>
    <nav>
        <?php $__env->startSection('topMenu'); ?>
      <a href="index.php"><h1>Instagram</h1></a>
      <div>
      <a href="index.php?action=addFriend"><i class='bx bx-user-plus'></i></a>
      <a href="index.php?action=publish"><i class='bx bxs-send' ></i></a>
</div><?php echo $__env->yieldSection(); ?>
    </nav>
  </header>

  <section>
    <?php echo $__env->yieldContent('content'); ?>
  </section>
  <footer>
    <nav>
      <a href="index.php?action=articles"><i class='bx bx-home' ></i></a>
      <a href="index.php?action=search"><i class='bx bx-search' ></i></a>
      <a href="index.php?action=subscription"><i class='bx bx-user' ></i></a>
      <a href="index.php?action=logout"><i class='bx bx-exit' ></i></a>
</nav>
</footer>
</body>
</html>
