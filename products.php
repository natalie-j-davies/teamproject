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
<div class ="sortby">
 <button class="sortbybutton">Sort By</button>
    
 </div>

<div class ="filter">
    <button class="filterbutton">Filter</button>
</div>


<hr>
<?php
    include('includes/footer.php');
?>