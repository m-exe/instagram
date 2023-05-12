<?php
if(isset($_POST["login"]) and isset($_POST["email"]) and isset($_POST["password"]) and isset($_POST["password2"])){
    if($_POST["password"] == $_POST["password2"]){
        $query = $pdo->prepare("INSERT INTO user (login,mdp,email) VALUES (?,SHA1(?),?)");
        $query -> execute([$_POST["login"],$_POST["password"],$_POST["email"]]);
        $_SESSION["id"] = $pdo->lastInsertId();
        $_SESSION["login"] = $_POST["login"];
    }
} else {
    echo "error";
}
header("Location: index.php");
?>