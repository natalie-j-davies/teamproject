<?php
    define("TITLE", "Account | G-TWENTY");
    include('includes/adminheader.php');

?>
<?php
	//start the session, check if the user is not logged in, redirect to start
    if (!isset($_SESSION['username'])){
		header("Location: login.php");
		exit();
	}

	?>
<!--The Account dashboard will show all user information when user logs in -->
<div id='account-header'>
<?php
        echo "<h1 id='account-title'><img src='images/logo/logo-symbol.png' alt='img' id='account-logo'>". $username ."'s Admin Dashboard</h1>";
?>
</div>
<!--account-conatiner is the flex box-->
    <div id="account-container">

    <div id="account-left-box">
        <a href="customers.php">Customers</a><br>
        <a href="orders.php">Orders</a><br>
        <a href="stock.php">Stock</a><br>
    </div>
    <div id="account-right-box">
<?php
	$username=$_SESSION['username'];

/* Prints the username of current logged in user */

	include ('connectdb.php'); 

try{
    $userid = $_SESSION['username'];
    $query = "SELECT * FROM adminusers WHERE username = '$userid'";
    $rows =  $db->query($query);
    

    if ($rows && $rows->rowCount()> 0) {
                while  ($row =  $rows->fetch())	{
                    echo "
                    <h2>Profile</h2>
                    <p>Username: ". $row['username'] ."</p>
                    <p>Name: ". $row['firstName'] ." ". $row['lastName'] ."</p>
                    <p>Email: ". $row['email'] ."</p>
                    <p>Phone: ". $row['phone'] ."</p>
                    ";

                }
            }
            else {
                echo "
                <h3>Profile</h3>
                <p>Name:  Database Error</p>
                <p>Email:   Database Error</p>
                <p>Username:   Database Error</p>
                <p>Address:   Database Error</p>
                <p>Postcode:   Database Error</p>
                ";
            }
        }
catch (PDOexception $ex){
    echo "Sorry, a database error occurred! <br>";
    echo "Error details: <em>". $ex->getMessage()."</em>";
}
?>

</div>
</div>
<div id="account-button-container">
<a href="logout.php"><button id="account-logout-button" type="button" >Would you like to logout?</button></a>
</div>
<?php
    include('includes/footer.php');
?>