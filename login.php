<?php
    define("TITLE", "Login | G-TWENTY");
    include('includes/header.php');
?>

  <!-- Login title -->
  <div class="login-title text-center">
    <h1 class="title">Login</h1>
    <p>Please sign in here to login</p>
  </div>

  <hr>

  <!-- Log in form and button --> 
  <div class="signup-form">
    <form action="account.php" method="post">
      <div class="signup-container" id="login">
        <!-- Username Field -->
        <label for="username">Username </label>
        <input type="text" name="username" value="" placeholder="Username"/><br><br>

        <!-- Password Field -->
        <label for="password">Password </label>
        <input type="password" name="password" value="" placeholder="Password"/><br><br>

        <!-- Login Button -->
        <input type="submit" value="Login" class="button"/>
        <input type="hidden" name="login" value="TRUE" />

        <div class="signupLink clearfix">
          <p>Not a member? Register <a href="signup.php">here</a></p>
        </div>

        <p>By signing-in you agree to G-TWENTY's Terms and Conditions. Please see our <a href="privacypolicy.php">Privacy Policy</a>.</p>
      </div>
    </form>
  </div>

<?php
    include('includes/footer.php');
?>