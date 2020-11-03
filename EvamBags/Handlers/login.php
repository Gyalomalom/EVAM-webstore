<?php

require_once('../Classes/User.php');
include_once ('../Includes/dbh.inc.php');

$sql = "SELECT * FROM users;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows ($result);

$hasMatch = 0;



?>
<html>
    <head><link rel="stylesheet" type="text/css" href="../Styles/Style.css"></head>
    <body>
        <?php include '../Logout-Cart-bar.php'; ?>
        <div class = "alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <?php
            if ($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result))
                {
                    $user = new User();
                    $user->set_firstname($row['firstname']);
                    $user->set_lastname($row['lastname']);
                    $user->set_email($row['email']);
                    $user->set_pass($row['pass']);
                    
                    if (($user->get_email()==($_POST['username'])) and ($user->get_pass()==($_POST['password'])))
                    {
                        echo "Welcome" . " " . $user->get_firstname() . " " . $user->get_lastname(). "!";
                        $_SESSION['userid'] = $row['email'];
                        $hasMatch = 1;
                    }
                    elseif (($user->get_email()==($_POST['username'])) and !($user->get_pass()==($_POST['password'])))
                    {
                        echo "Please make sure you've entered the correct password.";
                        $hasMatch = 1;
                    }
                }
                if ($hasMatch == 0){
                 echo "We couldn't find you in our database. Please make sure you've registered before trying to log in!";
                }
                
            }
        ?>
        <form action="../Collection-genome.php">
        <input type="submit" value="Click here to go back to browsing." />
        </form>
        </div>
    </body>
</html>