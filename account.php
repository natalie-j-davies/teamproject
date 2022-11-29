<?php
    define("TITLE", "Account | G-TWENTY");
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
    <p><a href="account.php">Profile</a></p>
    <p> <a href="account.php">Recent Orders</a></p>
    <p><a href="termsconditions.php">Terms and Conditions</a></p>
    </div>
    <div id="account-right-box">
<?php
	$username=$_SESSION['username'];

/* Prints the username of current logged in user */

	include ('connectdb.php'); 

try{
    $user = $_SESSION['username'];
    $query = "SELECT * FROM users WHERE username = '$user';";
    $rows =  $db->query($query);
    

    if ($rows && $rows->rowCount()> 0) {
        while  ($row =  $rows->fetch())	{
            echo "
                    <h2>Profile</h2>
                    <p>Username: ". $row['username'] ."</p>
                    <p>Name: ". $row['firstName'] ." ". $row['lastName'] ."</p>
                    <p>Email: ". $row['email'] ."</p>
                    <p>Phone: ". $row['phone'] ."</p>
                    <p>Address: ". $row['addressLine'] ."</p>
                    <p>Postcode: ". $row['postcode'] ."</p>
                ";

                }
            }
            else {
                echo "Apologies there has been a Database Error please come back later";
            }

    $query = "SELECT orders.userAccountId, orders.orderID, orders.created_at, orders.total_price, users.userAccountId
                FROM orders
                INNER JOIN users ON orders.userAccountId = users.userAccountId;";

    $rows =  $db->query($query);
        if ($rows && $rows->rowCount()> 0) {
            echo " <h2>Recent Orders</h2>
                <table id='account-table'>
                <tr>
                <th>Order Number </th>
                <th>Order Date </th>
                <th>Total Price </th>
                </tr>";            
                    while  ($row =  $rows->fetch())	{
                    echo "<tr>
                        <td>". $row['orderID'] ."</td>
                        <td>". $row['created_at'] ."</td>
                        <td>£". $row['total_price'] ."</td>
                    </tr>
                ";

        }
    }
    else {
            echo "<h2>Recent Orders</h2>
                    <p> You have no recent orders</p>";
    }

}
catch (PDOexception $ex){
    echo "Sorry, a database error occurred! <br>";
    echo "Error details: <em>". $ex->getMessage()."</em>";
}
?>
        </table>
    </div>
 </div>
<div id="account-button-container">
<a href="logout.php"><button id="account-logout-button" type="button" >Would you like to logout?</button></a>
</div>
<?php
    include('includes/footer.php');
?>