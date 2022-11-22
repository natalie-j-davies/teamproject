<?php
    define("TITLE", "Products | G-TWENTY");
    include('includes/header.php');
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
    <div class = "sidebarcategories">Case Material</div>
    <label class="container">Clear Cases
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Leather Cases
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Metal Cases
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
    <label class="container">Wood Cases
    <input type="checkbox">
    <span class="checkmark"></span>
    </label>
   
</div>
<?php
    include('includes/footer.php');
?>