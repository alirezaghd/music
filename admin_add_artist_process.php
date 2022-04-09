<?php

include "database.php";

$name = $_POST["name"];
if($_FILES["image"]["size"]> 5000000)
{
    header("Location: admin_add_artist.php");
}
else
{
    $image_name = "img/artists/" . $_FILES["image"]["name"];
    $db->query("INSERT INTO artists(name,image) VALUES ('$name', '$image_name')");
    echo $_FILES["image"]["tmp_name"];
    move_uploaded_file($_FILES["image"]["tmp_name"],$image_name);
    header("Location: admin_artists.php");
}

?>