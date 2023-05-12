<?php
if(isset($_GET["id"])){
    $query = $pdo -> prepare("delete from friend where idAbonne=? and idAmi=?");
    $query -> execute([$_SESSION["id"],$_GET["id"]]);
}
header("Location: index.php?action=subscription");

