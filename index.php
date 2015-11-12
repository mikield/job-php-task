<?php
include 'vendor/autoload.php';
$db = include "DB.php";

$albums = $db->query("SELECT * FROM albums");
if(!empty($albums)){
	foreach($albums as $key => $album) {
		echo "Galeria #".($key+1)."<br>";
		echo $album['title']."<br>";
		echo "<a href='".$album['link']."'>Link</a><br><br>";
	}
}