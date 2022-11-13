<?php
    define("TITLE", "Home | G-TWENTY");
    include('includes/header.php');
?>

  <!--log in and clear button--> 
  <div id="login-button">
  <button type="button"><a href="login.php">Sign in!</a></button>
  </div> 
  <div id="header-container"> 
    <img id="pic-1" src="images/carousel-1.png"  >
    <h2>Effortless Style</h2>
    <button><a href="products.php">Shop Now</a></button>
</div>
<h4>Featured Collection</h4>
<div id="middle-container">
  <div><img id="pic-2" src="images/clearcase.JPEG"><p>Clear Cases</p></div>
  <div><img id="pic-3" src="images/leathercase.JPEG"><p>Leather Cases</p></div>
  <div><img id="pic-4" src="images/metalcase.JPEG"><p>Metal Cases</p></div>
  <div><img id="pic-5" src="images/woodcase.JPEG"><p>Wood Cases</p></div>
</div>

<div id="community">
  <h4>Our Community</h4>
  <div id="middle-container">
  <div><img id="pic-6" src="images/carousel-4.png"></p></div>
  <div><img id="pic-7" src="images/carousel-4.png"></p></div>
  <div><img id="pic-8" src="images/carousel-4.png"></p></div>
</div>

<?php
    include('includes/footer.php');
?>
