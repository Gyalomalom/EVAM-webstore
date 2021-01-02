
<html>
<head>
    <title>This is the title</title>
<link rel="stylesheet" type="text/css" href="Styles/Style.css">
</head>
<body>
    


    <div class="containerlogin">
	<div id="announce"><?php include 'Login-bar.php'; ?></div>
    <nav><?php include 'NavBar.html'; ?> </nav>
    <div class="containerloginfo">
         <form action="Handlers/login.php" method="post" id = logform>   

    <label for="uname"><b>Username</b></label>
    <input id = unm type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input id = pwd type="password" placeholder="Enter Password" name="password" required>

    <input id = btnlogin type="submit" value = "Login" disabled>
    <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    </form>
	</div>

	<div class="containerpass" style="background-color:#f1f1f1">
    
    <span class="psw"><a href="register.php">Don't have an account yet? Click here to register!</a></span>
    </div>
    <footer><?php include 'footer.html'; ?></footer>

    </div>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src = "FormValidation/FormValidationLogin.js"></script>
    
</body>
</html>