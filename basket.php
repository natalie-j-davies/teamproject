<?php
    define("TITLE", "Contact Us | G-TWENTY");
    include('includes/header.php');

?>
<div id='account-header'>
<?php
    $username=$_SESSION['username'];
    echo "<h1 id='account-title'><img src='images/logo/logo-symbol.png' alt='img' id='account-logo'>". $username ."'s Shopping Basket</h1>";
?>
</div>
<?php
    include('connectdb.php');

/*When the add to basket is clicked, the order details are added to the order details database within the basket.php page */         
        $SKU = $_GET['SKU'];

        if (isset($_POST['basket'])){

            $query="SELECT  * FROM  products WHERE SKU='$SKU'";
		    $rows =  $db->query($query);
                
                $productID= $row['productID'];
                $price= $row['price'];
                $quantity= '1';
                $userID = '6';
                $stat=$db->prepare("insert into order_details values(default,?,?,?,?,default)");
                $stat->execute(array($userID,$productID,$price,$quantity));
        }

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
                </tr>
<?php
            $query = "SELECT orders_details.userAccountId, orders_details.orderID, orders.created_at, orders.price, users.userAccountId, products.productName, products.image
            FROM order_details";

            $rows =  $db->query($query);	
            while  ($row =  $rows->fetch())	{
            echo "
                                <tr>
                                    <td>" .$row['image']. "</td>
                                    <td>" .$row['productName']. "</td>
                                    <td>" .$row['orderID']. "</td>
                                    <td>" .$row['productID']. "</td>
                                    <td>" .$row['price']. "</td>
                                    <td>" .$row['quantity']. "</td>
                                    <td>" .$row['created_at']. "</td>
                                    
                                </tr>
                           ";
                      }
?>
        </table>
    </div>
<?php
    include('includes/footer.php');
?>