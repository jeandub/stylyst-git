<?php
require_once(ABSPATH."wp-load.php");
echo "cool";
$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
$user_data = array (
			'user_login' => $username,
			'user_pass' => $password,
			'user_email' => $email
			);
echo $user_data['user_login'];
$user_id = wp_insert_user( $user_data );
echo "L'utilisateur ".$user_id." a été créé avec succès";
?>