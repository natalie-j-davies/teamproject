<?php
    define("TITLE", "Login | G-TWENTY");
    include('includes/adminheader.php');

?>

<div id='orders-header'>
<h1 id='account-title'><img src='images/logo/logo-symbol.png' alt='img' id='account-logo'>G-Twenty Orders</h1>
</div>

<div id="orders-container">
<?php

include ('connectdb.php'); 
    try{
        $query = "SELECT * FROM orders;";
        $rows =  $db->query($query);
            if ($rows && $rows->rowCount()> 0) {
                echo " 
                    <table id='orders-table'>
                    <tr>
                    <th>User Account ID</th>
                    <th>Order Number </th>
                    <th>Order Date </th>
                    <th>Total Price </th>

                    </tr>";            
                        while  ($row =  $rows->fetch())	{
                            
                        echo "<tr>
                            <td>". $row['userAccountId'] ."</td>
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
<?php
    include('includes/footer.php');
?>