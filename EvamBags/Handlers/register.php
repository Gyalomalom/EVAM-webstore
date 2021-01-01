<?php

include '../Includes/handlerautoload.inc.php'
?>

<?php
   $controller = new Controller();
    $result = $controller->registerUser($_POST['email'], $_POST["firstname"], $_POST["lastname"], $_POST["password"]);
if (empty($result)){
    $message = "You've registered successfully. You may log in now.";
    header('Refresh: 2; url=../login.php'); 
    exit($message);
}
else {
    $message = "There were errors with your registration. Please make sure all information is valid.";
    header('Refresh: 5; url=../register.php'); 
    exit($message);
}

?>

