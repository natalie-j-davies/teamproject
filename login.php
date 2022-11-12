<?php
    define("TITLE", "Login | G-TWENTY");
    include('includes/header.php');
?>

  <!-- Login title -->
  <div class="login-title text-center">
    <h1 class="title">Login</h1>
    <p>Please sign in here to login</p>
  </div>

  <!--log in and clear button--> 
  <div class="login-form">
    <form action="account.php" method="post">
      <div class="container" id="login">
        <label>User Name </label>
        <input type="text" name="username" value="" placeholder="Username"/>

        <label>Password </label>
        <input type="password" name="password" value="" placeholder="Password"/>

        <input type="submit" value="Login" class="button"/>
        <input type="hidden" name="login" value="TRUE" />
      </div>
    </form>
  </div>

  <p>Not a member? Register <a href="signup.php">here</a></p>
  <p>By signing-in you agree to G-TWENTY's Terms and Conditions. Please see our <a href="privacypolicy.php">Privacy Policy</a>.</p>
<?php
    include('includes/footer.php');
?>