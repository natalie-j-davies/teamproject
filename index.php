<?php
    define("TITLE", "Home | G-TWENTY");
    include('includes/header.php');
?>

  <!--lhead of index.php main picture --> 
  <div id="header-container"> 
    <img id="pic-1" src="images/temp_images/carousel-1.png"  >
    <h2>Effortless Style</h2>
    <!--shop button takes user to products.php--> 
    <a href="products.php"><button id="shop-now-button">Shop Now</button></a>
  </div>
<!--feature collection with links to products --> 
<h4>Featured Brands</h4>
<div id="middle-container">
  <div id ="upper-padding"><img id="pic-2" src="images/temp_images/apple.png"><p id="FC-label">  Apple</p></div>
  <div id ="upper-padding"><img id="pic-3" src="images/temp_images/samsung.png"><p id="FC-label">Samsung </p></div>
  <div id ="upper-padding"><img id="pic-4" src="images/temp_images/huawei.png"><p id="FC-label">Huawei</p></div>
  <div id ="upper-padding"><img id="pic-5" src="images/temp_images/google.png"><p id="FC-label">Google</p></div>
</div>
<!--our community section - more pictures of phone cases/people to inspire user to shop--> 
  <h4>Newest Designs</h4>
  <div id="lower-container">
    <div id="lower-padding"><img id="pic-6" src="images/cases/brasspeaks.png"><p id="FC-label">Brass Peaks</p></div>
    <div id="lower-padding"><img id="pic-7" src="images/cases/obsidian_14proMax.png"><p id="FC-label">Obsidian</p></div>
    <div id="lower-padding"><img id="pic-8" src="images/cases/snowyPeaks_GPxlPro.png"><p id="FC-label">Snowy Peaks</p></div>
    <div id="lower-padding"><img id="pic-9" src="images/cases/hua30.png"><p id="FC-label">Refraction</p></div>
  </div>

<?php
    include('includes/footer.php');
?>
