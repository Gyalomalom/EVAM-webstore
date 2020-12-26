<?php
include '../Includes/handlerautoload.inc.php'
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="../Styles/Style.css"></head>
<body>
    <?php include '../Login-bar.php'; ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>

<?php


$controller = new Controller();
$controller->updateInfo($_POST['productid'], $_POST['itemname'], $_POST['price'], $_POST['collection'])

?>
            <form action="../adminpanel.php">
        <input type="submit" value="Click here to update another item." />
        </form>
        </div>
    </body>
</html>