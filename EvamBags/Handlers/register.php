<?php
require_once('../Classes/User.php');


$user = new User();
$user->set_firstname($_POST["firstname"]);
$user->set_lastname($_POST["lastname"]);
$user->set_email($_POST["email"]);
$user->set_pass($_POST["password"]);          
?>

<html>
<head><link rel="stylesheet" type="text/css" href="../Styles/Style.css"></head>
<body>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  Welcome <?php echo $user->get_firstname(); ?><br>
  Your email address is: <?php echo $user->get_email(); ?>
    <form action="../Collection-genome-loggedin.html">
        <input type="submit" value="Click here to go back to browsing." />
    </form>
</div>

</body>
</html>

