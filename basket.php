<?php
    define("TITLE", "Shopping Basket | G-TWENTY");
    include('includes/header.php');

?>
<div id='account-header'>
<?php
    $username=$_SESSION['username'];
    echo "<h1 id='account-title'><img src='images/logo/logo-symbol.png' alt='img' id='account-logo'>". $username ."'s Shopping Basket</h1>";
?>
</div>
<?php

	include ('connectdb.php'); 
/*
    if (isset($_POST['submit'])){
                
        $productID= '12';
        $price= '25';
        $quantity= '1';
        $userID = '11';

        $stat=$db->prepare("INSERT INTO order_details VALUES(default,?,?,?,?,default)");
        $stat->execute(array($userID,$productID,$price,$quantity));
        }
*/
?>
</div>
    <div id='orders-container'>
         <table id='orders-table'>
                <tr>
                    <th>Product Name</th>
                    <th>Order Number</th>
                    <th>Colour</th>
                    <th>Price</th>
                    <th>image</th>
                    <th></th>
                </tr>
<?php
            
            $query = "SELECT  order_details.userAccountId, order_details.orderID, order_details.price, order_details.quantity, order_details.productID, order_details.created_at, users.userAccountId
            FROM order_details
            INNER JOIN users ON order_details.userAccountId = users.userAccountId";
            $rows =  $db->query($query);	
            while  ($row =  $rows->fetch())	{
            echo "
                                <tr>
                                    <td>" .$row['orderID']. "</td>
                                    <td>" .$row['orderID']. "</td>
                                    <td>" .$row['price']. "</td>
                                    <td>" .$row['quantity']. "</td>
                                    <td>" .$row['created_at']. "</td>
                                    <td> Delete </td>
                                </tr>
                           ";
                      }
?>
        </table>
    </div>
<?php
    include('includes/footer.php');
?>