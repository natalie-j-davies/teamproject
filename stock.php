<?php
    define("TITLE", "Login | G-TWENTY");
    include('includes/adminheader.php');

?>
<div id='customer-header'>
<h1 id='account-title'><img src='images/logo/logo-symbol.png' alt='img' id='account-logo'>G-Twenty Stock</h1>
</div>

<div id="stock-flex-box">


<div id="stock-left">
    <form action="stock.php" method="post">
        <h5>Search by Brand</h5>
        <input type="checkbox" id="html" name="fav_language" value="HTML">
            <label for="html">Apple</label><br>
        <input type="checkbox" id="css" name="fav_language" value="CSS">
            <label for="css">Google</label><br>
        <input type="checkbox" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">Huawei</label><br>
        <input type="checkbox" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">Samsung</label>

        <h5>Search by Style</h5>
        <input type="checkbox" id="html" name="fav_language" value="HTML">
            <label for="html">Brass Peaks</label><br>
        <input type="checkbox" id="css" name="fav_language" value="CSS">
            <label for="css">Laser Prisms</label><br>
        <input type="checkbox" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">Obsidian</label><br>
        <input type="checkbox" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">Premonition</label><br>
        <input type="checkbox" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">Refraction</label><br>
        <input type="checkbox" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">Snowy Peaks</label>
        
        <h5>Search by Price</h5>
        <input type="range" min="1" max="100" value="50" class="slider" id="stock-slider">
        <p>Price: £<span id="price"></span></p>
        
    </form>

</div>
<?php
	include ('connectdb.php');  

	try {
		$query="SELECT  * FROM  products";
		$rows =  $db->query($query);	
		if ( $rows && $rows->rowCount()> 0) {
                echo " 
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
                </tr>"; 

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
		
    else {
	    echo  "<p>0 results.</p>\n";
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