<?php
if(isset($_SESSION["id"])){
    header("Location:index.php?action=articles");
} else {
    header("Location:index.php?action=login");
}

?>
