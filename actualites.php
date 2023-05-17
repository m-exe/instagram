<?php

if(isset($_SESSION["id"])){
    $query = $pdo -> prepare("select article.*,user.login from article
    inner join user on user.id = article.idAuteur
    where idAuteur in (SELECT friend.idAmi FROM friend where idAbonne=?)
    order by dateEcrit desc");
    $query -> execute([$_SESSION["id"]]);
    $articles = $query -> fetchall();
    echo $blade -> make("actualites",compact("articles")) -> render();

}
