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
<div id="login">
	<label>User Name </label>
	<input type="text" name="username" value="" placeholder="Username"/>

	<label>Password </label>
	<input type="password" name="password" value="" placeholder="Password"/>

	<input type="submit" value="Sign In" class="button"/>
	<input type="hidden" name="login" value="TRUE" />
	</form>

</body>
</html>
