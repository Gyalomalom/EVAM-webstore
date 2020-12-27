
<ul class="annbar">
  <li><a href = "https://www.facebook.com/evamihalikdesign"><img src = "Images/icons8-facebook-24.png" id = "facebook"></a></li>
  <li><a href = "https://www.instagram.com/evamihalikdesign"><img src = "Images/icons8-instagram-26.png" id = "ig"></a></li>
  
  <li style="float:right"><?php if(isset($_SESSION['userid'])): ?> 
  <a href = "adminpanel.php"><img src = "Images/account.png" id = "login"></a>
<?php else: ?>
  <a href = "adminpanel.php"><img src = "Images/loginbtn.png" id = "login"></a>  
<?php endif; ?></li>
  <p>FREE SHIPPING ON ORDERS ABOVE €50!</p>
</ul>




