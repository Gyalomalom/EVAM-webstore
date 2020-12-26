<?php

include '../Includes/handlerautoload.inc.php'

$nameErr = "";
$emailErr = "";
if ((!preg_match("/^[a-zA-Z-' ]*$/",$_POST["firstname"])) or (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["lastname"]))) {
  $nameErr = "Only letters and white space are allowed for the name fields.";
}
else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format. Please enter a valid email.";
}
      
?>

<html>
<head><link rel="stylesheet" type="text/css" href="../Styles/Style.css"></head>
<body>
    <?php include '../Login-bar.php'; ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  
<?php 
    $controller = new Controller();
    $controller->cregisterUser($_POST['email'], $_POST["firstname"], $_POST["lastname"], $_POST["pass"])
?>
    <form action="../login.php">
        <input type="submit" value="Log in." />
    </form>
</div>

</body>
</html>

