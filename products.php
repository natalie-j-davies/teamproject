<?php
    define("TITLE", "Products | G-TWENTY");
    include('includes/header.php');
?>

<div class="titleList">
<h1>Products</h1>
</div>
<div class="searchform">
    <form>
        <div class="searchbar text-center">
        <input type class="form-control" name="search" type="search" placeholder="Search Phone Cases">
       
    </form>

</div>
<br>
<div class ="productsection">
 <button class="productbutton">Sort By</button>
 <div class ="productdropdown">
    <a href="#">Alphabetically</a>
    <a href="#">Newest</a>
 </div>
    
 </div>

<div class ="productsection">
    <button class="productbutton">Filter</button>
    <div class ="productdropdown">
    <a href="#">Case Styles</a>
    <a href="#">Case Colors</a>
    </div>
    <div class = "productdropdown2"> 
    <a href ="#">Wood Cases</a>
    
 </div>
</div>


<hr>
<?php
    include('includes/footer.php');
?>