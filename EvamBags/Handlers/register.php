<?php
require_once('../Classes/User.php');


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
    if (!(empty($nameErr)))
                {
                    echo $nameErr;
                }
    elseif (!(empty($emailErr)))
                {
                    echo $emailErr;
                }
    else
                {   
                    $user = new User();
                    $user->set_firstname($_POST["firstname"]);
                    $user->set_lastname($_POST["lastname"]);
                    $user->set_email($_POST["email"]);
                    $user->set_pass($_POST["password"]);    
                    echo "Welcome" . " " . $user->get_firstname() . " " . $user->get_lastname(). ", you've successfully completed your registration!";
                }
?>
    <form action="../Collection-genome.php">
        <input type="submit" value="Click here to go back to browsing." />
    </form>
</div>

</body>
</html>

