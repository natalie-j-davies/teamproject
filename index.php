<?php
    define("TITLE", "Home | G-TWENTY");
    include('includes/header.php');
?>

  <!--log in and clear button--> 
  <div id="login-button">
  <button type="button"><a href="login.php">Sign in!</a></button>
  </div> 
  <div id="header-container"> 
    <img id="pic-1" src="images/carousel-1.png">
    <h2>Effortless Style</h2>
    <button><a href="products.php">Shop Now</a></button>
</div>
<h4>Featured Collection</h4>
<div id="middle-container">
  <div><img id="pic-2" href="products.php">src="images/carousel-4.png"><p>Phone Case eg</p></div>
  <div><img id="pic-3" src="images/carousel-4.png"><p>Phone Case eg</p></div>
  <div><img id="pic-4" src="images/carousel-4.png"><p>Phone Case eg</p></div>
  <div><img id="pic-5" src="images/carousel-4.png"><p>Phone Case eg</p></div>
</div>

<div id="community">
  <h4>Our Community</h4>
  <img id="pic-6" src="images/carousel-3.png">
</div>

<?php
    include('includes/footer.php');
?>
