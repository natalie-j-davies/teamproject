<?php
    define("TITLE", "Sign Up | G-TWENTY");
    include('includes/header.php');
?>

  <!--log in and clear button--> 
  <form action="index.php" method="post">
    <div id="login">
      <label>User Name </label>
      <input type="text" name="username" value="" placeholder="Username"/>

      <label>Password </label>
      <input type="password" name="password" value="" placeholder="Password"/>

      <input type="submit" value="Login" class="button"/>
      <input type="hidden" name="login" value="TRUE" />
    </div>
  </form>

<?php
    include('includes/footer.php');
?>
