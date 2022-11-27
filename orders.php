<?php
    define("TITLE", "Login | G-TWENTY");
    include('includes/adminheader.php');

?>

<div id='orders-header'>
<h1 id='account-title'><img src='images/logo/logo-symbol.png' alt='img' id='account-logo'>G-Twenty Orders</h1>
</div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div id="searchbar-stock">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-inline">
            <div class="form-group">
                <div class="input-group">
                    <input type class="form-control" name="search" type="search" placeholder="Search Phone Cases">
                    <span class="input-group-btn"><button class="btn btn-secondary" name="submit" type="submit"><i class="fa fa-search"></i></button></span>
                </div>
            </div>
        </form>
    </div>
    </div>
    </form>

    <table id='orders-table'>
                    <tr>
                    <th>User Account ID</th>
                    <th>Order Number </th>
                    <th>Order Date </th>
                    <th>Total Price </th>
<?php

	include ('connectdb.php');  

	try {
        if(!isset($_POST['submit'])){
            $query="SELECT  * FROM  orders";
            $rows =  $db->query($query);	
            if ( $rows && $rows->rowCount()> 0) {
                while  ($row =  $rows->fetch())	{  
                    echo "<tr>
                    <td>". $row['userAccountId'] ."</td>
                    <td>". $row['orderID'] ."</td>
                    <td>". $row['created_at'] ."</td>
                    <td>£". $row['total_price'] ."</td>";
                }
            }
        }
        if(isset($_POST['submit'])){
            if(!empty($_POST['search'])){
                $search= $_POST['search'];

                $query="SELECT  * FROM  orders WHERE orderID LIKE '%$search%' OR userAccountId LIKE '%$search%' OR total_price LIKE '%$search%'
                OR created_at LIKE '%$search%';";
                $rows =  $db->query($query);

                    if ( $rows && $rows->rowCount()> 0) {
                        while  ($row =  $rows->fetch())	{ 
                            echo "<tr>
                            <td>". $row['userAccountId'] ."</td>
                            <td>". $row['orderID'] ."</td>
                            <td>". $row['created_at'] ."</td>
                            <td>£". $row['total_price'] ."</td>";
                        }
                    }
                }else if(!empty($_POST['search'])){
                    echo  "<p>0 results for '$search'.</p>\n"; //no match found
                }
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