<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Designer handbags</title>
<link rel="stylesheet" type="text/css" href="Styles/Style.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<div class="container">
  <div id="announce"><?php include 'Login-bar.php'; ?></div>
  <nav><?php include 'NavBar.html'; ?> </nav>

<!-- slideshow code is heavily based on the example slideshow provided by w3 schools -->
<!-- Slideshow container -->
<div class="slideshow-container" id = banner>

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="Images/banner.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="Images/bannerslide2.png" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="Images/bannerslide3.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>



  <div id="annbar">  </div>

  <img src = "Images/ph2.png" id="con1"/>
  <div id="content2"><p>Sleek and unique
                     Timeless and compeletely unique design combined with amazing practicality for your everday adventures.</p></div>   
  <div id="content3"><p>Vegan and ethical Each bag hand made in Europe using 100% vegan and high quality materials.</p></div>
						
  <img src = "Images/placeholder1.png" id="con4"/>

  <img src = "Images/con5.jpg" id="con5"/>

  <div id="content5"><p>Ultra long life
                        Our extremely high manufacturing standards ensure that your bag will always there for you.</p>
  </div>

  
  <footer><?php include 'footer.html'; ?></footer>
</div>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src = "additionalJS/slideshow.js"></script>
</html>
