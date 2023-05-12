<?php
$query = $pdo -> prepare("select article.*,user.login from article inner join user on user.id = article.idAuteur order by dateEcrit desc");
$query -> execute();
$articles = $query -> fetchall();
echo $blade -> make("articles") -> with("articles",$articles) -> render();
?>