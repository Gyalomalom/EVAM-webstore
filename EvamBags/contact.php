<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact us</title>
<link rel="stylesheet" type="text/css" href="Styles/Style.css">
</head>
<body>
  <div class="containercontact">

    <div id="announce"><?php include 'Login-bar.php'; ?></div>
    <nav><?php include 'NavBar.html'; ?> </nav>
    <div class="containermessage">
    <form action="action_page.php">

    <label for="fname">Your name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Email address</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

    </form>
    </div>

    <footer>HTML and CSS for website written by Aleksandar Nasev and David Horvath.</footer>
  </div>
</body>
</html>