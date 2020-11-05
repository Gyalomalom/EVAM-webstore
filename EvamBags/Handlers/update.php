<?php
include_once ('../Includes/dbh.inc.php');
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="../Styles/Style.css"></head>
<body>
    <?php include '../Login-bar.php'; ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>

<?php
if (isset($_POST['submit'])){

$id = $_POST['productid'];
$name = $_POST['itemname'];
$price = $_POST['price'];    
$collection = $_POST['collection'];	

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{

// sql to update a record
$sql = "UPDATE `items` SET `itemname` = '$name', `price` = '$price', `collection` = '$collection' WHERE `items`.`ID` = $id;";

if ($conn->query($sql) === TRUE) {
  echo "Item updated successfully";
} else {
  echo "ID doesn't match any products.";
}
}
}else{
    echo "Please enter an ID.";
}

?>
            <form action="../adminpanel.php">
        <input type="submit" value="Click here to update another item." />
        </form>
        </div>
    </body>
</html>