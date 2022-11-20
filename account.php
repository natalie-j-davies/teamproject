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
<div id='account-header'>
<?php
        echo "<h1 id='account-title'><img src='images/logo/logo-symbol.png' alt='img' id='account-logo'>". $username ."'s Account Dashboard</h1>";
?>
</div>
<!--account-conatiner is the flex box-->
    <div id="account-container">

    <div id="account-left-box">
        <a href="account.php">Profile</a><br>
        <a href="account.php">Recent Orders</a><br>
        <a href="account.php">Messages</a><br>
    </div>
    <div id="account-right-box">
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
                    <h2>Profile</h2>
                    <p>Name: ". $row['firstName'] ." ". $row['lastName'] ."</p>
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
    <table id="account-table">
    <tr>
        <th>Product Name</th>
        <th>Order Number</th>
        <th>Order Date</th>
    </tr>
    <tr>
        <td>Example Table</td>
        <td>123456789</td>
        <td>20/11/2022</td>
    </tr>
    <tr>
        <td>Example Table</td>
        <td>987654321</td>
        <td>20/11/2022</td>
    </tr>
    </table>

</div>
</div>
<div id="account-button-container">
<a href="logout.php"><button id="account-logout-button" type="button" >Would you like to logout?</button></a>
</div>
<?php
    include('includes/footer.php');
?>