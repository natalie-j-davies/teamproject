<?php
	session_start();

	session_destroy();

?>
<?php
    define("TITLE", "Log Out | G-TWENTY");
    include('includes/header.php');
?>
<div id="log-out-container">
<div id="log-out">
	<h2> Logged out of your G-TWENTY account </h2> 
	<p>Would like to log in again? <br></p>
	<button class="about-button" onclick= "document.location='login.php'">Log in</button>
</div>
</div>
<?php
    include('includes/footer.php');
?>