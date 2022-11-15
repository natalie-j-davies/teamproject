<?php
    define("TITLE", "Home | G-TWENTY");
    include('includes/header.php');
    session_start();
?>

<?php
//if the form has been submitted
if (isset($_POST['login'])){
	if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	 exit('Please fill both the username and password fields!');
	}
	// connect DB
	try {
    require_once ("connectdb.php");
	//Query DB to find the matching username/password
	//using prepare to prevent SQL injection.
		$stat = $db->prepare('SELECT Userpassword FROM users WHERE username = ?');
		$stat->execute(array($_POST['username']));
  }
	catch(PDOException $ex) {
		echo("Failed to connect to the database.<br>");
		echo($ex->getMessage());
		exit;
	}
  }
		// fetch the result row and check 
		if ($stat->rowCount()>0){ 
			$row=$stat->fetch();
    }
    ?>
  <!--log in button--> 
  <div id="login-button-container">
    <button id="login-button" type="button"><a href="login.php">Sign in!</a></button>
  </div> 
  <!--lhead of index.php main picture --> 
  <div id="header-container"> 
    <img id="pic-1" src="images/carousel-1.png"  >
    <h2>Effortless Style</h2>
    <!--shop button takes user to products.php--> 
    <button><a href="products.php">Shop Now</a></button>
  </div>
<!--feature collection with links to products --> 
<h4>Featured Collection</h4>
<div id="middle-container">
  <div><img id="pic-2" src="images/clearcase.JPEG"><p id="FC-label">Clear Cases</p></div>
  <div><img id="pic-3" src="images/leathercase.JPEG"><p id="FC-label">Leather Cases</p></div>
  <div><img id="pic-4" src="images/metalcase.JPEG"><p id="FC-label">Metal Cases</p></div>
  <div><img id="pic-5" src="images/woodcase.JPEG"><p id="FC-label">Wood Cases</p></div>
</div>
<!--our community section - more pictures of phone cases/people to inspire user to shop--> 
  <h4>Our Community</h4>
  <div id="lower-container">
    <div><img id="pic-6" src="images/carousel-4.png"><p>Example</p></div>
    <div><img id="pic-7" src="images/carousel-4.png"><p>Example</p></div>
    <div><img id="pic-8" src="images/carousel-4.png"><p>Example</p></div>
  </div>

<?php
    include('includes/footer.php');
?>
