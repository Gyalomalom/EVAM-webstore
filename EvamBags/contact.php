<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact us</title>
<link rel="stylesheet" type="text/css" href="Styles/Style.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
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

    <footer><?php include 'footer.html'; ?></footer>
  </div>
</body>
</html>