<?php

//if the form has been submitted
if (isset($_POST['submitted'])){
	if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	 exit('Please fill both the username and password fields!');
	}
	// connect DB
	require_once ("connectdb.php");
	try {
	//Query DB to find the matching username + password
	//using prepare to prevent SQL injection.
		$stat = $db->prepare('SELECT password FROM users WHERE username = ?');
		$stat->execute(array($_POST['username']));
		
		// fetch the result row and check 
		if ($stat->rowCount()>0){ 
			$row=$stat->fetch();

			if (password_verify($_POST['password'], $row['userPassword'])){ 

			  session_start();
			  $_SESSION["username"]=$_POST['username'];
			  header("Location:index.php");
			  exit();
			
			} else {
			 echo "<p style='color:red'>Error logging in, incorrect password </p>";
			 }
		} else {
		  echo "<p style='color:red'>Error logging in, Username not found </p>";
		}
	}
	catch(PDOException $ex) {
		echo("Failed to connect to the database.<br>");
		echo($ex->getMessage());
		exit;
	}
	$username=$_SESSION['username'];
	echo "<h2> Welcome ".$_SESSION['username']."! </h2>";
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <title>Home Page</title>
</head>
<body>
    <!--navigation bar-->
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="products.php">Products</a>
  <a href="signup.php">Sign Up</a>
  <a href="about.php">About Us</a>
  <a href="contact.php">Contact</a>
</div>
<!--log in and clear button--> 
<form action="index.php" method="post">
<div id="index-login">
	<label>User Name </label>
	<input type="text" name="username" size="15" maxlength="25" />
	<label>Password </label>
	<input type="password" name="password" size="15" maxlength="25" />
	<input type="submit" value="Login" class="button"/>
	<input type="reset" value="clear" class="button"/>
	<input type="hidden" name="submitted" value="TRUE" />
	</form>
<p>checking and testing.</p>

<p>testing for test</p>
</body>
</html>
