<?php
if(isset($_POST["entry"])){
    $query = $pdo->prepare("select user.id, user.login, friend.dateAbonnement, friend.idAmi from user left join friend on user.id=friend.idAmi where login like '%".$_POST["entry"]."%' and user.id != ?");
    $query -> execute([$_SESSION["id"]]);
    $accounts = $query->fetchall();

} else {
    $accounts = [];
}

$query = $pdo->prepare("select user.id,user.login,friend.dateAbonnement from friend inner join user on user.id=friend.idAmi where friend.idAbonne = ?");
$query -> execute([$_SESSION["id"]]);
$subs = $query -> fetchall();
echo $blade -> make("subscription",compact("accounts","subs")) -> render();

