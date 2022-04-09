<?php

include "database.php";

$name = $_POST["name"];
$albums_id = $_POST["albums_id"];
if($_FILES["image"]["size"]> 5000000)
{
    header("Location: admin_add_music.php");
}
else
{
    $image_name = "img/music/" . $_FILES["image"]["name"];
    $mp3_name = "mp3/" . $_FILES["mp3"]["name"];
    $db->query("INSERT INTO musics(name,image,album_id,mp3) VALUES ('$name', '$image_name', '$albums_id', '$mp3_name')");

    move_uploaded_file($_FILES["image"]["tmp_name"],$image_name);
    move_uploaded_file($_FILES["mp3"]["tmp_name"],$mp3_name);
    header("Location: admin_musics.php");
}

?>