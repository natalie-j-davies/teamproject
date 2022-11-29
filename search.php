<?php
    define("TITLE", "Products | G-TWENTY");
    include('includes/header.php');
?>

<div class="titleList">
<h1>Products</h1>
</div>
<div class="searchform">
    <form action= "search.php" method="GET">
        <div class="searchbar">
        <input  class="form-control" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>"  type="search" placeholder="Search Phone Cases">
    
        <h3>Search result for: <?php echo $_GET['search'] ?></h3>
       
    </form>
</div>
<br>
<br>
<div class="productmainsection">
<div class="sidebar">
    <div class = "sidebarcategories">Case Design</div>
    <label class="container">Brass Peaks
    <input type="checkbox" id="red">
    </label></a>
    <label class="container">Laser Prism
    <input type="checkbox">
    </label>
    <label class="container">Obsidian
    <input type="checkbox">
    </label>
    <label class="container">Premonition
    <input type="checkbox">
    </label>
    <label class="container">Refraction
    <input type="checkbox">
    </label>
    <hr>
    <div class = "sidebarcategories">Phone Brand</div>
    <div class = "sidebarsubcategories">Apple</div>
    <label class="container">iPhone 12
    <input type="checkbox">
    </label>
    <label class="container">iPhone 12 Mini
    <input type="checkbox">
    </label>
    <label class="container">iPhone 12 Pro
    <input type="checkbox">
    </label>
    <label class="container">iPhone 12 Pro Max
    <input type="checkbox">
    </label>
    <label class="container">iPhone 13
    <input type="checkbox">
    </label>
    <label class="container">iPhone 13 Mini
    <input type="checkbox">
    </label>
    <label class="container">iPhone 13 Pro
    <input type="checkbox">
    </label>
    <label class="container">iPhone 13 Pro Max
    <input type="checkbox">
    </label>
    <label class="container">iPhone 14 
    <input type="checkbox">
    </label>
    <label class="container">iPhone 14 Plus
    <input type="checkbox">
    </label>
    <label class="container">iPhone 14 Pro
    <input type="checkbox">
    </label>
    <label class="container">iPhone 14 Pro Max
    <input type="checkbox">
    </label>
    <div class = "sidebarsubcategories">Google</div>
    <label class="container">Google Pixel 6
    <input type="checkbox">
    </label>
    <label class="container">Google Pixel 6 Pro
    <input type="checkbox">
    </label>
    <div class = "sidebarsubcategories">Huawei</div>
    <label class="container">Huawei P20
    <input type="checkbox">
    </label>
    <label class="container">Huawei P20 Lite
    <input type="checkbox">
    </label>
    <label class="container">Huawei P20 Pro
    <input type="checkbox">
    </label>
    <label class="container">Huawei P30
    <input type="checkbox">
    </label>
    <label class="container">Huawei P30 Lite
    <input type="checkbox">
    </label>
    <label class="container">Huawei P30 Pro
    <input type="checkbox">
    </label>
    <label class="container">Huawei P40 Lite
    <input type="checkbox">
    </label>
    <div class = "sidebarsubcategories">Samsung Galaxy</div>
    <label class="container"> Galaxy S20
    <input type="checkbox">
    </label>
    <label class="container">Galaxy S20 Plus
    <input type="checkbox">
    </label>
    <label class="container">Galaxy S20 Ultra
    <input type="checkbox">
    </label>
    <label class="container">Galaxy S21
    <input type="checkbox">
    </label>
    <label class="container">Galaxy S21 Plus
    <input type="checkbox">
    </label>
    <label class="container">Galaxy S21 Ultra
    <input type="checkbox">
    </label>
    <label class="container">Galaxy S22
    <input type="checkbox">
    </label>
    <label class="container">Galaxy S22 Plus
    <input type="checkbox">
    </label>
    <label class="container">Galaxy S22 Ultra
    <input type="checkbox">
    </label>
    <hr>
    <div class = "sidebarcategories">Case Colour</div>
    <label class="container">
    <span class = "circle red"></span>Red
    <input type="checkbox">
    </label>
    <label class="container">
    <span class = "circle orange"></span>Orange
    <input type="checkbox">
    </label>
    <label class="container">
    <span class = "circle yellow"></span>Yellow
    <input type="checkbox">
    </label>
    <label class="container">
    <span class = "circle green"></span>Green
    <input type="checkbox">
    </label>
    <label class="container">
    <span class = "circle blue"></span>Blue
    <input type="checkbox">
    </label>
    <label class="container">
    <span class = "circle pink"></span>Pink
    <input type="checkbox">
    </label>
    <label class="container">
    <span class = "circle purple"></span>Purple
    <input type="checkbox">
    </label>
    <label class="container">
    <span class = "circle brown"></span>Brown
    <input type="checkbox">
    </label>
    <label class="container">
    <span class = "circle gray"></span>Gray
    <input type="checkbox">
    </label>
    <label class="container">
    <span class = "circle black"></span>Black
    <input type="checkbox">
    </label>
    <label class="container">
    <span class = "circle white"></span>White
    <input type="checkbox">
    </label>
    <label class="container">
    <span class = "circle gold"></span>Gold
    <input type="checkbox">
    </label>
    <label class="container">
    <span class = "circle silver"></span>Silver
    <input type="checkbox">
    </label>
    <label class="container">
    <span class = "circle multicolour"></span>Multicolour
    <input type="checkbox">
    </label>
   
