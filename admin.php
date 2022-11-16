<?php
    define("TITLE", "Login | G-TWENTY");
    include('includes/header.php');
?>
<?php
//if the login form is submitted
if (isset($_POST['login'])){
	// connect DB
	require_once ("connectdb.php");
	try {
	//Query DB to find the matching username/password
	//using prepare to prevent SQL injection.
    $stat = $db->prepare('SELECT userPassword FROM adminusers WHERE username = ?');
	  $stat->execute(array($_POST['username']));
		// fetch the result row and check 
		if ($stat->rowCount()>0){ 
			$row=$stat->fetch();

			if (password_verify($_POST['password'], $row['userPassword'])){ 

			  session_start();
				$_SESSION["username"]=$_POST['username'];
				header("Location:account.php");
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
  <!-- Login title -->
  <div class="login-title text-center">
    <h1 class="title">Admin Login</h1>
    <p>Please sign in here to login</p>
  </div>

  <hr>

  <!-- Log in form and button --> 
  <div class="signup-form">
    <form action="admin.php" method="post">
      <div class="login-container">
        <!-- Username Field -->
        <label for="username">Username </label>
        <input type="text" name="username" value="" placeholder="Username" required/><br><br>

        <!-- Password Field -->
        <label for="password">Password </label>
        <input type="password" name="password" value="" placeholder="Password" required/><br><br>
        
        <!-- Customer Login Button-->
        <a href="login.php"><button type="button" >Take me to customer login</button></a><br>
        
        <!-- Login Button -->
        <input type="submit" value="Login" class="button"/>
        <input type="hidden" name="login" value="TRUE" />
    </form>

        <p>By signing-in you agree to G-TWENTY's Terms and Conditions. Please see our <a href="privacypolicy.php">Privacy Policy</a>.</p>
      </div>

  </div>

<?php
    include('includes/footer.php');
?>