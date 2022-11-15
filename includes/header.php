<?php
    $companyName = "G-TWENTY";

	//start the session, check if the user is not logged in, redirect to start
	session_start();	

	if (!isset($_SESSION['username'])){
		exit();
	}
	$username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="stylesheet"  type="text/css" href="style/AboutUs.css">
    <link rel="stylesheet"  type="text/css" href="style/ContactUs.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
	<!-- JavaScript files -->
    <script defer src="js/script.js"></script>
    <!-- fontawesome.com for icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <title><?php echo TITLE; ?></title>
</head>
<body>
    <!-- wrapper -->
    <div class="wrapper">
        <!-- nav bar -->
        <div class="topnav">
            <img src="images/temp_logo.png" alt="img" id="temp-logo"></img>
            <a class="active" href="index.php">Home</a>
            <a href="products.php">Products</a>
            <a href="test.php">Sign Up</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>

            <input type="text" placeholder="Search.." required>
            <i class="fa fa-magnifying-glass"></i>
            <?php /*If the user is not logged in a plain account icon will show in the nav bar */
            if (!isset($_SESSION['username'])){
                echo "<a href='login.php'><i class='fa fa-user' id='user-icon'></i></a>";
                exit();
            } /*If the user is logged in the username will show in the nav bar */
                $username=$_SESSION['username'];
                echo "<a href='account.php'>". $_SESSION['username'] ."</a>"; 
            ?>
          <input type="text" placeholder="Search..">
            <a href="login.php">Account</a>

        </div>

        <!-- content -->
        <div class="content">