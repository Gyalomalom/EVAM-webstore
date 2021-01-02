<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>About</title>
<link rel="stylesheet" type="text/css" href="Styles/Style.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
    

    <div class = containerabout>

    <div id="announce"><?php include 'Login-bar.php'; ?></div>
    <nav><?php include 'NavBar.html'; ?> </nav>

    <img src = "Images/david.jpg" id = "con1">
    
    <div id = "content1"><p> David Horvath: Project management and full stack solutions. This website was based on the actual online store ran by David. </p></div>   
        
    
    <div id = "content2"><p> Aleksandar Nasev: Top quality website management. Trained and studied at Fontys University of Applied Sciences. </p></div>
    
    <img src = "Images/alek.jpg" id = "con2">
    
    <footer><?php include 'footer.html'; ?></footer>

    </div>

</body>

</html>