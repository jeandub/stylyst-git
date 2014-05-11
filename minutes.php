<?php
include('config.php');
// Retrieve form data
echo $minutes = $_POST['minutes'];
if (!$minutes) {
	echo "save_failed";
	return;
}

// Perform insert
$sql = "INSERT INTO minutes (minutes) VALUES ('{$minutes}')";
if (@mysql_query($sql, $link)) {
	echo "success";
	@mysql_close($link);
	return;
} else {
	echo "save_failed";
	@mysql_close($link);
	return;
}

?>