<?php
    define("TITLE", "Sign Up | G-TWENTY");
    include('includes/header.php');
?>
<?php
//if the form has been submitted
if (isset($_POST['submit'])){

  // connect to the database
  require_once('connectdb.php');
//creating variables for all data entered into register form
  $username=isset($_POST['username'])?$_POST['username']:false;
  $password=isset($_POST['password'])?password_hash($_POST['password'],PASSWORD_DEFAULT):false;
  $firstname=isset($_POST['firstname'])?$_POST['firstname']:false;
  $lastname=isset($_POST['lastname'])?$_POST['lastname']:false;
  $phone=isset($_POST['phone'])?$_POST['phone']:false;
  $email=isset($_POST['email'])?$_POST['email']:false;
  $address=isset($_POST['address'])?$_POST['address']:false;
  $postcode=isset($_POST['postcode'])?$_POST['postcode']:false;

 try{

	//register user by inserting the user info into users database
	$stat=$db->prepare("insert into users values(default,?,?,?,?,?,?,?,?)");
	$stat->execute(array($username, $password,$firstname,$lastname,$phone,$email,$address,$postcode));

	echo "Congratulations $username! You are now registered. ";
    session_start();
	$_SESSION["username"]=$_POST['username'];
	header("Location:account.php");

 }
 catch (PDOexception $ex){
	echo "Sorry, a database error occurred! <br>";
	echo "Error details: <em>". $ex->getMessage()."</em>";
 }
}
?>
            <!-- Sign-up title -->
            <div class="login-title text-center">
                <h1 class="title"><img class="signup-logo" src="images/logo/logo-symbol.png">Sign Up</h1>
                <p>Please fill in this sign-up form to create an account</p>
            </div>

            <hr>

            <!-- Sign-up form to sign up an account -->
            <div class="signup-form">
                <form action="signup.php" method="post">
                    <div class="signup-container">
                        <!-- Username Field -->
                        <label for="username">Username </label>
                        <input type="text" id="username" name="username"><br><br>

                        <!-- Password Field -->
                        <label for="password">Password </label>
                        <input type="password" id="password" name="password" required><br><br>

                        <!-- First Name Field -->
                        <label for="firstname">First Name </label>
                        <input type="text" id="firstname" name="firstname"><br><br>

                        <!-- Last Name Field -->
                        <label for="lastname">Last Name </label>
                        <input type="text" id="lastname" name="lastname"><br><br>
                        
                        <!-- Phone Number Field -->
                        <label for="phone">Phone Number </label>
                        <input type="text" id="phone" name="phone"><br><br>

                        <!-- Email Field -->
                        <label for="email">Email Address </label>
                        <input type="text" id="email" name="email" required><br><br>

                        <!-- Address Line Field -->
                        <label for="address">Address Line </label>
                        <input type="text" id="address" name="address"><br><br>

                        <!-- Postcode Field -->
                        <label for="postcode">Postcode </label>
                        <input type="text" id="postcode" name="postcode"><br><br>

                        <p>By creating an account you agree to G-TWENTY's Terms and Conditions. Please see our <a href="privacypolicy.php">Privacy Policy</a>.</p>

                        <div class="signupBtnDiv clearfix">
                            <!-- Sign Up button -->
                            <button type="submit" class="signupBtn" name="submit" value="Sign Up">
                                <span class="label-text">Sign Up</span>
                            </button>
                        </div>

                        <!-- Link to the Login Page -->
                        <div class="loginLink clearfix">
                            <p>Already have an account? Login <a href="login.php">here</a></p>
                        </div>
                    </div>
                </form>
            </div>

<?php
    include('includes/footer.php');
?>