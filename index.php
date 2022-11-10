<?php
    define("TITLE", "Sign Up | G-TWENTY");
    include('includes/header.php');
    session_start();
?>
<?php
//if the form has been submitted
if (isset($_POST['login'])){
	if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	 exit('Please fill both the username and password fields!');
	}
	// connect DB
	require_once ("connectdb.php");
	try {
	//Query DB to find the matching username/password
	//using prepare to prevent SQL injection.
		$stat = $db->prepare('SELECT Userpassword FROM users WHERE username = ?');
		$stat->execute(array($_POST['username']));
		
		// fetch the result row and check 
		if ($stat->rowCount()>0){ 
			$row=$stat->fetch();

			if (password_verify($_POST['password'], $row['Userpassword'])){ 

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

}
?>



<?php
    include('includes/footer.php');
?>
