<?php
// Connection's Parameters
$db_host="localhost";
$db_name="BD_stylyst";
$username="root";
$password="root";
$db_con=mysql_connect($db_host,$username,$password);
$connection_string=mysql_select_db($db_name);
// Connection
$link=mysql_connect($db_host,$username,$password) or die("erreur ouverture base");
mysql_select_db($db_name);
?>