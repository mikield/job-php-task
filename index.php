<form action="/task/" method="GET" name="sortForm">
<label for="sort">Sort by:</label>
<select name="sort" onchange="sortForm.submit();">
	<option>Please select a sort type</option>
	<option value="id">ID</option>
	<option value="month">Month</option>
</select>
</form>
<br>
<br>
<br>
<?php
include 'vendor/autoload.php';
$db = include "DB.php";

$avaibleSorts = [
	'month', 'id'
];

$sort = isset($_GET['sort']) ? $_GET['sort'] : null;
if(!empty($sort)){
	if(in_array($sort, $avaibleSorts)){
		$albums = $db->query("SELECT * FROM albums ORDER BY ".$sort);
	}
}else{
	$albums = $db->query("SELECT * FROM albums");
}
if (!empty($albums)) {
    foreach ($albums as $key => $album) {
        echo "Galeria #" . ($key + 1) . "<br>";
        echo $album['title'] . "<br>";
        echo "<a href='" . $album['link'] . "'>Link</a><br><br>";
    }
}
