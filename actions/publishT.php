<?php
if(isset($_POST["title"]) and isset($_FILES["img"]) and isset($_POST["tags"])){
    $newName = $_SESSION["id"] . "_" . time() . "." . pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
    $newPath = "public/upload/".$newName;
    move_uploaded_file($_FILES["img"]["tmp_name"],$newPath);
    $query = $pdo -> prepare("INSERT INTO article (titre, dateEcrit, img_url, idAuteur, tags) VALUES (?, now(), ?, ?, ?)");
    $query -> execute([$_POST["title"],$newPath,$_SESSION["id"],$_POST["tags"]]);
    header("Location: index.php");
} else {
    echo "error";
}
?>