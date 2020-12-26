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
$controller-> addProduct($_POST['itemname'], $_POST['price'], $_POST['collection'], $_FILES['file'], $_FILES['file']['name'], $_FILES['file']['tmp_name'], $_FILES['file']['size'], $_FILES['file']['error'], $_FILES['file']['type']);
?>
            <form action="../adminpanel.php">
        <input type="submit" value="Click here to upload a new item." />
        </form>
        </div>
    </body>
</html>