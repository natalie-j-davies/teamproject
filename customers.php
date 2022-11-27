<?php
    define("TITLE", "Login | G-TWENTY");
    include('includes/adminheader.php');

?>
<div id='customer-header'>
<h1 id='account-title'><img src='images/logo/logo-symbol.png' alt='img' id='account-logo'>G-Twenty Customer List</h1>
</div>
<div id="searchbar-stock">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-inline">
        <div class="form-group">
            <div class="input-group">
                <input type class="form-control" name="search" type="search" placeholder="Search key words..">
                <span class="input-group-btn"><button class="btn btn-secondary" name="submit" type="submit"><i class="fa fa-search"></i></button></span>
            </div>
        </div>
    </form>
</div>
<table id='customer-table'>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address Line</th>
                <th>Postcode</th>
                </tr>
<?php

include ('connectdb.php');  

try {
    if(!isset($_POST['submit'])){
        $query="SELECT  * FROM  users";
        $rows =  $db->query($query);	
        if ( $rows && $rows->rowCount()> 0) {
            while  ($row =  $rows->fetch())	{  
                echo "<tr> 
                <td>". $row['username'] ."</td>
                <td>". $row['firstName'] ." ". $row['lastName'] ."</td>
                <td>". $row['email'] ."</td>
                <td>". $row['phone'] ."</td>
                <td>". $row['addressLine'] ."</td>
                <td>". $row['postcode']. "</td>";
            }
        }
    }
    if(isset($_POST['submit'])){
        if(!empty($_POST['search'])){
            $search= $_POST['search'];

            $query="SELECT  * FROM  users WHERE userAccountId LIKE '%$search%' OR username LIKE '%$search%' OR firstName LIKE '%$search%' OR lastName LIKE '%$search%'
            OR phone LIKE '%$search%' OR email LIKE '%$search%' OR addressLine LIKE '%$search%' OR postcode LIKE '%$search%';";
            $rows =  $db->query($query);

                if ( $rows && $rows->rowCount()> 0) {
                    while  ($row =  $rows->fetch())	{ 
                        echo "<tr> 
                        <td>". $row['username'] ."</td>
                        <td>". $row['firstName'] ." ". $row['lastName'] ."</td>
                        <td>". $row['email'] ."</td>
                        <td>". $row['phone'] ."</td>
                        <td>". $row['addressLine'] ."</td>
                        <td>". $row['postcode']. "</td>";
                    }
                }
            }else if(!empty($_POST['search'])){
                echo  "<p>0 results for '$search'.</p>\n"; //no match found
            }
    }
    
}
catch (PDOexception $ex){
    echo "Sorry, a database error occurred! <br>";
    echo "Error details: <em>". $ex->getMessage()."</em>";
}

?>
</table>
</div>
</div>

<?php
    include('includes/footer.php');
?>