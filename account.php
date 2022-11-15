<?php
    define("TITLE", "Login | G-TWENTY");
    include('includes/header.php');

?>
	<?php
	//start the session, check if the user is not logged in, redirect to start
	if (!isset($_SESSION['username'])){
		header("Location: login.php");
		exit();
	}
	$username=$_SESSION['username'];

	?>
<!--The Account dashboard will show all user information when user logs in -->
    <div id="account-container">
<?php
	include ('connectdb.php'); 
    $query = "SELECT * FROM users WHERE username = '$username'";
    $rows =  $db->query($query);

    echo "<h2>".$_SESSION['username']."'s Account Dashboard</h2>";
    
    if ( $rows && $rows->rowCount()> 0) {
                while  ($row =  $rows->fetch())	{
                    echo "<div id='acccount-info-box'>
                    <h3>Profile</h3>
                    <p>Name:  ". $row['firstName'] ." ". $row['lastName'] ."</p>
                    <p>Email: ". $row['email'] ."</p>
                    <p>Username ". $row['username'] ."</p>
                    <p>Address: ". $row['addressLine'] ."</p>
                    <p>Postcode: <br>". $row['postcode'] ."</p>
                    </div>";

                }
            }else{
                echo "<h3 style= 'color:red'>System Error</h3>";
            }
/*
        <div id="account-orders">
            <h2>Recent Orders</h2>
            <p>Product Name     </p>
            <p>Order Number     </p>
            <p>Order Date     </p>
            <p>Shipping Address     </p>
            <p>Total     </p>
        </div>*/

?>
    <p>Would you like to logout? <a href="logout.php">click here</a></p>

    session_start();
?>

<?php

include_once('connectdb.php');


?>

<div id="account-main">
    <h1>Account Dashboard</h1>
    <div id="account-details">
        <h2>Details</h2>
        <p>Name     </p>
        <p>Email     </p>
        <p>Username     </p>
        <p>Password     </p>

    </div>
    <div id="account-orders">
        <h2>Recent Orders</h2>
        <p>Product Name     </p>
        <p>Order Number     </p>
        <p>Order Date     </p>
        <p>Shipping Address     </p>
        <p>Total     </p>
    </div>
    <p>Would you like to logout? <a href="logout.php">click here</p>

</div>


<?php
    include('includes/footer.php');
?>