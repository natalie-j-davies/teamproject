<?php
    define("TITLE", "Products | G-TWENTY");
    include('includes/header.php');
?>
<div class="view-container">

<?php
	include_once ('connectdb.php');  

	try {
        
        $SKU = $_GET['SKU'];

		$query="SELECT  * FROM  products WHERE SKU='$SKU'";
		$rows =  $db->query($query);	
		if ( $rows && $rows->rowCount()> 0) {
			while  ($row =  $rows->fetch())	{
				echo 
                "
                <h3>". $row['productName'] ."</h3>
                <div class='view-product-box'>
                <div class='view-product-left'>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <img class='view-product-image'src=". $row['image'] .">
                </div>
                <div class='view-product-right'>
				<h4>Price: £". $row['price'] ."</h4>
                <p>Brand: ". $row['caseBrand'] ."</p>
                <p>Colour: ". $row['caseColour'] ."</p>
                
                
                <form action=";echo htmlspecialchars($_SERVER['PHP_SELF']);echo " method='post'>
                <a href='basket.php?SKU=". $row['SKU'] ."'><button class='basket-button' name='basket' type='button'>Add To Basket</button></a>
                </form>";
	        }
        }
		
    else {
	    echo  "<p>Database error</p>\n";
        }

    }
    catch (PDOexception $ex){
        echo "Sorry, a database error occurred! <br>";
        echo "Error details: <em>". $ex->getMessage()."</em>";
    }	

?>
        
    </div>
	</div>
</div>
<?php
    include('includes/footer.php');
?>