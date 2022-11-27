<?php
    define("TITLE", "Login | G-TWENTY");
    include('includes/adminheader.php');

?>
<div id='customer-header'>
<h1 id='account-title'><img src='images/logo/logo-symbol.png' alt='img' id='account-logo'>G-Twenty Stock</h1>
</div>

<div id="stock-container">

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
    </form>

<div id='stock-right'>
                <table id='stock-table'>
                <tr>
                <th>Stock</th>
                <th>Product Name</th>
                <th>Model</th>
                <th>SKU</th>
                <th>Price</th>
                <th>Brand</th>
                <th>Style</th>
                <th>Colour Category</th>
                </tr>
<?php

	include ('connectdb.php');  

	try {
        if(!isset($_POST['submit'])){
            $query="SELECT  * FROM  products";
            $rows =  $db->query($query);	
            if ( $rows && $rows->rowCount()> 0) {
                while  ($row =  $rows->fetch())	{  
                    echo "<tr>
                    <td>". $row['stock'] ."</td>
                    <td>". $row['productName'] ."</td>
                    <td>". $row['phoneModel'] ."</td>
                    <td>". $row['SKU'] ."</td>
                    <td>£". $row['price'] ."</td>
                    <td>". $row['caseBrand'] ."</td>
                    <td>". $row['caseStyle'] ."</td>
                    <td>". $row['caseColour'] ."</td>
                    </tr>";
                }
            }
        }
        if(isset($_POST['submit'])){
            if(!empty($_POST['search'])){
                $search= $_POST['search'];

                $query="SELECT  * FROM  products WHERE caseBrand LIKE '%$search%' OR caseColour LIKE '%$search%' OR productName LIKE '%$search%'
                OR stock LIKE '%$search%' OR caseStyle LIKE '%$search%' OR SKU LIKE '%$search%' OR price LIKE '%$search%';";
                $rows =  $db->query($query);

                    if ( $rows && $rows->rowCount()> 0) {
                        while  ($row =  $rows->fetch())	{ 
                            echo "<tr>
                            <td>". $row['stock'] ."</td>
                            <td>". $row['productName'] ."</td>
                            <td>". $row['phoneModel'] ."</td>
                            <td>". $row['SKU'] ."</td>
                            <td>£". $row['price'] ."</td>
                            <td>". $row['caseBrand'] ."</td>
                            <td>". $row['caseStyle'] ."</td>
                            <td>". $row['caseColour'] ."</td>
                            </tr>";
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