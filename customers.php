<?php
    define("TITLE", "Login | G-TWENTY");
    include('includes/adminheader.php');

?>
<div id='customer-header'>
<h1 id='account-title'><img src='images/logo/logo-symbol.png' alt='img' id='account-logo'>G-Twenty Customer List</h1>
</div>

<?php
/* Prints the information of all customers */

include ('connectdb.php'); 

try{
$query = "SELECT * FROM users";
$rows =  $db->query($query);

if ($rows && $rows->rowCount()> 0) {
    echo "<table id='customer-table'>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address Line</th>
                <th>Postcode</th>
            </tr>";
            while  ($row =  $rows->fetch())	{
                echo "<tr> <td>". $row['username'] ."</td>";
                echo "<td>". $row['firstName'] ." ". $row['lastName'] ."</td>";
                echo "<td>". $row['email'] ."</td>";
                echo "<td>". $row['phone'] ."</td>";
                echo "<td>". $row['addressLine'] ."</td>";
                echo "<td>". $row['postcode'];
                echo "</td> </tr>";

            }
        }
        else {
            echo "
            <h3>Database ERROR please get in touch with IT on 01274388838</h3>";
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