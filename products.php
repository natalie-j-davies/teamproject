<?php
    define("TITLE", "Products | G-TWENTY");
    include('includes/header.php');
?>
<?php
	include ('connectdb.php');  

	try {

		$query="SELECT  * FROM  products";
		$rows =  $db->query($query);	
		if ( $rows && $rows->rowCount()> 0) {
			while  ($row =  $rows->fetch())	{
				echo "<div id='cv-info-box'>
				<h3>". $row['productName'] ."</h3>
				<p>Price:  ". $row['price'] ."</p>
				<p>Style: ". $row['caseStyle'] ."</p>
                <p>Brand: ". $row['caseBrand'] ."</p>
                <p> <img src=". $row['image'] ."> </p>
                <p>Colour: <br>". $row['caseColour'] ."</p>
				</div>";

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
<div class="titleList">
<h1>Products</h1>
</div>
<div class="searchform">
    <form>
        <div class="searchbar">
        <input type class="form-control" name="search" type="search" placeholder="Search Phone Cases">
       
    </form>
    
</div>
<br>
<div class = prodbuttonsection>
<div class = "prodbutton">
 <button class="productbutton sortbybutton">Sort By</button>
 <div class ="productdropdown">
    <a href="#">Alphabetically</a>
    <a href="#">Newest</a>
 </div>
    
 </div>

<div class ="prodbutton">
    <button class="productbutton materialbutton">Price</button>
    <div class ="productdropdown">
    <a href="#">Under £30</a>
    <a href="#">£30 - £40</a>
    <a href="#">£50 - £60</a>
    <a href="#">Over £60</a>
    </div>  
 </div>
</div>
</div>

<br>
<br>
<hr>

<div class="sidebar">
    <div class = "sidebarcategories">Case Style</div>
    <label class="container">Cartoon
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Futuristic
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Simple
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <hr>
    <div class = "sidebarcategories">Brand</div>
    <label class="container">Apple
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Google
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Samsung
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Wood Cases
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <hr>
    <div class = "sidebarcategories">Case Colour</div>
    <label class="container">
    <span class = "circle red"></span>Red
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">
    <span class = "circle orange"></span>Orange
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">
    <span class = "circle yellow"></span>Yellow
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">
    <span class = "circle green"></span>Green
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">
    <span class = "circle blue"></span>Blue
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">
    <span class = "circle pink"></span>Pink
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">
    <span class = "circle purple"></span>Purple
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">
    <span class = "circle brown"></span>Brown
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">
    <span class = "circle gray"></span>Gray
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">
    <span class = "circle black"></span>Black
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">
    <span class = "circle white"></span>White
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">
    <span class = "circle gold"></span>Gold
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">
    <span class = "circle silver"></span>Silver
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">
    <span class = "circle multicolour"></span>Multicolour
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
   
</div>
<?php
    include('includes/footer.php');
?>