</div>
<div class="products">

<?php
	include ('connectdb.php');  


	try {
        if(isset($_GET['search'])){
            $search = mysqli_real_escape_string($connect,$_GET['search']);
            if(($_GET['search']) == 'ascended_order'){
                $query="SELECT  * FROM  products  
                ORDER BY productName ASC";    
            }
            elseif(($_GET['search']) == 'descended_order'){
                $query="SELECT  * FROM  products  
                ORDER BY productName DESC";   
            }
            elseif(($_GET['search']) == 'newest_cases'){
                $query="SELECT  * FROM  products  
                ORDER BY created_at ASC";   
            }
            elseif(($_GET['search']) == 'oldest_cases'){
                $query="SELECT  * FROM  products  
                ORDER BY created_at DESC";   
            }
            elseif(($_GET['search']) == 'under_£30'){
                $query="SELECT  * FROM  products
                WHERE price < 30";
            }
            elseif(($_GET['search']) == '£30_to_£40'){
                $query="SELECT  * FROM  products
                WHERE price BETWEEN 30 AND 40";
            }
            elseif(($_GET['search']) == '£40_to_£60'){
                $query="SELECT  * FROM  products
                WHERE price BETWEEN 40 AND 60";
            }
            elseif(($_GET['search']) == 'over_£60'){
                $query="SELECT  * FROM  products
                WHERE price > 60";
            }


            else{
                $query="SELECT  * FROM  products 
        WHERE productName LIKE '%$search%' 
        OR phoneModel LIKE '%$search%'
        OR caseStyle LIKE '%$search%'
        OR caseBrand LIKE '%$search%'
        OR caseColour LIKE '%$search%'";

            }
        
		
        $result = mysqli_query($connect,$query);
        $queryresult = mysqli_num_rows($result);
			while  ($row = mysqli_fetch_assoc($result))	{
				echo 
                "<div class='product-box'>
                <h4>". $row['productName'] ."</h4>
                <div class='product-left'>
                <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                <img class='product-image'src=". $row['image'] .">
                </div>
                <div class='product-right'>
				<h4>Price: £". $row['price'] ."</h4>
                <p>Brand: ". $row['caseBrand'] ."</p>
                <p>Colour: ". $row['caseColour'] ."</p>
                <button class='basket-button' type='submit'>Add To Basket</button>
                </div>
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