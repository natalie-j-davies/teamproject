<?php

$db_host = 'localhost';
$db_name = '';
$username = 'root';
$password = '';
   
try {
	$db = new PDO("mysql:dbname=$db_name;port=3306;host=$db_host", $username, $password); 
	//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch(PDOException $ex) {
	echo("Failed to connect to the database.<br>");
	echo($ex->getMessage());
	exit;
}
?>