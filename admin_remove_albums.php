<?php
include "database.php";
$albums_id = $_GET["albums_id"];

$db->query( "DELETE FROM albums WHERE id = $albums_id" );

header("Location: admin_albums.php");
?>