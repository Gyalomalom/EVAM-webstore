<?php

require_once('../Classes/User.php');

$user = new User();
$user->set_firstname("John");
$user->set_lastname("Doe");
$user->set_email("johndoe@gmail.com");
$user->set_pass("WhoamI88");

$user1 = new User();
$user1->set_firstname(["Miranada"]);
$user1->set_lastname(["Keyes"]);
$user1->set_email(["mkeyes@gmail.com"]);
$user1->set_pass(["WeJustGettinStarted"]);

$user2 = new User();
$user2->set_firstname(["Mazo"]);
$user2->set_lastname(["Chris"]);
$user2->set_email(["kriszomazo@gmail.com"]);
$user2->set_pass(["Nyalomalom"]);


?>
<html>
    <head><link rel="stylesheet" type="text/css" href="../Styles/Style.css"></head>
    <body>
        <?php include 'Login-bar.php'; ?>
        <div class = "alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <?php
                if (($user->get_email()==($_POST['username'])) and ($user->get_pass()==($_POST['password'])))
                {
                    echo "Welcome" . " " . $user->get_firstname() . " " . $user->get_lastname(). "!";
                }
                elseif (($user1->get_email()==($_POST['username'])) and ($user1->get_pass()==($_POST['password'])))
                {
                    echo "Welcome" . " " . $user1->get_firstname() . " " . $user1->get_lastname(). "!";
                }
                elseif (($user2->get_email()==($_POST['username'])) and ($user2->get_pass()==($_POST['password'])))
                {
                    echo "Welcome" . " " . $user2->get_firstname() . " " . $user2->get_lastname() . "!";
                }
                else
                {
                    echo "Username or password didn't match. Please make sure the entered e-mail address and password are correct.";

                }
        ?>
        <form action="../Collection-genome.php">
        <input type="submit" value="Click here to go back to browsing." />
        </form>
        </div>
    </body>
</html>