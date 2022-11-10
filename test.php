<?php
    define("TITLE", "TEST | G-TWENTY");
    include('includes/header.php');
    session_start();
?>
<?php
//if the form has been submitted
if (isset($_POST['submitted'])){
 //prepare the form input

  // connect to the database
  require_once('connectdb.php');
	//creating variables for all data entered into register form
  $username=isset($_POST['username'])?$_POST['username']:false;
  $password=isset($_POST['password'])?password_hash($_POST['userPassword'],PASSWORD_DEFAULT):false;
  $firstname=isset($_POST['firstname'])?$_POST['firstName']:false;
  $lastname=isset($_POST['lastname'])?$_POST['lastName']:false;
  $phone=isset($_POST['phone'])?$_POST['phone']:false;
  $email=isset($_POST['email'])?$_POST['email']:false;
  $address=isset($_POST['address'])?$_POST['addressLine']:false;
  $postcode=isset($_POST['postcode'])?$_POST['postcode']:false;

  //checks if username and password is correct
  if (!($username)){
	echo "Username wrong!";
    exit;
	}
  if (!($password)){
	exit("password wrong!");
	}
 try{
	
	//register user by inserting the user info into users database
	$stat=$db->prepare("insert into users values(default,?,?,?,?,?,?,?,?)");
	$stat->execute(array($username, $password,$firstname,$lastname,$phone,$email,$address,$postcode));

	echo "Congratulations $username! You are now registered. ";  	
	
 }
 catch (PDOexception $ex){
	echo "Sorry, a database error occurred! <br>";
	echo "Error details: <em>". $ex->getMessage()."</em>";
 }
}
?>
<div id="register">
  <h2>Register</h2>
  <form method = "post" action="test.php">

	Username: <input type="text" name="username" /><br>
	Password: <input type="password" name="password" /><br>
  First Name: <input type="text" name="firstname" /><br>
  Last Name: <input type="text" name="lastname" /><br>
	Phone Number: <input type="text" name="phone" /><br>
	Email: <input type="test" name="email" /><br>
  Address Line: <input type="text" name="address" /><br>
	Postcode: <input type="text" name="postcode" /><br>

	<input type="submit" value="Register" /> 
	<input type="reset" value="clear"/>
	<input type="hidden" name="submitted" value="true"/>
  </form>  
  <p> Already a user? <a href="index.php">Log in</a>  </p>
</div>
</body>
</html>
<?php
    include('includes/footer.php');
?>