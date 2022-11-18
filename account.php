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

	?>
<!--The Account dashboard will show all user information when user logs in -->

<?php
        echo "<h2>". $username ."'s Account Dashboard</h2>";
?>
<!--account-conatiner is the flex box-->
    <div id="account-container">

    <div id="account-left-box">
        <a href="account.php">Profile</a><br>
        <a href="account.php">Order History</a><br>
        <a href="account.php">Messages</a><br>
    </div>
    <div id="acccount-right-box">
<?php
	$username=$_SESSION['username'];

/* Prints the username of current logged in user */

	include ('connectdb.php'); 

try{
    $userid = $_SESSION['username'];
    $query = "SELECT * FROM users WHERE username = '$userid'";
    $rows =  $db->query($query);
    

    if ($rows && $rows->rowCount()> 0) {
                while  ($row =  $rows->fetch())	{
                    echo "
                    <h3>Profile</h3>
                    <p>Name:  ". $row['firstName'] ." ". $row['lastName'] ."</p>
                    <p>Email: ". $row['email'] ."</p>
                    <p>Username: ". $row['username'] ."</p>
                    <p>Address: ". $row['addressLine'] ."</p>
                    <p>Postcode: ". $row['postcode'] ."</p>
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

        <h2>Recent Orders</h2>
        <p>Product Name     </p>
        <p>Order Number     </p>
        <p>Order Date     </p>
        <p>Shipping Address     </p>
        <p>Total     </p>

</div>
</div>
    <p>Would you like to logout? <a href="logout.php">click here</p>
</div>



<?php
    include('includes/footer.php');
?>