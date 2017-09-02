<?php
session_start();
$dir = "images/" . $_SESSION['user_name'] . "/";
move_uploaded_file($_FILES["image"]["tmp_name"], $dir. $_FILES["image"]["name"]);
?>