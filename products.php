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
<div class = "productsection">
 <button class="productbutton sortbybutton">Sort By</button>
 <div class ="productdropdown">
    <a href="#">Alphabetically</a>
    <a href="#">Newest</a>
 </div>
    
 </div>

<div class ="productsection">
    <button class="productbutton materialbutton">Case Material</button>
    <div class ="productdropdown">
    <a href="#">Clear Cases</a>
    <a href="#">Leather Cases</a>
    <a href="#">Metal Cases</a>
    <a href="#">Wood Cases</a>
    </div>  
 </div>
 <div class ="productsection">
    <button class="productbutton stylebutton">Case Style</button>
    <div class ="productdropdown">
    <a href="#">Cartoon</a>
    <a href="#">Futuristic</a>
    <a href="#">Simple</a>
    </div>  
 </div>
 



<hr>
<?php
    include('includes/footer.php');
?>