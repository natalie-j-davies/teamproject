<?php

$db_host = 'localhost:3306';
$db_name = 'u_210209859_gtwentydb';
$username = 'u-210209859';
$password = 'qrygSvEBi5g3hga';
   
try {
	$db = new PDO("mysql:dbname=$db_name;host=$db_host", $username, $password); 
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch(PDOException $ex) {
	echo("Failed to connect to the database. connect <br>");
	echo($ex->getMessage());
	exit;
}
?>
?>