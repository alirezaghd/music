<?php

include "database.php";
$artist_id = $_GET["artist_id"];

$db->query( "DELETE FROM artists WHERE id = $artist_id" );

header("Location: admin_artists.php");
?>