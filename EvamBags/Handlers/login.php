<?php 

session_start();
include '../Includes/handlerautoload.inc.php'

?>

<?php
    $view = new View();
    $view->loginAdmin($_POST['username'], $_POST['password']);
?>
            