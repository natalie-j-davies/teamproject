<?php
    define("TITLE", "Products | G-TWENTY");
    include('includes/header.php');
?>

<div class="titleList">
<h1>Products</h1>
</div>
<div class="searchform">
    <form action= "search.php" method="POST">
        <div class="searchbar">
        <input  class="form-control" name="search" value="<?php if(isset($_POST['search'])){echo $_POST['search'];}?>"  type="search" placeholder="Search Phone Cases">
    
       
       
    </form>
</div>
<?php
?>
<br>
<div class = prodbuttonsection>
<div class = "prodbutton">
 <button class="productbutton sortbybutton">Sort By</button>
 <div class ="productdropdown">
    <a href="#">Ascending Order (A-Z)</a>
    <a href="#">Descending Order (Z-A)</a>
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


<br>
<br>
<div class="productmainsection">
<div class="sidebar">
    <div class = "sidebarcategories">Case Design</div>
    <label class="container">Brass Peaks
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Laser Prism
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Obsidian
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Premonition
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Refraction
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <hr>
    <div class = "sidebarcategories">Phone Brand</div>
    <div class = "sidebarsubcategories">Apple</div>
    <label class="container">iPhone 12
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">iPhone 12 Mini
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">iPhone 12 Pro
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">iPhone 12 Pro Max
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">iPhone 13
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">iPhone 13 Mini
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">iPhone 13 Pro
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">iPhone 13 Pro Max
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">iPhone 14 
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">iPhone 14 Plus
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">iPhone 14 Pro
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">iPhone 14 Pro Max
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <div class = "sidebarsubcategories">Google</div>
    <label class="container">Google Pixel 6
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Google Pixel 6 Pro
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <div class = "sidebarsubcategories">Huawei</div>
    <label class="container">Huawei P20
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Huawei P20 Lite
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Huawei P20 Pro
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Huawei P30
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Huawei P30 Lite
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Huawei P30 Pro
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Huawei P40 Lite
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <div class = "sidebarsubcategories">Samsung Galaxy</div>
    <label class="container"> Galaxy S20
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Galaxy S20 Plus
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Galaxy S20 Ultra
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Galaxy S21
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Galaxy S21 Plus
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Galaxy S21 Ultra
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Galaxy S22
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Galaxy S22 Plus
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Galaxy S22 Ultra
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
<div class="products">
<?php
	include ('connectdb.php');  


	try {
        if(isset($_POST['search'])){
        $search = mysqli_real_escape_string($connect,$_POST['search']);
		$query="SELECT  * FROM  products 
        WHERE productName LIKE '%$search%' 
        OR phoneModel LIKE '%$search%'
        OR caseStyle LIKE '%$search%'
        OR caseBrand LIKE '%$search%'
        OR caseColour LIKE '%$search%'";
        $result = mysqli_query($connect,$query);
        $queryresult = mysqli_num_rows($result);
			while  ($row = mysqli_fetch_assoc($result))	{
				echo 
                "<div class='product-box'>
				<h3>". $row['productName'] ."</h3>
				<p>Price:  £". $row['price'] ."</p>
				<p>Style: ". $row['caseStyle'] ."</p>
                <p>Brand: ". $row['caseBrand'] ."</p>
                <img class='product-image'src=". $row['image'] .">
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
</div>
</div>
<?php
    include('includes/footer.php');
?>