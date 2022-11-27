<?php
    define("TITLE", "Login | G-TWENTY");
    include('includes/adminheader.php');

?>
<div id='customer-header'>
<h1 id='account-title'><img src='images/logo/logo-symbol.png' alt='img' id='account-logo'>G-Twenty Stock</h1>
</div>

<div id="stock-flex-box">


<div id="stock-left">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h5>Search by Brand</h5>

        <select class="form-select" id="stock-model">
                <option id="all">All</option>
                <option id="apple">Apple</option>
                <option id="google">Google</option>
                <option id="huawei">Huawei</option>
                <option id="samsung">Samsung</option>
        </select>

        <h5>Search by Style</h5>
        <div class="form-check" id="stock-checkbox">
        <input class="form-check-input" type="checkbox" id="BP" name="brasspeaks" value="something" checked>
        <label class="form-check-label">Brass Peaks</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="LP" name="laserprisms" value="something" checked>
        <label class="form-check-label">Laser Prisms</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="O" name="Obsidian" value="something" checked>
        <label class="form-check-label">Obsidian</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="P" name="Premonition" value="something" checked>
        <label class="form-check-label">Premonition</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="P" name="checkbox" value="something" checked>
        <label class="form-check-label">Refraction</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="SP" name="snowypeaks" value="something" checked>
        <label class="form-check-label">Snowy Peaks</label>
        </div>

        <div class="slider">
        <h5>Search by Price</h5>
        <input type="range" class="form-range" step="5" id="slider" min="5" max="50" >
        <p>Price Range: £<span id="price"></span></p>
        </div>
        <button type="submit" class="about-button" name="submit">Submit</button>
    </div>
    </form>

<div id='stock-right'>
                <table id='stock-table'>
                <tr>
                <th>Stock</th>
                <th>Product Name</th>
                <th>Model</th>
                <th>SKU</th>
                <th>Price</th>
                <th>Brand</th>
                <th>Style</th>
                <th>Colour Category</th>
                </tr>
<?php
  $all=isset($_POST['all'])?$_POST['all']:false;
  $apple=isset($_POST['apple'])?$_POST['apple']:false;
  $google=isset($_POST['google'])?$_POST['google']:false;
  $huawei=isset($_POST['huawei'])?$_POST['huawei']:false;
  $samsung=isset($_POST['samsung'])?$_POST['samsung']:false;

	include ('connectdb.php');  

	try {
        if(isset($_POST['all'])){
            $query="SELECT  * FROM  products";
            $rows =  $db->query($query);	
            if ( $rows && $rows->rowCount()> 0) {
                
                while  ($row =  $rows->fetch())	{
                    if(isset($_POST['brasspeaks'])){
                        
                       echo "<tr>
                    <td>". $row['stock'] ."</td>
                    <td>". $row['productName'] ."</td>
                    <td>". $row['phoneModel'] ."</td>
                    <td>". $row['SKU'] ."</td>
                    <td>£". $row['price'] ."</td>
                    <td>". $row['caseBrand'] ."</td>
                    <td>". $row['caseStyle'] ."</td>
                    <td>". $row['caseColour'] ."</td>
                    </tr>";
    
                    }
                }
                }else {
            echo  "<p>0 results.</p>\n";
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