<?php
    define("TITLE", "Login | G-TWENTY");
    include('includes/header.php');
?>

<p>Sign in here..</p>
  <!--log in and clear button--> 
  <form action="account.php" method="post">
    <div id="login">
      <label>User Name </label>
      <input type="text" name="username" value="" placeholder="Username"/>

      <label>Password </label>
      <input type="password" name="password" value="" placeholder="Password"/>

      <input type="submit" value="Login" class="button"/>
      <input type="hidden" name="login" value="TRUE" />
    </div>
  </form>

  <p>Not a member? Register <a href="signup.php">here</a></p>
  <p>By signing-in you agree to G-TWENY's Terms and Conditions. Please see our <a href="privacypolicy.php">Privacy Policy.</a></p>
<?php
    include('includes/footer.php');
?>