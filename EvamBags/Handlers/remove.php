<?php
include_once ('../Includes/dbh.inc.php');

if (isset($_POST['submit'])){

$id = $_POST['productid'];
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="../Styles/Style.css"></head>
<body>
    <?php include '../Login-bar.php'; ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>

<?php
    
	

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM items WHERE ID = $id;";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "ID doesn't match any products.";
}

?>
            <form action="../Admin-upload-page.php">
        <input type="submit" value="Click here to remove another item." />
        </form>
        </div>
    </body>
</html>