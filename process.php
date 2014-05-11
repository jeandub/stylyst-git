<?php
echo "entré dans le php";
include('config.php');
// Retrieve form data
echo $username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
if (!$name || !$age_range || !$sports) {
	echo "save_failed";
	return;
}

// Clean variables before performing insert
$clean_username = mysql_real_escape_string($username);
$clean_age_email = mysql_real_escape_string($email);
$clean_sports_password = mysql_real_escape_string($password);

// Perform insert
$sql = "INSERT INTO user (userName, userEmail, userPassword) VALUES ('{$clean_username}', {$clean_age_email}, '{$clean_sports_password}')";
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