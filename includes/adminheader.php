<?php
    $companyName = "G-TWENTY";

	//start the session, check if the user is not logged in, redirect to start
	session_start();	

	if (isset($_SESSION['username'])){
		$username=$_SESSION['username'];
	}
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
    <script defer src="js/password-validation.js"></script>
    <!-- fontawesome.com for icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <title><?php echo TITLE; ?></title>
</head>
<body>
    <!-- wrapper -->
    <!--<div class="wrapper"> -->
        <nav class="nav">
            <ul>
                <div class="topnav">
                    <li><a href="admindash.php"><img src="images/logo/logo.png" alt="img" id="nav-logo"></img></a></li>
                    <li><a class="active" href="customers.php">Customers</a></li>
                    <li><a href="orders.php">Orders</a></li>
                    <li><a href="stock.php">Stock</a></li>

        <?php 
        /*If the user is logged in the username will show in the nav bar */
            if (isset($_SESSION['username'])){
                
                echo "
                <div id='dropdown'>
                <button id='dropdown-button'>" . $_SESSION['username'] . "<i class='fa fa-caret-down'></i>
                </button>
                <div id='dropdown-content'>
                  <a href='admindash.php'>Admin Dashboard</a><br>
                  <a href='logout.php'>Logout</a><br>
                </div>
              </div> 

                </nav>";
            }
            
            ?>

        

        <!-- content -->
        <div class="content">