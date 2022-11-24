<?php
    define("TITLE", "Contact Us | G-TWENTY");
    include('includes/header.php');

?>
<div id='account-header'>
<?php
    $username=$_SESSION['username'];
    echo "<h1 id='account-title'><img src='images/logo/logo-symbol.png' alt='img' id='account-logo'>". $username ."'s Shopping Basket</h1>";
?>
</div>
<div id="orders-container">
        <table id='orders-table'>
            <tr>
                <th>Product Name</th>
                <th>Model</th>
                <th>Colour</th>
                <th>Price</th>
                <th>image</th>
            </tr>
            <tr>
                <td>Phone Case Example</td>
                <td>Google Pixel 6</td>
                <td>Gold</td>
                <td>£15.00</td>
                <td><img id="order-image" src="images/cases/database_images/Obsidian/Google/Obsidian_GOOPIXEL6.png"></td>
            </tr>
        </table>
</div>


<?php
    include('includes/footer.php');
?>