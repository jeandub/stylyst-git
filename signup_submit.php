<?php
include('config.php');
// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
if (!$username || !$email || !$password) {
	echo "save_failed";
	return;
}

// Clean variables before performing insert
$clean_username = stripslashes(mysql_real_escape_string($username));
$clean_email = stripslashes(mysql_real_escape_string($email));
$clean_password = stripslashes(mysql_real_escape_string($password));

// Perform insert
$sql = "INSERT INTO user (userName, userEmail, userPassword) VALUES ('$clean_username', '$clean_email', '$clean_password')";
if (mysql_query($sql, $link)) {
	echo "success";
	mysql_close($link);
	return;
} else {
	echo "enregistrement_failed";
	mysql_close($link);
	return;
}

?>