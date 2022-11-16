<?php

$db_host = 'localhost:3306';
$db_name = 'gtwenty_db';
$username = "root";
$password = "";
   
try {
	$db = new PDO("mysql:host=$db_host;dbname=$db_name", $username, $password); 
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch(PDOException $ex) {
	echo("Failed to connect to the database. connect <br>");
	echo($ex->getMessage());
	exit;
}

?>