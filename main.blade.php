<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/main.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <a href="index.php"><h1>Instagram</h1></a>
            <a href="#"><i class='bx bx-user-plus' ></i></a>
            <a href="#"><i class='bx bx-send' ></i></a>
        </nav>
    </header>
    <section>
    @yield('content')
  </section>
  <footer>
    <nav>
        <a href="#"><i class='bx bx-home'></i></a>
        <a href="#"><i class='bx bx-search' ></i></a>
        <a href="#"><i class='bx bx-user' ></i></a>
        <a href="#"><i class='bx bx-exit'></i></a>
</nav>
  </footer>
</body>
</html>