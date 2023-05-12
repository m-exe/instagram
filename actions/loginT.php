<?php
if(isset($_POST["email"]) and isset($_POST["password"])){
    $query = $pdo -> prepare("SELECT * FROM user WHERE email=? AND mdp = SHA1(?)");
    $query -> execute([$_POST["email"],$_POST["password"]]);
    $line = $query->fetch();
    if($line != false){
        $_SESSION["id"] = $line["id"];
        $_SESSION["login"] = $line["login"];
        $_SESSION["avatar"] = $line["avatar"];
    }
}
header("Location: index.php");
?>