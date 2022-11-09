<?php
    define("TITLE", "Login | G-TWENTY");
    include('includes/header.php');
?>


<div id="account-main">
    <h1>Account Dashboard</h1>
    <div id="account-details">
        <h2>Details</h2>
        <p>Name     </p>
        <p>Email     </p>
        <p>Username     </p>
        <p>Password     </p>

    </div>
    <div id="account-orders">
        <h2>Recent Orders</h2>
        <p>Product Name     </p>
        <p>Order Number     </p>
        <p>Order Date     </p>
        <p>Shipping Address     </p>
        <p>Total     </p>
    </div>
    <p>Would you like to logout? <a href="logout.php">click here</p>
</div>


<?php
    include('includes/footer.php');
?>