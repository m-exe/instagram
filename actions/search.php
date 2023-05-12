<?php
if(isset($_POST["entry"])){
    $query = $pdo -> prepare("select article.*,user.login from article inner join user on user.id = article.idAuteur WHERE article.tags LIKE '%".$_POST["entry"]."%' order by dateEcrit desc");
    $query -> execute();
    $articles = $query -> fetchall();
    echo $blade -> make("search") -> with("articles",$articles) -> render();
} else {
    echo $blade -> make("search") -> render();
}

