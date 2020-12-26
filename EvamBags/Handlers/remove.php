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
  $controller->deleteProduct($_POST['productid']);

?>
            <form action="../adminpanel.php">
        <input type="submit" value="Click here to remove another item." />
        </form>
        </div>
    </body>
</html>