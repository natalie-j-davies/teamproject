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
            include ('connectdb.php'); 
            $query = "SELECT  orders.userAccountId, orders.orderID, orders.total_price, orders.created_at, users.userAccountId
            FROM orders
            INNER JOIN users ON orders.userAccountId = users.userAccountId";
            $rows =  $db->query($query);	
            while  ($row =  $rows->fetch())	{
            echo "
                                <tr>
                                    <td>" .$row['orderID']. "</td>
                                    <td>" .$row['total_price']. "</td>
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