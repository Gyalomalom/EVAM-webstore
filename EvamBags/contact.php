<!DOCTYPE html>
<html>
<head>
    <title>Contact us</title>
<link rel="stylesheet" type="text/css" href="Styles/Style.css">
</head>
<body>
    <div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Email address</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
<?php include 'ContactInfo.php'?>
</body>
<footer>HTML and CSS for website written by Aleksandar Nasev and David Horvath.</footer>
</html>