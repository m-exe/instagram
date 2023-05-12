<?php
if(isset($_GET["id"])){
    $query = $pdo -> prepare("insert into friend (idAbonne, idAmi, dateAbonnement) values (?, ?, NOW())");
    $query -> execute([$_SESSION["id"],$_GET["id"]]);

}
header("Location: index.php?action=subscription");

