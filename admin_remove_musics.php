<?php
include "database.php";
$musics_id = $_GET["musics_id"];

$db->query( "DELETE FROM musics WHERE id = $musics_id" );

header("Location: admin_musics.php");
?>